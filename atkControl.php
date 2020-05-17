
<?php
require('pokemon.class.php');
session_start();


$attacker = $_SESSION['pokemons'][$_SESSION['turn']];

$_SESSION['turn'] = $_SESSION['turn'] == '1' ? '2' : '1';

$enemy = $_SESSION['pokemons'][$_SESSION['turn']];

$atk = $_GET['atk'];

$message = $attacker->attack($atk, $enemy);

$_SESSION['attack_log'][] = $message;

header('Location: battle.php');
?>
