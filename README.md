# Composer Freeze Versions

> Freeze versions of your composer's dependencies.

This command is especially useful while making a site live. It allows you to grab latest versions of your composer.lock which you tested you site against.

If you would like to go back to a staging status, use another command : [Make Stable](https://github.com/MaximeCulea/Composer-Stable-Versions) to set versions as stable.

# What?
Your dependencies into composer.json will be automatically be changed from `"wpackagist-plugin/wordpress-seo":"@stable"` to `"wpackagist-plugin/wordpress-seo":"6.2"` 

![See how it works](https://user-images.githubusercontent.com/5576409/71735719-721cb700-2e4f-11ea-9b49-8694b5ededc2.gif)

# How?
## 1 - Add to [Composer](http://composer.rarst.net/)

- From [Packagist](https://packagist.org/packages/maximeculea/composer-freeze-versions)
  - Do `composer require maximeculea/composer-freeze-versions`

- From [Github](https://github.com/MaximeCulea/Composer-Freeze-Versions)
  - Add into your composer json `{ "type": "vcs", "url": "https://github.com/MaximeCulea/Composer-Freeze-Versions" }`
  - Include `"maximeculea/composer-freeze-versions": "dev-master"` in your composer file as require
  - Before use, launch `composer update`

## 2 - Run command 
Then you can simply launch `composer versions-freeze`!

# License
Composer Freeze Versions is licensed under the [GPL3+](LICENSE.md).
