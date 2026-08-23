<?php

/*
  Professor Darrell Payne
  Bellevue University
 */

  # function return
  function strcat($left, $right){

    return $left . $right;
  }

  # Function output
  function outputStr($left, $right){

    echo($left . $right . '<br />');
  }

  # Scope - Assign return
  function addTwo($value){

    return($value + 2);
  }

  # Scope - No return
  function addTwoScope($value){

    $value + 2;
  }

  # Global
  function globalAddTwoInt_01(){

    global $int_01;

    $int_01 += 2;
  }

  # Pass-By-Reference
  function passByRef(&$value){

    $value += 12;
  }
?>
