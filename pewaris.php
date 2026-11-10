<?php
// PARENT
class Clothes
{
    public $name = "Pakaian";   // public    : bisa diakses di mana saja
    protected $price = 100000;  // protected : bisa diakses di parent & child
    private $stock = 10;        // private   : hanya bisa diakses di parent
 
    public function getStock()
    {
        return $this->stock;
    }
 
    public function info()
    {
        echo "Nama  : $this->name <br>";
        echo "Harga : Rp $this->price <br>";
        echo "Stok  : " . $this->getStock() . "<br><br>";
    }
}
 
// CHILD (mewarisi Clothes dengan "extends")
class Jacket extends Clothes
{
    public $name = "Jacket";
    protected $price = 450000;
}
 
class Tshirt extends Clothes
{
    public $name = "Tshirt";
    protected $price = 85000;
}
 
class Pants extends Clothes
{
    public $name = "Pants";
    protected $price = 350000;
}
 
// PROGRAM
$jaket  = new Jacket();
$kaos   = new Tshirt();
$celana = new Pants();
 
$jaket->info();
$kaos->info();
$celana->info();
 
// echo $jaket->price;  // ERROR (protected tidak bisa dari luar)
// echo $jaket->stock;  // ERROR (private tidak bisa dari luar)
 