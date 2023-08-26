<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$servername = "localhost";
$username = "root";
$password = "";
$db = "web";

$conn = mysqli_connect($servername,$username,$password,$db);
$sql = "select * from notlar where ogrno = '".$q."'";

$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){

    echo "<table>
    <tr>
    <td>Öğrenci No</td>
    <td>Vize</td>
    <td>Final</td>
    <td>Geçme Notu</td>
    </tr>";

    echo("<tr>");
    echo("<td>".$row["ogrno"]."</td>");
    echo("<td>".$row["vize"]."</td>");
    echo("<td>".$row["final"]."</td>");
    echo("<td>".$row["gecmenotu"]."</td>");
    echo("</tr></table>");

  }
}    

?>
</body>
</html>