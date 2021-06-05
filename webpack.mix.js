const mix = require("laravel-mix");

mix.sass("resources/sass/main1.scss", "public/css/index.scss")
    .sass("resources/sass/main2.scss", "public/css/feed.scss")
    .sass("resources/sass/main3.scss", "public/css/template.scss")
    .sass("resources/sass/main4.scss", "public/css/painel.scss")
    .sass("resources/sass/main5.scss", "public/css/criarQuestoes.scss")
    .sass("resources/sass/main6.scss", "public/css/viewQuestoes.scss")
    .js("resources/js/pop-up.js", "public/js/pop-up.js")
    .js("resources/js/pop-up2.js", "public/js/pop-up2.js")
    .js("resources/js/form-edite.js", "public/js/form-edite.js")
    .js("resources/js/form-edite2.js", "public/js/form-edite2.js");
