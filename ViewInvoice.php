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
		<form action="ModifyInvoice.php" method="POST" name="myForm">
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">View Invoice</h2>
			</div>
			
			
			<div class="col-lg-12" >
					
					<div class="col-lg-12" >
					
					<div class="form-group">
									<label class="col-md-2 control-label" for="name"> Invoice No. </label>
									<div class="col-md-3">
									<input  id="ino"  name="lrid"  type="number" placeholder="Enter invoice number"  class="form-control">
									</div>
									<div class="form-group col-md-2">
								<button type="button" onClick="getDataOfInvoice();"class="btn btn-primary">Get data</button>
								
								<br>
								</div>	
					</div>
						
						
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
					
					
						<div class="form-group">
									<label class="col-md-1 control-label" for="name"> ID. </label>
									<div class="col-md-3">
									<input  id="iid" readonly name="lrid1"  type="number"  class="form-control">
									</div>
									
									<label class="col-md-2 control-label" for="name">Invoice NO. </label>
									<div class="col-md-3">
									<input  id="iino" readonly  name="lrno"  type="number"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name" align="center"> DATE </label>
									<div class="col-md-2">
									<input  id="invdate" readonly name="invdate"  type="date"   class="form-control">
									<br>
									</div>
										
						</div>
						
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">First LR </label>
									<div class="col-md-3">
									<input  id="lrno"  name="lrid" readonly type="text" placeholder="LR No"  class="form-control">
									</div>
									
								
									
									<label class="col-md-1 control-label" for="name" align="center">Party</label>
									
									<div class="col-md-6">
									
										<input readonly id="party1"  name="party1"  type="text" placeholder="Consignee"  class="form-control">
									<br>
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
								  <th data-field="price" style="visibility:hidden" >Consigner</th>
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
									<input  readonly id="lrid"  name="lrid"  type="number" placeholder="LR Number"  class="form-control">
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
									<input  id="rate" readonly name="ad"  type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">% </label>
									<div class="col-md-2">
									<input  id="perc"  name="ad" readonly type="number" value="100"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Sub Tot.</label>
									<div class="col-md-2">
									<input id="stotal" readonly onfocus="getsubcharge();" name="ad" readonly  type="number" placeholder="0"  class="form-control">
									</div>
										
						</div>
				
								
								
						<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Charges</h4>
					</div>
			
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Loading </label>
									<div class="col-md-2">
									<input  id="load"  name="ad" readonly type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">UnLoading </label>
									<div class="col-md-2">
									<input  id="unload"  name="ad" readonly type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Stat. </label>
									<div class="col-md-2">
									<input id="stat"  name="ad" readonly type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Tail Open</label>
									<div class="col-md-2">
									<input id="tail"  name="ad" readonly type="number" value="0"  class="form-control">
									</div>
										
						</div>
						
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Detention </label>
									<div class="col-md-2">
									<input id="det"  name="ad" readonly type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Delivery </label>
									<div class="col-md-2">
									<input id="del"  name="ad" readonly type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Other </label>
									<div class="col-md-2">
									<input id="other"  name="ad" readonly type="number" placeholder="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Total Chrg.</label>
									<div class="col-md-2">
									<input  id="tcharge" readonly onfocus="gettotalcharge();" readonly name="ad"  type="number" value="0"  class="form-control">
									</div>
										
						</div>			
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
							
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">LR Total </label>
									<div class="col-md-3">
									<input readonly id="lrtot" onfocus="lrtotal();" readonly name="ad"  type="number" readonly value="0" class="form-control">
									</div>
									
									<div class="form-group col-md-1">
								<button style="visibility:hidden" id="addbtn" type="button" onClick="myfunction();"class="btn btn-primary">Add</button>
								<br>
								</div>	
								
					</div>
					
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
							
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Inv Total </label>
									<div class="col-md-2">
									<input id="invtot" readonly name="invtot"  type="number" value="0"  class="form-control">
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
									
									</div>
									<label class="col-md-1 control-label" for="name">Taxable</label>
									<div class="col-md-1">
									<input readonly id="tax"  name="ad"  type="number" value="0"  class="form-control">
									</div>
										
						</div>
						
					<div class="form-group col-lg-12">
									<label class="col-md-1 control-label" for="name">Service Tax </label>
									<div class="col-md-2">
									<input readonly id="stax"   name="tax"  type="number" value="0"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Edu. Cess</label>
									<div class="col-md-2">
									<input readonly id="etax"   name="etax"  type="number"   value="0" class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Hsc Cess </label>
									<div class="col-md-2">
									<input  id="htax" readonly name="htax"  type="number"   value="0" class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Total Srv Tax</label>
									<div class="col-md-2">
									<input  id="ttax" readonly onfocus="totaltax();" readonly name="ttax"  type="number"   value="0" class="form-control">
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
									<input  id="rmk" readonly  name="rmk"  type="text" placeholder="Remark"  value="0" class="form-control">
									<br><br>
									</div>
									
									<div class="form-group" align="center">
					<br><br>
									<button type="button" onClick="openInNewTab();" class="btn btn-primary" style="width:100px;">Print</button>
									<br><br>
								</div>
										
						</div>
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


	function openInNewTab()
	{
		var x=document.getElementById("ino").value;
		url = 'PRINTVIEW.php?ino='+x;
		var win=window.open(url,'_blank');
		win.focus();
		
	}
	
function getDataOfInvoice() 
  {	
createtable();
getData();
  	
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
								    cell7.style.visibility="hidden";
								var d=data[a];
		 
		    
			 //alert(d.length);
		   cell1.innerHTML=d[1];
								
								cell2.innerHTML=d[2];
							cell3.innerHTML=d[3];
								cell4.innerHTML=d[24];
								cell5.innerHTML=d[32];
								cell6.innerHTML=d[33];
//								cell7.innerHTML=d[9];
								cell7.style.visibility="hidden";						
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
	   
	  }
	   
    });	
		}
	}

function getData()
{
	 var name=document.getElementById("ino").value;
	if(name=="")
	{
		window.alert("Enter Invoice Number First NO First");
	}
	else{
		
	$.ajax({                                      
      url: 'Invoicemodify_support.php',                  //the script to call to get data          
      data: "ino="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		  if(data == null)
		  {
			  alert('Invoice is not present');
		  }else
		  {
			  
		  
      document.getElementById('iid').value=data[0];
	  
	   document.getElementById('iino').value=data[1];
	   document.getElementById('invdate').value=data[2];
	   //document.getElementById('party').value=data[3];
	   document.getElementById('invtot').value=data[4];
	   document.getElementById('charges').value=data[5];
	   document.getElementById('itotal').value=data[6];
	   document.getElementById('stax').value=data[7];
	   document.getElementById('etax').value=data[8];
	   document.getElementById('htax').value=data[9];
	   document.getElementById('ttax').value=data[10];
	   document.getElementById('netamt').value=data[11];
	    document.getElementById('rmk').value=data[12];
	/*   document.getElementById('').value=data[7];
	   document.getElementById('').value=data[8];
	   document.getElementById('').value=data[9];
	   document.getElementById('').value=data[10];
	   document.getElementById('').value=data[11];
	    document.getElementById('').value=data[12];
	   
		  */  }
	  } 
    });
 

 
}
	
}

	</script>	
</body>

</html>
