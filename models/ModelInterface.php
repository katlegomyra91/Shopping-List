<?php

interface ModelInterface
{
    public function __construct();
    public function select(array $columns) : array;
    public function selectWhere(array $columns, array $conditionValueColumns) : array;
    public function insert(array $valueColumns) : bool;
    public function update(array $setValueColumns, array $conditionValueColumns) : bool;
    public function delete(array $conditionValueColumns) : bool;
}