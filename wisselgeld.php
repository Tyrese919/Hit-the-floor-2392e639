<?php

  $geld = intval($argv[1]);

  $biljeten = array(50, 20, 10, 5, 2, 1);

      foreach ($biljeten as $biljet) {
        if ($geld >= $biljet) {
          $floor = floor ($geld / $biljet);
            echo "$floor x $biljet euro".PHP_EOL;
              $geld = $geld - ($floor * $biljet);
        }
      }
