<?php

class Controller
{
    public function view($name, $data = [], $component = '', $id = 'new')
    {
        if (!empty($data)) 
        {
            
            extract($data);
            $table = $data['table'];
            unset($data['table']);
        }
        
        $componentfile = '../app/views/components/' . $component . '.php';
        $filename = '../app/views/' . $name . '.view.php';

        if (file_exists($componentfile)) {
            $componentfile = 'components/' . $component . '.php';
        } else {
            $componentfile = $componentfile = 'components/404.php';
        }

        if (file_exists($filename)) {
            require_once $filename;
        } else {
            $filename = '../app/views/404.view.php';
            require_once $filename;
        }
    }
}
