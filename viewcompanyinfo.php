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
				<h2 class="page-header" style="color:#1F618D  ;">View Company Information</h2>
			</div>
			
			
			
			<div class="col-lg-12" style="padding:20px;">
		
				
				<div class="col-md-12">
				
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Company</label>
									<div class="col-md-10">
<?php
									include("config.php");
									if($conn){
										$query = 'select cname from company';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<div class="col-md-9">';
									echo '<input  list="company_list" id="company"  name="company"  type="text" placeholder="Company Name"  class="form-control">';
									echo '</div>';
									echo '<datalist id = "company_list">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['cname'].'</option>';
									}
							
									echo '</datalist>';
										}
									}
									?>					
							
			<!--</div>-->
							
							<div class="form-group col-md-1">
								<button type="button" onClick="getDataOfCompany();" class="btn btn-secondary">Get Data</button>
								<br><br>	
									
									</div>
				</div>
				
				
				
				<div class="col-lg-12">
				
				<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Company Information</a></li>
							
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
							
							
							<div class="col-lg-12">
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Company Id</label>
									<div class="col-md-4">
									<input readonly  required type="number"  name="companyid" id="companyid"  class="form-control">
									<br><br>
									</div>	
								</div>
								
							</div>
							
							
							<div class="col-lg-12">
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Type</label>
									<div class="col-md-2">
									<input type="text" id="cr"  class="form-control">
									</div>	
									
									
									
									
									<label class="col-md-2 control-label" for="message">Opening Balance</label>
									<div class="col-md-2">
									<input readonly  required type="number" placeholder="Balance Amt." name="balance" id="balance" class="form-control">
									
									</div>	
									
									<div class="col-md-2">
									<input type="text" value="Rs"  class="form-control">
									<br><br>
									
									</div>			
																
								</div>
								
							</div>
									
							
							
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Name</label>
									<div class="col-md-10">
									<input readonly  required type="text" placeholder="Enter Name" name="name" id="name" class="form-control">
									<br>
									</div>
									
								</div>
							
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
									<label class="col-md-2 control-label" for="message">Pin Code</label>
									<div class="col-md-4">
									<input readonly  required type="number" placeholder="Pin Code" name="pincode" id="pincode" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">State</label>
									<div class="col-md-4">
									<input type="text" id="state" class="form-control">
<br/>
									</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">District</label>
									<div class="col-md-4">
									<input type="text" id="distric" class="form-control">
<br/>
									</div>	
								</div>
								
								<div class="col-md-12">
							
				
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Phone (1)</label>
									<div class="col-md-4">
									<input readonly  required type="number" placeholder="Phone 1" name="Phone1" id="phone1" class="form-control">
									
									</div>	
								
									<label class="col-md-2 control-label" for="message">Phone (2)</label>
									<div class="col-md-4">
									<input readonly  required type="number" placeholder="Phone 2" name="Phone2" id="phone2" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Fax (1)</label>
									<div class="col-md-4">
									<input readonly  required type="number" placeholder="Fax Number" name="fax1" id="fax1" class="form-control">
									<br><br>
									</div>	
								</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Fax (2)</label>
									<div class="col-md-4">
									<input readonly  required type="number" placeholder="Fax Number" name="Fax" id="fax2" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Email (1)</label>
									<div class="col-md-10">
									<input readonly  required type="email" placeholder="Email Address" name="email" id="email1" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Email (2)</label>
									<div class="col-md-10">
									<input readonly  required type="email" placeholder="Email Address" name="email2" id="email2" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Website</label>
									<div class="col-md-10">
									<input readonly  required type="text" placeholder="Website Address" name="web" id="web" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
								
								<br><br>
								</div>		
				
								
								</div>
				
				
				
				
				</div>
								
								
								</div></div>
							
							
							
							</div>
							
								
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
	</script>	

<script>

function getDataOfCompany() 
  {
  var name=document.getElementById("company").value;
	//window.alert(name);
	if(name=="Please Select Company")
	{
		window.alert("Select Company ");
	}else{
		
	$.ajax({                      
		//window.alert("in else case ajax");	
      url: 'company_support_file_modify.php',                  //the script to call to get data          
      data: "name="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      { 	
      //$('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname);//Set output element html
	//  window.alert(data);
		document.getElementById('companyid').value = data[0];
	   document.getElementById('cr').value=data[1];
	   document.getElementById('balance').value=data[2];
	   document.getElementById('company').value=data[3];
	   document.getElementById('permenant_address').value=data[4];
	   document.getElementById('city').value=data[5];
	   document.getElementById('distric').value=data[6];
	   document.getElementById('state').value=data[7];
	   document.getElementById('pincode').value=data[8];
	   document.getElementById('phone1').value=data[9];
	   document.getElementById('phone2').value=data[10];
	   document.getElementById('fax1').value=data[11];
	   document.getElementById('fax2').value=data[12];
	   document.getElementById('email1').value=data[13];
	   document.getElementById('email2').value=data[14];
	   document.getElementById('web').value=data[17];
	   document.getElementById('name').value=data[16];
	  
	  } 
    });
 
}
  	
  }
  </script>
</body>

</html>
