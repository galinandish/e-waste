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
			     // $data=$_REQUEST['data'];
			      $pid=$_REQUEST['pid'];
				      include('dbconnection.php');
      $sql="select * from payment p,bill b,registration r where p.bill_id=b.bill_id and p.reg_id=r.reg_id and p.pay_id='$pid'";
      $res=mysql_query($sql);
      $row1=mysql_fetch_array($res);
	  
     
			?>
			<form reg="f1" method="post" action="verify2.php">

<input type="hidden" name="id" value="<?php echo $row1['bill_id']; ?>">
<input type="hidden" name="reg" value="<?php echo $row1['reg_id']; ?>">
<input type="hidden" name="con" value="<?php echo $row1['contact_no']; ?>">

<input type="hidden" name="otp" value="<?php echo $row1['otp']; ?>">
<input type="hidden" name="pid" value="<?php echo $row1['pay_id']; ?>">
				<input type="text" name="ot" placeholder="Enter the OTP" required="1" />
				<br/><br/><br/><br/>
				<div align="center"><input type="submit" value="Register" > </div>
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
