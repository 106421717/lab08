<?php
    require_once "settings.php";
    $conn = @mysqli_connect ($host,$user,$pwd,$sql_db);

    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    if ($conn) {
        $query = "SELECT * FROM cars ";
        $result = mysqli_query($conn,$query);
        if ($result) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Make</th><th>Model</th><th>Price</th><th>YOM</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['cars_id'] . "</td>";
                echo "<td>" . $row['make'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['yom'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
         echo "<p>There are no cars to display.</p>";
        }
    }
?>