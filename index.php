<!-- php code w/ variable data assignment -->
<!-- internal & external php, walang inline php s situational talaga. ginagamit sa ternary operators -->
<?php
    include 'pure_php.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT BA 3101</title>
</head>
<body>
    <!--<h1>Hello World</h1>-->
    <?php
        //echo "<h1>Hello World</h1>";
    ?>

    <a href="next_page.php">Go to next page!</a>
    <a href="example2.php">Go to Example II</a>
    <a href="_connect.php">Go to Database Sample</a>

    <h2>Username: <u><?php echo $username ?></u></h2>
    <h2>User ID: <u><?php echo $user_id ?></u></h2>

    <h3>Professor: <u><?php echo $professor ?></u></h3>
    <h3>Course: <u><?php echo $course ?></u></h3>

    <button type="button" onclick="greetUser()">Greet user</button>

    <script>
        //first set of variables
        var username = "<?php echo $username ?>";
        var user_id = "<?php echo $user_id ?>";

        //second set of variables
        var professor = "<?php echo $professor ?>";
        var course = "<?php echo $course ?>";

        //functions
        function greetUser(){
            alert("Hello "+username+"! "+"Your user ID is "+user_id+"\n\nCourse: "+course+"\nProfessor: "+professor+"\n\nGoodluck :3");
        }
    </script>
</body>
</html>