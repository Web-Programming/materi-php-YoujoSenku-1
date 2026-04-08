<?php
namespace App\Produk;

class item{
    public $nama;
    public function __construct($nama){
        $this->nama = $nama;
    }
    function info(){
        return "Produk: " . $this->nama;
    }
}
?>
