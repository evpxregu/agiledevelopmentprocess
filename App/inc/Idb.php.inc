<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Rick
 */
interface Idb {
    public function Add( $barcode,  $name, $category);
    public function Get( $barcode);
    //put your code here
}
