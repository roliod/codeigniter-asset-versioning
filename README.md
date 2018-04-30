# codeigniter-asset-versioning
This package can be used to force browser refresh of assets when cached in the users browser utilizing an asset versioning technique.

## Installation (Files)

* copy app/helpers/asset_helper.php to application/config
* copy app/libraries/asset.php to application/libraries

## Installation (Autoload)

The autoload file is located at application/config/

* add 'asset' to libraries
* add 'asset' to helpers

$autoload['libraries'] = array('asset');
$autoload['helpers'] = array('asset');

## Installation (Config)

The config file is located at application/config/

* add a 'base_url' config
* add a 'asset_version' config

$config['base_url'] = 'https://mywebsite.com'
$config['asset_version'] = 1; (Change this number whenever you make an update to an asset file)

## Usage

* CSS: <link href="<?php echo version_url('path/to/css/file') ?>" rel="stylesheet" type="text/css" />
* JS: <script src="<?php echo version_url('path/to/js/file') ?>" type="text/javascript"></script>
