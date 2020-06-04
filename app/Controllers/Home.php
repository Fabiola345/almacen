<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UnidadesModel;

class Home extends \CodeIgniter\Controller
{
	/*
	Función que despliega el dashboard principal del sistema 
	*/
	public function index()
	{
		return view('dashboard');
	}


	/*
	Función para llamar a la vista de captura de unidades de medida 
	*/
	public function loadCatUnidades(){
       return view("catunidadesdemedida");
    }

	/*
	Función para recibir los datos clave, descripción desde el formulario
	*/
	public function recibirUnidades(){

		//leemos datos de la vista catunidadesdemedida
		$clave = $_POST['code'];
		$name = $_POST['desc'];


		//Declaramos un array
		$data=[
			'clave'=> $clave,
			'descripcion'=> $name
		];
		//Crear un objeto de la clase Unidades Model
		$unidadesModel = new UnidadesModel($db);
		//Invocamos el helper
		$unidadesModel->insert($data);
      	 
      	 //Redirigir a la vista catunidadesdemedida
		return view('catunidadesdemedida');
    }

}
