<?php include 'session_manager.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/input.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
<?php include 'header.php';?>
	<?php include 'config.php';?>
<?php

if($_POST)
{
	extract($_POST);
$status=False;
$invid=0;
$rate=0;$pers=0;$subtotal=0;$loading=0;$unload=0;$stat=0;$tail=0;$detention=0;$delivery=0;$other=0;$totalcharge=0;$lrtotal=0;
	$query = "INSERT INTO lorryreceipt  VALUES ('$lrid','$lrno','$lrdate','$vehicle','$lrfrom','$lrto','$lrdistance','$lrdaysreq','$consigner','$consignee','$packages','$method','$wt','$desc','$inv1','$inv2','$inv3','$inv4','$qty','$date','$status','$invid',
'$rate','$pers','$subtotal','$loading','$unload','$stat','$tail','$detention','$delivery','$other','$totalcharge','$lrtotal')";
 $check = mysqli_query($conn,"SELECT * from lorryreceipt where lno='$lrno'");
 if(mysqli_num_rows($check)==0)
 {
$result=mysqli_query($conn, $query) or die (mysqli_error($conn));
 if($result)
	{
	 $message="Inserted Successfully";
	 echo "<script type='text/javascript'>alert('$message');</script>";
//echo "<script type='text/javascript'>history.back();</script>";
	}
	else
	{
$message1="NOT Inserted Successfully";
	 echo "<script type='text/javascript'>alert('$message1');</script>";
//echo "<script type='text/javascript'>history.back();</script>";

	}
	 
 }else{
	$message1="LR is already present";
	 echo "<script type='text/javascript'>alert('$message1');</script>";
 
 }
	 
 	
}
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		<form action="AddnewLoryReceipt.php" method="Post" name="myForm">
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Add New Lory Receipt</h2>
			</div>
			
			
			
			<div class="col-lg-12" style="padding:20px;">
			
				
				<div class="col-lg-12" >
					
					<div class="col-lg-12" >
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">LR ID. </label>
									<div class="col-md-3">
									<?php 
									$query="SELECT lid FROM lorryreceipt ORDER BY lid DESC LIMIT 1";
									$result=mysqli_query($conn, $query); 
									 $num_rows = mysqli_num_rows($result);
									while ($row = mysqli_fetch_assoc($result))
									{
										$lid=$row["lid"];
									}
									
							?>
									<input  id="lrid"  name="lrid"  type="number" value="<?php echo $lid+1?>"  class="form-control" readonly>
									</div>
									
									
									<label class="col-md-1 control-label" for="name">LR NO. </label>
									<div class="col-md-3">
									<input required type="number" id="lrno"  name="lrno"  type="number"   class="form-control">
									</div>
									
									<label class="col-md-2 control-label" for="name" align="center">LR DATE </label>
									<div class="col-md-2">
									<input required type="date" id="lrdate"  name="lrdate"  type="date"   class="form-control">
									<br>
									</div>
										
						</div>
						
						
						<div class="form-group">


									<label class="col-md-1 control-label" for="name">Vehicale </label>
									<div class="col-md-9">
									<?php
									if($conn){
										$query = 'select regno from vehicle';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="vehiclelist" id="person"  name="vehicle"  type="text" placeholder="Vehicle"  class="form-control">';
									echo '<datalist id = "vehiclelist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['regno'].'</option>';
									}
							
									echo '</datalist>';
										}else
										{
											echo '<input  list="personlist" id="person"  name="person" type="text" placeholder="Person Name"  class="form-control">';
											echo '<datalist id = "personlist">';
											echo '<option>No Person Present in Database</option>';
											echo '</datalist>';
									
										}
										
									}else{
											echo '<input  list="personlist" id="person"  name="person"  type="text" placeholder="Person Name"  class="form-control">';
											echo '<datalist id = "personlist">';
											echo '<option>No Person Present in Database</option>';
											echo '</datalist>';
									}
									?>
									
									
									
						</div>
						
							<div class="form-group col-md-2">
								<button type="button" onClick="location.href='addnewvehical.php'" class="btn btn-primary">New</button>
								<br>
								</div>	
				
								</div>
					</div>	
				<br>
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Locations</h4>
					</div>
			
					
				
								
								
								
								<div class="col-md-12">
				<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">From</label>
									<div class="col-md-4">
				<?php
									if($conn){
										$query = 'select city_name from cities';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="citylist" id="lrfrom"  name="lrfrom"  type="text" placeholder="From"  class="form-control">';
									echo '<datalist id = "citylist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['city_name'].'</option>';
									}
							
									echo '</datalist>';
										}
										
									}
									?>
								
								</div>
								</div>
								
								
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">To</label>
									<div class="col-md-4">
									<?php
									if($conn){
										$query = 'select city_name from cities';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="citylist" id="lrto"  name="lrto"  type="text" placeholder="To"  class="form-control">';
									echo '<datalist id = "citylist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['city_name'].'</option>';
									}
							
									echo '</datalist>';
										}
									}
									
									?>
										<br><br>
									</div>
								
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Distance</label>
									<div class="col-md-4">
									<input required type="number" placeholder="Distance in Kilo Meters" name="lrdistance" id="local_city" class="form-control">
									<br>
									</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Days Required</label>
									<div class="col-md-4">
									<input required type="number" placeholder="Days Rquired" name="lrdaysreq" id="local_pincode" class="form-control">
									<br>
									</div>	
								</div>
										
					<br>
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Parties</h4>
					</div>
			
					
					<div class="form-group">
									<label class="col-md-1 control-label" for="name">Consigner </label>
									<div class="col-md-9">
									<?php
									if($conn){
										$query = 'select DISTINCT consignname,consingername from company';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="consigneelist" id="lrto"  name="consigner"  type="text" placeholder="Consignee"  class="form-control">';
									echo '<datalist id = "consigneelist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										
										echo '<option>'.$row['consingername'].'</option>';
										echo '<option>'.$row['consignname'].'</option>';
									}
							
									echo '</datalist>';
										}else
										{
											echo '<input  list="consigneelist" id="person"  name="consigner" type="text" placeholder="Consignee"  class="form-control">';
											echo '<datalist id = "consigneelist">';
											echo '<option>No Consignee in Database</option>';
											echo '</datalist>';
									
										}
										
									}else{
											echo '<input  list="consigneelist" id="person"  name="consigner"  type="text" placeholder="Consignee"  class="form-control">';
											echo '<datalist id = "consigneelist">';
											echo '<option>No Consignee Present in Database</option>';
											echo '</datalist>';
									}
									
									?>
									</div>
									
									<div class="form-group col-md-2">
								<button type="button" class="btn btn-primary">New</button>
								<br>
								</div>	
						</div>
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">Consignee </label>
									<div class="col-md-9">
									<?php
									if($conn){
										$query = 'select DISTINCT consignname,consingername from company';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="consignerlist" id="lrto"  name="consignee"  type="text" placeholder="Consigner"  class="form-control">';
									echo '<datalist id = "consignerlist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['consingername'].'</option>';
										echo '<option>'.$row['consignname'].'</option>';
									}
							
									echo '</datalist>';
										}else
										{
											echo '<input  list="consignerlist" id="person"  name="consignee" type="text" placeholder="Consginer"  class="form-control">';
											echo '<datalist id = "consignerlist">';
											echo '<option>No Consigner in Database</option>';
											echo '</datalist>';
									
										}
										
									}else{
											echo '<input  list="consignerlist" id="person"  name="consigner"  type="text" placeholder="Consigner"  class="form-control">';
											echo '<datalist id = "consignerlist">';
											echo '<option>No Consigner Present in Database</option>';
											echo '</datalist>';
									}
									
									?>
									</div>
									
									<div class="form-group col-md-2">
								<button type="button" class="btn btn-primary">New</button>
								<br>
								</div>	
						</div>
					
							   
					
							
					
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Packaging</h4>
					</div>
			
					
					<div class="form-group">
									<label class="col-md-1 control-label" for="name">Packages </label>
									<div class="col-md-2">
									<input  required type="number"  id="packages"  name="packages"  type="text" placeholder="packages"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Method </label>
									<div class="col-md-2">
									<select  required type="text" class="form-control" name="method">
										<option>Nos.</option>
										<option>Kg</option>
										<option>Quintle</option>
									</select></div>
									
									<label class="col-md-2 control-label" for="name" align="center">Weight </label>
									<div class="col-md-2">
									<input  id="wt"  required type="number" name="wt" placeholder="Weight" type="number"   class="form-control">
									<br>
									</div>
									<div class="col-md-2">
									<select class="form-control" name="local_district">
										<option>M.Tons</option>
										<option>Kg</option>
										<option>Quintle</option>
									</select><br>
									</div>
										
						</div>
						
						<div class="form-group">
									<label class="col-md-2 control-label" for="name">Descr. </label>
									<div class="col-md-10">
									<input  id="Description"  name="desc"  type="text" placeholder="Descr."  class="form-control">
									</div>
									
										
						</div>
					
							   
					
							
					<br>
					
						<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Invoice Information</h4>
					</div>
			
					
					<div class="form-group">
									<label class="col-md-2 control-label" for="name">Invoices </label>
									<div class="col-md-3">
									<input  id="inv1"  name="inv1"  type="text" placeholder="Invoice 1"  class="form-control">
									</div>
									<div class="col-md-2">
									<input  id="inv2"  name="inv2"  type="text" placeholder="Invoice 2"  class="form-control">
									</div>
									<div class="col-md-3">
									<input  id="inv3"  name="inv3"  type="text" placeholder="Invoice 3"  class="form-control">
									</div>
									<div class="col-md-2">
									<input  id="inv4"  name="inv4"  type="text" placeholder="Invoice 4"  class="form-control">
									<br>
									</div>
									
											   
					
							
					
					
					
					<div class="form-group">
									<label class="col-md-1 control-label" for="name">Quantity </label>
									<div class="col-md-3">
									<input  id="qty"  name="qty"  type="number" placeholder="Quantity"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name"> </label>
									<div class="col-md-2">
									</div>
									
									<label class="col-md-2 control-label" for="name" align="center"> DATE </label>
									<div class="col-md-3">
									<input   required type="date" id="date"  name="date"  type="date"   class="form-control">
									<br><br><br>
									</div>
										
						</div>
					
					
					<div class="form-group">
					<br><br>
								<button type="submit" class="btn btn-primary" style="width:100px;">Ok</button>
								
								
								<button type="button" onClick="location.href='AddnewLoryReceipt.php'" class="btn btn-primary" style="width:100px;">Cancle</button>
								<br><br>
								</div>	
					
							   
					
					
					
					
					
				
				
							
		
			</div>	
			
			
			
			
			
			
		</div><!--/.row-->
		

					</form>
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	
	
	
  </script>
</body>

</html>
