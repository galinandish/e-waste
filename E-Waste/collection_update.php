<?php
$coll_id=$_POST['coll_id'];
$v_id=$_POST['v_id'];
$pro_id=$_POST['pro_id'];
$qty=$_POST['qty'];
$upload_date=$_POST['upload_date'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="update collection set v_id='$v_id',pro_id='$pro_id',qty='$qty',upload_date='$upload_date' where coll_id='$coll_id'";
$res=mysql_query($sql);

?>
<script>
alert('Value updated');
document.location="collection_view.php";
</script>