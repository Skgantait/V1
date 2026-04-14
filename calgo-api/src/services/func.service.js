const pool = require('../config/database');
const { FUNC_COLUMNS, DB_TO_JS } = require('../config/constants');

function getBlankTemplate() {
  const blank = { srlno: '' };
  FUNC_COLUMNS.forEach(col => { blank[col] = ''; });
  return blank;
}

async function getByName(name) {
  const [rows] = await pool.query('SELECT * FROM func_details WHERE name_val = ?', [name]);
  return rows.length > 0 ? rows[0] : null;
}

function extractValues(data) {
  return FUNC_COLUMNS.map(col => {
    const jsKey = DB_TO_JS[col] || col;
    return data[jsKey] || '';
  });
}

async function insert(data) {
  const nameval = (data.nameval || '').trim();
  if (!nameval) {
    return { error: 1, message: 'Function name is empty.', response: '' };
  }

  const [existing] = await pool.query('SELECT name_val FROM func_details WHERE name_val = ?', [nameval]);
  if (existing.length > 0) {
    return { error: 1, message: `Function Name "${nameval}" Already exist in the database.`, response: '' };
  }

  const placeholders = FUNC_COLUMNS.map(() => '?').join(',');
  const values = extractValues(data);
  const sql = `INSERT INTO func_details (${FUNC_COLUMNS.join(',')}) VALUES (${placeholders})`;
  const [result] = await pool.query(sql, values);

  return { error: 0, message: `New Function "${nameval}" insert successfully.`, response: result.insertId.toString() };
}

async function update(data) {
  const nameval = (data.nameval || '').trim();
  const srlno = parseInt(data.srlno, 10);
  if (!nameval || !srlno) {
    return { error: 1, message: 'Function name or srlno is empty.', response: '' };
  }

  const setClause = FUNC_COLUMNS.map(col => `${col} = ?`).join(', ');
  const values = extractValues(data);
  values.push(srlno);

  const sql = `UPDATE func_details SET ${setClause} WHERE srlno = ?`;
  await pool.query(sql, values);

  return { error: 0, message: `Function "${nameval}" update successfully.`, response: srlno.toString() };
}

module.exports = { getBlankTemplate, getByName, insert, update };
