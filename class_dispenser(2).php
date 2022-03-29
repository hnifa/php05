<?php 
class Dispensers{
    protected $volAwal;
    protected $hargaSegelas;
    const volGelas = 250;
    public $namaMinum;

    public function isi($volA) {
       return $this->volAwal = $volA;
    }
    public function harga($harga) {
       return $this->hargaSegelas = $harga;
    }
    public function namaMinum($nm) {
       return $this->namaMinum = $nm;
    }
    public function volAkhir()
    {
        return $this->volAwal - self::volGelas;
    }
}
$cocacola = new Dispensers();
echo "Nama Minuman : ". $cocacola->namaMinum('Coca Cola');
echo "<hr>";
echo "Volume Galon : ". $cocacola->isi(1000). " ml";
echo "<br>";
echo "Volume Gelas : ".Dispensers::volGelas. " ml";
echo "<br>";
echo "Harga Minuman Pergelas : ". $cocacola->harga(5000) ." rupiah";
echo "<br>";
echo "Volume sekarang : ". $cocacola->volAkhir()  ." ml";
?>