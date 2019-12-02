<?php
require_once ("iFields.php");
require_once ("dbscanner.php");

class iTable
{
  protected $tableName = "";
  protected $isView;
  public $collFields;
  protected $dbscanner;

  function __construct()
  {
    // $this->tableName = "table1";
    // $this->isView = false;
    //inisiasi collection Fields
    $this->collFields = new iFields();
    $this->dbscanner = new dbscanner();
  }

  public function setTableName($value) {
    $this->tableName = strtoupper($value);
  }

  public function getTableName() {
    return $this->tableName;
  }

  public function setIsView($value) {
    $this->isView = $value;
  }

  public function getIsView() {
    return $this->isView;
  }

  //declarative collection di sini
  public function Fields() {
    return $this->collFields;
  }
  public function getDbScan() {
    return $this->dbscanner;
  }

}

?>
