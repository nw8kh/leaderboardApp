<!DOCTYPE html>
<html>
	<head>
		<title>Leaderboard</title>
	</head>
	<body>
		<center>
		<table border="1">
			<caption>Leaderboard</caption>
			<tr>
				<th>Team 1</th>
				<th>Team 2</th>
				<th>Team 3</th>
				<th>Team 4</th>
				<th>Team 5</th>
				<th>Team 6</th>
				<th>Team 7</th>
				<th>Team 8</th>
				<th>Team 9</th>
				<th>Team 10</th>
				<th>Team 11</th>
				<th>Team 12</th>
				<th>Team 13</th>
				<th>Team 14</th>
				<th>Team 15</th>
				<th>Team 16</th>
				<th>Team 17</th>
				<th>Team 18</th>
				<th>Team 19</th>
				<th>Team 20</th>
				<th>Team 21</th>
				<th>Team 22</th>
				<th>Team 23</th>
				<th>Team 24</th>
				<th>Team 25</th>
				<th>Team 26</th>
				<th>Team 27</th>
				<th>Team 28</th>
				<th>Team 29</th>
				<th>Team 30</th>
			</tr>
		<?php 
		$serverName = "localhost";
		$userName = "tycho528_triviaA";
		$password = "399wuwpjrwj!!";
		$dbName = "tycho528_trivia";
		$conn = new mysqli ($serverName, $userName, $password, $dbName);
		
		if($conn->connect_error) {
			die('Connection Failed: ' .$conn->connect_error);
		}
	

		$query = "SELECT team1, team2, team3, team4, team5, team6, team7, team8, team9, team10 team11, team12, team13, team14, team15, team16, team17, team18, team19, team20, total from scores";
		$result = $conn-> query($query);
				
		if ($result-> num_rows > 0) {
			while ($row = $result-> fetch_assoc()) {
				echo "<tr><td>". $row["team1"] ."</td><td>" . $row["team2"] ."</td><td>". $row["team3"] ."</td><td>" . $row["team4"] ."</td><td>" .$row["team5"] .				"</td><td>". $row["team6"] ."</td><td>" . $row["team7"] . "</td><td>" . $row["team8"] . "</td><td>" . $row["team9"] . "</td><td>" . $row["table10"] . "</td><td>" . $row["table11"] . "</td><td>" . $row["table12"] . "</td><td>" . $row["table13"] . "</td><td>" . $row["table14"] . "</td><td>" . $row["table15"] . "</td><td>" . $row["table16"] . "</td><td>" . $row["table17"] . "</td><td>" . $row["table18"] . "</td><td>" . $row["table19"] . "</td><td>" . $row["table20"] . "</td><td>" . $row["table21"] . "</td><td>" . $row["table22"] . "</td><td>" . $row["table23"] . "</td><td>" . $row["table24"] . "</td><td>" . $row["table25"] . "</td><td>" .
$row["table26"] . "</td><td>" . $row["table27"] . "</td><td>" . $row["table28"] . "</td><td>" . $row["table29"] . "</td><td>" . $row["table30"] . "</td><td>";					
				
				
			
			}
		}
		
		echo "<th>Total1</th>";
		echo "</table></center>";
		

		?>
		
	</body>
</html>


