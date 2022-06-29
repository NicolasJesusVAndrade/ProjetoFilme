<?php
namespace APP\Model;
enum MovieGender{
    case DRAMA;

    public function toString()
    {
        return $this->name;
    }
}