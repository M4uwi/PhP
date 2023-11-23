<?php

function invalidUid($username) {
    return !preg_match("/^[a-zA-Z0-9]*$/", $username);
}

function invalidEmail($email) {
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}

function pwdMatch($pwd, $pwdRepeat) {
    return $pwd !== $pwdRepeat;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=failed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    $result = mysqli_fetch_assoc($resultData) !== null;

    mysqli_stmt_close($stmt);

    return $result;
}

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=failed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd) {
    $result = false; // Initialize the variable

    if (empty($username) || empty($pwd)) {
        $result = true;
    }

    return $result;
}


function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false || !is_array($uidExists) || !password_verify($pwd, $uidExists["usersPwd"])) {
        header("location: ../login.php?error=loginfailed");
        exit();
    }

    $pwdhashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdhashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    } else {
        session_start();

        $_SESSION["userId"] = $uidExists["usersId"];
        $_SESSION["userUid"] = $uidExists["usersUid"];

        header("location: ../index.php");
        exit();
    }
}
