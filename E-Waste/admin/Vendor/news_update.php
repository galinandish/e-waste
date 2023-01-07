<?php
$news_id=$_POST['news_id'];
$title=$_POST['title'];
$description=$_POST['description'];
$date=$_POST['date'];

include('dbconnection.php');

$sql="update news set title='$title',description='$description',date='$date' where news_id='$news_id'";
mysql_query($sql);
?>

<script>
alert('Thank You for Updating');
document.location="news_view.php";
</script>