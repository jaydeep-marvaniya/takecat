<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title> TEST NAME</title>
		<link href="<?php echo $this->config->base_url("assets2/teststyle/teststyle.css");?>" type="text/css" media="screen" rel="stylesheet">
	  <link href="<?php echo $this->config->base_url("assets/bootstrap/css/bootstrap.min.css");?>" rel="stylesheet" media="screen">

<script type="text/javascript" src="<?php echo $this->config->base_url("assets/jquery-1.8.3.min.js");?>"></script>

<script src="http://code.jquery.com/jquery-latest.js"></script> 

		<script src="<?php echo $this->config->base_url("assets/bootstrap/js/bootstrap.js");?>"></script>
<style type="text/css">
.scrollspy-question {
height: 500px;
overflow: auto;
position: relative;
}
.main-body{
position: relative;
margin: 5px;
padding: 6px 6px 6px;
background-color: white;
border: 1px solid rgb(221, 221, 221);
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}

.navbar-inner{
background-image: -webkit-linear-gradient(top,  rgb(178, 203, 255), rgb(234, 244, 255));
background-image: -o-linear-gradient(top, rgb(132, 160, 218), rgb(206, 216, 236));
background-image: linear-gradient(to bottom,rgb(132, 160, 218), rgb(206, 216, 236));
}

.label {
font-size: 22.844px;
font-weight: bold;
line-height: 40px;
}

.label-info{
background-image: -webkit-linear-gradient(top,  rgb(51, 102, 204), rgb(51, 102, 204));
background-image: -o-linear-gradient(top,  rgb(51, 102, 204), rgb(51, 102, 204));
background-image: linear-gradient(to bottom, rgb(51, 102, 204), rgb(51, 102, 204));
}


</style>

<script>
		function openWindow(strUrl,strName,intHeight,intWidth){

			if(!strName){
				strName = "window";
			}
			if(!intHeight){
				intHeight = screen.height;   // returns width of browser viewport
			}
			if(!intWidth){
				intWidth  =  screen.width;
			}

	    	window.open (strUrl,strName,"scrollbars=1,width="+intWidth+",height="+intHeight);
		}
		</script>
		
		
		
		
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


<form id="TestForm" action= "<?php echo $this->config->base_url("test/set_result/$testid/$userid");?>" method="post"> 
<script type="text/javascript" src="<?php echo $this->config->base_url("assets/teststyle/qcubed.js");?>"></script>
<script type="text/javascript" src="<?php echo $this->config->base_url("assets/teststyle/logger.js");?>"></script>
<script type="text/javascript" src="<?php echo $this->config->base_url("assets/teststyle/event.js");?>"></script>
<script type="text/javascript" src="<?php echo $this->config->base_url("assets/teststyle/post.js");?>"></script>
<script type="text/javascript" src="<?php echo $this->config->base_url("assets/teststyle/control.js");?>"></script>

<div class="main-body">
	  

					
					
					
		<div id="navbarExample" class="navbar navbar-static">
            <div class="navbar-inner">
              <div class="container" style="width: auto;">
              
			 
			<h2 class="label label-info">Total Questions:<?php echo $test[0]['total_question']; ?>
		 		&nbsp;&nbsp;Total Marks: <?php echo $test[0]['MAX_MARKS']; ?>
				 &nbsp;&nbsp;&nbsp; Total&nbsp;Time: <?php echo $test[0]['test_max_time_min'] ?> minuts 
					&nbsp;&nbsp;&nbsp;<?php echo $test[0]['testcode'];?>	 </h2> 
					
					<div class="label label-important"> 
					TIME LEFT  <span class="label label-warning" id="spanTimeLeft"></span>
					</div> 
				
					
					
				
					  
					 
					<div class="label " style= "float:right;">
					<input type="submit"  id="btnSubmit" value="Submit" name="" class="btn btn-large btn-primary"/>
					</div>
					
					
				
				  
				
					
				
				

				
				
					
					
				
             
			  
					
	 
				
              
               		
					<ul class="unstyled" style="float:right; margin: 0 10px 10px 25px;" > 
					<li>
					<button class="btn btn-success disabled" type="button"> Attempted </button>
					 </li>
					 
					<li>
					 <button class="btn btn-danger disabled" type="button">Marked</button>
					 </li> </ul>
					
               		<?php 
					$coloumns=12;
					$Noofquestion=count($question);
					$rows= ceil($Noofquestion/$coloumns);
	
					for ($i=0,$a=0; $i <$rows ; $i++)
					{
					echo "<ul class=\"nav label label-info\">";
					for ($c=0; $c<$coloumns && $a<$Noofquestion ; $c++)
					{
		
					echo	"<li>";
					echo	"<a  style=\" padding: 6px 6px 6px\" href=\"#". $question[$a]['qid']." \"><button class=\"btn-large \" style=\"padding: 6px 12px\" type=\"button\" id=\"m-". $question[$a]['qid']."\">". $question[$a]['priority']."</button></a></li>";
					$a=$a+1;
					}
					echo "</ul>";
		
					} ?>
					
					
					
					

			  </div>
			</div>
		</div>
		
        
		<div data-spy="scroll" data-target="#navbarExample" data-offset="50" class="scrollspy-question">
			
			 <?php foreach ($question as $question_item): ?>
			 <div class="well" id="<?php echo $question_item['qid']; ?>">
			<h2  class="label label-inverse"> Question No: <?php echo  ($question_item['priority'])+1; ?> </h2>
            <p><?php echo $question_item['question'];?>
			</p>
			<p>Answer:
			</p>
			<p> A : <input type="radio" name='<?php echo $question_item['qid']?>' value="A" onchange="App.handleRadioChange(this)">
			</p>
			<p> B : <input type="radio" name='<?php echo $question_item['qid']?>' value="B" onchange="App.handleRadioChange(this)">
			</p>
			<p> C : <input type="radio" name='<?php echo $question_item['qid']?>' value="C" onchange="App.handleRadioChange(this)">
			</p>
			<p> D : <input type="radio" name='<?php echo $question_item['qid']?>' value="D" onchange="App.handleRadioChange(this)">
			</p>
			
			<script>
			$('input[name=<?php echo $question_item['qid']?>]:checked').change(function(){
			if($("#<?php echo $question_item['qid']?>").hasClass('leg_ans')) {
			$("#<?php echo $question_item['qid']?>").removeClass('leg_ans');
			} else {
         	 $("#<?php echo $question_item['qid']?>").addClass('leg_ans');
			 }
			 }); 
			</script>
	
			<p> Marks: <?php $question_item['marks'] ?>
			</p>
			<p> <input type="button" class="btn-danger" id="MFR-<?php echo $question_item['qid']?>" value="Mark for Review" name="" class="button">
			</p>
						
			<script type="text/javascript">
			$("#MFR-<?php echo $question_item['qid']?>").click(function () {
			$('#m-<?php echo $question_item['qid']?>').toggleClass('btn-danger');
			}); </script>
			</div>
			<?php endforeach; ?>
           
		</div>
		
	
		
		
		
		
		
		
		</form>

		

			</div>		
					
					
							
			
		


	<script>
	
	var App = {};
	App.init  = function(){


			
		this.intTimeSpent = 0;
	/*	var arrQuestions = [];
		for(var i=0;i<this.arrQuestions.length;i++){
            var objQuestion = this.arrQuestions[i];
            
            if(objQuestion.strQuestionTypeId == 3){ // 
                  var arrSubQuestions = objQuestion.arrSubQuestions;
                  for(var j=0;j<arrSubQuestions.length;j++){
                          var objSubQuestion = arrSubQuestions[j];
                          var objMyQuestion = {};
                          objMyQuestion.strStatus = "NotVisited"; 
                          objMyQuestion.intTicks = 0;
                          objMyQuestion.strParagraph = objQuestion.strQuestion;
                          objMyQuestion.strQuestion =   objSubQuestion.strQuestion;
                          objMyQuestion.arrOptions =   objSubQuestion.arrOptions;
                          objMyQuestion.strSectionId = objQuestion.strSectionId;
                          objMyQuestion.strId = objSubQuestion.strId;
                          objMyQuestion.strQuestionTypeId = 3;
                          objMyQuestion.arrAnswers = [];
                          arrQuestions.push(objMyQuestion);
                               
                  } 
            }else if(objQuestion.strQuestionTypeId == 4){
                        var objMyQuestion = {};
                        objMyQuestion.strStatus = "NotVisited"; 
                        objMyQuestion.intTicks = 0;
                        objMyQuestion.strQuestion = objQuestion.strQuestion;
                        
                        objMyQuestion.arrSubQuestions =   objQuestion.arrSubQuestions;
                        objMyQuestion.strSectionId = objQuestion.strSectionId;
                        objMyQuestion.strId = objQuestion.strId;
                        objMyQuestion.strQuestionTypeId = 4;
                        objMyQuestion.arrAnswers = [];
                        arrQuestions.push(objMyQuestion);
                             
                
            }else{
            	objQuestion.strStatus = "NotVisited";
                objQuestion.intTicks = 0;
                objQuestion.arrAnswers = [];
                arrQuestions.push(objQuestion);
                    
            } 

            
		 } 

			
		 for(var i=0;i<arrQuestions.length;i++){
			 var objQuestion =arrQuestions[i];
			 this.addToSection(objQuestion);
					 	
		 } */


	    // this.arrQuestions = arrQuestions;
		// this.strCurrentSectionId = this.arrSections[0].strId;


		// var arrHtml = [];
		/* code to handle caching */		 
		// for(var i=0;i<this.arrSections.length;i++){
			//var strSectionId = this.arrSections[0].strId; 
		    //var strHtml = App.getQuestionHtml(i);
		    //arrHtml.push(strHtml); 
		 //}  

		  	 

		// var strHtml = arrHtml.join("\r\n");
		// $("#divLoader").html(strHtml);
		 $(window).load(function () {
			  App.startTest();
		  });
 
		  
				 
		 
		
		}
  
	
	App.startTest = function(){
	
	   //$("#divLoaderImage").html("");
	   //$("#divMainContainer").show();

		//$("#btnSkip").click(this.handleSkipClick);
		//$("#btnSaveAndSkip").click(this.handleSaveAndSkipClick);
		//$("#btnMarkForReview").click(this.handleMarkForReviewClick);
		//$("#btnInstructions").click(this.handleInstructionsClick);
		$("#btnSubmit").click(App.submit);
		
		//this.renderSections();
		//this.showQuestion(0);
		this.objStartTime = new Date();
		this.intTimerId = window.setInterval("App.updateTimeLeft()",1000 * 60);
		this.intTimerId = window.setInterval("App.updateTimeLeft()",1000); // every second
		//this.intTickerId = window.setInterval("App.ticker()",1000);
		
	
		
	}

