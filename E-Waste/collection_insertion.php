<?php

$v_id=$_POST['v_id'];
$pro_id=$_POST['pro_id'];
$qty=$_POST['qty'];
$upload_date=$_POST['upload_date'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="insert into collection values(null,'$v_id','$pro_id','$qty','$upload_date')";
$res=mysql_query($sql);



?>
<script>
alert('Value Inserted');
document.location="collection_view.php";
</script>