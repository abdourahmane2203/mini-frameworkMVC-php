<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 10/04/2019
 * Time: 15:52
 */
use config\Controller;

class AccueilController extends Controller
{
    public function index() {

        $model = 'Modeltest';
        $this->view->assign('cle1','Abdourahmane');
        $this->view->assign('cle2','Diallo');
        return $this->view->load("accueil/index");
    }
}