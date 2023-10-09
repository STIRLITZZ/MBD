<table align="center">
  <tr>
    <th>Banca</th>
    <th>Localitatea</th>
    <th>Regiunea</th>
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
      <th><?php

      $conn = new mysqli('localhost','root','','banca1');

      if($conn->connect_error){
        die("ERROR".$conn-connect_error);
      }


      $sql = "SELECT * FROM banca NATURAL JOIN localitatea where id_localitate = id_locatia";

      if($result = $conn->query($sql)){
        foreach ($result as $row) {


        echo"<p>". $row['num_localitate']."</p>";
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


        $sql = "SELECT * FROM banca NATURAL JOIN regiunea where id_regiunea = id_regiune";

        if($result = $conn->query($sql)){
          foreach ($result as $row) {


          echo"<p>". $row['num_regiune']."</p>";
          }
        }else{
          echo"error".$conn->error;
        }

        ?>
      </th>

  </tr>
</table>
