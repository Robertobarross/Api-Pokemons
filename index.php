<?php

function api(){
    
    $url = "https://www.canalti.com.br/api/pokemons.json";
    $pokemons = json_decode(file_get_contents($url));

    // var_dump($pokemons);
    
    foreach($pokemons->pokemon as $postar) {

        print_r("<br>id: $postar->id");
        print_r("<br>Nome: $postar->name");
        print_r("<br><img src= $postar->img /><hr>");

    }

}
$resultado =api();
return $resultado;

?>