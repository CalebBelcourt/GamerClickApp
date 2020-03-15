<!--

Gamer Click
Caleb Belcourt T00060773
Shohei Maeda T00236394
Grant Marshall T00569969
March 13, 2020


-->

<?php
// connect to MySQL DB (example inputs used for privacy)
$conn = mysqli_connect('localhost', 'my_user', 'my_password', 'my_db');

// This will determine which player you will match with, or maybe not match any player
function match($name, $tag, $email, $comp, $hours, $timezone, $gender, $game)
{
	global $conn;

	$message = '';

	//if 'Doesn't Matter' is chosen
	if($hours == 'hoursDm' && $timezone == 'timeDm' && $gender == 'genderDm'){
		$sql = "SELECT Name, Tag, Game FROM gcUsers WHERE Competitive = '$comp' AND Game = '$game'";
	}
	else if($hours == 'hoursDm' && $timezone == 'timeDm'){
		$sql = "SELECT Name, Tag, Game FROM gcUsers WHERE Competitive = '$comp' AND Gender = '$gender' AND Game = '$game'";
	}
	else if ($timezone == 'timeDm' && $gender == 'genderDm'){
		$sql = "SELECT Name, Tag, Game FROM gcUsers WHERE Competitive = '$comp' AND Hours = '$hours' AND Game = '$game'";
	}
	else if ($hours == 'hoursDm' && $gender == 'genderDm'){
		$sql = "SELECT Name, Tag, Game FROM gcUsers WHERE Competitive = '$comp' AND Timezone = '$timezone' AND Game = '$game'";
	}
	else if($hours == 'hoursDm'){
		$sql = "SELECT Name, Tag, Game FROM gcUsers WHERE Competitive = '$comp' AND Timezone = '$timezone' AND Gender = '$gender' AND Game = '$game'";
	}
	else if($timezone == 'timeDm'){
		$sql = "SELECT Name, Tag, Game FROM gcUsers WHERE Competitive = '$comp' AND Hours = '$hours' AND Gender = '$gender' AND Game = '$game'";
	}
	else if($gender == 'genderDm'){
		$sql = "SELECT Name, Tag, Game FROM gcUsers WHERE Competitive = '$comp' AND Hours = '$hours' AND Timezone = '$timezone' AND Game = '$game'";
	}
	else{
		$sql = "SELECT Name, Tag, Game FROM gcUsers WHERE Competitive = '$comp' AND Hours = '$hours' AND Timezone = '$timezone' AND Gender = '$gender' AND Game = '$game'";
	}
	// get resulst of Query built above
    $result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) // if result set of query > 0
			while($row = $result->fetch_assoc()) { // for each row as an associative array in result put into $row
				$message = 'You matched with ' . $row["Name"] . '! Discord tag: ' . $row["Tag"] . '. Have fun playing ' . $row["Game"] . '!';
			}
  	else
			$message = 'Thank you, we will give you an email when we have found you a match!';
    return $message;

}

?>
