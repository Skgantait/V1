const { Router } = require('express');
const funcService = require('../services/func.service');
const { validateFuncInsert, validateFuncUpdate } = require('../middleware/validators');

const router = Router();

router.get('/new', (_req, res) => {
  res.json(funcService.getBlankTemplate());
});

router.get('/:name', async (req, res) => {
  try {
    const name = req.params.name;
    const row = await funcService.getByName(name);
    if (!row) {
      return res.status(404).json({ error: 'Function not found' });
    }
    res.json(row);
  } catch (err) {
    console.error('GET func error:', err.message);
    res.status(500).json({ error: 'Database error' });
  }
});

router.post('/', validateFuncInsert, async (req, res) => {
  try {
    const result = await funcService.insert(req.body);
    res.json(result);
  } catch (err) {
    console.error('INSERT func error:', err.message);
    res.json({ error: 1, message: 'Oops! Something went wrong. ' + err.message, response: '' });
  }
});

router.put('/', validateFuncUpdate, async (req, res) => {
  try {
    const result = await funcService.update(req.body);
    res.json(result);
  } catch (err) {
    console.error('UPDATE func error:', err.message);
    res.json({ error: 1, message: 'Oops! Something went wrong. ' + err.message, response: '' });
  }
});

module.exports = router;
