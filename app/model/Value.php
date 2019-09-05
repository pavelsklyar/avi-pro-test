<?php


class Value
{
    private $value;
    private $type;
    private $length;

    /**
     * Value constructor.
     * @param $value
     * @param $type
     * @param $length
     */
    public function __construct($value, $type, $length)
    {
        $this->value = $value;
        $this->type = $type;
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }


}