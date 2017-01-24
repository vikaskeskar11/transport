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

	if(extract($_POST)) //check if there is data in the post method or no
	{
	extract($_POST); //extract the date 
	if($conn)	//database connection			
	{	//print_r($_POST);
		$query ="UPDATE vehicle SET model='$model',company='$company' WHERE regno='$vehicle'";
		$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
		
		
		if($result)
		{
			echo"<script type=\"text/javascript\">".
            "alert('Vehicle Information Modify Successfully');".
            "</script>";
		}else
		{
			echo"<script type=\"text/javascript\">".
            "alert('Error in Modifying Vehicle Information.Please Try again.');".
            "</script>";
		}
		
	}
	
	}
	
	?>
<form  action='modifyvehicalinfo.php' method='post'>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Modify Vehicale Info</h2>
			</div>
			
			<div class="form-group col-md-1">
								<button type="button" onclick="xls();" class="btn btn-primary" style="width:180px;">Get All Data Of Vehicles</button>
								<br><br>	
						</div>
			
			<div class="col-lg-12" style="padding:20px;">
		
				
				
				<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">Vehicle </label>
									<div class="col-md-4">
									<?php
									include 'config.php';
									if($conn){
										
										$query = 'select regno from vehicle';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="vehiclelist" id="vehicle"  name="vehicle"  type="text" placeholder="Reg No"  class="form-control" >';
									echo '<datalist id = "vehiclelist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['regno'].'</option>';
									}
							
									echo '</datalist>';
										}
									}
									?>
									</div>
									<div class="form-group col-md-1">
								<button type="button" onClick="getDataOfVehicle();" class="btn btn-primary">Get Data</button>
								</div>
									<label class="col-md-2 control-label" for="message" align="center">Vehicle Id</label>
									<div class="col-md-2">
									<input readonly required type="number" name="vehicleid" id="regid" class="form-control">
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
									<input readonly required type="Text"  name="companyid" id="regid1"  class="form-control">
									<br><br>
									</div>	
								</div>
								
							</div>
							
							
							
							
								
								<div class="col-md-12">
							
				
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Company</label>
									<div class="col-md-4">
									<input readonly required type="text"  name="company" id="company" class="form-control">
									
									</div>	
								
									<label class="col-md-2 control-label" for="message">Model</label>
									<div class="col-md-4">
									<input  readonly required type="text"  name="model" id="model" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">RTO Tax Amt.</label>
									<div class="col-md-4">
									<input  readonly type="text" placeholder="RTO Tax Amt." name="tax1" id="rtoamt" class="form-control">
									<br><br>
									</div>	
								</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">RTO Tax Exp. Date</label>
									<div class="col-md-4">
									<input readonly type="date"  name="tax" id="rtodate" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
									
				
								
								</div>
				
				
				
				
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
	
	function getDataOfVehicle() 
  {	var regid;        //get id
      var company;          //get name
	  var model;
	 var regid1;
  var name=document.getElementById("vehicle").value;
//	window.alert(name);
	if(name=="Please Select Person")
	{
		window.alert("Select Person or Add New Person First");
	}else{
	$.ajax({                                      
      url: 'modifyvehsupport.php',                  //the script to call to get data          
      data: "name="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		  regid1=data[1];
       regid = data[0];         //get id
       model = data[2];           //get name
	   company = data[3];
	  
      //$('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname);//Set output element html
	  // window.alert(data);
	  document.getElementById('regid1').value=regid1;
	   document.getElementById('regid').value=regid;
	   document.getElementById('model').value=model;
	   document.getElementById('company').value=company;
	   document.getElementById('rtoamt').value=data[4];
	   document.getElementById('rtodate').value=data[5];
	  } 
    });
 
}
  	
  }
  
  function xls()
  {
	  window.location.assign("xls_vehicle.php");
	  
  }
	</script>	
</body>

</html>
 