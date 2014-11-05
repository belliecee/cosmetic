<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Star extends CComponent
{
//    private $_textWidth;
//    protected $_completed=false;
      public $starvote = "";
              
    public function getStarvote($avgVote)
    {
           $floor = floor($avgVote);
           $ceil = ceil($avgVote);
           $middle = ($floor + $ceil)/2;
           $suffix = "";
           $starNum = "";
           $this->starvote = ""; 
           if($floor != $ceil){
                if($avgVote >  $floor && $avgVote < $middle){
                    $suffix = "stars-qtr";

                }else if ($avgVote ==  $middle){
                    $suffix = "stars-half";
                }else if ($avgVote >  $middle && $avgVote < $ceil){
                   $suffix = "stars-3qtr";
                }
           }


            if($floor == 0)
            {
                $this->starvote = "stars";
            }else{
               $starNum = "stars stars-".$floor;
               $this->starvote = $starNum." ".$suffix;

            }
        return  $this->starvote;
    }
 
//    public function setTextWidth($value)
//    {
//        $this->_textWidth=$value;
//    }
// 
//    public function getTextHeight()
//    {
//        // calculates and returns text height
//    }
// 
//    public function setCompleted($value)
//    {
//        $this->_completed=$value;
//    }
}



?>