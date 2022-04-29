require('dotenv').config()
const { VueLoaderPlugin } = require('vue-loader')

module.exports = {
    mode: 'development',
    entry: './vue/index.js',
    resolve: {
        alias: {
            vue: 'vue/dist/vue.js'
        }
    },
    output: {
        path: __dirname + '/js',
        filename: 'app.min.js'
    },
    module: {
        rules: [
            {
                test: /\.vue$/,
                use: ['vue-loader']
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            }
        ]
    },
    plugins: [new VueLoaderPlugin()]
}
