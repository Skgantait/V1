const express = require('express');
const path = require('path');

require('dotenv').config();

const corsMiddleware = require('./src/middleware/cors-options');
const errorHandler = require('./src/middleware/error-handler');
const funclistRoutes = require('./src/routes/funclist.routes');
const searchRoutes = require('./src/routes/search.routes');
const funcRoutes = require('./src/routes/func.routes');
const uploadRoutes = require('./src/routes/upload.routes');
const { uploadDir } = require('./src/config/upload');

const app = express();
const PORT = Number(process.env.PORT) || 3200;

// === Middleware ===
app.use(corsMiddleware);
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Serve static admin files
const adminDir = path.resolve(__dirname, '..', 'admin');
app.use('/admin', express.static(adminDir));
app.use('/upload', express.static(uploadDir));

// === Routes ===
app.use('/api/upload', uploadRoutes);
app.use('/api/funclist', funclistRoutes);
app.use('/api/search', searchRoutes);
app.use('/api/func', funcRoutes);

// Error handling
app.use(errorHandler);

// Redirect root to admin
app.get('/', (_req, res) => res.redirect('/admin/index.html'));

const server = app.listen(PORT, () => {
  console.log(`============================================`);
  console.log(`  Calgoric Admin Server (Node/Express)`);
  console.log(`============================================`);
  console.log(`  Admin UI:  http://localhost:${PORT}/admin/`);
  console.log(`  API:       http://localhost:${PORT}/api`);
  console.log(`============================================`);
});

server.on('error', (err) => {
  if (err && err.code === 'EADDRINUSE') {
    console.error(`Port ${PORT} is already in use.`);
    console.error(`A server instance is likely already running at http://localhost:${PORT}/admin/`);
    process.exit(1);
    return;
  }

  console.error('Server startup error:', err.message);
  process.exit(1);
});
