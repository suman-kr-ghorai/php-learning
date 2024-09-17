<?php
  include('connection.php');
  $sql="SELECT * FROM `user00`";
  
  $data=mysqli_query($conn,$sql);
  //$r=mysqli_fetch_assoc($data);
  //print_r($r);


?>

<table border="1px">
<tr>
    <th>firstName</th>
    <th>lastname</th>
    <th>age</th>
    <th>gender</th>
    <th>languages</th>
    <th>backend</th>
    <th>frontend</th>
    <th>databases</th>
</tr>
<?php
while ($result= mysqli_fetch_assoc($data)) {
	?>
<tr>
<td><?php echo $result['firstname']?></td>
<td><?php echo $result['lastname']?></td>
<td><?php echo $result['age']?></td>
<td><?php echo $result['gender']?></td>
<td><?php echo $result['language']?></td>
<td><?php echo $result['backend']?></td>
<td><?php echo $result['frontend']?></td>
<td><?php echo $result['database']?></td>
</tr>
<?php
}
?>
</tr>
</table>