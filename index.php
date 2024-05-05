<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            body{
            background-image: url('https://www.squarexo.co.uk/wp-content/uploads/2018/03/Pokemon-1024x512.png');
            font-family: sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            padding: 20px;
            }

        </style>

        <meta charset="UTF-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">

        <center><tittle><strong>PokeAPI</strong></tittle></center>

    </head>
    <body>

    <center><h1>Pokemon</h1></center>

    <center><?php

    $ch = curl_init();
    $url = 'https://pokeapi.co/api/v2/pokemon/pikachu';

    curl_setopt($ch, CURLOPT_URL,$url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 

    $response = curl_exec($ch);

    if (curl_errno($ch)){
        $erro_msg= curl_error($ch);
        echo"Fallo en la pokedex";
        
    }
    else{
        curl_close($ch);

        $pokemon_data = json_decode($response,true);

        echo '<img src="'.$pokemon_data['sprites']['front_default'].'"alt="'. $pokemon_data['name'].'">';
        echo'<H1>'. $pokemon_data['name']. '</H1>';
        echo '<ul>';
        echo '<li><strong> Nombre: </strong>'.$pokemon_data['name']. '</li>';
        echo '<li><strong> Altura: </strong>'.$pokemon_data['height']. '</li>';
        echo '<li><strong> Anchura: </strong>'.$pokemon_data['weight']. '</li>';

        echo '<li><strong> Habilidades: </strong>';
        echo '<ul>';
        foreach ($pokemon_data['abilities'] as $ability){

            echo '<li>'. $ability['ability']['name']. '</li>';

        }
        echo '</ul>';
        echo '</li>';
        echo '</ul>';

    }
    ?> </center>

    <div>
    <center><?php

    $ch = curl_init();
    $url = 'https://pokeapi.co/api/v2/pokemon/gengar';

    curl_setopt($ch, CURLOPT_URL,$url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 

    $response = curl_exec($ch);

    if (curl_errno($ch)){
        $erro_msg= curl_error($ch);
        echo"Fallo en la pokedex";
        
    }
    else{
        curl_close($ch);

        $pokemon_data = json_decode($response,true);

        echo '<img src="'.$pokemon_data['sprites']['front_default'].'"alt="'. $pokemon_data['name'].'">';
        echo'<H1>'. $pokemon_data['name']. '</H1>';
        echo '<ul>';
        echo '<li><strong> Nombre: </strong>'.$pokemon_data['name']. '</li>';
        echo '<li><strong> Altura: </strong>'.$pokemon_data['height']. '</li>';
        echo '<li><strong> Anchura: </strong>'.$pokemon_data['weight']. '</li>';

        echo '<li><strong> Habilidades: </strong>';
        echo '<ul>';
        foreach ($pokemon_data['abilities'] as $ability){

            echo '<li>'. $ability['ability']['name']. '</li>';
            
        }
        echo '</ul>';
        echo '</li>';
        echo '</ul>';

    }
    ?> </center>
    </div>

    <div>
    <center><?php

    $ch = curl_init();
    $url = 'https://pokeapi.co/api/v2/pokemon/charmander';

    curl_setopt($ch, CURLOPT_URL,$url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 

    $response = curl_exec($ch);

    if (curl_errno($ch)){
        $erro_msg= curl_error($ch);
        echo"Fallo en la pokedex";
        
    }
    else{
        curl_close($ch);

        $pokemon_data = json_decode($response,true);

        echo '<img src="'.$pokemon_data['sprites']['front_default'].'"alt="'. $pokemon_data['name'].'">';
        echo'<H1>'. $pokemon_data['name']. '</H1>';
        echo '<ul>';
        echo '<li><strong> Nombre: </strong>'.$pokemon_data['name']. '</li>';
        echo '<li><strong> Altura: </strong>'.$pokemon_data['height']. '</li>';
        echo '<li><strong> Anchura: </strong>'.$pokemon_data['weight']. '</li>';

        echo '<li><strong> Habilidades: </strong>';
        echo '<ul>';
        foreach ($pokemon_data['abilities'] as $ability){

            echo '<li>'. $ability['ability']['name']. '</li>';
            
        }
        echo '</ul>';
        echo '</li>';
        echo '</ul>';

    }
    ?> </center>
    </div>


</body>
</html>