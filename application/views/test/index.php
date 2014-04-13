	<html>
	 <head>
		<link href="<?php echo $this->config->base_url("assets2/gstyle_buttons.css");?>" rel="stylesheet" type="text/css" media="screen" />
	 
		<link href="<?php echo $this->config->base_url("assets2/tablecloth/tablecloth.css");?>" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo $this->config->base_url("assets2/tablecloth/tablecloth.js");?>"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $this->config->base_url("assets/Highcharts-2.3.3/js/highcharts.js");?>"></script>
	  <link href="<?php echo $this->config->base_url("assets/bootstrap/css/bootstrap.min.css");?>" rel="stylesheet" media="screen">
	  	  <link href="<?php echo $this->config->base_url("assets/bootstrap/css/tablecloth.css");?>" rel="stylesheet" media="screen">


	  		<script src="http://code.jquery.com/jquery-latest.js"></script> 

		<script src="<?php echo $this->config->base_url("assets/bootstrap/js/bootstrap.js");?>"></script>
				<script src="<?php echo $this->config->base_url("assets/bootstrap/js/jquery.tablesorter.js");?>"></script>

		<script src="<?php echo $this->config->base_url("assets/bootstrap/js/jquery.metadata.js");?>"></script>
			<script src="<?php echo $this->config->base_url("assets/bootstrap/js/jquery.tablecloth.js");?>"></script>
			

	  
	<script type="text/javascript">
	// Popup window code
	function newPopup(url) {
		popupWindow = window.open(
			url,'popUpWindow','height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
	}
	</script>
	
	
	
	<style>
	.row {
	margin-top:30px;
	}
	
	 .table th {cursor: pointer;
	 background-image: url('<?php echo $this->config->base_url("assets/bootstrap/img/sort_neutral.png");?>');
	 background-repeat: no-repeat;
	background-position: center right;
	 }
	</style>

	<?php  

	$testname = array();
	$percentage=array();
	$avg = array();


	foreach ($results as $row)
	{
		$testname[]= $row['testname'];
	
	
		
	
		$percentage[]= ($row['PERCENTAGE']/10)*10;

	
		$avg[]= ($row['avg_percentage']/10)*10;

	}



	?>
		<script type="text/javascript" >
		var chart1; // globally available
		$(document).ready(function() {
		
		
    
    
    				
 
    
 
		
		
			  chart1 = new Highcharts.Chart({
				  credits: {
					  enabled: false
					},
				   
					 chart: {
					renderTo: 'container2',
					borderWidth:2,	           
					
					
					
					
				 },
				 title: {
					text: 'YOUR SCORE IN ALL TESTS'
				 },
				 xAxis: {
					categories:  <?php echo json_encode($testname); ?>
				 },
				 yAxis: {
					title: {
					   text: 'PERCENTAGE'
									},
			
			  
				 },
				 series: [{
					name: 'YOUR SCORE',
					data: <?php echo json_encode($percentage); ?>,
					type: 'column'
				 }, {
					name: 'TOTAL AVERAGE',
					data: <?php echo json_encode($avg); ?>,
					type: 'spline'
				 }]
			  });
			  
			   $("#myTable").tablesorter(); 
			   
			    $('#tabs').tab();
			
			  
		   });


		</script>
	 
	<title>
	</title>

	</head>


	<body>
	
	
	
	
	




	<div class= "container">
	
	<script>
	$('a.brand').on('click', function(e) {
    e.preventDefault();
    var url = $(this).attr('href');
    $(".modal-body").html('<iframe width="100%" height="100%" frameborder="0" scrolling="no" allowtransparency="true" src="'+url+'"></iframe>');
});?
	
	
	</script>
	
	<div class="navbar  navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="brand pull-left" style="padding:0;padding-left: 30px;" href=""><img src="<?php echo $this->config->base_url("assets/clientfiles/LOGO")."/".$user[0]['clientlogourl'];?>" alt="logo" style=" width: 470px;
height: 108px;" ></a>
         
          <div class="nav-collapse collapse">
            <ul class="nav pull-right" style="margin-top:30px;">
              <li class="active">
                <a href="<?php echo $this->config->base_url("test/index");?>">Home</a>
              </li>
              <li class="">
                <a href="<?php echo $this->config->base_url("test/change_password");?>">Change password</a>
              </li>
              <li class="">
                <a href="<?php echo $this->config->base_url("test/logout");?>">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

	
	
	
	
	
	<div class="row" style="margin-top:125px;">
	<div class="span12">

	<div id="container2" > </div>  
	</div>
<?php  echo var_dump( $this->session->userdata('logged_in'));?>
		
		
		
	<div class="span6">
	</div>
	
	
	</div>  

	<div class="row">
	<div class="taggable span12" align="center">
	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	<li class="active"><a  href="<?php echo $this->config->base_url("test/index/phy");?>" data-toggle="tab"  > PHYSICS </a> </li>
	<li> <a  href="#CHEMISTRY" data-toggle="tab" > CHEMISTRY </a> </li>
	<li> <a data-target="#MATHS" href="<?php echo $this->config->base_url("test/index/maths");?>" data-toggle="tab"   > MATHS </a> </li>
	<li> <a data-target="#BIOLOGY" href="<?php echo $this->config->base_url("test/index/bio");?>" data-toggle="tab"   > BIOLOGY </a> </li>

	</ul>

	</div>  
	</div>
	
	<?php 
	$che = array();
	foreach($test as $row)
			{
   			 if(($row['subject'])== 'che')
    				{//-- Keep this
        			$che[] = $row;
    				}
			} ?>
	  
	<div class="row">
	<div class="taggable span12">
	<div id="my-tab-content" class="tab-content" >
	    <div class="tab-pane active"  id="CHEMISTRY">
	 <table  id="myTable" class="tablesorter table table-striped table-hover" style="padding:5px;">
	 <thead>
	 <tr >
	 <th> <h2> TEST NAME </h2> </th>
	 <th> <h2> SUBJECT </h1> </th>
	 

	 
	 <th> <h2> TEST TYPE </th>
	 <th> <h2> TOPIC NAME </th>
	 <th> <h2> ACTION </th>
	 
	 </tr>
	 </thead>
	 <?php foreach ($che as $test_item): ?>
	<tr>

		<td> <h3> <?php echo $test_item['testname'] ?> </h3> </td>
		
		<td>    <?php echo $test_item['subject'] ?> </td>
		<td>    <?php echo $test_item['testtype'] ?> </td>
	<td>     <?php echo $test_item['topicname'] ?> </td>
	<td>    <?php  if($test_item['user']==null) : ?>
		<a href="JavaScript:newPopup('<?php echo $this->config->base_url("test/take_test");?>/<?php echo $test_item['testid'] ?>');"> <button class="btn btn-primary">Take this test</button> </a>
		
		
		
		
		
		<?php else:?>
		<a href="JavaScript:newPopup('<?php echo $this->config->base_url("test/get_result");?>/<?php echo $test_item['testid'] ?>/<?php echo $userid ?>');">  <button class="btn btn-success">Get result</button> </a>
		
		   <?php endif; ?> 
		</td>
	</tr>
	<?php endforeach ?>

	</table>
</div>

	</div>
	 </div>
	 </div>
	


	</div>
	</body>
	</html>