<?php
include_once "database.php";


$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = mysqli_real_escape_string($koneksi,$_POST['password']);

if(isset($_POST['masuk'])){

}