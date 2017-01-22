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
	
	<?php include 'config.php'?>
	<?php include 'header.php';?>
	<?php 

if(isset($_POST['form_submit'])) //check if there is data in the post method or no
	{
	$UpperCase = array_map("strtoupper", $_POST);
		extract($UpperCase);	
	//extract($_POST); //extract the date 
	if($conn)	//database connection			
	{//	print_r($_POST);
		$query ="UPDATE  company  SET  ctype ='$ctype', copeningbal ='$copeningbal', cname ='$cname', cadress ='$cadress', ccity ='$ccity', cdistrict ='$cdistric',cstate ='$cstate',  cpin ='$cpin', cphone1 ='$cphone1', cphone2 ='$cphone2', cfax1 ='$cfax1', cfax2 ='$cfax2', cemail1 ='$cemail1', cemail2 ='$cemail2', cwebsite ='$cwebsite', consignname ='$consingername' WHERE cname='$company'";
		$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
		
		
		if($result)
		{
			echo"<script type=\"text/javascript\">".
            "alert('Company Information Modify Successfully');".
            "</script>";
		}else
		{
			echo"<script type=\"text/javascript\">".
            "alert('Error in Modifying Company Information.Please Try again.');".
            "</script>";
		}
		
	}
	
	}
	
	?>
<form action="modifycompanyinfo.php" method = "post">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Modify Company Information</h2>
			</div>
			
			
			
			<div class="col-lg-12" style="padding:20px;">
		
				
				<div class="col-md-12">
				
								<div class="form-group">
									<label class="col-md-1 control-label" for="message">Company</label>
							<div class="col-md-9">
								<?php
									if($conn){
										$query = 'select cname from company';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="company_list" id="company"  name="company"  type="text" placeholder="Company Name"  class="form-control"  <!--onchange="getDataOfDriver();-->">';
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
																
							</div>
							
							<div class="form-group col-md-2">
								<button type="button" onClick="getDataOfCompany();" class="btn btn-primary">Get Data</button>
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
									<input required readonly type="number"  name="cid" id="cid" value="" class="form-control">
									<br><br>
									</div>	
								</div>
								
							</div>
							
							
							<div class="col-lg-12">
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Type</label>
									<div class="col-md-2">
									<input type="text" class="form-control"  id="ctype" name="ctype">
										
									</div>	
									
									
									
									
									<label class="col-md-2 control-label" for="message">Opening Balance</label>
								<div class="col-md-2">
									<select class="form-control" name="amt">
										<option>Rs</option>
									</select>
									<br><br>
									</div>		
								<div class="col-md-2">
									<input  type="number" placeholder="Balance Amt." name="copeningbal" id="copeningbal" class="form-control">
									</div>									
								</div>
								
							</div>
									
							
							
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Company Name</label>
									<div class="col-md-10">
									<input required type="text" placeholder="Enter Name" name="cname" id="cname" class="form-control">
									<br>
									</div>
									<label class="col-md-2 control-label" for="message">Contact Person</label>
									<div class="col-md-10">
									<input  type="text" placeholder="Enter Name" name="consingername" id="consigername" class="form-control">
									<br>
									</div>
									
									
								</div>
							
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Address</label>
									<div class="col-md-10">
										<textarea  class="form-control" id="cadress" name="cadress" placeholder="Permenant Address" rows="3"></textarea>
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
									echo '<input  type="text" list="citylist" placeholder="City" name="ccity" id="ccity" class="form-control">';
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
									<input type="number" placeholder="Pin Code" name="cpin" id="cpin" class="form-control">
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
									echo '<input list="statelist" placeholder="State" class="form-control" id="cstate" name="cstate">';
									echo '<datalist id = "statelist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option >'.$row['city_state'].'</option>';
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
<?php
									if($conn){
										$query = 'select DISTINCT pdistrict from persons';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  type="text" list="citylist" type="text" placeholder="District" name="cdistric" id="cdistric" class="form-control">';
									echo '<datalist id = "citylist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['pdistrict'].'</option>';
									}
							
									echo '</datalist>';
										}
										
									}
									?>
									
									<br>
									</div>	
								</div>
								
								<div class="col-md-12">
							
				
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Phone (1)</label>
									<div class="col-md-4">
									<input  type="number" placeholder="Phone 1" name="cphone1" id="cphone1" class="form-control">
									</div>	
								
									<label class="col-md-2 control-label" for="message">Phone (2)</label>
									<div class="col-md-4">
									<input   placeholder="Phone 2" name="cphone2" id="cphone2" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Fax (1)</label>
									<div class="col-md-4">
									<input   placeholder="Fax Number" name="cfax1" id="cfax1" class="form-control">
									<br><br>
									</div>	
								</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Fax (2)</label>
									<div class="col-md-4">
									<input   placeholder="Fax Number" name="cfax2" id="cfax2" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Email (1)</label>
									<div class="col-md-10">
									<input type="text" placeholder="Email Address" name="cemail1" id="cemail1" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Email (2)</label>
									<div class="col-md-10">
									<input  type="text" placeholder="Email Address" name="cemail2" id="cemail2" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Website</label>
									<div class="col-md-10">
									<input  type="text" placeholder="Website Address" name="cwebsite" id="cwebsite" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
								<button type="submit" name="form_submit" class="btn btn-primary" style="width:100px;">Ok</button>
								<br><br>
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
	  //window.alert(data[8]);
		document.getElementById('cid').value = data[0];
	   document.getElementById('ctype').value=data[1];
	   
	   document.getElementById('copeningbal').value=data[2];
	   document.getElementById('cname').value=data[3];
	   document.getElementById('cadress').value=data[4];
	   document.getElementById('ccity').value=data[5];
	   document.getElementById('cdistric').value=data[6];
	   document.getElementById('cstate').value=data[7];
	   document.getElementById('cpin').value=data[8];
	   document.getElementById('cphone1').value=data[9];
	   document.getElementById('cphone2').value=data[10];
	   document.getElementById('cfax1').value=data[11];
	   document.getElementById('cfax2').value=data[12];
	   document.getElementById('cemail1').value=data[13];
	   document.getElementById('cemail2').value=data[14];
	   document.getElementById('cwebsite').value=data[17];
	   document.getElementById('consigername').value=data[16];
	  
	  } 
    });
 
}
  	
  }
  </script>
	
	
</body>

</html>
