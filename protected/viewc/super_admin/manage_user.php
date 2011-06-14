<?php $this->renderc('template/header'); ?>
<link rel="stylesheet" href="global/css/green_form.css" type="text/css" media="screen" />
</head>
<script type="text/javascript">
  
	function ajaxValidationCallback(status, form){
		//document.getElementById('create_user_form').reset(); 
		$(form)[0].reset();

		if (status === true) {
					
			alert("the form is valid!");
			// uncomment these lines to submit the form to form.action
			// form.validationEngine('detach');
			// form.submit();
			// or you may use AJAX again to submit the data
		} else {
			alert('failed');
		}
	}
            
	$(function(){
		$('#loader').remove();
		jQuery("#create_user_form").validationEngine({
			ajaxFormValidation: true,
			onAjaxFormComplete: ajaxValidationCallback
		});
	});
               
			
	//		$('#create_user_form').submit(function(){
	//			$('#progress').show();
	//			var gg = jQuery("#create_user_form").validationEngine('validate');
	//			if(gg === false){
	//				alert('wait');
	//			} else {
	//				$.ajax({
	//					type: 'POST',
	//					url: 'super_admin/create_user',
	//					data: $('#create_user_form').serialize(),
	//					error: alert('failed'),
	//					success: showSuccess(function(){
	//						abort();
	//					})
	//				});
	//			}
	//					
	//			$('#progress').hide();
	//			return false;
	//		});

        
		
	
</script>
<body>
	<div id="loader"></div>
	<div id="header">

		<!--		<div id="navbar">
			<a href="super_admin" id="home" class="active">Home</a>
			<a href="contact" id="contact">Contact</a>
			<a href="about" id="about">About</a>
			<a href="#" id="resource">Resources</a>
			<a href="logout">Logout</a>
		</div>
		<div class="clear"></div>-->
	</div>
	<div id="wrapper">
		<div id="sidebar1">
			<h3>Blog Article</h3>
			<ul>
				<li>
					<div id="new" onclick="alert('hello');"><img src="global/img/add.png" alt=""/>Write new</div>
				</li>
				<li>
					<a href="finance">Time</a>
				</li>
				<li>
					<a href="finance">Work</a>
				</li>

			</ul>
		</div>
		<div id="container">
			<div id="logo"></div>
			<div id="content">
				<div id="progress"></div>
				<img src="../../img/add.png" alt="" width="16px" height="16px" />

				<h2>User Management</h2>
				<form id="create_user_form" class="green_form" action="super_admin/create_user">
					<div class="form_message"></div>
					<fieldset>
						<label for="user_type">User Type</label>
						<select id="user_type" name="user_type" class="validate[required]">
							<option value="">Please select</option>
							<option value="admin">Administrator</option>
							<option value="normal">Member</option>
						</select>
						<br>

						<label for="username">Username <span class="ispan">as login user</span></label>
						<input type="text" id="username" name="username" class="validate[required,custom[onlyLetterNumber],maxSize[20],ajax[ajaxUserCallPhp]]"/>
						<br>

						<div class="dual_left"><label for="firstname">First name</label></div>	
						<div class="dual_left"><label for="lastname">Last name</label></div>

						<div class="dual_left">
							<input type="text" id="firstname" name="firstname" class="validate[required]" />
						</div>
						<div class="dual_left">
							<input type="text" id="lastname" name="lastname" class="validate[required]" /></div>
						<div class="clear"></div>

						<label for="password">Password</label>
						<input type="password" id="password" name="password" class="validate[required,minSize[6],maxSize[15]]" />
						<br>

						<label for="password_confirm">Re-enter Password <span class="ispan"> to confirm password</span></label>
						<input type="password" id="password_confirm" name="password_confirm" class="validate[required,minSize[6],maxSize[15],equals[password]]" />
						<br>

						<label for="email">E-mail</label>
						<input type="text" id="email" name="email" class="validate[required,custom[email]]" />
						<br>

						<input type="submit" value="Create" />
					</fieldset>
				</form>
				abc
			</div>
		</div>
		<div id="sidebar2">
			This is right bar
		</div>

		<?php $this->renderc('template/footer'); ?>