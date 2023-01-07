<?php
$product_name=$_POST['product_name'];
$composition_id=$_POST['composition_id'];
$remedies_id=$_POST['remedies_id'];

$target="files/";
$image=$_FILES["image"]["name"];
$target.=basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"],$target);

include('dbconnection.php');
 $sql="insert into product values(null,'$product_name','$composition_id','$remedies_id','$image')";
mysql_query($sql);
?>

<script>
alert('Thank You for Registration');
document.location="product_view.php";
</script>