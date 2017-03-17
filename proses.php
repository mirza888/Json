<?php
$json_data=file_get_contents("profile.json");
$obj = json_decode($json_data);
echo "Nama : "; echo $obj->nim;
echo "<br>";
echo "Nama : "; echo $obj->name;
echo "<br>";
echo "Nama : "; echo $obj->email;
echo "<br>";
echo "Nama : "; echo $obj->no_telp;
echo "<br>";
echo "Mata kuliah 1: ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "Mata Kuliah 2: ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "Mata Kuliah 3: ";echo $obj->mata_kuliah[2];
?>