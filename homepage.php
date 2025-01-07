<?php 
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    
    <div style="text-align:center; padding: 100px;">
        <p style="font: size 100px; font-weight:bold;">
        <h1>Welcome</h1>
        

        <?php 
        if(isset($_SESSION['email'])){
            $email=$_SESSION['email'];
            $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
            while($row=mysqli_fetch_array($query)){
                echo $row['firstName'].' '.$row['lastName'];
            }
        }
        ?>
        :)
        <br>
        </p>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


        <p>
            <b>Description:<br><br>
            The site fetches and displays images of Pokémons.<br>
            Simply input the Pokémon name, and you'll instantly<br>
            see its official artwork.
            </b>
        </p>
        <input type="text" id="pokemonName" placeholder="Enter Pokemon Name">
        <button onclick="fetchData()" class="comic-button">Fetch Pokemon</button>
        <br>
        <div id="imageContainer">
            <img src="" alt="Pokemon Sprite" id="pokemonSprite" style="display: none">
        </div>


        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        

        
        <img src="images/pokemon.gif"
        height="200">
        <h5>Press play!</h5>
        <audio controls>
            <source src="audio/Pokemon.mp3">
        </audio>
    </div>
    <script src="fetchpokemon.js"></script>

    <footer>
        <hr>
        Author: Antonios Roussos<br>
        <small><a href="mailto:anto.roussos@mc-class.gr">anto.roussos@mc-class.gr</a></small>
        <a href="logout.php"><h3>Logout</h3></a>
    </footer>
</body>
</html>