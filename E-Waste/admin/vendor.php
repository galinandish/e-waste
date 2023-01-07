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
              <h3 class="card-title">Vendor Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              


<?php include('val.php');  ?>

<form name="form1" id="formID" method="post" action="vendor_insert.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
 <table id="example1" class="table table-bordered table-striped">
    <tr>
      <td>Name</td>
      <td><input name="name" type="text" id="name" class="validate[required],custom[onlyLetter]"  ></td>
    </tr>

    <tr>
      <td>Address</td>
      <td><textarea name="address" class="validate[required]"  > </textarea></td>
    </tr>
	
    <tr>
      <td>Contact No</td>
      <td><input name="contact_no" type="text" id="contact_no" class="validate[required],custom[mobile]"></td>
    </tr>
    <tr>
      <td>Owner Name</td>
      <td><input name="oname" type="text" id="oname" class="validate[required],custom[onlyLetter]"]></td>
    </tr>
	<tr>
      <td>Email Id</td>
      <td><input name="email_id" type="text" id="email_id" class="validate[required],custom[email]"]></td>
    </tr>
    <tr>
      <td>GST No</td>
      <td><input name="gst" type="text" id="gst" class="validate[required]"]></td>
    </tr>
    <tr>
      <td>License No</td>
      <td><input name="l" type="text" id="l" class="validate[required]"></td>
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