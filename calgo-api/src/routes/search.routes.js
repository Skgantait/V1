const { Router } = require('express');
const searchService = require('../services/search.service');
const { validateSearch } = require('../middleware/validators');

const router = Router();

router.get('/', validateSearch, async (req, res) => {
  try {
    const key = (req.query.q || '').trim();
    const result = await searchService.search(key);
    res.json(result);
  } catch (err) {
    console.error('Search DB error:', err.message);
    res.status(500).json({ error: 'Database connection failed' });
  }
});

module.exports = router;
