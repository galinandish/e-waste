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
              <h3 class="card-title">Sales Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              


<?php 
 include('val.php'); 
 ?>
<form name="form1" method="post" action="sales_insertion.php">
 <table id="example1" class="table table-bordered table-striped">
 <tr>
 <td>Product</td>
 <td><select name="product_id" id="product_id">
          <option>SELECT</option>
		   <?php
  include('dbconnection.php');
  $sql="select * from product";
  $res=mysql_query($sql);
  while($row2=mysql_fetch_array($res))
  {
  ?>
          <option value="<?php echo $row2['product_id'];?>"><?php echo $row2['product_name'];?></option>
		  <?php
		}
		?>
        </select></td>
    <tr>
      <td>Quantity</td>
      <td><input name="qty" type="text" id="qty"></td>
    </tr>
    <tr>
      <td>Rate </td>
	  
      <td><input name="rate" type="text" id="rate"></td>
    </tr>
   <tr>
      <td>Laste Date </td>
      <td><input name="last_date" type="text" id="last_date"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit">
      <input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
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
