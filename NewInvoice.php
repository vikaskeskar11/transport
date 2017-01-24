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


</head>

<body>
	

	<?php include 'header.php';?>
<?php include 'config.php';?>
<?php

if($_POST)
{
	extract($_POST);

$query = "INSERT INTO invoice  VALUES ('$iid','$ino','$invdate','$party1','$invtot','$charges','$itotal','$stax','$etax','$htax','$ttax','$netamt','$rmk')";
 $result=mysqli_query($conn, $query) or die (mysqli_error($conn));

 
 $updatelr="UPDATE lorryreceipt set status=1 where ino='$ino'";
 
 $result1=mysqli_query($conn,$updatelr);
 if($result1){
	 
	 $message1="LR updated Successfully";
	 echo "<script type='text/javascript'>alert('$message1');</script>";
 }
 
 
 if($result)
	{
	 $message="Inserted Successfully";
	 echo "<script type='text/javascript'>alert('$message');</script>";
//echo "<script type='text/javascript'>history.back();</script>";
	}
	else
	{
$message1="NOT Inserted Successfully";
	 echo "<script type='text/javascript'>alert('$message1');</script>";
//echo "<script type='text/javascript'>history.back();</script>";

	}
	
}
?>



	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		<form action="NewInvoice.php" method="POST" name="myForm">
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">New Invoice</h2>
			</div>
			
			
			<div class="col-lg-12" >
					
					<div class="col-lg-12" >
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name"> ID. </label>
									<div class="col-md-3">
									
									<?php 
									$query="SELECT iid FROM invoice ORDER BY iid DESC LIMIT 1";
									$result=mysqli_query($conn, $query); 
									$lid;
									 $num_rows = mysqli_num_rows($result);
									
									while ($row = mysqli_fetch_assoc($result))
									{
										$lid=$row["iid"];
										
									}
									
									 
							?>
									<input  id="iid" readonly  name="iid"  type="number"  value="<?php echo $lid+1?>" class="form-control">
									</div>
									
									<label class="col-md-2 control-label" for="name">Invoice NO. </label>
									<div class="col-md-3">
									<input  required type="number" id="ino"  name="ino"  type="number"   class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name" align="center"> DATE </label>
									<div class="col-md-2">
									<input  required type="date"  id="invdate"  name="invdate"  type="date"   class="form-control">
									<br>
									</div>
										
						</div>
						
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">First LR </label>
									<div class="col-md-3">
									<input required type="number" id="lrno"  name="lrno"  type="text" " placeholder="First LR"  class="form-control">
									</div>
									<div class="form-group col-md-2">
									<button type="button" onClick="getDataOfPerson();" class="btn btn-primary">OK</button>
									
									</div>
									
									
									<label class="col-md-1 control-label" for="name" align="center">Party</label>
									
									<div class="col-md-4">
									<input  list="consigneelist" id="party1"  name="party1"  type="text" placeholder="Consignee"  class="form-control">
									<datalist id = "consigneelist">
										<option id="consigner" placeholder="Consigner "name="Consigner"></option>
										<option id="consignee" placeholder="Consignee " name="Consignee"></option>
										</datalist>
										
									</select><br>
									</div
										
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
					
						<table border="1px"  id="lrtable"   class="table table-condensed table table-bordered table-hover table table-striped"  data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						<thead>
						    <tr>
						       
						        <th data-field="name" >LR No.</th>
						        <th data-field="price" >Date</th>
						        <th data-field="id" data-align="right" >Vehicale</th>
						        <th data-field="name" >Billing</th>
						        <th data-field="price" >Charges</th>
						        <th data-field="price" >LR Total</th>
								<th data-field="price" >Consigner</th>
						    </tr>
						    </thead>
						    <tbody>
						    
							
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
									<input  id="wt" readonly  name="wt"  type="number" placeholder="Weight"  class="form-control">
									</div>
									
									
									
									
										
						</div>
			
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Billing</h4>
					</div>
			
					<div class="form-group">
									<label class="col-md-1 control-label" for="name">Calc Wt. </label>
									<div class="col-md-2">
									<input readonly required type="number" id="cwt"  name="ad"  type="number" placeholder="Weight"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Rate </label>
									<div class="col-md-2">
									<input  required type="number" id="rate"  name="ad"  type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">% </label>
									<div class="col-md-2">
									<input  required type="number" id="rate1"  name="ad"  type="number"  value="100"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Sub Tot.</label>
									<div class="col-md-2">
									<input readonly id="subtotal"   onfocus="getsubcharge();"  name="ad" type="number" placeholder="0"  class="form-control">
									</div>
										
						</div>
				
								
								
						<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Charges</h4>
					</div>
			
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Loading </label>
									<div class="col-md-2">
									<input  id="load"  name="ad"  type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">UnLoading </label>
									<div class="col-md-2">
									<input  id="unload"  name="ad"  type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Stat. </label>
									<div class="col-md-2">
									<input  id="stat"  name="ad"  type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Tail Open</label>
									<div class="col-md-2">
									<input  id="tail"  name="ad"  type="number" value="0"  class="form-control">
									</div>
										
						</div>
						
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Detention </label>
									<div class="col-md-2">
									<input  id="detention"  name="ad"  type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Delivery </label>
									<div class="col-md-2">
									<input  id="delivery"  name="ad"  type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Other </label>
									<div class="col-md-2">
									<input  id="other"  name="ad"  type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Total Chrg.</label>
									<div class="col-md-2">
									<input readonly id="totalcharge" required type="number" onfocus="gettotalcharge();"name="ad"  type="number"   class="form-control">
									</div>
										
						</div>			
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
							
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">LR Total </label>
									<div class="col-md-3">
									<input  readonly id="lrtot"  required type="number" onfocus="lrtotal();" name="ad"  type="number" class="form-control">
									</div>
									
									<div class="form-group col-md-1">
								<button  type="button" onClick="myfunction();"class="btn btn-primary">Add</button>
								<br>
								</div>	
								
								<div class="form-group col-md-2">
								<button type="button" onClick="deleterow1();"class="btn btn-primary">Remove</button>
								<br>
								</div>	
								
					</div>
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
							
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Inv Total </label>
									<div class="col-md-2">
									<input  id="invtot" required type="number" name="invtot" readonly type="number"  placeholder="0" class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Charges </label>
									<div class="col-md-2">
									<input  id="charges" required type="number" readonly name="charges"  type="number" placeholder="0" class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Total </label>
									<div class="col-md-2">
									<input  id="itotal" required type="number" readonly  name="itotal"  type="number" placeholder="0"  class="form-control">
									</div>
									
									<div class="col-md-1">
									<!--<input  id="choice" name="choice"  type="checkbox"  onchange="shows();" class="form-control">-->
									</div>
									<label class="col-md-1 control-label" for="name">Taxable</label>
									<div class="col-md-1">
									<input  id="tax"    name="tax"  value="0" type="number" value="0"  class="form-control">
									</div>
										
						</div>
						
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Service Tax </label>
									<div class="col-md-2">
									<input  id="stax"    name="stax"  value="0" type="number"   class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Edu. Cess</label>
									<div class="col-md-2">
									<input  id="etax"    value="0" name="etax"  type="number"   class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Hsc Cess </label>
									<div class="col-md-2">
									<input  id="htax"    value="0" name="htax"  type="number"   class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Total Srv Tax</label>
									<div class="col-md-2">
									<input  id="ttax" readonly  value="0" name="ttax"  type="number" onfocus="totaltax();"  class="form-control">
									</div>
										
						</div>			
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
							
					<div class="form-group col-lg-12">
									<label class="col-md-2 control-label" for="name">Net Amount </label>
									<div class="col-md-3">
									<input  id="netamt" readonly name="netamt" required type="number"  onfocus="nettotal();" placeholder="0" class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Remark </label>
									<div class="col-md-6">
									<input  id="rmk"   name="rmk"  type="text" placeholder="Remark"  class="form-control">
									<br><br>
									</div>
									
									
										
						</div>
							
					<div class="form-group" align="center">
					<br><br>
								<button type="submit" class="btn btn-primary" style="width:100px;">Add</button>
								
								
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

	var f;
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


			 


