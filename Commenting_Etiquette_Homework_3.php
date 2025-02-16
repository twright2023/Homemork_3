<!DOCTYPE html>
<html lang="en-US">
	<head>
        <meta charset="UTF-8">
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
        <title>Commenting Etiquette</title>
	</head>
    <body>

        <img src="https://avvenice.com/17144/segway-ninebot-by-segway-e-black-hoverboard-self-balanced-robot-electric-wheels.jpg" alt="A not so funny joke." title="A drawing of a character I made named Cassian." width="100">
        Nice segue right?<br>
        
        <h1>Loops.</h1> 
        <?php
            //loop 1
            function favorite_number(){
                for ($i = 1; $i <= 30; $i++) {
                    if ($i % 3 == 0) {
                        echo "$i. <br>"; //I'm afraid to put br
                    }
                }
            }
            favorite_number();
            //Prints out all numbers from 1 to 30 that are divisible by 3.

            //loop 2
            function second_favorite_number(){
                $number = range(1, 30); // Creates an range of 1 to 30. The scope is local
                foreach ($number as $e) {
                    if ($e % 3 == 0) {
                        echo "$e. <br>";
                }
            }
            }
            second_favorite_number();
            //Prints out all numbers from 1 to 30 that are divisible by 3, but different.
            //I think for was better.

            //loop 3
            // Created an indexed array with at least 3 names, hope you know some of these
            // Echo names that are longer than 5 letters. Put numbers inside boxes so you can reuse the same loop.
            function jojo_reference(){//Since I don't know how to make functions global, this function is local.
                $name = array("Bob", "Tyrell Wright", "Joseph Joestar"); //Creates the names. The scope is Local.
                while ($name){
                    if(strlen($name[0]) > 5) {
                        echo "Hello, My name is " . $name[0] . ". <br>";
                    } 
                    if (strlen($name[1]) > 5) {
                        echo "Hello, My name is " . $name[1] . ". <br>"; 
                    }
                    if (strlen($name[2]) > 5) {
                        echo "Hello, My name is " . $name[2] . ". <br>"; 
                        break;
                    }
                }
            }
            jojo_reference();
            //If the name is 5 characters longer than 5, it will print! If not, it will not print.
            // Outputting the function to check the result.

            //loop 4
            //If the name is 5 characters longer than 5, it will print! If not, it will not print.
            function diff_reference(){
                $name_re = array("Ken", "Rize", "Yoshimura");
                do {
                    if(strlen($name_re[0]) > 5) {
                        echo "Hello, My name is " . $name_re[0] . ". <br>";
                    } 
                    if (strlen($name_re[1]) > 5) {
                        echo "Hello, My name is " . $name_re[1] . ". <br>"; 
                    }
                    if (strlen($name_re[2]) > 5) {
                        echo "Hello, My name is " . $name_re[2] . ". <br>"; 
                        break;
                    }
                } while ($name_re);
            }
            diff_reference();
            // Outputting the function to check the result.
        ?>

        <h1>Arrays.</h1> 
        <?php

            //while was better and easier
            $fruits = array("Apple", "Banana", "Cherry", "Peach (my favorite)", "Plum", "Watermelon"); //Creates the fruits, this is the array. The scope is global, I figured it out!

            function fruit_of_the_day($n){
                global $fruits;
                $randomfruit = array_rand($fruits); //Array: I decided to pick array_rand, which picks a random key from the array.
                echo "Fruit of the day: " . $fruits[$randomfruit] . "! <br>"; //these brackets allow me to put multiple variables in one line of code.
            }
            fruit_of_the_day($n);
            //Prints out a random fruit of the day!

            function extra_fun_ction(){
                $evenNum = []; //Creates the numbers. The scope is Local.
                for ($n = 2; $n <= 10; $n += 2) {
                    $evenNum[] = $n;
                }
                print_r($evenNum);
            }
            extra_fun_ction();
            //Prints an array of the even numbers from one to $n where $n is a variable.
        ?>
        <h3>Links.</h3> 
        <div class="topnav">
            Link to Homework 3 in CSNLinux (Wanted to do something special):
            <a class="btn btn-primary" href="https://csnlinux.genesee.edu/~twrigh21/Week_3/Homemork_3.php" role="button">CSNLinux</a>
        </div>
        <div class="topnav">
            Link to Homework 3 and Commenting Etiqutte in Github:
            <a class="btn btn-primary" href="https://github.com/twright2023/Homemork_3.git" role="button">Github</a>
        </div>
    </body>
</html>
