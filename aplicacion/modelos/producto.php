<?php

class Producto extends Illuminate\Database\Eloquent\Model{
		protected $table = 'producto';
		protected $fillable = [
		'nombre', 'precio', 'cantidad'
		];
	}

class usuario extends Illuminate\Database\Eloquent\Model{
		protected $table = 'usuarios';
		protected $fillable = [
		'nombre', 'email', 'direccion', "telefono"
		];
	}

?>

