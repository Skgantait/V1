const { Router } = require('express');
const path = require('path');
const { upload } = require('../config/upload');

const router = Router();

router.post('/', upload.array('file'), (req, res) => {
  if (!req.files || req.files.length === 0) {
    return res.json({ type: 'UploadFile', error: 1, message: 'No file found', response: { UploadFile: [] } });
  }
  const result = req.files.map(f => ({
    file_name: path.parse(f.filename).name,
    url: f.filename,
    msg: '',
    responseCode: 0
  }));
  res.json({ type: 'UploadFile', error: 0, message: '', response: { UploadFile: result } });
});

module.exports = router;
