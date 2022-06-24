<?php
 include_once '../../system/lib/Connection.php';
include_once '../../system/lib/DBContext.php';
if(isset($_GET['id']))
{
 $id=$_GET['id'];

 $sql ="delete from user where id = '$id'";
$d=new DBContext;
if($d->delete($sql))
{
 echo "data deleted";
 
}
else{
  echo "data not deleted";
}

}


?>
<html>

<head>
 <title>Homepage</title>
</head>

<table width='80%' border=0>

 <tr bgcolor='#CCCCCC'>

  <td>ID</td>
  <td>Name</td>
  <td>password</td>
  <td>Action</td>
 </tr>
 <?php 
 $sql="select * from user";
 $ob=new DBContext;
 $m=1;
	foreach($ob->select($sql) as $value) { 		
		echo "<tr>";
  	echo "<td>".$m++."</td>";
		echo "<td>".htmlentities($value['name'])."</td>";
		echo "<td>".$value['password']."</td>";
		echo "<td><a href=\"edit.php?id=$value[id]\">Edit</a> | <a href=\"view.php?id=$value[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
</table>
</body>

</html>