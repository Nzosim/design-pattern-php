<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface {

    private string $query;

    public function select(array $fields)
    {
        $this->query = "SELECT " . implode(", ", $fields);
        return $this;
    }

    public function from(string $table)
    {
        $this->query .= " FROM " . $table;
        return $this;
    }

    public function where(string $field, string $symbol, string $value)
    {
        $this->query .= " WHERE " . $field . " " . $symbol . " " . $value;
        return $this;
    }

    public function orderBy(string $field, string $order)
    {
        $this->query .= " ORDER BY " . $field . " " . $order;
        return $this;
    }

    public function groupBy(string $field)
    {
        $this->query .= " GROUP BY " . $field;
        return $this;
    }

    public function getQuery(): string
    {
        return $this->query . ";";
    }

}