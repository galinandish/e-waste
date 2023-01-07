<?php
$product_name=$_POST['product_name'];
$c=$_POST['c'];
$b=$_POST['b'];
$p=$_POST['p'];
$cg=$_POST['cg'];
$sg=$_POST['sg'];

$target="files/";
$image=$_FILES["image"]["name"];
$target.=basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"],$target);

include('dbconnection.php');
 $sql="insert into product values(null,'$product_name','$c','$b','$p','$cg','$sg','$image','0')";
mysql_query($sql);
?>

<script>
alert('Thank You for Registration');
document.location="product_view.php";
</script>