<?php $this->load->helper("url"); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Gas Tracker</title>
	<link href='http://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/lib/css/style.css" />
	<link rel="stylesheet" type="text/css" href="/lib/css/jquery-ui-1.8.18.custom.css" />	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
	<script src="/lib/js/jquery.validate.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$(".button").button({ disabled: true, icons: { primary: 'ui-icon-circle-check' } });
			$("#password").hide();
			
			$("input[type='text'],input[type='password']").focus(function(){
				var $input = $(this);
				
				if($input.val() === $input.data("default-value")){
					$input.val("");
				}
				
				if($input.attr("id") === "fake_password"){
					$input.hide();
					$("#password").show().focus();
				}
			});
			
			$("input[type='text']").blur(function(){
				var $input = $(this);
				if($input.val() === ""){
					$input.val($input.data("default-value"));
				}
			});
			
			$("#password").blur(function(){
				var $input = $(this);
				if($input.val() === ""){
					$input.hide();
					$("#fake_password").show();
				}
			});
			
		});
	</script>
</head>

<body id="home">

	<div id="container" class="box_shadow_3">