<?php
/*
 * Only subclasses of Model interact with the database.
 */

namespace models;

require_once 'Model.php';

class listModel extends Model{
    public function __construct(){
        $this->connect();
    }
}