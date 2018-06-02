<?php

/**
* Codeigniter asset versioning installer
*
* @author     Roland Oduberu <https://github.com/roliod>
* @license    MIT License
* @copyright  2018 Roland Oduberu
* @link       https://github.com/roliod/codeigniter-asset-versioning/releases
*/

$installer = new Installer();
$installer->install();

Class Installer
{
  public $helper_to_path;
  public $library_to_path;
  public $helper_from_path;
  public $library_form_path;

  public function __construct()
  {
    $this->library_to_path = "application/libraries/asset.php";
    $this->helper_to_path = "application/helpers/asset_helper.php";
    $this->library_form_path = "vendor/roliod/codeigniter-asset-versioning/src/libraries/asset.php";
    $this->helper_from_path = "vendor/roliod/codeigniter-asset-versioning/src/helpers/asset_helper.php";
  }

  public function install()
  {
    $this->copy_helper();
    $this->copy_library();
  }

  public function copy_helper()
  {
    if ($this->exists($this->helper_to_path)) {
      return $this;
    }

    $this->copy_file($this->helper_from_path, $this->helper_to_path);

    return $this;
  }

  public function copy_library()
  {
    if ($this->exists($this->library_to_path)) {
      return $this;
    }

    $this->copy_file($this->library_form_path, $this->library_to_path);

    return $this;
  }

  /**
  * Check if file exists
  *
  * @param string $file path
  * @return bool
  */
  public function exists($path)
  {
    return (bool)file_exists($path);
  }

  /**
  * Recursive Copy
  *
  * @param string $src
  * @param string $dst
  */
  public function copy_file($from, $to)
  {
    copy($from, $to);
  }
}
