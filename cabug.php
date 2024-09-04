<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .profile-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-container h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-container p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
        }

        .profile-container ul {
            list-style-type: none;
            padding: 0;
        }

        .profile-container li {
            background-color: #eee;
            margin: 5px 0;
            padding: 10px;
            border-radius: 4px;
        }

        .social-media a {
            color: #fff;
            background-color: #3b5998; /* Facebook blue */
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
            margin-right: 10px;
        }

        .social-media a.facebook {
            background-color: #00acee; /* Facebook blue */
        }

        .social-media a.instagram {
            background-color: #e4405f; /* Instagram pink */
        }

        
    </style>
</head>
<body>
    <div class="profile-container">
        <h1>User Profile</h1>

        <?php
        $name = "Mherafe Cabug";
        $address = "Purok 7 Sibaroc, Jimenez Misamis Occidental";
        $contactNumber = "09556250395";
        $hobbies = ["Reading", "Dancing","Cooking"];
        $socialMedia = [
            "facebook" => "https://www.facebook.com/mherafe.cabug?mibextid=ZbWKwL",
            "instagram" => "https://www.instagram.com/myngkaay?igsh=MW5rYnZzMWFwajQ3Nw==",
            
            
        ];
        ?>

        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Address:</strong> <?php echo $address; ?></p>
        <p><strong>Contact Number:</strong> <?php echo $contactNumber; ?></p>

        <p><strong>Hobbies:</strong></p>
        <ul>
            <?php foreach ($hobbies as $hobby): ?>
                <li><?php echo $hobby; ?></li>
            <?php endforeach; ?>
        </ul>

        <div class="social-media">
            <p><strong>Connect with me:</strong></p>
            <a href="<?php echo $socialMedia['facebook']; ?>">Facebook</a>
            <a class="instagram" href="<?php echo $socialMedia['instagram']; ?>">Instagram</a>
            
        </div>
    </div>
</body>
</html>