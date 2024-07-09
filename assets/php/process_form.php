<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <h2>Form Submission</h2>

    <?php
    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "chaotic");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numberOfPeople = $_POST["numberOfPeople"];

        for ($i = 1; $i <= $numberOfPeople; $i++) {
            $name = $_POST["name$i"];
            $gender = $_POST["gender$i"];
            $email = $_POST["email$i"];
            $phone = $_POST["phone$i"];

            // Insert data into the database
            $sql = "INSERT INTO dtpmsn (nama, gender, email, noTelp) VALUES ('$name', '$gender', '$email', '$phone')";

            if ($conn->query($sql) === TRUE) {
                echo "Record inserted successfully for Person $i<br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Redirect to a confirmation page
        echo "<script>window.location.href = '../phpfl/pmsn.php';</script>";
    }

    $conn->close();
    ?>

    <form action="" method="POST">
        <label for="numberOfPeople">Number of People:</label>
        <input type="number" id="numberOfPeople" name="numberOfPeople" min="1" required>
        <br><br>
        
        <div id="peopleDetails">
            <!-- JavaScript will dynamically add input fields here -->
        </div>
        
        <br><br>
        <button type="submit">Submit</button>
    </form>

    <script>
        document.getElementById('numberOfPeople').addEventListener('input', function() {
            const numberOfPeople = this.value;
            const peopleDetailsDiv = document.getElementById('peopleDetails');
            peopleDetailsDiv.innerHTML = '';

            for (let i = 1; i <= numberOfPeople; i++) {
                const personDiv = document.createElement('div');
                personDiv.innerHTML = `
                    <h3>Person ${i}</h3>
                    <label for="name${i}">Name:</label>
                    <input type="text" id="name${i}" name="name${i}" required>
                    <br>
                    <label for="gender${i}">Gender:</label>
                    <input type="text" id="gender${i}" name="gender${i}" required>
                    <br>
                    <label for="email${i}">Email:</label>
                    <input type="email" id="email${i}" name="email${i}" required>
                    <br>
                    <label for="phone${i}">Phone:</label>
                    <input type="text" id="phone${i}" name="phone${i}" required>
                    <br><br>
                `;
                peopleDetailsDiv.appendChild(personDiv);
            }
        });
    </script>
</body>
</html>