/*	App.addToSection = function(objQuestion){

		var strMySectionId = objQuestion.strSectionId;
		for(var i=0;i<this.arrSections.length;i++){
			var objSection  = this.arrSections[i];
			if(objSection.strId == strMySectionId){
				 if(!objSection.arrQuestions){
					  objSection.arrQuestions = [];
				 }
				 objSection.arrQuestions.push(objQuestion);
				 return;
			}
		}


	} */

/*	App.ticker= function(){

		var objQuestion = App.getQuestion(App.intCurrentQuestionNum);
		if(objQuestion){
			objQuestion.intTicks++;
		} 
	}	*/

	App.updateTimeLeft  = function(){ 
		var objTime = new Date();
		  
		var intTestDurationInMilliSeconds = <?php echo $test[0]['test_max_time_min'] ?> * 60 * 1000 ;
		
		var intDiffInMilliSeconds = objTime.getTime() - this.objStartTime.getTime();

		intDiffInMilliSeconds = (intTestDurationInMilliSeconds -  intDiffInMilliSeconds);
		var intDiffInSeconds = Math.round(intDiffInMilliSeconds/1000); 
		var intDiffMinutes = Math.floor(intDiffInSeconds/60);
		var intDiffSeconds =  Math.ceil(intDiffInSeconds%60);


		if(intDiffMinutes <=0  && intDiffSeconds <=0 ){
			
			   App.stopTest();
		} 
		var strTimeLeft = "  " + intDiffInMilliSeconds + " "  + intDiffInMilliSeconds/1000 + " " + Math.round(intDiffInMilliSeconds/1000);
		var strTimeLeft =  intDiffMinutes + "m " + intDiffSeconds + "s";
		
	   $("#spanTimeLeft").html(strTimeLeft);
	 
	    
		  
	};   

	App.stopTest = function(){

		 $("div[class='content-left3']").html("");
		 $("div[class='content-right3']").html("");
		 $("div[class='content3']").html("<h2>Your Test is Over</h2>");
		  
		  
		 window.clearInterval(this.intTimerId);
		 window.clearInterval(this.intTickerId);
		 //openWindow('s-test-analysis.php?testid=1')

		 window.onbeforeunload  = function(){};
		    document.forms["TestForm"].submit();
			 

	};

	
	/* App.renderQuestionTable=function(){
		var strHtml = App.getQuestionTableHtml();
		$("#divQuestionTable").html(strHtml);
		var strCurrentSectionName = App.getSectionNameById(App.strCurrentSectionId);
		$("#strongTitle").html(strCurrentSectionName);
		var intQuestionCount = App.getQuestionCountByStatus("Answered");
        $("#strongAttemptedQuestions").html(intQuestionCount);   
		
	} */


/*
	App.getQuestion=function(i){
           var arrQuestions = this.getCurrentSectionQuestions();
          var objQuestion = arrQuestions[i];
           if(!objQuestion){
               alert("Error !");   
          }
           return arrQuestions[i];
	}

	App.getQuestion2 = function(i,strSectionId){
		var arrQuestions = this.getQuestionsForSectionById(strSectionId);
		var objQuestion = arrQuestions[i];
		return objQuestion;
	}
	App.getQuestionHtml = function(i,strSectionId){

		if(strSectionId){
		   var objQuestion = this.getQuestion2(i,strSectionId);
		}else{
			var objQuestion = this.getQuestion(i);	
		}

       	var strTypeId = objQuestion.strQuestionTypeId;
       	var strHtml = ""; 
       	if(strTypeId == 1){
       		strHtml = App.getSingleChoiceQuestionHtml(i);
       			
       	}else if(strTypeId == 2){
       	    strHtml = App.getMultipleChoiceQuestionHtml(i);
       	}else if(strTypeId == 3){
	       	strHtml = App.getComprehensionQuestionHtml(i);	
       	}else if(strTypeId == 4){
       		strHtml = App.getMatrixQuestionHtml(i);
       	}
       	return strHtml;
		
	} */
	
	/* App.showQuestion=function(i){

		   
	  	    var objQuestion = this.getQuestion(i);
	       	var strTypeId = objQuestion.strQuestionTypeId;
	       	var strQuestion = "";
	       	var strQuestionType = "";
	       	var strHtml = "";
	       	
	       	if(strTypeId == 1){
	       		strHtml = App.getSingleChoiceQuestionHtml(i);	
	       	    strQuestionType = "Single Correct Answer Type";
	       			       	
	       	}else if(strTypeId == 2){
	           	strHtml = App.getMultipleChoiceQuestionHtml(i);
	       	    strQuestionType = "Multiple Correct Answer Type";
	       	}else if(strTypeId == 3){ 
		       	strHtml = App.getComprehensionQuestionHtml(i);
		       	strQuestionType = "Comprehension Type";	
	       	}else if(strTypeId == 4){
	       		strHtml = App.getMatrixQuestionHtml(i);
	       		strQuestionType = "Matrix Type";
	       	} 
	       	
	       	var strMarks = this.getMarksForQuestionTypeId(strTypeId);
	       	
	       	var arrHtml = [];
	       	arrHtml.push('<div class="content-title">' + strQuestionType +  '</div>');
	    	       	
	       	arrHtml.push('<div class="clear"></div>');
       	
	       	arrHtml.push("<table  cellspacing='5px' width='100%' ><tr><td valign='top' width='50%'><strong>Question No." + (i+1) + "</strong></td></tr></table>");

	       	arrHtml.push("<br><br>");
	       	// this table has 4 tds
	       	arrHtml.push("<table width='100%'>");
	       	arrHtml.push(strHtml);
	       	arrHtml.push("<tr><td colspan='4' align='right'>" + "  Marks: " +  strMarks   +" </td></tr>");
	       	arrHtml.push("</table>");
	       	arrHtml.push("<div id='divResetLink'></div>");
	       	strHtml = arrHtml.join("\r\n");
	       	$("#divQuestion").html(strHtml);

	       	if(objQuestion.arrAnswers && objQuestion.arrAnswers.length > 0){
	       		 this.renderResetLink(i);
	       	}
	       	
	       	this.intCurrentQuestionNum = i;
	       	this.renderQuestionTable();
	       	
	       	if(objQuestion.strStatus == "NotVisited"){
		       	objQuestion.strStatus = "Unanswered";
	       	}
		       	
	       	
	}
	
	*/


	
