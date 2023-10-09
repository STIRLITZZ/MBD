
<?php

$conn = new mysqli('localhost','root','','banca1');
if(isset($_GET['id']))
{

    $id = $_GET['id'];
    // $id = 1 ;
    $sql = "SELECT * FROM banca WHERE id_banca='$id' ";
    $sql_1 = "SELECT * FROM banca NATURAL JOIN localitatea WHERE id_locatia=id_localitate AND id_banca='$id'";
    $sql_2 = "SELECT * FROM banca  JOIN regiunea WHERE id_regiunea=id_regiune  AND id_banca='$id'";

    if($result = $conn->query($sql)){
        while($row = $result->fetch_array()){
            echo "<table class='table'><tr><th scope='col' border='2'>Update</th><th scope='col'>Delete</th>
            <th scope='col'>Banca</th><th scope='col'>Localitatea</th>
            <th scope='col'>Regiunea</th>
            </tr>";
            echo"<tr>";
            echo"<th scope='col'><button ><a class='btn btn-primary' href='create.php?id=${row['id_banca']}' target='_blank'>Update</a></button></th>";
            echo"<th scope='col'><button ><a class='btn btn-primary' href='delete.php?id=${row['id_banca']}' target='_blank'>Delete</a></button></th>";
            echo "<th  scope='col'>". $row["num_banca"] . "</th>";



            }
        }
    else
    {
      echo "Nu există înregistrare";
    }


    if($result = $conn->query($sql_1)){
      while($row = $result->fetch_array()){
        echo "<th  scope='col'>" . $row["num_localitate"] . "</th>";

      }}

    if($result2 = $conn->query($sql_2)){
        while($row = $result2->fetch_array()){
      echo "<th  scope='col'>" . $row["num_regiune"] . "</th>";
      echo"</tr>";
      echo"</table>";
        }}

  }
  ?>

</div>
