
    <?php include("includes/session.php"); ?>
    <?php include("includes/header.php"); ?>

    <h1 class="headerTxt">Battle</h1>

    <div class="pokeContainer row">
    <?php // Reads and shows all the pokemons and their information onscreen ?\\
        foreach($_SESSION['pokemons'] as $key => $pokemon) { ?>

            <div class="small-5 columns box">

                <h2 class="small-3 columns large-centered cap">Name: <?php echo $pokemon->getName(); ?></h2>
                <h4 class="small-3 columns large-centered cap">Max Hp: <?php echo $pokemon->getMaxHp(); ?></h4>
                <h4 class="small-3 columns large-centered cap">Current Hp: <?php echo $pokemon->getHp(); ?></h4>
                <h4 class="small-3 columns large-centered cap">Attack: <?php echo $pokemon->getAtk()['name'];?>

                <?php if($_SESSION['turn'] == $key && $pokemon->getHp() > 0){ ?>

                  ><a class="beuk" href="atkControl.php?atk_name=<?php echo $pokemon->getAtk()['name'];?>">Mep</a>

                <?php } // End if $_SESSION['turn'] ?></h4>

            </div> 

            <?php
              } //! End foreach loop $_SESSION
            ?>
    </div>

    <div class="small-3 columns large-centered cap turn">
      Player: <?php echo $_SESSION['turn']; ?> turn
    </div>

    <div class="logs">

      <?php foreach(array_reverse($_SESSION['attack_log']) as $msg){ ?>
          <?php echo $msg."<hr />"; ?>
      <?php } // End foreach $_SESSION['attack_log'] ?>

    </div>

    <?php // Reads and shows all the pokemons and their information onscreen ?\\
      foreach($_SESSION['pokemons'] as $key => $pokemon) {

       if($pokemon->getHp() == 0){ ?>
        <div class="result">

          <?php 

            foreach($_SESSION['pokemons'] as $a => $p) {

              if ($key != $a) {
                ?>

                <div class="winner cap">

                  <span class="">winner: <?php echo $p->getName(); ?></span>
                  
                </div>

                <?php
              }
            }
          ?>

          <a href="battle.php">Cyka Battle Again</a>

        </div>

        <?php session_unset(); 
              session_destroy(); 
          } // End if loop $                        
          } // End foreach loop $_SESSION ?>

    </body>
</html>
