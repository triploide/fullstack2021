<?php

namespace App\Classes;

class Movie
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function delete()
    {
        dd($this->id);
    }
}
