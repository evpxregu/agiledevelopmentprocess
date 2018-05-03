<?php

findValuesFromDB(15);
// reads the csv file and returns an array with the values that are conencted to that array
// it returns a empty array if we do not find anything
function findValuesFromDB($inputBarcode){

  //Empty array that i use now so when we call this method we know if we hit something
  // Could add a string to this array wich will have a string that says knowing found but that seems bad.
  $values = array();
  if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      $num = count($data);
      if($inputBarcode == $data[0]){
        return $data;
      }
    }

    fclose($handle);
  }
  //we couldnot find anything so it returns empty an array.
  return false;
}


?>
