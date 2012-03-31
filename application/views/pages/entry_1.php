<?php include("application/views/includes/header.php"); ?>
<?php $meals = array('breakfast', 'lunch', 'dinner', 'snack'); ?>
	
		<h1 class="first">Success! Now, what did you eat today?</h1>
		
		<form id="food_form" action="<?php echo site_url('pages/view/entry_2') ?>" method="post">
		
			<div class="control entry_statement">
				<p>
					For 
					<select id="meal">
						<?php for($i = 0; $i < count($meals); $i++): ?>
							<option value="<?php echo $meals[$i]; ?>"><?php echo $meals[$i]; ?></option>
						<?php endfor; ?>
					</select>				
					I ate
				</p>
				<input type="text" id="food" name="food" value="" data-default-value="" />
			</div>			
			
			<?php for($i = 0; $i < count($meals); $i++): ?>				
				<div id="<?php echo $meals[$i]; ?>_list_container" class="control food_list_container">
					<div class="meal_hdr">
						<img src="/lib/img/icons/<?php echo $meals[$i] . '.png'; ?>" /><h2><?php echo $meals[$i]; ?></h2>
					</div>
					<ul id="<?php echo $meals[$i]; ?>_list" class="food_list"></ul>
				</div>
			<?php endfor; ?>
			
			<div id="entry_button_container" class="control button_container">
				<a href="#" id="done_btn" class="button">that's all I ate today!</a>
			</div>
		
		</form>

<script>
	$(function(){
		
		var foods = ["broccoli", "asparagus", "rice", "beans", "potatoes", "tomatoes", "bread", "ice cream", "nachos"];
		var selected_food_from_list = false;
		var done_btn_clicked = false;
		
		$("input#food").autocomplete({
			source: foods,
			select: function(event, ui){
				selected_food_from_list = true;
				display_item($("#meal").val(), ui.item.value);
			},
			close: function(event, ui){
				$food = $(this);
				if(selected_food_from_list){
					$food.val("");
					selected_food_from_list = false; // reset
				}
			}
		});
		
		var display_item = function(meal, food){
				var $food_list = $("#" + meal + "_list");
				$food_list.parent().css("display", "block");
				$food_list.append("<li><img src='/lib/img/icons/delete.png' class='delete_icon' />" + food + "</li>");
				$food_list.children().stop().effect("highlight", {}, 500);
				$(".button").button("option", "disabled", false);
		};
		
		$("#food_form").submit(function(e){
			if(!done_btn_clicked){
				var $food = $("#food"),
				$meal = $("#meal");				
				display_item($meal.val(), $food.val());
				$food.val("");
				e.preventDefault();
			}
		});
		
		$("#done_btn").click(function(){
			done_btn_clicked = true;
			$("#food_form").submit();
		});
		
		$(document).on("click", ".delete_icon", function(){
			var $li = $(this).parent(),
			$ul = $li.parent();
			$li.slideUp(150, function(){
				if($ul.children().length === 1){
					$ul.parent().fadeOut(150, function(){						
						if(!$("ul.food_list:visible").length){			
							$(".button").button("option", "disabled", true);
						}
					});
				}
				$li.remove();				
			});
		});
		
		$("#food_form input").on("keyup", function(){
			var message = $("#enter_message");
			if(message.length === 0){
				var message = $("<label for='food' id='enter_message' generated='true' class='error' style='display: inline;'>type food and press enter</label>");
				$(this).after(message);
			}
		});
		
		$(document).on("mouseover", ".food_list li", function(){
			$(this).find(".delete_icon").stop().animate({ opacity: 1 }, 150);
			console.log("over");
		});
		
		$(document).on("mouseout", ".food_list li", function(){
			$(this).find(".delete_icon").stop().animate({ opacity: .5 }, 150);
			console.log("out");
		});
		
	});
</script>
<?php include("application/views/includes/footer.php") ?>