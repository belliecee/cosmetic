

<!------------------ The Button for add an ITEM  ------------------->
<script type="text/javascript">
    
    $(function(){
          
    });
</script>


<div class="title2" style="border-bottom: none;">Type</div>
<div class="bottomline"></div>
<!--------------------------- Start Table ----------------------------------------->
<br/><br/>
                <?php 
                         Yii::import('application.mymodule.newGridview');
                         
                          $grid = new newGridview;
                          $grid->createGrid("aaaaaaaaa");
                          //$grid->createGrid("aadfsjdf");
                          
                          $type_model = type::model()->findAll(); 
                           $test  = array('column1'=>array('type'=>'text','name'=>'id','editable'=>false,),
                                          'column2'=>'name',
                                          'column3'=>'decription');
                           echo $test['column1']['editable'];
                
                
                ?>
                <table  class="table_view1">
                  <thead>
                    <tr class="table_view1_header">
                      <th class="table_vendor" style="width:150px;">#</th>
                      <th class="table_model" style="width:150px;">Name</th>
                        <th class="table_model" style="width:150px;">Address</th>
                      <th class="table_operation" style="width:70px;"> </th>
                    </tr>
                  </thead>
              <!--    <div id='<?php //echo $showquod; ?>' > -->
                  <tbody>
               
                  <?php $i = 1; ?>    
                   <?php  foreach($type_model as $ty){ ?>
                    <?php //$quod_row = "quod_$detail->id"; ?>
                    <tr  class="table_tr_quod" >         
                             
                                <td>
                                       <center>
                                    <?php
                                        $this->widget('editable.EditableField', array(
                                            'type'      => 'text',
                                            'model'     => $ty,
                                            'attribute' => 'id',
                                            'url'       => $this->createUrl('type/updatetype'), 
                                            'placement' => 'right',
                                        ));
                                    ?>
                                           
                                       </center>
                                </td>
                                 <td>
                                       <center>
                                    
                                            <?php
                                                $this->widget('editable.EditableField', array(
                                                    'type'      => 'text',
                                                    'model'     => $ty,
                                                    'attribute' => 'name',
                                                    'url'       => $this->createUrl('type/updatetype'), 
                                                    'placement' => 'right',
                                                ));
                                            ?>
                                       </center>
                                </td>
                                <td>
                                       
                                    
                                            <?php
                                                $this->widget('editable.EditableField', array(
                                                    'type'      => 'textarea',
                                                    'model'     => $ty,
                                                    'attribute' => 'address',
                                                    'url'       => $this->createUrl('type/updatetype'), 
                                                    'placement' => 'right',
                                                ));
                                            ?>
                                      
                                </td>
                                
                                <td><center><div class="del"> </div></center></td>
                            </tr>
                   <?php } ?>
                 
                  </tbody>
               <!--    </div> -->
                </table>
              </div>

    <br/><br/><br/><br/><br/>
    <?php
    $user = type::model()->findByPk(3);
    $this->widget('editable.EditableField', array(
        'type'      => 'text',
        'model'     => $user,
        'attribute' => 'name',
        'url'       => $this->createUrl('type/updatetype'), 
        'placement' => 'right',
    ));
?>
    <br/><br/><br/>
    <?php 
    
    
   

    $dataProvider=new CActiveDataProvider('type');
    $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'usergrid',
    'itemsCssClass' => 'table-bordered items',
    'dataProvider' => $dataProvider,
    'columns'=>array(
        array(
           'class' => 'editable.EditableColumn',
           'name' => 'id',
           'headerHtmlOptions' => array('style' => 'width: 110px'),
           'editable' => array(    //editable section
                  //'apply'      => '$data->user_status != 4', //can't edit deleted users
                  'url'        => $this->createUrl('type/updatetype'),
                  'placement'  => 'right',
              )               
        ),
     
        array( 
              'class' => 'editable.EditableColumn',
              'name' => 'name',
              'headerHtmlOptions' => array('style' => 'width: 100px'),
              'editable' => array(
                  'type'     => 'name',
                  'url'      => $this->createUrl('type/updatetype'),
                
               
                  ),
            ),
                 //onsave event handler 
                 
                 //source url can depend on some parameters, then use js function:
                 /*
                 'source' => 'js: function() {
                      var dob = $(this).closest("td").next().find(".editable").text();
                      var username = $(this).data("username");
                      return "?r=site/getStatuses&user="+username+"&dob="+dob;
                 }',
                 'htmlOptions' => array(
                     'data-username' => '$data->user_name'
                 )
                 */
     
    ),
)); 
?>
    
    
    
    
    <?php





