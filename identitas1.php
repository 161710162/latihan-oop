<?php

require_once 'identitas.php';

$identitas= new identitas;
$identitas->set_nama('aaa');
echo"Nama...".$identitas->nama.'<br>';
echo"Tempat Lahir...".$identitas->tempat.'<br>';
echo"Tanggal Lahir...".$identitas->tanggal.'<br>';
echo"Kelas...".$identitas->kelas.'<br>';
echo"Status...".$identitas->status.;
?>