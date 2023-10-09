
<?php

$conn = new mysqli('localhost','root','','banca1');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


        if($_SERVER["REQUEST_METHOD"]=='GET'){
            if(!isset($_GET['id'])){
              exit;
            }
          }
          else{
            $id=$_GET['id'];
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




            $sql = "UPDATE banca ".
            "SET num_banca = '$banca' WHERE id_banca = $id";

            $sql_3 = "UPDATE banca ".
            "SET id_localitate = '$locatia' WHERE id_banca = $id";

            $sql_1 = "UPDATE banca ".
            "SET id_regiunea = '$regiunea' WHERE id_banca = $id";

            $sql_2 = "UPDATE indicele ".
            "SET dobinda_f = '$dobinda_f' WHERE id_bancii = $id";


            $sql_4 = "UPDATE indicele ".
            "SET dobinda_j = '$dobinda_j' WHERE id_bancii = $id";

            $sql_5 = "UPDATE rezultatele ".
            "SET 	venit_ian = '$venit_ian' WHERE id_bancii  = $id";

            $sql_6 = "UPDATE rezultatele ".
            "SET venit_feb = '$venit_feb' WHERE id_bancii  = $id";

            $sql_7 = "UPDATE rezultatele ".
            "SET venit_mar = '$venit_mar' WHERE id_bancii  = $id";
            $sql_8 = "UPDATE banca ".
            "SET venit_apr = '$venit_apr' WHERE id_bancii  = $id";

            $sql_9 = "UPDATE rezultatele ".
            "SET venit_mai = '$venit_mai' WHERE id_bancii  = $id";

            $sql_10 = "UPDATE rezultatele ".
            "SET venit_iun = '$venit_iun' WHERE id_bancii  = $id";

            $sql_12 = "UPDATE rezultatele ".
            "SET venit_iul = '$venit_iul' WHERE id_bancii  = $id";

            $sql_11 = "UPDATE banca ".
            "SET venit_aug = '$venit_aug' WHERE id_bancii  = $id";

            $sql_13 = "UPDATE rezultatele ".
            "SET venit_sep = '$venit_sep' WHERE id_bancii  = $id";

            $sql_14 = "UPDATE rezultatele ".
            "SET venit_oct = '$venit_oct' WHERE id_bancii  = $id";

            $sql_15 = "UPDATE rezultatele ".
            "SET venit_nov = '$venit_nov' WHERE id_bancii  = $id";

            $sql_16 = "UPDATE rezultatele ".
            "SET venit_dec = '$venit_dec' WHERE id_bancii  = $id";


            $sql_17 = "UPDATE soldul ".
            "SET SDPJ	 = '$SDPJ' WHERE id_bancii  = $id";

            $sql_18 = "UPDATE soldul ".
            "SET SDPF = '$SDPF' WHERE id_bancii  = $id";

            $sql_19 = "UPDATE soldul ".
            "SET capitalul = '$capitalul' WHERE id = $id";

            $sql_20 = "UPDATE soldul ".
            "SET datoria = '$datoria' WHERE id = $id";

            $sql_21 = "UPDATE soldul ".
            "SET rentabilitate = '$rentabilitate' WHERE id = $id";

            $sql_22 = "UPDATE tarifele ".
            "SET t_active = '$t_active' WHERE id = $id";

            $sql_23 = "UPDATE tarifele ".
            "SET t_titluri = '$t_titluri' WHERE id = $id";

            $sql_24 = "UPDATE tarifele ".
            "SET t_credite = '$t_credite' WHERE id = $id";

            $sql_25 = "UPDATE tarifele ".
            "SET t_depozite = '$t_depozite' WHERE id = $id";



            $result = $conn->query($sql);
            $result = $conn->query($sql_1);
            $result = $conn->query($sql_2);
            $result = $conn->query($sql_3);
            $result = $conn->query($sql_4);
            $result = $conn->query($sql_5);
            $result = $conn->query($sql_6);
            $result = $conn->query($sql_7);
            $result = $conn->query($sql_8);
            $result = $conn->query($sql_9);
            $result = $conn->query($sql_10);
            $result = $conn->query($sql_11);
            $result = $conn->query($sql_12);
            $result = $conn->query($sql_13);
            $result = $conn->query($sql_14);
            $result = $conn->query($sql_15);
            $result = $conn->query($sql_16);
            $result = $conn->query($sql_17);
            $result = $conn->query($sql_18);
            $result = $conn->query($sql_19);
            $result = $conn->query($sql_20);
            $result = $conn->query($sql_21);
            $result = $conn->query($sql_23);
            $result = $conn->query($sql_22);
            $result = $conn->query($sql_24);
            $result = $conn->query($sql_25);



          }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://css.gg/arrow-left.css' rel='stylesheet'>
    <link href='https://css.gg/eye.css' rel='stylesheet'>
    <title>Update</title>
