<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

# this function will be called in the barcode.php file to set the result variable and echo the response ;)
function findValuesFromDB($bCode){
    
    #some dummy file
    $x = fopen("db.csv", "r");
    
    
//    if (($csv = fopen("db.csv", "r")) !== FALSE) {
    while(($row = fgetcsv($x, ",")) !== false){
//    if($line[2] == $bCode)
//    # line[2] is the 3rd element in the line i.e. the barcode
//        return $line;
//    }
//    
//    fclose($csv);
//    }
//    return false;
//    
//}


      if($row[2]==$bCode){
        return $row;
      }
    }

    fclose($x);
  }
  return false;
//}


?>

}