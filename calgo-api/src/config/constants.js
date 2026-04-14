const CATEGORY_ORDER = [
  'Syntax', 'IO', 'Binary & Memory', 'System Info', 'Files & Folders',
  'String', 'Date & Time', 'Table & Field', 'Matrix Operation', 'Mathematics',
  'Linear Algebra', 'Geometry', 'Integration', 'Polynomial & BSpline',
  'Optimization & Equation Solver', 'Data Function', 'Statistics', 'Regression',
  'Machine Learning', 'Finance', 'Signal Processing', 'Image Processing',
  'Database Functions', 'Others'
];

const FUNC_COLUMNS = [
  'name_val', 'sort_description', 'main_categori', 'sub_catagori',
  ...Array.from({ length: 15 }, (_, i) => `syntax${i}`),
  ...Array.from({ length: 15 }, (_, i) => `description${i}`),
  ...Array.from({ length: 15 }, (_, i) => `examples${i}`),
  ...Array.from({ length: 15 }, (_, i) => `ExampleDescription${i}`),
  ...Array.from({ length: 20 }, (_, i) => `input${i}`),
  ...Array.from({ length: 20 }, (_, i) => `input_type${i}`),
  ...Array.from({ length: 20 }, (_, i) => `input_desc${i}`),
  ...Array.from({ length: 20 }, (_, i) => `output${i}`),
  ...Array.from({ length: 20 }, (_, i) => `output_type${i}`),
  ...Array.from({ length: 20 }, (_, i) => `output_desc${i}`),
  'api', 'algorithms',
  ...Array.from({ length: 12 }, (_, i) => `references${i}`),
  ...Array.from({ length: 12 }, (_, i) => `link${i}`)
];

// Pre-built map: JS POST key (no underscores) -> DB column name
const JS_TO_DB = {};
FUNC_COLUMNS.forEach(col => {
  const jsKey = col.replace(/_/g, '');
  JS_TO_DB[jsKey] = col;
});
JS_TO_DB['nameval'] = 'name_val';
JS_TO_DB['sortdescription'] = 'sort_description';
JS_TO_DB['maincategori'] = 'main_categori';
JS_TO_DB['subcatagori'] = 'sub_catagori';

// Pre-built reverse map: DB column -> JS POST key (O(1) lookups)
const DB_TO_JS = {};
for (const [jsKey, dbCol] of Object.entries(JS_TO_DB)) {
  DB_TO_JS[dbCol] = jsKey;
}

module.exports = { CATEGORY_ORDER, FUNC_COLUMNS, JS_TO_DB, DB_TO_JS };
