<?php

//Class 6.9
//WORDWRAP()

$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, reiciendis.";

//echo $string;
//echo wordwrap($string);
echo wordwrap($string,20); //BREAK THE LINE AFTER 20 WORDS.

$string = "Lorem ipsum dolor sit amet consecteturconsecteturconsectetur adipisicing elit. Laudantium, reiciendis.";
echo wordwrap($string,20,"\n",true); //BREAK THE LINE AFTER 20 WORDS if it is more than 20 words.
//echo wordwrap($string,20,"</br>",true); //BREAK THE LINE AFTER 20 WORDS if it is more than 20 words.