const multer = require('multer');

function errorHandler(err, _req, res, next) {
  if (!err) return next();

  if (err instanceof multer.MulterError) {
    return res.status(400).json({
      type: 'UploadFile',
      error: 1,
      message: err.message,
      response: { UploadFile: [] }
    });
  }

  if (err.message && (err.message.startsWith('Only image uploads') || err.message.startsWith('CORS blocked'))) {
    return res.status(400).json({ error: err.message });
  }

  return next(err);
}

module.exports = errorHandler;
