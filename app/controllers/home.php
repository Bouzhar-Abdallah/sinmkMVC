<?php


class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $data = [];
        $this->view('home',$data,'home');
    }
   
}

