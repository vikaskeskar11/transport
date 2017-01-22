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
	<?php include 'config.php';?>
	<?php

if($_POST)
{
	extract($_POST);
print_r($_POST);

	$query = "update invoice set idate='$invdate',iparty='$party1',iinvtotal='$invtot',icharges='$charge',itotalwithcharges='$itotal',
	itotalwithservtax='$tax',ieducess='$etax',ihsccess='$htax',igrandtotal='$ttax',inetamt='$netamt',iremark='$rmk' where ino='$lrno'";
 $result=mysqli_query($conn, $query) or die (mysqli_error($conn));

 if(mysqli_affected_rows($conn))
	{
	 $message="Updated  Successfully";
	 echo "<script type='text/javascript'>alert('$message');</script>";
//echo "<script type='text/javascript'>history.back();</script>";
	}
	else
	{
$message1="NOT Upadated Successfully";
	 echo "<script type='text/javascript'>alert('$message1');</script>";
//echo "<script type='text/javascript'>history.back();</script>";

	}
	
}
?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		<form action="ModifyInvoice.php" method="POST" name="myForm">
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Modify Invoice</h2>
			</div>
			
			
			<div class="col-lg-12" >
					
					<div class="col-lg-12" >
					
					<div class="form-group">
									<label class="col-md-2 control-label" for="name"> Invoice No. </label>
									<div class="col-md-3">
									<input  id="ino"  name="lrid"  type="number" placeholder="Enter invoice number"  class="form-control">
									</div>
									<div class="form-group col-md-2">
								<button type="button" onClick="getDataOfInvoice();"class="btn btn-primary">Modify</button>
								
								<br>
								</div>	
					</div>
						
						
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
					
					
						<div class="form-group">
									<label class="col-md-1 control-label" for="name"> ID. </label>
									<div class="col-md-3">
									<input  id="iid"  name="lrid1"  type="number"  class="form-control">
									</div>
									
									<label class="col-md-2 control-label" for="name">Invoice NO. </label>
									<div class="col-md-3">
									<input  id="iino"  name="lrno"  type="number"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name" align="center"> DATE </label>
									<div class="col-md-2">
									<input required id="invdate"  name="invdate"  type="date"   class="form-control">
									<br>
									</div>
										
						</div>
						
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">First LR </label>
									<div class="col-md-3">
									<input  id="lrno"  name="lrid"  type="text" placeholder="LR No"  class="form-control">
									</div>
									
										<div class="form-group col-md-1">
									<button  id="okbtn" type="button" onClick="getDataOfPerson();" class="btn btn-primary">OK</button>
									
									</div>
								
									
									<label class="col-md-1 control-label" for="name" align="center">Party</label>
									
									<div class="col-md-6">
									
										<input readonly list="consigneelist" id="party1"  name="party1"  type="text" placeholder="Consignee"  class="form-control">
									<datalist id = "consigneelist">
										<option id="party" placeholder=" "name="Consigner"></option>
										
										</datalist>
										
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
					
						<table border="1px"  id="lrtable"   class="table table-condensed table table-bordered table-hover table table-striped"  data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						<thead>
						    <tr>
						        <th data-field="id"data-align="right" >LR No</th>
						        <th data-field="name" >Date</th>
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
									<input  disabled id="lrid"  name="lrid"  type="number" placeholder="LR Number"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Weight </label>
									<div class="col-md-3">
									<input  disabled  id="wt" readonly  name="lrid"  type="number" placeholder="0"  class="form-control">
									</div>
									
										
						</div>
			
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Billing</h4>
					</div>
			
					<div class="form-group">
									<label class="col-md-1 control-label" for="name">Calc Wt. </label>
									<div class="col-md-2">
									<input disabled  id="cwt"  name="ad"  type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Rate </label>
									<div class="col-md-2">
									<input  id="rate"  name="ad"  type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">% </label>
									<div class="col-md-2">
									<input  id="perc"  name="ad"  type="number" value="100"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Sub Tot.</label>
									<div class="col-md-2">
									<input id="stotal" onfocus="getsubcharge();" name="ad" readonly  type="number" placeholder="0"  class="form-control">
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
									<input id="stat"  name="ad"  type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Tail Open</label>
									<div class="col-md-2">
									<input id="tail"  name="ad"  type="number" value="0"  class="form-control">
									</div>
										
						</div>
						
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Detention </label>
									<div class="col-md-2">
									<input id="det"  name="ad"  type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Delivery </label>
									<div class="col-md-2">
									<input id="del"  name="ad"  type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Other </label>
									<div class="col-md-2">
									<input id="other"  name="ad"  type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Total Chrg.</label>
									<div class="col-md-2">
									<input  id="tcharge"  onfocus="gettotalcharge();" readonly name="ad"  type="number" value="0"  class="form-control">
									</div>
										
						</div>			
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
							
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">LR Total </label>
									<div class="col-md-3">
									<input readonly id="lrtot" onfocus="lrtotal();"  name="ad"  type="number" readonly value="0" class="form-control">
									</div>
									
									<div class="form-group col-md-1">
								<button style="visibility:hidden" id="addbtn" type="button" onClick="myfunction();"class="btn btn-primary">Add</button>
								<br>
								</div>	
								
								<div class="form-group col-md-1">
								<button type="button" onClick="deleterow1();" class="btn btn-primary">Remove</button>
								
								</div>	
								<div class="form-group col-md-2">
								<button type="button" onClick="showlrdeatils();" class="btn btn-primary">Modify</button>
								
								</div>	
					</div>
					
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
							
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Inv Total </label>
									<div class="col-md-2">
									<input  id="invtot" onfocus="invtotal();" readonly name="invtot"  type="number" value="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Charges </label>
									<div class="col-md-2">
									<input id="charges" readonly  name="charge"  type="number" value="0" class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Total </label>
									<div class="col-md-2">
									<input readonly id="itotal" readonly  name="itotal"  type="number"  value="0"   class="form-control">
									</div>
									
									<div class="col-md-1">
									<input  id="choice" name="check1"  type="checkbox" onchange="shows();"  class="form-control">
									</div>
									<label class="col-md-1 control-label" for="name">Taxable</label>
									<div class="col-md-1">
									<input readonly="true" id="tax"  name="ad"  type="number" value="0"  class="form-control">
									</div>
										
						</div>
						
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Service Tax </label>
									<div class="col-md-2">
									<input  id="stax"  readonly="true" name="tax"  type="number" value="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Edu. Cess</label>
									<div class="col-md-2">
									<input  id="etax"  readonly="true" name="etax"  type="number"   value="0" class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Hsc Cess </label>
									<div class="col-md-2">
									<input  id="htax" readonly="true" name="htax"  type="number"   value="0" class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Total Srv Tax</label>
									<div class="col-md-2">
									<input  id="ttax"  onfocus="totaltax();" readonly name="ttax"  type="number"   value="0" class="form-control">
									</div>
										
						</div>			
					
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
							
					<div class="form-group col-lg-12">
									<label class="col-md-2 control-label" for="name">Net Amount </label>
									<div class="col-md-3">
									<input  id="netamt" onfocus="nettotal();" readonly name="netamt" readonly type="number"   value="0" class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Remark </label>
									<div class="col-md-6">
									<input  id="rmk"   name="rmk"  type="text" placeholder="Remark"  value="0" class="form-control">
									<br><br>
									</div>
									
									
										
						</div>
					
					<div class="form-group" align="center">
					<br><br>
								<button type="submit" class="btn btn-primary" style="width:100px;">Update</button>
								
								
								<button type="button" onClick="openInNewTab('PRINTVIEW.php');" class="btn btn-primary" style="width:100px;">Print</button>
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
	
	
	function openInNewTab(url)
	{
		var x=document.getElementById("lrno").value;
		
		var ino={
			inno:x
		};
		ino=JSON.stringify(ino);
		ino=btoa(ino);
		localStorage.setItem('_ino',ino);
		var win=window.open(url,'_blank');
		win.focus();
		
	}
	
