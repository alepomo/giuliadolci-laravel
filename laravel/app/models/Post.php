<?php

class Post extends Eloquent 
{
  public $timestamps = true;
  
  protected $fillable = array(
    'slug', 
    'title', 
    'description',
    'notes',
    'order',
    'category'
  );
}

?>