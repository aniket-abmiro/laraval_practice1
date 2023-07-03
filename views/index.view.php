<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <h1>Hello World</h1>
    <?php
    $var1 = "Aniket Pawar";
    echo $var1."hey";
   
    ?>
     <?= $var1 ?>
     <br>
     <br>
     <h2>Array</h2>
     <?php
     $books = [
        "Hail Harry",
        "Atomic Habit"

     ];

     foreach ($books as $book){
        echo "<li>$book</li>";
     }
     ?>
     <br>
     <h2>Associative Arrays</h2>
     <?php 
     $v = [
        [
            "name"=>"Aniket Pawar",
            "city"=>"Sambhajinagar"
        ],
        [
            "name"=>"Chinmay",
            "city"=>"Sangli"
        ]
     ];
     ?>
     <ul>
    
      <?php foreach ($v as $tmp) :?>
        <li> <?= $tmp["name"]; ?></li>
        <?php endforeach; ?>

      </ul>

      <br>
      <h2>Functions</h2>
      <?php
        $books = [
            [
                "name"=>"Hail Harry",
                "author"=>"jon",
                "releseYear"=>2012

            ],
            [
                "name"=>"Atomic Habit",
                "author"=>"joe",
                "releseYear"=>2020
            ]
        ]; 

        function filterByAuthor($books)
        {
            $result = [];
            foreach ($books as $book)
            {
                if($book['author'] === 'jon')
                {
                    $result[] = $book;
                }
            }
            return $result;
        }

      ?>

      <ul>
      <?php foreach (filterByAuthor($books) as $book): ?>
      <li ><?= $book['name']; ?></li>
      <?php endforeach; ?>

      </ul>


      

      
     
     
</body>
</html>
<?php 
$heading = 'About us';


// function dd($value)
// {
//     echo "<pre>";
//     var_dump($_SERVER);
//     echo "</pre>";

//     die();
// }

echo $_SERVER['REQUEST_URI'];

view('about.view.php',[
    'heading'=>'About Us'
]);
view('contact.view.php');

//var_dump(['abdbfh']);



?>