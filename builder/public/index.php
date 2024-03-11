<?php
require(__DIR__ . '/../vendor/autoload.php');

use App\MySQLQueryBuilder;
use App\litteralBuilder;

# TODO: Creer un QueryBuilder
# Ecrire une requête en chainant des methodes
# Afficher la requête

$queryBuilder = new MySQLQueryBuilder();

$query = $queryBuilder
            ->select(['name', 'email'])
            ->from('users')
            ->where('age', '>', '18')
            ->orderBy('name', 'ASC')
            ->groupBy('age')
            ->getQuery();

echo "\n" . $query . "\n"; // SELECT name, email FROM users WHERE age > 18 ORDER BY name ASC GROUP BY age

$query2 = $queryBuilder
            ->select(['*'])
            ->from('users')
            ->where('age', '=', '12')
            ->getQuery();

echo $query2 . "\n\n"; // SELECT * FROM users WHERE age = 12

$litteralBuilder = new litteralBuilder();

$query3 = $litteralBuilder
            ->select(['name', 'email'])
            ->from('users')
            ->where('age', '>', '18')
            ->orderBy('name', 'ASC')
            ->groupBy('age')
            ->getQuery();

echo $query3 . "\n"; // Je selectionne name, email de la table users où age > 18 ordonné par name ASC groupé par age.

$query4 = $litteralBuilder
            ->select(['*'])
            ->from('users')
            ->where('age', '=', '12')
            ->getQuery();

echo $query4; // Je selectionne * de la table users où age = 12.