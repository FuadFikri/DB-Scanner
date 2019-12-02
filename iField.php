<?php
require_once('iTable.php');
class iField
{
  protected $fieldName = "";
  protected $dataType = "";
  protected $dataLength = 0;
  protected $isPK = false;
  protected $isNull = true;
  protected $parentTable;

  function __construct()
  {
    // code...
    // $this->fieldName = "";
    // $this->dataType = "";
    $this->parentTable = new iTable();
  }

  function setFieldName($value) {
    $this->fieldName = $value;
  }

  function getFieldName() {
    return $this->fieldName;
  }

  function setDataType($value) {
    $this->dataType = $value;
  }

  function getDataType() {
    return $this->dataType;
  }

  function setDataLength($value) {
    $this->dataLength = $value;
  }

  function getDataLength() {
    return $this->dataLength;
  }

  function setIsPK($value) {
    $this->isPK = $value;
  }

  function getIsPK() {
    return $this->isPK;
  }

  function setIsNull($value) {
    $this->isNull = $value;
  }

  function getIsNull() {
    return $this->isNull;
  }

  public function getParentTable(){
    return $this->parentTable;
  }

  public function setParentTable($parentTable)
  {
    $this->parentTable=$parentTable;
  }

}
?>
