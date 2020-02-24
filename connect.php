<?php
	$serverName = "localhost";
	$userName = "tycho528_triviaA";
	$password = "399wuwpjrwj!!";
	$dbName = "tycho528_trivia";
	$conn = new mysqli ($serverName, $userName, $password, $dbName);
	
	//variables to hold team scores
	$team1 = $_POST["team1"];
	$team2 = $_POST["team2"];
	$team3 = $_POST["team3"];
	$team4 = $_POST["team4"];
	$team5 = $_POST["team5"];
	$team6 = $_POST["team6"];
	$team7 = $_POST["team7"];
	$team8 = $_POST["team8"];
	$team9 = $_POST["team9"];
	$team10 = $_POST["team10"];
	
	
	if($conn->connect_error) {
		die('Connection Failed: ' .$conn->connect_error);
	} else {
		//query to the sql db goes inside the double quotes
		$post = $conn->prepare("insert into scores(team1, team2, team3, team4, team5, team6, team7, team8, team9, team10) values(?,?,?,?,?,?,?,?,?,?)");
		
		//assigning var type to the var (i = int, d = double, s = string, b = blob)
		$post->bind_param("iiiiiiiiii", $team1, $team2, $team3, $team4, $team5, $team6, $team7, $team8, $team9, $team10);
		$post->execute();
		echo "Posted Successfully!";
		$post->close();
		$conn->close();
		
		
	}
?>