<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['dalje'])) {
            include 'konekcija.php';
            $sessionNum = mysqli_insert_id($con);
            $_SESSION['sid'] = $sessionNum;         
            $rizik1 = $_POST['rizik1'];
            $rizik2  = $_POST['rizik2'];
            $rizik3 = $_POST['rizik3'];
            $rizik4 = $_POST['rizik4'];
            $rizik5 = $_POST['rizik5'];
            $sql = "UPDATE diplomski SET p9=$rizik1, p10=$rizik2, p11=$rizik3, p12=$rizik4, p13=$rizik5 WHERE 'sID'=$sessionNum" ;
            mysqli_query($con, $sql);
            header('Location: ' . 'rizik.php');          
        } 
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Rizik</title>
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
                <h2 class="text-bold text-center">Rizik vašeg ponašanja</h2>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="contentbox">
                <table class="table table-bordered">
                        <tr>
                            <th rowspan="2" class="textcentered"><h4 class="text-bold">Uobičajene situacije</h4>Sljedeća pitanja predstavljaju 
                            uobičajene situacije u kojima se možete naći dok koristite računala i internet. <br>Molim vas pažljivo pročitajte pitanja 
                            i odaberite odgovor koji vas najbolje opisuje.
                        </th>
                            <th colspan="5" class="textcentered"><h4 class="text-bold">Rizik</h4></th>
                        </tr>
                        <tr>
                            <th>nema rizika</th>
                            <th>donekle rizično</th>
                            <th>nisam siguran/na</th>
                            <th>rizično</th>
                            <th>jako rizično</th>
                        </tr>
                        <tr>
                            <td>
                                1. Koliko je rizična krađa Vašeg identiteta na Internetu (npr. putem internet bankarstva, Facebooka, e-pošte)?
                            </td>
                            <td class="text-center"><input type="radio" name="rizik1" value="1" data-toggle="tooltip" title="nema rizika"></td>
                            <td class="text-center"><input type="radio" name="rizik1" value="2" data-toggle="tooltip" title="donekle rizično"></td>
                            <td class="text-center"><input type="radio" name="rizik1" value="3" data-toggle="tooltip" title="nisam siguran/na"></td>
                            <td class="text-center"><input type="radio" name="rizik1" value="4" data-toggle="tooltip" title="rizično"></td>
                            <td class="text-center"><input type="radio" name="rizik1" value="5" data-toggle="tooltip" title="jako rizično"></td>
                        </tr>
                        <tr>
                            <td>
                                2. Koliko je rizična krađa novca s Vašeg bankovnog računa prilikom korištenja mobilnog ili interent bankarstva?
                            </td>
                            <td class="text-center"><input type="radio" name="rizik2" value="1" data-toggle="tooltip" title="nema rizika"></td>
                            <td class="text-center"><input type="radio" name="rizik2" value="2" data-toggle="tooltip" title="donekle rizično"></td>
                            <td class="text-center"><input type="radio" name="rizik2" value="3" data-toggle="tooltip" title="nisam siguran/na"></td>
                            <td class="text-center"><input type="radio" name="rizik2" value="4" data-toggle="tooltip" title="rizično"></td>
                            <td class="text-center"><input type="radio" name="rizik2" value="5" data-toggle="tooltip" title="jako rizično"></td>
                        </tr>
                        <tr>
                            <td>
                                3. Koliko je rizično hakiranje Vašeg osobnog računala, prijenosnog računala ili pametnog telefona?
                            </td>
                            <td class="text-center"><input type="radio" name="rizik3" value="1" data-toggle="tooltip" title="nema rizika"></td>
                            <td class="text-center"><input type="radio" name="rizik3" value="2" data-toggle="tooltip" title="donekle rizično"></td>
                            <td class="text-center"><input type="radio" name="rizik3" value="3" data-toggle="tooltip" title="nisam siguran/na"></td>
                            <td class="text-center"><input type="radio" name="rizik3" value="4" data-toggle="tooltip" title="rizično"></td>
                            <td class="text-center"><input type="radio" name="rizik3" value="5" data-toggle="tooltip" title="jako rizično"></td>
                        </tr>
                        <tr>
                            <td>
                                4. Koliko je rizičan gubitak Vaših privatnih fotografija ili video uradaka?
                            </td>
                            <td class="text-center"><input type="radio" name="rizik4" value="1" data-toggle="tooltip" title="nema rizika"></td>
                            <td class="text-center"><input type="radio" name="rizik4" value="2" data-toggle="tooltip" title="donekle rizično"></td>
                            <td class="text-center"><input type="radio" name="rizik4" value="3" data-toggle="tooltip" title="nisam siguran/na"></td>
                            <td class="text-center"><input type="radio" name="rizik4" value="4" data-toggle="tooltip" title="rizično"></td>
                            <td class="text-center"><input type="radio" name="rizik4" value="5" data-toggle="tooltip" title="jako rizično"></td>
                        </tr>
                        <tr>
                            <td>
                                5. Koliko je rizična zlouporaba Vaše kreditne ili debitne kartice?
                            </td>
                            <td class="text-center"><input type="radio" name="rizik5" value="1" data-toggle="tooltip" title="nema rizika"></td>
                            <td class="text-center"><input type="radio" name="rizik5" value="2" data-toggle="tooltip" title="donekle rizično"></td>
                            <td class="text-center"><input type="radio" name="rizik5" value="3" data-toggle="tooltip" title="nisam siguran/na"></td>
                            <td class="text-center"><input type="radio" name="rizik5" value="4" data-toggle="tooltip" title="rizično"></td>
                            <td class="text-center"><input type="radio" name="rizik5" value="5" data-toggle="tooltip" title="jako rizično"></td>
                        </tr>
                        </table>
                </div>
                <input type="submit" name="dalje" value="Sljedeća stranica" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>