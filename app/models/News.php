<?php 

class News extends DbModel
{
    
    public $id;
    public $title;
    public $data;
    public $date;

    // public function __construct($id, $title, $data, $date)
    // {
    //     $this->id = $id;
    //     $this->title = $title;
    //     $this->data = $data;
    //     $this->date = $date;
    // }

    public function __construct($array)
    {
        $this->id = $array['id'];
        $this->title = $array['title'];
        $this->data = $array['data'];
        $this->date = $array['date'];
    }

    public function __toString()
    {
        return "$this->id $this->title </br> $this->data </br> $this->date </br></br>"; 
    }
}