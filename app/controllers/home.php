<?php


class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $data = [];
        
        //show($_SESSION);
        $this->view('home',$data,'home');
    }
    public function blog($a = '', $b = '', $c = '')
    {
        $data = [];
        
        //show($_SESSION);
        $this->view('home',$data,'blog');
    }
    public function arrivals($a = '', $b = '', $c = '')
    {
        $data = [];
        $produitsModel = new Produit('newArrivals');
        $data = $produitsModel->findAll();
        $this->view('home',$data,'arrivals');
    }
    public function features($a = '', $b = '', $c = '')
    {
        $data = [];
        $produitsModel = new Produit('features');
        $data = $produitsModel->findAll();
        $this->view('home',$data,'features');
    }
   
}

