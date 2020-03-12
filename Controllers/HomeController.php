<?php
namespace Controllers;

use \Core\Controller;


class HomeController extends Controller{
    public function index(){
        $this->returnJson([
            'nome' => "Jeferson",
            'idade' => 31 ,
            'sexo' => 'Masculino'
        ]);
    }

    public function testando(){
        echo 'Testando 123....';
    }

    public function vizualizar_usuarios($id){
        echo "ID: " . $id;
    }
}