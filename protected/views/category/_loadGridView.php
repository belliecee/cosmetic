

<?php


$category_model = category::model()->findAll();
   $this->renderPartial('_gridView',array('model'=>$category_model,'path'=>$this->createUrl('category/updatetype'),
                                               // 'tableStyle'=>'table_view1', 'tablewidth' => '800px',  
                                                'gridColumn'=>array(array('editable'=>true,'header'=>'Name','name'=>'name','type'=>'text'),
                                                                    array('editable'=>true,'header'=>'Description','colwidth'=>'150px','name'=>'description','type'=>'textarea'),
                                                                    array('editable'=>false,'header'=>'Update on','colwidth'=>'100px','name'=>'update_on','type'=>'date',),
                                                                    array('editable'=>false,'header'=>'Update By','colwidth'=>'50px','name'=>'update_by','type'=>'text','relation'=>'user'),
                                                ),
                                              )
                                                 
                       );



?>
 
