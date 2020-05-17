
<?php
    // Required pokemon.class.php file for the pokemon information
    require('pokemon.class.php');

    // Start a session
    session_start();

    if(!isset($_SESSION['pokemons'])) {

        // Sets an Attack name, Attack damage and Attack Type for Pokemon Vince \\
        $atk = ['name'=>'pikniet', 'dmg'=>1000, 'type'=>'dark'];

        // Sets an Pokemon name, type, hp, dmg, weakness and recistance \\
        $vince = new Pokemon('vince', 'dark', 10000, 250, $atk, 'light', 'dark');


        // Sets an attack for Pokemon Duck \\
        $atk = ['name'=>'pschii', 'dmg'=>375, 'type'=>'light'];

        // Sets an Pokemon name, type, hp, dmg, weakness and recistance \\
        $duck = new Pokemon('duck', 'light', 10000, 130, $atk, 'dark', 'light');

        // Hold count which turn begins etc ?\\
        $_SESSION['pokemons']['1'] = $vince;
        $_SESSION['pokemons']['2'] = $duck;
        $_SESSION['turn'] = '1';
        $_SESSION['attack_log'] = array();
    }
?>