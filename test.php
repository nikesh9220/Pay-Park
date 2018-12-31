<?php
include "header2.php";
include "dbcon.php";
$m=$_POST["area"];
echo "$m";

$sql1 = mysqli_query($connection, "SELECT *   FROM area WHERE areaname= '$m'  ");
while ($row1 = $sql1->fetch_assoc()) {

    $area_id= $row1['areaid'];
    echo "$area_id";

}

?>
<table><thead>
<tr>
    <th>Area ID</th>
    <th>Area name</th>
    <th>City </th>
    <th>Action</th>

</tr> </thead>
</table>


<tbody>
<?php
$sql = mysqli_query($connection, "SELECT * FROM addparking,area WHERE addparking.areaid='$area_id  '   ");
while ($row = $sql->fetch_assoc()){

    echo $row['name'];


} ?>



<tr>
    <td></td>




