<?php

$nama_file = $_GET['xyz'].'.jpg';
$direktori = '../assets/upload/';
$target = $direktori.$nama_file;

move_uploaded_file($_FILES['webcam']['tmp_name'], $target);
?>