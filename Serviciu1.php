
<?php
      $conn = new mysqli('localhost','root','','banca1');

      if($conn->connect_error){
        die("ERROR".$conn-connect_error);
      }


      $sql = "SELECT * FROM banca NATURAL JOIN soldul where id_banca = id_bancii";

      if($result = $conn->query($sql)){
        foreach ($result as $row) {
          if($row['id_banca'] == $_POST['ids1']){
          $capit = $row['capitalul'];
          $dator = $row['datoria'];
          $rent = $row['rentabilitate'];
          echo "<p>Ponderea pentru banca ".$row['num_banca']. " este: </p>";
        }

        }
      }else{
        echo"error".$conn->error;
      }



      $pondrea = (($capit - $dator/10) * $rent)/1000000;
      if($row['id_banca'] = $_POST['ids1']){
        echo "".$pondrea."";
      }

      ?>
