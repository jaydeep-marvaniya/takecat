<div class="span10 offset1">
<table class="table table-bordered ">
          <tr>
            <th>Test Name</th>
          	<th>Access Level</th>
          	<th>Score</th>
          </tr>
  
   <?php foreach ($test_lists as $test_item): ?>
	<tr>

		<td> <h3> <?php echo $test_item['testname'] ?> </h3> </td>
		<td> <h3> <?php echo $test_item['accessLevel'] ?> </h3> </td>
		<td> <h3> <?php echo $test_item['qscore'] ?> </h3> </td>
				
     </tr>
          
          	<?php endforeach ?>
        </table>
    </div>