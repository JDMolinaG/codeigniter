<?php namespace App\Controllers;

use App\Models\ModeloRegistro;

class ControladorRegistro extends BaseController
{
	public function index()
	{
		return view('vistaRegistro');
	}

	//--------------------------------------------------------------------

	public function registrar(){

		// recibir datos  de la vista
		$nombre = $this->request->getPost("nombreAnimal");
		$edad = $this->request->getPost("edad");
		$tipoanimal = $this->request->getPost("tipoAnimal");
		$descripcion = $this->request->getPost("descripcion");
		$comida = $this->request->getPost("comida");
		$foto = $this->request->getPost("foto");
		

		// organizar envios a la bd con un arreglo
		$datos = array(
			"nombre"=>$nombre,
			"edad"=>$edad,
			"tipoanimal"=>$tipoanimal,
			"descripcion"=>$descripcion,
			"comida"=>$comida,
			"foto"=>$foto
		);
		
		// crear objeto del modelo
		$modeloAnimal = new ModeloRegistro();

		// ejecutar insert
		try{
			$modeloAnimal->insert($datos);
			$mensaje = "usuario registrado con exito";
			return redirect()->to(base_url("public/registro"))->with('mensaje',$mensaje);
		}catch(\Exception $e){
			echo($e->getMessage());
		}
	}
	// ---------------------------------------------------------------

	public function consultar(){
		// crear objeto del modelo
		$modeloAnimal = new ModeloRegistro();

		
		try{
			
			$animalesConsultados = $modeloAnimal->findAll();

			// organizar resultado para enviar a la vista
			$datosVista = array("animales"=>$animalesConsultados);

			// enviar datos a la vista
			return view('vistaListado',$datosVista);

		}catch(\Exception $e){
			echo($e->getMessage());
		}
	}

	public function eliminar($idEliminar){
		
		// Crear un objeto del modelo 
		$modeloAnimal = new ModeloRegistro();

		// ejecutar la funcion delete del modelo
		try{
			$modeloAnimal->where("id",$idEliminar)->delete();
			$mensaje = "Animal Eliminado con exito";
			return redirect()->to(base_url("public/registro/consultar"))->with('mensaje',$mensaje);
		}catch(\Exception $e){
			echo($e->getMessage());
		}
	}
	public function editar($idEditar){
		// reciba datos vista
		$nombre = $this->request->getPost("nombreEditar");
		$edad = $this->request->getPost("edadEditar");
		$tipoanimal = $this->request->getPost("tipoAnimalEditar");
		$descripcion = $this->request->getPost("descripcionEditar");
		$comida = $this->request->getPost("comidaEditar");


		// organizar datos para enviar
		$datos = array(
			"nombre"=>$nombre,
			"edad"=>$edad,
			"tipoanimal"=>$tipoanimal,
			"descripcion"=>$descripcion,
			"comida"=>$comida
		);
		
		$modeloAnimal = new ModeloRegistro();

		// edite datos con la funcion update
		try{
			$modeloAnimal->update($idEditar,$datos);
			$mensaje = "Animal Actualizado con exito";
			return redirect()->to(base_url("public/registro/consultar"))->with('mensaje',$mensaje);
		}catch(\Exception $e){
			echo($e->getMessage());
		}
	}
}