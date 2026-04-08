<?php
namespace App\Service;
class item{
    public $nama;
    public function __construct($nama) {
        $this->nama = $nama;
    }
    function info(){
        return "Service: " . $this->nama;
    }
}
?>
