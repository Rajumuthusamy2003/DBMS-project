<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C++ Quiz Test</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #7c13d1;
        width: 100%;
        font-size: 10px;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #cf1313;
        border-radius: 5px;
        background-color: #5cdbe4;
    }
    h1 {
        text-align: center;
        color: #eb0a2f;
    }
    h3 {
        color: rgb(4, 77, 8);
    }
    #quiz {
        margin-bottom: 20px;
    }
    #submitBtn {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #dd360d;
        color: #d0dd15;
        font-size: 16px;
        cursor: pointer;
        font-family: cursive;
        text-align: center;
    }
    #timer {
        text-align: center;
        font-size: 20px;
        font-weight: bolder;
        color: #e00bce;
        font-family: 'Times New Roman', Times, serif;
    }
</style>
</head>
<body>
<div class="container">
    <h1>C++ Quiz Test</h1>
    <div id="quiz">
        <form id="quizForm" method="post">
            <?php
            // Database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "quiz";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve questions from the database
            $sql = "SELECT * FROM cppquestions";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<li>";
                    echo "<h3>" . $row['question'] . "</h3>";
                    echo "<input type='radio' name='question" . $i . "' value='a'>" . $row['opt1'] . "<br>";
                    echo "<input type='radio' name='question" . $i . "' value='b'>" . $row['opt2'] . "<br>";
                    echo "<input type='radio' name='question" . $i . "' value='c'>" . $row['opt3'] . "<br>";
                    echo "<input type='radio' name='question" . $i . "' value='d'>" . $row['opt4'] . "<br>";
                    echo "</li>";
                    $i++;
                }
            } else {
                echo "No questions available";
            }
            $conn->close();
            ?>
            <input type="submit" id="submitBtn" value="Submit Answers">
        </form>
    </div>
    <div id="timer">Time Remaining: <span id="countdown">30:00</span></div>
</div>

<script>
    const quizForm = document.getElementById('quizForm');
    const submitBtn = document.getElementById('submitBtn');
    const countdownEl = document.getElementById('countdown');

    let secondsRemaining = 30 * 60;

    function countdown() {
        const minutes = Math.floor(secondsRemaining / 60);
        let seconds = secondsRemaining % 60;

        seconds = seconds < 10 ? '0' + seconds : seconds;

        countdownEl.textContent = `${minutes}:${seconds}`;

        if (secondsRemaining > 0) {
            secondsRemaining--;
            setTimeout(countdown, 1000);
        } else {
            alert("Time's up!");
            quizForm.removeEventListener('submit', handleFormSubmit);
        }
    }

    countdown();

    function handleFormSubmit(event) {
        event.preventDefault();

        let score = 0;

        const answers = {
            <?php
            // Retrieve correct answers from the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "quiz";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM cppquestions";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "question" . $i . ": '" . $row['copt'] . "', ";
                    $i++;
                }
            }

            $conn->close();
            ?>
        };

        for (let i = 1; i <= 10; i++) {
            const selectedOption = document.querySelector(`input[name="question${i}"]:checked`);

            if (selectedOption) {
                if (selectedOption.value === answers[`question${i}`]) {
                    score++;
                }
            }
        }

        alert(`Your score: ${score}/10`);
        window.location.href = "certificate.php"; 
    }

    quizForm.addEventListener('submit', handleFormSubmit);
</script>
</body>
</html>
