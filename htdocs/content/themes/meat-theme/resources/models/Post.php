<?php

namespace Theme\Models;

class Post extends Wordpress
{
	public function __construct($postType = '')
	{
		$this->postType = $postType;
    }
    
}