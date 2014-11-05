<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 class seesController extends Controller
 {
      protected function afterAction($e)
      {
          
          if($e == "theproject"){$this->removeSession("theproject");}
            
            
            return true;
      }
       private function removeSession($actionname){
            
            if($actionname == "theproject"){
                unset(Yii::app()->session['theproject_projectNo']);
                unset(Yii::app()->session['theproject_machineType']);
                unset(Yii::app()->session['theproject_status']);
                unset(Yii::app()->session['theproject_customer']);
                unset(Yii::app()->session['theproject_vendor']);
            }
 
        }
 }
 ?>