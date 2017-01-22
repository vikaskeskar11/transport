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
				<h2 class="page-header" style="color:#1F618D  ;">View Invoice</h2>
			</div>
			
			
			<div class="col-lg-12" >
					
					<div class="col-lg-12" >
					
					<div class="form-group">
									<label class="col-md-2 control-label" for="name"> Invoice No. </label>
									<div class="col-md-3">
									<input  id="lrid"  name="lrid"  type="number" value="23"  class="form-control">
									</div>
									<div class="form-group col-md-2">
								<button type="submit" class="btn btn-primary">Modify</button>
								<br>
								</div>	
					</div>
						
						
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
					
					
						<div class="form-group">
									<label class="col-md-1 control-label" for="name"> ID. </label>
									<div class="col-md-3">
									<input  id="lrid"  name="lrid"  type="number" value="23"  class="form-control">
									</div>
									
									<label class="col-md-2 control-label" for="name">Invoice NO. </label>
									<div class="col-md-3">
									<input  id="lrno"  name="lrno"  type="number" value="23"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name" align="center"> DATE </label>
									<div class="col-md-2">
									<input  id="lrdate" readonly name="lrdate"  type="date"   class="form-control">
									<br>
									</div>
										
						</div>
						
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">First LR </label>
									<div class="col-md-3">
									<input  id="lrid"  name="lrid"  type="text" placeholder="packages"  class="form-control">
									</div>
									
									
									
									<label class="col-md-2 control-label" for="name" align="center">Party</label>
									
									<div class="col-md-6">
									<select class="form-control" name="local_district">
										<option>Party 1</option>
										<option>Party 2</option>
										<option>Party 3</option>
									</select><br>
									</div>
										
						</div>
						
							
				
								</div>
					</div>	
				<br>
					
				<div class="row">
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
					
			<div class="form-group">
									<label class="col-md-1 control-label" for="name">LR No. </label>
									<div class="col-md-3">
									<input  id="lrid"  name="lrid"  type="number" placeholder="LR Number"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Weight </label>
									<div class="col-md-3">
									<input  id="lrid" readonly  name="lrid"  type="number" placeholder="Weight"  class="form-control">
									</div>
									
									
									
									
									<div class="form-group col-md-2">
								<button type="submit" class="btn btn-primary">New LR</button>
								<br>
								</div>	
									
										
						</div>
			
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Billing</h4>
					</div>
			
					<div class="form-group">
									<label class="col-md-1 control-label" for="name">Calc Wt. </label>
									<div class="col-md-2">
									<input  id="sad"  name="ad"  type="number" placeholder="Weight"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Rate </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Rate"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">% </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Percent"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Sub Tot.</label>
									<div class="col-md-2">
									<input  id="rate"  name="ad" readonly  type="number" placeholder="Sub Total"  class="form-control">
									</div>
										
						</div>
				
								
								
						<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Charges</h4>
					</div>
			
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Loading </label>
									<div class="col-md-2">
									<input  id="sad"  name="ad"  type="number" placeholder="Loading"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">UnLoading </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="UnLoading"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Stat. </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Stat."  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Tail Open</label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" value="0"  class="form-control">
									</div>
										
						</div>
						
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Detention </label>
									<div class="col-md-2">
									<input  id="sad"  name="ad"  type="number" placeholder="Detention"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Delivery </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Delivery"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Other </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="Other"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Total Chrg.</label>
									<div class="col-md-2">
									<input  id="rate"  readonly name="ad"  type="number" value="0"  class="form-control">
									</div>
										
						</div>			
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
							
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">LR Total </label>
									<div class="col-md-3">
									<input  id="sad"  name="ad"  type="number" readonly value="0" class="form-control">
									</div>
					</div>
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
							
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Inv Total </label>
									<div class="col-md-2">
									<input  id="sad" readonly name="ad" readonly type="number"   class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Charges </label>
									<div class="col-md-2">
									<input  id="rate" readonly  name="ad"  type="number"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Total </label>
									<div class="col-md-2">
									<input  id="rate" readonly  name="ad"  type="number"   class="form-control">
									</div>
									
									<div class="col-md-1">
									<input  id="rate" name="ad"  type="checkbox"   class="form-control">
									</div>
									<label class="col-md-1 control-label" for="name">Taxable</label>
									<div class="col-md-1">
									<input  id="rate"  name="ad"  type="number" value="0"  class="form-control">
									</div>
										
						</div>
						
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Service Tax </label>
									<div class="col-md-2">
									<input  id="sad" readonly  name="ad"  type="number"   class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Edu. Cess</label>
									<div class="col-md-2">
									<input  id="rate" readonly  name="ad"  type="number"   class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Hsc Cess </label>
									<div class="col-md-2">
									<input  id="rate" readonly  name="ad"  type="number"   class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Total Srv Tax</label>
									<div class="col-md-2">
									<input  id="rate"  readonly name="ad"  type="number"   class="form-control">
									</div>
										
						</div>			
					
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
							
					<div class="form-group col-lg-12">
									<label class="col-md-2 control-label" for="name">Net Amount </label>
									<div class="col-md-3">
									<input  id="sad" readonly name="ad" readonly type="number"   class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Remark </label>
									<div class="col-md-6">
									<input  id="rate"   name="ad"  type="text" readonly  class="form-control">
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