function clearall1(){
										
	   document.getElementById("lrno").value="";
	document.getElementById("rate").value="";
	document.getElementById("rate1").value="";
	document.getElementById("subtotal").value="";
	document.getElementById("load").value="";
	document.getElementById("unload").value="";
	document.getElementById("stat").value="";
	document.getElementById("tail").value="";
	document.getElementById("detention").value="";
	document.getElementById("delivery").value="";
	document.getElementById("other").value="";
	document.getElementById("totalcharge").value="";
	document.getElementById("lrtot").value="";
	document.getElementById("ino").value="";
	
	
	
	
}


function insertlr()
{
	}




function getDataOfPerson() 
  {	
  //clearall1();
  
  var name=document.getElementById("lrno").value;
	if(name=="")
	{
		window.alert("Enter LR NO First");
	}else{
	$.ajax({                                      
      url: 'vehicle_support_file.php',                  //the script to call to get data          
      data: "lrno="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
	   if(data==null)
	   {
		   alert("Billed LR")
	   }
	   else{
	var table=document.getElementById("lrtable").rows;
	if(table.length==1)
	{
		document.getElementById('lrid').value=data[1];
	  
	document.getElementById('consigner').value=data[8];document.getElementById('consignee').value=data[9];	   
	   document.getElementById('wt').value=data[12];
	    document.getElementById('cwt').value=data[12];
		}else{
	var party=document.getElementById("party1").value;  

		if(party==data[9] || party==data[9])
{
	document.getElementById('lrid').value=data[1];
	document.getElementById('party1').value=data[8];
	//document.getElementById('lrid').value=data[1];
	   
	   document.getElementById('wt').value=data[12];
	    document.getElementById('cwt').value=data[12];
	  
	
}	
else{
			alert("Parties must be same");
			}   
	   }
	   }
	  } 
    });
 
}
  	
  }

  function getsubcharge() 
  {
	  var d;
	  var e;
	  var f;
var a=document.getElementById("cwt").value;
var b=document.getElementById("rate").value;
var c=document.getElementById("rate1").value;
d=a*b;
e=d*c;
f=e/100;
//alert(d);
document.getElementById("subtotal").value=f;


  }

  function gettotalcharge() 
  {
	 // var d;

var s=document.getElementById("load").value
var t=document.getElementById("unload").value;
var u=document.getElementById("stat").value;
var v=document.getElementById("tail").value;
var w=document.getElementById("detention").value;
var x=document.getElementById("delivery").value;
var y=document.getElementById("other").value;
var z=+s + +t + +u + +v + +w + +x + +y;
 

document.getElementById("totalcharge").value=z;

  }
