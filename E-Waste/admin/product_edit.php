<?php
 $con=mysql_connect('localhost','root','');
mysql_select_db('ewaste_management',$con);
$id=$_REQUEST['id'];
$sql="select * from product where pro_id='$id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

?>
<body>   
             <form name="form1" method="post" action="product_update.php">
                                  <table width="225" border="1">
								  <input name="pro_id" type="hidden" id="pro_id" value="<?php echo $row['pro_id'];?>">
                                    <tr>
                                      <td>Category ID </td>
                                      <td><input name="cat_id" type="text" id="cat_id" value="<?php echo $row['cat_id'];?>"></td>
                                    </tr>
                                    <tr>
                                      <td>Product Name                                      </td>
                                      <td><input name="pro_name" type="text" id="pro_name" value="<?php echo $row['pro_name'];?>"></td>
                                    </tr>
                                    <tr>
                                      <td>Product Details </td>
                                      <td><input name="pro_details" type="text" id="pro_details" value="<?php echo $row['pro_details'];?>"></td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td><input type="submit" name="Submit" value="Submit">
                                    </tr>
                                  </table>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                </form>
</body>
</html>
