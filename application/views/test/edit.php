


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>edit question</title>
    		    <link href="<?php echo $this->config->base_url("assets/multiselect-searchable/css/jquery-ui-1.7.1.custom.css");?>" media="screen" rel="stylesheet" type="text/css">
    
	  	  <link href="<?php echo $this->config->base_url("assets/bootstrap/css/bootstrap.min.css");?>" rel="stylesheet" media="screen">
    <link href="<?php echo $this->config->base_url("assets/multiselect-searchable/css/ui.multiselect.css");?>" media="screen" rel="stylesheet" type="text/css">
	    <link href="<?php echo $this->config->base_url("assets/multiselect-searchable/css/page.css");?>" media="screen" rel="stylesheet" type="text/css">
	
	
   	
    <script src="<?php echo $this->config->base_url("assets/bootstrap/js/bootstrap.js");?>"></script>
    <script src="<?php echo $this->config->base_url("assets/multiselect-searchable/js/jquery-1.3.2.min.js");?>" type="text/javascript"></script>
    <script src="<?php echo $this->config->base_url("assets/multiselect-searchable/js/jquery-ui-1.7.1.custom.min.js");?>" type="text/javascript"></script>
        <script src="<?php echo $this->config->base_url("assets/multiselect-searchable/js/ui.multiselect.js");?>" type="text/javascript"></script>
    
    

  
 <script type="text/javascript">
  $(function(){
    // Multiselect
    $(".multiselect").multiselect({sortable: true});
  });
  </script>
    
	
  </head>
  <body>
  
    
        <h1>Select Question for this test</h1>
        <p>
         
        </p>

          
  
   
          
            <select id="weapons" class="multiselect" multiple="multiple" name="weapons[]">
            
                <?php foreach ($question as $question_item): ?>

          <option selected value="<?php echo $question_item['qid']?>" > Question:  <?php echo  ($question_item['question']); ?> <?php echo $question_item['qid']?>
          
          
          </option> 
       <?php endforeach; ?> 
            </select>
      
  

   `
     
   
    
     
	
  </body>
</html>
