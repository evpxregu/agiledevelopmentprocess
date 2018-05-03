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
    public function Add( $barcode,  $name, $category)
    {
        $csv = fopen($this->filename, "a");
        $n = count(file($this->filename));
        
        $line = array(
            'id' => $n,
            'barcode' => $barcode,
            'name' => $name,
            'category' => $category
        );
        
        fputcsv($csv, $line);
   }
    public function Get(string $barcode)
    {
        
    }
           
    //put your code here
}
