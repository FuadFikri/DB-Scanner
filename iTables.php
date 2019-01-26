<?php
require_once ("iTable.php");

class iTables
{
  protected $coll = array();

  function __construct()
  {
    // code...
  }

  public function Add($tableName, $isView) {
    $newTable = new iTable();
    $newTable->setTableName($tableName);
    $newTable->setIsView($isView);
    //bisa ditambahkan validasi
    array_push($this->coll,$newTable);
  }

  public function AddTable($newTable) {
    //bisa ditambahkan validasi
    array_push($this->coll,$newTable);
  }

  public function getCount() {
    return count($this->coll);
  }

  public function getItem($index) {
    $theTable = $this->coll[$index];
    /*
    for( $i = 0; $i<$this->getCount(); $i++ ) {
      $theTable = $this->coll[$i];
      if ($i==$index) {
        break;
      }
    }*/
    return $theTable;
  }

  //return-nya object
  public function getTable($tableName) {
    $theTable = null;
    for( $i = 0; $i<$this->getCount(); $i++ ) {
      $theTable = $this->coll[$i];
      if ($theTable->getTableName()==strtoupper($tableName)) {
        break;
      }
    }
    return $theTable;
  }

  public function removeByTableName($tableName) {
    $theTable = null;
    for( $i = 0; $i<$this->getCount(); $i++ ) {
      $theTable = $this->coll[$i];
      if ($theTable->getTableName()==strtoupper($tableName)) {
        array_splice($this->coll,$i);
        break;
      }
    }
  }

}

?>
