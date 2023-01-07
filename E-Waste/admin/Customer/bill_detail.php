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
              <li class="breadcrumb-item active">Bill Details</li>
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
//$id=$_REQUEST["id"];
//echo $billno;

  ?>

	  
	              <table class="table table-bordered" id="sample_1">
                        <thead>
                            <tr style="background-color:#F2F2F2;" >
                            	<th>#</th>
								<th>Bill Date</th>
								<th>User</th>
								<th>Product</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>CGST</th>
								<th>SGST</th>
								<th>Total</th>
								
								
                            </tr>
                        </thead>
                        <tbody>
                        
<?php 
$sl=0;
include('dbconnection.php');
$sql="select od.bill_date,r.email_id,m.product_name,od.price,od.qty,od.cgst,od.sgst,od.total,od.bill_id from bill_details od,registration r, product m where od.reg_id=r.reg_id and od.product_id=m.product_id and r.email_id='$uname'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{

$sl=$sl+1;
?>
<tr>

<td bgcolor="#F2F2F2"><?php echo $sl; ?></td>
<td><?php echo $row['bill_date']; ?></td>
<td><?php echo $row['email_id']; ?></td>
<td><?php echo $row['product_name'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $row['qty'];?></td>
<td><?php echo $row['cgst'];?></td>
<td><?php echo $row['sgst'];?></td>
<td><?php echo $row['total'];?></td>

</tr>
<?php
}
?>                               
							  
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