/*	App.getMarksForQuestionTypeId = function(strQuestionTypeId){
		for(var i=0;i<this.arrMarkingSchemeTable.length;i++){
			  var obj = this.arrMarkingSchemeTable[i];
			  if(obj.strQuestionTypeId == strQuestionTypeId){
				  return obj.strCorrectMarks;
			  }
		}
		return "na";
	}
 
 App.getSingleChoiceQuestionHtml=function(i){

	 var objQuestion = this.getQuestion(i);
	 var strQuestion  = objQuestion.strQuestion;
	 var arrHtml = [];
	 arrHtml.push("<tr>");  
	 arrHtml.push("<td colspan='4'>"+ strQuestion + " </td></tr>");

	 arrHtml.push("<td colspan='4'>&nbsp;</td></tr>");  
	 
	 arrHtml.push("<tr><td><strong>Options:</strong></td><td colspan='3'>&nbsp;</td></tr>");

	 var arrAnswers = objQuestion.arrAnswers;

	 var arrOptions = objQuestion.arrOptions;
	 var strQuestionId = objQuestion.strId;
	 for(var i=0;i<arrOptions.length;i++){
		 var intOptionNum = i+1;
		 
		 arrHtml.push('<tr>');
		 var objOption = arrOptions[i]; 
		 var strOption = objOption.strOption;
		 var strChecked = ""; 
		 if(arrAnswers){
			  var strAnswer = arrAnswers[0];
			  if(strAnswer == intOptionNum){
				  strChecked = "checked";
			  }
		 }
		 var strRadio = "<input type='radio' name='radio' "  +  strChecked  +    " value='" +   intOptionNum    +  "'  onchange='App.handleRadioChange(this)'/>"; 
		  arrHtml.push('<td width="1%">&nbsp;</td><td width="1%">' + intOptionNum +  '</td><td width="1%" >' +strRadio + "</td><td align='left'>   " +  strOption + "</td>");
		  arrHtml.push('	</tr>');
	 }                     
	 

	 var strHtml = arrHtml.join("\r\n");
	 
	 return strHtml;
		
	}

App.getMultipleChoiceQuestionHtml=function(i){
	 var objQuestion = this.getQuestion(i);

		 var strQuestion  = objQuestion.strQuestion;

		 var arrHtml = [];
		 arrHtml.push("<tr>");  
		 arrHtml.push("<td colspan='4'>"+ strQuestion + " </td></tr>");

		 arrHtml.push("<td colspan='4'>&nbsp;</td></tr>");  
		 
		 arrHtml.push("<tr><td><strong>Options:</strong></td><td colspan='3'>&nbsp;</td></tr>");
		 
		 var arrOptions = objQuestion.arrOptions;
		 for(var i=0;i<arrOptions.length;i++){
			 arrHtml.push('<tr>');
			 var objOption = arrOptions[i];
			 var strOption = objOption.strOption;
			 var strChecked = "";
			 if(objQuestion.arrAnswers){
				 var arrAnswers =objQuestion.arrAnswers;
				 for(var j=0;j<arrAnswers.length;j++){
					 var strAnswerNum = arrAnswers[j];
					 if(strAnswerNum == i){
						 strChecked = "checked";
						 break;
					 }
				 }
	        }
			 
			 var strRadio = "<input type='checkbox' name='checkbox' " +  strChecked         +    " value=";
			 strRadio +=    i   + "'  onchange='App.handleCheckboxChange(this,"+  i +  ")'/>"; 
			  arrHtml.push('<td width="5%">' +strRadio + "</td> <td>" +  strOption + "</td>");
			  arrHtml.push('	</tr>');
		 }                     
		 
		 
		 var strHtml = arrHtml.join("\r\n");
		 return strHtml;
			
		}
		

 App.getComprehensionQuestionHtml=function(i){
     var arrHtml = [];
     var objQuestion = this.getQuestion(i);
	 var strParagraph = objQuestion.strParagraph;
	 arrHtml.push("<tr><td colspan='4' align='center' >" + strParagraph + "</td></tr>");

	 
     var strHtml = this.getSingleChoiceQuestionHtml(i);
     
     arrHtml.push(strHtml);
     

     return arrHtml.join("\r\n"); 
     		
		
	}

 App.getMatrixQuestionHtml=function(i){
     var arrHtml = [];
     var objQuestion = this.getQuestion(i); 
	 var strQuestion = objQuestion.strQuestion;
	 
	 arrHtml.push("<tr> <td colspan='4'>" + strQuestion + "</td></tr>");
	 arrHtml.push("<tr> <td colspan='4'>&nbsp;</td></tr>");
     var arrSubQuestions = objQuestion.arrSubQuestions;


     */

 /*    
     var strStartRow  = "A"; 
     if( objQuestion.strRowStartChar){
    	 strStartRow = objQuestion.strRowStartChar 
     }
     var strStartColumn = "P";
     if( objQuestion.strColumnStartChar){
    	 strStartColumn = objQuestion.strColumnStartChar 
     }

     
   var intStartRow = strStartRow.charCodeAt(0);
   var intStartColumn = strStartColumn.charCodeAt(0);

     var arrRowChars = [];
     var arrColumnChars = [];

     for(var i=0;i<arrSubQuestions.length;i++){
         arrRowChars.push(String.fromCharCode(intStartRow));
    	 intStartRow++;
     }

     if(arrSubQuestions.length >0){
       var objSubQuestion1 = arrSubQuestions[0];
       var arrOptions = objSubQuestion1.arrOptions;
       for(var i=0;i<arrOptions.length;i++){
           arrColumnChars.push(String.fromCharCode(intStartColumn));
           intStartColumn++;
       }
     }


	 arrHtml.push("<tr><td colspan='4'>");
	 arrHtml.push("<table bordercolor='#BBBBBB' border='1' class='tbl_matrix' >");


	 var objFirstSubQuestion = arrSubQuestions[0];
	 var arrOptions = objFirstSubQuestion.arrOptions;

	 
	 arrHtml.push("<tr>");
	 arrHtml.push("<td>" + "  "   +  " </td>");
	 
	 for(var i=0; i<arrOptions.length;i++){
		 var objOption = arrOptions[i];
		 var strChar = objOption.strOption;
		 arrHtml.push("<td>" + strChar  +  " </td>");
     }
	 arrHtml.push("</tr>");
	 
	 for(var i=0; i<arrSubQuestions.length;i++){
		 arrHtml.push("<tr>");
		 var objSubQuestion = arrSubQuestions[i];
		 var strChar = objSubQuestion.strQuestion;
		 var arrOptions = objSubQuestion.arrOptions;
		 arrHtml.push("<td>" + strChar  +  " </td>");
         var intSubQuestionIndex = i;     
		 var strHtml = this.getRadioRows(objSubQuestion,intSubQuestionIndex);
		 arrHtml.push(strHtml);
 
		 arrHtml.push("</tr>");
	 }
	 

	 
     arrHtml.push("</table>");
     arrHtml.push("</td>");
     arrHtml.push("</tr>");
     
    return arrHtml.join("\r\n"); 
     		 
		
	} 
	App.getRadioRows = function(objSubQuestion,intSubQuestionIndex){
		var arrHtml = [];
		var arrOptions = objSubQuestion.arrOptions;
	    
		
		for(var i=0;i<arrOptions.length;i++){
			var objOption = arrOptions[i];
				
	        var strChecked = "";
	 	    if(objSubQuestion.arrAnswers){
	 		    var arrAnswers =objSubQuestion.arrAnswers;
	 		    for(var k=0;k<arrAnswers.length;k++){
	 			   var intAnswerNum = arrAnswers[k];
	 			   
	 			   if(intAnswerNum == (i+1)){
	 				 strChecked = "checked";
	 				 break;
	 			    }
	 			  }
	 	       }  
	 	      // alert(strChecked);
	        	arrHtml.push("<td>");  
	        	  
	        	var strRadio = "<input type='checkbox' name='checkbox_"+ intSubQuestionIndex   +"' "  +  strChecked  +    " value=" + (i+1)+ "  onchange='App.handleCheckboxChange(this)'/>";
	        	arrHtml.push(strRadio);
	            arrHtml.push("</td>");  	  
	              
	     }
		     return arrHtml.join("\r\n");
	}
	 
	App.getCheckboxRows = function(arrSubQuestions,arrRowChars){
		var arrHtml = [];
		for(var i=0;i<arrSubQuestions.length;i++){
	         var objSubQuestion = arrSubQuestions[i];
	          var arrOptions = objSubQuestion.arrOptions;
	          var objOption = arrOptions[i];
	          var arrAnswers = objOption.arrAnswers;
	          var strChar = arrRowChars[i];
	          arrHtml.push("<tr><td>"  +     strChar      + "   </td>");
	         
	          for(var j=0;j<arrOptions.length;j++){
	        	  var strChecked = "";
	 			 if(objSubQuestion.arrAnswers){
	 				 var arrAnswers =objSubQuestion.arrAnswers;
	 				 for(var k=0;k<arrAnswers.length;k++){
	 					 var strAnswerNum = arrAnswers[k];
	 					 if(strAnswerNum == j){
	 						 strChecked = "checked";
	 						 break;
	 					 }
	 				 }
	 	        } 
	        	arrHtml.push("<td>");
	        	  
	        	var strCheckbox = "<input type='checkbox' name='checkbox"+ i   +"' "  +  strChecked  +    " value='" +   i    +  "'  onchange='App.handleCheckboxChange(this," +    j    +")'/>";
	        	  arrHtml.push(strCheckbox);
	              arrHtml.push("</td>");  	  
	              
	          }
	          arrHtml.push("</tr>");
	          
	     }
	     return arrHtml.join("\r\n");
	    
		
	};

*/

	/*
	App.getQuestionTableHtml = function(){
		var arrHtml = [];
		arrHtml.push('<table cellpadding="0" cellspacing="0" class="ques" width="200">');
		var COLUMNS = 4;
		var arrQuestions = this.getCurrentSectionQuestions();
		
		var intNumQuestions = arrQuestions.length;
		var intRows = Math.ceil(intNumQuestions/COLUMNS);



		for(var i=0;i<intRows;i++){
			arrHtml.push('<tr>');


			for(var j=1;j<=COLUMNS;j++){
				var intNum = (i*COLUMNS) + j;
				var strShowLink = "";
			 
				if(this.intCurrentQuestionNum == (intNum-1)){
					strShowLink =intNum;
				}else{
					 strShowLink = "<a href='javascript:;' onclick='App.showQuestion(" +   (intNum-1)        + ")' >"+intNum + "</a>";
				}

				
				if(intNum > intNumQuestions){
					
				}


				else{
                      var objQuestion = arrQuestions[intNum-1];
                      var strSpanClass = "";
                      var strColor = "";
                      if(objQuestion.strStatus == "Answered"){
                         strColor = "#698B22";
                         strSpanClass = "leg_ans";
                      }else if(objQuestion.strStatus == "Unanswered"){
                    	 strColor = "#CD0000";
                    	 strSpanClass = "leg_not_ans";
                      }else if(objQuestion.strStatus == "Marked"){
                    	  strColor = "#CFCDFF";
                     	 strSpanClass = "leg_mark";
                   	  
                      }else{
                    	  strColor = "#FFFFFF";
                      	  strSpanClass = "leg_not_vis";  
                   	  
                      }
                      
                     // strSpanClass = "style='background:"+ strColor +"'";					 
					  arrHtml.push('<td>');
					  arrHtml.push('<span class="' + strSpanClass  + '">');
					  arrHtml.push(strShowLink);
					  arrHtml.push('</span>');
					  arrHtml.push('</td>');
				}	
			 }
			arrHtml.push('</tr>');
		}


		
		arrHtml.push("</table>");

		return arrHtml.join("\r\n");
      }

      */

      

