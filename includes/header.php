<!-- <div class="navbar navbar-inverse navbar-top" style="background-color: rgba(0, 0, 0, 0.7); display: flex;">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php" style="font-size: 30px; color: #edeb55; border: 3px solid black;">Mantoes</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li style="font-size: 20px;"><a href="checkout.php" style="color: white;">Checkout</a></li>
				<li style="font-size: 20px;"><a href="viewmaterials.php" style="color: white;">Available material</a></li>
				<li style="font-size: 20px;"><a href="change_prices.php" style="color: white;">Prices</a></li>
				<li style="font-size: 20px;"><a href="accounts.php" style="color: white;">Accounts</a></li>
			</ul>
		</div>
	</div>
</div> -->

<div class="topnav" id="myTopnav">
	<a href="#home" class="active">Home</a>
	<a href="#news">News</a>
	<a href="#contact">Contact</a>
	<div class="dropdown">
		<button class="dropbtn">Dropdown
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
			<a href="#">Link 1</a>
			<a href="#">Link 2</a>
			<a href="#">Link 3</a>
		</div>
	</div>
	<a href="#about">About</a>
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
	function myFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
	}
</script>
