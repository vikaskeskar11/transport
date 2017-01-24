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

	if($_POST) //check if there is data in the post method or no
	{
			
		$UpperCase = array_map("strtoupper", $_POST);
		extract($UpperCase);
//	extract($_POST); //extract the date 
	if($conn)	//database connection			
	{	
		$query ="insert into drivers values 
		('','$person','$local_address','$local_city','$local_district','$local_state',
		'$local_pincode','$experience','$licno','$exp_date','$name','$address','$phone','$name2','$address2','$phone2')";
		$result = mysqli_query($conn,$query);
		if($result)
		{
			echo"<script type=\"text/javascript\">".
            "alert('New Driver Added Successfully');".
            "</script>";
		}else
		{
			echo"<script type=\"text/javascript\">".
            "alert('Error in Adding Driver. License No already Present.');".
            "</script>";
		}
		
	}
	
	}
	
	?>
	
<form  action='addnewdriver.php' method='post'>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Add Driver Information</h2>
			</div>
				<div class="col-lg-12" style="padding:20px;">
				<div class="col-lg-12" >
					<div class="col-lg-12" >
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">Person </label>
									<div class="col-md-9">
									<?php
									if($conn){
										$query = 'select name from persons';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="personlist" id="person"  name="person" onchange="getDataOfPerson()" type="text" placeholder="Person Name"  class="form-control">';
									echo '<datalist id = "personlist">';
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
								<button type="button" onClick="location.href='index.php'" class="btn btn-primary">New</button>
								<br><br>
								</div>	
						</div>
						
							
				
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
									
									<?php
									if($conn){
										$query = 'select DISTINCT city_name from cities';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input readonly required type="text" list = "citylist" placeholder="City" name="local_city" id="local_city" class="form-control">';
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
									<br><br>
									</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Pin Code</label>
									<div class="col-md-4">
									<input required readonly type="text"  placeholder="Pin Code" name="local_pincode" id="local_pincode" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">State</label>
									<div class="col-md-4">
										<?php
									if($conn){
										$query = 'select DISTINCT city_state from cities';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input id="local_state" readonly list="statelist" placeholder="State" class="form-control" name="local_state">';
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
									<br><br>
									</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">District</label>
									<div class="col-md-4">
									<input readonly id="local_district" type="text" class="form-control" placeholder="District"  name="local_district">
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
									<input required id="licno"  name="licno"  type="text"  class="form-control" placeholder="License Number">
									</div>
						</div>
					</div>		   
					
					<div class="col-lg-6" style="text-align:center;">
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Exp. Date</label>
									<div class="col-md-9">
									<input required id="exp_date"  name="exp_date"  type="date"  class="form-control">
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
										<textarea  class="form-control" id="address" name="address" placeholder="Address Details" rows="3"></textarea>
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
					<div class="form-group">
								<button type="submit" id="form_submit" name="form_submit" class="btn btn-primary" style="width:100px;">Ok</button>
								<br><br>
					</div>		
				
				
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
  function getDataOfPerson() 
  {	var address;        //get id
      var city;          //get name
	  var distric;
	  var state;
	  var pin;
  var name=document.getElementById("person").value;
//	window.alert(name);
	if(name=="Please Select Person")
	{
		window.alert("Select Person or Add New Person First");
	}else{
	$.ajax({                                      
      url: 'driver_support_file_add.php',                  //the script to call to get data          
      data: "name="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
       address = data[0];         //get id
       city = data[1];           //get name
	   distric = data[2];
	   state = data[3];
	   pin =data[4];
      //$('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname);//Set output element html
	  // window.alert(data);
	   document.getElementById('local_address').value=address;
	   document.getElementById('local_city').value=city;
	   document.getElementById('local_district').value=distric;
	   document.getElementById('local_state').value=state;
	   document.getElementById('local_pincode').value=pin;
	  } 
    });
 
}
  	
  }
  </script>
</body>

</html>
