<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Document extends CComponent
{
    private $_textWidth;
    protected $_completed=false;
 
    public function getTextWidth()
    {
        return $this->_textWidth;
    }
 
    public function setTextWidth($value)
    {
        $this->_textWidth=$value;
    }
 
    public function getTextHeight()
    {
        // calculates and returns text height
    }
 
    public function setCompleted($value)
    {
        $this->_completed=$value;
    }
}







?>