/*	App.handleMarkForReviewClick = function(){
                 var objQuestion = App.getQuestion(App.intCurrentQuestionNum);
                 objQuestion.strStatus = "Marked";
                 App.renderQuestionTable();
		}

	App.handleSkipClick = function(){

		var intNextQuestionNum = App.intCurrentQuestionNum+1;
		var arrQuestions = App.getCurrentSectionQuestions();
		if(  intNextQuestionNum  >= arrQuestions.length){
			intNextQuestionNum = 0;
		}
		App.showQuestion(intNextQuestionNum);
                  
	}

	App.handleInstructionsClick = function(){
		
		var strCurrentQuestionLink = "<h3><a href='javascript:;' onclick='App.showCurrentQuestion()'>Close</a></h3>";
		$("#divQuestion").html("<h1>Instructions</h1>" + App.objRules.strRule  + strCurrentQuestionLink);
		//openWindow('test-instructions.php?testid='+App.strTestId);          
	}

	App.showCurrentQuestion = function(){
            App.showQuestion(App.intCurrentQuestionNum); 
	}


	App.handleSaveAndSkipClick = function(){

		var objQuestion = App.getQuestion(App.intCurrentQuestionNum);
		var blnOk = App.validateAnswers(objQuestion);
		if(!blnOk){
			return;
		}
		 
		
		App.saveAnswer(App.intCurrentQuestionNum);
		var intNextQuestionNum = App.intCurrentQuestionNum+1;
		var arrQuestions  = App.getCurrentSectionQuestions();
		if(  intNextQuestionNum  >= arrQuestions.length){
			intNextQuestionNum = 0;
		} 
		App.showQuestion(intNextQuestionNum);
                  
	}
	 
	
	App.handleRadioChange = function(rdo){
		
		      var objQuestion = App.getQuestion(App.intCurrentQuestionNum);

		      var arrAnswers = [];
		       
		      if(objQuestion.strQuestionTypeId == 4){
			         var strRadioName = $(rdo).attr("name");
			         var arrTemp = strRadioName.split("_");
                     var intSubQuestionIndex =  parseInt(arrTemp[1]);
                     var objSubQuestion = objQuestion.arrSubQuestions[intSubQuestionIndex];
                     var str = "name='radio_" + intSubQuestionIndex   +"'";
                     //alert(str);
       		        var arrRadios = $("["+ str  + "]");
       		        //alert(arrRadios.length);
       				for(var i=0;i<arrRadios.length;i++){
       					var objRadio = arrRadios[i];
       					if(objRadio.checked){
       		                    arrAnswers.push(i+1);
       				      }
       					}
       				
       				objSubQuestion.arrAnswers = arrAnswers;     
			      
		      }else{

		    	var arrRadios = $("[name='radio']");
				for(var i=0;i<arrRadios.length;i++){
					var objRadio = arrRadios[i];
					if(objRadio.checked){
		                    arrAnswers.push(i+1);

				      }
					}
				
		        objQuestion.arrAnswers = arrAnswers;
		      }		     
		     // objQuestion.strStatus = "Answered";
		     App.renderResetLink(App.intCurrentQuestionNum);
		     App.renderQuestionTable();
	}
	
	App.handleCheckboxChange = function(chk){
		var objQuestion = App.getQuestion(App.intCurrentQuestionNum);
		var arrAnswers = [];

	      if(objQuestion.strQuestionTypeId == 4){

              var strChkName =$(chk).attr("name");
	    	  var arrTemp = strChkName.split("_");
              var intSubQuestionIndex =  parseInt(arrTemp[1]);
              var objSubQuestion = objQuestion.arrSubQuestions[intSubQuestionIndex];
              var str = "name='checkbox_" + intSubQuestionIndex   +"'";
            

              var arrChkBoxes = $("["+ str  + "]");
				for(var i=0;i<arrChkBoxes.length;i++){
					var objChkBox = arrChkBoxes[i];
					if(objChkBox.checked){
			                  arrAnswers.push(i+1);
				      }
				}
				
                       
				objSubQuestion.arrAnswers = arrAnswers;     
		      
	      }else{
		      var arrChkBoxes = $("[name='checkbox']");
		      for(var i=0;i<arrChkBoxes.length;i++){
		      var objChkBox = arrChkBoxes[i];
		      if(objChkBox .checked){
			        arrAnswers.push(i);
		      }
		      }	  
		   }
	    
		objQuestion.arrAnswers = arrAnswers;
		if(arrAnswers.length >0){
		   objQuestion.strStatus = "Answered";
		   App.renderResetLink(App.intCurrentQuestionNum);
		}else{
			 objQuestion.strStatus = "Unanswered";
			 App.removeResetLink(App.intCurrentQuestionNum);
		}
		App.renderQuestionTable();
	}

	App.resetQuestion = function(intQuestionNum){
		
		var objQuestion = App.getQuestion(intQuestionNum);
		if(objQuestion.strQuestionTypeId == 4){
		     var arrSubQuestions = objQuestion.arrSubQuestions;
		     for(var i=0;i<arrSubQuestions.length;i++){
			     var objSubQuestion = arrSubQuestions[i];
			     objSubQuestion.arrAnswers = [];
		     }	
		}else{
		   objQuestion.arrAnswers = [];
		}
		objQuestion.strStatus = "Unanswered";
		App.showQuestion(intQuestionNum);
	}

	App.renderResetLink = function(i){
          var strLink = "<a  href='javascript:;' onclick='App.resetQuestion(" + i + ")'>Reset</a>";
          $("#divResetLink").html(strLink);
	}

	App.removeResetLink = function(i){
          $("#divResetLink").html("");
	} */

	App.renderSections=function(){
		var strHtml = App.getSectionsHtml();
		
		$("#divSections").html(strHtml);
	}

	App.getSectionsHtml = function(){
		var arrHtml = [];
		var arrSections = App.arrSections;
		
        for(var i=0;i<arrSections.length;i++){
    		
                
            var objSection = arrSections[i];
            var strId = objSection.strId;
            if(App.strCurrentSectionId == strId){
                var strClass = "active";
            }else{
            	 var strClass = "deactive";
            }
            var strName = objSection.strName
            var strHandler = "App.showSection(" + strId +")";
            arrHtml.push("<div class='" + strClass + "' onclick='" + strHandler +"'>");    
            arrHtml.push(strName);
    		arrHtml.push("</div>");
            
            
        }
		
		var strHtml = arrHtml.join("\r\n");
		return strHtml;
	}

	App.showSection=function(strSectionId){
		 App.strCurrentSectionId = strSectionId;
			
		 App.renderSections();
			
		 App.showQuestion(0);
	}

