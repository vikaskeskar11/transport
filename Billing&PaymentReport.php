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
       <form action="AddnewLoryReceipt.php" method="Post" name="myForm">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Ledger Report</h2>
			</div>
			
			
			<div class="col-lg-12" >
					
					<div class="col-lg-12" >
					
					<div class="form-group">
									
									<label class="col-md-1 control-label" for="name" align="center"> From </label>
									<div class="col-md-2">
									<input  id="frmdate"  name="fromdate"  type="date"   class="form-control">
									<br>
									</div>
									
									<label class="col-md-1 control-label" for="name" align="center"> To </label>
									<div class="col-md-2">
									<input  id="todate"  name="todate"  type="date"   class="form-control">
									<br><br>
									</div>
										
						</div>
						<div class="col-lg-12" >
						<div class="form-group">
									
									<label class="col-md-1 control-label" for="name" align="center"> Any </label>
									<div class="col-md-2">
									<input  id="any"  checked name="chk"  type="checkbox"  class="form-control">
								
									</div>
									
									<label class="col-md-1 control-label" for="name" align="center"> Billed </label>
									<div class="col-md-2">
									<input  id="bill"  name="chk" onchange="show2();" type="checkbox"  class="form-control">
									
									
									</div>
									
									<label class="col-md-1 control-label" for="name" align="center"> Unbilled </label>
									<div class="col-md-2">
									<input  id="unbill"  name="chk" onchange="show3();" type="checkbox"  class="form-control">
										</div>
						
									
														
									
							</div>		</div>
							</div>
						
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
					
					
						
						
						
						
						
							
				
								</div>
					</div>	
				<br>
					
				<div class="row" style="padding:20px;">
			
			<div class="form-group">
									
									
									
									
									<div class="form-group col-md-2">
								<button type="button" class="btn btn-primary" onclick="tablerow();"style="width:100px;">Show</button>
								<br>
								</div>	
									
										
						</div>
			
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
								  <th data-field="price" >Party</th>
								  <th data-field="id" data-align="right" >Status</th>
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
					
			
					
					
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
							
					<div class="form-group col-lg-12">
								
									<div class="col-md-3">
									<button  type="button" onclick="tableToExcel('lrtable', 'LR REPORT')" class="btn btn-primary">Export</button>
								  	</div>
																	  
									
									
									<div class="col-md-1">
									
									</div>
									
									
									<div class="col-md-1">
									
									</div>
									
									<div class="col-md-3">
									</div>
								  	
									
									<div class="col-md-1">
									
								  	</div>
								  	<div class="col-md-1">
									
								  	</div>
								  	<div class="col-md-1">
									
									<br><br><br>
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
	
	
	function shows()
{
	

	if(document.getElementById("chk").checked==true)
	{
		document.getElementById("lrto").disabled=false;
		
	}
	else{
		
		document.getElementById("lrto").disabled=true;
		
		
	}
}


function tablerow()
{
	
	var frmdate=document.getElementById("frmdate").value;
	var todate=document.getElementById("todate").value;
	var a,b;
//alert(name);
	if(frmdate=="")
	{
		window.alert("Enter LR NO First");
	}
	else if(document.getElementById("any").checked==true)
	{
		
	$.ajax({                                      
      url: 'billingsupport.php',                  //the script to call to get data          
      data: "frmdate="+frmdate+"&todate="+todate,                       //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		  alert(data);
		  var table=document.getElementById("lrtable");
		  
		  var x = document.getElementById("lrtable").rows.length;
		  alert(x);
		  var i;
		  if(x>1)
		  {
			  for(i=x;i>1;i--)
			  {
				  table.deleteRow(i-1);
			  }
		  }
		 
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
								var cell8=row.insertCell(7); 
								
								var d=data[a];
		 
		    
			 //alert(d.length);
		   cell1.innerHTML=d[1];
								
								cell2.innerHTML=d[2];
							cell3.innerHTML=d[3];
								cell4.innerHTML=d[24];
								cell5.innerHTML=d[32];
								cell6.innerHTML=d[33];
								cell7.innerHTML=d[9];
								cell8.innerHTML=d[20];
	  }}
 
    });	
	}
	
	else if(document.getElementById("unbill").checked==true){
		
	$.ajax({                                      
      url: 'billingsupport2.php',                  //the script to call to get data          
      data: "frmdate="+frmdate+"&todate="+todate,                       //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		  alert(data);
		  var table=document.getElementById("lrtable");
		  
		 
		  while(document.getElementById("lrtable").rows.length!=1)
		  {
			  
			 
			  table.deleteRow(document.getElementById("lrtable").rows.length-1);
			  alert(document.getElementById("lrtable").rows.length);
			  
		  }
		  
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
								var cell8=row.insertCell(7); 
								
								var d=data[a];
		 
		    
			 //alert(d.length);
		   cell1.innerHTML=d[1];
								
								cell2.innerHTML=d[2];
							cell3.innerHTML=d[3];
								cell4.innerHTML=d[24];
								cell5.innerHTML=d[32];
								cell6.innerHTML=d[33];
								cell7.innerHTML=d[9];
								cell8.innerHTML=d[20];
	  }
	  }
    });
}
else{
	
	$.ajax({                                      
      url: 'billingsupport1.php',                  //the script to call to get data          
      data: "frmdate="+frmdate+"&todate="+todate,                       //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		  alert(data);
		  var table=document.getElementById("lrtable");
		  
		  var x = document.getElementById("lrtable").rows.length;
		  alert(x);
		  var i;
		  if(x>1)
		  {
			  for(i=x;i>1;i--)
			  {
				  table.deleteRow(i-1);
			  }
		  }
		 
		  
		  
		  
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
								var cell8=row.insertCell(7); 
								
								var d=data[a];
		 
		    
			 //alert(d.length);
		   cell1.innerHTML=d[1];
								
								cell2.innerHTML=d[2];
							cell3.innerHTML=d[3];
								cell4.innerHTML=d[24];
								cell5.innerHTML=d[32];
								cell6.innerHTML=d[33];
								cell7.innerHTML=d[9];
								cell8.innerHTML=d[20];
	  }}
 
    });
	
}


}

function show2()
{
	if(document.getElementById("bill").checked==true)
	{
		document.getElementById("any").disabled=true;
		document.getElementById("unbill").disabled=true;
		document.getElementById("any").checked=false;
		
	}
	else{
		
		document.getElementById("any").disabled=false;
		document.getElementById("unbill").disabled=false;
		
		
	}
}

function show3()
{
	if(document.getElementById("unbill").checked==true)
	{
		document.getElementById("any").disabled=true;
		document.getElementById("bill").disabled=true;
		document.getElementById("any").checked=false;
		
	}
	else{
		
		document.getElementById("any").disabled=false;
		
		document.getElementById("bill").disabled=false;
		
		
	}
}

var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
	</script>	
</body>

</html>
