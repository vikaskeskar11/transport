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
					
					<div class="form-group">
									<div class="col-md-1">
									
										
						</div></div>
						<div class="col-lg-12" >
						<div class="form-group">
									<div class="col-md-1">
									<input  id="date"   name="chk" onchange="show3();" type="checkbox"  class="form-control">
								
									</div>
									<label class="col-md-1 control-label" for="name" align="center"> From Date</label>
									<div class="col-md-2">
									<input  id="frmdate" disabled="true" name="fromdate"  type="date"   class="form-control">
									<br>
									</div>
									
									<label class="col-md-1 control-label" for="name" align="center"> To Date</label>
									<div class="col-md-2">
									<input  id="todate" disabled="true" name="todate"  type="date"   class="form-control">
									<br><br>
									</div>
										
						</div></div>
						<div class="col-lg-12" >
						<div class="form-group">
									<div class="col-md-1">
									<input  id="party"   name="chk1" onchange="show2();" type="checkbox"  class="form-control">
								
									</div>
									<label class="col-md-1 control-label" for="name" align="center"> Paricular Party </label>
									<div class="col-md-4">
									<?php
									if($conn){
										$query = 'select DISTINCT iparty from invoice';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  disabled ="true "list="consigneelist" id="party1"  name="consigner"  type="text" placeholder="Consignee"  class="form-control">';
									echo '<datalist id = "consigneelist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										
										echo '<option>'.$row['iparty'].'</option>';
										
									}
										}
									}
									?>
									</div>
									
									
										
						</div></div>
							
						
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
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
						      
						        <th data-field="name" >Inv No.</th>
						        <th data-field="price" >Date</th>
						        <th data-field="id" data-align="right" >Party</th>
						        <th data-field="name" >Total</th>
						        <th data-field="price" >Charges</th>
						        <th data-field="price" >Taxes</th>
								  <th data-field="price" >Netamt</th>
								  
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
		</div>
				
			
					
					
					
					
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
	var party1=document.getElementById("party1").value;
	var a,b;
//alert(name);
	if(document.getElementById("date").checked==true && document.getElementById("party").checked==true )
	{
		alert(document.getElementById("party1").value);
	$.ajax({                                      
      url: 'billinginvsupport.php',                  //the script to call to get data          
      data: "frmdate="+frmdate+"&todate="+todate+"&party1="+party1,                       //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
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
								
								
								var d=data[a];
		 
		    
			 //alert(d.length);
		   cell1.innerHTML=d[1];
								
								cell2.innerHTML=d[2];
							cell3.innerHTML=d[3];
								cell4.innerHTML=d[4];
								cell5.innerHTML=d[5];
								cell6.innerHTML=d[10];
								cell7.innerHTML=d[11];
								
	  }}
 
    });	
	}
	
	else if(document.getElementById("date").checked==true && document.getElementById("party").checked==false){
		
	$.ajax({                                      
      url: 'billinginv2support2.php',                  //the script to call to get data          
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
								
								
								var d=data[a];
		 
		    
			 //alert(d.length);
		   cell1.innerHTML=d[1];
								
								cell2.innerHTML=d[2];
							cell3.innerHTML=d[3];
								cell4.innerHTML=d[4];
								cell5.innerHTML=d[5];
								cell6.innerHTML=d[10];
								cell7.innerHTML=d[11];
								
	  }
	  }
    });
}
else{
	alert(document.getElementById("party1").value);
	$.ajax({                                      
      url: 'billinginv3support1.php',                  //the script to call to get data          
      data: "party1="+party1,                       //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		  alert(data);
		  var table=document.getElementById("lrtable");
		  
		  var x = document.getElementById("lrtable").rows.length;
		  
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
								
								
								var d=data[a];
		 
		    
			 //alert(d.length);
		   cell1.innerHTML=d[1];
								
								cell2.innerHTML=d[2];
							cell3.innerHTML=d[3];
								cell4.innerHTML=d[4];
								cell5.innerHTML=d[5];
								cell6.innerHTML=d[10];
								cell7.innerHTML=d[11];
							
	  }}
 
    });
	
}


}

function show1()
{
	if(document.getElementById("range").checked==true)
	{
		document.getElementById("frm").disabled=false;
		document.getElementById("to").disabled=false;
		
		
	}
	else{
		
		document.getElementById("frm").disabled=true;
		document.getElementById("to").disabled=true;
		
		
	}
}
function show2()
{
	if(document.getElementById("party").checked==true)
	{
		document.getElementById("party1").disabled=false;
		
		
		
	}
	else{
		document.getElementById("party1").disabled=true;
		
		
	}
}
function show3()
{
	if(document.getElementById("date").checked==true)
	{
		document.getElementById("frmdate").disabled=false;
		document.getElementById("todate").disabled=false;
		
	}
	else{
		
		document.getElementById("frmdate").disabled=true;
		document.getElementById("todate").disabled=true;
		
		
		
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
