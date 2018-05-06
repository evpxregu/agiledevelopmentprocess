<?php
require_once('Idb.php.inc');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CSVDB
 *
 * @author Rick
 */
class CSVDB implements Idb
{
    
    private $filename = 'db.csv';    
    public function Add( $bCode,  $name, $category)
    {
        $csv = fopen($this->filename, "a");
        $n = count(file($this->filename));
        
        $line = array(
            'id' => $n,
            'barcode' => $bCode,
            'name' => $name,
            'category' => $category
        );
        
        fputcsv($csv, $line);
    }
    public function Get(string $bCode)
    {
        #######
         
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
    return false;
  }



        
        ########
        
        
        
    
           
    //put your code here
}
