const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path')

module.exports = {
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'app.css',
    })
  ],
  resolve: {
    alias: {
      vue: path.resolve(__dirname, 'node_modules/vue/dist/vue.min.js'),
    }
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              hmr: true
            }
          },
          "css-loader"
        ]
      },
    ],
  },
};