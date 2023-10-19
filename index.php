<!-- inclusion de el script que permite realizar la conexion a bd -->
<?php include_once("includes/survey.php");  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>survey</title>
</head>
<body>
    <form class="form" action="#" method="post">
        <?php
        $survey = new Survey();
        $showResult = false;
            if (isset($_POST['language'])) {
                $showResult = true;
                $survey->setOptionSelected($_POST['language']);
                $survey->vote();
            }

            // echo $survey->getTotalVotes();
        ?>
        <h2>What is your favorite programming language?</h2>

        <?php
            if ($showResult == true) {
                $languages = $survey->showResult();
                echo '<div class="title2"> <h3> total votes : '.$survey->getTotalVotes().'</h3> </div>';

                foreach ($languages as $language) {
                    $percentage = $survey->getPercentageVotes($language['votes']);
                    include "view/view_results.php";
                }
            }else{
                //obciones de la encuesta
                include "view/view_survey.php";
            }
        ?>
        
    </form>

    <!-- prueba de la conexion a la bd-->
    <?php //$db = new DB(); $db->connect(); ?>

</body>
</html>