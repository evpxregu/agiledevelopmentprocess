<?php
require_once('IlogDB.php.inc');
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
class LogDB implements logDBI
{
    
    private $filename = 'log.csv';
    public function Add( $user_id,  $barcode)
    {
        $csv = fopen($this->filename, "a");
        $n = count(file($this->filename));
        
        $line = array(
            'id' => $n,
            'user_id' => $user_id,
            'barcode' => $barcode,
            'timestamp' => time()
        );
        
        fputcsv($csv, $line);
    }
    
           
    //put your code here
}
