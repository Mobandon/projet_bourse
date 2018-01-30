<?php

namespace controllers;
use Models\Tile;
use Models\Admin;
use Controllers\Controller;

class LoginController extends Controller{

  // Accès page de connexion
  public function index(){
    
      }

  // 
  public function login(){
        if (isset($_SESSION['login']))  //Lorsque l'utilisateur est deja connecté
          {
            redirect('/     '); // Accès à l'espace connecté
          }

        else { // Si pas connecté affichage de l'espace connexion
          global $blade;
          $logins = UsersDAO::getInstance()->getList();
          echo $blade->render(
          'login', // appel de la view
          [
            'logins' => $logins
          ]);
  }

}

}

