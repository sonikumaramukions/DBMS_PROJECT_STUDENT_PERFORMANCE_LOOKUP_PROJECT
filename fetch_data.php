<?php
include("connection.php");

// Get user input
$name = $_POST['name'];
$enrollment = $_POST['enrollment'];
$option = $_POST['option'];

// Prepare SQL query based on selected option
if ($option == 'marks') {
    $sql = "SELECT * FROM StudentMarks WHERE StudentName='$name' AND EnrollmentNumber='$enrollment'";
    $heading = "Marks";
} elseif ($option == 'indiscipline') {
    $sql = "SELECT * FROM StudentIndiscipline WHERE StudentName='$name' AND EnrollmentNumber='$enrollment'";
    $heading = "Indiscipline";
} elseif ($option == 'attendance') {
    $sql = "SELECT * FROM StudentAttendance WHERE StudentName='$name' AND EnrollmentNumber='$enrollment'";
    $heading = "Attendance";
} elseif ($option == 'details') {
    $sql = "SELECT * FROM StudentDetails WHERE StudentName='$name' AND EnrollmentNumber='$enrollment'";
    $heading = "Student Details";
} elseif ($option == 'mentor') {
    $sql = "SELECT * FROM Studentmentor WHERE Name='$name' AND Enrollmentnumber='$enrollment'";
    $heading = "Student Mentor";
} elseif ($option == 'projects') {
    $sql = "SELECT * FROM projects WHERE name='$name' AND Enrollmentnumber='$enrollment'";
    $heading = "Projects";
} else {
    echo "Invalid option selected.";
    exit();
}

// Execute SQL query
$result = $conn->query($sql);

// Display the fetched data
if ($result->num_rows > 0) {
    echo "<h2>Results for $heading</h2>";
    echo "<table border='1'>";
    // Display column headings
    echo "<tr>";
    while ($field = $result->fetch_field()) {
        echo "<th>$field->name</th>";
    }
    echo "</tr>";
    // Display data rows
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data found for the provided input.";
}

// Close database connection
$conn->close();
?>
