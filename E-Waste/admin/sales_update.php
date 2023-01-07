<?php
$sale_id=$_POST['sale_id'];
$pro_id=$_POST['pro_id'];
$qty=$_POST['qty'];
$starting_rate=$_POST['starting_rate'];
$final_rate=$_POST['final_rate'];
$last_date=$_POST['last_date'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="update  sales  set pro_id='$pro_id',qty='$qty',starting_rate='$starting_rate',final_rate='$final_rate',last_date='$last_date' where sale_id='$sale_id'";
$res=mysql_query($sql);

?>
<script>
alert('Value updated');
document.location="sales_view.php";
</script>