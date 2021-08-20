const mix = require('laravel-mix')
const source = 'resources';
const distribute = 'resources/dist';

mix.setPublicPath(`./${distribute}`)

mix.js(`${source}/js/app.js`, `${distribute}/js`).version()
