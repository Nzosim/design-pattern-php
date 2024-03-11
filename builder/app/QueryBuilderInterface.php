<?php

# TODO: Créer une classe QueryBuilder en utilisant le design pattern Builder

namespace App;

interface QueryBuilderInterface {
    public function select(array $fields);
    public function from(string $table);
    public function where(string $field, string $symbol , string $value);
    public function orderBy(string $field, string $order);
    public function groupBy(string $field);
}