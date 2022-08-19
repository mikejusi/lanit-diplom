<?php
    $host="localhost";
    $user="root";
    $pass="";
    $dbname="lanit";

    $pdo=mysqli_connect($host, $user ,$pass, $dbname);

?>

<?php    
    function newsall(){
    global $pdo;
    $news = $pdo->query("SELECT SUBSTRING(`description`, 1, 50) AS `description`, `title`, `img` FROM `news` ORDER BY `news`.`id` DESC");
    return $news;
                
    }

    $news =  newsall();  
    function newslast(){
    global $pdo;
    $last = $pdo->query("SELECT SUBSTRING(`description`, 1, 50) AS `description`, `title`, `img` FROM `news` LIMIT 3");
    
    return $last;
                
    }

    $last =  newslast(); 
    
    
    function productcataloge(){
    global $pdo;
    $product = $pdo->query("SELECT * FROM  product");
    return $product;
                
    }

    $product =  productcataloge(); 
    
    
    function otz(){
    global $pdo;
    $reviews = $pdo->query("SELECT * FROM `reviews` WHERE status='проверено' ORDER BY `reviews`.`id` DESC LIMIT 1");
    return $reviews;
                
    }

    $reviews =  otz(); 

    function worker(){
    global $pdo;
    $sotr = $pdo->query("SELECT * FROM `worker`");
    return $sotr;
                
    }

    $sotr =  worker(); 


    error_reporting(0);
    function msg(){
    session_start();
    $name=$_SESSION['username'];

    global $pdo;
    $mees = $pdo->query("SELECT * FROM `message` WHERE name='$name' ORDER BY `message`.`id` ASC");
    return $mees;
                
    }

    $mees =  msg(); ?>