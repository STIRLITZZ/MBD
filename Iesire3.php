<table align="center">
  <tr>
    <th>Banca</th>
    <th>Soldul persoanelor juridice</th>
    <th>Soldul persoanelor fizice</th>
    <th>Capitalul total </th>
    <th>Soldul datoriei </th>


  </tr>

  <?php

      $conn = new mysqli('localhost','root','','banca1');

      if($conn->connect_error){
        die("ERROR".$conn-connect_error);
      }


      $sql = "SELECT * FROM banca NATURAL JOIN soldul where id_banca = id_bancii";

      if($result = $conn->query($sql)){
        foreach ($result as $row) {

          echo "<tr><th>". $row['num_banca'] . " </th>";
          echo "<th>". $row['SDPJ'] . " %</th>";
          echo "<th>" . $row["SDPF"] . " %</th>";
          echo "<th>" . $row["capitalul"] . " mln lei</th>";
          echo "<th>" . $row["datoria"] . " mln lei</th></tr>";

        }
      }else{
        echo"error".$conn->error;
      }

      ?>

</table>
