<?php include 'session_manager.php';
	  include 'config.php';	
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

<body onload="loadData()">

	

	<div class="col-lg-12" style="background-color:#ffffff;">			
			
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
					
		
		<div class="row" >
		
		
			<div class="col-lg-12" style="height:50px;">
				
			</div>
			
			
					<div class="col-lg-12" style="background-color:#ffffff;">
					
					<div class="col-lg-12" >
					
			
						
						
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
					
					
						<div class="col-lg-12" style="background-color:#ffffff;">
						<div class="form-group">
									<label class="col-md-1 control-label" for="name"></label>
									<div class="col-md-4">
									<?php echo "Gaurav Subhash Nikam"; ?>
									</div>
									
									<label class="col-md-1 control-label" for="name"> </label>
									<div class="col-md-2">
									<?php echo "Nashik"; ?>
									</div>
									
									<label class="col-md-2 control-label" for="name" align="center">  </label>
									<div class="col-md-2">
										<?php echo "1234"; ?>
									<br>
									</div>
										
						</div>
						</div>
						
						<div class="col-lg-12">
					<br>
						<div class="form-group">
									<label class="col-md-1 control-label" for="name"> </label>
									<div class="col-md-4">
									</div>
									
									<label class="col-md-1 control-label" for="name"> </label>
									<div class="col-md-2">
									<?php echo "Baramati"; ?>
									</div>
									
									<label class="col-md-2 control-label" for="name" align="center"></label>
									<div class="col-md-2">
										<?php echo "12/3/2016"; ?>
									<br>
									</div>
										
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
					<div class="col-lg-12">
						<table border="0px"  id="table-style"   class="table table-condensed  table-bordered "  data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
			<!-- 			<thead>
						    <tr>
						        <th data-field="id" data-align="right" >L.R.No.</th>
						        <th data-field="name" >Date</th>
						        <th data-field="price" >Invoice No.</th>
						        <th data-field="id" data-align="right" >Truck No.</th>
						        <th data-field="name" >Particulars</th>
						        <th data-field="price" >Weight(M.T.)</th>
						        <th data-field="price" >Rate</th>
					           <th data-field="price" >Amount<br>Rs.&nbsp;&nbsp;&nbsp;&nbsp;Ps.</th>
						 
						    </tr>
						    </thead>
				-->		    
				
				<tbody>
				
<?php 
$invoice_no = $_GET['ino'];

 $result  =  mysqli_query($conn,"select lno,lconname,ldate,lveh_no,lto,lfrom,lrtotal from lorryreceipt where ino='$invoice_no'");
 if(mysqli_num_rows($result)>0)
 { $grandTotal = 0;
	 while($row = mysqli_fetch_assoc($result))
		{	
			echo 			'<tr>
						    <td>LR NO:'.$row['lno'].'</td>
						    <td>'.$row['ldate'].'</td>
							<td>'.$row['lfrom'].'</td>
							<td>'.$row['lto'].'</td>
						    <td>1234</td>
						    <td>'.$row['lveh_no'].'</td>
						    <td>'.$row['lconname'].'</td>
						    <td>100</td>
						    <td>50</td>
						    <td>'.$row['lrtotal'].'</td>
						    </tr>';
							$grandTotal+=$row['lrtotal'];
		}
 }else
 {
	 echo "<script>alert('NO data found');</script>";
 }
?>
						    <!--<tr>
						    
						    
						    <td>LR 2</td>
						    <td>12/2/2013</td>
						    <td>1234</td>
						    <td>MH 12 Cm 1323</td>
						    <td>Gaurav Subhash Nikam</td>
						    <td>100</td>
						    <td>50</td>
						    <td>1011.74</td>
						    </tr>
						    
						     <tr>
						    <td>LR 3</td>
						    <td>12/2/2013</td>
						    <td>1234</td>
						    <td>MH 12 Cm 1323</td>
						    <td>Gaurav Subhash Nikam</td>
						    <td>100</td>
						    <td>50</td>
						    <td>1011.74</td>
						    </tr>
						    <tr>
						    -->
						     <tr  style="height:300px;background-color:#ffffff;">
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
							<td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    </tr>
						    
						    
						     <tr>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td>TOTAL RS.</td>
						    <td><?php echo $grandTotal?></td>
						    </tr>
						    </tbody>

						</table>
						</div>
					</div>	
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
					
					
					</div>
				</div>
			</div>
			
		</div><!--/.row-->
					
					
				<div class="col-lg-12" style="height:100px;">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
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
	function loadData(){
	var ino=localStorage.getItem('_ino');
	if(!ino) {
		return false;
	}
	ino=atob(ino);
	ino=JSON.parse(ino);
	
	alert(ino);	
	}
	
	</script>	
</body>

</html>
