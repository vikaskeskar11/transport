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
	<?php include 'header.php';
	include 'config.php'; ?>
<form action="" method="post">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
	
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Modify Disel Usages</h2>
			</div>
			<div class="col-lg-12" style="padding:20px;">
				
				<div class="col-lg-12" align="center">
					<div class="col-lg-12">
					
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">Slip No. </label>
									<div class="col-md-4">
									<input  id="slipno"  name="slipno"  type="number" placeholder="Slip Number"  class="form-control">
									</div>									
									<div class="form-group col-md-1">
										<button type="button" onclick="getDataDisel();" class="btn btn-primary">Modify</button>
										<br>
									</div>	
								</div>
					
					
								<div class="form-group">
									<label class="col-md-2 control-label" for="message"> Id</label>
									<div class="col-md-4">
									<input required readonly type="number"  name="did" id="did" value="" class="form-control">
									<br><br>
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
									<label class="col-md-1 control-label" for="name">Vehicale </label>
									<div class="col-md-9">
										<?php	if($conn){
										$query = 'select vehicalno from vehical';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="vehicale_list" id="dvehical"  name="dvehical"  type="text" placeholder="Vehical"  class="form-control">';
									echo '<datalist id="vehicale_list">';
									while($row = mysqli_fetch_assoc($result))
									{
										echo "<option>".$row['vehicalno']."</option>";
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
									echo '<input  list = "driver_list" id="ddriver"  name="ddriver"  type="text" placeholder="Driver"  class="form-control">';
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
								<input  id="dpump" list="pump_list" name="dpump"  type="text" placeholder="Pump"  class="form-control">
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
									<input required type="text" placeholder="From" name="dfrom" id="dfrom" class="form-control">
									<br><br>
									</div>
								</div>	
								<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">To</label>
									<div class="col-md-4">
									<input required type="text" placeholder="To" name="dto" id="dto" class="form-control">
									<br><br>
									</div>
								</div>	
								<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">Quantity Ordered</label>
									<div class="col-md-4">
									<input required type="number" placeholder="Quantity Ordered" name="dqunity_ordered" id="dqunity_ordered" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">Quantity Actual</label>
									<div class="col-md-4">
									<input required type="number" placeholder="Quantity Actual" name="dqunity_actual" id="dqunity_actual" class="form-control">
									<br>
									</div>	
								</div>
						</div>		
						<div class="col-md-12">
							
				
								<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">KM Reading Start</label>
									<div class="col-md-4">
									<input required type="number" placeholder="KM Reading Start" name="dstart_reading" id="dstart_reading" class="form-control">
									</div>	
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">KM Reading End</label>
									<div class="col-md-4">
									<input required type="number" placeholder="KM Reading End" name="dend_reading" id="dend_reading" class="form-control">
									<br><br>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">Total KiloMeters</label>
									<div class="col-md-4">
									<input required type="number" readonly name="dtotal_km" id="dtotal_km" class="form-control">
									</div>	
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">Average</label>
									<div class="col-md-4">
									<input required type="number" readonly  name="davg" id="davg" class="form-control">
									<br><br>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">Rate</label>
									<div class="col-md-4">
									<input required type="number" placeholder="Rate" name="drate" id="drate" class="form-control">
									</div>	
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">Amount</label>
									<div class="col-md-4">
									<input required type="number" readonly  name="damount" id="damount" class="form-control">
									<br><br>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Remark</label>
									<div class="col-md-10">
									<input required type="text" placeholder="Remark" name="dremark" id="dremark" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
								<br><br>
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
	<script id="source" language="javascript" type="text/javascript">
  function getDataDisel() 
  {	
  var name=document.getElementById("slipno").value;
	//window.alert(name);
	if(name=="")
	{
		window.alert("Please Enter the Slip Number");
	}else{
	$.ajax({                                      
      url: 'modify_disel_support_file.php',                  //the script to call to get data          
      data: "name="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		if(data==null)
		{
			alert("Enter Valid Slip No");
		}
      //$('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname);//Set output element html
	   //window.alert(data);
	   document.getElementById('did').value=data[0];
	  document.getElementById('dslip').value=data[1];
	  document.getElementById('slipdate').value=data[2];
	  document.getElementById('dvehical').value=data[3];
	  document.getElementById('ddriver').value=data[4];
	  document.getElementById('dpump').value=data[5];
	  document.getElementById('dfrom').value=data[6];
	  document.getElementById('dto').value=data[7];
	  document.getElementById('dqunity_ordered').value=data[8];
	  document.getElementById('dqunity_actual').value=data[9];
	  document.getElementById('dstart_reading').value=data[10];
	  document.getElementById('dend_reading').value=data[11];
	  document.getElementById('dtotal_km').value=data[12];
	  document.getElementById('davg').value=data[13];
	  document.getElementById('drate').value=data[14];
	  document.getElementById('damount').value=data[15];
	  document.getElementById('dremark').value=data[16];
	  
	   
	  } 
    });
 }
  	
  }
  </script>	
</body>

</html>
