<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['dalje'])) {
            include 'konekcija.php';
            $sessionNum = mysqli_insert_id($con);
            $_SESSION['sid'] = $sessionNum;         
            $vaznost1 = $_POST['vaznost1'];
            $vaznost2  = $_POST['vaznost2'];
            $vaznost3 = $_POST['vaznost3'];
            $vaznost4 = $_POST['vaznost4'];
            $sql = "UPDATE diplomski SET p5=$vaznost1, p6=$vaznost2, p7=$vaznost3, p8=$vaznost4 WHERE 'sID'=$sessionNum" ;
            mysqli_query($con, $sql);
            header('Location: ' . 'rizik.php');          
        } 
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Važnost</title>
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
                <h2 class="text-bold text-center">Važnost vašeg ponašanja</h2>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="contentbox">
                <table class="table table-bordered">
                        <tr>
                            <th rowspan="2" class="textcentered"><h4 class="text-bold">Uobičajene situacije</h4>Sljedeća pitanja predstavljaju 
                            uobičajene situacije u kojima se možete naći dok koristite računala i internet. <br>Molim vas pažljivo pročitajte pitanja 
                            i odaberite odgovor koji vas najbolje opisuje.
                        </th>
                            <th colspan="5" class="textcentered"><h4 class="text-bold">Važnost</h4></th>
                        </tr>
                        <tr>
                            <th>nije važno</th>
                            <th>donekle važno</th>
                            <th>nisam siguran/na</th>
                            <th>važno</th>
                            <th>jako važno</th>
                        </tr>
                        <tr>
                            <td>
                                1. Koliko je važno održavanje zaštite na Vašoj računalnoj opremi, prijenosnom računalu i pametnom telefonu 
                                (npr. povremeno ažuriranje antispyware programa i antivirusnih softvera)?
                            </td>
                            <td class="text-center"><input type="radio" name="vaznost1" value="1" data-toggle="tooltip" title="nije važno"></td>
                            <td class="text-center"><input type="radio" name="vaznost1" value="2" data-toggle="tooltip" title="donekle važno"></td>
                            <td class="text-center"><input type="radio" name="vaznost1" value="3" data-toggle="tooltip" title="nisam siguran/na"></td>
                            <td class="text-center"><input type="radio" name="vaznost1" value="4" data-toggle="tooltip" title="važno"></td>
                            <td class="text-center"><input type="radio" name="vaznost1" value="5" data-toggle="tooltip" title="jako važno"></td>
                        </tr>
                        <tr>
                            <td>
                                2. Koliko je važno odjavljivanje sa različitih informacijskih sustav nakon završetka rada 
                                (npr. s društvenih mreža, e-pošte, vašeg prijenosnog računala i sl.)?
                            </td>
                            <td class="text-center"><input type="radio" name="vaznost2" value="1" data-toggle="tooltip" title="nije važno"></td>
                            <td class="text-center"><input type="radio" name="vaznost2" value="2" data-toggle="tooltip" title="donekle važno"></td>
                            <td class="text-center"><input type="radio" name="vaznost2" value="3" data-toggle="tooltip" title="nisam siguran/na"></td>
                            <td class="text-center"><input type="radio" name="vaznost2" value="4" data-toggle="tooltip" title="važno"></td>
                            <td class="text-center"><input type="radio" name="vaznost2" value="5" data-toggle="tooltip" title="jako važno"></td>
                        </tr>
                        <tr>
                            <td>
                                3. Koliko je važno provjeravanje prijenosnih medija (npr. CD/DVD, USB memorija i sl.) od virusa prije uporabe?
                            </td>
                            <td class="text-center"><input type="radio" name="vaznost3" value="1" data-toggle="tooltip" title="nije važno"></td>
                            <td class="text-center"><input type="radio" name="vaznost3" value="2" data-toggle="tooltip" title="donekle važno"></td>
                            <td class="text-center"><input type="radio" name="vaznost3" value="3" data-toggle="tooltip" title="nisam siguran/na"></td>
                            <td class="text-center"><input type="radio" name="vaznost3" value="4" data-toggle="tooltip" title="važno"></td>
                            <td class="text-center"><input type="radio" name="vaznost3" value="5" data-toggle="tooltip" title="jako važno"></td>
                        </tr>
                        <tr>
                            <td>
                                4. Koliko je važno povremeno mijenjanje starih lozinki, barem za usluge, programe i sustave koje učestalo koristite?
                            </td>
                            <td class="text-center"><input type="radio" name="vaznost4" value="1" data-toggle="tooltip" title="nije važno"></td>
                            <td class="text-center"><input type="radio" name="vaznost4" value="2" data-toggle="tooltip" title="donekle važno"></td>
                            <td class="text-center"><input type="radio" name="vaznost4" value="3" data-toggle="tooltip" title="nisam siguran/na"></td>
                            <td class="text-center"><input type="radio" name="vaznost4" value="4" data-toggle="tooltip" title="važno"></td>
                            <td class="text-center"><input type="radio" name="vaznost4" value="5" data-toggle="tooltip" title="jako važno"></td>
                        </tr>
                        </table>
                </div>
                <input type="submit" name="dalje" value="Sljedeća stranica" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>