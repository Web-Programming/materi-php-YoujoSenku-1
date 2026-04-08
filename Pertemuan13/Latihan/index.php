<?php
require "App/Produk/item.php";
require "App/Service/item.php";

use App\Produk\item as ProdukItem;
use App\Service\item as ServiceItem;

$info_produk = new ProdukItem("Laptop");
$info_service = new ServiceItem("Perbaikan Batre Laptop");

echo $info_produk->info() ."<br>";
echo $info_service->info();
?>
