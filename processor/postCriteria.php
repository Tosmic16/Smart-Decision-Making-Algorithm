<?php

require '../utils/basic.php';
session_start();

if (isset($_POST['submit'])) {
    unset($_POST['submit']);
    unset($_POST['textbox']);
$topic = $_SESSION['topic'];
session_unset();
    var_dump($_POST);

    $total = 0;
    foreach($_POST as $point){
        $total += (float) $point;
    }
    foreach($_POST as $criteria=>$point){
        $_SESSION['criterias'][$criteria] =number_format((((float) $point)/$total),2);
    }
$_SESSION['topic'] = $topic;
// var_dump($_SESSION);die;
   Basic::redirect('/views/alternative_form.php');
}
