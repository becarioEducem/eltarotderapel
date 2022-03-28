<?php
    require('db.php');
    $okMessage = 'He recibido correctamente tu petición y en breve me pondré en contacto contigo.';
    $errorMessage = 'Lo lamento pero no se ha podido procesar tu petición.\n Puedes ponerte en contacto conmigo a través de info@eltarotderapel.es';

    $name       = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $mail       = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
    $phone      = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $prefday    = filter_input(INPUT_POST, 'prefday', FILTER_SANITIZE_STRING);
    $preftime   = filter_input(INPUT_POST, 'preftime', FILTER_SANITIZE_STRING);
    $priority   = filter_input(INPUT_POST, 'priority', FILTER_SANITIZE_STRING);
    $msg        = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);

    try{
        //TODO: Implementar la funció de BDs inserirRegistre
        $success = inserirRegistre($name, $mail, $phone, $prefday, $preftime, isset($priority) ? 1 : 0, $msg, date('Y-m-d H:i:s'));
        if (!$success){
            $responseArray = array('type' => 'danger', 'message' => $errorMessage);
            die($errorMessage);
        }
        $responseArray = array('type' => 'success', 'message' => $okMessage);
    }
    catch (\Exception $e){
        $responseArray = array('type' => 'danger', 'message' => $errorMessage);
    }
    

    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $encoded = json_encode($responseArray);
        header('Content-Type: application/json');
        echo $encoded;
    }else{
        echo $responseArray['message'];
    }
?> 