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
    public function AllLines()
    {
         $csv = fopen($this->filename, 'a');

    }

    public function getAll()
    {
      $csv = fopen($this->filename, 'r');
      $allvalues = array();
      $i = 0;
      while(($line = fgetcsv($csv, ",")) !== false)
      {
        $allvalues[$i] = $line;
        $i++;
      }
      fclose($csv);
      return $allvalues;
    }

    //put your code here
}
