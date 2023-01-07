<?php
$cat_id=$_POST['cat_id'];
$pro_name=$_POST['pro_name'];
$pro_details=$_POST['pro_details'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="insert into product values(null,'$cat_id','$pro_name','$pro_details')";
$res=mysql_query($sql);

?>

<script>
alert('Value Inserted');
document.location="product_view.php";
</script>