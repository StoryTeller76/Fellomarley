<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youth Employment Application</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
    <header>
        <h1>Youth Employment Application</h1>
    </header>

    <section>
        <h2>Job Application</h2>
     <form action="available.php" method="post">
            <div>
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>
            <br><br>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <br><br>
            <div>
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <br><br>
            <div>
                <label for="resume">Resume/CV:</label>
                <input type="file" id="resume" name="resume" required>
            </div>
            <br><br>
            <div>
                <label for="coverLetter">Cover Letter:</label>
                <textarea id="coverLetter" name="coverLetter" required></textarea>
            </div>
            <br><br>
            
            <button type="submit" >Submit Application</button>
            </form>
        </form>
    </section>

    <p>Designed by Felix Odhiambo and Rehema Shammah &copy; 2023</p>
      <ul class="social-links">
        <li><a href="tel:+254700369300/+25458790602"><i class="fab fa-whatsapp" ></i>whatsapp <br>+254700369300</a></li><br>
        <li><a href="https://twitter.com/felixodhiambo"><i class="fab fa-twitter" ></i><br> Twitter</a></li><br>
        <li><a href="https://www.linkedin.com/in/felixodhiambo/"><i class="fab fa-linkedin" ></i><br> LinkedIn</a></li>
      </ul>
    </footer>
    </footer>

    <script src="view.js"></script>
</body>
</html>
