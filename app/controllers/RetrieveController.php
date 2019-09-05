<?php


class RetrieveController
{
    public static function retrieve($id)
    {
        $value = RandomValuesTable::getById($id);

        return $value;
    }
}