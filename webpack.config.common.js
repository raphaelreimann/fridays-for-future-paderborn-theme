const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const glob = require('glob');

module.exports = {
  mode: "development",
  context: path.resolve(__dirname, "assets"),
  output: {
    filename: "main.bundle.js",
    path: path.resolve(__dirname, "assets/dist"),
  },
  plugins: [new MiniCssExtractPlugin(
    {
      filename: 'main.css'
    }
  ), new ImageminPlugin({
    externalImages: {
      context: '.',
      sources: glob.sync('assets/src/images/**/*.{png,jpg,jpeg,gif,svg}'),
      destination: 'assets/dist/images',
      fileName: '[name].[ext]'
    }
  })],
  module: {
    rules: [
    //   {
    //   test: /\.css$/,
    //   use: [
    //     MiniCssExtractPlugin.loader,
    //     {
    //       loader: "css-loader",
    //       options: {
    //         importLoaders: 1,
    //       },
    //     },
    //     {
    //       loader: "postcss-loader",
    //       options: {
    //         postcssOptions: {
    //           plugins: [
    //             [
    //               require("postcss-simple-vars"),
    //               require("postcss-nested"),
    //               require("autoprefixer"),
    //             ],
    //           ],
    //         },
    //       },
    //     },
    //   ],
    // }, 
  {
      test: /\.scss$/,
      use: [
          MiniCssExtractPlugin.loader,
          {
            loader: 'css-loader'
          },
          {
            loader: 'sass-loader',
            options: {
              sourceMap: true,
              // options...
            }
          }
        ]
    }
  ],
  },
};