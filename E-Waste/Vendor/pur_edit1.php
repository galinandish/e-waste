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
              <h3 class="card-title">Status Update</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              


<?php
$id1=$_REQUEST['id1'];
$id=$_REQUEST['id'];
$pro=$_REQUEST['pro'];
include('dbconnection.php');
$sql="select * from pur_details where pdid='$id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
include('val.php');
?>
<form name="form1" id="formID" method="post" action="pur_edit2.php" enctype="multipart/form-data">
  <input type="hidden" name="pdid" value="<?php echo $id1; ?>">
  <input type="hidden" name="poid" value="<?php echo $id; ?>">
  <input type="hidden" name="pro" value="<?php echo $pro; ?>">
  <table id="example1" class="table table-bordered table-striped">
    	<tr>
      <td>Enter the received quantity</td>
      <td><input name="qty" type="text" id="qty" class="validate[required]"></td>
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
