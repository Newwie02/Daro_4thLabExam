<?php
$fullname = $_POST['fullname'] ?? 'N/A';
$age = $_POST['age'] ?? 'N/A';
$course = $_POST['course'] ?? 'N/A';
$email = $_POST['email'] ?? 'N/A';
$gender = $_POST['gender'] ?? 'N/A';
$bio = $_POST['bio'] ?? 'No biography provided.';

$hobbies = $_POST['hobbies'] ?? [];
$hobbyList = !empty($hobbies) ? implode(", ", $hobbies) : "None selected";

// File upload 
$targetDir = "uploads/";

if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
}

$fileName = basename($_FILES["profile_image"]["name"]);
$targetFile = $targetDir . time() . "_" . $fileName; 

move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFile);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Your Profile</title>
    <style>
       /* Style CSS */
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(-45deg, #667eea, #764ba2, #6dd5fa, #2980b9);
            background-size: 400% 400%;
            font-family: 'Segoe UI', sans-serif;
        }

        .profile-card {
            width: 450px;
            padding: 30px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            color: white;
            text-align: center;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(255, 255, 255, 0.5);
            margin-bottom: 20px;
        }

        .info {
            text-align: left;
            background: rgba(0, 0, 0, 0.2);
            padding: 15px;
            border-radius: 10px;
            margin-top: 10px;
        }

        .info b {
            color: #ff7eb3;
        }

        h2 {
            margin-bottom: 10px;
        }

        .bio-box {
            margin-top: 15px;
            font-style: italic;
            font-size: 0.9em;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 10px;
        }
    </style>
</head>

<body>

    <div class="profile-card">
        <h2>Your Profile</h2>
        <img src="<?php echo $targetFile; ?>" class="profile-img" alt="Profile Image">

        <div class="info">
            <p><b>Name:</b> <?php echo htmlspecialchars($fullname); ?></p>
            <p><b>Age:</b> <?php echo htmlspecialchars($age); ?></p>
            <p><b>Course:</b> <?php echo htmlspecialchars($course); ?></p>
            <p><b>Email:</b> <?php echo htmlspecialchars($email); ?></p>
            <p><b>Gender:</b> <?php echo htmlspecialchars($gender); ?></p>
            <p><b>Hobbies:</b> <?php echo htmlspecialchars($hobbyList); ?></p>
        </div>

        <div class="bio-box">
            <b>Biography:</b><br>
            <?php echo nl2br(htmlspecialchars($bio)); ?>
        </div>

        <br>
        <button onclick="window.history.back()" style="background:none; border:1px solid white; color:white; padding:5px 10px; cursor:pointer; border-radius:5px;">Go Back</button>
    </div>

</body>

</html>
