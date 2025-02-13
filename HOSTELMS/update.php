<?php
include('connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM residents WHERE id=$id");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Resident not found.";
        exit();
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $room = $_POST['room'];
    $status = $_POST['status'];

    $sql = "UPDATE residents SET first_name='$first_name', last_name='$last_name', room='$room', status='$status' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating data: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Resident</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Hostel Management System</h1>
    </header>
    <div class="container">
        <h2>Update Resident</h2>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
            <input type="text" name="first_name" value="<?= htmlspecialchars($row['first_name']) ?>" required>
            <input type="text" name="last_name" value="<?= htmlspecialchars($row['last_name']) ?>" required>
            <input type="number" name="room" value="<?= htmlspecialchars($row['room']) ?>" required>
            <select name="status" required>
                <option value="Student" <?= $row['status'] == 'Student' ? 'selected' : '' ?>>Student</option>
                <option value="Staff" <?= $row['status'] == 'Staff' ? 'selected' : '' ?>>Staff</option>
            </select>
            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>
</html>
