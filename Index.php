<!DOCTYPE html>
<html>

<head>
    <title>Personal Profile Generator</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(-45deg, #667eea, #764ba2, #6dd5fa, #2980b9);
            background-size: 400% 400%;
            animation: gradientBG 12s ease infinite;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .container {
            width: 430px;
            padding: 35px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            color: white;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            letter-spacing: 1px;
        }

        label {
            font-size: 14px;
            font-weight: 600;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: none;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
            background: rgba(255, 255, 255, 0.9);
        }

        .group {
            margin-bottom: 15px;
        }

        .options {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-top: 8px;
        }

        .options label {
            background: rgba(255, 255, 255, 0.25);
            padding: 6px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background: linear-gradient(135deg, #ff7eb3, #ff758c);
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Create Your Profile ✨</h2>
        <form action="profile.php" method="POST" enctype="multipart/form-data">
            <label>Full Name</label>
            <input type="text" name="fullname" required>

            <label>Age</label>
            <input type="number" name="age" required>

            <label>Course / Program</label>
            <input type="text" name="course" required>

            <label>Email Address</label>
            <input type="email" name="email" required>

            <div class="group">
                <label>Gender</label>
                <div class="options">
                    <label><input type="radio" name="gender" value="Male" required> Male</label>
                    <label><input type="radio" name="gender" value="Female"> Female</label>
                </div>
            </div>

            <div class="group">
                <label>Hobbies</label>
                <div class="options">
                    <label><input type="checkbox" name="hobbies[]" value="Reading"> Reading</label>
                    <label><input type="checkbox" name="hobbies[]" value="Gaming"> Gaming</label>
                    <label><input type="checkbox" name="hobbies[]" value="Sports"> Sports</label>
                    <label><input type="checkbox" name="hobbies[]" value="Music"> Music</label>
                    <label><input type="checkbox" name="hobbies[]" value="Traveling"> Traveling</label>
                    <label><input type="checkbox" name="hobbies[]" value="Coding"> Coding</label>
                </div>
            </div>

            <label>Short Biography</label>
            <textarea name="bio" rows="4"></textarea>

            <label>Upload Profile Image</label>
            <input type="file" name="profile_image" accept="image/*" required>

            <button type="submit">Submit Now</button>
        </form>
    </div>
</body>

</html>
