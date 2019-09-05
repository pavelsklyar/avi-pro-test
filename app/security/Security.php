<?php


class Security
{
    public static function protectData($postItem)
    {
        return self::replace_aps(htmlspecialchars(trim($postItem)));
    }

    public static function replace_aps($string)
    {
        $string = str_replace("'", "&aps", $string);

        return $string;
    }
}