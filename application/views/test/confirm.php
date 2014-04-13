
<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>


<p> <a href="JavaScript:newPopup('<?php echo $this->config->base_url("test/take_test");?>/<?php echo $test[0]['testid'] ?>');"> CLICK HERE TO START THIS TEST</a>   </p>