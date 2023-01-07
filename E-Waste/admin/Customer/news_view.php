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
              <li class="breadcrumb-item active">News Details</li>
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
              <h3 class="card-title"><a href="news.php"><button>ADD NEW</button></a></h3>
            </div>
			
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>SI_NO</th>
<th>Title</th>
<th>Description</th>
<th>Date</th>
<th>DELETE</th>
<th>EDIT</th>
</tr>
</thead>
<tbody>
<?php
$i=0;
include('dbconnection.php');
$sql="select*from news";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$i=$i+1;
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['title'];?></td>
<td><?php echo $row['description'];?></td>
<td><?php echo $row['date'];?></td>
<td><a href="news_delete.php?id=<?php echo $row['news_id'];?>"><img src="img/bin.gif"></a></td>
<td><a href="news_edit.php?id=<?php echo $row['news_id'];?>"><img src="img/pencil.gif"></a></td>
</tr>
<?php }
?>
</tbody>
 </table>
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

<?php include('footer.php'); ?>
