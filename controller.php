<?php

$servername = "localhost;3307";
$username = "root";
$password = "";
$dbname = "anascomark";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define a function to fetch student data and return it as an array of dictionaries
function getStudentData() {
    global $conn;

    $studentList = array();

    $query = "SELECT student_id, first_name, last_name, gender FROM table_student_information1";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $student = array(
                "StudentID" => $row["student_id"],
                "FirstName" => $row["first_name"],
                "LastName" => $row["last_name"],
                "Gender" => $row["gender"]
            );
            $studentList[] = $student;
        }
    }

    return $studentList;
}

// Insert a new student record
function insertStudent($newStudentID, $newFirstName, $newLastName, $newGender) {
    global $conn;

    $query = "INSERT INTO table_student_information1 (student_id, first_name, last_name, gender) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $newStudentID, $newFirstName, $newLastName, $newGender);
    $stmt->execute();
}

// Update an existing student record
function updateStudent($newStudentID, $newFirstName, $newLastName, $newGender) {
    global $conn;

    $query = "UPDATE table_student_information1 SET first_name = ?, last_name = ?, gender = ? WHERE student_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $newFirstName, $newLastName, $newGender, $newStudentID);
    $stmt->execute();
}

// Delete the database (be cautious with this operation)
function deleteDatabase() {
    global
