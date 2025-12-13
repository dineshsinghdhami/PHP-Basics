<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box; 

    }
    .container{
        max-width: 80%;
        background-color: grey;
        margin: auto;   /* it make the container in the center */
        padding: 23px;   /* gives spacking between up and down */

    }

 </style>   
<body>
    <div class="container"> <h1>let's learn about php </h1>  
    <p>Vote Status:</p>
        <?php
        $age=6;
        if($age>18){
            echo "you can vote";
        }
        elseif($age==7){
            echo " you are 7 year old";
        }
         elseif($age==6){
            echo " you are 6 year old";
        }
        else {
            echo "you cannot vote"   ; 
           }

        echo "<br>";


        // array working : //arrys can hold more than one value at a time.

        $language = array("python", "c++", "php");   //it helps to add more value inside the same varibale.
        echo $language[1];        echo "<br>"; //ARRAY is the collection of the values.
        echo $language[0];  // this will print the 1 position array value.

        echo count($language);   // this will count how many items inside the array.
       echo "<br>";       echo "<br>";
         //lopps in php
        //  //while loop
        //  $a=0;
        //  while ($a <= 10) {
        //     echo "the value of a is:";
        //     echo $a;
        //     echo "<br>";
        //     $a++;
        //  }
         
        //iterating arrays in php using while loop
         $a=0;
         while ($a < count($language)) {
            echo "the value of language is:";
            echo $language[$a];
            echo "<br>";
            $a++;  
         }  //  this will print all the values inside the $language variables.
          
           //do while loop
         $a=20;
            do {
            echo "the value of a is:";  // here it execute the first value then check the other i f fail it say oh its fail and donot execute.
            echo $a;
            echo "<br>";
            $a++;
         } while ($a < 10);



         //for loop

         for ($a=9; $a <= 10; $a++) { 
             echo $a;
            echo "<br>";
         }

         //foreach loop
         foreach ($language as $value) {
            echo "<br> the value from foreach loop is:";
           echo $value;
         }

         //function:
         ECHO "<BR>";
         function print5(){
            echo "FIVE";
         }
         print5();
         echo "<br>";

         function print_num($number){
            echo "<br> your number is";
            echo $number;
         }
         print_num(46);
         print_num(6555);

echo "<br>";



        ?>

        </div>
</body>
</html>