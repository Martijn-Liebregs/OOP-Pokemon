<?php

    class Pokemon {

        //? Properties \\
        private $name;
        private $type;
        private $maxhp;
        private $hp;
        private $dmg;
        private $atk;
        private $weakness;
        private $recistance;

        // Door de constructor function, roept PHP deze functie automatisch aan als er een object van een class wordt aangemaakt \\
        public function __construct ($name, $type, $hp, $dmg, $atk, $weakness, $recistance) {
            $this->name = $name;
            $this->type = $type;
            $this->maxhp = $hp;
            $this->hp = $hp;
            $this->dmg = $dmg;
            $this->atk = $atk;
            $this->weakness = $weakness;
            $this->recistance = $recistance;
        }

        // Getters \\
        public function getName() {
            return $this->name;
        }

        public function getType() {
            return $this->type;
        }

        public function getMaxHp() {
            return $this->maxhp;
        }

        public function getHp() {
            return $this->hp;
        }

        public function getDmg() {
            return $this->dmg;
        }

        public function getAtk() {
            return $this->atk;
        }

        public function getWeakness() {
            return $this->weakness;
        }

        public function getRecistance() {
            return $this->recistance;
        }


        // Setters \\
        public function setHp($dmg) {
            $this->hp -= $dmg;
            if($this->hp < 0) {
              $this->hp = 0;
            }
            return $this->hp;
        }


        public function attack($atk, $opponent) {

          // attack log \\
          $message    = '';
          $effective  = '';

          if($opponent->getWeakness() == $this->atk['type']) {
            $damage = $this->atk['dmg'] * 1.5;
            $effective .= '[!!] it was super a buf attack <br />';
          }
          elseif($opponent->getRecistance() == $this->atk['type']) {
            $effective .= '[!!] it was weak af <br />';
            $damage = $this->atk['dmg'] * 0.5;
          }
          else {
            $damage = $this->atk['dmg'];
          }

          $damage = round($damage);

          $opponent->setHp($damage);

          // attack log \\
          $message .= '<span style=\'color:blue;\'>'.$this->getName().'</span> attacked <span style=\'color:blue;\'>'.$opponent->getName();
          $message .= '</span> with <span style=\'color:#bf62b1;\'>'.$atk;
          $message .= '</span> for <span style=\'color:red;\'>'.$damage.'</span> damage.<br />';
          $message .= $effective.'<span style=\'color:blue;\'>'.$opponent->getName().'</span> new health: ';
          $message .= '<span style=\'color:#17bd54;\'>'.$opponent->getHp().'</span><br />';

          // Output \\
          return $message;
        }

    }
