<?php include 'session_manager.php';
	  include 'config.php';	
	function convert_number_to_words($number) {

   $no = round($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'One', '2' => 'Two',
    '3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
    '7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
    '10' => 'Ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'Thirteen', '14' => 'Fourteen',
    '15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
    '18' => 'Eighteen', '19' =>'Nineteen', '20' => 'Twenty',
    '30' => 'thirty', '40' => 'Forty', '50' => 'Fifty',
    '60' => 'Sixty', '70' => 'Seventy',
    '80' => 'Eighty', '90' => 'Ninety');
   $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
  return $result . "Rupees Only" ;//. $points . " Paise";
	}
?> 

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
<?php 
$invoice_no = $_GET['ino'];

 $result  =  mysqli_query($conn,"select lto,lfrom from lorryreceipt where ino='$invoice_no'");
		$firstRow = mysqli_fetch_row($result);
		$firstTo = $firstRow[0];
		$firstFrom = $firstRow[1];
	$getParty = mysqli_query($conn,"select iparty from invoice where ino='$invoice_no'");
	$partyNameArray = mysqli_fetch_row($getParty);
	$partyName = $partyNameArray[0];
	//mysqli_affected_rows()
	
?>
<body >

	

	<div class="col-lg-12" style="background-color:#ffffff;">			
			
					<div class="col-lg-12">
			<!--		<h4 class="page-header" style="color:#1F618D  ;"></h4>	-->
					</div>
				
		
		<div class="row" >
		
		
			<div class="col-lg-12" style="height:50px;">
				
			</div>
			
			
					<div class="col-lg-12" style="background-color:#ffffff;">
					
					<div class="col-lg-12" >
					
			
						
						
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
					
					
						<div class="col-lg-12" style="background-color:#ffffff;">
						<div class="form-group">
									<label class="col-md-1 control-label" for="name"></label>
									<div class="col-md-4">
									<?php echo "M/s. ".$partyName; ?>
									</div>
									
									<label class="col-md-1 control-label" for="name"> </label>
									<div class="col-md-2">
									<?php echo "From: ".$firstFrom; ?>
									</div>
									
									<label class="col-md-2 control-label" for="name" align="center">  </label>
									<div class="col-md-2">
										<?php echo "Bill NO: "; ?>
									<br>
									</div>
										
						</div>
						</div>
						
						<div class="col-lg-12">
					<br>
						<div class="form-group">
									<label class="col-md-1 control-label" for="name"> </label>
									<div class="col-md-4">
									</div>
									
									<label class="col-md-1 control-label" for="name"> </label>
									<div class="col-md-2">
									<?php echo "To: ".$firstTo; ?>
									</div>
									
									<label class="col-md-2 control-label" for="name" align="center"></label>
									<div class="col-md-2">
										<?php echo "Date: ".  Date('d/M/y'); ?>
									<br>
									</div>
										
						</div>
					
						</div>
							
				
								</div>
					</div>	
				<br>
					
				<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
				<div class="panel-body">
						<div class="table-responsive">
					<div class="col-lg-12">
						<table  id="table-style"   class="table table-condensed  table-bordered "  data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
			 			<thead>
						    <tr>
						        <th data-field="id" data-align="right" >L.R.No.</th>
						        <th data-field="name" >Date</th>
						        <th data-field="price" >Invoice No.</th>
						        <th data-field="id" data-align="right" >Truck No.</th>
						        <th data-field="name" >Particulars</th>
						        <th data-field="price" >Weight(M.T.)</th>
						        <th data-field="price" >Rate</th>
					           <th data-field="price" >Amount<br>Rs.&nbsp;&nbsp;&nbsp;&nbsp;Ps.</th>
						 
						    </tr>
						    </thead>
				
				
				
				<tbody>
				
<?php 
$invoice_no = $_GET['ino'];

 $result  =  mysqli_query($conn,"select lno,linvoice1,linvoice2,linvoice3,linvoice4,ldate,lveh_no,loading,unload,stat,tail,detention,ldesc,lweight,rate,lrtotal from lorryreceipt where ino='$invoice_no'");
 if(mysqli_num_rows($result)>0)
 { $grandTotal = 0;
	 while($row = mysqli_fetch_assoc($result))
		{		$invoices="";
				if($row['linvoice1']>0){ $invoices = $invoices."".$row['linvoice1'];}
				if($row['linvoice2']>0){ $invoices = $invoices.",".$row['linvoice2'];}
				if($row['linvoice3']>0){ $invoices = $invoices.",".$row['linvoice3'];}
				if($row['linvoice4']>0){ $invoices = $invoices."".$row['linvoice4'];}
				$otherDesc ="";
				if($row['loading']>0){$otherDesc =$otherDesc."Loading= ".$row['loading']."<br>";}
				if($row['unload']>0){$otherDesc = $otherDesc."Unloading= ".$row['unload']."<br>";}
				if($row['stat']>0){$otherDesc = $otherDesc."Stat= ".$row['stat']."<br>";}
				if($row['tail']>0){$otherDesc = $otherDesc."Tail= ".$row['tail']."<br>";}
				
			echo 			'<tr>
						    <td>LR NO:'.$row['lno'].'</td>
						    <td>'.$row['ldate'].'</td>
							<td>'.$invoices.'</td>
							<td>'.$row['lveh_no'].'</td>
						   <td>'.$row['ldesc'].'<br>'.$otherDesc.'</td>
						    <td>'.$row['lweight'].'</td>
						    <td>'.$row['rate'].'</td>
						    <td>'.$row['lrtotal'].'</td>
						    </tr>';
							$grandTotal+=$row['lrtotal'];
							$invoices= "";
							$otherDesc="";
		}
		
		
		
 }else
 {
	 echo "<script>alert('NO data found');</script>";
 }
?>

						     <tr  style="height:300px;background-color:#ffffff;"></tr>
						     <tr>
							<td></td>
						     <td></td>
						     <td></td>
						     <td></td>
						     <td></td>
						     <td>
							 </td>
						     
							<td><b>TOTAL RS.<b></td>
						    <td><b><?php echo $grandTotal?><b></td>
						    </tr>
						    </tbody>

						</table>
						
						</div>
					</div>	
			
					<div class="col-lg-12">
				<b>Amount in Words: <?php echo convert_number_to_words($grandTotal);?></b>
					</div>
					
					<!--
					</div>
				</div>
			</div>
			
		</div>
					
				
				<div class="col-lg-12" style="height:100px;">
					<h4 class="page-header" style="color:#1F618D  ;"></h4>
					</div>
						
					
										
		
			</div>	
			-->
			
		
				
									<div class="form-group" align="center">
					<br><br>
								
								<button type="button" onClick="window.print();" class="btn btn-primary" style="width:100px;">Print</button>
								<br><br>
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
	function loadData(){
	var ino=localStorage.getItem('_ino');
	if(!ino) {
		return false;
	}
	ino=atob(ino);
	ino=JSON.parse(ino);
	
	alert(ino);	
	}
	
	</script>	
</body>

</html>
