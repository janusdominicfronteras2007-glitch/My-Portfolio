<?php
// =========================================
// DYNAMIC PROFILE DATA (PHP VARIABLES)
// =========================================
$name     = "Janus Dominic A. Fronteras";
$course   = "BSIT";
$photo    = "https://unsplash.com";
$bio      = "I am a dedicated Computer Science student who enjoys building clean, responsive websites and learning modern web technologies.";
$email    = "janusdominicfronteras2007@gmail.com";
$phone    = "+63 927 132 3020";
$location = "Tubigon, Bohol, Philippines";

$education = [
    "BS in Computer Science – State University (2024 – Present)",
    "Senior High School (STEM) – National High School (2022 – 2024)"
];  

$skills  = ["HTML5", "CSS3", "PHP", "Java"];
$hobbies = ["Coding", "Digital Games", "Playing Volleyball"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> - Profile</title>
    <style>
        /* Basic Reset & Typography */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f9;
            color: #333;
            line-height: 1.6;
        }

        /* Header & Footer */
        header, footer {
            background-color: #2563eb;
            color: white;
            text-align: center;
            padding: 1.2rem;
        }
        header h1 {
            font-size: 1.5rem;
            text-align: center;
        }

        /* Main Container */
        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
            text-align: center;
        }

        /* Card Style & Hover Effect */
        .card {
            background: white;
            border-radius: 0px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 8px rgba(0,0,0,0.06);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            text-align: center;
        }
        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.12);
            text-align: center;
        }
        .card h2 {
            color: #2563eb;
            margin-bottom: 0.8rem;
            border-bottom: 2px solid #eff6ff;
            padding-bottom: 0.4rem;
            font-size: 1.25rem;
            text-align: center;
        }

        /* Profile Top Section */
        .profile-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            text-align: center;
        }
        .profile-header img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #2563eb;
            text-align: center;
        }
        .course {
            color: #2563eb;
            font-weight: bold;
            margin-bottom: 0.5rem;
            text-align: center;
        }

        /* Lists & Skill Tags */
        ul {
            display: inline-block;
            text-align: left;
            padding-left: 1.2rem;
            margin: 0 auto;
        }
        li {
            margin-bottom: 0.4rem;
        }
        .skills-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            justify-content: center; 
        }
        .skills-list li {
            background: #eff6ff;
            color: #2563eb;
            padding: 0.4rem 0.9rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: 0.2s;
            justify-content: center;
        }
        .skills-list li:hover {
            background: #2563eb;
            color: white;
        }

        /* Mobile Responsive */
        @media (max-width: 600px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Student Portfolio</h1>
    </header>

        <div class="card profile-header">
            <img src="<?php echo $photo; ?>" alt="Profile Photo">
            <div>
                <h2><?php echo $name; ?></h2>
                <p class="course"><?php echo $course; ?></p>
                <p><?php echo $bio; ?></p>
            </div>
        </div>

        <div class="card">
            <h2>Educational Background</h2>
            <ul>
                <?php foreach ($education as $edu): ?>
                    <li><?php echo $edu; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="card">
            <h2>Skills</h2>
            <ul class="skills-list">
                <?php foreach ($skills as $skill): ?>
                    <li><?php echo $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="card">
            <h2>Hobbies & Interests</h2>
            <ul>
                <?php foreach ($hobbies as $hobby): ?>
                    <li><?php echo $hobby; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="card">
            <h2>Contact Information</h2>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Phone:</strong> <?php echo $phone; ?></p>
            <p><strong>Location:</strong> <?php echo $location; ?></p>
        </div>

    </div>

    <footer>
        <p>&copy; <?php echo date("Y") . " " . $name; ?>. All Rights Reserved.</p>
    </footer>

</body>
</html>
