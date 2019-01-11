<?php
class String
{
    private $data;

    public function __construct($string)
    {
        $this->data = sprintf('%s', $string);
    }

    public function tolower()
    {
        $this->data = strtolower($this->data);
    }

    public function toupper()
    {
        $this->data = strtoupper($this->data);
    }

    public function indexOf($needle)
    {
        return strpos($this->data, $needle);
    }

    public function lastIndexOf($needle)
    {
        return strrpos($this->data, $needle);
    }

    public function __toString()
    {
        return $this->data;
    }

    public function contains($subject)
    {
        if ($this->indexOf($subject) > 0)
            return true;
        return false;
    }

    public function mid($pos, $offset)
    {
        substr($this->data, $pos, $offset);
    }

    public function replace($oldval, $newval)
    {
        return str_replace($oldval, $newval, $this->data);
    }
}
