<?php
$pro_id=$_POST['pro_id'];
$qty=$_POST['qty'];
$starting_rate=$_POST['starting_rate'];
$final_rate=$_POST['final_rate'];
$last_date=$_POST['last_date'];

$con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management');
$sql="insert into sales values(null,'$pro_id','$qty','$starting_rate','$final_rate','$last_date')";
$res=mysql_query($sql);

?>
<script>
alert('Value Inserted');
document.location="sales_view.php";
</script>