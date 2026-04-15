const { body, query, validationResult } = require('express-validator');

// Shared handler that returns 400 on validation failures
function handleValidation(req, res, next) {
  const errors = validationResult(req);
  if (!errors.isEmpty()) {
    return res.status(400).json({ error: 1, message: errors.array()[0].msg, errors: errors.array() });
  }
  next();
}

// POST /api/func – insert
const validateFuncInsert = [
  body('nameval')
    .trim()
    .notEmpty().withMessage('Function name is required.')
    .isLength({ max: 255 }).withMessage('Function name must be 255 characters or fewer.'),
  body('maincategori')
    .optional()
    .isLength({ max: 255 }).withMessage('Category must be 255 characters or fewer.'),
  body('sortdescription')
    .optional()
    .isLength({ max: 2000 }).withMessage('Description must be 2000 characters or fewer.'),
  handleValidation,
];

// PUT /api/func – update
const validateFuncUpdate = [
  body('srlno')
    .trim()
    .notEmpty().withMessage('Record ID (srlno) is required.')
    .isInt({ min: 1 }).withMessage('Record ID must be a positive integer.'),
  body('nameval')
    .trim()
    .notEmpty().withMessage('Function name is required.')
    .isLength({ max: 255 }).withMessage('Function name must be 255 characters or fewer.'),
  body('maincategori')
    .optional()
    .isLength({ max: 255 }).withMessage('Category must be 255 characters or fewer.'),
  body('sortdescription')
    .optional()
    .isLength({ max: 2000 }).withMessage('Description must be 2000 characters or fewer.'),
  handleValidation,
];

// GET /api/search?q=
const validateSearch = [
  query('q')
    .trim()
    .notEmpty().withMessage('Search query is required.')
    .isLength({ max: 200 }).withMessage('Search query must be 200 characters or fewer.'),
  handleValidation,
];

module.exports = { validateFuncInsert, validateFuncUpdate, validateSearch };
