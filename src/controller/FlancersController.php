<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/FlancerDAO.php';

class FlancersController extends Controller {

  private $flancerDAO;

  function __construct() {
    $this->flancerDAO = new FlancerDAO();
  }

  public function dashboard() {
/*
    if(!empty($_GET['filter__select'])){
      // de geselecteerde flancer ophalen
      $flancers = $this->flancerDAO->filterFlancers($_GET['filter__select']);
     }else{
      $flancers = $this->flancerDAO->selectAll();
     }

    // alle flancers selecteren uit de database
    // hier nog een filter plaatsen op afstand en reccommendations
*/
    if (!empty($_GET['action']) && $_GET['action'] == 'filter') {
      $flancers = $this->flancerDAO->filter($_GET['orderby']);
    }/*else{
      $flancers = $this->flancerDAO->selectAll();
    }
*/
    $this->set('flancers', $flancers);
    $this->set('title', 'dashboard');

  }

  public function detail() {

    // controleren of het id in de querystring is opgegeven
    if(!empty($_GET['id'])){
     // de geselecteerde flancer ophalen
     $flancer = $this->flancerDAO->selectById($_GET['id']);

    }

   $this->set('flancer',$flancer);

 }

 public function index() {
}
public function intro() {
}
public function job() {
}


}
