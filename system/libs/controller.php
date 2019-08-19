<?php

    class Controller
    {
        public function model($model)
        {
          require_once (PATH_APPLICATION . '/model/' . $model . '.php');
          return new $model();
        }
        public function view($view, $data = [])
        {
          if(file_exists(PATH_APPLICATION   .'/view' . $view)) {
             require_once (PATH_APPLICATION .'/view' . $view);
          } else{
             die ('View does not exists');
          }
        }
    }
