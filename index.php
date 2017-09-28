<?php

  $obj = new main();
  $text = "WSD Assignment on Strings and Arrays";
  $obj->stringFunction(); //Calling String function
  $obj->arrayFunction(); //Calling Array function
  

  class main {

    public function __construct(){
      echo " ";
    }

    //Printing String function results
    public function printText($text){
      print($text . '<br><hr>');
    }

    //Printing Original values for arrays
    public function printHeading($text,$original,$head){
      print("<b>$text</b><br>");
      echo "Original Value : ";
      print_r(array_values($original));
      echo "<br>$head";
    }

    //Printing array results
    public function printArray($text){
      print_r($text);
      print('<br><hr><br>');
    }


    //10 String Functions
    public function stringFunction(){

      echo '<center><h4>String Function</h4></center>';
      $obj1 = new main();

      // 1. chr 
      $charValue = chr(046);
      $value = "chr --> The character value of 046 is $charValue";
      $obj1->printText($value);

      // 2. ord
      $asciiString = "GitHub";
      $asciiValue = ord( $asciiString);
      $value = "ord --> The ASCII value of the first character of  $asciiString is $asciiValue";
      $obj1->printText($value);

      // 3. parse_str
      $str = "value1=Using&arr[]=Parse_str&arr[]=function";
      parse_str($str, $output);
      $value = "parse_str --> " . $output['value1'] ." ". $output['arr'][0] ." ". $output['arr'][1];
      $obj1->printText($value);

      // 4. sprintf
      $number = 11;
      $game = 'Cricket';
      $sentence = 'There are %d players in %s';
      $value = sprintf($sentence,$number,$game);
      $obj1->printText("sprintf --> $value");

      // 5. strrpos
      $name = strrpos("Obama", "ma");
      $obj1->printText("strrpos --> The position of ma in Obama is $name");

      // 6. strrev
      $name = "Mississipi";
      $reverse = strrev($name);
      $obj1->printText("strrev --> The reverse of $name is $reverse");

      // 7. substr
      $subValue = substr($name, 0, 4);
      $obj1->printText("substr(Mississipi,0,4) --> $subValue Granger, you have been elected as class representative!");

      // 8. substr_replace
      $replaceValue = substr_replace($game, "Buc", 0, 4);
      $obj1->printText("substr_replace --> Replacing $game with $replaceValue");      

      // 9. strip_tags
      $text = '<a href="https://www.google.com/">Go to Google</a>';
      $obj1->printText('strip_tags --> ' . strip_tags($text, '<a>'));

      // 10. strtolower
      $text = "hElLo";
      $obj1->printText("Original text -> $text, " . "Lower case : " . strtolower($text));

    }


    //10 Array functions
    public function arrayFunction(){

      $obj2 = new main();
      echo '<hr>';
      echo '<center><h4>Array Function</h4></center>';

      // 1. array_count_values
      $array = array(2,2,"hello","world",3,4);
      $obj2-> printHeading("Count the values of array : array_count_values",$array,"Count: ");
      $obj2-> printArray(array_count_values($array));

      // 2. array_diff_assoc
      $array1 = array("a" => "India", "b" => "Africa", "c" => "Asia", "Arctic");
      $array2 = array("a" => "India", "Artic", "Asia");
      $bothArrays = array("Original value is mentioned in the code");
      $obj2-> printHeading("Compare array : array_diff_assoc", $bothArrays, "Difference between Arrays: ");
      $result = array_diff_assoc($array1, $array2);
      $obj2-> printArray($result);

      // 3. array_sum
      $a = array(1,2,3,4,5,6,7,8,9);
      $obj2-> printHeading("Sum of Array : array_sum",$a,"Sum of the array: ");
      $obj2-> printArray(array_sum($a));

      // 4. array_replace
      $socialStudies = array("History", "Maths", "Geography");
      $obj2-> printHeading("Replace values - array_replace", $socialStudies, "Replacing Maths with Economics: ");
      $replaceWith = array(1=>"Economics");
      $replacement =  array_replace($socialStudies, $replaceWith);
      $obj2-> printArray($replacement);

      // 5. array_search
      $colors = array("blue","green","red");
      $key = array_search("red", $colors);
      $obj2-> printHeading("Search values - array_search",$colors, "Searching Red : ");
      $obj2-> printArray($key);

      // 6. array_shift
      $obj2-> printHeading("Shift Array Elements - array_shift",$colors,"After Shift: ");
      $shiftValue = array_shift($colors);
      $obj2-> printArray($colors);

      // 7. array_slice
      $alphabet = array("a","b","c","d","e");
      $output = array_slice($alphabet,2,3);
      $obj2-> printHeading("Slice array - array_slice",$alphabet,"After Slicing : ");
      $obj2-> printArray($output);

      // 8. array_unique
      $alphabet = array("a","b","a","d","a");
      $obj2-> printHeading("Unique -  array_unique", $alphabet, "Unique value: ");
      $result = array_unique($alphabet);
      $obj2-> printArray($result);

      // 9. range
      $a = array(1,2,3,4,5,6,7,8,9,10);
      $obj2-> printHeading("Array range - range", $a, "Range from 5-9: ");
      foreach (range(5,9) as $num) {
        print($num . "\n");
      }
      echo "<hr>";

      // 10. sort
      $obj2-> printHeading("Sort an Array - sort", $socialStudies, "After sorting:");
      sort($socialStudies);
      foreach($socialStudies as $key => $val){
        echo "Subjects [" . $key . "] = " . $val . ". \n";
      }

      echo "<hr>";
  }

    public function __destruct(){
      echo "<br> <i>Object released</i>";
    }

}

?>