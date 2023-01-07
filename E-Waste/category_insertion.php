<?php 
$cat_name=$_POST['cat_name'];
$cat_details=$_POST['cat_details'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="insert into category values(null,'$cat_name','$cat_details')";
$res=mysql_query($sql);


?>
<script>
alert('Values inserted');
document.location="category_view.php";
</script>