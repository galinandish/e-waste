<?php
$title=$_POST['title'];
$description=$_POST['description'];
$date=$_POST['date'];
include('dbconnection.php');
$sql="insert into news values(null,'$title','$description','$date')";
mysql_query($sql);
?>

<script>
alert('Thank You for Registration');
document.location="news_view.php";
</script>