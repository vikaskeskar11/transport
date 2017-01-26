<?php include 'session_manager.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SHRINATH TRANSPORT</title>

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
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>SHRINATH </span>TRANSPORT</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Shrinath <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></use></svg>HomePage</a></li>
	<!-- 		<li><a href="widgets.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>
			<li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>
			<li><a href="tables.html"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tables</a></li>
			<li><a href="forms.html"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li>
			<li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
			<li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>
	-->		<li class="parent ">
				<a href="#sub-item-9" data-toggle="collapse">
					<span data-toggle="collapse" href="#sub-item-9"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg></span> Data 
				</a>
				<ul class="children collapse" id="sub-item-9">
					<li>
						<a class="" href="addcity.php">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg> Add City
						</a>
					</li>
				</ul>
				
			</li>
				<li class="parent ">
				<a href="#sub-item-1" data-toggle="collapse">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg></span> Person 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="addnewperson.php">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg> Add New Person
						</a>
					</li>
					<li>
						<a class="" href="modifyperson.php">
							<svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></use></svg> Modify Person Info.
						</a>
					</li>
					<li>
						<a class="" href="viewpersoninfo.php">
							<svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></use></svg> View Person Info.
						</a>
					</li>
					
				</ul>
			</li>
			
			<li class="parent">
				<a href="#sub-item-2" data-toggle="collapse">
					<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg></span>Driver </a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="addnewdriver.php">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg> Add New Driver
						</a>
					</li>
					<li>
						<a class="" href="modifydriverinfo.php">
							<svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></use></svg> Modify Driver Info.
						</a>
					</li>
					<li>
						<a class="" href="viewdriverinfo.php">
							<svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></use></svg> View Driver Info.
						</a>
					</li>
					
				</ul>
			</li>
			
			
			<li class="parent">
				<a href="#sub-item-3" data-toggle="collapse">
					<span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></use></svg></span>Company </a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="addnewcompany.php">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg> Add New company
						</a>
					</li>
					<li>
						<a class="" href="modifycompanyinfo.php">
							<svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></use></svg> Modify Company Info.
						</a>
					</li>
					<li>
						<a class="" href="viewcompanyinfo.php">
							<svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></use></svg> View Company Info.
						</a>
					</li>
					
				</ul>
			</li>
			
			
			<li class="parent">
				<a href="#sub-item-4" data-toggle="collapse">
					<span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked key "><use xlink:href="#stroked-key"/></use></svg></span>Vehicle </a>
				<ul class="children collapse" id="sub-item-4">
					<li>
						<a class="" href="addnewvehical.php">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg> Add New Vehicle
						</a>
					</li>
					<li>
						<a class="" href="modifyvehicalinfo.php">
							<svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></use></svg> Modify Vehicle Info.
						</a>
					</li>
					<li>
						<a class="" href="viewvehicalinfo.php">
							<svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></use></svg> View Vehicle Info.
						</a>
					</li>
					
				</ul>
			</li>
			
			
			<li class="parent">
				<a href="#sub-item-5" data-toggle="collapse">
					<span data-toggle="collapse" href="#sub-item-5"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></use></svg></span>Lorry Receipt </a>
				<ul class="children collapse" id="sub-item-5">
					<li>
						<a class="" href="AddnewLoryReceipt.php">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg> Add New LR
						</a>
					</li>
					<li>
						<a class="" href="ModifyLoryReceipt.php">
							<svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></use></svg> Modify LR Info.
						</a>
					</li>
					<li>
						<a class="" href="ViewLoryReceipt.php">
							<svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></use></svg> View LR Info.
						</a>
					</li>
					<li>
						<a class="" href="Billing&PaymentReport.php">
							<svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></use></svg> Report LR
						</a>
					</li>
					
					
				</ul>
			</li>
			
			
			<li class="parent">
				<a href="#sub-item-6" data-toggle="collapse">
					<span data-toggle="collapse" href="#sub-item-6"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></use></svg></span>Diesel Usages </a>
				<ul class="children collapse" id="sub-item-6">
					<li>
						<a class="" href="NewDiselUsages.php">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg> New Diesel Usages
						</a>
					</li>
					<li>
						<a class="" href="ModifyDiselUsages.php">
							<svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></use></svg> Modify Diesel Usages
						</a>
					</li>
					<li>
						<a class="" href="ViewDiselUsages.php">
							<svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></use></svg> View Disel Usages
						</a>
					</li>
					
				</ul>
			</li>
		
			<li class="parent">
				<a href="#sub-item-7" data-toggle="collapse">
					<span data-toggle="collapse" href="#sub-item-7"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></use></svg></span>Invoice </a>
				<ul class="children collapse" id="sub-item-7">
					<li>
						<a class="" href="NewInvoice.php">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg> New Invoice
						</a>
					</li>
					<li>
						<a class="" href="ModifyInvoice.php">
							<svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></use></svg> Modify Invoice
						</a>
					</li>
					<li>
						<a class="" href="ViewInvoice.php">
							<svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></use></svg> View Invoice
						</a>
					</li>
					<li>
						<a class="" href="invoice_billing_report.php">
							<svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></use></svg> Report Invoice
						</a>
					</li>
					
					
				</ul>
			</li>
			
			<!--
			<li class="parent">
				<a href="#sub-item-8" data-toggle="collapse">
					<span data-toggle="collapse" href="#sub-item-8"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg></span>Driver Calculation </a>
				<ul class="children collapse" id="sub-item-8">
					<li>
						<a class="" href="NewDriverCalculation.php">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg> New Driver Calc.
						</a>
					</li>
					
					<li>
						<a class="" href="ViewDriverCalculation.php">
							<svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></use></svg> View Driver Calc.
						</a>
					</li>
					
				</ul>
			</li>
			
			
					<li ><a href="HireRegisterEntry.php"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg>New Hire Registry Entry</a></li>
	
			-->
			
			<li role="presentation" class="divider"></li>
			<li><a href="logout.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Log Out</a></li>
		</ul>

	</div><!--/.sidebar-->
	</body></html>