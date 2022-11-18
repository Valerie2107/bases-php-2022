<?php

    if(isset($_GET['pg'])){

        switch($_GET['pg']){

            //page 1
                case "short":
                include "pg/short_vowels.php";
                break;
//page 2
                case "long":
                include "pg/long_vowels.php";
                break;
//page 3
                case "alphabet":
                include "pg/alphabet.php";
                break;

//page 4
                case "introduction":
                include "pg/intro.php";
                break;
//page 5
                case "courses":
                include "pg/courses.php";
                break;
//page 6    
                case "books":
                 include "pg/books.php";
                break;
//page 7 
                case "partners":
                include "pg/partners.php";
                break;
    
//page 8    
                case "contact":
                include "pg/contact.php";
                break;

                default : 
                include "pg/404.php";
                            

                
        }
    }
    else{

        include "pg/homepage.php";
    }
    