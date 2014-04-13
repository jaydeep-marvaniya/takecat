<script type="text/javascript">
	// Popup window code
	function newPopup(url) {
		popupWindow = window.open(
			url,'popUpWindow','height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
	}
	</script>
	

<div class="row span10 offset1">
<table class="table table-bordered">
          <tr>
            <th>Test Name</th>
          	<th>Access Level</th>
          	
            <th>Action</th>
 

          </tr>
  
   <?php foreach ($test as $test_item): ?>
	<tr>

		<td> <h3> <?php echo $test_item['testname'] ?> </h3> </td>
		<td> <h3> <?php echo $test_item['accessLevel'] ?> </h3> </td>
		
	  <td><a href="JavaScript:newPopup('<?php echo $this->config->base_url('account/taketestfinal'); ?>/<?php echo $test_item['testid']; ?>')" ><button class="btn btn-success" type="button">TAKE TEST</button></a></td>

          </tr>
          
          	<?php endforeach ?>
        </table>
       </div>
       
       