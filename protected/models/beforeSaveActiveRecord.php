<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 abstract class beforeSaveActiveRecord extends CActiveRecord
 {
      public $createOn;
      public $createBy;
      public $updateOn;
      public $updateBy;
   
       /*  Prepares create registered time before performing validation  */
      protected function afterFind ()
    {
            // convert to display format
            if($this->hasAttribute("ind"))
            {
                    $this->ind =  1;
            }

        parent::afterFind ();
    }
      
       protected function beforeSave()
        {
           
           /* foreach($this->metadata->tableSchema->columns as $columnName => $column)
            {
                if ($column->dbType == 'date')
                {
                    $this->$columnName =  Yii::app()->dateFormatter->format('d/m/y' ,  strtotime($this->$columnName) );
                           
                            date('d/m/Y',
                        CDateTimeParser::parse($this->$columnName,
                        Yii::app()->locale->getDateFormat()));
                   
       
                }
         
                elseif ($column->dbType == 'datetime')
                {
                    $this->$columnName = date('Y-m-d H:i:s',
                        CDateTimeParser::parse($this->$columnName,
                        Yii::app()->locale->getDateTimeFormat('short')));
                }
            }
           */   
           /*****************************  Set Date Format ***********************************/
           
            date_default_timezone_set('Asia/Bangkok');
   /*        
            if($this->isNewRecord)
            {
    * 
    */
                //$this->create_time = $this->update_time = new cDbExpression('NOW()');
              if($this->isNewRecord)
              {
                   if($this->hasAttribute("create_on"))
                   {
                         $this->create_on = date('Y-m-d H:i:s',time());
                   }
                   if($this->hasAttribute("create_by"))
                   {
                        $this->create_by = Yii::app()->user->id;
                   }
              }
              
               
                if($this->hasAttribute("posting_datetime"))
                {
                    $this->posting_datetime = date('d/m/Y H:i:s',time());
                }
                if($this->hasAttribute("update_on"))
                {
                    $this->update_on = date('d/m/Y H:i:s',time());
                }
                if($this->hasAttribute("registereddate"))
                {
                    $this->registereddate =  date('d/m/Y H:i:s',time());
                }
                 if($this->hasAttribute("post_by"))
                {
                    $this->post_by = Yii::app()->user->id;
                }
               
                
                if($this->hasAttribute("update_by"))
                {
                    $this->update_by = Yii::app()->user->id;
                }
                if($this->hasAttribute("alert"))
                {
                    $this->alert = 0;
                }
              
                if($this->hasAttribute("progress"))
                {
                    $this->progress = 0;
                }
                
    /************************   DATE ***********************************/
    /*******************************************************************/   
                
           /*       
                if($this->hasAttribute("date"))
                {
                  
                    if($this->date!=null){
                                $newDate = date("Y-d-m", strtotime($this->date));
                                if($newDate)
                                   $this->date = $newDate;
                                else
                                    $this->date = null;   
                    }else
                        $this->date = null;
                    
                    $this->beforeSaveDate("date");
                }
                
                if($this->hasAttribute("enquiryToVendorDate")){
                   $this->beforeSaveDate("enquiryToVendorDate");
                }
           
             
                if($this->hasAttribute("vendorQuotationDate")){
                    $this->beforeSaveDate("vendorQuotationDate");
                }
                
                
                if($this->hasAttribute("vendorQuoteDate")){
                    $this->beforeSaveDate("vendorQuoteDate");
                }
                
                if($this->hasAttribute("customerPOdate"))
                    $this->beforeSaveDate("customerPOdate");
                
                
                if($this->hasAttribute("customerDeliveryDate"))
                    $this->beforeSaveDate("customerDeliveryDate");
                
                
                if($this->hasAttribute("goodsFinishedDate"))
                    $this->beforeSaveDate("goodsFinishedDate");
                
                if($this->hasAttribute("orderDate"))
                    $this->beforeSaveDate("orderDate");
                  
                if($this->hasAttribute("vendorDeliveryDate"))
                    $this->beforeSaveDate("vendorDeliveryDate");
                    
                if($this->hasAttribute("deliveryDate"))
                    $this->beforeSaveDate("deliveryDate");
                
                if($this->hasAttribute("paymentDate"))
                    $this->beforeSaveDate("paymentDate");
                 
                if($this->hasAttribute("depositDate"))
                    $this->beforeSaveDate("depositDate");
                
                if($this->hasAttribute("followedDate"))
                    $this->beforeSaveDate("followedDate");
               
                
      */
                          
                
      /************************   DATE ***********************************/
    /*******************************************************************/              
                if($this->hasAttribute("update_on"))
                {
                    $this->update_on = date('Y-m-d H:i:s',time());
                }
                if($this->hasAttribute("approved_on"))
                {
                    $this->approved_on = date('Y-m-d H:i:s',time());
                }
                if($this->hasAttribute("updatedate"))
                {
                    $this->updatedate = date('d/m/Y H:i:s',time());
                }
                if($this->hasAttribute("update_by"))
                {
                    $this->update_by = Yii::app()->user->id;
                }
                if($this->hasAttribute("approved_by"))
                {
                    $this->approved_by = Yii::app()->user->id;
                }
                
   /*            
            }
     */     
             
            
            return parent::beforeSave();  
        }
        
        public function beforeSaveDate($attrDate){
            /*
             if($this->enquiryToVendorDate!=null){
                                $newDate = date("Y-d-m", strtotime($this->enquiryToVendorDate));
                                if($newDate)
                                   $this->enquiryToVendorDate = $newDate;
                                else
                                    $this->enquiryToVendorDate = $newDate;   
                    }else
                        $this->enquiryToVendorDate = null;
             *
            */
                   $getDate = $this->__get($attrDate);
                   if($getDate!= null){
                                $explodeStr = explode("/",$getDate);
                                $newDate = ""; 
                                $count = 0;
                                foreach($explodeStr as $eachStr){
                                    if($count == 0)
                                        $newDate = $newDate.$eachStr;
                                    else
                                        $newDate = $eachStr."-".$newDate;
                                    $count++;
                                }
                                //$newDate = "2014-8-25";
                                //foreach($newFormat as $newf)
                                //$newDate = "$newDate";
                               // $itsDate = date_create($getDate);
                               // $newDate = date_format($itsDate,"Y-m-d");
                               $newDate = date("Y-m-d", strtotime($newDate));
                                if($newDate == false)
                                    $this->__set($attrDate,null);  
                                else
                                   $this->__set($attrDate,$newDate);
                    }else
                        $this->__set($attrDate,null);  
             
        }
        
        
        
        
        
}

?>
