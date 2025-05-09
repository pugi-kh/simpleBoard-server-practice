<!DOCTYPE html>
<html>
        <head>
		<?php
		$host = 'mariadb';
		$user = 'khoon';
		$pass = '1234';
		$db = 'app';
		$conn = new mysqli($host, $user, $pass, $db);
		if($conn->connect_error){
		        die("DB Connect Error!" . $conn->connect_error);
		}
		?>
		<meta charset="utf-8"/>
                <title>My Simple Board</title>
	</head>

        <body>
		<?php
			$result = $conn->query("SELECT * FROM simple_board ORDER BY created_at DESC");
		?>
		
		<h2>Simple Board</h2>
                <a href="">작성</a>
                <a href="">수정</a>
                <table border='1' cellpadding='10'>
                        <tbody>
                                <tr>
                                        <th>NO.</th>
                                        <th>제목</th>
                                        <th>완료 여부</th>
                                        <th>생성일</th>
                                </tr>
                                <?php
	                                while($row = $result->fetch_assoc()) {
	                                        echo "<tr>";
	                                        echo "<td>{$row['no.']}</td>";
	                                        echo "<td>{$row['title']}</td>";
	                                        echo "<td>{$row['created_at']}</td>";
                                        	echo "</tr>";
                                	}
                                ?>
                        </tbody>
                </table>
        </body>
	<?php
		$conn->close();
	?>
</html>

