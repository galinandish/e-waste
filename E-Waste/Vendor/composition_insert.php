<?php
$comp_materials=$_POST['comp_materials'];
$comp_desc=$_POST['comp_desc'];
$comp_advantages=$_POST['comp_advantages'];
include('dbconnection.php');
$sql="insert into composition values(null,'$comp_materials','$comp_desc','$comp_advantages')";
mysql_query($sql);
?>

<script>
alert('Thank You for Registration');
document.location="composition_view.php";
</script>