/*	App.getCurrentSectionQuestions = function(){

		return this.getQuestionsForSectionById(this.strCurrentSectionId);
	}

	App.getQuestionsForSectionById = function(strSectionId){
		//alert(strSectionId);
		//alert(this.arrSections.length);
		for(var i=0;i<this.arrSections.length;i++){
              var objSection = this.arrSections[i];
              
              if(objSection.strId == strSectionId){
                  return objSection.arrQuestions;
              } 
			}
		return [];
		
	}

	App.saveAnswers = function(){
		     var arrPostData = [];
              for(var i=0;i<this.arrSections.length;i++){
                  var objSection = this.arrSections[i]; 
                  var arrQuestions = objSection.arrQuestions;
                  for(var j=0;j<arrQuestions.length;j++){
                      var objQuestion = arrQuestions[j];
                      var strPostData  = this.getQuestionPostData(objQuestion);
                      arrPostData.push(strPostData);
                      
                       
                  }
              } 
              var strPostData = arrPostData.join("|");
              var strUrl = "submit-answers.php"; 
              strPostData = "testid=" + App.strTestId  + "&answers="+strPostData;
              $.ajax({
              	  type: 'POST',
              	  url: strUrl,
              	  data: strPostData,
              	  success: fnSuccess
              	});
              
	}

	App.validateAnswers = function(objQuestion){

		var strQuestionId = objQuestion.strId;

		var arrPostData = []; 
		
		if(objQuestion.strQuestionTypeId == 4){ // matrix type question

			var arrSubQuestions =objQuestion.arrSubQuestions;
			for(var i=0;i<arrSubQuestions.length;i++){
				var objSubQuestion = arrSubQuestions[i];
				var strQuestionId = objSubQuestion.strId;
				var arrAnswers = objSubQuestion.arrAnswers;
				if(arrAnswers.length == 0){
					alert("Please answer the question");
					return false;
				}
				   
			}
	
		}else{
			var arrAnswers = objQuestion.arrAnswers;
		    if(arrAnswers.length == 0){
			    alert("Please answer the question");
			    return false;
		    }
		}
		
         return true;
	}

	App.getQuestionPostData = function(objQuestion){

		
		//var objQuestion = App.getQuestion(intQuestionNum);
		var strQuestionId = objQuestion.strId;

		var arrPostData = []; 
		
		if(objQuestion.strQuestionTypeId == 4){ // matrix type question

			var arrSubQuestions =objQuestion.arrSubQuestions;
			for(var i=0;i<arrSubQuestions.length;i++){
				var objSubQuestion = arrSubQuestions[i];
				var strQuestionId = objSubQuestion.strId;
				var arrAnswers = objSubQuestion.arrAnswers;
				var strAnswers = arrAnswers.join(",");
				//qid-selectedoptionk,selectedoptionj
				var arrTemp = [];
				arrTemp.push(strQuestionId);
				arrTemp.push("-");
				arrTemp.push(strAnswers);
			    var strPostData = arrTemp.join("")
			    arrPostData.push(strPostData);
			    
			}
			var strPostData = arrPostData.join("|");
			//alert(strPostData);

		}else{
			var arrAnswers = objQuestion.arrAnswers;
			var strAnswers = arrAnswers.join(",");
			//qid-selectedoptionk,selectedoptionj
			arrPostData.push(strQuestionId);
			arrPostData.push("-");
			arrPostData.push(strAnswers);
		    var strPostData = arrPostData.join("")
		}

		return strPostData;

	}

	App.saveAnswer =  function(intQuestionNum){

		var objQuestion = this.getQuestion(intQuestionNum);
		
		var strUrl = "submit-answers.php";
	
		
		var strPostData = this.getQuestionPostData(objQuestion);
		//alert(strPostData);
		strPostData = "testid=" + App.strTestId  + "&answers="+strPostData;
        $.ajax({
      	  type: 'POST',
      	  url: strUrl,
      	  data: strPostData,
      	  success: fnSuccess
      	});
        objQuestion.strStatus = "Answered";
		 

	} */


   App.submit =  function(){
	    document.forms["TestForm"].submit();
		
	   App.stopTest();
	   
      
	
         
   }

  function fnSubmitSuccess(){
    App.stopTest();
  }
     

  function fnSuccess(strData, textStatus, XMLHttpRequest){
        //alert(strData);
  }

  App.getQuestionCountByStatus = function(strStatus){
	var intCount = 0; 
    for(var i=0;i<this.arrSections.length;i++){
        var objSection = this.arrSections[i]; 
        var arrQuestions = objSection.arrQuestions;
        for(var j=0;j<arrQuestions.length;j++){
            var objQuestion = arrQuestions[j];
            
            if(objQuestion.strStatus == strStatus){
                intCount++;
            }
        }
    }
    return intCount; 
  }

  App.getSectionNameById = function(strId){

	for(var i=0;i<this.arrSections.length;i++){
		var objSection = this.arrSections[i];
		if(objSection.strId == strId){
			return objSection.strName;
		}
	}
	return "NA";  
  }
</script>

	<script>



 $(document).ready(function(){

     App.init();

     return; 
 });

 window.onbeforeunload = confirmExit;
 function confirmExit(){
        return "You have attempted to leave this page.  If you have made any changes to the fields without clicking the Save button, your changes will be lost.  Are you sure you want to exit this page?";
       
 }
 
   
