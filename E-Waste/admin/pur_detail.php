<?php include('metatags.php'); ?>
<script language="javascript" src="js/ajax.js"></script>
<script language="javascript">
function getRate(){

	var url = "getRate.php?product_id=";
	var proid = document.getElementById('product_id').value;
	if(proid == "") 
	{ 
		return;
	}
	url += escape(proid);
	var result=doAction_custom(url);	
}

function calcAmt(){
	var qty = document.getElementById('qty').value;
	
	var rate = document.getElementById('amt').value;
	
	if(qty == "") 
	{ 
		return;
	}
	var result = qty*rate;
	document.getElementById('value').value=result;
}
</script>


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
              <li class="breadcrumb-item active">Request Details</li>
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
              <h3 class="card-title"><a href="pur.php"><button>ADD NEW</button></a></h3>
            </div>
			
            <!-- /.card-header -->
            <div class="card-body">
   	<?php
include('dbconnection.php');
$id=$_REQUEST["id"];
//echo $billno;
	if(isset($_POST["a"]))
	{
	        if($_POST["a"]=="insert")
			{

			$sql1="select * from product where product_id='".$_POST["product_id"]."'";
			 $res1=mysql_query($sql1);
			 $row1=mysql_fetch_array($res1);
			//$amt=$row1['price'];
			$qty=$_POST["qty"];
			//$total=$amt*$qty;
			
			$sql="insert into pur_details values(null,'$id','".$_POST["product_id"]."','".$_POST["qty"]."','sent','')";
			mysql_query($sql);
			
			}
	}



$sql="select * from pur_order ord, vendor v where ord.v_id=v.v_id and ord.poid='$id'";
$res=mysql_query($sql);
$row2=mysql_fetch_array($res);

  ?>
 <table class="table table-striped table-bordered table-hover">
<thead>

						    <tr>
      <th width="200px">vendor:</th>
      <th><?php echo $row2["v_name"]; ?></th>
    </tr>
    <tr>
      <th width="200px">Order Date: </th>
      <th><?php echo $row2["pdate"]; ?></th>
    </tr>
</table>

                               <?php include('val.php'); ?>
  <form name="form1" id="formID" method="post" action="pur_detail.php">
    <input name="a" type="hidden" id="a" value="insert" />
                  <input name="id" type="hidden" id="id" value="<?php echo $id; ?>" />
	<p>&nbsp;</p>
 <table class="table table-striped table-bordered table-hover">
<thead>
     <tr>
        <td>Product_ID</td>
        <td><select name="product_id" id="product_id">
          <option>SELECT</option>
		   <?php
  include('dbconnection.php');
  $sql="select * from product";
  $res=mysql_query($sql);
  while($row2=mysql_fetch_array($res))
  {
  ?>
          <option value="<?php echo $row2['product_id'];?>"><?php echo $row2['product_name'];?></option>
		  <?php
		}
		?>
        </select></td>
		
      </tr>
      <tr>
        <td>Quantity</td>
        <td><input name="qty" type="text" id="qty" class="validate[required],custom[onlyNumber]"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="Submit" value="ADD">
        </td>
      </tr>
    </table>
    <p>&nbsp;</p>
      </form>
	  
	              <table class="table table-bordered" id="sample_1">
                        <thead>
                            <tr>
                            	<th>Product</th>
								<th>Quantity</th>
								<th>Status</th>
								<th>Sent Quantity</th>
								<th></th>
								
                            </tr>
                        </thead>
                        <tbody>
                        
<?php 
$gtot=0;
include('dbconnection.php');
$sql="select * from pur_details od,pur_order ord, product m where od.poid=ord.poid and od.product_id=m.product_id and od.poid='$id'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
//$tot=$row['total'];
//$gtot=$gtot+$tot;
?>
<tr>


<td><?php echo $row['product_name'];?></td>
<td><?php echo $row['qty'];?></td>
<td><?php echo $row['status'];?></td>
<td><?php echo $row['rqty'];?></td>
<td><a href="pur_detail_delete.php?id1=<?php echo $row['pdid'];?>&id=<?php echo $row['poid'];?>"><img src="img/close.jpg"  title="DELETE"></a></td>

</tr>
<?php
}
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