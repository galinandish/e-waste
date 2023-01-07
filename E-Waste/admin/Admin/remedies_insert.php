<?php
$description=$_POST['description'];
include('dbconnection.php');
$sql="insert into remedies values(null,'$description')";
mysql_query($sql);
?>

<script>
alert('Thank You for Registration');
document.location="remedies_view.php";
</script>