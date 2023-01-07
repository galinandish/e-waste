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
			
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">

<thead>
<tr>
<th>SI_NO</th>
<th>Bill Date</th>
<th>Customer</th>
<th>Status</th>
<th>View Details</th>


</tr>
</thead>
<tbody>
<?php
$i=0;
include('dbconnection.php');
$sql="select * from bill po,registration v where po.reg_id=v.reg_id and v.email_id='$uname'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$i=$i+1;

$st=$row['status'];
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['bill_date'];?></td>
<td><?php echo $row['name'];?></td>
<?php if($st=='paid')
{
?>
<td bgcolor="#FFB0B0"><?php echo $row['status']; ?></td>
<?php
}
else
{
?>
<td><a href="pay.php?id=<?php echo $row['bill_id'];?>"><button>Pay</button></a></td>
<?php } ?>
<td><a href="bill_detail_v.php?id=<?php echo $row['bill_id'];?>">View</a></td>


</tr>
<?php }
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