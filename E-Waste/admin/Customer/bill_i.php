<?php
$bdate=$_POST['bdate'];
$reg_id=$_POST['reg_id'];

include('dbconnection.php');
$sql="insert into bill values(null,'$bdate','$reg_id','pending')";
mysql_query($sql);

$id=mysql_insert_id();
?>

<script>
alert('Enter the details');
document.location="bill_detail.php?id=<?php echo $id; ?>";
</script>