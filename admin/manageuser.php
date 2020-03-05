<?php 

	require '../database/conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/manageuser.css">
	<script src="../assets/jquery.js"></script>
</head>
<body>
	<?php include 'header.php'; ?>
	<section class="admin-container">
		<?php 
			include 'sidebar.php';
		?>
		<section class="main-pannel">
			<section class="user-data-container">
				<section class="user-data-header">User Data</section>
				<section class="user-data-main">
					<div class="table-header-container">
						<div class="header-main">ID</div>
						<div class="header-main">Username</div>
						<div class="header-main">Notes</div>
						<div class="header-main">Stories</div>
						<div class="header-main">Warnings</div>
						<div class="header-main">Options</div>
					</div>
					<div class="table-data-container">
						<div class="data-main">1</div>
						<div class="data-main">TstSub</div>
						<div class="data-main">10</div>
						<div class="data-main">5</div>
						<div class="data-main">1</div>
						<div class="option-container">
							<div class="option-main">Warn</div>
							<div class="option-main">Ban</div>
							<div class="option-main">Delete</div>
						</div>
					</div>
					<div class="table-data-container">
						<div class="data-main">1</div>
						<div class="data-main">TstSub</div>
						<div class="data-main">10</div>
						<div class="data-main">5</div>
						<div class="data-main">1</div>
						<div class="option-container">
							<div class="option-main">Warn</div>
							<div class="option-main">Ban</div>
							<div class="option-main">Delete</div>
						</div>
					</div>
					<div class="table-data-container">
						<div class="data-main">1</div>
						<div class="data-main">TstSub</div>
						<div class="data-main">10</div>
						<div class="data-main">5</div>
						<div class="data-main">1</div>
						<div class="option-container">
							<div class="option-main">Warn</div>
							<div class="option-main">Ban</div>
							<div class="option-main">Delete</div>
						</div>
					</div>
					<div class="table-data-container">
						<div class="data-main">1</div>
						<div class="data-main">TstSub</div>
						<div class="data-main">10</div>
						<div class="data-main">5</div>
						<div class="data-main">1</div>
						<div class="option-container">
							<div class="option-main">Warn</div>
							<div class="option-main">Ban</div>
							<div class="option-main">Delete</div>
						</div>
					</div>
					<div class="table-data-container">
						<div class="data-main">1</div>
						<div class="data-main">TstSub</div>
						<div class="data-main">10</div>
						<div class="data-main">5</div>
						<div class="data-main">1</div>
						<div class="option-container">
							<div class="option-main">Warn</div>
							<div class="option-main">Ban</div>
							<div class="option-main">Delete</div>
						</div>
					</div>
					<div class="table-data-container">
						<div class="data-main">1</div>
						<div class="data-main">TstSub</div>
						<div class="data-main">10</div>
						<div class="data-main">5</div>
						<div class="data-main">1</div>
						<div class="option-container">
							<div class="option-main">Warn</div>
							<div class="option-main">Ban</div>
							<div class="option-main">Delete</div>
						</div>
					</div>
				</section>
			</section>
		</section>
	</section>

	<script type="text/javascript">
		window.onload = function(){
			const allDataDivs = document.getElementsByClassName('table-data-container');
			for(let i = 0; i < allDataDivs.length; i++) {
				if (i % 2 == 0) {
					allDataDivs[i].style.backgroundColor = "rgba(166,239,140,0.5)";
				} else {
					allDataDivs[i].style.backgroundColor = "rgba(70, 97, 116,0.5)";
				}
			}
		}
	</script>
</body>
</html>