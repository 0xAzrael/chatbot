<?php
require_once 'config.php';

function getResponse($input) {
    global $conn;
    $input = mysqli_real_escape_string($conn, $input);

    $sql = "SELECT output FROM responses WHERE input = '$input'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['output'];
    } else {
        return "I'm sorry, I don't understand that.";
    }
}
<?php
require_once 'config.php';

function getResponse($input) {
    global $conn;
    $input = mysqli_real_escape_string($conn, $input);

    $sql = "SELECT output FROM responses WHERE input = '$input'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['output'];
    } else {
        return "I'm sorry, I don't understand that.";
    }
}
<?php
require_once 'config.php';

function getResponse($input) {
    global $conn;
    $input = mysqli_real_escape_string($conn, $input);

    $sql = "SELECT output FROM responses WHERE input = '$input'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['output'];
    } else {
        return "I'm sorry, I don't understand that.";
    }
}
