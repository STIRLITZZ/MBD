
<?php
      $conn = new mysqli('localhost','root','','banca1');

      if($conn->connect_error){
        die("ERROR".$conn-connect_error);
      }


      $sql = "SELECT * FROM banca NATURAL JOIN soldul where id_banca = id_bancii";

      if($result = $conn->query($sql)){
        foreach ($result as $row) {
          if($row['id_banca'] == $_POST['ids2']){
          echo "<p>Capitalul pentru banca ".$row['num_banca']. " este: ".$row['capitalul']. "</p>";
        }

        }
      }else{
        echo"error".$conn->error;
      }

      ?>
