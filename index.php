<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .card {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
        }
        input, select {
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Student Portal</h1>

    <div class="card">
        <h2>Course Enrollment</h2>
        <form action="index.php" method="post">
            <label for="course">Select Course:</label>
            <select id="course" name="course">
                <option value="math101">Math 101</option>
                <option value="cs101">Computer Science 101</option>
                <option value="phy101">Physics 101</option>
            </select>
            <button type="submit" name="enroll">Enroll</button>
        </form>
        <?php
            if (isset($_POST['enroll'])) {
                $course = $_POST['course'];
                echo "<p>You have successfully enrolled in: $course</p>";
            }
        ?>
    </div>

    <div class="card">
        <h2>Attendance</h2>
        <form action="index.php" method="post">
            <label for="attendance">Mark Attendance:</label>
            <select id="attendance" name="attendance">
                <option value="present">Present</option>
                <option value="absent">Absent</option>
            </select>
            <button type="submit" name="mark_attendance">Mark Attendance</button>
        </form>
        <?php
            if (isset($_POST['mark_attendance'])) {
                $attendance = $_POST['attendance'];
                echo "<p>Your attendance has been marked as: $attendance</p>";
            }
        ?>
    </div>

    <div class="card">
        <h2>Schedule</h2>
        <p>Below is your course schedule:</p>
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <th>Day</th>
                <th>Course</th>
                <th>Time</th>
            </tr>
            <tr>
                <td>Monday</td>
                <td>Math 101</td>
                <td>10:00 AM - 12:00 PM</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>Computer Science 101</td>
                <td>1:00 PM - 3:00 PM</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>Physics 101</td>
                <td>9:00 AM - 11:00 AM</td>
            </tr>
        </table>
    </div>

</body>
</html>
