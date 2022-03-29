<?php 
class Fruit{
    //property
    public $name;
    protected $color;
    private $weight;

    //method 
    public function set_color($c) {
       return $this->color = $c;
    }
    public function set_weight($w) {
       return $this->weight = $w;
    }
}
//object 
$manggo = new Fruit();
echo "Nama Buah: ". $manggo->name = 'Mangga';
echo "<br>";
echo "Warna: ". $manggo->set_color('Kuning');
echo "<br>";
echo "Berat: ". $manggo->set_weight('300 gr');

?>