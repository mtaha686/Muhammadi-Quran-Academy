<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Quran Teaching Academy">
    <meta name="keyword" content="Quran, Islam, Teaching, Online, Muslim, Academy">
    <meta name="robot" content="index, follow">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleTutor.css">
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
                <input type="search" placeholder="Search Here">
            </li>
        </ul>

    </nav>
    <!-- ----------------------------------------------------- -->
    <div class="tutorSection">
        <h2 class="headings">
            Become a Tutor
        </h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque officiis error aliquid distinctio
            commodi tempore ipsum possimus, delectus reprehenderit nostrum corporis ad iure neque totam quam earum
            repellat excepturi. Eius laudantium enim ea asperiores non. Est, tempora sint, beatae error pariatur
            asperiores voluptatum, dignissimos voluptate iure commodi eveniet reprehenderit doloribus minima obcaecati
            provident nostrum!
        </p>
        <h2 class="headings">
            Eligibility Criteria
        </h2>
        <ol>
            <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda id quis dolor unde. Beatae
                voluptatem nisi reprehenderit hic dolorum, natus ipsum maxime excepturi ex cum rem est, rerum, fugit
                quasi at aliquid quae unde distinctio perferendis consequuntur
            </li>
            <li> Lorem ipsum dolo natus ipsum maxime excepturi ex cum rem est, rerum, fugit
                quasi at aliquid quae unde distinctio perferendis consequuntur in neque. Cumque, libero.
            </li>
            <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda id quis dolor unde. Beatae
                voluptatem nisi reprehenderit hics consequuntur in neque. Cumque, libero. Lorem ipsum
                dolor sit amet consectetur adipisicing elit. At.
            </li>
            <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda id quis dolor unde. Beatae
                voluptatem nisi reprehenderit hic doctio perferendis consequuntur in neque. Cumque, libero. Lorem ipsum
                dolor sit amet consectetur adipisicus tempore accusantium voluptatum
                maxime possimus vero omnis facilis officiis fugit doloremque!
            </li>
            <li> Lorem ipsum dolor sit amet consecdolorum, natus ipsum maxime excepturi ex cum rem est, rerum, fugit
                quasi at aliquid quae unde distinctio perfereque. Cumque, libero.
            </li>
            <li> Lorem ipsum dolor sit amet consecdolo reprehenderit hic doctio perferendis consequuntur in neque. Cumque, libero. Lorem ipsum
                dolor sit amet consectetur adipisicus tempore accusantium voluptatum
                maxime possimus vero omnis facilis officiis fugit drum, natus ipsum maxime excepturi ex cum rem est, rerum, fugit
                quasi at aliquid quae unde distinctio perfereque. Cumque, libero. 
            </li>
        </ol>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="tutorForm" method="post">
            <label for="name">Name<strong style="color: red;">*</strong></label>
            <div>
                <input class="longBoxT" type="text" name="MyName" id="name" required>
            </div>

            <label for="qualification">Education<strong style="color: red;">*</strong></label>
            <div>
                <input class="longBoxT" type="text" name="education" placeholder="BA in Islamic Studies" required>
            </div>

            <label for="dob">Date of Birth<strong style="color: red;">*</strong></label>
            <div>
                <input class="smallbox" type="date" min="1974-12-31" max="2001-12-31" name="dob" id="dob" required>
            </div>

            <div>
                <label for="gender">Gender<strong style="color: red;">*</strong> : </label>
                <input type="radio" name="Gender" value="M" required="required"> M
                <input type="radio" name="Gender" value="F"> F
            </div>

            <label for="country">Country<strong style="color: red;">*</strong></label>
                <div>
                    <select id="country" name="country" required="required">
                        <!-- Populate options dynamically or manually -->
                    </select>
                </div>
        

            <label for="courses">Course You Want to Teach<strong style="color: red;">*</strong></label>
            <div>
                <select name="course" id="course" multiple required>
                    <optgroup label="Basic Course">
                        <option value="Courseb1">Course b1</option>
                        <option value="Courseb2">Course b2</option>
                        <option value="Courseb2">Course b3</option>
                    </optgroup>
                    <optgroup label="Intermediate Course" multiple>
                        <option value="Coursei1">Course i1</option>
                        <option value="Coursei2">Course i2</option>
                        <option value="Coursei2">Course i3</option>
                    </optgroup>
                    <optgroup label="Advance Course" multiple>
                        <option value="Coursea1">Course a1</option>
                        <option value="Coursea2">Course a2</option>
                        <option value="Coursea2">Course a3</option>
                    </optgroup>
                </select>
            </div>

            <label for="contact">Contact No<strong style="color: red;">*</strong></label>
            <div>
                <input class="longBoxT" type="tel" name="contact" required>
            </div>

            <label for="email">E-mail<strong style="color: red;">*</strong></label>
            <div>
                <input class="longBoxT" type="email" name="Myemail" placeholder="abc@gmal.com" required>
            </div>


            <button class="btnTutor" type="submit">Join Now</button>

        </form>
    </div>
    <!-- ------------------------------------------------------------- -->
    <footer class="tutorFooter">
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
      
    <!-- ---------------------------------------------------------- -->
    <script src="js/script.js"></script>

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
        die("ERROR: Could not connect. " . $e->getMessage());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Define variables and initialize with empty values
        $name = $education = $dob = $gender = $country = $course = $contact = $email = "";

        // Process form data when the form is submitted
        $name = $_POST['MyName'];
        $education = $_POST['education'];
        $dob = $_POST['dob'];
        $gender = isset($_POST['Gender']) ? $_POST['Gender'] : "";
        $country = $_POST['country'];
        $course = $_POST['course'];
        $contact = $_POST['contact'];
        $email = $_POST['Myemail'];

        // Prepare an insert statement
        $sql = "INSERT INTO tutors (name, education, dob, gender, country, course, contact, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = $pdo->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $education);
            $stmt->bindParam(3, $dob);
            $stmt->bindParam(4, $gender);
            $stmt->bindParam(5, $country);
            $stmt->bindParam(6, $course);
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
        }

        // Close connection
        unset($pdo);
    }
    ?>

</body>

</html>
