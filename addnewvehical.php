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
	
	<?php 
	include 'config.php'; //include the database file

	if($_POST) //check if there is data in the post method or no
	{
		$UpperCase = array_map("strtoupper", $_POST);
		extract($UpperCase);	
	//extract($_POST); //extract the date 
	if($conn)	//database connection			
	{	
		$query ="insert into vehicle values 
		('','$regno','$model_list','$vehicle_company','$tax1','$tax')";
		$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
		if($result)
		{
			echo"<script type=\"text/javascript\">".
            "alert('New Vehicle Added Successfully');".
            "</script>";
		}else
		{
			echo"<script type=\"text/javascript\">".
            "alert('Error in Adding Vehicle.Please Try again.');".
            "</script>";
		}
		
	}
	
	}
	
	?>
<form  action='addnewvehical.php' method='post'>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Add New Vehicale</h2>
			</div>
			
			
			
			<div class="col-lg-12" style="padding:20px;">
		
				
				
				<div class="form-group">
									<label class="col-md-2 control-label" for="message">Vehicle Id</label>
									<div class="col-md-4">
									<?php
									$query = "select vid from vehicle";
									$result = mysqli_query($conn,$query);
									while($row = mysqli_fetch_assoc($result)){
									$num = $row['vid'];	
									}
									
									echo '<input readonly required type="number" name="vehicleid" id="vehicleid" value='.($num+1).' class="form-control">';
								?>
									<br><br>
									</div>	
								</div>
				
				
				<div class="col-lg-12">
				
				<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Registration</a></li>
						
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
							
							
							<div class="col-lg-12">
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Registration No.</label>
									<div class="col-md-4">
									<input required placeholder="Registration Number" type="text"  name="regno" id="companyid"  class="form-control">
									<br><br>
									</div>	
								</div>
								
							</div>
							
							
							
							
								
								<div class="col-md-12">
							
				
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Company</label>
									<div class="col-md-4">

								<?php
									if($conn){
										$query = 'select DISTINCT company from vehicle';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="vehicle_comp_list" id="vehicle_company"  name="vehicle_company"  type="text" placeholder="Company"  class="form-control">';
									echo '<datalist id = "vehicle_comp_list">';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['company'].'</option>';
									}
							
									echo '</datalist>';
										}
									} 	
									?>
								
									
									</div>	
								
									<label class="col-md-2 control-label" for="message">Model</label>
									<div class="col-md-4">
									<?php
									if($conn){
										$query = 'select DISTINCT model from vehicle';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="vehicle_model_list" id="model_list"  name="model_list"  type="text" placeholder="Model"  class="form-control">';
									echo '<datalist id = "vehicle_model_list">';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['model'].'</option>';
									}
							
									echo '</datalist>';
										}
									} 	
									?>
									
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">RTO Tax Amt.</label>
									<div class="col-md-4">
									<input  type="text" value="0" placeholder="RTO Tax Amt." name="tax1" id="tax1" class="form-control">
									<br><br>
									</div>	
								</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">RTO Tax Exp. Date</label>
									<div class="col-md-4">
									<input  type="date" value="0" name="tax" id="tax" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								<div class="form-group">
								<button type="submit"  name="form_submit" class="btn btn-primary" style="width:100px;">Add</button>
								
								
							
								<br><br>
								</div>		
				
								
								</div>
				
				
				
				
				</div>
							
								
								<div class="form-group">
								
								<br><br>
								</div>		
				
								
								</div>
				
								
							</div>	
				
								
								</div></div>
							
							
							
							
							</div>
							
				
				
				</div>
								
								
								</div></div>
							
				</div>
							
						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->
			
			
				
				
				
				
				
							
		
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
	</script>	
</body>

</html>
