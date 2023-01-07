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
              <h3 class="card-title">Composition Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">




<?php 
include('val.php');
?>
<form name="form1" id="formID" method="post" action="composition_insert.php">
              <table id="example1" class="table table-bordered table-striped">
    <tr>
      <td>Comp Materials</td>
      <td><input name="comp_materials" type="text" id="comp_materials" class="validate[required]"></td>
    </tr>
    <tr>
      <td>Comp Desc</td>
      <td><input name="comp_desc" type="text" id="comp_desc" class="validate[required]"></td>
    </tr>
    <tr>
      <td>Comp_Advantages</td>
      <td><input name="comp_advantages" type="text" id="comp_advantages" class="validate[required],custom[onlyLetter]"></td>
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
