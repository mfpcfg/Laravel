<?php

namespace App;

use App\Book;


class booksSearchFilter
{


	protected $builder;

	protected $request;


	public function __construct($builder, $request)
	{
		$this->builder = $builder;
		$this->request = $request;
	}


	public function apply()
	{
		foreach($this->filters() as $filter => $value){
			if(method_exists($this, $filter)){
				$this->$filter($value);
			}
		}

		return $this->builder;
	}


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


	public function filters()
	{
		return $this->request->all();
	}


}

?>