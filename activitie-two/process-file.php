<?php 
session_start();

$tpm_file = $_FILES['file']['tmp_name'];
$name = basename($_FILES['file']['name']);
$extension = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);

$directory= './file' . $extension;
if(!is_dir($directory)){
    mkdir($directory, 0777, true);
}

$loadFile = move_uploaded_file($tpm_file,"$directory/$name");
if($loadFile){
    echo 'Archivo Cargado';
} else{
    echo 'Erro al cargar Archivo';
}

?>