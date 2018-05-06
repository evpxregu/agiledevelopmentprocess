<?php
require_once('inc/LogDB.php.inc');
#require 'findBarcodeInDB.php';
//require 'findBarcodeInDBbyScan.php';
require 'inc/CSVDB.php.inc';

//lets start with some validation of the submitted parameters
$codetype = filter_input(INPUT_POST,'code_type',FILTER_SANITIZE_SPECIAL_CHARS);
$codenumber = filter_input(INPUT_POST,'code_number',FILTER_SANITIZE_SPECIAL_CHARS);

if(session_id()  == '')
{
    session_start();
}

//todo: move all of this to some nice MVC controller like structure which is actually database backed.
//For now we are just going to give some data back for my package of "stroopwafelen" which is the only thing i have for testing

function getResult($code_type,$code_number){

    $csvdb = new CSVDB();
    $row = $csvdb->Get($code_number);
//    $array = findValuesFromDB($code_number);
    if($row == false){
        return "Product not found, try adding it!";
    }else{
        //todo: move the code below to the block that is actually ran when a barcode is succesfully found
        $logging = new LogDB();
        //todo keep track of client on user side
        $logging->Add(session_id(),$code_number );
    
        return $row[1] . '. Sort as: ' . $row[3];
    }
    
}
    $result = getResult($codetype,$codenumber);
    
  echo $result;
