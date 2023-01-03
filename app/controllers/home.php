<?php


class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $data = [];
        $this->view('home',$data,'home');
    }
    public function arrivals($a = '', $b = '', $c = '')
    {
        $data = [];
        $produitsModel = new Produit('newArrivals');
        $data = $produitsModel->findAll();
        $this->view('home',$data,'arrivals');
    }
   
}

