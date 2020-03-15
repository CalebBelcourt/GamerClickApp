<!--

Title: GamerClick
Author: Caleb Belcourt
Date: March 13, 2020

-->

<?php

if (empty($_POST['page'])) {  // When no page is sent from the user

    include('index.php');
	exit();
}


require('model.php');  // This file includes the database functions

// When commands come from GamePage
if ($_POST['page'] == 'GamePage')
{
      $game = $_POST['game'];
      include('view_mainpage.php');
      exit();
}

// When commands come from MainPage
else if ($_POST['page'] == 'MainPage')
{

		$match = match($_POST['name'], $_POST['tag'], $_POST['email'], $_POST['competitive'], $_POST['hours'], $_POST['time'], $_POST['gender'], $_POST['game']);
		include('view_matchpage.php');

		exit();


}

// When commands come from MatchPage
else if ($_POST['page'] == 'MatchPage')
{
		include('index.php');
		exit();

}


?>
