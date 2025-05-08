const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const { CleanWebpackPlugin } = require('clean-webpack-plugin')
const TerserPlugin = require('terser-webpack-plugin')
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin')
const fs = require('fs')
const webpack = require('webpack');

module.exports = {
  mode: 'production',
  entry: './src/index.js',
  output: {
    filename: 'bundle.[contenthash].js',
    path: path.resolve(__dirname, './public/assets/dist'),
    clean: true,
  },
  module: {
    rules: [
      {
        test: /\.css$/i,
        use: [MiniCssExtractPlugin.loader, 'css-loader'],
      },
    ],
  },
  plugins: [
    new CleanWebpackPlugin(),
    new MiniCssExtractPlugin({
      filename: 'styles.[contenthash].css',
    }),
    {
      // Plugin manual para salvar nomes dos arquivos com hash em um JSON
      apply: (compiler) => {
        compiler.hooks.afterEmit.tap('ManifestPlugin', (compilation) => {
          const assets = Object.keys(compilation.assets).reduce((acc, name) => {
            if (name.endsWith('.js')) acc.js = name
            if (name.endsWith('.css')) acc.css = name
            return acc
          }, {})
          fs.writeFileSync('./public/assets/dist/manifest.json', JSON.stringify(assets, null, 2))
        })
      },
    },
    new webpack.ProvidePlugin({
        Popper: ['@popperjs/core', 'default'],
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery',
    }),
  ],
  optimization: {
    minimize: true,
    minimizer: [new TerserPlugin(), new CssMinimizerPlugin()],
  },
}