<?php
  require_once 'includes/config.php';
  $_SESSION['usuarioLogado'] = '';
  $_SESSION['nomeUsuario'] = '';
  $_SESSION['logado'] = false;
  header('Location: index.php');
   
       
       
   