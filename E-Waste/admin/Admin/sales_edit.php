
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
              <h3 class="card-title">Product Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              


<?php 
 include('val.php'); 
 ?>


<?php
include('dbconnection.php');
$id=$_REQUEST['id'];
$sql="select * from sales where sale_id='$id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

?>


<form name="form1" method="post" action="sales_update.php">
  <table width="200" border="1">
  <input name="sale_id" type="hidden" id="sale_id" value="<?php echo $row['sale_id'];?>">
    <tr>
      <td>Product ID </td>
      <td><input name="pro_id" type="text" id="pro_id" value="<?php echo $row['pro_id'];?>"></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="qty" type="text" id="qty" value="<?php echo $row['qty'];?>"></td>
    </tr>
    <tr>
      <td>Starting Rate </td>
      <td><input name="starting_rate" type="text" id="starting_rate" value="<?php echo $row['starting_rate'];?>"></td>
    </tr>
    <tr>
      <td>Final Rate </td>
      <td><input name="final_rate" type="text" id="final_rate" value="<?php echo $row['final_rate'];?>"></td>
    </tr>
    <tr>
      <td>Laste Date </td>
      <td><input name="last_date" type="text" id="last_date" value="<?php echo $row['last_date'];?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit">
      
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
