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
              <h3 class="card-title">Bill Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
     <?php 
      include('dbconnection.php');
      $sql="select * from registration where email_id='$uname'";
      $res=mysql_query($sql);
      $row1=mysql_fetch_array($res);
 
?>
      

<?php
include('val.php');
?>
<form name="form1" id="formID"  method="post" action="bill_i.php">
 <table id="example1" class="table table-bordered table-striped">
    <tr>
      <td>Bill Date</td>
      <td><input name="bdate" type="text" id="bdate" value="<?php echo date('d-m-Y'); ?>"></td>
    </tr>

    <tr>
      <td>Customer</td>
	  <input name="reg_id" type="hidden" value="<?php echo $row1['reg_id']; ?>">
      <td><input name="name" type="text" readonly="1" value="<?php echo $row1['name']; ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
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
