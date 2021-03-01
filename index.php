<?php
session_start();

$smart1 = '<label for="a"><img src="868b2d51606830495ab76508a7aa3123.jpg" alt=""></label><input type="checkbox" name="checkbox[]" value="4" id="a"';
$smart2 = '<label for="a"><img src="95da9fdeeedb367f67b2f0b8d154a3bd.jpg" alt=""></label><input type="checkbox" name="checkbox[]" value="5" id="a"';
$smart3 = '<label for="a"><img src="bd3c7b14fb984417afaba924e18f964b.jpg" alt=""></label><input type="checkbox" name="checkbox[]" value="6" id="a"';
$smart4 = '<label for="a"><img src="f9412a7dd4d18744875864518b42a12d.jpg" alt=""></label><input type="checkbox" name="checkbox[]" value="9" id="a"';
$smart5 = '<label for="a"><img src="ffe8d7c15f38e2737b18d300e93bb1ca.jpg" alt=""></label><input type="checkbox" name="checkbox[]" value="99" id="a"';
$landLine1 = '<label for="a"><img src="0adf11d26f434f68972f92c025b8fbbd.jpg" alt=""></label><input type="checkbox" name="checkbox[]" value="1" id="a"';
$landLine2 = '<label for="a"><img src="0d2cce88ee7e5bb77f6d9d40144cc521.jpg" alt=""></label><input type="checkbox" name="checkbox[]" value="2" id="a"';
$landLine3 = '<label for="a"><img src="81ecec060af1a5e4fc1144a406ec9aca.jpg" alt=""></label><input type="checkbox" name="checkbox[]" value="3" id="a"';
$landLine4 = '<label for="a"><img src="d4c5edc28ab2e85c4e313f24702d4922.jpg" alt=""></label><input type="checkbox" name="checkbox[]" value="7" id="a"';
$landLine5 = '<label for="a"><img src="ef1784a6ccd0772768caedaf7c06f7d0.jpg" alt=""></label><input type="checkbox" name="checkbox[]" value="38" id="a"';
$arrayAll = [$smart1, $smart2, $smart3, $smart4, $smart5, $landLine1, $landLine2, $landLine3, $landLine4, $landLine5];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .top-item input {
            display: none;
        }

        img {
            margin: 30px;
        }

        input {
            margin: 0 100px 0 -100px;
        }
    </style>
</head>

<body>
    <div>
        <form action="http://localhost/nd/nd_9_mixas/index.php" method="post">
            <div>
                <?php
                shuffle($arrayAll);

                echo '<div class="top-item">' . $arrayAll[0] . 'checked></div>';
                echo '<h3>Apačioje sužymėk nuotraukas, kurios tau primena viršuje esančią nuotrauką:</h3>';
                echo '<div>' . $arrayAll[1] . '>';
                echo $arrayAll[2] . '>';
                echo $arrayAll[3] . '></div>';
                echo '<div>' . $arrayAll[4] . '>';
                echo $arrayAll[5] . '>';
                echo $arrayAll[6] . '></div>';
                echo '<div>' . $arrayAll[7] . '>';
                echo $arrayAll[8] . '>';
                echo $arrayAll[9] . '></div>';

                ?>
            </div>
            <button type="submit" name="button" value="1">Verify</button>
        </form>
    </div>
    <?php
    if (isset($_POST['checkbox']) && !isset($_SESSION['checkboxCount'])) {
        // $_SESSION['checkboxCount'] = 0;
        $_SESSION['checkboxCount'] = $_POST['checkbox'];
    }
    if (isset($_POST) && !isset($_POST['button'])) {
        echo '';
        _d(isset($_POST['button']));
        unset($_POST);
        session_destroy();
        _d('1 if\'as');        
    } else if ((isset($_SESSION['checkboxCount'])) && (count($_SESSION['checkboxCount']) == 1) && isset($_POST['button'])) {
        echo '';
        _d(isset($_POST['button']));
        unset($_POST);
        session_destroy();
               _d('2 if\'as');               
    } else if (isset($_SESSION['checkboxCount']) && (array_sum($_SESSION['checkboxCount']) == 123 || array_sum($_SESSION['checkboxCount']) == 51)) {
        echo '<h1 style="color: green">Tu žmogus</h1>';
        _d(isset($_POST['button']));
        unset($_POST);
        session_destroy();
               _d('3 if\'as');               
    } else if (isset($_SESSION['checkboxCount']) && (array_sum($_SESSION['checkboxCount']) != 123 || array_sum($_SESSION['checkboxCount']) != 51)) {
        echo '<h1 style="color: red">Tu esi robotas</h1>';
        _d(isset($_POST['button']));
        unset($_POST);
        session_destroy();
               _d('4 if\'as');               
    }
    ?>
</body>

</html>