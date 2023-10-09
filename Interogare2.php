<table align="center" border="2">
  <tr>
    <th>Banca</th>

    <th>Dobinda persoanelor juridice</th>


  </tr>

<?php

      $conn = new mysqli('localhost','root','','banca1');

      if($conn->connect_error){
        die("ERROR".$conn-connect_error);
      }


      $sql = "SELECT * FROM banca NATURAL JOIN indecele where id_banca = id_bancii";

      if($result = $conn->query($sql)){
        foreach ($result as $row) {
          if($row['dobinda_j'] > $_POST['dobinda_j']){
            echo "<tr><th>". $row['num_banca']. "</th>";
            echo "<th>" . $row["dobinda_j"]. "</th><tr>";

          }
        }
      }else{
        echo"error".$conn->error;
      }

      ?>






</table>
