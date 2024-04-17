<?php
include 'config.php';

$term = $_GET['term']; // Get the search term

$sql = "SELECT cust_name FROM customers WHERE cust_name LIKE '%$term%'";
$result = mysqli_query($conn, $sql);

$suggestions = array();
while ($row = mysqli_fetch_assoc($result)) {
  $suggestions[] = $row['cust_name'];
}

// Output JSON response
header('Content-Type: application/json');
echo json_encode($suggestions);

// Close the database connection
$conn->close();
?>
