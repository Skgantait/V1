const pool = require('../config/database');
const { CATEGORY_ORDER } = require('../config/constants');

async function search(key) {
  if (!key) {
    return { count: 0, results: [] };
  }

  let sql, params;

  if (key === 'All') {
    sql = 'SELECT name_val, main_categori, sort_description FROM func_details ORDER BY name_val';
    params = [];
  } else if (CATEGORY_ORDER.includes(key)) {
    sql = `SELECT name_val, main_categori, sort_description FROM func_details
           WHERE main_categori = ? OR name_val LIKE ?
           ORDER BY name_val`;
    params = [key, key + '%'];
  } else if (key.length < 3) {
    sql = `SELECT name_val, main_categori, sort_description FROM func_details
           WHERE name_val LIKE ? OR main_categori LIKE ?
           ORDER BY name_val`;
    params = [key + '%', key + '%'];
  } else {
    sql = `SELECT name_val, main_categori, sort_description FROM func_details
           WHERE name_val LIKE ? OR main_categori LIKE ? OR sort_description LIKE ?
           ORDER BY name_val`;
    params = [key + '%', key + '%', '%' + key + '%'];
  }

  const [rows] = await pool.query(sql, params);
  return { count: rows.length, results: rows };
}

module.exports = { search };
