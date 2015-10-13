<img src="https://avatars2.githubusercontent.com/u/514566?v=3&u=4615dfc4970d93dea5d3eaf996b7903ee6e24e20&s=140" align="right" />
---
![Logo of Screencapture](docs/logo-large.png)  
The **lightweight** PHP-Framework for **high-performance** websites.  

| [![Build Status](https://img.shields.io/travis/clickalicious/Screencapture.svg)](https://travis-ci.org/clickalicious/Screencapture) 	| [![Scrutinizer](https://img.shields.io/scrutinizer/g/clickalicious/Screencapture.svg)](https://scrutinizer-ci.com/g/clickalicious/Screencapture/) 	| [![Code Coverage](https://scrutinizer-ci.com/g/clickalicious/Screencapture/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/clickalicious/Screencapture/?branch=master) 	| [![Packagist](https://img.shields.io/packagist/l/clickalicious/Screencapture.svg?style=flat)](http://opensource.org/licenses/BSD-3-Clause) 	|
|---	|---	|---	|---	|
| [![GitHub issues](https://img.shields.io/github/issues/clickalicious/doozr.svg?style=flat)](https://github.com/clickalicious/Screencapture/issues) 	| [![Stories in Ready](https://badge.waffle.io/clickalicious/Screencapture.png?label=ready&title=Ready)](https://waffle.io/clickalicious/Screencapture)  	| [![GitHub release](https://img.shields.io/github/release/clickalicious/Screencapture.svg?style=flat)](https://github.com/clickalicious/Screencapture/releases) 	| [![Analytics](https://ga-beacon.appspot.com/UA-905793-10/clickalicious/readme?flat)](https://doozr.readme.io/docs)  	|


## Table of Contents

- [Features](#features)
- [Requirements](#requirements)
- [Philosophy](#philosophy)
- [Versioning](#versioning)
- [Install »](https://github.com/clickalicious/Screencapture/blob/master/docs/INSTALL.md)
- [License »](LICENSE)


## Features

 - High performance (developed using profiler)
 - Ultra fast routing, caching and request processing
 - Lightweight and high quality code base (following *PSR-0,1,2,3,4,7*)
 - Fully *PSR-7* compatible
 - Middleware Layer support (*relay\relay*)
 - Integrated logger subsystem
 - Clean & well documented code
 - Unit-tested


## Requirements

 - PHP >= 5.5 (compatible up to PHP version 7)


## Philosophy

`Screencapture` is the **lightweight** PHP-Framework for **high-performance** applications. It follows the `convention over configuration`-principle. `Screencapture` comes with the right set of core *Services* to build, test and deploy **high-scalable** and **stable** web-applications. `Screencapture` supports the **CLI**, **CGI** as well as PHP's **Internal Webserver** *SAPI*. A ultra fast routing mechanism helps you building flexible web-applications. But **Screencapture** has so much more to offer! Try it, run it ... ♥ it ;)


## Services

`Screencapture` is shipped with the following high quality core *Services*:

 - `Acl` (CRUD Secured Objects)
 - `Cache` (Interface to Filesystem + Memcached)
 - `Config` (Configreader mit Caching support for INI, JSON)
 - `Crypt` (Secure En-/Decryption)
 - `Filesystem` (Filesystem wrapper with virtual FS support)
 - `Form` (HTML5 secure form handler + validation)
 - `Http` (Wrapper to CURL)
 - `I18n` (Internationalization + Localization support with gettext emulation)
 - `Password` (Password generator + validator)
 - `Session` (Secure and OO Session interface)
 - `Template` (Interface to PHPTal)

100% `composer` support. For any missing features we can make use of [packagist.org][1]. So just put the required package(s) in your `composer.json` and use them right after installation without need to include `.../vendor/autoload.php` manually. `Screencapture` detects the `composer` packages and includes the autoloader of `composer`. 

This mechanism is our pragmatic approach as bridge to all the software & libraries out there. Of course you can build your very own *Services* and load them the same way as you would load a `Screencapture` *Service* - but you are not required to do so. In other words: If you just want to use some smart library then pick it by using `composer` - but if you want to build your own piece of library then you should build a `Screencapture` *Service* (which itself can use Composer as well). 


## Versioning

For a consistent versioning we decided to make use of `Semantic Versioning 2.0.0` http://semver.org. Its easy to understand, very common and known from many other software projects.


[![Throughput Graph](https://graphs.waffle.io/clickalicious/Screencapture/throughput.svg)](https://waffle.io/clickalicious/Screencapture/metrics)

## Security Issues

If you encounter a (potential) security issue don't hesitate to get in contact with us `opensource@clickalicious.de` before releasing it to the public. So i get a chance to prepare and release an update before the issue is getting shared. Thank you!


## Participate & Share

... yeah. If you're a code monkey too - maybe we can build a force ;) If you would like to participate in either **Code**, **Comments**, **Documentation**, **Wiki**, **Bug-Reports**, **Unit-Tests**, **Bug-Fixes**, **Feedback** and/or **Critic** then please let us know as well!
<a href="https://twitter.com/intent/tweet?hashtags=&original_referer=http%3A%2F%2Fgithub.com%2F&text=Screencapture%20-%20The%20lightweight%20PHP-Framework%20for%20high-performance%20projects%20%40phpfluesterer%20%23Screencapture%20%23php%20https%3A%2F%2Fgithub.com%2Fclickalicious%2FScreencapture&tw_p=tweetbutton" target="_blank">
  <img src="http://jpillora.com/github-twitter-button/img/tweet.png"></img>
</a>

## Sponsors

Thanks to our sponsors and supporters:  

| JetBrains | Navicat |
|---|---|
| <a href="https://www.jetbrains.com/phpstorm/" title="PHP IDE :: JetBrains PhpStorm" target="_blank"><img src="https://www.jetbrains.com/phpstorm/documentation/docs/logo_phpstorm.png"></img></a> | <a href="http://www.navicat.com/" title="Navicat GUI - DB GUI-Admin-Tool for MySQL, MariaDB, SQL Server, SQLite, Oracle & PostgreSQL" target="_blank"><img src="http://upload.wikimedia.org/wikipedia/en/9/90/PremiumSoft_Navicat_Premium_Logo.png" height="55" /></a>  |


[1]: https://packagist "packagist.org - Package registry of composer"
