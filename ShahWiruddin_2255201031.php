<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {

  private $Nama;
  private $NIM;
  private $MataKuliah;
  private $dosenkiller;
  private $citacita;
  private $hobby;


  public function __construct($Nama, $NIM, $MataKuliah, $dosenkiller, $citacita, $hobby){
    $this->Nama = $Nama;
    $this->NIM = $NIM;
    $this->MataKuliah = $MataKuliah;
    $this->dosenkiller = $dosenkiller;
    $this->citacita = $citacita;
    $this->hobby = $hobby;
  }


  function get_Nama() {
    return $this->Nama;
  }
  function get_NIM(){
    return $this->NIM;
  }
  function get_MataKuliah(){
    return $this->MataKuliah;
  }
  function get_dosenkiller(){
    return $this->dosenkiller;
  }
    function get_citacita(){
    return $this->citacita;
  }
    function get_hobby(){
    return $this->hobby;
  }
}

class Universitas extends Mahasiswa {
  public function Salam() {
    echo 'Selamat Datang Di Kampus Kami'; 
  }
}


$Shahwiruddin = new Universitas('Shahwiruddin', '2255201031', 'PBO', 'Pak Arif', 'JadiBola', 'Nonton Anime');
echo $Shahwiruddin->Salam();
echo "<br>";
echo $Shahwiruddin->get_Nama();
echo "<br>";
echo $Shahwiruddin->get_NIM();
echo "<br>";
echo $Shahwiruddin->get_MataKuliah();
echo "<br>";
echo $Shahwiruddin->get_dosenkiller();
echo "<br>";
echo $Shahwiruddin->get_citacita();
echo "<br>";
echo $Shahwiruddin->get_hobby();
?>

</body>
</html>
