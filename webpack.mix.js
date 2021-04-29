const mix = require('laravel-mix');

 mix.styles(
    'resources/css/main1.css'
    ,'public/css/index.css',
)
.styles(
    'resources/css/main2.css',
    'public/css/feed.css',
)
.styles(
    'resources/css/main3.css',
    'public/css/template.css'
)
