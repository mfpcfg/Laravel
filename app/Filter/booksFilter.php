<?php

namespace App\Filter;


class booksFilter extends bodyFilter
{


	public function price($value)
	{

	 $value = explode("_", $_GET['price']);

     $this->builder->where('price','>=',$value[0])->where('price','<=',$value[1]);
	}


	public function pages($value)
	{
		$value = explode("_", $_GET['pages']);

  		$this->builder->where('pages','>=',$value[0])->where('pages','<=',$value[1]);
	}


	public function language()
	{
		$this->builder->where('language','=',$_GET['language']);
	}



}

?>