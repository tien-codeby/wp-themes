require('dotenv').config()
const { VueLoaderPlugin } = require('vue-loader')

module.exports = {
    mode: process.env.NODE_ENV === 'production' ? 'production' : 'development',
    entry: './vue/index.js',
    resolve: {
        alias: {
            vue: process.env.NODE_ENV === 'production' ? 'vue/dist/vue.min.js' : 'vue/dist/vue.js'
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
