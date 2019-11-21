

<?php
include "includes/connection.php";
$userid = $_GET['id'];
$sql = "SELECT * FROM products where userid =$userid;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $image = $row["image"];
        $id = $row["productid"];
        $name = $row["name"];
        $desc = $row["description"];
        echo "<div><img src='img/$image'><a href='prdoducts.php?id=$id'>$name</a><br>$desc</div>";
    }
} else {
    echo "0 results";
}
$conn->close();