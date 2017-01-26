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

	$query = "update lorryreceipt set ldate='$lrdate',lveh_no='$vehicle',lfrom='$lrfrom',lto='$lrto',ldist='$lrdistance',ldaysreq='$lrdaysreq',lconname='$consigner',lconiname='$consignee',lpackage='$packages',lmethods='$methods',lweight='$wt',ldesc='$desc',linvoice1='$inv1',linvoice2='$inv2',linvoice3='$inv3',linvoice4='$inv4',lqty='$qty',lidate='$date',weight_method='$weight_method_input' where lno='$lrno'";
 $result=mysqli_query($conn, $query) or die (mysqli_error($conn));

 if(mysqli_affected_rows($conn))
	{
	 $message="Updated  Successfully";
	 echo "<script type='text/javascript'>alert('$message');</script>";
//echo "<script type='text/javascript'>history.back();</script>";
	}
	else
	{
$message1="Please Update any Field ";
	 echo "<script type='text/javascript'>alert('$message1');</script>";
//echo "<script type='text/javascript'>history.back();</script>";

	}
	
}
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		<form action="ModifyLoryReceipt.php" method="POST" name="myForm">
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Modify Lory Receipt</h2>
			</div>
			
			
			
			<div class="col-lg-12" style="padding:20px;">
			
				
				<div class="col-lg-12" >
					
					<div class="col-lg-12" >
						
						<div class="form-group">
									
									<label class="col-md-1 control-label" for="name">LR NO. </label>
									<div class="col-md-2">
									<input  id="lrno"  name="lrno"  type="number"  class="form-control">
									</div>									
									<div class="form-group col-md-1">
									<button type="button" onClick="getDataOfPerson();" class="btn btn-primary">OK</button>
									<br>
									</div>	
									
									
									<label class="col-md-1 control-label" for="name">LR ID. </label>
									<div class="col-md-3">
									<input  id="lrid" readonly name="lrid"  type="number"   class="form-control">
									</div>
									
									
									
									<label class="col-md-2 control-label" for="name" align="center">LR DATE </label>
									<div class="col-md-2">
									<input  id="lrdate"  name="lrdate"  type="date"   class="form-control">
									<br>
									</div>
										
						</div>
						
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">Vehicle </label>
									<div class="col-md-9">
									<?php
									if($conn){
										$query = 'select regno from vehicle';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input required list="vehiclelist" id="vehicle"  name="vehicle"  type="text" placeholder="Vehicle"  class="form-control">';
									echo '<datalist id = "vehiclelist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['regno'].'</option>';
									}
							
									echo '</datalist>';
										}
									}
									?>
									
									</div>
									
									<div class="form-group col-md-2">
								<button type="button" onclick="location.href='addnewvehical.php'"class="btn btn-primary">New</button>
								<br>
								</div>	
						</div>
						
							
				
								</div>
					</div>	
				<br>
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Locations</h4>
					</div>
			
								
								<div class="col-md-12">
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">From</label>
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
									?><br>
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
									
									?><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Distance</label>
									<div class="col-md-4">
									<input value="0" type="number" placeholder="Distance in Kilo Meters" name="lrdistance" id="lrdistance" class="form-control">
									<br>
									</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Days Required</label>
									<div class="col-md-4">
									<input value="0" type="number" placeholder="days Rquired" name="lrdaysreq" id="daysreq" class="form-control">
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
										$query = 'select DISTINCT cname from company';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input required list="consigneelist" id="consigner"  name="consigner"  type="text" placeholder="Consignee"  class="form-control">';
									echo '<datalist id = "consigneelist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										
										echo '<option>'.$row['cname'].'</option>';
										//echo '<option>'.$row['consignname'].'</option>';
									}
							
									echo '</datalist>';
										}			
									}?>
			</div>
									
									<div class="form-group col-md-2">
								<button type="submit" class="btn btn-primary">New</button>
								<br>
								</div>	
						</div>
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">Consignee </label>
									<div class="col-md-9">
									<?php
									if($conn){
										$query = 'select DISTINCT cname from company';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input required list="consignerlist" id="consignee"  name="consignee"  type="text" placeholder="Consigner"  class="form-control">';
									echo '<datalist id = "consignerlist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['cname'].'</option>';
									//	echo '<option>'.$row['cname'].'</option>';
									}
							
									echo '</datalist>';
										}								
									}
									?>
								</div>
									
									<div class="form-group col-md-2">
								<button type="submit" class="btn btn-primary">New</button>
								<br>
								</div>	
						</div>
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Packaging</h4>
					</div>
			
					
					<div class="form-group">
									<label class="col-md-1 control-label" for="name">Packages </label>
									<div class="col-md-2">
									<input  id="packages"  name="packages"  type="text" placeholder="packages"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Method </label>
									<div class="col-md-2">
									<input id="method" class="form-control"  name="methods">
										</div>
									
									<label class="col-md-2 control-label" for="name" align="center">Weight </label>
									<div class="col-md-2">
									<input  id="wt"  name="wt" placeholder="Weight" type="number"   class="form-control">
									<br>
									</div>
									<div class="col-md-2">
									<input class="form-control" type="text" id="weight_method_input" name="weight_method_input"><br>
									</div>
										
						</div>
						
						<div class="form-group">
									<label class="col-md-2 control-label" for="name">Descr. </label>
									<div class="col-md-10">
								<?php
									if($conn){
										$query = 'select DISTINCT ldesc from lorryreceipt';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="desc_list" id="desc"  name="desc"  type="text" placeholder="Descr."  class="form-control">';
									echo '<datalist id = "desc_list">';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['ldesc'].'</option>';
									}
							
									echo '</datalist>';
										}
									} 	
									?>
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
									<input  id="date"   name="date"  type="date"   class="form-control">
									<br><br><br>
									</div>
										
						</div>
					
					
					<div class="form-group">
					<br><br>
								<button type="submit" class="btn btn-primary" style="width:100px;">Modify</button>
								<br><br>
								</div>	
					
							   
					
					
					
					
					
					
				
				
							
		
			</div>	
			
			
			
			
			
			
		</div><!--/.row-->
		

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



			   function getDataOfPerson() 
  {	
  var name=document.getElementById("lrno").value;
//alert(name);
	if(name=="")
	{
		window.alert("Enter LR NO First");
	}else{
	$.ajax({                                      
      url: 'vehicle_support_file.php',                  //the script to call to get data          
      data: "lrno="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		  
       if(data == null)
	   {
		   alert("LR is Billed");
	   }else
       {document.getElementById('lrid').value=data[0];
	   document.getElementById('lrdate').value=data[2];
	   document.getElementById('vehicle').value=data[3];
	   document.getElementById('lrfrom').value=data[4];
	   document.getElementById('lrto').value=data[5];
	   document.getElementById('lrdistance').value=data[6];
	   document.getElementById('daysreq').value=data[7];
	   document.getElementById('consigner').value=data[8];
	   document.getElementById('consignee').value=data[9];
	   document.getElementById('packages').value=data[10];
	   document.getElementById('method').value=data[11];
	   document.getElementById('wt').value=data[12];
	   document.getElementById('desc').value=data[13];
	   document.getElementById('inv1').value=data[14];
	   document.getElementById('inv2').value=data[15];
	   document.getElementById('inv3').value=data[16];
	   document.getElementById('inv4').value=data[17];
	   document.getElementById('qty').value=data[18];
	   document.getElementById('date').value=data[19];
	   document.getElementById('weight_method_input').value=data[34];
	   }
	   

	  } 
    });
 
}
  	
  }
  
  
	</script>	
</body>

</html>
