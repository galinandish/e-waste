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
              <li class="breadcrumb-item active">Dashboard v1</li>
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
              <h3 class="card-title">Rating Details</h3>
            </div>
			<a href="rating.php"><button>ADD NEW</button></a>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>SI_NO</th>
<th>Reg Id</th>
<th>Product Id</th>
<th>Rating</th>
<th>--</th>
<th>--</th>
</tr>
</thead>
<tbody>
<?php
$i=0;
include('dbconnection.php');
$sql="select * from rating r,registration re,product p where r.reg_id=re.reg_id and r.product_id=p.product_id";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$i=$i+1;
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['product_name'];?></td>
<td><?php echo $row['rating'];?></td>
<td><a href="rating_delete.php?id=<?php echo $row['rating_id'];?>">delete</a></td>
<td><a href="rating_edit.php?id=<?php echo $row['rating_id'];?>">edit</a></td>
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