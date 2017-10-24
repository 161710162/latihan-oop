<?php
class identitas{
	public $nama;
	public $tempat;
	public $tanggal;
	public $kelas;
	public $status;
public function __construct(){
	$this->nama=$nama;
	$this->tempat=$tempat;
	$this->tanggal=$tanggal;
	$this->kelas=$kelas;
	$this->status=$status;
}

public function set_nama($nama){
	$this->nama=$nama;
}
public function get_nama(){
	return $this->nama;
}

public function set_tempat($tempat){
    return $this->tempat=$tempat;
}

public function get_tempat(){
    return $this->tempatlahir;
}

public function set_tanggal($tanggal){
    return $this->tanggal=$tanggal;
}

public function get_tanggal(){
    return $this->tanggallahir;
}

public function set_kelas($kelas){
    return $this->kelas=$kelas;
}

public function get_kelas(){
    return $this->kelas;
}

public function set_status($status){
    return $this->status=$status;
}

public function get_status(){
    return $this->status;
}
}


?>