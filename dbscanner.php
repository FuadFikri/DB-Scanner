<?php
require_once ("iTables.php");

class dbscanner
{
  protected $version = "1.0";
  protected $collTable;

  function __construct()
  {
    $this->collTable = new iTables();
  }

  public function Tables() {
    return $this->collTable;
  }

  public function getVersion() {
    return $this->version;
  }

}

?>
