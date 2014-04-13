<div class="span10 offset1">
<table class="table table-bordered ">
          <tr>
            <th>Test Name</th>
          	<th>Access Level</th>
          	
            <th>Action</th>
    

          </tr>
  
   <?php foreach ($public_test as $test_item): ?>
	<tr>

		<td> <h3> <?php echo $test_item['testname'] ?> </h3> </td>
		<td> <h3> <?php echo $test_item['accessLevel'] ?> </h3> </td>
		
	  <td><a href="<?php echo $this->config->base_url('account/taketestfinal'); ?>/<?php echo $test_item['testid']; ?>" ><button class="btn btn-success" type="button">TAKE TEST</button></a></td>

          </tr>
          
          	<?php endforeach ?>
        </table>
    </div>