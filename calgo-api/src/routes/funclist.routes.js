const { Router } = require('express');
const funclistService = require('../services/funclist.service');

const router = Router();

router.get('/', async (_req, res) => {
  try {
    const funclist = await funclistService.getFuncList();
    res.json(funclist);
  } catch (err) {
    console.error('DB error:', err.message);
    res.status(500).json({ error: 'Database connection failed' });
  }
});

module.exports = router;
