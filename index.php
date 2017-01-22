
<?php
include 'session_manager.php';
?>
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
	

	<?php
	include 'header.php';
	include 'config.php';
	$table = 'persons';
	
	if(isset($_POST['form_submit'])){
		
		$UpperCase = array_map("strtoupper", $_POST);
		extract($UpperCase);
		
	$name=$Fname." ".$Mname." ".$Lname;
	$query ="INSERT INTO persons VALUES('','$name','$permenant_address','$city','$district','$state','$pincode',
	'$local_address','$local_city','$local_district','$local_state','$lpincode','$mobile','$Phone1','$Phone2','$Fax','$email')";
	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
			if($result)
		{
			echo"<script type=\"text/javascript\">".
            "alert('Person added Successfully');".
            "</script>";
		}else
		{
			echo"<script type=\"text/javascript\">".
            "alert('Error in Adding Person Information.Please Try again.');".
            "</script>";
		}
		
		
	}
	?>
	<script>
	function copyAdress(){
		    document.getElementById("local_address").value = document.getElementById("permenant_address").value;
		    document.getElementById("local_city").value = document.getElementById("city").value;
		    document.getElementById("local_district").value = document.getElementById("distric").value;
		    document.getElementById("local_state").value = document.getElementById("state").value;
		    document.getElementById("lpincode").value = document.getElementById("pincode").value;
			alert('Local Address Set Successfully');
		
	}
	</script>
<form action="index.php" method="post">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Add New Person</h2>
			</div>
			
			
			
			<div class="col-lg-12" style="padding:20px;">
		
				<div class="col-lg-12" >
					
					<div class="col-lg-6" style="float:left;">
						
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Person Id</label>
									<div class="col-md-9">
										<?php
									$query = "SELECT id FROM persons ORDER BY id DESC LIMIT 1 ";
									$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
									$row = mysqli_fetch_assoc($result);
									$num = $row['id'];
									echo '<input readonly required type="number"  name="person_id" id="person_id" value="'.($num+1).'" class="form-control">';
									?>
									</div>
						</div>
					</div>		   
					
					<div class="col-lg-6" style="text-align:center;">
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Birth Date</label>
									<div class="col-md-9">
									<input   id="birth_date"  name="birth_date"  type="date"  class="form-control">
									</div>
						</div>
					</div>			
					<br><br><br>
					
				</div>
				
				
				<div class="col-lg-12">
				
						<div class="col-lg-1" style="text-align:center;">
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name</label>
									
						</div>
						</div>	
				
				
				
						<div class="col-lg-3" style="text-align:center;">
						<div class="form-group">
								<input required  id="Fname"  name="Fname"  type="text"  class="form-control" placeholder="First Name">
										
						</div>
						</div>
						
						<div class="col-lg-3" style="text-align:center;">
						<div class="form-group">
								<input required  id="Mname"  name="Mname"  type="text"  class="form-control" placeholder="Middle Name">
										
						</div>
						</div>
						
						<div class="col-lg-3" style="text-align:center;">
						<div class="form-group">
								<input required  id="Lname"  name="Lname"  type="text"  class="form-control" placeholder="Last Name">
										
						</div>
						</div>	
						<br><br><br>
					
				</div>
				
				<div class="col-lg-12">
				
				<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Permenant Address</a></li>
							<li><a href="#tab2" data-toggle="tab">Local Address</a></li>
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
							
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Address</label>
									<div class="col-md-10">
										<textarea required class="form-control" id="permenant_address" name="permenant_address" placeholder="Permenant Address" rows="3"></textarea>
									<br>
									</div>
									
								</div>
								
								
								
								<div class="col-md-12">
				
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">City</label>
									<div class="col-md-4">
									
									<?php
									if($conn){
										$query = 'select DISTINCT city_name from cities';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input required type="text" list="citylist" placeholder="City" name="city" id="city" class="form-control">';
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
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Pin Code</label>
									<div class="col-md-4">
									<input  type="text" placeholder="Pin Code" name="pincode" id="pincode" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">State</label>
									<div class="col-md-4">
								
										<?php
									if($conn){
										$query = 'select DISTINCT city_state from cities';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input id="state" list="statelist" placeholder="State" class="form-control" name="state">';
									echo '<datalist id = "statelist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['city_state'].'</option>';
									}
							
									echo '</datalist>';
										}
										
									}
									?>
										
									<br><br>
									</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">District</label>
									<div class="col-md-4">
									
										<?php
									if($conn){
										$query = 'select DISTINCT city_name from cities';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input id="distric" list="districtlist" placeholder="District" class="form-control" name="district">';
									echo '<datalist id = "districtlist">';
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
								<input type="button" class="btn btn-primary"  value="Copy To Local Address" onClick="copyAdress();" >
								<br><br>
								</div>		
				
								</div>
								
								
								</div></div>
							
							
							
							</div>
							<div class="tab-pane fade" id="tab2">
									<div class="form-group">
									<label class="col-md-2 control-label" for="message">Address</label>
									<div class="col-md-10">
										<textarea  class="form-control" id="local_address" name="local_address" placeholder="Local Address" rows="3"></textarea>
									<br>
									</div>
									
								</div>
								
								
								
								<div class="col-md-12">
				
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">City</label>
									<div class="col-md-4">
									<?php
									if($conn){
										$query = 'select DISTINCT city_name from cities';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input required type="text" list="citylist" placeholder="City" name="local_city" id="local_city" class="form-control">';
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
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Pin Code</label>
									<div class="col-md-4">
									<input  type="text" placeholder="Pin Code" name="lpincode" id="lpincode" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">State</label>
									<div class="col-md-4">
									<?php
									if($conn){
										$query = 'select DISTINCT city_state from cities';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input id="local_state" list="statelist" placeholder="State" class="form-control" name="local_state">';
									echo '<datalist id = "statelist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['city_state'].'</option>';
									}
							
									echo '</datalist>';
										}
										
									}
									?>
										<br><br>
									</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">District</label>
									<div class="col-md-4">
									<input id="local_district" class="form-control" name="local_district">
										<br><br>
									</div>	
								</div>
								
								
								</div>
				</div>
							
						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->
			
			
				<div class="col-md-12">
							<br><br>
				
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Phone (1)</label>
									<div class="col-md-4">
									<input type="number" placeholder="Phone 1" name="Phone1" id="Phone1" class="form-control">
									<br><br>
									</div>	
								</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Phone (2)</label>
									<div class="col-md-4">
									<input  type="number" placeholder="Phone 2" name="Phone2" id="Phone2" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Mobile</label>
									<div class="col-md-4">
									<input  type="number" placeholder="mobile" name="mobile" id="mobile" class="form-control">
									<br><br>
									</div>	
								</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Fax</label>
									<div class="col-md-4">
									<input  type="number" placeholder="Fax" name="Fax" id="Fax" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Email</label>
									<div class="col-md-10">
									<input type="email" placeholder="Email Address" name="email" id="email" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
								<button type="submit" name='form_submit' class="btn btn-primary" style="width:100px;">Ok</button>
							
								</div>		
				
								
								</div>
				
				
				
				
				</div>
				
				
				
				
							
		
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
