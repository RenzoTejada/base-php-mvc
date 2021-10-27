<?php
require_once 'model/user.php';

class IndexController
{
    private $model_user;

    //Creación del modelo
    public function __CONSTRUCT()
    {
        $this->model_user = new user();
    }

    //Llamado plantilla principal
    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/index/index.php';
        require_once 'view/footer.php';
    }

}
