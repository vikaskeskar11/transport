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
<script>
function validateForm() {
    var x = document.forms["myForm"]["conname"].value;
	var y = document.forms["myForm"]["cname"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>

</head>

<body>
	

	<?php include 'header.php';?>
	<?php 
	include 'config.php'; //include the database file

	if($_POST)//check if there is data in the post method or no
	{
		$UpperCase = array_map("strtoupper", $_POST);
		extract($UpperCase);
//	extract($_POST); //extract the date 
	if($conn)	//database connection			
	{	
		$query ="insert into company values ('','$type','$balance','$name'
		,'$permenant_address','$city','$cdistrict','$state','$pincode','$Phone1','$Phone2','$Fax1','$Fax2','$email1','$email2','','$conname','$web')";
		$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
		if($result)
		{
			echo"<script type=\"text/javascript\">".
            "alert('New Company Added Successfully');".
            "</script>";
		}else
		{
			echo"<script type=\"text/javascript\">".
            "alert('Error in Adding Company.Please Try again.');".
            "</script>";
		}
		
		
	}
	
	}
	
	?>
	<form name="myForm" method="post"  action="addnewcompany.php">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Add New Company</h2>
			</div>
			
				
			
			<div class="col-lg-12" style="padding:20px;">
		
				
				
				
				
				<div class="col-lg-12">
				
				
				<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
								<ul class="nav nav-tabs">
				<li class="active"><a href="#tab1" data-toggle="tab">Company Information</a></li>
				</ul>
						<div class="tab-content">
						
					
							<div class="tab-pane fade in active" id="tab1">
							
							<div class="col-lg-12">
								<div class="form-group">
									<label id="cname" class="col-md-2 control-label" for="message">Company Id</label>
									<div class="col-md-4">
									<?php 
									$query="SELECT cid FROM company";
									$result=mysqli_query($conn, $query); 
									 $num_rows = mysqli_num_rows($result);
									$lid;
									while ($row = mysqli_fetch_assoc($result))
									{
										$lid=$row["cid"];
										
									}
									echo '<input readonly required type="number"  name="companyid" id="companyid" value='.($lid+1).' class="form-control">';
		 
							?>
	
								<br><br>
									</div>	
								</div>
								
							</div>
							
							
							<div class="col-lg-12">
								<div class="form-group">
									<label id="type1" class="col-md-2 control-label" for="message">Type</label>
									<div class="col-md-2">
									<select class="form-control" name="type">
										<option>Creditor</option>
										<option>Debitor</option>
									</select>
									</div>	
									
									
									
									</div>	
									
									
									<label class="col-md-2 control-label" for="message">Opening Balance</label>
									<div class="col-md-2">
																		<select id="amt_unit" class="form-control" name="amt_unit">
										<option>Rs</option>
										
									</select>
									</div>	
									
									<div class="col-md-2">
									<input  type="number" placeholder="Balance Amt." name="balance" id="balance" class="form-control">

									<br><br>
									
									</div>			
																
								</div>
								
							</div>
									
							
							
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Company Name</label>
									<div class="col-md-10">
									<input required type="text" placeholder="Enter Company Name" name="name" id="name" class="form-control">
									<br>
									</div>
									
									<?php
									if($conn){
										$query = 'select name from persons';
										$result = mysqli_query($conn,$query);
								if(mysqli_num_rows($result)>0)
										{
									echo '<label class="col-md-2 control-label" for="message">Key Person Name</label>';
									echo '<div class="col-md-10">';
									echo '<input required  list = "personlist" type="text" placeholder="Key Person Name" name="conname" id="conname" class="form-control">';
									echo '<br>
									</div>';
									
									echo '<datalist id = "personlist">';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['name'].'</option>';
									}
							
									echo '</datalist>';
										}
									}
									?>
								
									
								</div>
							
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Address</label>
									<div class="col-md-10">
										<textarea  class="form-control" id="permenant_address" name="permenant_address" placeholder="Permenant Address" rows="3"></textarea>
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
									<input  type="number" placeholder="Pin Code" name="pincode" id="pincode" class="form-control">
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
									echo '<input  type="text" list="citylist" type="text" placeholder="District" name="cdistrict" id="cdistric" class="form-control">';
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

								
								<div class="col-md-12">
							
				
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Phone (1)</label>
									<div class="col-md-4">
									<input type="number" placeholder="Phone 1" name="Phone1" id="Phone1" class="form-control">
									
									</div>	
								
									<label class="col-md-2 control-label" for="message">Phone (2)</label>
									<div class="col-md-4">
									<input type="number" placeholder="Phone 2" name="Phone2" id="Phone2" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Fax (1)</label>
									<div class="col-md-4">
									<input  type="number" placeholder="Fax Number" name="Fax1" id="fax1" class="form-control">
									<br><br>
									</div>	
								</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Fax (2)</label>
									<div class="col-md-4">
									<input  type="number" placeholder="Fax Number" name="Fax2" id="Fax" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Email (1)</label>
									<div class="col-md-10">
									<input  type="email" placeholder="Email Address" name="email1" id="email" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Email (2)</label>
									<div class="col-md-10">
									<input type="email" placeholder="Email Address" name="email2" id="email2" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Website</label>
									<div class="col-md-10">
									<input  type="text" placeholder="Website Address" name="web" id="web" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
								<button type="submit" name="form_submit" class="btn btn-primary" style="width:100px;">Ok</button>
								<br><br>
								</div>		
				
								
								</div>
				
				
				
				
				</div>
								
								
								</div></div>
							
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
