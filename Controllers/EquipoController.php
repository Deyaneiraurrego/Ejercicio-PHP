<?php
require 'models/Equipo.php';



class EquipoController
{
    private $model;
    private $EntradaSalida;
    private $Red;
    private $Licencia;
    private $Servicio;
    private $Incidencia;
    private $Usuario;
    private $Estado;
   
    
  
    public function __construct()
    {
        $this->model              = new Equipo;
        
        
        
    }

    public function index(){

        $Equipos          = $this->model->getAll();
  
        
        require 'views/Equipos/list.php';
    }

    public function new(){

        $Equipos          = $this->model->getAll();
        require 'hojav/index.php';
             
    }

    public function save(){
        $this->model->newEquipo($_REQUEST);
        header("Location: ?controller=Equipo");
    }


    public function edit(){

			
		if (isset($_REQUEST['IdEquipo'])) {
			$id = $_REQUEST['IdEquipo'];
			$data = $this->model->getEquipoById($id);
        
                 
			require 'views/layout.php';
			require 'views/Equipos/edit.php';
		} else {
			echo "Error";
		}
							
    }
    
    public function update(){
	
		if (isset($_POST)) {
        
        $this->model->editEquipo($_POST);
        header("Location: ?controller=Equipo");
		} else {
			echo "Error";
		}
		
    }
    
    public function delete(){
			
		$this->model->deleteEquipo($_REQUEST);
		header("Location: ?controller=Equipo");	
	}


}