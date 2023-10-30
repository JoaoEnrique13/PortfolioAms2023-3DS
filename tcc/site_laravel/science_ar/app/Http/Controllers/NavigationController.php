<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    // HOME
    public function index(){
        return view('index');
    }

    // ERRO 404
    public function page_not_found(){
        return view('errors.404');
    }

    //REALIDADE AUMENTADA
    public function augmented_reality(){
        return view('augmented_reality');
    }

    //SOBRE
    public function about(){
        return view('about');
    }

    //CADASTRO
    public function register(){
        return view('user.register');
    }

    //LOGIN
    public function login(){
        return view('user.login');
    }

    //CRIAR QUIZ
    public function create_quiz(){
        return view('admin.create_quiz');
    }

    //CRIAR ADMINISTRADOR
    public function create_admin(){
        return view('admin.create_admin');
    }

    //TODOS OS MATERIAIS
    public function list_material(){
        return view('material.list_material');
    }

    //MATERIAL - TEMPERATURA
    public function temperature(){
        return view('material.temperature');
    }

    //MATERIAL - FENOMENOS
    public function fenomenos(){
        return view('material.fenomenos');
    }

    //MATERIAL - PLACAS TECTONICAS
    public function tectonic_plates(){
        return view('material.tectonic_plates');
    }

    //MATERIAL - COMBUSTIVEIS E MÁQUINAS TÉRMICAS
    public function combustiveis_maquinas(){
        return view('material.combustiveis_maquinas');
    }

    //MATERIAL - SISTEMA SOLAR
    public function solar_system(){
        return view('material.solar_system');
    }

    //MATERIAL - Bioma Pantanal
    public function pantanal(){
        return view('material.pantanal');
    }

    //MATERIAL - Bioma Amazonia
    public function amazonia(){
        return view('material.amazonia');
    }
    
    //MATERIAL - Bioma Pampa
    public function pampa(){
        return view('material.pampa');
    }

    //MATERIAL - Bioma Cerrado
    public function cerrado(){
        return view('material.cerrado');
    }

    //MATERIAL - Bioma Caatinga
    public function caatinga(){
        return view('material.caatinga');
    }

    //MATERIAL - Bioma Mata Atlântica
    public function mata_atlantica(){
        return view('material.mata_atlantica');
    }

    public function reset_password(){
        return view('user.reset_password');

    }
}
