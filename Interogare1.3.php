
<?php

      $conn = new mysqli('localhost','root','','banca1');

      if($conn->connect_error){
        die("ERROR".$conn-connect_error);
      }


      $sql = "SELECT * FROM banca NATURAL JOIN tarifele where id_banca = id_banci ORDER BY t_active";

      if($result = $conn->query($sql)){
        echo "<table align='center' border='2'>
          <tr>
            <th>Banca</th>
            <th>Tarife pentru active</th>

          </tr>

          ";

        foreach ($result as $row) {
          if($row['t_active'] < $_POST['tarif']){

            echo "<tr><th>". $row['num_banca'] . "</th>";
            echo "<th>" . $row["t_active"] . " %</th></tr>";
          }



        }
      }else{
        echo"error".$conn->error;
      }
      echo "

      </table>";
      ?>
