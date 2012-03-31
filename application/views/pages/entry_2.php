<?php include("application/views/includes/header.php") ?>
	
		<h1 class="first">Alright! And how did you feel?</h1>
		
		<form id="sign_up_form" action="<?php echo site_url('pages/view/entry_3') ?>" method="post">
		
			<div class="control">
				<select>
					<option value="1">no gas</option>
					<option value="2">slightly gassy</option>
					<option value="3">noticably gassy</option>
					<option value="4">terribly gassy</option>
				</select>
			</div>
			<div class="control">
				<input type="submit" name="save_btn" value="save entry" class="button" />
			</div>
		
		</form>

<?php include("application/views/includes/footer.php") ?>