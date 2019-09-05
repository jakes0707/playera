<div id="navBarContainer">
	<nav class="navBar">

		<span role="link" tabindex="0" onpointerdown="openPage('index.php')" class="logo">
			<img src="assets/images/logo_blue.png">
		</span>


		<div class="group">

			<div class="navItem">
				<span role='link' tabindex='0' onpointerdown='openPage("search.php")' class="navItemLink">
					Search
					<img src="assets/images/icons/search.png" class="icon" alt="Search">
				</span>
			</div>

		</div>

		<div class="group">
			<div class="navItem">
				<span role="link" tabindex="0" onpointerdown="openPage('browse.php')" class="navItemLink">Browse</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onpointerdown="openPage('yourMusic.php')" class="navItemLink">Your Music</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onpointerdown="openPage('settings.php')" class="navItemLink"><?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
			</div>
		</div>

	</nav>
</div>