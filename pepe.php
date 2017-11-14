<html>
	<head>
		<title>Pepe caption generator</title>
	</head>
	<body>
		<?php
			echo "<h1>Pepe caption generator</h1>";

      echo "<img src='";

			$type = $_GET['type'];

			if (!is_null($type)) {
				switch ($cake) {
					case "Battenberg":
						echo "Squares!";
						break;
					case "Chocolate":
						echo "Nom!";
						break;
					case "Victoria":
						echo "Spooooooonge!";
						break;
					case "Carrot":
						echo "Too much veg!";
						break;
					default:
						echo "Not sure...";
				}
   			} else {
				echo "Choose a pepe type:";
   			}

   			echo "'>";
		?>

    <?php echo $_POST['type']; ?>

    <form name="form" action="" method="post">
        <input type="text" name="type" id="type" value="Enter caption">
    </form>
	</body>
</html>
