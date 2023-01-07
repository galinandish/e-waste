<?php
$pur_date=$_POST['pdate'];
$v_id=$_POST['v_id'];

include('dbconnection.php');
$sql="insert into pur_order values(null,'$pur_date','$v_id')";
mysql_query($sql);

$id=mysql_insert_id();
?>

<script>
alert('Thank You for Registration');
document.location="pur_detail.php?id=<?php echo $id; ?>";
</script>