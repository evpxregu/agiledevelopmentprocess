<?php
require_once('inc/LogDB.php.inc');
#require 'findBarcodeInDB.php';
//require 'findBarcodeInDBbyScan.php';
require 'inc/CSVDB.php.inc';

//Test to see if it works edit this out before commiting or pushing
//getHistory();

/*
 should return an array with
 Id number, name of product, barcode,  howto recycle0,AloeVera Jordgubb,7340116870030,pant
 example below
 0,AloeVera Jordgubb,7340116870030,pant

 OBS!! WARNING:
 Have not actually test this on any thing due to error:
 Fatal error: Declaration of CSVDB::Add($barcode, $name, $category)
 must be compatible with Idb::Add(string $barcode, string $name, string $category) in
 /opt/lampp/htdocs/agiledevelopmentprocess/App/inc/CSVDB.php.inc on line 14

 Dont know if its just me or not.
*/
function getHistory(){
  //load both csv files
  $csvdb = new CSVDB();
  $csvLog = new LogDB();

  //Get the arrays
  $logLines = $csvLog->getAll();
  $history = array();
  $i = 0;
  //Extract info from db
  foreach ($logLines as  $value)
  {
    //$row = $csvdb->Get($value[2]);
    //$history[$i] = $row;
    //combine  it to only one array in history
    //array_push($history[$i], $value[3]);
    //$i++;
    
    $row = $csvdb->Get($value[2]);
    array_push($row, $value[3]);
    $history[$i] = $row;
    $i++;
  }
  
  return $history;

}
