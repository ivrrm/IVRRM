<?php
include "includes/connection.php";

$sql = "SELECT id, shopname FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $shopid = $row["id"];
        $shopname = $row["shopname"];
        echo "<a href='products.php?id=$shopid'>$shopname</a><br>";
    }
} else {
    echo "0 results";
}
$conn->close();