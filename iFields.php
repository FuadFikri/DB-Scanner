<?php
require_once ("iField.php");

class iFields
{
  protected $coll = array();

  function __construct()
  {
    // code...
  }

  public function Add($fieldName,$dataType,$isPK,$isNull,$parentTable) {
    $newField = new iField();
    $newField->setFieldName(strtoupper($fieldName));
    $newField->setDataType($dataType);
    // $newField->setDataLength($dataLength);
    $newField->setIsPK($isPK);
    $newField->setIsNull($isNull);
    $newField->setParentTable($parentTable);
    //bisa ditambahkan validasi
    array_push($this->coll,$newField);
  }

  public function AddField($newField) {
    //bisa ditambahkan validasi
    array_push($this->coll,$newField);
  }

  public function getCount() {
    return count($this->coll);
  }

  public function getItem($index) {
    $theField = null;
    $theField = $this->coll[$index];
    /*
    for( $i = 0; $i<$this->getCount(); $i++ ) {
      $theField = $this->coll[$i];
      if ($i==$index) {
        break;
      }
    }
    */
    return $theField;
  }

  public function getField($FieldName) {
    $theField = null;
    for( $i = 0; $i<$this->getCount(); $i++ ) {
      $theField = $this->coll[$i];
      if ($theField->getFieldName()==strtoupper($FieldName)) {
        break;
      }
    }
    return $theField;
  }

  public function removeByFieldName($FieldName) {
    $theField = null;
    for( $i = 0; $i<$this->getCount(); $i++ ) {
      $theField = $this->coll[$i];
      if ($theField->getFieldName()==strtoupper($FieldName)) {
        array_splice($this->coll,$i);
        break;
      }
    }
  }

  public function removeByIndex($FieldName) {
  }

}
?>
