<?php $this->renderc('template/header'); ?> 
<title>TerryX Home</title>
<link rel="stylesheet" href="global/css/green_form.css" type="text/css" media="screen" />
<script type="text/javascript">
	
	function beforeCall(form, options){
		$('#progress').show();
		return true;
	}
			
	function ajaxCallback(status, form, json){
		$('#hook_error').html('');
		
		if(json && json.is_logged_in === false){
			jAlert(json.message, 'Invalid Login');
			  
		} else if(json.is_logged_in === true) {
			window.location = json.role;
		}
		
		else{ alert('Connection error. Please refresh the page.')}
	}
	$(function(){   
		jQuery("#login_form").validationEngine({
			ajaxFormValidation: true,
			onBeforeAjaxFormValidation: beforeCall,
			onAjaxFormComplete: ajaxCallback
		});
		$('#loader').remove();
	});


</script>

</head>
<body>
	<div id="loader"></div>
	<div id="header">
		<!--    <div id="logo"></div>
			<div id="navbar">
			  <a href="home" id="home" class="active">Home</a>
			  <a href="contact" id="contact">Contact</a>
			  <a href="about" id="about">About</a>
			  <a href="#" id="resource">Resources</a>
			  <a href="#" id="login_link">Login</a>
			</div>
			<div class="clear"></div>-->
	</div>
	<div id="wrapper">
		<div id="sidebar1">
			this is left bar
		</div>
		<div id="container">
      <div id="nav">
        <ul>
          <li class="active"><a href="home">Homepage</a></li>
          <li><a href="login">Login</a></li>
        </ul>
    </div>
			<div id="content">
				<div id="progress"></div>
				<div id="hook_error"></div>
				<form id="login_form" class="green_form" action="login">
          <fieldset>
            <h1>X Login</h1>
					<label for="username">Username</label>
					<input type="text" id="username" name="username" class="validate[required]" />
					<br>
					<label for="password">Password</label>
					<input type="password" id="password" name="password" class="validate[required]" />
					<br>
          <input type="submit" value="Login" /> &nbsp;or <a href="#" class="bold">Join the X life</a>
          </fieldset>
				</form>


				Welcome to my website
			</div>
		</div>


		<div id="sidebar2">
			This is right bar
		</div>

		<?php $this->renderc('template/footer'); ?>