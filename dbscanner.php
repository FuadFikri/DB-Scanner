<?php
require_once ("iTables.php");

class dbscanner
{
  protected $version = "1.0";
  protected $collTable;
  public $conn;
  protected $dbname;

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

  // public function connect($server,$user,$pass,$dbname){}

  public function scanMySQL($server,$user,$pass,$dbname)
  {
    
    // mengambil tabel dan menyimpannya kedalam collection
    $this->dbname=$dbname;
    $this->conn = mysqli_connect($server,$user,$pass,$dbname);
    
    $res = mysqli_query($this->conn,"SHOW FULL TABLES IN invoice");
  
    while($cRow = mysqli_fetch_row($res)){
      $this->collTable->Add($cRow[0],$cRow[1]);
    }

    // mengambil kolom dan meyimpannya kedalam collection fields
    $res2=null;  $tableName="";
    for ($i=0; $i<$this->collTable->getCount(); $i++) { 
      $tableName = strtolower($this->collTable->getItem($i)->getTableName());
      $kolom = mysqli_query($this->conn,"SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '".$tableName."'  ");
      $theTable = null;
      $theTable = $this->collTable->getItem($i);
      while ($row = mysqli_fetch_array($kolom)) {
        $theTable->collFields->Add($row['COLUMN_NAME'],$row['DATA_TYPE'],$row['COLUMN_KEY'],$row['IS_NULLABLE'],$theTable);
      }
      
    }
  }
}

?>