</head>
<body>












  <form action="create.php" method="post">

    <div class="form-group mb-3">
      <label for=""><h3>Banca</h3></label>
      <input type="text" name="banca" id="banca" value="" class="form-control" >
    </div>
    <div class="form-group mb-3">
      <label for=""><h3>Capitalul</h3></label>
      <input type="text" name="capital" id="capital" value="" class="form-control" >
    </div>

    <div class="form-group mb-3">
      <label for=""><h3>Rentabilitatea</h3></label>
      <input type="text" name="rentabilitate" id="rentabilitate" value="" class="form-control"  >
    </div>

    <div class="form-group mb-3">
      <label for=""><h3>Datoria</h3></label>
      <input type="text" name="datoria" id="datoria" value="" class="form-control"  >
    </div>


    <div class="form-group mb-3">
      <label for=""><h3>Solcul persoanelor juridice</h3></label>
      <input type="text" name="SDPJ" id="SDPJ" value="" class="form-control"  >
    </div>


    <div class="form-group mb-3">
      <label for=""><h3>Soldul persoanelor fizice</h3></label>
      <input type="text" name="SDPF" id="SDPF"  value="" class="form-control" >
    </div>

    <div class="form-group mb-3">
      <label for=""><h3>Venit pentru Ianuarie</h3></label>
      <input type="text" name="venit_ian" id="venit_ian" value="" class="form-control"  >
    </div>

    <div class="form-group mb-3">
      <label for=""><h3>Venit pentru Februarie</h3></label>
      <input type="text" name="venit_feb" id="venit_feb" value="" class="form-control"  >
    </div>
    <div class="form-group mb-3">
      <label for=""><h3>Venit pentru Martie</h3></label>
      <input type="text" name="venit_mar" id="venit_mar" value="" class="form-control"  >
    </div>
    <div class="form-group mb-3">
      <label for=""><h3>Venit pentru Aprilie</h3></label>
      <input type="text" name="venit_apr" id="venit_apr" value="" class="form-control"  >
    </div>
    <div class="form-group mb-3">
      <label for=""><h3>Venit pentru Mai</h3></label>
      <input type="text" name="venit_mai" id="venit_mai" value="" class="form-control"  >
    </div>
    <div class="form-group mb-3">
      <label for=""><h3>Venit pentru Iunie</h3></label>
      <input type="text" name="venit_iun" id="venit_iun" value="" class="form-control"  >
    </div>
    <div class="form-group mb-3">
      <label for=""><h3>Venit pentru Iulie</h3></label>
      <input type="text" name="venit_iul" id="venit_iul" value="" class="form-control"  >
    </div>

    <div class="form-group mb-3">
      <label for=""><h3>Venit pentru August</h3></label>
      <input type="text" name="venit_aug" id="venit_aug" value="" class="form-control"  >
    </div>

    <div class="form-group mb-3">
      <label for=""><h3>Venit pentru Septembrie</h3></label>
      <input type="text" name="venit_sep" id="venit_sep" value="" class="form-control"  >
    </div>

    <div class="form-group mb-3">
      <label for=""><h3>Venit pentru Octombrie</h3></label>
      <input type="text" name="venit_oct" id="venit_oct" value="" class="form-control"  >
    </div>

    <div class="form-group mb-3">
      <label for=""><h3>Venit pentru Noiembrie</h3></label>
      <input type="text" name="venit_nov" id="venit_nov" value="" class="form-control"  >
    </div>

    <div class="form-group mb-3">
      <label for=""><h3>Venit pentru Decembrie</h3></label>
      <input type="text" name="venit_dec" id="venit_dec" value="" class="form-control"  >
    </div>

    <div class="form-group mb-3">
      <label for=""><h3>Tarifele pentru active</h3></label>
      <input type="text" name="t_active" id="t_active" value="" class="form-control"  >
    </div>



    <div class="form-group mb-3">
      <label for=""><h3>Tarifele pentru depozite</h3></label>
      <input type="text" name="t_depozite" id="t_depozite" value="" class="form-control"  >
    </div>

    <div class="form-group mb-3">
      <label for=""><h3>Tarifele pentru achizitia titlurilor de stat</h3></label>
      <input type="text" name="t_titluri" id="t_titluri" value="" class="form-control"  >
    </div>

    <div class="form-group mb-3">
      <label for=""><h3>Tarifele pentru credite</h3></label>
      <input type="text" name="t_credite" id="t_credite" value="" class="form-control"  >
    </div>

    <div class="form-group mb-3">
      <label for=""><h3>Dobinda pentru persoane fizice</h3></label>
      <input type="text" name="dobinda_f" id="dobinda_f" value="" class="form-control"  >
    </div>

    <div class="form-group mb-3">
      <label for=""><h3>Dobinda pentru persoane juridice</h3></label>
      <input type="text" name="dobinda_j" id="dobinda_j" value="" class="form-control"  >
    </div>

    <div class="form-group mb-3">
      <select name="locatia" id="locatia">
      <option value="">--- Alege localitatea ---</option>
      <option value="1">Chisinau</option>
      <option value="2">Ungheni</option>
      <option value="3">Calarasi</option>
      <option value="4">Balti</option>
      </select>
    </div>

    <div class="form-group mb-3">
      <select name="regiunea" id="regiunea">
      <option value="">--- Alege regiunea ---</option>
      <option value="1">Municipiu Chisinau</option>
      <option value="2">Raionul Ungheni</option>
      <option value="3">Raionul Calarasi</option>
      <option value="4">Municipiul Balti</option>
      </select>
    </div>

    <div class="container" style="margin-top; 50px"><input type="submit" name="Submit" class="btn btn-primary" value="Submit"></div>
    </div>
  </form>
</body>
</html>
