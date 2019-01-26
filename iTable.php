<?php
require_once ("iFields.php");

class iTable
{
  protected $tableName = "";
  protected $isView = false;
  protected $collFields;

  function __construct()
  {
    $this->tableName = "table1";
    $this->isView = false;
    //inisiasi collection Fields
    $this->collFields = new iFields();
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

}

?>
