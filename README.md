# codeigniter-asset-versioning
This package can be used to force browser refresh of assets when cached in the users browser utilising an asset versioning technique. The version number used is the assets last modified timestamp.


## Installation

Installing Composer..

```
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
```
_You are not obliged to move the `composer.phar` file to your `/usr/local/bin`, it is however considered easy to have an global installation._

Add the following to your require block in `composer.json` config

```json
"roduberu/codeigniter-asset-versioning": "^1.0.0"
```

__If your new to composer and have no clue what I'm talking about__

Just create a file named `composer.json` in your document root:

```json
{
    "require": {
        "roduberu/codeigniter-asset-versioning": "^1.0.0"
    }
}
```

Now let's install!

```
composer install
```

You can also install by using:

```
composer require roliod/codeigniter-asset-versioning
```

That's all !

## Installation (Manual)

* copy src/helpers/asset_helper.php to application/config
* copy src/libraries/asset.php to application/libraries

## Configuration (Autoload)

The autoload file is located at application/config/

* add 'asset' to libraries
* add 'asset' to helpers

`$autoload['libraries'] = array('asset');`

`$autoload['helpers'] = array('asset');`

## Configuration (Config)

The config file is located at application/config/

* add a 'base_url' config

`$config['base_url'] = 'https://mywebsite.com'`

## Usage

* CSS: `<link href="<?php echo version_url('path/to/css/file') ?>" rel="stylesheet" type="text/css" />`
* JS: `<script src="<?php echo version_url('path/to/js/file') ?>" type="text/javascript"></script>`