function lrtotal() 
{

	var m=document.getElementById("subtotal").value;
	var n=document.getElementById("totalcharge").value;
	var o=+m + +n;
document.getElementById("lrtot").value=o;
}


function myfunction()
							{
								
	var name=document.getElementById("lrno").value;
	var rate=document.getElementById("rate").value;
	var rate1=document.getElementById("rate1").value;
	var subtotal=document.getElementById("subtotal").value;
	var load=document.getElementById("load").value;
	var unload=document.getElementById("unload").value;
	var stat=document.getElementById("stat").value;
	var tail=document.getElementById("tail").value;
	var detention=document.getElementById("detention").value;
	var delivery=document.getElementById("delivery").value;
	var other=document.getElementById("other").value;
	var totalcharge=document.getElementById("totalcharge").value;
	var lrtot=document.getElementById("lrtot").value;
	var ino=document.getElementById("ino").value;
	
	
	
	
	
//alert(name);
	if(name=="")
	{
		window.alert("Enter LR NO First");
	}
	
	else{
	$.ajax({                                      
      url: 'inovise_support_file.php',                  //the script to call to get data          
       data:"lrno="+name+"&rate="+rate+"&rate1="+rate1+"&subtotal="+subtotal+"&load="+load+"&unload="+unload+"&stat="+stat+"&tail="+tail+"&detention="+detention+"&delivery="+delivery+"&other="+other+"&totalcharge="+totalcharge+"&lrtot="+lrtot+"&ino="+ino,              
      dataType:'json',                //data format      
      success: function(data1)          //on recieve of reply
      {
		  window.alert("LR added to the Table");
		  if(data1==0)
		  {
			  alert("LR IS Billed");
			  
		  }
		 
			else{
				  var table1 = document.getElementById('lrtable').getElementsByTagName('tr');
		
								//var m=document.getElementById('lrtable');
								//alert(table1.length);
								
		if(table1.length==1)
								{
									tablerow();
								}							
								else{
												tablecheck();
											}
	
			}					
		  
	 } 
    });
	
}
}						

