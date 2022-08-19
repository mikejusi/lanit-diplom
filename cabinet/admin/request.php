<?php
    $host="localhost";
    $user="root";
    $pass="";
    $dbname="lanit";

    $conn=mysqli_connect($host, $user ,$pass, $dbname);


    function users(){
    global $conn;
    $user = $conn->query("SELECT * FROM  users");
    return $user;
                
    }

    $user =  users(); 
    

    function mess(){
        global $conn;
        $ms = $conn->query("SELECT * FROM `message` WHERE userclass='other' ORDER BY `message`.`id` ASC");
        return $ms;
                    
        }
    
        $ms =  mess(); 


    function rev(){
        global $conn;
        $rv = $conn->query("SELECT * FROM `reviews`");
        return $rv;            
        }
        
        $rv =  rev(); 

    function prod(){
        global $conn;
        $pr = $conn->query("SELECT * FROM `product`");
        return $pr;            
        }
            
        $pr =  prod(); 
    
    
    ?>
