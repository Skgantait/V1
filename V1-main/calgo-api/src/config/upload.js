const multer = require('multer');
const path = require('path');
const fs = require('fs');
const crypto = require('crypto');

const uploadDir = path.resolve(__dirname, '..', '..', '..', 'upload');
if (!fs.existsSync(uploadDir)) fs.mkdirSync(uploadDir, { recursive: true });

const allowedMimeTypes = new Set([
  'image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/svg+xml'
]);
const allowedExtensions = new Set(['.jpg', '.jpeg', '.png', '.gif', '.webp', '.svg']);

const storage = multer.diskStorage({
  destination: (_req, _file, cb) => cb(null, uploadDir),
  filename: (_req, file, cb) => {
    const ext = path.extname(file.originalname || '').toLowerCase();
    const unique = `${Date.now()}-${crypto.randomBytes(8).toString('hex')}`;
    cb(null, `${unique}${ext}`);
  }
});

const upload = multer({
  storage,
  limits: { fileSize: 10 * 1024 * 1024 },
  fileFilter: (_req, file, cb) => {
    const ext = path.extname(file.originalname || '').toLowerCase();
    if (allowedMimeTypes.has(file.mimetype) && allowedExtensions.has(ext)) {
      return cb(null, true);
    }
    return cb(new Error('Only image uploads are allowed (jpg, jpeg, png, gif, webp, svg).'));
  }
});

module.exports = { upload, uploadDir };
