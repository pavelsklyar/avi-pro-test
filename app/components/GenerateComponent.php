<?php


class GenerateComponent
{
    public static function generateInt($length)
    {
        $number = '';
        $number .= rand(1, 9);

        for ($i = 0; $i < $length - 1; $i++) {
            $number .= rand(0, 9);
        }

        return (int)$number;
    }

    public static function generateString($length)
    {
        $ranges = [[65, 90], [97, 122]];
        $string = '';

        for ($i = 0; $i < $length; $i++) {
            $range = rand(0, 1);
            $string .= chr(rand($ranges[$range][0], $ranges[$range][1]));
        }

        return $string;
    }

    public static function generateStringNum($length)
    {
        $ranges = [[48, 57], [65, 90], [97, 122]];
        $string = '';

        for ($i = 0; $i < $length; $i++) {
            $range = rand(0, 2);
            $string .= chr(rand($ranges[$range][0], $ranges[$range][1]));
        }

        return $string;
    }
}