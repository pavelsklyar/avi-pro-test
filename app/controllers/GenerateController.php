<?php


class GenerateController
{
    public static function generateValue($type, $length)
    {
        if ($length <= 0)
            return null;

        switch ($type) {
            case 'int':
                $value = GenerateComponent::generateInt($length);
                break;
            case 'string':
                $value = GenerateComponent::generateString($length);
                break;
            case 'stringnum':
                $value = GenerateComponent::generateStringNum($length);
                break;
            default:
                $value = null;
        }

        if ($value)
            $obj = new Value($value, $type, $length);
        else
            return null;

        $id = RandomValuesTable::insert($obj);

        return [$id => $value];
    }
}