<?php

namespace App;

class litteralBuilder {
    private string $query;

    public function select(array $fields)
    {
        $this->query = "Je selectionne " . implode(", ", $fields);
        return $this;
    }

    public function from(string $table)
    {
        $this->query .= " de la table " . $table;
        return $this;
    }

    public function where(string $field, string $symbol, string $value)
    {
        $this->query .= " où " . $field . " " . $symbol . " " . $value;
        return $this;
    }

    public function orderBy(string $field, string $order)
    {
        $this->query .= " ordonné par " . $field . " " . $order;
        return $this;
    }

    public function groupBy(string $field)
    {
        $this->query .= " groupé par " . $field;
        return $this;
    }

    public function getQuery(): string
    {
        return $this->query . ".";
    }
}