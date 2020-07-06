    
    <?php include("includes/session.php"); ?>
    <?php include("includes/header.php"); ?>

    <h1 class="headerTxt">Pokemons</h1>

    <div class="pokeContainer row">

    <?php // Reads and shows all the pokemons and their information onscreen \\
        foreach($_SESSION['pokemons'] as $pokemon) { ?>

            <div class="small-5 columns box">

                <h2 class="small-3 columns large-centered cap">Name: <?php echo $pokemon->getName(); ?></h2>
                <h4 class="small-3 columns large-centered cap">Type: <?php echo $pokemon->getType(); ?></h4>
                <h4 class="small-3 columns large-centered cap">Max Hp: <?php echo $pokemon->getMaxHp(); ?></h4>
                <h4 class="small-3 columns large-centered cap">Current Hp: <?php echo $pokemon->getHp(); ?></h4>
                <h4 class="small-3 columns large-centered cap">Damage: <?php echo $pokemon->getDmg(); ?></h4>

                <div class="atk">

                <?php foreach($pokemon->getAtk() as $atk => $value) { ?>

                    <h4 class="small-3 columns large-centered cap">Attack <?php echo $atk.': '. $value;?></h4>

                <?php  } // End foreach loop $atk \\
                ?>

                </div>

                <h4 class="small-3 columns large-centered cap">Weakness: <?php echo $pokemon->getWeakness(); ?></h4>
                <h4 class="small-3 columns large-centered cap">Recistance: <?php echo $pokemon->getRecistance(); ?></h4>


            </div>

          <?php
          } // End foreach loop $_SESSION \\
        ?>

    </div>

    </body>
</html>
