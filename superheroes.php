<!-- ID#: 620132112
Name: Casey Willis -->

<?php

$superheroes = [
  [
      "id" => 1,
      "name" => "Steve Rogers",
      "alias" => "Captain America",
      "biography" => "Recipient of the Super-Soldier serum, World War II hero Steve Rogers fights for American ideals as one of the world’s mightiest heroes and the leader of the Avengers.",
  ],
  [
      "id" => 2,
      "name" => "Tony Stark",
      "alias" => "Ironman",
      "biography" => "Genius. Billionaire. Playboy. Philanthropist. Tony Stark's confidence is only matched by his high-flying abilities as the hero called Iron Man.",
  ],
  [
      "id" => 3,
      "name" => "Peter Parker",
      "alias" => "Spiderman",
      "biography" => "Bitten by a radioactive spider, Peter Parker’s arachnid abilities give him amazing powers he uses to help others, while his personal life continues to offer plenty of obstacles.",
  ],
  [
      "id" => 4,
      "name" => "Carol Danvers",
      "alias" => "Captain Marvel",
      "biography" => "Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.",
  ],
  [
      "id" => 5,
      "name" => "Natasha Romanov",
      "alias" => "Black Widow",
      "biography" => "Despite super spy Natasha Romanoff’s checkered past, she’s become one of S.H.I.E.L.D.’s most deadly assassins and a frequent member of the Avengers.",
  ],
  [
      "id" => 6,
      "name" => "Bruce Banner",
      "alias" => "Hulk",
      "biography" => "Dr. Bruce Banner lives a life caught between the soft-spoken scientist he’s always been and the uncontrollable green monster powered by his rage.",
  ],
  [
      "id" => 7,
      "name" => "Clint Barton",
      "alias" => "Hawkeye",
      "biography" => "A master marksman and longtime friend of Black Widow, Clint Barton serves as the Avengers’ amazing archer.",
  ],
  [
      "id" => 8,
      "name" => "T' challa",
      "alias" => "Black Panther",
      "biography" => "T’Challa is the king of the secretive and highly advanced African nation of Wakanda - as well as the powerful warrior known as the Black Panther.",
  ],
  [
      "id" => 9,
      "name" => "Thor Odinson",
      "alias" => "Thor",
      "biography" => "The son of Odin uses his mighty abilities as the God of Thunder to protect his home Asgard and planet Earth alike.",
  ],
  [
      "id" => 10,
      "name" => "Wanda Maximoff",
      "alias" => "Scarlett Witch",
      "biography" => "Notably powerful, Wanda Maximoff has fought both against and with the Avengers, attempting to hone her abilities and do what she believes is right to help the world.",
  ], 
];

?>

<ul>
<?php
   $input = $_REQUEST['query'];

        if ($input == ""){
            foreach($superheroes as $superhero){
                echo "<li>".$superhero['alias']."</li>";
            }
            
        }
        else if($input == 'Captain America' or $input == 'Steve Rogers'){
            echo "<h3>".$superheroes[0]['alias']."</h3>";
            echo "<h4> A.K.A ".$superheroes[0]['name']."</h4>";
            echo "<p>".$superheroes[0]['biography']."</p>";
            
        }
        else if($input == 'Ironman' or $input == 'Tony Stark'){
            echo "<h3>".$superheroes[1]['alias']."</h3>";
            echo "<h4> A.K.A ".$superheroes[1]['name']."</h4>";
            echo "<p>".$superheroes[1]['biography']."</p>";
        }
        else if($input == 'Spiderman' or $input == 'Peter Parker'){
            echo "<h3>".$superheroes[2]['alias']."</h3>";
            echo "<h4> A.K.A ".$superheroes[2]['name']."</h4>";
            echo "<p>".$superheroes[2]['biography']."</p>";
        }
        else if($input == 'Captain Marvel' or $input == 'Carol Danvers'){
            echo "<h3>".$superheroes[3]['alias']."</h3>";
            echo "<h4> A.K.A ".$superheroes[3]['name']."</h4>";
            echo "<p>".$superheroes[3]['biography']."</p>";
        }
        else if($input == 'Black Widow' or $input == 'Natasha Romanov'){
            echo "<h3>".$superheroes[4]['alias']."</h3>";
            echo "<h4> A.K.A ".$superheroes[4]['name']."</h4>";
            echo "<p>".$superheroes[4]['biography']."</p>";
        }
        else if($input == 'Hulk' or $input == 'Bruce Banner'){
            echo "<h3>".$superheroes[5]['alias']."</h3>";
            echo "<h4> A.K.A ".$superheroes[5]['name']."</h4>";
            echo "<p>".$superheroes[5]['biography']."</p>";
        }
        else if($input == 'Hawkeye' or $input == 'Clint Barton'){
            echo "<h3>".$superheroes[6]['alias']."</h3>";
            echo "<h4> A.K.A ".$superheroes[6]['name']."</h4>";
            echo "<p>".$superheroes[6]['biography']."</p>";
        }
        else if($input == 'Black Panther' or $input == "T'challa"){
            echo "<h3>".$superheroes[7]['alias']."</h3>";
            echo "<h4> A.K.A ".$superheroes[7]['name']."</h4>";
            echo "<p>".$superheroes[7]['biography']."</p>";
        }
        else if($input == 'Thor' or $input == 'Thor Odinson'){
            echo "<h3>".$superheroes[8]['alias']."</h3>";
            echo "<h4> A.K.A ".$superheroes[8]['name']."</h4>";
            echo "<p>".$superheroes[8]['biography']."</p>";
        }
        else if($input == 'Scarlett Witch' or $input == 'Wanda Maximoff'){
            echo "<h3>".$superheroes[9]['alias']."</h3>";
            echo "<h4> A.K.A ".$superheroes[9]['name']."</h4>";
            echo "<p>".$superheroes[9]['biography']."</p>";
        }
        else{
            echo "<h6> SUPERHERO NOT FOUND</h6>"; 
        }
    ?>

  
</ul>




    
    



