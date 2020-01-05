<!DOCTYPE html>
<html>
<head>
	<title>SPrime Services</title>
	<link rel="stylesheet" type="text/css" href="/todolist/public/styles/header.css">
</head>
<body>

	<header id="header">
		<section class="logo"><span style="margin-right: 10px;font-size: 40px"><b style="color: red;background-color: rgb(242,242,240);">E</b>PIC</span> <b style="color: red;background-color: rgb(242,242,240);">S</b>ervices</section>
		<section class="menu-btn">
			<button onclick="toggleMenu()">Menu</button>
		</section>
		<section class="navigation" id="nav">
			<a href="../index.php">Home</a>
			<a href="notes/notes.php">Personal Notes</a>
			<a href="#">Stories</a>
			<a href="#">News Flash</a>
			<a href="#" style="color: red; background-color: rgb(242,242,240);padding: 10px 10px 10px 10px;font-weight: bolder;">Login</a>
		</section>
	</header>

	<script type="text/javascript">
		var isOpen = false;
		function toggleMenu() {
			if(!isOpen){
				header.style.height = "270px";
				setTimeout(function(){
					nav.style.opacity = "1";
					nav.style.pointerEvents = "all";
				}, 500);
				isOpen = true;
			} else {
				setTimeout(function(){
					header.style.height="90px";
				}, 800);
				nav.style.opacity = "0";
				nav.style.pointerEvents = "none";
				isOpen = false;
			}
		}
	</script>

</body>
</html>