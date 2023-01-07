<?php
$composition_id=$_POST['composition_id'];
$comp_materials=$_POST['comp_materials'];
$comp_desc=$_POST['comp_desc'];
$comp_advantages=$_POST['comp_advantages'];

include('dbconnection.php');

$sql="update composition set comp_materials='$comp_materials',comp_desc='$comp_desc',comp_advantages='$comp_advantages' where composition_id='$composition_id'";
mysql_query($sql);
?>

<script>
alert('Thank You for Updating');
document.location="composition_view.php";
</script>