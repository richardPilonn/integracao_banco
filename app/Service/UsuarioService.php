<?php 

namespace App\Service;

use App\Models\Usuario;

class UsuarioService
{
    public function create (array $dados){
        $user = Usuario::create([
            'nome' => $dados ['nome'],
            'email'=> $dados ['email'],
            'password' => $dados ['password']
        ]);
        return $user;
    }

    public function update(){

    }

    public function delete(){

    }

    public function findById(){

    }

    public function getALL(){

    }

    public function searchByName(){
        
    }

}