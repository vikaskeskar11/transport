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

	<?php include 'config.php';?>
	<?php 
	if(extract($_POST))
	{
	
		extract($_POST);
		$query = "INSERT INTO  disel  VALUES('$did','$dslip','$slipdate','$dvehicle','$ddriver','$dpump','$dfrom','$dto','$dqunity_ordered','$dqunity_actual','$dstart_reading','$dend_reading','$dtotal_km','$davg','$drate','$damount','$dremark')";
		$result = mysqli_query($conn,$query);
		if($result)
		{
			echo"<script type=\"text/javascript\">".
            "alert('New Disel Usages Added Successfully');".
            "</script>";
		}else
		{
			echo"<script type=\"text/javascript\">".
            "alert('Error in Adding Disel Usage.Please Try again.');".
            "</script>";
		}
		
	}
	
	?>
</head>

<body>
	<?php include 'header.php';?>

	
<form action ="NewDiselUsages.php" method="post">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D;">New Disel Usages</h2>
			</div>
			<div class="col-lg-12" style="padding:20px;">
				<div class="col-lg-12" align="center">
					<div class="col-lg-12">
								<div class="form-group">
									<label class="col-md-2 control-label" for="message"> Id</label>
									<div class="col-md-4">
									<?php
									$query = "SELECT did FROM disel ORDER BY did DESC LIMIT 1 ";
									$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
									$row = mysqli_fetch_assoc($result);
									$num = $row['did'];
									echo '<input readonly required type="number"  name="did" id="did" value="'.($num+1).'" class="form-control">';
									?>
										<br><br>
									</div>	
								</div>
								
							</div>
							</div>
							
							<div class="col-lg-12">
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Slip Number</label>
									<div class="col-md-4">
										<input required type="number" placeholder="Slip Number" name="dslip" id="dslip" class="form-control">
									</div>	
									
									
									
									<label class="col-md-2 control-label" for="message">Slip Date</label>
									<div class="col-md-4">
									<input required type="date"  name="slipdate" id="slipdate" class="form-control">
									<br><br>
									</div>	
																
								</div>
								
							</div>
									
							
							
								<div class="form-group">
									<label class="col-md-1 control-label" for="name">vehiclee </label>
									<div class="col-md-9">
								<?php	if($conn){
										$query = 'select regno from vehicle';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result))
										{
									echo '<input  list="vehiclee_list" id="vehiclee"  name="dvehicle"  type="text" placeholder="vehicle"  class="form-control">';
									echo '<datalist id="vehiclee_list">';
									while($row = mysqli_fetch_assoc($result))
									{
										echo "<option>".$row['regno']."</option>";
									}
									echo '</datalist>';
										}
								}
									?>
									</div>
									
									<div class="form-group col-md-2">
										<button type="button" class="btn btn-primary">New</button>
										<br>
									</div>	
								</div>
							
								<div class="form-group">
									<label class="col-md-1 control-label" for="name">Driver </label>
									<div class="col-md-9">
						<?php	if($conn){
										$query = 'select name from drivers';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list = "driver_list" id="driver"  name="ddriver"  type="text" placeholder="Driver"  class="form-control">';
									echo '<datalist id="driver_list">';
									while($row = mysqli_fetch_assoc($result))
									{
										echo "<option>".$row['name']."</option>";
									}
									echo '</datalist>';
										}
								}
									?>							
									</div>
									
									<div class="form-group col-md-2">
										<button type="button" class="btn btn-primary">New</button>
										<br>
									</div>	
								</div>
							
								<div class="form-group">
									<label class="col-md-1 control-label" for="name">Pump </label>
									<div class="col-md-9">
									<input  id="pump" list="pump_list" name="dpump"  type="text" placeholder="Pump"  class="form-control">
									<datalist id="pump_list">
									<option>Pump 1 </option>
									<option>Pump 2 </option>
									<option>Pump 3 </option>
									<option>Pump 4 </option>
									</datalist>
									</div>
									
								<div class="form-group col-md-2">
										<button type="button" class="btn btn-primary">New</button>
										<br>
									</div>
									
																
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
									echo '<input  list="citylist" id="city"  name="dfrom"  type="text" placeholder="From"  class="form-control">';
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
									<label class="col-md-2 control-label" for="message" align="center">To</label>
									<div class="col-md-4">
										<?php
									if($conn){
										$query = 'select city_name from cities';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="citylist" id="tocity"  name="dto"  type="text" placeholder="From"  class="form-control">';
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
									<label class="col-md-2 control-label" for="message" align="center">Quantity Ordered</label>
									<div class="col-md-4">
									<input required type="number" placeholder="Quantity Ordered" name="dqunity_ordered" id="qty" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">Quantity Actual</label>
									<div class="col-md-4">
									<input required type="number" placeholder="Quantity Actual" name="dqunity_actual" id="qty" class="form-control">
									<br>
									</div>	
								</div>
								
								<div class="col-md-12">
							
				
								<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">KM Reading Start</label>
									<div class="col-md-4">
									<input required type="number" placeholder="KM Reading Start" name="dstart_reading" id="kmstart" class="form-control">
									
									</div>	
									</div>
									
									
										<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">KM Reading End</label>
									<div class="col-md-4">
									<input required type="number" placeholder="KM Reading End" name="dend_reading" id="kmend" class="form-control">
									<br><br>
									</div>	
									</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">Total KiloMeters</label>
									<div class="col-md-4">
									<input required type="number"  name="dtotal_km" id="kmstart" class="form-control">
									
									</div>	
									</div>
									
									
										<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">Average</label>
									<div class="col-md-4">
									<input required type="number"   name="davg" id="kmend" class="form-control">
									<br><br>
									</div>
									</div>
								
							<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">Rate</label>
									<div class="col-md-4">
									<input required type="number" placeholder="Rate" name="drate" id="kmstart" class="form-control">
									
									</div>	
								</div>
										<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">Amount</label>
									<div class="col-md-4">
									<input required type="number"   name="damount" id="kmend" class="form-control">
									<br><br>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Remark</label>
									<div class="col-md-10">
									<input required type="text" placeholder="Remark" name="dremark" id="web" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
								<button type="submit" class="btn btn-primary" style="width:100px;">Ok</button>
								<br><br>
						
								
					
							
							
				
				
				
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->
		
			</div>	
				
		</div><!--/.row-->
	
	</div>	<!--/.main-->
</form>
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
