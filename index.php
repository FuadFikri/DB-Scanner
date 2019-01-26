<?php
require_once ("dbscanner.php");
require_once ("iTable.php");
require_once ("iField.php");
?>
<html>
   <body>

      <?php
        //inisialisasi
        $scan = new dbscanner();
        //cara 1
        echo "Isi Awal collection=".$scan->Tables()->getCount()."</br>";
        $scan->Tables()->Add("Table1",false);
        $scan->Tables()->Add("Table2",false);
        echo "Berhasil Tahap 1 </br>";

        //cara 2
        $tblBaru = new iTable();
        $tblBaru->setTableName("TableBaru");
        $tblBaru->setIsView(false);
        $tblBaru->Fields()->Add("ID","varchar",50,false,true);
        $tblBaru->Fields()->Add("Field1","varchar",50,false,true);
        $tblBaru->Fields()->Add("Field2","int",50,false,true);
        $tblBaru->Fields()->Add("Field3","date",0,false,true);
        $tblBaru->Fields()->Add("Field4","blob",0,false,true);
        $tblBaru->Fields()->Add("Field5","long",0,false,true);
        //cara menambahkan field baru dgn object
        $newFld = new iField();
        $newFld->setFieldName("NamaSiswa");
        $newFld->setDataType("long int");
        $newFld->setDataLength(100);
        $tblBaru->Fields()->AddField($newFld);
        //Add table baru
        $scan->Tables()->AddTable($tblBaru);
        echo "Berhasil Tahap 2 </br></br>";

        //menampilkan isi collection Tables
        $tbl;
        echo "Isi collection=".$scan->Tables()->getCount()."</br>";
        for( $i = 0; $i<$scan->Tables()->getCount(); $i++ ) {
          $tbl = $scan->Tables()->getItem($i);
          echo "Table ke-".($i+1)."=".$tbl->getTableName()."</br>";
        }

        //menampilkan tabel ke-3
        echo "</br>";
        $tbl=$scan->Tables()->getItem(2);
        echo "Daftar Field Table ".$tbl->getTableName()."</br>";
        for( $i = 0; $i<$tbl->Fields()->getCount(); $i++ ) {
          $fld = $tbl->Fields()->getItem($i);
          echo "Field ke-".($i+1)."=".$fld->getFieldName()." ".$fld->getDataType()."(".$fld->getDataLength().")"."</br>";
        }
        //
        //$fld = $scan->Tables()->getItem(2)->Fields()->getField("NAMASISWA");
        $fld = $scan->Tables()->getItem(2)->Fields()->getItem(6);
        echo "<br><hr>";
        print_r($scan->Tables()->getItem(2)->Fields()->getField("FIELD2"));
        echo "<br><hr>";
        echo $fld->getFieldName()." Data Type = ".$fld->getDataType()."</br>";
        //nama field diubah
        $fld->setFieldName("ALAMAT");
        echo $fld->getFieldName()." Data Type = ".$fld->getDataType()."</br>";
        //cloning object
        echo "</br>";
        $fld2 = $scan->Tables()->getItem(2)->Fields()->getItem(6);
        echo $fld2->getFieldName()." Data Type = ".$fld2->getDataType()."</br>";
        //echo "Berhasil";
        //echo "Tablenya".$fld->getParentTable->getTableName()->getDBScan()->getVersion();

      ?>

   </body>
</html>
