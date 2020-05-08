const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  entry: {
    main: './src/index.js',
    style: './src/css/app.scss',
    form: './src/css/form.scss',
    product2: './src/css/product2.scss',
  },
  plugins: [new MiniCssExtractPlugin({
    filename: '[name].css',
  })],
  resolve: {
    alias: {
      vue: path.resolve(__dirname, 'node_modules/vue/dist/vue.min.js'),
    }
  },
  module: {
    rules: [
      {
        test: /\.s[ac]ss$/i,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          'css-loader',
          "sass-loader",
        ]
      },
    ],
  },
};