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

	if(extract($_POST)) //check if there is data in the post method or no
	{
	extract($_POST); //extract the date 
	if($conn)	//database connection			
	{	
		$query ="insert into cities values ('','$city','$state')";
		$result = mysqli_query($conn,$query);
		if($result)
		{
			echo"<script type=\"text/javascript\">".
            "alert('New City Added Successfully');".
            "</script>";
		}else
		{
			echo"<script type=\"text/javascript\">".
            "alert('Error in Adding city.Please Try asgain.');".
            "</script>";
		}
		
		
	}
	
	}
	
	?>
	<form  method="post"  action="addcity.php">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Add City</h2>
			</div>
			
				
			
			<div class="col-lg-12" style="padding:20px;">
		
				
				
				
				
				<div class="col-lg-12">
				
				
				<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
								<ul class="nav nav-tabs">
				<li class="active"><a href="#tab1" data-toggle="tab">City</a></li>
				</ul>
						<div class="tab-content">
							
							
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">State</label>
									<div class="col-md-10">
									
									
									<?php
									if($conn){
										$query = 'select DISTINCT city_state from cities';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input required type="text" list="statelist" placeholder="Enter State Name" name="state" id="name" class="form-control">';
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
									<br>
									</div>
									
								</div>
							
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">City</label>
									<div class="col-md-10">
										<textarea required class="form-control" id="permenant_address" name="city" placeholder="Enter City" rows="1"></textarea>
									<br>
									</div>
									
								</div>
								
								
								
								
								
								
					<div class="form-group">
								
								<div class="col-md-12">
							
			
								<div class="form-group">
								<button type="submit" class="btn btn-primary" style="width:100px;">Ok</button>
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
