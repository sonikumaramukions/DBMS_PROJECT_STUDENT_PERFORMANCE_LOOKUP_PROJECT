<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Style for horizontal radio buttons */
        .radio-group {
            display: flex;
            justify-content: left;
        }

        .radio-group label {
            margin-right: 20px; /* Adjust spacing between radio buttons */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Information</h2>
        <form action="fetch_data.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="enrollment">Enrollment Number:</label>
            <input type="text" id="enrollment" name="enrollment" required>
            <label>Select Option:</label>
            <div class="radio-group">
                <input type="radio" id="marks" name="option" value="marks" required>
                <label for="marks">Marks</label>
                
                <input type="radio" id="indiscipline" name="option" value="indiscipline">
                <label for="indiscipline">Indiscipline</label>
                
                <input type="radio" id="attendance" name="option" value="attendance">
                <label for="attendance">Attendance</label>
                
                <input type="radio" id="details" name="option" value="details">
                <label for="details">Student Details</label>
                
                <input type="radio" id="mentor" name="option" value="mentor">
                <label for="mentor">Student Mentor</label>
                
                <input type="radio" id="projects" name="option" value="projects">
                <label for="projects">Projects</label>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
