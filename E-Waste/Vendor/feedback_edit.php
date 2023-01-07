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
              <h3 class="card-title">Feedback Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              

<?php
$id=$_REQUEST['id'];
include('dbconnection.php');
$sql="select * from feedback where feedback_id='$id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
include('val.php');

?>
<form name="form1" id="formID" method="post" action="feedback_update.php">
  <table id="example1" class="table table-bordered table-striped">
    <tr>
      <td>Request Id</td>
      <td><select name="request_id" id="request_id">
	  <option>select</option>
	  <?php
include('dbconnection.php');
$sql="select*from request";
$res=mysql_query($sql);
while($row1=mysql_fetch_array($res))
{
?>
<option value="<?php echo $row1['request_id'];?>"  <?php if($row['request_id']==$row1['request_id']) { ?> selected  <?php } ?> > <?php echo $row1['req_date'];?></option>
<?php
}
?>
      </select></td>
    </tr>
    <tr>
      <td>Feedback</td>
      <td><input name="feedback" type="text" id="feedback" value="<?php echo $row['feedback'];?>" class="validate[required],custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td>Feedback Date</td>
      <td><input name="feedback_date" type="text" id="feedback_date" value="<?php echo $row['feedback_date'];?>" class="validate[required],custom[date]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>
    <input name="feedback_id" type="hidden" id="feedback_id" value="<?php echo $row['feedback_id'];?>">
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
