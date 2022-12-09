<?php

session_start();

if (isset($_POST['form'])) {

    $validation = true;
    $message = '';
    $response = array();

    $form = array();
    parse_str($_POST['form'], $form);

    include '../includes/function.php';

    //var_dump($form);die;
    //UPIT ZA PROVERU PRAZNIH POLJA
    $provera = prazna_polja($form);

    if ($provera['status'] == 0) {

      $validation = false;
      $message .= $provera['message'];
    }else{
      $validation = true;
      $url = $provera['redirect_url'];
      $response['redirect_url'] = $url;

    }

    $response['status'] = $validation;
    $response['message'] = $message;

    echo json_encode($response);

}