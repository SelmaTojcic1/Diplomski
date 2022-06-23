<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['dalje'])) {
            include 'konekcija.php';            
            $spol = $_POST['spol'];
            $dob  = $_POST['dob'];
            $godina = $_POST['godina'];
            $sql = "INSERT INTO diplomski (spol, dob, godina) VALUES ('" . $spol . "','" . $dob . "','" . $godina . "')";
            mysqli_query($con, $sql);
            $sessionNum = mysqli_insert_id($con);
            $_SESSION['sid'] = $sessionNum;
            header('Location: ' . 'ucestalost.php');          
        } 
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Opći podaci</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <script src="javascript/jquery.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container-fluid">
            <h3></h3>
            <div class="headline">
                <h2 class="text-bold text-center">OPĆI PODACI</h2>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <p class="contentbox">
                    Spol:
                    <br/><br/>
                    <input type="radio" name="spol" value="M"/> Muško
                    <br/>
                    <input type="radio" name="spol" value="Ž"/> Žensko
                </p>
                <p class="contentbox">
                    Koliko imate godina? 
                    <br/>
                    <br/>
                    <input type="number" name="dob" value="18" min="18" max="99">
                </p>
                <p class="contentbox">
                    Koja ste godina studija?
                    <br/><br/>
                    <input type="radio" name="godina" value="1"> Prva godina preddiplomskog studija
                    <br/>
                    <input type="radio" name="godina" value="2"> Druga godina preddiplomskog studija
                    <br/>
                    <input type="radio" name="godina" value="3"> Treća godina preddiplomskog studija
                    <br/>
                    <input type="radio" name="godina" value="5"> Prva godina diplomskog studija 
                    <br/>
                    <input type="radio" name="godina" value="6"> Druga godina diplomskog studija 
                    <br/>
                </p>
                <input type="submit" name="dalje" value="Sljedeća stranica" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>