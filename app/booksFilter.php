<?php

namespace App;


class booksFilter
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


	public function price($value)
	{

	 $value = explode("_", $_POST['price']);

     $this->builder->where('price','>=',$value[0])->where('price','<=',$value[1]);
	}


	public function pages($value)
	{
		$value = explode("_", $_POST['pages']);

  		$this->builder->where('pages','>=',$value[0])->where('pages','<=',$value[1]);
	}


	public function language()
	{
		$this->builder->where('language','=',$_POST['language']);
	}


	public function filters()
	{
		return $this->request->all();
	}


}

?>