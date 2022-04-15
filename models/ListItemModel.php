<?php

require_once('models/Model.php');
require_once('models/ListModel.php');

class ListItemModel extends Model
{
    private $listId;

    public function __construct()
    {
        parent::__construct();
        $list = new ListModel();
        $this->listId = $list->getDefaultListId();
    }

    public function getAllListItems(int $listId = 0): array
    {
        if ($listId === 0) {
            $listId = $this->listId;
        }
        return parent::selectWhere(array("*"), array("list_id" => $listId));
    }

    public function getListItem(int $id): array
    {
        return parent::selectWhere(array("*"), array("id" => $id));
    }

    public function addListItem(string $name): bool
    {
        return parent::insert(array("list_name" => $name));
    }

    public function editListItem(string $name, int $id): bool
    {
        return parent::update(array("item_name" => $name), array("id" => $id));
    }

    public function markListItem(int $id): bool
    {
        return parent::update(array("status_id" => 4), array("id" => $id));
    }

    public function deleteListItem(int $id): bool
    {
        return parent::delete(array("id" => $id));
    }
}