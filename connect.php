<?php
ini_set('display_errors', 'Off');
$ageOptions = $_POST['ageOptions'];
$genderOptions = $_POST['genderOptions'];
$educationOptions = $_POST['educationOptions'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3A = $_POST['question3A'];
$question3B = $_POST['question3B'];
$question4 = $_POST['question4'];
$question5 = $_POST['question5'];
$question6 = $_POST['question6'];
$question7 = $_POST['question7'];
$question8 = $_POST['question8'];
$question9 = $_POST['question9'];
$question10 = $_POST['question10'];
$text1 = $_POST['text1'];
$text2 = $_POST['text2'];


$k = 0;
if (!empty($question3B)) {
    foreach ($question3B as $i) {

        if ($question3B[$k] == 'D') {
            unset($question3B[$k]);
        }
        $k = $k + 1;

    }
} else {
    $question3B = [];
}

$n = 0;
if (!empty($question5)) {
    foreach ($question5 as $i) {

        if ($question5[$n] == 'D') {
            unset($question5[$n]);
        }
        $n = $n + 1;

    }
} else {
    $question5 = [];
}

if ($question9 != null) {
    $question9 = implode(',', $question9);
}

if ($question3A != null) {
    $question3A = implode(',', $question3A);
    $question2 = 'A';
    $question3B = null;
} else {
    $question2 = 'B';
}

if (!empty($text1)) {
    array_push($question3B, $text1);
    $question3B = implode(',', $question3B);
} else {
    if ($question3B == null) {
        $question3B = Null;
    } else {
        $question3B = implode(',', $question3B);
    }
}

if (!empty($text2)) {
    array_push($question5, $text2);
    $question5 = implode(',', $question5);
} else {
    if ($question5 == null) {
        $question5 = Null;
    } else {
        $question5 = implode(',', $question5);
    }
}

$host = "localhost";
$dbname = "survey_db";
$username = "root";
$password = "";

$conn = mysqli_connect(
hostname: $host,
username: $username,
password: $password,
database: $dbname
);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO answers (ageOptions, genderOptions, educationOptions, question1, question2, question3A, question3B, question4, question5, question6, question7, question8, question9, question10)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {

    die(mysqli_error($conn));
}

mysqli_stmt_bind_param(
    $stmt,
    "ssssssssssssss",
    $ageOptions,
    $genderOptions,
    $educationOptions,
    $question1,
    $question2,
    $question3A,
    $question3B,
    $question4,
    $question5,
    $question6,
    $question7,
    $question8,
    $question9,
    $question10
);

mysqli_stmt_execute($stmt);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teşekkürler!</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            width: 100%;
            height: 100vh;
            background: #3c5077;
            background-image: url(/Survey_Form/Images/2.jpeg);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .popup {
            width: 400px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 6px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            padding: 0 30px 30px;
            color: white;
        }

        .popup img {
            width: 100px;
            margin-top: -50px;
            border-radius: 50px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .popup h2 {
            font-size: 38px;
            font-weight: 500;
            margin: 30px 0 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="popup" id="popup">
            <img src="/Survey_Form/Images/tick.jpg" alt="">
            <h2>Teşekkürler!</h2>
            <br>
            <p>Ankete katılımınız için teşekkürler.</p>
            <br>
            <p>Cevaplarınız Kaydedilmiştir!</p>
        </div>
    </div>
</body>

</html>