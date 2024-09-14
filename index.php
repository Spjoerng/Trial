<!DOCTYPE html>
<html>
    <title>UPFC</title>
        <style>
            * {
                font-family:'Courier New'
            }

            /* body {
                text-align: center;
            } */
            
            h1 {
                text-align: center;
            }

            h2 {
                text-align: center;
            }

            h3 {
                text-align: center;
            }

            h4 {
                text-align: center;
            }

            h5 {
                text-align: center;
            }
        </style>

    <body>

        <head>
        <?php
        echo "<h1>WELCOME TO THE URBANSHADE PANDEMONIUM FAN CLUB</h1>";
        echo "<hr>";
        $opening = "<h4>You are expendable. You are not expected to return.<br>(Unless it's for Pandemonium)</h4>";
        echo strtoupper($opening);
        echo "<hr>";
        echo "<br>";
        ?>
        </head>

        <?php
        $mob = "Pandemonium";
        echo "Why are people such $mob fanatics? <br>";
        echo "Why not? $mob is just a preacious little bean that likes minigames. <br>";
        echo "...No <br>";
        echo "Pleasejointhe$mob"."FanClub,pleaseplease.";
        echo "<br><br>";
        $userinput = "";
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" style="text-align:center">
            Will you join? <input type="text" name="response">
            <input type="submit">
        </form>
        <br>

        <!-- <div id="wrapper" style="text-align:center;">
            <label for="yes_no_radio">Will you join?</label>
            <p>
                <input type="radio" name="yes_no">Yes</input>
            </p>
            <p>
                <input type="radio" name="yes_no">No</input>
            </p>
        </div> -->
        
        <center>
        <?php 
        if(isset($_POST['response'])){
            $userinput = $_POST['response'];
        }   

        if ($userinput=="yes"){
            echo '<img src="pandemonium-pressure.gif" length="500px" width="500px">';
            echo "<br>";
            echo "<b>Pandemonium is very happy with your decision.</b><br>";
            echo "<br>";
        } 
        else if ($userinput=="no"){
            echo '<img src="pandemonium-door-30.gif">';
            echo "<br>";
        }
        ?>
        </center>



        <?php
        // $int = 13;
        // var_dump($name);

        // echo "<br>";
        // print_r($name);
        // echo "<br>";

        // function myFunction1($age){
        // return $age>=18 ? "You are allowed": "You are not allowed";
        // }
        // echo myFunction1(18);
        // echo "<br>";
        // echo "<br>";

        // function myFunction2($age) {
        //     if ($age >= 18) {
        //         return "You are allowed";
        //     } else {
        //         return "You are not allowed";
        //     }
        // }
        // echo myFunction2(18);

        // $array = [
        //     'Student1' => 'John',
        //     'Student2' => 'Mark',
        //     'Student3' => 'Peter',
        // ];
        // var_dump($array);

        // //DO WHILE
        // $num = 10;
        // do{
        //     echo 'Num'.$num. '<br>';
        //     $num--;
        // }while($num>=1);

        // //WHILE
        // echo '<br>';
        // while($num <=5){
        //     echo 'Num'. $num. '<br>';
        //     $num++;
        // }

        // //FOR
        // for($num=5; $num>=1;$num--){
        //     echo 'Num'.$num.'<br>';
        // }
        // for($num=1; $num<=5;$num++){
        //     echo 'Num'.$num.'<br>';
        // }

        // //FOREACH
        // $array = ['Aa', 'Bb', 'Cc'];
        // foreach($array as $arr){
        //     echo $arr .'<br>';
        // }

        // $array = ['The 1st Letter is' =>'Aa','The 2nd Letter is' => 'Bb','The 3rd Letter is' => 'Cc'];
        // foreach($array as $index => $arr){
        //     echo $index .'='.$arr .'<br>';
        // }

        echo"<footer>This online database is only to be accessed by Urbanshade employees and/or trusted contractors. If you are found to have shared, copied, or distributed this information to unauthorised personnel, you will be put up for instant demotion.<br><br>All individuals handling this information are required to protect it from unauthorised disclosure in the interest of the security of Urbanshade and the Urbanshade: Hadal Division.</footer>"
        ?>

    </body>

</html>