function getDataOfInvoice() 
  {	

  var name=document.getElementById("ino").value;
  alert(name);
 var k=lrcheck();
 if(k==true)
 {
	 alert("ALREADY PRESENT");

 }
 else{
alert(name);
	if(name=="")
	{
		window.alert("Enter Invoice Number First NO First");
	}else{
	$.ajax({                                      
      url: 'Invoicemodify_support.php',                  //the script to call to get data          
      data: "ino="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		  
       
      //$('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname);//Set output element html	   window.alert(data);
	  document.getElementById('iid').value=data[0];
	  
	   document.getElementById('iino').value=data[1];
	   document.getElementById('invdate').value=data[2];
	   document.getElementById('party').value=data[3];
	   document.getElementById('invtot').value=data[4];
	   document.getElementById('charges').value=data[5];
	   document.getElementById('itotal').value=data[6];
	   document.getElementById('stax').value=data[7];
	   document.getElementById('etax').value=data[8];
	   document.getElementById('htax').value=data[9];
	   document.getElementById('ttax').value=data[10];
	   document.getElementById('netamt').value=data[11];
	    document.getElementById('rmk').value=data[12];
	   

	  } 
    });
 

 
}
createtable();

  	
 } 
 }
  
  
  function shows()
{
	

	if(document.getElementById("choice").checked==true)
	{
		document.getElementById("tax").readonly=false;
		document.getElementById("stax").readonly=false;
		document.getElementById("etax").readonly=false;
		document.getElementById("htax").readonly=false;
		document.getElementById("ttax").readonly=false;
	}
	else{
		
		document.getElementById("tax").readonly=true;
		document.getElementById("stax").readonly=true;
		document.getElementById("etax").readonly=true;
		document.getElementById("htax").readonly=true;
		document.getElementById("ttax").readonly=true;
		
	}
}

