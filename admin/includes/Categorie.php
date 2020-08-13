<?php


class Categorie extends Db_object
{
    protected static $db_table = "categories";
    protected static $db_table_fields = array('title');

    public $id;
    public $title;



}

?>