<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()

    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');
    }


    public function funcion_AcercaDe()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }


    public function funcion_login()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/login');
        echo view('front/footer_view');
    }

    public function funcion_registro()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/registro');
        echo view('front/footer_view');
    }

    public function funcion_quienes_somos()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }


}
