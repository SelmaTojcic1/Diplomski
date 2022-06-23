<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['dalje'])) {
            include 'konekcija.php';
            $sessionNum = mysqli_insert_id($con);
            $_SESSION['sid'] = $sessionNum;         
            $ucestalost1 = $_POST['ucestalost1'];
            $ucestalost2  = $_POST['ucestalost2'];
            $ucestalost3 = $_POST['ucestalost3'];
            $ucestalost4 = $_POST['ucestalost4'];
            $sql = "UPDATE diplomski SET p1=$ucestalost1, p2=$ucestalost2, p3=$ucestalost3, p4=$ucestalost4 WHERE 'sID'=$sessionNum" ;
            mysqli_query($con, $sql);
            header('Location: ' . 'vaznost.php');          
        } 
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Učestalost</title>
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
                <h2 class="text-bold text-center">Učestalost vašeg ponašanja</h2>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="contentbox">
                <table class="table table-bordered">
                        <tr>
                            <th rowspan="2" class="textcentered"><h4 class="text-bold">Uobičajene situacije</h4>Sljedeća pitanja predstavljaju 
                            uobičajene situacije u kojima se možete naći dok koristite računala i internet. <br>Molim vas pažljivo pročitajte pitanja 
                            i odaberite odgovor koji vas najbolje opisuje.
                        </th>
                            <th colspan="6" class="textcentered"><h4 class="text-bold">Učestalost</h4></th>
                        </tr>
                        <tr>
                            <th>nikad</th>
                            <th>rijetko</th>
                            <th>ponekad</th>
                            <th>često</th>
                            <th>uvijek</th>
                            <th>nisam siguran/na</th>
                        </tr>
                        <tr>
                            <td>
                                1. Koliko često posuđujete pristupne podatke za Vašu e-poštu (korisničko ime i lozinka) prijateljima ili rođacima?
                            </td>
                            <td class="text-center"><input type="radio" name="ucestalost1" value="1" data-toggle="tooltip" title="nikad"></td>
                            <td class="text-center"><input type="radio" name="ucestalost1" value="2" data-toggle="tooltip" title="rijetko"></td>
                            <td class="text-center"><input type="radio" name="ucestalost1" value="3" data-toggle="tooltip" title="ponekad"></td>
                            <td class="text-center"><input type="radio" name="ucestalost1" value="4" data-toggle="tooltip" title="često"></td>
                            <td class="text-center"><input type="radio" name="ucestalost1" value="5" data-toggle="tooltip" title="uvijek"></td>
                            <td class="text-center"><input type="radio" name="ucestalost1" value="6" data-toggle="tooltip" title="nisam siguran/na"></td>
                        </tr>
                        <tr>
                            <td>
                                2. Koliko često posuđujete Vaše privatne debitne ili kreditne kartice zajedno s pripadajućim PIN-om?
                            </td>
                            <td class="text-center"><input type="radio" name="ucestalost2" value="1" data-toggle="tooltip" title="nikad"></td>
                            <td class="text-center"><input type="radio" name="ucestalost2" value="2" data-toggle="tooltip" title="rijetko"></td>
                            <td class="text-center"><input type="radio" name="ucestalost2" value="3" data-toggle="tooltip" title="ponekad"></td>
                            <td class="text-center"><input type="radio" name="ucestalost2" value="4" data-toggle="tooltip" title="često"></td>
                            <td class="text-center"><input type="radio" name="ucestalost2" value="5" data-toggle="tooltip" title="uvijek"></td>
                            <td class="text-center"><input type="radio" name="ucestalost2" value="6" data-toggle="tooltip" title="nisam siguran/na"></td>
                        </tr>
                        <tr>
                            <td>
                                3. Koliko često otkrivate Vaš PIN (ne skrivajući ga ili izgovarajući ga naglas) prilikom plaćanja karticom?
                            </td>
                            <td class="text-center"><input type="radio" name="ucestalost3" value="1" data-toggle="tooltip" title="nikad"></td>
                            <td class="text-center"><input type="radio" name="ucestalost3" value="2" data-toggle="tooltip" title="rijetko"></td>
                            <td class="text-center"><input type="radio" name="ucestalost3" value="3" data-toggle="tooltip" title="ponekad"></td>
                            <td class="text-center"><input type="radio" name="ucestalost3" value="4" data-toggle="tooltip" title="često"></td>
                            <td class="text-center"><input type="radio" name="ucestalost3" value="5" data-toggle="tooltip" title="uvijek"></td>
                            <td class="text-center"><input type="radio" name="ucestalost3" value="6" data-toggle="tooltip" title="nisam siguran/na"></td>
                        </tr>
                        <tr>
                            <td>
                                4. Koliko često dajete lozinku Vaše e-pošte drugima?
                            </td>
                            <td class="text-center"><input type="radio" name="ucestalost4" value="1" data-toggle="tooltip" title="nikad"></td>
                            <td class="text-center"><input type="radio" name="ucestalost4" value="2" data-toggle="tooltip" title="rijetko"></td>
                            <td class="text-center"><input type="radio" name="ucestalost4" value="3" data-toggle="tooltip" title="ponekad"></td>
                            <td class="text-center"><input type="radio" name="ucestalost4" value="4" data-toggle="tooltip" title="često"></td>
                            <td class="text-center"><input type="radio" name="ucestalost4" value="5" data-toggle="tooltip" title="uvijek"></td>
                            <td class="text-center"><input type="radio" name="ucestalost4" value="6" data-toggle="tooltip" title="nisam siguran/na"></td>
                        </tr>
                        </table>
                </div>
                <input type="submit" name="dalje" value="Sljedeća stranica" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>