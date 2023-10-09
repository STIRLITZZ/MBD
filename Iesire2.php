<table align="center">
  <tr>
    <th>Banca</th>
    <th>Tarife pentru depozite</th>
    <th>Tarife pentru credite</th>
    <th>Tarife pentru active</th>
    <th>Tarife pentru titluri de stat</th>

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


      $sql = "SELECT * FROM banca NATURAL JOIN tarifele where id_banca = id_banci";

      if($result = $conn->query($sql)){
        foreach ($result as $row) {


        echo"<p>". $row['t_depozite']." %</p>";
        }
      }else{
        echo"error".$conn->error;
      }

      ?>

      </th>
      <th><?php

      $conn = new mysqli('localhost','root','','banca1');

      if($conn->connect_error){
        die("ERROR".$conn-connect_error);
      }


      $sql = "SELECT * FROM banca NATURAL JOIN tarifele where id_banca = id_banci";

      if($result = $conn->query($sql)){
        foreach ($result as $row) {


        echo"<p>". $row['t_credite']." %</p>";
        }
      }else{
        echo"error".$conn->error;
      }

      ?>

      </th>
      <th><?php

      $conn = new mysqli('localhost','root','','banca1');

      if($conn->connect_error){
        die("ERROR".$conn-connect_error);
      }


      $sql = "SELECT * FROM banca NATURAL JOIN tarifele where id_banca = id_banci";

      if($result = $conn->query($sql)){
        foreach ($result as $row) {


        echo"<p>". $row['t_active']." %</p>";
        }
      }else{
        echo"error".$conn->error;
      }

      ?>

      </th>

      <th><?php

      $conn = new mysqli('localhost','root','','banca1');

      if($conn->connect_error){
        die("ERROR".$conn-connect_error);
      }


      $sql = "SELECT * FROM banca NATURAL JOIN tarifele where id_banca = id_banci";

      if($result = $conn->query($sql)){
        foreach ($result as $row) {


        echo"<p>". $row['t_titluri']." %</p>";
        }
      }else{
        echo"error".$conn->error;
      }

      ?>

      </th>


  </tr>
</table>
