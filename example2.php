<?php 

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = htmlspecialchars($_POST['email']);
    $message = "Email Recieved: " . $email;
}

?>

<!DOCTYPE html>
<html lang="tl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Vaidation Sample</title>
</head>
<body>

    <a href="index.php">Go Back</a>

    <?php if (!empty($message)): ?>
    <p><?=$message;?></p>
    <?php endif; ?>

    <form action="" method="post" onsubmit="return validateForm()">
        <label for="email">Email Address: </label>
        <input type="text" id="email" name="email">
        <button type="submit">Submit</button>
    </form>

    <script>

        function validateForm(){
            let emailInput = document.getElementById('email').value;

            if (emailInput.trim() === "") {
                alert("All fields are REQUIRED");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>