<?php

namespace App\Filter;


class booksSearchFilter extends bodyFilter
{



	public function b_name($value)
	{
		 $this->builder->where('b_name', 'like', "%$value%");
	}

	public function a_name($value)
	{
		$this->builder->whereHas('authors',function ($query) use ($value){
        $query->where('a_name', 'like', "%$value%");
        });
	}

	public function g_name($value)
	{
		$this->builder->whereHas('genres',function ($query) use ($value){
        $query->where('g_name', 'like', "%$value%");
        });
	}


}

?>