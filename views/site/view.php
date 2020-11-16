<!DOCTYPE HTML>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=100%"/>
		<title>Вывод</title>
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
		<form class="view_number" action="" method="post" name="view_number">
			<fieldset>
				<legend>Retrieve your phone number</legend>
					<ul>
						<li>
							 <p><strong>Option 2. Retrieve your phone number</strong></p>
						</li>
						<li class="for_center">
							<label for="email">Enter your e-mail:</label><br>
							<input type="text" name="email" /><br>
							<span class="form_hint">The phone number will be e-malled to you</span>
						</li>
						<li>
							<button class="submit" type="submit">Submit</button>
						</li>
						<?php foreach($phoneList as $phoneItem):?>
						<li>
							<?php echo $phoneItem['phone']; ?>
						</li>
						<?php endforeach; ?>
					</ul>
			</fieldset>
		</form>	
    </body>
</html>