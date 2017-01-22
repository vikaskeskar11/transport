<?php //include 'session_manager.php';?>
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

	if(isset($_POST['form_submit'])) //check if there is data in the post method or no
	{ 
	$UpperCase = array_map("strtoupper", $_POST);
		extract($UpperCase);
//	extract($_POST); //extract the date 
	if($conn)	//database connection			
	{	//print_r($_POST);
		$query ="UPDATE drivers SET name='$driver',address='$local_address',city='$local_city',distric='$local_district',state='$local_state',pin='$local_pincode',exp='$experience',lic_no='$licno',lic_exp_date='$exp_date',ref_1_name='$name',ref_1_address='$address',ref_1_phone='$phone',ref_2_name='$name2',ref_2_address='$address2',ref_2_phone='$phone2' WHERE name='$driver'";
		$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
		
		
		if($result)
		{
			echo"<script type=\"text/javascript\">".
            "alert('Driver Information Modify Successfully');".
            "</script>";
		}else
		{
			echo"<script type=\"text/javascript\">".
            "alert('Error in Modifying Driver Information.Please Try again.');".
            "</script>";
		}
		
	}
	
	}
	
	?>
	<form  action='modifydriverinfo.php' method='post'>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Modify Driver Information</h2>
			</div>
			
			
			
			<div class="col-lg-12" style="padding:20px;">
			
				
				<div class="col-lg-12" >
					
					<div class="col-lg-12" >
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">Driver </label>
									<div class="col-md-9">
								<?php
								
									if($conn){
										$query = 'select name from drivers';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="driverlist" id="driver"  name="driver"  type="text" placeholder="Driver Name"  class="form-control"  <!--onchange="getDataOfDriver();-->">';
									echo '<datalist id = "driverlist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['name'].'</option>';
									}
							
									echo '</datalist>';
										}
									}
									?>
								</div>
									<div class="form-group col-md-2">
								<button type="button" onClick="getDataOfDriver();" class="btn btn-primary">Get Data</button>
								<br><br>	
										
						</div>
						
						
					<!--	
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">Person </label>
									<div class="col-md-11">
									<input  id="person"  name="person"  type="text" placeholder="Person Name"  class="form-control">
									</div>
									
						</div>
						-->
							
				
								</div>
					</div>	
				<br><br>
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Person Details</h4>
					</div>
			
					
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
									<input readonly required type="text" placeholder="City" name="local_city" id="local_city" class="form-control">
									<br><br>
									</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Pin Code</label>
									<div class="col-md-4">
									<input readonly  type="number" placeholder="Pin Code" name="local_pincode" id="local_pincode" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">State</label>
									<div class="col-md-4">
									<input readonly  type="text" placeholder="State" name="local_state" id="local_state" class="form-control">
									<br><br>
									</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">District</label>
									<div class="col-md-4">
										<input readonly  type="text" placeholder="District" name="local_district" id="local_district" class="form-control">
									<br><br>
									</div>	
								</div>
										
					<br><br><br>
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">License Details</h4>
					</div>
			
					
					<div class="col-lg-6" style="float:left;">
										
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Lic. No.</label>
									<div class="col-md-9">
									<input  id="licno"  name="licno"  type="text"  class="form-control" placeholder="License Number">
									</div>
						</div>
					</div>		   
					
					<div class="col-lg-6" style="text-align:center;">
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Exp. Date</label>
									<div class="col-md-9">
									<input   id="exp_date"  name="exp_date"  type="date"  class="form-control">
									</div>
						</div>
					</div>			
					<br><br><br>
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"> Other Details </h4>
					</div>
			
					
					<div class="col-lg-12" style="float:left;">
										
						<div class="form-group">
									<label class="col-md-2 control-label" for="name">Experience</label>
									<div class="col-md-10">
										<textarea  class="form-control" id="experience" name="experience" placeholder="Experience Details" rows="3"></textarea>
								   </div>
						</div>
					</div>		   
					
							
					<br><br><br>
									
				</div>
				
				
			<div class="col-lg-12">	
				
			  <div class="col-lg-6">	
				
				<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"> Reference 1 </h4>
				</div>
				
				
				<div class="col-lg-12">
							<div class="form-group">
									<label class="col-md-2 control-label" for="message">Name</label>
									<div class="col-md-10">
									<input  type="text" placeholder="Enter Name" name="name" id="name" class="form-control">
									<br><br>
									</div></div>
				
			  				</div>	
				
							<div class="form-group">
									<label class="col-md-2 control-label" for="message">Address</label>
									<div class="col-md-10">
										<textarea class="form-control" id="address" name="address" placeholder="Address Details" rows="3"></textarea>
								 	<br><br>
									</div></div>
									
							<div class="form-group">
									<label class="col-md-2 control-label" for="message">Phone</label>
									<div class="col-md-10">
										<input  type="number" placeholder="Enter Phone No." name="phone" id="phone" class="form-control">
										<br><br>
									</div></div>		
				
			  			</div>
			  			
			  			 <div class="col-lg-6">	
				
				<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"> Reference 2 </h4>
				</div>
				
				
				<div class="col-lg-12">
							<div class="form-group">
									<label class="col-md-2 control-label" for="message">Name</label>
									<div class="col-md-10">
									<input  type="text" placeholder="Enter Name" name="name2" id="name2" class="form-control">
									<br><br>
									</div></div>
				
			  				</div>	
				
							<div class="form-group">
									<label class="col-md-2 control-label" for="message">Address</label>
									<div class="col-md-10">
										<textarea  class="form-control" id="address2" name="address2" placeholder="Address Details" rows="3"></textarea>
								 	<br><br>
									</div></div>
									
							<div class="form-group">
									<label class="col-md-2 control-label" for="message">Phone</label>
									<div class="col-md-10">
										<input  type="number" placeholder="Enter Phone No." name="phone2" id="phone2" class="form-control">
										<br><br>
									</div></div>		
				
			  				</div>
			  				
			  				
				
			  				</div>
				
				
			</div>	
			  				
				<div class="form-group">
								<button type="submit" name='form_submit' class="btn btn-primary" style="width:100px;">Ok</button>
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
  function getDataOfDriver() 
  {	var address;        //get id
      var city;          //get name
	  var distric;
	  var state;
	  var pin;
	  var exp,licno,lic_exp_date,ref1name,ref1addd,ref1phone,ref2name,ref2addd,ref2phone;
  var name=document.getElementById("driver").value;
	//window.alert(name);
	if(name=="Please Select Driver")
	{
		window.alert("Select Driver or Add New Driver First");
	}else{
		
	$.ajax({                      
		//window.alert("in else case ajax");	
      url: 'driver_support_file_modify.php',                  //the script to call to get data          
      data: "name="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      { name=data[1];
       address = data[2];         //get id
       city = data[3];           //get name
	   distric = data[4];
	   state = data[5];
	   pin =data[6];
	   exp = data[7];
	   licno = data[8];
	   lic_exp_date = data[9];
	   ref1name = data[10];
	   ref1addd= data[11];
	   ref1phone = data[12];
	   ref2name = data[13];
	   ref2addd= data[14];
	   ref2phone = data[15];
	   
      //$('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname);//Set output element html
	  //window.alert(data);
		document.getElementById('driver').value = name;
	   document.getElementById('local_address').value=address;
	   document.getElementById('local_city').value=city;
	   document.getElementById('local_district').value=distric;
	   document.getElementById('local_state').value=state;
	   document.getElementById('local_pincode').value=pin;
	   document.getElementById('experience').value=exp;
	   document.getElementById('licno').value=licno;
	   document.getElementById('exp_date').value=lic_exp_date;
	   document.getElementById('name').value=ref1name;
	   document.getElementById('address').value=ref1addd;
	   document.getElementById('phone').value=ref1phone;
	   document.getElementById('name2').value=ref2name;
	   document.getElementById('address2').value=ref2addd;
	   document.getElementById('phone2').value=ref2phone;
	   
	  } 
    });
 
}
  	
  }
  </script>
</body>

</html>
