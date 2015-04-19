<?php

class Category extends Eloquent 
{
  public $timestamps = false;
  
  protected $fillable = array(
    'slug', 
    'name'
  );
}

?>