<?php
require(__DIR__ . '/../vendor/autoload.php');

use App\Config;

# TODO: Récuperer une instance de Config
# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques

$config = Config::getInstance();
var_dump($config->getConfig());

$config2 = Config::getInstance();
var_dump($config2->getConfig());

echo $config === $config2; // retourne 1 car les deux instances sont identiques