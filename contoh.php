<?php
 
class smk {

	public $jumlah_kelas=20;
	public $jumlah_lantai= 3;
	public $jurusan=' RPL,TKR,TSM';
	public $luas='80 x 100';
	public $ekskul='pramuka,futsal,elktro';

}
  $smk1=new smk;
  echo"jumlah kelasnya ada:". $smk1->jumlah_kelas.'<br>';
echo"jumlah lantainya ada:". $smk1->jumlah_lantai.'<br>';
echo"jurusan:". $smk1->jurusan.'<br>';
  echo"luasnya:". $smk1->luas.'<br>';
  echo"ekskul:". $smk1->ekskul;
?>