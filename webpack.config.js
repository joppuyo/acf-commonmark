var webpack = require('webpack');

module.exports = {
  entry: {
    script: './assets/src/js/index.js',
  },
  output: {
    path: __dirname + '/assets/dist',
    filename: '[name].bundle.js',
  },
  resolve: {
    extensions: ['*', '.js'],
  },
  plugins: [],
  mode: 'development',
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['env'],
          },
        },
      },
    ],
  },
};
