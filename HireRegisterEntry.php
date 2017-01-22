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

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
		
		
								
						
									
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">New Hire register Entry</h2><br>
			</div>
			
			<div class="col-lg-12" >
					
					<div class="col-lg-12" >
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name"> ID. </label>
									<div class="col-md-3">
									<input  id="lrid"  name="lrid"  type="number" value="23"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Sr.No. </label>
									<div class="col-md-3">
									<input  id="lrid"  name="lrid"  type="number" value="23"  class="form-control">
									
									</div>
									
									<label class="col-md-1 control-label" for="name" align="center"> DATE </label>
									<div class="col-md-3">
									<input  id="lrdate"  name="lrdate"  type="date"   class="form-control">
									<br>
									</div>
										
						</div>
						
						<div class="form-group" align="center">
									<label class="col-md-1 control-label" for="name">LR </label>
									<div class="col-md-11">
									<select class="form-control" name="local_district">
										<option>Party 1</option>
										<option>Party 2</option>
										<option>Party 3</option>
									</select><br>
									</div>
						</div>	
						
						<div class="form-group" align="center">
									<label class="col-md-1 control-label" for="name">Vehicale </label>
									<div class="col-md-11">
									<select class="form-control" name="local_district">
										<option>Party 1</option>
										<option>Party 2</option>
										<option>Party 3</option>
									</select><br>
									</div>
						</div>	
						
						<div class="form-group" align="center">
									<label class="col-md-1 control-label" for="name">Cosignor </label>
									<div class="col-md-11">
									<select class="form-control" name="local_district">
										<option>Party 1</option>
										<option>Party 2</option>
										<option>Party 3</option>
									</select><br>
									</div>
						</div>	
						
						<div class="form-group" align="center">
									<label class="col-md-1 control-label" for="name">Consignee </label>
									<div class="col-md-11">
									<select class="form-control" name="local_district">
										<option>Party 1</option>
										<option>Party 2</option>
										<option>Party 3</option>
									</select><br>
									</div>
						</div>
						
						<div class="form-group" align="center">
									<label class="col-md-1 control-label" for="name">Broker </label>
									<div class="col-md-11">
									<select class="form-control" name="local_district">
										<option>Party 1</option>
										<option>Party 2</option>
										<option>Party 3</option>
									</select><br><br>
									</div>
						</div>	
						
							
				
								</div>
					</div>	
				
					
				<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Weight </label>
									<div class="col-md-3">
									<input  id="sad"  name="ad"  type="number" placeholder="Weight"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Rate</label>
									<div class="col-md-3">
									<input  id="rate"  name="ad"  type="number" placeholder="Rate"  class="form-control">
									<br><br></div>
				</div>
					
			
					
							
								
						
			
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Freight </label>
									<div class="col-md-2">
									<input  id="sad"  name="ad"  type="number" placeholder="Freight"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Detention</label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Detention"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Other </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Other"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Total Freight</label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Total Freight"  class="form-control">
									</div>
										
						</div>
						
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Advance </label>
									<div class="col-md-2">
									<input  id="sad"  name="ad"  type="number" placeholder="Advance"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Panelty </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Panelty"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Other Ded</label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Other Ded."  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Balance Freight</label>
									<div class="col-md-2">
									<input  id="rate"   name="ad"  type="number" placeholder="Balance Freight"  class="form-control">
									<br><br></div>						
									
									
						</div>			
					
				
				<div class="col-lg-12">
						<label class="col-md-2 control-label" for="name" >Paid Date</label>
									<div class="col-md-3">
									<input  id="rate"  name="ad"  type="date"  class="form-control">
									</div>
									
									<label class="col-md-2 control-label" for="name">Invoice No.</label>
									<div class="col-md-3">
									<input  id="rate"   name="ad"  type="number" placeholder="Invoice No."  class="form-control">
									<br><br></div>
										
				</div>
				
				
				<div class="col-lg-12">
						
									<label class="col-md-2 control-label" for="name">Remark</label>
									<div class="col-md-10">
									<input  id="rate"   name="ad"  type="text" placeholder="Remark"  class="form-control">
								<br><br>	</div>
										
				</div>
				
				
				
					
					
					
					
							
					<div class="form-group" align="center">
					<br><br>
								<button type="submit" class="btn btn-primary" style="width:100px;">Ok</button>
								
								
								<button type="submit" class="btn btn-primary" style="width:100px;">Cancle</button>
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
	</script>	
</body>

</html>
