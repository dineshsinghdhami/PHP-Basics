<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>this is my first php program</h1>

        <?php
        // define("PI", 3.14);    //CONSTANT IN PHP 
        // echo "my name is dinesh singh dhami". "<br>";
        
// //single comment one line comment

// /*Lorem ipsum dolor 
// sit amet consectetur adipisicing 
// elit. 
// Eum!*/   //this is multiple line comment


// // variables in php
// $name="dinesh";
// $age=23;
// $address="rajpur,dhangadhi";

// echo " Name of student : " . $name . "<br>";
// echo " age of student : " . $age . "<br>";
// echo "address of student : " . $address;


// //break in php
// echo "<br>";

// $variable1 = 5;
// $variable2 = 3;


// //operators in php
// echo "<h1>operators in php:</h1>";
// //arithmetic operator
// echo" <h2> arithmetic operator example :</h2>" ; 
// echo "<br>";
// echo "the value of variable 1 + variable 2 is:";
// echo $variable1 + $variable2;
// echo "<br>";
// echo "the value of variable 1 - variable 2 is:";
// echo $variable1 + $variable2;
// echo "<br>";
// echo "the value of variable 1 * variable 2 is:";
// echo $variable1 + $variable2;
// echo "<br>";
// echo "the value of variable 1 / variable 2 is:";
// echo $variable1 + $variable2;
// echo "<br>";
// echo "<br>";

// // assignment operator
// echo "<h3> assignment operator example :</h3>";
// echo "<br>";
// $newVar = $variable1;
// // $newVar += 1;
// // $newVar -= 1; 
// // $newVar *= 2;
//  $newVar /= 5;
// echo " the value of newVar is";
// echo $newVar;
// echo "<br>";
// echo "<br>";

// // comparison operator
// echo " <h3> comparison operator example</h3>"; // you can add the heading of html inside if you want
// echo "<br>";
// echo "the value of 1 == 4 is";      //vardump is used to check wheteher is it is true or false like boolean 
// echo var_dump(1==4);
// echo "<br>";
// echo "the value of 1 != 4 is";
// echo var_dump(1!=4);
// echo "<br>";
// echo "the value of 1 > 4 is";
// echo var_dump(1>4);
// echo "<br>";
// echo "the value of 1 < 4 is";
// echo var_dump(1<4);
// echo "<br>";
// echo "<br>";

// // incement/decrement
// echo " <h3> incement/decrement operator example</h3>";
// // echo $variable1++; /first print variable value then increase and then if print then increased value 
// // echo $variable1;
// // echo "<br>";

// // echo $variable1--;   //first print variable value then decrease and then if print then decreased print
// // echo "<br>";
// // echo $variable1;
// // echo "<br>";

// // echo ++$variable1;  //first increase and right now print increased
// // echo "<br>";
// // echo $variable1;
// // echo "<br>";

// echo --$variable1; //first decrease and right now print decreased
// echo "<br>";
// echo $variable1;
// echo "<br>";

// // logical
// echo " <h3> logical operator example</h3>";
// // and (&&) 
// // or (||)
// // xor 
// // not (!)

// // $myVar = (1 and 1);    //or you can try in true and false form 
// // echo "<br>";
// // echo var_dump($myVar);
// // echo "<br>";

// // $myVar = (1 and 0);
// // echo "<br>";
// // echo var_dump($myVar);
// // echo "<br>";

// $myVar = (0 and 0);
// echo "<br>";
// echo var_dump($myVar);
// echo "<br>";

// $myVar = (false || true);   //or
// echo "<br>";
// echo var_dump($myVar);
// echo "<br>";

// $myVar = (! false);   //not
// echo "<br>"; 
// echo var_dump($myVar);
// echo "<br>";

// $myVar = (true xor true);
// echo "<br>";
// echo var_dump($myVar);
// echo "<br>";


// //datatypes in php
// echo "<h1>Datatypes in PHP</h1>";
//         // 1 .string
//         // 2. integer
//         // 3. float
//         // 4. boolean
//         // 5. array
//         // 6. object

//         //string
        
        $name="dinesh singh dhami";   //string
        echo var_dump($name); 
echo "<br>";
        $age=23;    //int
        echo var_dump($age);
        echo "<br>";

         $age=23.33;    //float
        echo var_dump($age);
        echo "<br>";

         $age=true;    //boolean
        echo var_dump($age);
        echo "<br>";
        
        //CONSTANT IN PHP
 echo "<h3>constant in php </h3>";

//constant in php i.e. : whose value cannot be changed which is defined a tthe top just down the>?php
// /* like this */  define("PI", 3.14);  //
ECHO PI;  //WE HAVE DECLARED IN TOP; 




?>
        
</div>
</body>
</html>