function deleterow1()
				{
			
								var a=prompt("Enter row number to delete");
										var table=document.getElementById('lrtable').getElementsByTagName('tr');
								var m1=document.getElementById('lrtable');		
   if(a<table.length)
   {
	  
	  var y1=document.getElementById("lrtable").rows[a].cells;
	  
			var x=y1[3].innerHTML;
								var y=y1[4].innerHTML;
								var n=y1[5].innerHTML;
								
								 
								 var m=document.getElementById("invtot").value;
								  var z=document.getElementById("charges").value;
								   var s=document.getElementById("itotal").value;
								document.getElementById("invtot").value=+m - +x;
								document.getElementById("charges").value=+z - +y;
								document.getElementById("itotal").value=+s - +n;		
m1.deleteRow(a);
	  alert("deleted successfully");	
clearall();	  
   }
   else
   {
	   alert ("Enter valid row number");
   }
}
										
	function tablecheck()
	{
		
		var a=lrcheck();
		//alert("VALUE OF A"+ a);
		if(a==false)
		{
			alert("invalid LR");
		}
		else{
		
		var name=document.getElementById("lrno").value;
//alert(name);
	if(name=="")
	{
		window.alert("Enter LR NO First");
	}else{
	$.ajax({                                      
      url: 'vehicle_support_file1.php',                  //the script to call to get data          
      data: "lrno="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		//alert(data[8]);
								
									var x = document.getElementById("lrtable").rows;
									
									var i=0,j=0;
									
									loop1:
									
									for(i=1;i<x.length;i++)
									{
										var y=document.getElementById("lrtable").rows[i].cells;
										
										
											
											
												if(y[6].innerHTML==data[8])
												{
												tablerow();
								
											break loop1;
											
											}
									}
									
									
	  }
    });							
	}	
	
	
	}
	}
	
	
	
		
	
function tablerow()
{
	var name=document.getElementById("lrno").value;
//alert(name);
	if(name=="")
	{
		window.alert("Enter LR NO First");
	}else{
	$.ajax({                                      
      url: 'vehicle_support_file1.php',                  //the script to call to get data          
      data: "lrno="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
	var table=document.getElementById("lrtable");
								var row=table.insertRow(-1);
								//var f=row.rowIndex;
								//alert(f);
								var cell1=row.insertCell(0);
								var cell2=row.insertCell(1);
								var cell3=row.insertCell(2);
								var cell4=row.insertCell(3);
								var cell5=row.insertCell(4);
								var cell6=row.insertCell(5);
								var cell7=row.insertCell(6);
								
								cell1.innerHTML=document.getElementById("lrno").value;
								
								cell2.innerHTML=data[2];
								cell3.innerHTML=data[3];
								cell4.innerHTML=document.getElementById("subtotal").value;
								cell5.innerHTML=document.getElementById("totalcharge").value;
								cell6.innerHTML=document.getElementById("lrtot").value;
								cell7.innerHTML=data[8];
								
								var x=document.getElementById("subtotal").value;
								var y=document.getElementById("totalcharge").value;
								var n=document.getElementById("lrtot").value;
								
								 
								 var m=document.getElementById("invtot").value;
								  var z=document.getElementById("charges").value;
								   var s=document.getElementById("itotal").value;
								document.getElementById("invtot").value=+m + +x;
								document.getElementById("charges").value=+z + +y;
								document.getElementById("itotal").value=+s + +n;
}
 
    });
}}

function lrcheck()
{
	var x = document.getElementById("lrtable").rows;
									
									var i=0,j=0;
									
									loop1:
									
									for(i=1;i<x.length;i++)
									{
										var y=document.getElementById("lrtable").rows[i].cells;
										
										
											
											
												if(y[0].innerHTML==document.getElementById("lrno").value)
												{
												return false;
								
											break loop1;
											
											}
							
									
									
									}
									return true;
}

function nettotal()
{
	var a=document.getElementById("itotal").value;
	var b=document.getElementById("ttax").value;
	document.getElementById("netamt").value=+a + +b;
}
function totaltax()
{
	var a=document.getElementById("tax").value;
	var b=document.getElementById("stax").value;
	var c=document.getElementById("etax").value;
	var d=document.getElementById("htax").value;
	document.getElementById("ttax").value=+a + +b + +c + +d;
}

	</script>	
</body>

</html>