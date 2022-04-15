<?php

require_once("models/Model.php");

class ListModel extends Model
{
    public function getDefaultListId()
    {
        $list = parent::selectWhere(array("id"), array("id" => 1));
        if (count($list) > 0) {
            return $list[0]["id"];
        } else {
            return false;
        }
    }
}