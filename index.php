<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Experiment</title>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>


     <h1>Reprezentare</h1>

        <h2>Iesiri Informationale</h2>
        <br>
        <hr>

            <h4>Lista bancilor dobinda pentru persoane juridice si fizice</h4>

            <?php
            include "Iesire1.php";
            ?>
            <br><br><br><br>
            <h4>Lista bancilor cu tarifele pentru servicii</h4>

            <?php
            include "Iesire2.php";
            ?>

            <br><br><br><br>
            <h4>Lista bancilor cu soldurile</h4>

            <?php
            include "Iesire3.php";
            ?>

            <br><br><br><br>
            <h4>Lista bancilor si afisarea localitatii si regiunei</h4>

            <?php
            include "Iesire4.php";
            ?>




            <h2>Interogari</h2>
            <br>
            <hr>
            <form action="Interogare1.php" method="post">
            <h4>Introduceti marimea tarifului minimal pentru depozite</h1>

                <input type="text" class="form_text" id="tarif" name="tarif" >
                <button type="submit" class="submit btn btn-primary" id="out" value="submit" >Submit</button>

                <br>
            </form>
            <form action="Interogare1.1.php" method="post">
            <h4>Introduceti marimea tarifului minimal pentru credite</h1>

                <input type="text" class="form_text" id="tarif" name="tarif" >
                <button type="submit" class="submit btn btn-primary" id="out" value="submit" >Submit</button>

                <br>
            </form>
            <form action="Interogare1.2.php" method="post">
            <h4>Introduceti marimea tarifului minimal pentru achizitia titlurilor de stat</h1>

                <input type="text" class="form_text" id="tarif" name="tarif" >
                <button type="submit" class="submit btn btn-primary" id="out" value="submit" >Submit</button>

                <br>
            </form>
            <form action="Interogare1.3.php" method="post">
            <h4>Introduceti marimea tarifului minimal pentru active</h1>

                <input type="text" class="form_text" id="tarif" name="tarif" >
                <button type="submit" class="submit btn btn-primary" id="out" value="submit" >Submit</button>

                <br>
            </form>


            <?php
            //include "Interogare1.php";
            ?>


            <br><br><br><br>
            <form action="Interogare2.php" method="post">
            <h4>Introduceti marimea dobinzii pentru persoane juridice</h1>

                <input type="text" class="form_text" id="dobinda_j" name="dobinda_j" >
                <button type="submit" class="submit btn btn-primary" id="out" value="submit" >Submit</button>

                <br>
            </form>
            <br><br>

            <form action="Interogare2.1.php" method="post">
            <h4>Introduceti marimea dobinzii pentru persoane fizice</h1>

                <input type="text" class="form_text" id="dobinda_f" name="dobinda_f" >
                <button type="submit" class="submit btn btn-primary" id="out" value="submit" >Submit</button>

                <br>
            </form>
            <?php
            //include "Interogare2.php";
            ?>


            <br><br><br><br>

            <form action="Interogare3.php" method="post">
            <h4>Alegeti luna pentru care se vor afisa venitul<h4>

                <select name="luna" id="luna">
                <option value="">--- Alege luna ---</option>
                <option value="venit_ian">Ianuarie</option>
                <option value="venit_feb">Februarie</option>
                <option value="venit_mar">Martie</option>
                <option value="venit_apr">Aprilie</option>
                <option value="venit_mai">Mai</option>
                <option value="venit_iun">Iunie</option>
                <option value="venit_iul">Iulie</option>
                <option value="venit_aug">August</option>
                <option value="venit_sep">Septembrie</option>
                <option value="venit_oct">Octombrie</option>
                <option value="venit_nov">Noiembrie</option>
                <option value="venit_dec">Decembrie</option>
                </select>
                <button type="submit" class="submit btn btn-primary" id="out" value="submit" >Submit</button>

                <br>
            </form>
            <br><br><br>
            <form action="Interogare4.php" method="post">
            <h4>Introduceti marimea rentabilitatii pentru banci</h1>

                <input type="text" class="form_text" id="rent" name="rent" >
                <button type="submit" class="submit btn btn-primary" id="out" value="submit" >Submit</button>

                <br>
            </form>
            <br><br><br><br>

            <h2>Servicii</h2>
            <br>
            <hr>


              <br><br><br>
              <form action="Serviciu1.php" method="post">
              <h4>Căutați ponderea dupa id</h4>
              <div >

                <input type="text" name="ids1" id="ids1" class="form-control">

                </div>

                        <div class="col-md-4 pent">
                            <br><button type="submit" class="btn btn-primary">Search</button>
                        </div>
                <div>
                  <br>
              </form>
              <br><br><br>
              <form action="Serviciu2.php" method="post">
              <h4>Căutați capitalul dupa id</h4>
              <div >

                <input type="text" name="ids2" id="ids2" class="form-control">

                </div>

                        <div class="col-md-4 pent">
                            <br><button type="submit" class="btn btn-primary">Search</button>
                        </div>
                <div>
                  <br>
              </form>

    </body>
</html>
