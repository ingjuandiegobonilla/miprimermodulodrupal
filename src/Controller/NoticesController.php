<?php

namespace Drupal\notices\Controller;

class NoticesController {

    public function description(){
        $build = array(
            '#type' => 'markup',
            '#markup' => '<p>'.t('Hola Mundo').'</p>',
        );
        
        return $build;
}
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

