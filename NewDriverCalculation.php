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
	

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">New Driver Calculation</h2>
			</div>
			
			
			<div class="col-lg-12" >
					
					<div class="col-lg-12" >
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name"> ID. </label>
									<div class="col-md-3">
									<input  id="lrid"  name="lrid"  type="number" value="23"  class="form-control">
									</div>
									
									<label class="col-md-2 control-label" for="name"> </label>
									<div class="col-md-1">
									</div>
									
									<label class="col-md-2 control-label" for="name" align="center"> DATE </label>
									<div class="col-md-3">
									<input  id="lrdate"  name="lrdate"  type="date"   class="form-control">
									<br>
									</div>
										
						</div>
						
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">Driver </label>
									<div class="col-md-10">
									<input  id="lrid"  name="lrid"  type="text" placeholder="Driver"  class="form-control">
									</div>
									
						
									<div class="form-group col-md-1">
								<button type="submit" class="btn btn-primary">New </button>
								<br>
								</div>			
									
									
						</div>
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">Vehicle</label>
									<div class="col-md-10">
									<input  id="lrid"  name="lrid"  type="text" placeholder="vehicle"  class="form-control">
									</div>
									
						
									<div class="form-group col-md-1">
								<button type="submit" class="btn btn-primary">New </button>
								<br><br>
								</div>			
									
									
						</div>
							
				
								</div>
					</div>	
				
					
				
					
			
					<div class="form-group" align="center">
					
									<label class="col-md-1 control-label" for="name">From </label>
									<div class="col-md-2">
									
									<?php
									if($conn){
										$query = 'select city_name from cities';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input list = "citylist" id="sad"  name="ad"  type="text" placeholder="From"  class="form-control">';
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
									
									<label class="col-md-1 control-label" for="name">To </label>
									<div class="col-md-2">
									
									<?php
									if($conn){
										$query = 'select city_name from cities';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input list="citylist" id="rate"  name="ad"  type="text" placeholder="To"  class="form-control">';
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
									
									<label class="col-md-1 control-label" for="name">From Km </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="FROM KM"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">To Km</label>
									<div class="col-md-1">
									<input  id="rate"  name="ad"   type="number" placeholder="TO Km"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">=</label>
									<div class="col-md-1">
									<input  id="rate"  name="ad" readonly  type="number" readonly  class="form-control">
									<br><br>
									</div>
										
						</div>
				
						<div class="form-group col-lg-12" align="center">
					
									<label class="col-md-1 control-label" for="name">Disel </label>
									<div class="col-md-4">
									<input  id="sad"  name="ad"  type="number" placeholder="Disel"  class="form-control">
									</div>
						</div>	
						
							
								
						<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Receipts</h4>
					</div>
			
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Advance1 </label>
									<div class="col-md-2">
									<input  id="sad"  name="ad"  type="number" placeholder="Advance 1"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Advance2</label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Advance 2"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Advance3 </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Advance 3"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Advance4</label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Advance 4"  class="form-control">
									</div>
										
						</div>
						
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Freight 1 </label>
									<div class="col-md-2">
									<input  id="sad"  name="ad"  type="number" placeholder="Freight 1"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Freight 2 </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Freight 2"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Freight 3 </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Freight 3"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Freight 4</label>
									<div class="col-md-2">
									<input  id="rate"   name="ad"  type="number" placeholder="Freight 4"  class="form-control">
									</div>
										
						</div>			
					
				
				
				
				<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Expenses</h4>
					</div>
			
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Loading </label>
									<div class="col-md-2">
									<input  id="sad"  name="ad"  type="number" placeholder="Loading"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Unloading</label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Unloading"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Escort </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Escort"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Toll Post</label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Toll Post"  class="form-control">
									</div>
										
						</div>
						
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Weighning </label>
									<div class="col-md-2">
									<input  id="sad"  name="ad"  type="number" placeholder="Weighning"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Daily All </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Daily All"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Postage </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Postage"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">DockExp</label>
									<div class="col-md-2">
									<input  id="rate"   name="ad"  type="number" placeholder="Dock Exp."  class="form-control">
									</div>
										
						</div>			
					
					
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
							
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name"> </label>
									<div class="col-md-2">
									<label control-label" for="name">Total </label>
									</div>
									
									<label class="col-md-1 control-label" for="name">Receipts </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" readonly class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Expenses</label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" readonly  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Remaining</label>
									<div class="col-md-2">
									<input  id="rate"   name="ad"  type="number" readonly  class="form-control">
									<br><br>
									</div>
										
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
