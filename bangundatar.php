<?php

class bangundatar{

	public $angka1,$angka2;

	function set_persegipanjang($panjang,$lebar){
		$this->angka1=$panjang;
		$this->angka2=$lebar;
	}
	function get_nilai(){
		return $this->angka1 * $this->angka2;
	}
	
	function set_persegi($sisi){
		$this->angka1=$sisi;
	}
	function get_nilai2(){
		return $this->angka1 * $this->angka1;
	}
	function set_segitiga($alas,$tinggi){
		$this->angka1=$alas;
		$this->angka2=$tinggi;
	}
	function get_nilai3(){
		return ($this->angka1 * $this->angka1) / 2;
    }

}
$bangundatar = new bangundatar;
$bangundatar->set_persegipanjang(10,5);
echo"1.luas Persegi Panjang:".$bangundatar->get_nilai().'<br>';
$bangundatar->set_persegi(20);
echo"2.luas Persegi:".$bangundatar->get_nilai2().'<br>';
$bangundatar->set_segitiga(15,2);
echo"3.luas Segitiga:".$bangundatar->get_nilai3();

?>