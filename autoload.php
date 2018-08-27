<?php

spl_autoload_register(function ($class_name) {
  if(file_exists($class_name . '.php')){
    include $class_name . '.php';
  }elseif(file_exists('../../src/Turma3/' . $class_name . '.php')){
    include '../../src/webdev/' . $class_name . '.php';
  }
});