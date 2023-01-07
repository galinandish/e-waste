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
              <h3 class="card-title">Request Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
           
<?php
$id=$_REQUEST['id'];
include('dbconnection.php');
$sql="select * from request where request_id='$id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
include('val.php');
?>
<form name="form1" id="formID"  method="post" action="request_update.php">
 <table id="example1" class="table table-bordered table-striped">
    <tr>
      <td>Register Id</td>
      <td><select name="reg_id" id="reg_id">
	   <option>select</option>
	 
	 <?php
include('dbconnection.php');
$sql="select * from registration";
$res=mysql_query($sql);
while($row1=mysql_fetch_array($res))
{
?>

	 <option value="<?php echo $row1['reg_id']; ?>" <?php if($row['reg_id']==$row1['reg_id']) { ?> selected <?php } ?> > <?php echo $row1['email_id']; ?> </option>
<?php
}
?>	 
	  
	  
      </select></td>
    </tr>
    <tr>
      <td>Product Id</td>
      <td><select name="product_id" id="product_id">
	  <option>Select</option>
	 
	 <?php
     include('dbconnection.php');
     $sql="select * from product";
     $res=mysql_query($sql);
     while($row2=mysql_fetch_array($res))
{
?>

	 <option value="<?php echo $row2['product_id']; ?>" <?php if($row['product_id']==$row2['product_id']) { ?> selected <?php } ?> > <?php echo $row2['product_name']; ?> </option>
<?php
}
?>	 
      </select></td>
    </tr>
    <tr>
      <td>Request Date</td>
      <td><input name="req_date" type="text" id="req_date" value="<?php echo $row['req_date'];?>" class="validate[required],custom[date]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>
    <input name="request_id" type="hidden" id="request_id" value="<?php echo $row['request_id'];?>">
  </p>
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
