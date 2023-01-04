<?php


class Login extends Controller
{
    public function index()
    {
        
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            $user = new User('admin');
            $arr['login'] = $_POST['login'];

            $row = $user->first($arr);
            
            if ($row) 
            {
                if ($row['password'] === $_POST['password']){
                    $_SESSION["login"] = 'admin';
                    redirect('home');
                }
                
            }
            
            $user->errors['email'] = "email ou mot passe erronés";
            $data['errors'] = $user->errors;
        } 
        redirect('index.php?a=log');

    }

}
/* if (empty($_SESSION['USER'])) {
    $username = 'guest';
    $userrole = 'guest';
}else{
    //show($_SESSION['USER']);
    $username = $_SESSION['USER']['nom'];
    $userrole = $_SESSION['USER']['role'];
}
$data['username'] = $username;
$data['userrole'] = $userrole; */

