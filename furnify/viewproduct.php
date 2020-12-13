
<html>
    <body>
        
        
<table style ="margin:auto;width:100% ;text-align:center;border:1px solid black;padding: 15px;">
    <thead >
        <tr><th>productname</th>
            <th>price</th>
            <th>productimages</th>
            <th>stock</th></tr>
</thead>
<?php
session_start();
$databasename = $_POST['databasename'];


$link = mysqli_connect("localhost","root","1234","$databasename");
$mysql_query = "select * from  products";
$result = mysqli_query ($link , $mysql_query);
while($row = mysqli_fetch_array($result))
{
    ?>
    <tr>
        

        <td> <?php echo $row['productname'];?></td>
        <td><?php echo $row['price'];?></td>
        <td><?php echo '<img src="image/'.$row['productimages'].'"alt="Image" style="width:100px; height:100px;">';?></td>
        <td><?php echo $row['stock'];?></td>


</tr>
<?php 
}


?>

</table>
<p>
        logout  <strong><a href="Viewproduct.html">Click</a></strong>Here
      </p>
</body>
</html>