<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saustudy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create Courses table
$sql = "CREATE TABLE courses 
(
    course_id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table course created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
// sql to create Semester table
$sql = "CREATE TABLE semesters 
(
    semester_id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_id  INT(2) NOT NULL,
    semester VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table Semesters created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
// sql to create Category table
$sql = "CREATE TABLE category
(
    category_id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_id  INT(2) NOT NULL,
    semester_id INT(2) NOT NULL,
    category VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table Categorys created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
// sql to create Material table
$sql = "CREATE TABLE material
(
    material_id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_id  INT(2) NOT NULL,
    semester_id INT(2) NOT NULL,
    category_id INT(2) NOT NULL,
    material VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table materials created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($conn);
?>