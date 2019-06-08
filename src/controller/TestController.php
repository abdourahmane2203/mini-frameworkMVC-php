<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 10/04/2019
 * Time: 14:42
 */
use config\Controller;
use src\model\TestDao;
use src\entities\Test;
class TestController extends Controller
{
    public function getAll() {
        $TestDao = new TestDao();
        $value = $TestDao->findAll();
        //return  $value;
        $this->view->assign('value', $value);
        return $this->view->load("test/insert");
    }

    public function add() {
        echo 'Formulaire bien soumis !';
    }


   
}