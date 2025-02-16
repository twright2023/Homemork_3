<?php
    echo "<!DOCTYPE html>
    <html lang='en-US'>
        <head>
            <meta charset='UTF-8'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
            <style>
                    h1 {text-align: center;}
                    p {text-align: center;}
            </style>
            <title>This is my Homework 3.</title>
        </head>

        <body>
            <h1>Homework 3!</h1>
            <form action='Commenting_Etiquette_Homework_3.php' method='post' class='Sign-Up'>
            <p>
                Four loops, . There are no challeges done.
            </p>
            <div> 
                <fieldset>
                    <button type='submit' name='button2' id = 'button2' class='btn btn-primary'>Look at this segue!</button>
                </fieldset> 
            </div>
        </body>
    </html>";

    function favorite_number(){
        for ($i = 1; $i <= 30; $i++) {
            if ($i % 3 == 0) {
                echo "$i. <br>";
            }
        }
    }
    favorite_number();

    function second_favorite_number(){
        $number = range(1, 30); // Creates an range of 1 to 30. The scope is local
        foreach ($number as $e) {
            if ($e % 3 == 0) {
                echo "$e. <br>";
          }
      }
    }
    second_favorite_number();

    //I think for was better.

    //loop 3
    // Created an indexed array with at least 3 names, hope you know some of these
    function jojo_reference(){
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

    //loop 4
    function diff_reference(){
        $name_re = array("Ken", "Rize", "Yoshimura"); //Little rant, but if you ever seen Tokyo Ghoul (final season spoilers), how did Rize come back? How, did she store her consciousness in her kagune, I’m so confused.
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
    //If the name is 5 characters longer than 5, it will print! If not, it will not print.

    //while was better and easier
    $fruits = array("Apple", "Banana", "Cherry", "Peach (my favorite)", "Plum", "Watermelon"); //Creates the fruits, this is the array. The scope is global, I figured it out!

    function fruit_of_the_day(){
        //Array: I decided to pick array_rand, which picks a random key from the array.
        global $fruits;
        $randomfruit = array_rand($fruits);
        echo "Fruit of the day: " . $fruits[$randomfruit] . "! <br>"; //these brackets allow me to put multiple variables in one line of code.
    }
    fruit_of_the_day($n);

    function extra_fun_ction(){
        $evenNum = []; //Creates the numbers. The scope is Local.
        for ($n = 2; $n <= 10; $n += 2) {
            $evenNum[] = $n;
        }
        print_r($evenNum);
    }
    extra_fun_ction();
?>

