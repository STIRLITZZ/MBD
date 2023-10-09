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
<br><br>
<h3>Cautarea bancii</h3>
 <form method="get" action="crud.php">

  <input type="text" name="id" id='id'>
  <input type="submit" name="submit_btn">
</form>


<br><br><br><br>


   <div>
   <form action="register.php" method="post">
   <h1>Inregistrarea Datelor</h1>
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
     <br><br>
       <button type="submit" class="submit btn btn-primary" id="out" value="submit" >Submit</button>

       <br>
   </form>











</body>
</html>
