<?php


class RandomValuesTable
{
    private static $tableName = 'randomvalues';

    /**
     * @param $value Value
     * @return int|string
     */
    public static function insert($value)
    {
        $data = [
            'value' => $value->getValue(),
            'type' => $value->getType(),
            'length' => $value->getLength()
        ];

        $db = new Database();

        $sql = Requests::insert(self::$tableName, $data);
        $db->query($sql);

        return $db->getInsertId();
    }

    public static function getById($id)
    {
        $db = new Database();

        $sql = Requests::getById(self::$tableName, $id);

        return $db->getQueryArray($sql);
    }
}