<!DOCTYPE HTML>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=100%"/>
		<title>Добавление</title>
		<link rel="stylesheet" href="/templates/css/style.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"> </script>
    </head>
	<body>
		<div style="content: '';display: table; clear: both;margin: 0 auto; ">
			<header style="margin: 0 auto;width: 960px">
				  <div class="container">
					<div style="padding-left: 0; padding-top: 20px; height: 96px; float: left; ">	
					  <nav>
						<ul class="main-menu">
						  <li><a href="/add/" style="font-size: 15px;">Add Phone</a></li>
						  <li><a href="/view/" style="font-size: 15px;">View phones</a></li>
						</ul>
					  </nav>
					</div>
						
				  </div>
				</header>
				
		</div>
		<?php if(isset($errors) && is_array($errors)): 
		foreach($errors as $error):?>
		<br> - <?php echo $error;
		endforeach;
		endif;?>
		
		<form class="add_number" action="" method="post" name="add_number">
			<fieldset>
				<legend>Add your phone number</legend>
					<ul>
						<li>
							 <p><strong>Option 1. Add your phone number</strong></p>
						</li>
						<li class="for_center">
							<label for="phone">Enter your PHONE:</label><br>
							<input type="text" name="phone" value="<?php echo $phone; ?>"/>
						</li>
						<li class="for_center">
							<label for="email">Enter your e-mail:</label><br>
							<input type="text" name="email" value="<?php echo $email; ?>"/><br>
							<span class="form_hint">You will be able to retrieve your phone number later on using your e-mail</span>
						</li>
						<li>
							<button class="submit" type="submit" name="submit">Submit</button>
						</li>
					</ul>
			</fieldset>
		</form>	
    </body>
</html>