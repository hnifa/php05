<?php
class Account{
    public $nomor;
    public $nama;
    public $saldo;

    public function __construct($nomor, $nama, $saldo){
        $this->nomor = $nomor;
        $this->nama = $nama;
        $this->saldo = $saldo;
    }
    public function daftar(){
    echo "<hr>{$this->nomor} {$this->nama} {$this->saldo}";
    }
}

class accountBank extends Account{
    public function nabung($uang){
        $this->saldo = $this->saldo + $uang;
        echo "<br>{$this->nama} nabung $uang maka saldonya menjadi {$this->saldo}<br>";
    }
    public function tarik($uang){
        $this->saldo = $this->saldo - $uang;
        echo "<br>{$this->nama} tarik uang $uang maka saldonya menjadi {$this->saldo}<br>";
    }
}
?>

<!DOCTYPE html>
<head>
    <title>Praktikum 5</title>
</head>
<?php
$p1 = ['id'=> 1, 'nomor' => 'C001', 'nama' => 'Ahmad', 'saldo' => 6000000];
$p2 = ['id'=> 2, 'nomor' => 'C002', 'nama' => 'Budi', 'saldo' => 5350000];
$p3 = ['id'=> 3, 'nomor' => 'C003', 'nama' => 'Kurniawan', 'saldo' => 2500000];

$ar_account = [$p1, $p2, $p3];
?>
<body style="margin: 30px;">
<h2 align='center'>Bank INI</h2>
<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>No. Account</th>
            <th>Nama</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($ar_account as $ac) {
            echo '<tr><td>'.$no.'</td>';
            echo '<td>'.$ac['nomor'].'</td>';
            echo '<td>'.$ac['nama'].'</td>';
            $ha = $ac['saldo'];
            echo '<td>'.number_format($ha).'</td><tr>';
            $no++;
        }
        ?>
    </tbody>
</table>
<br>
<?php
$p1 = new accountBank("C001", "Ahamd", 6000000);
$p1->daftar();
$p1->nabung(1000000);

$p2 = new accountBank("C002", "Budi", 5350000);
$p2->daftar();
$p2->tarik(2500000);
?>
</body>
</html>