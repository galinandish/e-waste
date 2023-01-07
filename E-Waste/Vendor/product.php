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
<form name="form1" id="formID" method="post" action="product_insert.php" enctype="multipart/form-data">
  <table id="example1" class="table table-bordered table-striped">
    <tr>
      <td>Product Name</td>
      <td><input name="product_name" type="text" id="product_name" class="validate[required],custom[onlyLetter]"></td>
    </tr>
   <tr>
      <td>Composition</td>
      <td><input name="c" type="text" id="c" class="validate[required]"></td>
    </tr>
	
	<tr>
      <td>Benefits</td>
      <td><input name="b" type="text" id="b" class="validate[required]"></td>
    </tr>
	
	<tr>
      <td>Price</td>
      <td><input name="p" type="text" id="p" class="validate[required]"></td>
    </tr>
	
	<tr>
      <td>CGST</td>
      <td><input name="cg" type="text" id="cg" class="validate[required]"></td>
    </tr>
	<tr>
      <td>SGST</td>
      <td><input name="sg" type="text" id="sg" class="validate[required]"></td>
    </tr>
    <tr>
      <td>Image</td>
      <td><input name="image" type="file" id="image"></td>
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
