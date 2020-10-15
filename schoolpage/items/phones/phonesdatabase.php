<?php

class phonesdatabase{
	public $id;
	public $name;
	public $price;
	public $stock;
	public $image;
	public $brand;
	public $big_image;
	function __construct($id, $name, $price, $stock, $image, $brand, $big_image){
			$this->id = $id;
			$this->name = $name;
			$this->price = $price;
			$this->stock = $stock;
			$this->image = $image;
			$this->brand = $brand;
			$this->big_image = $big_image;
	}
}
?>