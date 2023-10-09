<table align="center">
  <tr>
    <th>Banca</th>
    <th>Dobinda persoanelor fizice</th>
    <th>Dobinda persoanelor juridice</th>


  </tr>
  <tr>
    <th>  <?php

    // include "conect.php";

    $conn = new mysqli('localhost','root','','banca1');

    if($conn->connect_error){
      die("ERROR".$conn-connect_error);
    }
      $sql = "SELECT * FROM banca ";

      if($result = $conn->query($sql)){
        foreach ($result as $row) {


        echo"<p>". $row['num_banca']."</p>";


        }
      }else{
        echo"error".$conn->error;
      }

      ?></th>
      <th>
      <?php

      $conn = new mysqli('localhost','root','','banca1');

      if($conn->connect_error){
        die("ERROR".$conn-connect_error);
      }


      $sql = "SELECT * FROM banca NATURAL JOIN indecele where id_banca = id_bancii";

      if($result = $conn->query($sql)){
        foreach ($result as $row) {


        echo"<p>". $row['dobinda_f']." %</p>";
        }
      }else{
        echo"error".$conn->error;
      }

      ?>

      </th>
      <th>
        <?php

        $conn = new mysqli('localhost','root','','banca1');

        if($conn->connect_error){
          die("ERROR".$conn-connect_error);
        }


        $sql = "SELECT * FROM banca NATURAL JOIN indecele where id_banca = id_bancii";

        if($result = $conn->query($sql)){
          foreach ($result as $row) {


          echo"<p>". $row['dobinda_j']." %</p>";
          }
        }else{
          echo"error".$conn->error;
        }

        ?>

      </th>



  </tr>
</table>
