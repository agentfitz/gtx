<?php include("application/views/includes/header.php") ?>
	
		<h1 class="first">These are your recent entries. Notice any patterns?</h1>
		
		<ul id="entry_list">
			<li class="success">On May 12th, 2011, you ate broccoli, potatoes, fish, and eggs, and you felt slightly gassy.</li>
			<li class="success">On May 14th, 2011, you ate fish, potato chips, strawberries, and eggs, and you felt no gas.</li>
			<li class="alert">On May 21st, 2011, you ate steak, turkey, apples, and donuts, and you felt noticeably gassy.</li>
			<li class="success">On May 23rd, 2011, you ate <a href="<?php echo site_url('pages/view/report') ?>">cherries</a>, walnuts, oatmeal, celery, and rice, and you felt slightly gassy.</li>
			<li class="warning">On May 27th, 2011, you ate cake, cookies, and apples and you felt very gassy.</li>
			<li class="success">On May 30th, 2011, you ate bacon, salad, radishes, and fruitcake, and you felt slightly gassy.</li>
		</ul>		

<?php include("application/views/includes/footer.php") ?>