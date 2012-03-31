<?php include("application/views/includes/header.php") ?>
	
		<script type="text/javascript">
			$(function(){
			
				$("#sign_up_form").validate({
				
					rules: {
						name: { required: true, notEqual: "name" },
						email: { required: true, email: true, notEqual: "email address" },
						password: { required: true, notEqual: "password", minlength: 4 }
					},
					messages: {
						name: "What's your name?",
						email: { required: "your email is your login", email: "make sure it's a valid email address" },
						password: "make it tricky!"
					}
				
				});
				
				$("#sign_up_form input").on("keyup", function(){
					var isValid = $("#sign_up_form").valid();
					if(isValid){
						$(".button").button( "option", "disabled", false );
					}
				});
			
			});
		</script>
	
		<h1 class="first">Welcome to Gas Tracker</h1>
		<h2 id="tagline">Eliminate your embarrasing gas problems by figuring out which foods are causing them.</h2>
		
		<?php $this->load->helper("url"); ?>
		<form id="sign_up_form" action="<?php echo site_url('pages/view/entry_1') ?>" method="post">
		
			<div class="control">
				<input type="text" id="name" name="name" value="name" data-default-value="name" />
			</div>
			
			<div class="control">
				<input type="text" id="email" name="email" value="email address" data-default-value="email address" />
			</div>
	
			<div class="control">
				<input type="text" id="fake_password" name="fake_password" value="password" data-default-value="password" />
				<input type="password" id="password" name="password" value="" data-default-value="" />
			</div>
			
			<div class="control">
				<input type="submit" name="submit_btn" class="button" />
			</div>
		
		</form>
		
<?php include("application/views/includes/footer.php") ?>