$this->widget('yiiwheels.widgets.redactor.WhRedactor', array(
    'name' => 'redactortest'
));

$person= new type('search');

$this->widget('bootstrap.widgets.TbGridView', array(
   'dataProvider' => $person->search(),
   'filter' => $person,
   'template' => "{items}",
   'columns' => array(
        array(
            'name' => 'id',
            'header' => '#',
            'htmlOptions' => array('color' =>'width: 60px'),
        ),
        array(
            'name' => 'name',
            'header' => 'Name',
        ),
       
    ),
)); 



$this->widget(
    'yiiwheels.widgets.detail.WhDetailView',
    array(
        'data' => array(
            'id' => 1,
            'firstName' => 'Mark',
            'lastName' => 'Otto',
            'language' => 'CSS'
        ),
        'attributes' => array(
            array('name' => 'firstName', 'label' => 'First name'),
            array('name' => 'lastName', 'label' => 'Last name'),
            array('name' => 'language', 'label' => 'Language'),
        ),
    ));



$this->widget(
    'yiiwheels.widgets.highcharts.WhHighCharts',
    array(
        'pluginOptions' => array(
            'title'  => array('text' => 'Fruit Consumption'),
            'xAxis'  => array(
                'categories' => array('Apples', 'Bananas', 'Oranges')
            ),
            'yAxis'  => array(
                'title' => array('text' => 'Fruit eaten')
            ),
            'series' => array(
                array('name' => 'Jane', 'data' => array(1, 0, 4)),
                array('name' => 'John', 'data' => array(5, 7, 3))
            )
        )
    )
);
?>

<?php
$gridDataProvider = new CArrayDataProvider(array(
    array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),
    array('id'=>2, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript'),
    array('id'=>3, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML'),
));

/*
 $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$gridDataProvider,
    'template'=>"{items}",
    'columns'=>array(
        //array('name'=>'id', 'header'=>'ID'),
        array('name'=>'firstName', 'header'=>'First name'),
        array('name'=>'lastName', 'header'=>'Last name'),
        array('name'=>'language', 'header'=>'Language'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); 
 
 */
 ?>

<?php
/*
    $type= type::model();
    $this->widget('editable.EditableDetailView', array(
    'data'       => $type,
    
    //you can define any default params for child EditableFields 
    'url'        => $this->createUrl('type/updatetype'), //common submit url for all fields
    'params'     => array('YII_CSRF_TOKEN' => Yii::app()->request->csrfToken), //params for all fields
    'emptytext'  => 'no value',
    //'apply' => false, //you can turn off applying editable to all attributes
      
    'attributes' => array(
        array(
            'name' => 'name',
            'editable' => array(
                'type'       => 'text',
                'inputclass' => 'input-large',
                'emptytext'  => 'special emptytext',                
                'validate'   => 'function(value) {
                    if(!value) return "User Name is required (client side)"
                }'
            )
        ),
 */       
 /*        
        array( //select loaded from database
            'name' => 'id',
            'editable' => array(
                'type'   => 'text',
                //'source' => Editable::source(Group::model()->findAll(), 'group_id', 'group_name')
             )
        ),
        array( //select loaded from ajax.
            'name' => 'name',
            'editable' => array(
                'type'   => 'type',
                //'source' => $this->createUrl('site/getStatuses'),
            )
        ),
       
        array(
            'name' => 'user_dob',
            'editable' => array(
                'type'       => 'date',
                'viewformat' => 'dd/mm/yyyy'
            )
        ),
        array( //edit related record
            'name' => 'profile.language',
            'editable' => array(
                'url'  => array('site/updateProfile') //related record requires own submit url
            )
        ),        
        'user_comment',
        'created_at', //will not be editable as attribute is not safe
 * 

    )
    )); */
?>




<?php

 $this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_PILLS,
    'items' => array(
        array('label' => 'Home', 'url' => '#', 'active' => true),
        array('label' => 'Profile', 'url' => '#',),
        array('label' => 'Messages', 'url' => '#',),
    ),
));   
        
      
?>
<br/><br/>

