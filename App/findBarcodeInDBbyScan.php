<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

# this function will be called in the barcode.php file to set the result variable and echo the response ;)
function findValuesFromDB($bCode){
    
    #some dummy file
    $csv = fopen("db.csv", "r");
    
    
//  while the csv file still has lines to iteratre through
    while(($row = fgetcsv($csv, ",")) !== false){

        
      #compare the barcodes in the backend file for each line to the input barcode and return the name of the product 
      #if there is a match
      if($row[2]==$bCode){
        return $row;
      }
    }

    fclose($csv);
  }

  return false;


?>

}