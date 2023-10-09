<?php

$banca = $_POST['banca'];
$capital = $_POST['capital'];
$datoria = $_POST['datoria'];
$SDPJ = $_POST['SDPJ'];
$SDPF = $_POST['SDPF'];
$venit_ian = $_POST['venit_ian'];
$venit_feb = $_POST['venit_feb'];
$venit_mar = $_POST['venit_mar'];
$venit_apr = $_POST['venit_apr'];
$venit_mai = $_POST['venit_mai'];
$venit_iun = $_POST['venit_iun'];
$venit_iul = $_POST['venit_iul'];
$venit_aug = $_POST['venit_aug'];
$venit_sep = $_POST['venit_sep'];
$venit_oct = $_POST['venit_oct'];
$venit_nov = $_POST['venit_nov'];
$venit_dec = $_POST['venit_dec'];
$t_active=$_GET['t_active'];
$t_depozite = $_POST['t_depozite'];
$t_titluri = $_POST['t_titluri'];
$t_credite = $_POST['t_credite'];
$dobinda_f = $_POST['dobinda_f'];
$dobinda_j = $_POST['dobinda_j'];
$locatia=$_GET['locatia'];
$regiunea = $_POST['regiunea'];
$rentabilitate = $_POST['rentabilitate'];


$conn = new mysqli('localhost','root','','dim');
if($conn->connect_error){
    die('Conectarea esuata : '.$conn->connect_error);
}else{

    $sql = "INSERT INTO banca (num_banca, id_localitate, id_regiunea) values('$banca', '$locatia', '$regiunea')";
    $sql_1 = "INSERT INTO indecele (dobinda_f, dobinda_j) values('$dobinda_f', '$dobinda_j')";
    $sql_2 = "INSERT INTO rezultatele (venit_ian, venit_feb, venit_mar, venit_apr, venit_mai, venit_iun, venit_iul, venit_aug, venit_sep, venit_oct, venit_nov, venit_dec) values('$venit_ian', '$venit_feb', '$venit_mar','$venit_apr', '$venit_mai', '$venit_iun', '$venit_iul', '$venit_aug', '$venit_sep', '$venit_oct', '$venit_nov', '$venit_dec')";
    $sql_3 = "INSERT INTO soldul (SDPJ, SDPF, capitalul, datoria, rentabilitate) values('$SDPJ', '$SDPF', '$capitalul', '$datoria', '$rentabilitate')";
    $sql_4 = "INSERT INTO tarifele (t_active, t_titluri, t_credite, t_depozite) values('$t_active', '$t_titluri', '$t_credite', '$t_depozite')";

 if (mysqli_query($conn, $sql)) {
    header ('location:index.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  if (mysqli_query($conn, $sql_1)) {
    header ('location:index.php');
  } else {
    echo "Error: " . $sql_1 . "<br>" . mysqli_error($conn);
  }
  if (mysqli_query($conn, $sql_2)) {
    header ('location:index.php');
  } else {
    echo "Error: " . $sql_2 . "<br>" . mysqli_error($conn);
  }
  if (mysqli_query($conn, $sql_3)) {
    header ('location:index.php');
  } else {
    echo "Error: " . $sql_3 . "<br>" . mysqli_error($conn);
  }
  if (mysqli_query($conn, $sql_4)) {
    header ('location:index.php');
  } else {
    echo "Error: " . $sql_4 . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}


 ?>
