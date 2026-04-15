const pool = require('../config/database');
const { CATEGORY_ORDER } = require('../config/constants');

async function getFuncList() {
  const [rows] = await pool.query(
    'SELECT name_val, main_categori FROM func_details ORDER BY main_categori'
  );

  const funclist = {};
  for (const cat of CATEGORY_ORDER) {
    funclist[cat] = [];
  }

  for (const row of rows) {
    const cat = (row.main_categori || '').trim().replace(/\\?&amp;/g, '&');
    if (!funclist[cat]) {
      funclist[cat] = [];
    }
    funclist[cat].push(row.name_val);
  }

  return funclist;
}

module.exports = { getFuncList };
