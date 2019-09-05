<?php


class Requests
{
    /**
     * @param $tableName
     * @param $data array
     * @return string
     */
    public static function insert($tableName, $data)
    {
        $count = 0;
        $sql = "";

        $sql .= "INSERT INTO `$tableName` (";

        foreach ($data as $column => $value) {
            if ($count)
                $sql .= ", `$column`";
            else
                $sql .= "`$column`";

            $count = 1;
        }

        $sql .= ") VALUES (";
        $count = 0;

        foreach ($data as $column => $value) {
            if ($count)
                $sql .= ", '$value'";
            else
                $sql .= "'$value'";

            $count = 1;
        }

        $sql .= ")";

        return $sql;
    }

    public static function getById($tableName, $id)
    {
        $sql = "SELECT * FROM `$tableName` WHERE `id` = $id";

        return $sql;
    }
}