function createtable()
{
	var name=document.getElementById("ino").value;
	var a,b;
	if(name=="")
	{
		window.alert("Enter Invoice Number First NO First");
	}else
	{
	$.ajax({                                      
      url: 'lrinvoice_support.php',                  //the script to call to get data          
      data: "ino="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		  
       
      //$('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname);//Set output element html
	  /* if(data.length==1)
	   {
		  var table=document.getElementById("lrtable");
	   
	   
		   var row=table.insertRow(-1);
		   var cell1=row.insertCell(0);
								var cell2=row.insertCell(1);
								var cell3=row.insertCell(2);
								var cell4=row.insertCell(3);
								var cell5=row.insertCell(4);
								var cell6=row.insertCell(5);
								var cell7=row.insertCell(6);  
								
								var d=data[1];
		 
		    
			 //alert(d.length);
		   cell1.innerHTML=d[1];
								
								cell2.innerHTML=d[2];
							cell3.innerHTML=d[3];
								cell4.innerHTML=d[24];
								cell5.innerHTML=d[32];
								cell6.innerHTML=d[33];
								cell7.innerHTML=d[9];
								
								
	   }*/
	   
	  
	   var table=document.getElementById("lrtable");
	   for(a=0;a<data.length;a++)
	   {
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
								
								var d=data[a];
		 
		    
			 //alert(d.length);
		   cell1.innerHTML=d[1];
								
								cell2.innerHTML=d[2];
							cell3.innerHTML=d[3];
								cell4.innerHTML=d[24];
								cell5.innerHTML=d[32];
								cell6.innerHTML=d[33];
								cell7.innerHTML=d[9];
								if(a==0)
								{
									document.getElementById("party1").value=d[8];
									document.getElementById("lrno").value=d[1];
								document.getElementById("lrid").value=d[1];
								document.getElementById("wt").value=d[12];
								document.getElementById("cwt").value=d[12];
								document.getElementById("rate").value=d[22];
								document.getElementById("perc").value=d[23];
								document.getElementById("stotal").value=d[24];
								document.getElementById("load").value=d[25];
								document.getElementById("unload").value=d[26];
								document.getElementById("stat").value=d[27];
								document.getElementById("tail").value=d[28];
								document.getElementById("det").value=d[29];
								document.getElementById("del").value=d[30];
								document.getElementById("other").value=d[31];
								document.getElementById("tcharge").value=d[32];
								document.getElementById("lrtot").value=d[33];
								}
	   }
	   
	  
	// alert(data.length);
	 
	  /*document.getElementById('iid').value=data[0];
	  
	   document.getElementById('iino').value=data[1];
	   document.getElementById('invdate').value=data[2];
	   document.getElementById('party').value=data[3];
	   document.getElementById('itotal').value=data[4];
	   document.getElementById('charges').value=data[5];
	   document.getElementById('total').value=data[6];
	   document.getElementById('stax').value=data[7];
	   document.getElementById('etax').value=data[8];
	   document.getElementById('htax').value=data[9];
	   document.getElementById('ttax').value=data[10];
	   document.getElementById('netamt').value=data[11];
	    document.getElementById('rmk').value=data[12];
	   
	  */
	   
	  }
	   
    });	
		}
	}

function getDataOfPerson() 
  {	
  //clearall1();
  
  var name=document.getElementById("lrno").value;
alert(name);
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
		  
      //$('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname);//Set output element html
	   if(data==null)
	   {
		   alert("Billed LR")
	   }
	   else{
	  
	document.getElementById('lrid').value=data[1];
	  
	alert(document.getElementById('party').value);
	  
	   if(document.getElementById('party').value==data[8] || document.getElementById('party').value==data[9])
	   {
		document.getElementById('wt').value=data[12];
	    document.getElementById('cwt').value=data[12];   
//		   myfunction();
	   }
	   else{
		   
		   alert('Parties Must be same!!!');
		   clearall1();
		   
	   }
	  
	
	   }
	  } 
    });
 
}
  	
  }

	
