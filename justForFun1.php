<html>
    <head>
        <title>Decisions</title>
    </head>
    <body>
        <?php
        if(isset ($_GET['submit'])){
            $grade1= $_GET["grade1"];
            $grade2= $_GET["grade2"];

            $average = ($grade1 + $grade2) /2;
            if($average > 89){
                print("Average score : $average <br> You got an A! <br> ");
            }
            $max= $grade1;

            if($grade1 < $grade2){
                $max = $grade2;
            }
            print ("Your max score was $max");
        }
        ?>
    </body>
</html>