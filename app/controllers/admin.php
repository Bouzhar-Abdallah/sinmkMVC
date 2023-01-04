<?php


class Admin extends Controller
{
   /*  function __construct()
    {
        
        if ($_SESSION['USER']['role'] != 'admin') {
            redirect('home');
        }
    } */
    public function index($id = '', $b = '', $c = '')
    {
        $data = [];
        $produitsModel = new Produit('newarrivals');
        $data = $produitsModel->findAll();
        $data['table'] = 'newarrivals';
        
        $this->view('admin',$data,'arrivals-table',$id);
    }
    public function features($id = '', $b = '', $c = '')
    {
        $data = [];
        $produitsModel = new Produit('features');
        $data = $produitsModel->findAll();
        $data['table'] = 'features';
        
        $this->view('admin',$data,'features-table',$id);
    }
    public function create($table = '', $b = '', $c = '')
    {
        $data = $_POST;
        $data['image'] = file_get_contents($_FILES['image']['tmp_name']);
        $produitsModel = new Produit($table);
        $produitsModel->insert($data);

        redirect('admin/'.$table);
        //$this->view('admin',$data,'features-table');
    }
    public function update($table = '', $id = '', $c = '')
    {
        $data = $_POST;
        if (!empty($_FILES['image']['tmp_name'])) {
            $payLoad['image'] = file_get_contents($_FILES['image']['tmp_name']);
            
        }
        $produitsModel = new Produit($table);
        $produitsModel->update($id,$data);

        redirect('admin/'.$table);
        //$this->view('admin',$data,'features-table');
    }
    
   
   
}

