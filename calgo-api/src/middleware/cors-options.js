const cors = require('cors');

const allowedOrigins = (process.env.CORS_ORIGIN || 'http://localhost:4200,http://localhost:3200')
  .split(',')
  .map(origin => origin.trim())
  .filter(Boolean);

const corsMiddleware = cors({
  origin: (origin, callback) => {
    if (!origin || allowedOrigins.includes(origin)) {
      return callback(null, true);
    }
    return callback(new Error(`CORS blocked for origin: ${origin}`));
  }
});

module.exports = corsMiddleware;