function tablevalues()
{
	
	var x=document.getElementById("lrtable").rows[1].cells;
	var name=x[0].innerHTML;
	$.ajax({
		url: 'vehicle_support_file.php',                  //the script to call to get data          
      data: "lrno="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
	  {
		  
		  document.getElementById('wt').value=data[12];
	    document.getElementById('cwt').value=data[12];   
	  }
	});
}	
	
	
	
function showlrdeatils()
{
	
	document.getElementById("addbtn").style.visibility="visible";
	var name1=document.getElementById("ino").value;
	var name=prompt("Enter row number to Modify");
	var table=document.getElementById('lrtable').getElementsByTagName('tr');
	var m1=document.getElementById('lrtable');	

								
	 if(name1=="" || name=="" )
	{
		alert("Enter LR Number First");
	}else{
		
		 var y1=document.getElementById("lrtable").rows[name].cells;
		 var b=y1[0].innerHTML;
		 //salert(name1);
			m1.deleteRow(name);
			
	/*$.ajax({                                      
      url: 'showlr_support.php',                  //the script to call to get data          
      data: "ino="+name1+"&lrno="+b,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		  
       
      //$('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname);//Set output element html
								window.alert(data);
								document.getElementById("party1").value=data[8];
									document.getElementById("lrno").value=data[1];
								document.getElementById("lrid").value=data[1];
								document.getElementById("wt").value=data[12];
								document.getElementById("cwt").value=data[12];
								document.getElementById("rate").value=data[22];
								document.getElementById("perc").value=data[23];
								document.getElementById("stotal").value=data[24];
								document.getElementById("load").value=data[25];
								document.getElementById("unload").value=data[26];
								document.getElementById("stat").value=data[27];
								document.getElementById("tail").value=data[28];
								document.getElementById("det").value=data[29];
								document.getElementById("del").value=data[30];
								document.getElementById("other").value=data[31];
								document.getElementById("tcharge").value=data[32];
								document.getElementById("lrtot").value=data[33];

	  } 
    });*/
 
}
}

function deleterow1()
									{
										
								
				var a=prompt("Enter row number to delete");
				
				var y=document.getElementById("lrtable").rows[a].cells;
				var lrno = y[0].innerHTML;
				alert(lrno);
				$.ajax({                                      
      url: 'modifyinv_support_file1.php',                  //the script to call to get data          
      data: "lrno="+lrno,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		alert("Deleted Successfully");
	
	  }  });
				var table=document.getElementById('lrtable').getElementsByTagName('tr');
				var m1=document.getElementById('lrtable');		
   if(a<table.length)
   {
	  
	  var y1=document.getElementById("lrtable").rows[a].cells;
	  var bb=y1[0].innerHTML;
			var x=y1[3].innerHTML;
								var y=y1[4].innerHTML;
								var n=y1[5].innerHTML;
								
								 
								 var m=document.getElementById("invtot").value;
								  var z=document.getElementById("charges").value;
								  //var s1=document.getElementById("itotal").value;
								   var s=document.getElementById("itotal").value;
								   var ff=document.getElementById("ttax").value;
								   var rr=document.getElementById("netamt").value;
								   //alert(ff+rr);
								   if(m>x)
								   {
									   document.getElementById("invtot").value=+m - +x;   
								   }
								   else{
									   document.getElementById("invtot").value=+x - +m;
								   }
								document.getElementById("charges").value=+z - +y;
								document.getElementById("itotal").value=+s - +n;
								
//document.getElementById("netamt").value=+rr - +n;								
clearall1();							   
m1.deleteRow(a);
/*var name1=document.getElementById("ino").value;
		 var y2=document.getElementById("lrtable").rows[1].cells;
		 var b=y2[0].innerHTML;
$.ajax({                                      
      url: 'showlr_support.php',                  //the script to call to get data          
      data: "ino="+name1+"&lrno="+b,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		  
       
      //$('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname);//Set output element html
								window.alert(data);
								document.getElementById("party1").value=data[8];
									document.getElementById("lrno").value=data[1];
								document.getElementById("lrid").value=data[1];
								document.getElementById("wt").value=data[12];
								document.getElementById("cwt").value=data[12];
								document.getElementById("rate").value=data[22];
								document.getElementById("perc").value=data[23];
								document.getElementById("stotal").value=data[24];
								document.getElementById("load").value=data[25];
								document.getElementById("unload").value=data[26];
								document.getElementById("stat").value=data[27];
								document.getElementById("tail").value=data[28];
								document.getElementById("det").value=data[29];
								document.getElementById("del").value=data[30];
								document.getElementById("other").value=data[31];
								document.getElementById("tcharge").value=data[32];
								document.getElementById("lrtot").value=data[33];

	  } 
    });
	*/
  
   }
   else
   {
	   alert ("Enter valid row number");
   }
}

