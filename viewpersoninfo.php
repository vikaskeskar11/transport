<?php include 'session_manager.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/input.css" rel="stylesheet">
-->
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
				<h2 class="page-header" style="color:#1F618D  ;">View Person Information</h2>
			</div>
			
			
			<div class="form-group col-md-1">
								<button type="button" onclick="xls();"class="btn btn-primary" style="width:180px;">Get All Data Of person</button>
								<br><br>	
						</div>
			<div class="col-lg-12" style="padding:20px;">
		
				
				<div class="col-lg-12" >
					
					<div class="col-lg-12" >
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">Person </label>
									<div class="col-md-9">
<!--									<div class="col-md-9">-->
									<?php
									include("config.php");
									if($conn){
										$query = 'select name from persons';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<div class="col-md-9">';
									echo '<input  list="person_list" id="person"  name="person"  type="text" placeholder="Person Name"  class="form-control">';
									echo '</div>';
									echo '<datalist id = "person_list">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['name'].'</option>';
									}
							
									echo '</datalist>';
										}
									}
									?>					
										<!--</div>-->
							
							<div class="form-group col-md-1">
								<button type="button" onClick="getDataOfPerson();" class="btn btn-secondary">Get Data</button>
								<br><br>	
						</div>
						
										
						
					</div>	
				<br><br><br>
					
					<div class="col-lg-6" style="float:left;">
						
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Person Id</label>
									<div class="col-md-9">
									<input readonly   id="person_id"  name="person_id"  type="number" value="" class="form-control">
									</div>
						</div>
					</div>		   
					
					<br><br></br>
					
				</div>
				
				
				<div class="col-lg-12">
				
						<div class="col-lg-1" style="text-align:center;">
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name</label>
									
						</div>
						</div>	
				
						
									
						<div class="col-md-11">
						<div class="form-group">
					<input  id="name"  name="name"  type="text" placeholder="Person Name" class="form-control">										
						</div>
						
					
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
										<textarea readonly required class="form-control" id="permenant_address" name="permenant_address" placeholder="Permenant Address" rows="3"></textarea>
									<br>
									</div>
									
								</div>
								
								
								
								<div class="col-md-12">
				
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">City</label>
									<div class="col-md-4">
									<input readonly  required type="text" placeholder="City" name="city" id="city" class="form-control">
									<br><br>
									</div>
									
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">District</label>
									<div class="col-md-4">
									<input id="district" class="form-control" name="district" disabled>
										<br><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">State</label>
									<div class="col-md-4">
									<input id="state" class="form-control" name="state" disabled>
										<br><br>
									</div>
									
										
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Pin Code</label>
									<div class="col-md-4">
									<input readonly  required type="number" placeholder="Pin Code" name="pincode" id="pincode" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								
				
								</div>
								
								
								</div></div>
							
							
							
							</div>
							<div class="tab-pane fade" id="tab2">
									<div class="form-group">
									<label class="col-md-2 control-label" for="message">Address</label>
									<div class="col-md-10">
										<textarea readonly required class="form-control" id="local_address" name="local_address" placeholder="Local Address" rows="3"></textarea>
									<br>
									</div>
									
								</div>
								
								
								
								<div class="col-md-12">
				
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">City</label>
									<div class="col-md-4">
									<input readonly  required type="text" placeholder="City" name="local_city" id="local_city" class="form-control">
									<br><br>
									</div>
									
									
								
								
								
								<div class="form-group">
										
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">District</label>
									<div class="col-md-4">
									<input id="local_district" class="form-control" name="local_district" disabled>
										<br><br>
									</div>	
								</div>
								
									
									<label class="col-md-2 control-label" for="message">State</label>
									<div class="col-md-4">
									<input id="local_state" class="form-control" name="local_state" disabled>
										<br><br>
									</div>
					<div class="form-group">
									<label class="col-md-2 control-label" for="message">Pin Code</label>
									<div class="col-md-4">
									<input readonly  required type="number" placeholder="Pin Code" name="local_pincode" id="local_pincode" class="form-control">
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
									<input readonly  required type="number" placeholder="Phone 1" name="Phone1" id="Phone1" class="form-control">
									<br><br>
									</div>	
								</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Phone (2)</label>
									<div class="col-md-4">
									<input readonly  required type="number" placeholder="Phone 2" name="Phone2" id="Phone2" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Mobile</label>
									<div class="col-md-4">
									<input readonly  required type="number" placeholder="mobile" name="mobile" id="mobile" class="form-control">
									<br><br>
									</div>	
								</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Fax</label>
									<div class="col-md-4">
									<input readonly  required type="number" placeholder="Fax" name="Fax" id="Fax" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Email</label>
									<div class="col-md-10">
									<input readonly  required type="email" placeholder="Email Address" name="email" id="email" class="form-control">
									<br><br>
									</div>	
								</div>
								
							
								
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
	
	function getDataOfPerson()
	{
		var name=document.getElementById("person").value;
	//window.alert(name);
	if(name=="Please Select Person")
	{
		window.alert("Select Person ");
	}else{
		//alert("In the else");
	$.ajax({                      
		//window.alert("in else case ajax");	
      url: 'person_support_file.php',                  //the script to call to get data          
      data: "name="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      { 	
     
	  //alert(data[4]);
		document.getElementById('person_id').value = data[0];
	   document.getElementById('name').value=data[1];
	   document.getElementById('permenant_address').value=data[2];
	   document.getElementById('city').value=data[3];
	   document.getElementById('district').value=data[4];
	   document.getElementById('state').value=data[5];
	   document.getElementById('pincode').value=data[6];
	   document.getElementById('local_address').value=data[7];
	   document.getElementById('local_city').value=data[8];
	   document.getElementById('local_district').value=data[9];
	   document.getElementById('local_state').value=data[10];
	   document.getElementById('local_pincode').value=data[11];
	   document.getElementById('mobile').value=data[12];
	   document.getElementById('Phone1').value=data[13];
	   document.getElementById('Phone2').value=data[14];
	   document.getElementById('Fax').value=data[15];
	   document.getElementById('email').value=data[16];
	   } 
    });
 
}
  	
  }
	
	function xls()
	{
		window.location.assign("xls_person.php");
	}
	
	</script>	
</body>

</html>
