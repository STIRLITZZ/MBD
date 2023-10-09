

<?php
  echo "<table align='center' border='2'>
    <tr>
      <th>Banca</th>

      <th>Rentabilitatea</th>


    </tr>";
      $conn = new mysqli('localhost','root','','banca1');

      if($conn->connect_error){
        die("ERROR".$conn-connect_error);
      }


      $sql = "SELECT * FROM banca NATURAL JOIN soldul where id_banca = id_bancii";

      if($result = $conn->query($sql)){
        foreach ($result as $row) {

            echo "<tr><th>". $row['num_banca']. "</th>";
            echo "<th>" . $row['rentabilitate']. "</th><tr>";

        }
      }else{
        echo"error".$conn->error;
      }

      ?>

</table>