App.strTestId  = 104;
App.strTestType  = "c"
App.arrOrigQuestions = [{"strId":1857,"strQuestionTypeId":1,"strQuestion":"  <img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/1.png\" width=\"241\" height=\"33\" align=\"absMiddle\" alt=\"\" \/> The product Y is","strSectionId":3,"arrOptions":[{"strOption":"phthalic acid"},{"strOption":"isophthalic acid"},{"strOption":"phenolphthalein"},{"strOption":"o-Hydroxybenzenesulphonic acid"}]},{"strId":1858,"strQuestionTypeId":1,"strQuestion":"  An organic compound &lsquo;X&rsquo; on treatment with acidified K<sub>2<\/sub>Cr<sub>2<\/sub>O<sub>7<\/sub> gives a compound &lsquo;Y&rsquo; which reacts with I2 and sodium carbonate to form tri-iodomethane. The compound &lsquo;X&rsquo; is","strSectionId":3,"arrOptions":[{"strOption":"CH<sub>3<\/sub>CHOHCH<sub>3<\/sub>"},{"strOption":"CH<sub>3<\/sub>CHO"},{"strOption":"CH<sub>3<\/sub>COCH<sub>3<\/sub>"},{"strOption":"CH<sub>3<\/sub>OH"}]},{"strId":1859,"strQuestionTypeId":1,"strQuestion":"  Product C in the reaction, <img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/2.png\" width=\"260\" height=\"23\" align=\"absMiddle\" alt=\"\" \/> will be","strSectionId":3,"arrOptions":[{"strOption":"ethane"},{"strOption":"ethyl methyl ether"},{"strOption":"ethyl iodide"},{"strOption":"propane"}]},{"strId":1860,"strQuestionTypeId":1,"strQuestion":"  Which of the following compounds on reaction with CH<sub>3<\/sub>MgBr will give a tertiary alcohol?","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/3.png\" width=\"110\" height=\"40\" align=\"absMiddle\" alt=\"\" \/>"},{"strOption":"C<sub>2<\/sub>H<sub>5<\/sub>CO<sub>2<\/sub>CH<sub>3<\/sub>"},{"strOption":"C<sub>6<\/sub>H<sub>5<\/sub>CHO"},{"strOption":"C<sub>2<\/sub>H<sub>5<\/sub>COOH"}]},{"strId":1861,"strQuestionTypeId":1,"strQuestion":"  In the reaction sequence <img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/4.png\" width=\"353\" height=\"23\" align=\"absMiddle\" alt=\"\" \/> Z will be","strSectionId":3,"arrOptions":[{"strOption":"1,2-dibromopropane"},{"strOption":"1-bromopropane"},{"strOption":"2-bromopropane"},{"strOption":"3-bromopropene"}]},{"strId":1862,"strQuestionTypeId":1,"strQuestion":"  Predict the product.\r\n<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/5.png\" width=\"120\" height=\"60\" align=\"absMiddle\" alt=\"\" \/>","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/6.png\" width=\"60\" height=\"70\" align=\"absMiddle\" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/7.png\" width=\"60\" height=\"50\" align=\"absMiddle\" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/8.png\" width=\"60\" height=\"63\" align=\"absMiddle\" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/9.png\" width=\"60\" height=\"57\" align=\"absMiddle\" alt=\"\" \/>"}]},{"strId":1863,"strQuestionTypeId":1,"strQuestion":"  The increasing reactivity order or alcohol\r\n<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/10.png\" width=\"355\" height=\"180\" align=\"absMiddle\" alt=\"\" \/>\r\nTowards reaction with HBr is","strSectionId":3,"arrOptions":[{"strOption":"II&lt;I&lt;III&lt;IV&lt;V"},{"strOption":"II&lt;V&lt;I&lt;IV&lt;III"},{"strOption":"V&lt;II&lt;I&lt;IV&lt;III"},{"strOption":"II&lt;V&lt;IV&lt;I&lt;III"}]},{"strId":1864,"strQuestionTypeId":1,"strQuestion":"  A polyhydric alcohol is benzoylated using benzoyl chloride in presence of sodium hydroxide. If molecular weight of polyhydric alcohol is 92 and that of its benzoyl derivative is 404, then the number of &ndash;OH groups present in polyhydric alcohol is","strSectionId":3,"arrOptions":[{"strOption":"1"},{"strOption":"2"},{"strOption":"3"},{"strOption":"4"}]},{"strId":1865,"strQuestionTypeId":1,"strQuestion":"  An organic compound C<sub>3<\/sub>H6O does not give a precipitate with 2,4-dinitrophenylhydrazine reagent and does not react with metallic sodium. If could be","strSectionId":3,"arrOptions":[{"strOption":"CH<sub>3<\/sub>-CH<sub>2<\/sub>-CHO"},{"strOption":"CH<sub>2<\/sub>=CH-CH<sub>2<\/sub>OH"},{"strOption":"CH<sub>3<\/sub>-CO-CH<sub>3<\/sub>"},{"strOption":"CH<sub>2<\/sub>=CH-O-CH<sub>3<\/sub>"}]},{"strId":1866,"strQuestionTypeId":1,"strQuestion":"  2-phenylethanol may be prepared by the reaction of phenylmagnesium bromide with","strSectionId":3,"arrOptions":[{"strOption":"HCHO"},{"strOption":"CH<sub>3<\/sub>COCH<sub>3<\/sub>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/11.png\" width=\"40\" height=\"28\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"CH<sub>3<\/sub>CHO"}]},{"strId":1867,"strQuestionTypeId":1,"strQuestion":"  When 2,2,6,6-tetramethyl cyclohexanol is treated with an acid, an alkene is formed after rearrangement. The structure of the alkene can be given as:-","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/12.png\" width=\"50\" height=\"49\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/13.png\" width=\"45\" height=\"55\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/14.png\" width=\"50\" height=\"35\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/15.png\" width=\"50\" height=\"46\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]},{"strId":1868,"strQuestionTypeId":1,"strQuestion":"  Products (X) and (Y) are respectively\r\n<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/16.png\" width=\"200\" height=\"94\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/17.png\" width=\"160\" height=\"80\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/18.png\" width=\"160\" height=\"85\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/19.png\" width=\"160\" height=\"76\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/20.png\" width=\"170\" height=\"78\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]},{"strId":1869,"strQuestionTypeId":1,"strQuestion":"  <img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/21.png\" width=\"131\" height=\"53\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/> The product is:","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/22.png\" width=\"70\" height=\"39\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/23.png\" width=\"80\" height=\"39\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/24.png\" width=\"90\" height=\"39\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/25.png\" width=\"90\" height=\"30\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]},{"strId":1870,"strQuestionTypeId":1,"strQuestion":"  Identify the product (X) in the following reaction:\r\n<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/26.png\" width=\"152\" height=\"47\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/27.png\" width=\"80\" height=\"43\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/28.png\" width=\"80\" height=\"47\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/29.png\" width=\"70\" height=\"60\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/30.png\" width=\"75\" height=\"44\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]},{"strId":1871,"strQuestionTypeId":1,"strQuestion":"  <img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/31.png\" width=\"350\" height=\"26\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>","strSectionId":3,"arrOptions":[{"strOption":"BrCH=CH-CH<sub>3<\/sub>"},{"strOption":"CH<sub>2<\/sub>=CH-Br"},{"strOption":"CH<sub>3<\/sub>CH<sub>2<\/sub>CH<sub>2<\/sub>Br"},{"strOption":"CH<sub>3<\/sub>CHBrCH<sub>3<\/sub>"}]},{"strId":1872,"strQuestionTypeId":1,"strQuestion":"  The major product for the reaction,\r\n<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/32.png\" width=\"260\" height=\"39\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/33.png\" width=\"70\" height=\"62\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/34.png\" width=\"70\" height=\"62\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/35.png\" width=\"150\" height=\"50\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/36.png\" width=\"65\" height=\"62\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]},{"strId":1873,"strQuestionTypeId":1,"strQuestion":"  Draw the structure of C<sub>4<\/sub>H<sub>10<\/sub>O if the compound: (1) reacts with Na but fails to react with a strong oxidizing agent such as K<sub>2<\/sub>Cr<sub>2<\/sub>O<sub>7<\/sub>; (2) gives a negative iodoform test; and (3) gives a positive Lucas test in 4 minutes.","strSectionId":3,"arrOptions":[{"strOption":"CH<sub>3<\/sub>-CH<sub>2<\/sub>-CH<sub>2<\/sub>-CH<sub>2<\/sub>-OH"},{"strOption":"(CH<sub>3<\/sub>)<sub>2<\/sub>CHCH<sub>2<\/sub>OH"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/37.png\" width=\"85\" height=\"101\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"C<sub>2<\/sub>H<sub>5<\/sub>OC<sub>2<\/sub>H<sub>5<\/sub>"}]},{"strId":1874,"strQuestionTypeId":1,"strQuestion":"  <img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/38.png\" width=\"125\" height=\"44\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/> On dehydration mainly gives","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/39.png\" width=\"60\" height=\"41\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/40.png\" width=\"55\" height=\"45\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/41.png\" width=\"45\" height=\"49\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/42.png\" width=\"50\" height=\"57\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]},{"strId":1875,"strQuestionTypeId":1,"strQuestion":"  The major product (P) in this reaction sequence is:\r\n<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/43.png\" width=\"257\" height=\"66\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/44.png\" width=\"130\" height=\"70\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/45.png\" width=\"110\" height=\"80\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/46.png\" width=\"110\" height=\"85\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/47.png\" width=\"100\" height=\"81\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]},{"strId":1876,"strQuestionTypeId":1,"strQuestion":"  Treatment of alcohol P with acidic methanethiol gives product Q. Identify Q <img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/48.png\" width=\"320\" height=\"62\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/49.png\" width=\"70\" height=\"45\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/50.png\" width=\"70\" height=\"44\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/51.png\" width=\"70\" height=\"46\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/52.png\" width=\"100\" height=\"59\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]}];	
App.arrQuestions = [{"strId":1857,"strQuestionTypeId":1,"strQuestion":"  <img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/1.png\" width=\"241\" height=\"33\" align=\"absMiddle\" alt=\"\" \/> The product Y is","strSectionId":3,"arrOptions":[{"strOption":"phthalic acid"},{"strOption":"isophthalic acid"},{"strOption":"phenolphthalein"},{"strOption":"o-Hydroxybenzenesulphonic acid"}]},{"strId":1858,"strQuestionTypeId":1,"strQuestion":"  An organic compound &lsquo;X&rsquo; on treatment with acidified K<sub>2<\/sub>Cr<sub>2<\/sub>O<sub>7<\/sub> gives a compound &lsquo;Y&rsquo; which reacts with I2 and sodium carbonate to form tri-iodomethane. The compound &lsquo;X&rsquo; is","strSectionId":3,"arrOptions":[{"strOption":"CH<sub>3<\/sub>CHOHCH<sub>3<\/sub>"},{"strOption":"CH<sub>3<\/sub>CHO"},{"strOption":"CH<sub>3<\/sub>COCH<sub>3<\/sub>"},{"strOption":"CH<sub>3<\/sub>OH"}]},{"strId":1859,"strQuestionTypeId":1,"strQuestion":"  Product C in the reaction, <img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/2.png\" width=\"260\" height=\"23\" align=\"absMiddle\" alt=\"\" \/> will be","strSectionId":3,"arrOptions":[{"strOption":"ethane"},{"strOption":"ethyl methyl ether"},{"strOption":"ethyl iodide"},{"strOption":"propane"}]},{"strId":1860,"strQuestionTypeId":1,"strQuestion":"  Which of the following compounds on reaction with CH<sub>3<\/sub>MgBr will give a tertiary alcohol?","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/3.png\" width=\"110\" height=\"40\" align=\"absMiddle\" alt=\"\" \/>"},{"strOption":"C<sub>2<\/sub>H<sub>5<\/sub>CO<sub>2<\/sub>CH<sub>3<\/sub>"},{"strOption":"C<sub>6<\/sub>H<sub>5<\/sub>CHO"},{"strOption":"C<sub>2<\/sub>H<sub>5<\/sub>COOH"}]},{"strId":1861,"strQuestionTypeId":1,"strQuestion":"  In the reaction sequence <img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/4.png\" width=\"353\" height=\"23\" align=\"absMiddle\" alt=\"\" \/> Z will be","strSectionId":3,"arrOptions":[{"strOption":"1,2-dibromopropane"},{"strOption":"1-bromopropane"},{"strOption":"2-bromopropane"},{"strOption":"3-bromopropene"}]},{"strId":1862,"strQuestionTypeId":1,"strQuestion":"  Predict the product.\r\n<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/5.png\" width=\"120\" height=\"60\" align=\"absMiddle\" alt=\"\" \/>","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/6.png\" width=\"60\" height=\"70\" align=\"absMiddle\" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/7.png\" width=\"60\" height=\"50\" align=\"absMiddle\" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/8.png\" width=\"60\" height=\"63\" align=\"absMiddle\" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/9.png\" width=\"60\" height=\"57\" align=\"absMiddle\" alt=\"\" \/>"}]},{"strId":1863,"strQuestionTypeId":1,"strQuestion":"  The increasing reactivity order or alcohol\r\n<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/10.png\" width=\"355\" height=\"180\" align=\"absMiddle\" alt=\"\" \/>\r\nTowards reaction with HBr is","strSectionId":3,"arrOptions":[{"strOption":"II&lt;I&lt;III&lt;IV&lt;V"},{"strOption":"II&lt;V&lt;I&lt;IV&lt;III"},{"strOption":"V&lt;II&lt;I&lt;IV&lt;III"},{"strOption":"II&lt;V&lt;IV&lt;I&lt;III"}]},{"strId":1864,"strQuestionTypeId":1,"strQuestion":"  A polyhydric alcohol is benzoylated using benzoyl chloride in presence of sodium hydroxide. If molecular weight of polyhydric alcohol is 92 and that of its benzoyl derivative is 404, then the number of &ndash;OH groups present in polyhydric alcohol is","strSectionId":3,"arrOptions":[{"strOption":"1"},{"strOption":"2"},{"strOption":"3"},{"strOption":"4"}]},{"strId":1865,"strQuestionTypeId":1,"strQuestion":"  An organic compound C<sub>3<\/sub>H6O does not give a precipitate with 2,4-dinitrophenylhydrazine reagent and does not react with metallic sodium. If could be","strSectionId":3,"arrOptions":[{"strOption":"CH<sub>3<\/sub>-CH<sub>2<\/sub>-CHO"},{"strOption":"CH<sub>2<\/sub>=CH-CH<sub>2<\/sub>OH"},{"strOption":"CH<sub>3<\/sub>-CO-CH<sub>3<\/sub>"},{"strOption":"CH<sub>2<\/sub>=CH-O-CH<sub>3<\/sub>"}]},{"strId":1866,"strQuestionTypeId":1,"strQuestion":"  2-phenylethanol may be prepared by the reaction of phenylmagnesium bromide with","strSectionId":3,"arrOptions":[{"strOption":"HCHO"},{"strOption":"CH<sub>3<\/sub>COCH<sub>3<\/sub>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/11.png\" width=\"40\" height=\"28\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"CH<sub>3<\/sub>CHO"}]},{"strId":1867,"strQuestionTypeId":1,"strQuestion":"  When 2,2,6,6-tetramethyl cyclohexanol is treated with an acid, an alkene is formed after rearrangement. The structure of the alkene can be given as:-","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/12.png\" width=\"50\" height=\"49\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/13.png\" width=\"45\" height=\"55\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/14.png\" width=\"50\" height=\"35\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/15.png\" width=\"50\" height=\"46\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]},{"strId":1868,"strQuestionTypeId":1,"strQuestion":"  Products (X) and (Y) are respectively\r\n<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/16.png\" width=\"200\" height=\"94\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/17.png\" width=\"160\" height=\"80\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/18.png\" width=\"160\" height=\"85\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/19.png\" width=\"160\" height=\"76\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/20.png\" width=\"170\" height=\"78\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]},{"strId":1869,"strQuestionTypeId":1,"strQuestion":"  <img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/21.png\" width=\"131\" height=\"53\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/> The product is:","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/22.png\" width=\"70\" height=\"39\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/23.png\" width=\"80\" height=\"39\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/24.png\" width=\"90\" height=\"39\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/25.png\" width=\"90\" height=\"30\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]},{"strId":1870,"strQuestionTypeId":1,"strQuestion":"  Identify the product (X) in the following reaction:\r\n<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/26.png\" width=\"152\" height=\"47\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/27.png\" width=\"80\" height=\"43\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/28.png\" width=\"80\" height=\"47\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/29.png\" width=\"70\" height=\"60\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/30.png\" width=\"75\" height=\"44\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]},{"strId":1871,"strQuestionTypeId":1,"strQuestion":"  <img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/31.png\" width=\"350\" height=\"26\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>","strSectionId":3,"arrOptions":[{"strOption":"BrCH=CH-CH<sub>3<\/sub>"},{"strOption":"CH<sub>2<\/sub>=CH-Br"},{"strOption":"CH<sub>3<\/sub>CH<sub>2<\/sub>CH<sub>2<\/sub>Br"},{"strOption":"CH<sub>3<\/sub>CHBrCH<sub>3<\/sub>"}]},{"strId":1872,"strQuestionTypeId":1,"strQuestion":"  The major product for the reaction,\r\n<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/32.png\" width=\"260\" height=\"39\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/33.png\" width=\"70\" height=\"62\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/34.png\" width=\"70\" height=\"62\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/35.png\" width=\"150\" height=\"50\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/36.png\" width=\"65\" height=\"62\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]},{"strId":1873,"strQuestionTypeId":1,"strQuestion":"  Draw the structure of C<sub>4<\/sub>H<sub>10<\/sub>O if the compound: (1) reacts with Na but fails to react with a strong oxidizing agent such as K<sub>2<\/sub>Cr<sub>2<\/sub>O<sub>7<\/sub>; (2) gives a negative iodoform test; and (3) gives a positive Lucas test in 4 minutes.","strSectionId":3,"arrOptions":[{"strOption":"CH<sub>3<\/sub>-CH<sub>2<\/sub>-CH<sub>2<\/sub>-CH<sub>2<\/sub>-OH"},{"strOption":"(CH<sub>3<\/sub>)<sub>2<\/sub>CHCH<sub>2<\/sub>OH"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/37.png\" width=\"85\" height=\"101\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"C<sub>2<\/sub>H<sub>5<\/sub>OC<sub>2<\/sub>H<sub>5<\/sub>"}]},{"strId":1874,"strQuestionTypeId":1,"strQuestion":"  <img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/38.png\" width=\"125\" height=\"44\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/> On dehydration mainly gives","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/39.png\" width=\"60\" height=\"41\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/40.png\" width=\"55\" height=\"45\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/41.png\" width=\"45\" height=\"49\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/42.png\" width=\"50\" height=\"57\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]},{"strId":1875,"strQuestionTypeId":1,"strQuestion":"  The major product (P) in this reaction sequence is:\r\n<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/43.png\" width=\"257\" height=\"66\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/44.png\" width=\"130\" height=\"70\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/45.png\" width=\"110\" height=\"80\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/46.png\" width=\"110\" height=\"85\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/47.png\" width=\"100\" height=\"81\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]},{"strId":1876,"strQuestionTypeId":1,"strQuestion":"  Treatment of alcohol P with acidic methanethiol gives product Q. Identify Q <img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/48.png\" width=\"320\" height=\"62\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>","strSectionId":3,"arrOptions":[{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/49.png\" width=\"70\" height=\"45\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/50.png\" width=\"70\" height=\"44\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/51.png\" width=\"70\" height=\"46\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"},{"strOption":"<img src=\"http:\/\/edusmartsolutions.com\/uploads\/fckeditor\/image\/Chemistry\/Alcohols,Phenols%20and%20Ethers\/Alcohols,Phenols%20and%20Ethers-2\/52.png\" width=\"100\" height=\"59\" align=\"absMiddle\" style=\"font-size: 12.222222328186035px; \" alt=\"\" \/>"}]}];
App.arrSections = [{"strId":3,"strName":"CHEMISTRY","strHeading":"chemistry"}];
App.intTestDuration = 60;
App.arrMarkingSchemeTable =  [{"strQuestionTypeId":1,"strCorrectMarks":4,"strPenalty":1},{"strQuestionTypeId":2,"strCorrectMarks":2,"strPenalty":1},{"strQuestionTypeId":3,"strCorrectMarks":3,"strPenalty":0},{"strQuestionTypeId":4,"strCorrectMarks":2,"strPenalty":0}];
App.objRules = {"strRule":"<p>&nbsp;<\/p>\r\n<ul>\r\n    <li><span style=\"color: rgb(51, 51, 0); \">This paper contains 20 multiple choice questions.<\/span><\/li>\r\n    <li><span style=\"color: rgb(51, 51, 0); \">Each question has 4 choices (a), (b), (c) and (d), for its answer, out of which only one is correct.<\/span><\/li>\r\n    <li><span style=\"color: rgb(51, 51, 0); \">For each question in the paper, you will be awarded&nbsp;<em><strong>4 marks&nbsp;<\/strong><\/em>if you darken the bubble corresponding to the&nbsp;<em><strong>correct answer<\/strong><\/em><\/span><\/li>\r\n    <li><span style=\"color: rgb(51, 51, 0); \">Zero mark if no bubble is darkened.<\/span><\/li>\r\n    <li><span style=\"color: rgb(51, 51, 0); \">In case of an&nbsp;<em><strong>incorrect answer, minus one (&ndash;1) mark will be awarded<\/strong><\/em>.<\/span><\/li>\r\n<\/ul>\r\n<p><span style=\"color: rgb(51, 51, 0); \"><em><strong>&nbsp;Other Instructions<\/strong><\/em><\/span><\/p>\r\n<ul>\r\n    <li><span style=\"color: rgb(51, 51, 0); \">For answering a question, select the appropriate option and&nbsp;<em><strong><span style=\"color: rgb(255, 153, 0); \">click save and next for saving your answer<\/span><\/strong><\/em>. In all other cases your answer will not be saved.<\/span><\/li>\r\n    <li><span style=\"color: rgb(51, 51, 0); \">Please disable pop-up blocking before launching the exams.<\/span><\/li>\r\n    <li><span style=\"color: rgb(51, 51, 0); \">You have only one attempt at this paper. Once you close the test (anywhere in the paper), the test will be counted as attempted. So start the test only if you are seriously interested in taking the test.<\/span><\/li>\r\n    <li><span style=\"color: rgb(51, 51, 0); \">Once the test has started, do not press the refresh button (or F5 on your keyboard)<\/span><\/li>\r\n    <li><span style=\"color: rgb(51, 51, 0); \">You do not need to be net connected during the complete duration. Ensure you are internet connected when submitting as net is required to submit the test. However, it is advisable to stay connected, and save regularly to avoid losing your information. You can find a save button at the top right corner.<\/span><\/li>\r\n<\/ul>"}; 

</script>
	<div id="divLoader" style="display: none"><tr>
<td colspan="4">  <img src="./CT-T-1103_files/1.png" width="241" height="33" align="absMiddle" alt=""> The product Y is </td></tr>
<tr><td colspan="4">&nbsp;</td></tr>
<tr><td><strong>Options:</strong></td><td colspan="3">&nbsp;</td></tr>
<tr>
<td width="1%">&nbsp;</td><td width="1%">1</td><td width="1%"><input type="radio" name="radio" value="1" onchange="App.handleRadioChange(this)"></td><td align="left">   phthalic acid</td>
	</tr>
<tr>
<td width="1%">&nbsp;</td><td width="1%">2</td><td width="1%"><input type="radio" name="radio" value="2" onchange="App.handleRadioChange(this)"></td><td align="left">   isophthalic acid</td>
	</tr>
<tr>
<td width="1%">&nbsp;</td><td width="1%">3</td><td width="1%"><input type="radio" name="radio" value="3" onchange="App.handleRadioChange(this)"></td><td align="left">   phenolphthalein</td>
	</tr>
<tr>
<td width="1%">&nbsp;</td><td width="1%">4</td><td width="1%"><input type="radio" name="radio" value="4" onchange="App.handleRadioChange(this)"></td><td align="left">   o-Hydroxybenzenesulphonic acid</td>
	</tr></div>



<div style="display: none;">
	<input type="hidden" name="Qform__FormState" id="Qform__FormState" value="5">
	<input type="hidden" name="Qform__FormId" id="Qform__FormId" value="TestForm">
</div>

<input type="hidden" id="Qform__FormControl" name="Qform__FormControl"><input type="hidden" id="Qform__FormEvent" name="Qform__FormEvent"><input type="hidden" id="Qform__FormParameter" name="Qform__FormParameter"><input type="hidden" id="Qform__FormCallType" name="Qform__FormCallType"><input type="hidden" id="Qform__FormUpdates" name="Qform__FormUpdates"><input type="hidden" id="Qform__FormCheckableControls" name="Qform__FormCheckableControls"></form><script type="text/javascript">qc.registerForm(); qc.imageAssets = "/qcubed2/assets/_core/images"; qc.cssAssets = "/qcubed2/assets/_core/css"; qc.phpAssets = "/qcubed2/assets/_core/php"; qc.jsAssets = "/qcubed2/assets/_core/js"; </script></body></html>