function clearall1(){
	document.getElementById("party1").value=0;
									document.getElementById("lrno").value=0;
								document.getElementById("lrid").value=0;
								document.getElementById("wt").value=0;
								document.getElementById("cwt").value=0;
								document.getElementById("rate").value=0;
								document.getElementById("perc").value=0;
								document.getElementById("stotal").value=0;
								document.getElementById("load").value=0;
								document.getElementById("unload").value=0;
								document.getElementById("stat").value=0;
								document.getElementById("tail").value=0;
								document.getElementById("det").value=0;
								document.getElementById("del").value=0;
								document.getElementById("other").value=0;
								document.getElementById("tcharge").value=0;
								document.getElementById("lrtot").value=0;
	
	
	
	
}




function myfunction()
							{
								
	var name=document.getElementById("lrno").value;
	var ino=document.getElementById("iino").value;
	alert(ino);
	if(name=="")
	{
		window.alert("Invalid LR");
	}
	
	else{
	$.ajax({                                      
      url:'inovise_add_support.php',
	  data:"lrno="+name+"&ino="+ino,
      dataType:'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		  window.alert(data);
		var table1 = document.getElementById('lrtable').getElementsByTagName('tr');
		
									tablerow();
			}					
		  
	 } 
    );
	
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
								cell4.innerHTML=document.getElementById("stotal").value;
								cell5.innerHTML=document.getElementById("tcharge").value;
								cell6.innerHTML=document.getElementById("lrtot").value;
								cell7.innerHTML=data[8];
								
								
}
 
    });
}}
function tablecheck()
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
		alert(data[8]);
		//alert(data[3]);						
									var x = document.getElementById("lrtable").rows;
			
									var i=0,j=0;
									
									loop1:
									
									for(i=1;i<x.length;i++)
									{
										var y=document.getElementById("lrtable").rows[i].cells;
											
								y[0].innerHTML==data[1]
								
								y[1].innerHTML=data[2];
								y[2].innerHTML=data[3];
								y[3].innerHTML=document.getElementById("stotal").value;
								y[4].innerHTML=document.getElementById("tcharge").value;
								y[5].innerHTML=document.getElementById("lrtot").value;
								y[6].innerHTML=data[8];
								
								
								
											break loop1;
											
											
											
											
									
									
									
									}
									
									
	  }
    });							
	}	
	
	
	
	}
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
												return true;
											break loop1;
											
											}
								}
									return false;
}							
		
		
		function getsubcharge() 
  {
	 // var d;
var a=document.getElementById("wt").value;
var b=document.getElementById("rate").value;
var c=document.getElementById("perc").value;
d=(a*b*(c/100));
document.getElementById("stotal").value=d;


  }

  function gettotalcharge() 
  {
	 // var d;

var s=document.getElementById("load").value
var t=document.getElementById("unload").value;
var u=document.getElementById("stat").value;
var v=document.getElementById("tail").value;
var w=document.getElementById("det").value;
var x=document.getElementById("del").value;
var y=document.getElementById("other").value;
var z=+s + +t + +u + +v + +w + +x + +y;
 

document.getElementById("tcharge").value=z;

  }
function lrtotal() 
{

	var m=document.getElementById("stotal").value;
	var n=document.getElementById("tcharge").value;
	var o=+m + +n;
document.getElementById("lrtot").value=o;
}

function invtotal()
{
	var x = document.getElementById("lrtable").rows;
	var i=0,j=0,a=0;
									
								
									document.getElementById("invtot").value=0;
									document.getElementById("charges").value=0;
									document.getElementById("itotal").value=0;
									for(i=1;i<x.length;i++)
									{
										
										var y=document.getElementById("lrtable").rows[i].cells;
										var k=y[3].innerHTML;
									var m=y[4].innerHTML;
									var r=y[5].innerHTML;
                         var r1=document.getElementById("itotal").value;
										a=document.getElementById("invtot").value;
										j=document.getElementById("charges").value;
										document.getElementById("invtot").value=+a  + +k;
										document.getElementById("charges").value=+j  + +m;
										 document.getElementById("itotal").value=+r + +r1;
										
									}
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
