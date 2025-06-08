// webpack.config.js
const path = require('path');

module.exports = {
  entry: './src/index.js', // or your actual file
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js',
  },
  mode: 'development', // or 'production'
};
