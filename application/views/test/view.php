 <html>
 <head>
 
 
 

 	

	
<title>
</title>
<script type="text/javascript" src="<?php echo $this->config->base_url("assets/jquery-1.8.3.min.js");?>"></script>


<script type="text/javascript">
            $(function(){
                        var allRadios = $('input[type=radio]')
                        var radioChecked;
                        
                        var setCurrent = 
                                        function(e) {
                                            var obj = e.target;
                             
                                            radioChecked = $(obj).attr('checked');
                                     }
                                                
                        var setCheck = 
                                    function(e) {
                                        
                                        if (e.type == 'keypress' && e.charCode != 32) {
                                            return false;
                                        }
                                        
                                        var obj = e.target;
                                        
                             if (radioChecked) {
                             $(obj).attr('checked', false);
                             } else {
                             $(obj).attr('checked', true);
                             }
                                 }    
                                                 
                        $.each(allRadios, function(i, val){        
                             var label = $('label[for=' + $(this).attr("id") + ']');
                             
                         $(this).bind('mousedown keydown', function(e){
                                setCurrent(e);
                            });
                            
                            label.bind('mousedown keydown', function(e){
                                e.target = $('#' + $(this).attr("for"));
                                setCurrent(e);
                            });
                         
                         $(this).bind('click', function(e){
                                setCheck(e);    
                            });
                         
                        });
            });
</script>

</head>


<body>


<form action= "<?php echo $this->config->base_url("test/set_result/$testid/$userid");?>" method="post"> 
 <?php foreach ($question as $question_item): ?>

    <h2><?php echo $question_item['question'] ?></h2>
    <div id="main">
        <?php echo $question_item['marks'] ?>
    </div>  
		<script type="text/javascript" >

		$('#<?php echo $question_item['qid']?>').click(function() {

		$('input[name="<?php echo $question_item['qid']?>"]').prop('checked', false);

			});

</script>  
A<input type="radio" class="radio" value=A name='<?php echo $question_item['qid']?>' />
B<input type="radio" class="radio" value=B name='<?php echo $question_item['qid']?>' />

<p>C<input type="radio" class="radio" value=C name='<?php echo $question_item['qid']?>' />
D<input type="radio" class="radio" value=D name='<?php echo $question_item['qid']?>' /></p>
<input type="button" name="reset" id="<?php echo $question_item['qid']?>" value="Reset" />

<?php endforeach ?>

<input type="submit"  value="SUBMIT TEST" /> 
</form>


</body>
</html>





