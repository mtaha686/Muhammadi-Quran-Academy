<?php
// Database connection
$host = 'localhost';
$dbname = 'mydatabase';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define variables and initialize with empty values
    $name = $gname = $dob = $gender = $course = $country = $contact = $email = "";

    // Process form data when the form is submitted
    $name = $_POST['MyName'];
    $gname = $_POST['MyGName'];
    $dob = $_POST['dob'];
    $gender = isset($_POST['Gender']) ? $_POST['Gender'] : "";
    $course = $_POST['course'];
    $country = $_POST['country'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    // Prepare an insert statement
    $sql = "INSERT INTO student (name, guadian_name, dob, gender, course, country, contact, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $pdo->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $gname);
        $stmt->bindParam(3, $dob);
        $stmt->bindParam(4, $gender);
        $stmt->bindParam(5, $course);
        $stmt->bindParam(6, $country);
        $stmt->bindParam(7, $contact);
        $stmt->bindParam(8, $email);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Records created successfully. Redirect to landing page
            echo '<script>alert("Form submitted successfully!");</script>';
        } else {
            echo '<script>alert("Something went wrong. Please try again later.");</script>';
        }

        // Close statement
        unset($stmt);
    } else {
        $error_message = "Database error. Please try again later.";
    }

    // Close connection
    unset($pdo);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Quran Teaching Academy">
    <meta name="keyword" content="Quran, Islam, Teaching, Online, Muslim, Academy">
    <meta name="robot" content="index, follow">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&family=Edu+TAS+Beginner&family=Inconsolata:wght@600&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>MuhammadiaQuranAcademy</title>
</head>

<body>
    <div class="Headers">
        <img src="./images/logo.png" alt="Online Quran Academy">
        <h1>
            Muhammadia Quran Academy
        </h1>
        <p>
            Quran to Recite
        </p>

    </div>
    <nav class="navbar">
        <ul class="listItem">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="courses.php">Courses</a>
            </li>
            <li>
                <a href="guide.php">Guide</a>
            </li>
            <li>
                <a class="active" href="tutor.php">Become a Tutor</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
            <li>
                <a href="login.php">Account</a>
            </li>
            <li id="search">
                <input type="search" placeholder="Seacrch Here">
            </li>
        </ul>

    </nav>

    <div class="homeBody">
        <div class="introduction">
            <img class="frame1" src="./images/frame1.png" alt="islamic frame">
            <p class="paragraphs">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae corrupti sequi cum sapiente.
                Voluptatibus sunt quae ut ipsum explicabo iusto, nostrum eveniet a. At, natus facere quis sunt voluptate
                mollitia asperiores voluptas alias dolor. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Quibusdam illo quo veritatis vitae animi cum. Alias eaque pariatur consequuntur tempora impedit autem
                odit,
                similique velit voluptates ratione officia neque, in dolorem sapiente, nobis atque non assumenda magnam
                exercitationem officiis veritatis? Iste dolorem sequi natus aspernatur commodi praesentium cumque
                tempores
            </p>
        </div>
        <div class="multimedia">
            <video class="itemMul">
                <source class="vid" src="./images/quran.mp4" type="video/mp4">
                <!-- <source class="vid" src="./images/quran.mp4" type="video/ogg"> -->
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div class="upperAdm">
        <div class="admission">
            <h1>
                GET ADMISSION
            </h1>
            <p class="paragraphs">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores minima veniam ducimus blanditiis eos
                accusantium in cumque quasi quam assumenda nihil velit aliquid, enim itaque sint. Nobis quos consectetur
                rem
                quas consequatur provident, nam accusamus possimus eveniet hic omnis voluptatibus voluptatum earum
                molestias
                recusandae dolorum.
            </p>

            <div class="getadmission">
                <?php if (isset($message)) : ?>
                    <div class="success-message"><?php echo $message; ?></div>
                <?php endif; ?>
                <?php if (isset($error_message)) : ?>
                    <div class="error-message"><?php echo $error_message; ?></div>
                <?php endif; ?>
                <form class="Form" id="admForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <label for="name">Student Name<strong style="color: red;">*</strong></label>
                    <div>
                        <input class="longbox" type="text" name="MyName" id="name" required>
                    </div>
                    <br>

                    <label for="gname">Guardian Name</label>
                    <div>
                        <input class="longbox" type="text" name="MyGName" id="gname">
                    </div>
                    <br>

                    <label for="dob">Date of Birth<strong style="color: red;">*</strong></label>
                    <div>
                        <input class="smallbox" type="date" min="1974-12-31" max="2016-12-31" name="dob" id="dob" required>
                    </div>
                    <br>

                    <div>
                        Gender<strong style="color: red;">*</strong> : <input type="radio" name="Gender" value="M" required="required"> M
                        <input type="radio" name="Gender" value="F"> F
                    </div>
                    <br>

                    <div>
                        <label for="courses">Select a Course<strong style="color: red;">*</strong> : </label>
                        <select name="course" id="course">
                            <optgroup label="Basic Course">
                                <option value="Courseb1">Course b1</option>
                                <option value="Courseb2">Course b2</option>
                                <option value="Courseb3">Course b3</option>
                            </optgroup>
                            <optgroup label="Intermediate Course">
                                <option value="Coursei1">Course i1</option>
                                <option value="Coursei2">Course i2</option>
                                <option value="Coursei3">Course i3</option>
                            </optgroup>
                            <optgroup label="Advance Course">
                                <option value="Coursea1">Course a1</option>
                                <option value="Coursea2">Course a2</option>
                                <option value="Coursea3">Course a3</option>
                            </optgroup>
                        </select>
                    </div>
                    <br>

                    <label for="country">Country<strong style="color: red;">*</strong></label>
                    <div>
                        <select id="country" name="country" required="required">
                            <!-- Populate options dynamically or manually -->
                        </select>
                    </div>
                    <br>

                    <label for="contact">Contact<strong style="color: red;">*</strong></label>
                    <div>
                        <input class="longbox" type="tel" name="contact" id="contact" required>
                    </div>
                    <br>

                    <label for="mail">E-mail<strong style="color: red;">*</strong></label>
                    <div>
                        <input class="longbox" type="email" name="email" id="email" placeholder="abc@gmail.com" required>
                    </div>
                    <br>

                    <div>
                        <button class="button" type="submit" id="Enroll">ENROLL NOW</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ------------------------------------------------------- -->
<footer>
    <div class="footer-content">
        <div class="logo-container">
            <!-- <img class="logo" src="./images/logo.png" alt="Online Quran Academy"> -->
        </div>
        <div class="text-container">
            <h1 class="brand-name">MUHAMMADIA</h1>
            <h1 class="brand-name">QURAN ACADEMY</h1>
        </div>
        <div class="contact-info">
            <p class="copyright">Copyright © 2022 Muhammadia Quran Academy. All rights reserved.</p>
            <p class="address">1009 Vía Sorella, Diamond Town, CA 91789</p>
            <p class="phone">+1 (909) 595 2401 | +1 (909) 594 1472</p>
            <p class="email">info@muhammadiaquranacademy.com</p>
        </div>
        <div class="social-links">
            <a href="#" target="_blank"><img class="social-icon" src="./images/social (1).png" alt="Instagram"></a>
            <a href="#" target="_blank"><img class="social-icon" src="./images/social (2).png" alt="Email"></a>
            <a href="#" target="_blank"><img class="social-icon" src="./images/social (3).png" alt="Facebook"></a>
            <a href="#" target="_blank"><img class="social-icon" src="./images/social (4).png" alt="WhatsApp"></a>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>

</html>
