const path = require("path");
const webpack = require("webpack");
const autoprefixer = require("autoprefixer");
// const ExtractTextPlugin = require('extract-text-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  mode: "development",
  context: path.resolve(__dirname, "."),
  entry: {
    "modules/hero-banner/":
      "./modules/hero-banner/js/frontendExpanded.js",
    "modules/features/":
      "./modules/features/js/frontendExpanded.js",
    "modules/service-works/":
      "./modules/service-works/js/frontendExpanded.js",
    "modules/calling/":
      "./modules/calling/js/frontendExpanded.js",
    "modules/feedback/":
      "./modules/feedback/js/frontendExpanded.js",
    "modules/about/":
      "./modules/about/js/frontendExpanded.js",
    "modules/content-text/":
      "./modules/content-text/js/frontendExpanded.js",
    "modules/hero-banner-single/":
      "./modules/hero-banner-single/js/frontendExpanded.js",
    "modules/slider/":
      "./modules/slider/js/frontendExpanded.js",
    "modules/title-text/":
      "./modules/title-text/js/frontendExpanded.js",
  },
  output: {
    filename: "./[name]/js/frontend.js",
    path: path.resolve(__dirname),
  },
  resolve: {
    modules: [path.resolve(__dirname, "./src"), "node_modules"],
  },
  devtool: "source-map",
  module: {
    rules: [
      {
        test: /\.(sass|scss|css)$/,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: "css-loader",
            options: {
              sourceMap: true,
              minimize: true,
            },
          },
          {
            loader: "postcss-sass-loader",
            options: {
              plugins: () => [
                require("autoprefixer")({
                  browsers: ["> 1%", "last 2 versions"],
                }),
              ],
            },
          },
          {
            loader: "sass-loader",
            options: { sourceMap: true },
          },
        ],
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: [
          {
            loader: "babel-loader",
            options: {
              presets: ["es2015"],
            },
          },
        ],
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({ filename: '[name]/css/frontend.css' }),
    //new webpack.optimize.UglifyJsPlugin()
  ],
  watchOptions: {
    poll: true,
    ignored: /node_modules/
  }
}; 