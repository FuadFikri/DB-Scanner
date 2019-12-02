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
        $a = $scan->scanMySQL("localhost","root","","invoice");
      
      //   echo "<br>";
      //   $result = $scan->Tables()->getTable('customers');
      //   print_r($scan->Tables()->getTable('customers')->Fields()->getCount());
      $tables = [$scan->Tables()][0];
      print_r($tables)."<br><hr>";
      
      ?>

   </body>
</html>
