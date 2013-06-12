<?php include 'header.php'; ?>

<div class="hero">
	<div class="container">
		<h1>Find your dream guitar</h1>
		<h2>Sell guitars and accessories &middot; Showcase your collection</h2>
		<form class="inline home_search">
			<input class="what" type="text" placeholder="What guitar are you looking for?">
			<input class="type" type="text" placeholder="All categories">
			<input class="where" type="text" placeholder="All countries">
			<button class="button" type="submit">Search</button>
		</form>
	</div>
</div>

<div class="board">
	<div class="container">
		<div class="row">
			
			<div class="span3">
				<ul class="filter unstyled">
					<li class="heading">Guitars</li>
					<li><input type="checkbox">Bass</li>
					<li><input type="checkbox">Electric</li>
					<li><input type="checkbox">Acoustic</li>
					<li><input type="checkbox">Classical</li>
					<li><input type="checkbox">Other</li>
				</ul>
				<ul class="filter unstyled">
					<li class="heading">Accessories</li>
					<li><input type="checkbox">Cases</li>
					<li><input type="checkbox">Amplifiers</li>
					<li><input type="checkbox">Effects Pedials/Units</li>
				</ul>
			</div>
			
			<div class="span9">
				
			</div>
			
		</div> <!-- row -->
	</div>
</div>
<?php include 'footer.php'; ?>