<?php

$type= type::model()->findByPk(2);
    $tags = array(
      array('id' => 1, 'text' => 'php'),
      array('id' => 2, 'text' => 'html'),
      array('id' => 3, 'text' => 'css'),
      array('id' => 4, 'text' => 'javascript'),
    );
    
  
?>

<
<script>
   
    $(function(){
         $.fn.editable.defaults.mode = 'inline';
        $('#username').editable();
    });
    
    
    
 
    
    
    
    
</script>

<?php
/*
$dataProvider=new CActiveDataProvider('type');
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'user-grid',
    'itemsCssClass'=>'table table-striped table-bordered table-condensed',
    'dataProvider'=> $dataProvider,
    'columns'=>array(
        array(
           'class' => 'editable.EditableColumn',
           'name' => 'id',
           'headerHtmlOptions' => array('style' => 'width: 110px'),
           'editable' => array(
                  'url'        => $this->createUrl('type/update'),
                  'placement'  => 'right',
                  'inputclass' => 'span3',
              )               
        ),
        
        array( 
              'class' => 'editable.EditableColumn',
              'name' => 'name',
              //we need not to set value, it will be auto-taken from source
              'headerHtmlOptions' => array('style' => 'width: 60px'),
              'editable' => array(
                
                   'url'     => $this->createUrl('user/update'),
                 
              )
         ),            
        
       
      
      
               
    ),
));
 * */


?>



<?php

//$dataProvider=new CActiveDataProvider('type');
$type= type::model()->findByPk(2);

    $this->widget('editable.EditableField', array(
        'type'      => 'text',
        'model'     => $type,
       
        'attribute' => 'type_id',
        'url'       => $this->createUrl('type/updatetype'), 
        'placement' => 'right',
    ));

?>


<br/><br/><br/><br/><br/>


<?php 
/*
$dataProvider=new CActiveDataProvider('type');


   $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'usergrid',
    'itemsCssClass' => 'table-bordered items',
    'dataProvider' => $dataProvider,
    'columns'=>array(
        array(
           'class' => 'editable.EditableColumn',
           'name' => 'id',
           'headerHtmlOptions' => array('style' => 'width: 110px'),
           'editable' => array(    //editable section
                  //'apply'      => '$data->user_status != 4', //can't edit deleted users
                    'url'       => $this->createUrl('type/updatetype'), 
                  'placement'  => 'right',
                    'type'         => 'text',
              )               
        ),
        
        array( 
              'class' => 'editable.EditableColumn',
              'name' => 'type_id',
              'headerHtmlOptions' => array('style' => 'width: 100px'),
              'editable' => array(
                  'type'     => 'select',
                  'url'      => $this->createUrl('type/updatetype'),
                  'source'   => $this->createUrl('type/updatetype'),
                  'options'  => array(    //custom display 
                     'display' => 'js: function(value, sourceData) {
                          var selected = $.grep(sourceData, function(o){ return value == o.value; }),
                              colors = {1: "green", 2: "blue", 3: "red", 4: "gray"};
                          $(this).text(selected[0].text).css("color", colors[value]);    
                      }'
                  ),
                 //onsave event handler 
                 'onSave' => 'js: function(e, params) {
                      console && console.log("saved value: "+params.newValue);
                 }',
                 //source url can depend on some parameters, then use js function:
                 /*
                 'source' => 'js: function() {
                      var dob = $(this).closest("td").next().find(".editable").text();
                      var username = $(this).data("username");
                      return "?r=site/getStatuses&user="+username+"&dob="+dob;
                 }',
                 'htmlOptions' => array(
                     'data-username' => '$data->user_name'
                 )
                
              )
         ),
      
         array( 
              'class' => 'editable.EditableColumn',
              'name'  => 'name',
              'headerHtmlOptions' => array('style' => 'width: 100px'),
              'editable' => array(
              'type'         => 'text',
                  'url'       => $this->createUrl('type/updatetype'), 
                
                  'placement'     => 'right',
              )
         ), 
         
      
         
         //editable related attribute with sorting.
   
    ),
)); 
  */
?>


