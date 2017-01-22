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
		
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Ledger Report</h2>
			</div>
			
			
			<div class="col-lg-12" >
					
					<div class="col-lg-12" >
					
					<div class="form-group">
									
									<label class="col-md-1 control-label" for="name" align="center"> From </label>
									<div class="col-md-2">
									<input  id="frmdate"  name="fromdate"  type="date"   class="form-control">
									<br>
									</div>
									
									<label class="col-md-1 control-label" for="name" align="center"> To </label>
									<div class="col-md-2">
									<input  id="todate"  name="todate"  type="date"   class="form-control">
									<br><br>
									</div>
										
						</div>
						
						<div class="col-lg-12" >
						<div class="form-group">
									
									<div class="col-md-1">
									<input  id="chk"  name="chk"  type="checkbox"  class="form-control">
									</div>						
									
									<label class="col-md-2 control-label" for="name" align="center">Particular Party</label>
									
									<div class="col-md-6">
									<select class="form-control" name="local_district">
										<option>Party 1</option>
										<option>Party 2</option>
										<option>Party 3</option>
									</select><br>
									</div>
										
						</div>
					</div>	
						
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
					
					
						
						
						
						
						
							
				
								</div>
					</div>	
				<br>
					
				<div class="row" style="padding:20px;">
			
			<div class="form-group">
									
									
									
									
									<div class="form-group col-md-2">
								<button type="submit" class="btn btn-primary" style="width:100px;">Show</button>
								<br>
								</div>	
									
										
						</div>
			
			<div class="col-lg-12">
			
				<div class="panel panel-default">
			<!-- 		<div class="panel-heading"></div>
				-->	<div class="panel-body">
						<div class="table-responsive">
					
						<table border="1px"  id="table-style"   class="table table-condensed table table-bordered table-hover table table-striped"  data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						<thead>
						    <tr>
						        <th data-field="id" data-align="right" >Sr.</th>
						        <th data-field="name" >LR No.</th>
						        <th data-field="price" >Date</th>
						        <th data-field="id" data-align="right" >Vehicale</th>
						        <th data-field="name" >Billing</th>
						        <th data-field="price" >Charges</th>
						        <th data-field="price" >LR Total</th>
						    </tr>
						    </thead>
						    <tbody>
						    <tr>
						    <td>sfefw</td>
						    <td>sfefw</td>
						    <td>sfefw</td>
						    <td>sfefw</td>
						    <td>sfefw</td>
						    <td>sfefw</td>
						    <td>sfefw</td>
						    </tr>
						    <tr>
						    <td>sfefw</td>
						    <td>sfefw</td>
						    <td>sfefw</td>
						    <td>sfefw</td>
						    <td>sfefw</td>
						    <td>sfefw</td>
						    <td>sfefw</td>
						    </tr>
						    </tbody>

						</table>
					</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
					
			
					
					
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
							
					<div class="form-group col-lg-12">
								
									<div class="col-md-1">
									<button  type="submit" class="btn btn-primary" >Options</button>
								  	</div>
																	  
									<label class="col-md-1 control-label" for="name">Rows </label>
									
									<div class="col-md-1">
									<input  id="rate" name="ad"  type="checkbox"   class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">All</label>
									<div class="col-md-1">
									<input  id="rate"  name="ad"  readonly type="number" value="0"  class="form-control">
									</div>
									
									<div class="col-md-3">
									</div>
								  	
									
									<div class="col-md-1">
									<button  type="submit" class="btn btn-primary" >Export</button>
								  	</div>
								  	<div class="col-md-1">
									<button  type="submit" class="btn btn-primary" >Print</button>
								  	</div>
								  	<div class="col-md-1">
									<button  type="submit" class="btn btn-primary" >Close</button>
									<br><br><br>
								  	</div>
									
										
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
