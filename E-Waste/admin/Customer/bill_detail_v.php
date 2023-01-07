<?php include('metatags.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php include('nav.php'); ?>

  <!-- Main Sidebar Container -->
  
  <?php include('sidebar.php'); ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Request Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



<section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">

            </div>
			
            <!-- /.card-header -->
            <div class="card-body">
   	<?php
include('dbconnection.php');
$id=$_REQUEST["id"];
//echo $billno;
	if(isset($_POST["a"]))
	{
	        if($_POST["a"]=="insert")
			{

			$sql1="select * from product where product_id='".$_POST["product_id"]."'";
			 $res1=mysql_query($sql1);
			 $row1=mysql_fetch_array($res1);
			$price=$row1['price'];
			$cgst=$row1['cgst'];
			$sgst=$row1['sgst'];
			$qty=$_POST["qty"];
			
			$amt=$price*$qty;
			$cg=($amt*$cgst)/100;
			$sg=($amt*$sgst)/100;
			
			$total=$amt+$cg+$sg;
			
			$sql="insert into bill_details values(null,'$id','".$_POST["product_id"]."','$price','".$_POST["qty"]."','$cgst','$sgst','$total')";
			mysql_query($sql);
			
			}
	}



$sql="select * from bill ord, registration v where ord.reg_id=v.reg_id and ord.bill_id='$id'";
$res=mysql_query($sql);
$row2=mysql_fetch_array($res);

  ?>
 <table class="table table-striped table-bordered table-hover">
<thead>

						    <tr>
      <th width="200px" bgcolor="#F2F2F2">Customer:</th>
      <th><?php echo $row2["name"]; ?></th>
    </tr>
    <tr>
      <th width="200px" bgcolor="#F2F2F2">Bill Date: </th>
      <th><?php echo $row2["bill_date"]; ?></th>
    </tr>
</table>


	  
	              <table class="table table-bordered" id="sample_1">
                        <thead>
                            <tr style="background-color:#F2F2F2;" >
                            	<th>#</th>
								<th>Product</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>CGST</th>
								<th>SGST</th>
								<th>Total</th>
								<th></th>
								
                            </tr>
                        </thead>
                        <tbody>
                        
<?php 
$sl=0;
$gtot=0;
include('dbconnection.php');
$sql="select * from bill_details od,bill ord, product m where od.bill_id=ord.bill_id and od.product_id=m.product_id and od.bill_id='$id'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
			$price1=$row['price'];
			$cgst1=$row['cgst'];
			$sgst1=$row['sgst'];
			$qty1=$row["qty"];
			$total=$row["total"];
			
			$amt=$price1*$qty1;
			$cg=($amt*$cgst1)/100;
			$sg=($amt*$sgst1)/100;
			
//			$total=$amt+$cg+$sg;
//$tot=$row['total'];
$gtot=$gtot+$total;
$sl=$sl+1;
?>
<tr>

<td bgcolor="#F2F2F2"><?php echo $sl; ?></td>
<td><?php echo $row['product_name'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $row['qty'];?></td>
<td><?php echo $row['cgst'];?>%(<?php echo $cg;?>)</td>
<td><?php echo $row['sgst'];?>%(<?php echo $sg;?>)</td>
<td><?php echo $row['total'];?></td>

<td><a href="bill_detail_delete.php?id1=<?php echo $row['bd_id'];?>&id=<?php echo $row['bill_id'];?>"><img src="img/bin.gif" ></a></td>

</tr>
<?php
}
?>                               
							<tr style="background-color:#F2F2F2">
							<td colspan="6">Grand Total</td>
							<td><?php  echo $gtot; ?></td>
							</tr>   
							   
                        </tbody>
						
                    </table>
 </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

  </div>
  <!-- /.content-wrapper -->

<?php include('footer.php'); ?>