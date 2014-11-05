/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/*

function ajaxautocomplete(idname,table,url){
              //var machinetype = '<?php //echo $project_model->machineType; ?>';
              alert(idname+'   '+table+'   '+url);
              var availableTags =   [""];
              $.ajax({
                    url: url,
                    dataType: "json",
                    data: { inputtext:idname.val(),table:table}, //,machinetype:machinetype},
                    success: function (response) {
                        availableTags = response.res;
                        idname.autocomplete({
                                source: availableTags
                        }); 
  
                    }
              });
}
*/
function savewithajax(url,id,fieldname,fieldvalue,updateplace){
            // alert("URL "+url+" fieldname "+fieldname+" fieldvalue "+fieldvalue);
             
              $.ajax({
                                    url: url,
                               
                                  
                                   
                                    success:function(){
                                       

// remove loading                                         
                                    
                                       
                                    },
                                    error: function() { // if error occured
                                         
                                          alert("INPUT TEXT Error: Save Field  occured.please try again");    
                                     }
                }); 
               
              
            
  }
function saveapprove(url,id,fieldname,fieldvalue,updateplace){
             
              $.ajax({
                                    url: url,
                                    data: {id:id,fieldname:fieldname,fieldvalue:fieldvalue},
                                    type: 'get',
                                    dataType: 'json',
                                    beforeSend: function(){
                                         // $(updateplace).addClass('delload');
                                        
                                         $(updateplace).html('');
                                         $(updateplace).addClass('delload');    
                                          $('.delload').click(function(e){
                                              e.stopPropagation();
                                          });
                                          
                                    },
                                    success:function(res){
                                       
// No check unique                                            
                                                
                                                 if(fieldvalue == null || fieldvalue == ""){
// In case value is null or space put empty 
                                                    //$(updateplace).data('value',fieldvalue);
                                                    //$(updateplace).html('<span style="color:rgb(190,80,77)">Empty</span>');
                                                   
                                                }else{
// put the new value
                                                    $(updateplace).data('value',fieldvalue);
                                                    $(updateplace).html('<span style="color:rgb(79,129,189)">'+fieldvalue+'</span>');
// Update who  and when editing data
                                                }
                                                    var updateon = "#update_on_"+id; var updateby = "#update_by_"+id;
                                                    $(updateplace).parent().parent().find(updateon).html(res.updateon);
                                                    $(updateplace).parent().parent().find(updateby).html(res.updateby);
                                                
                                        
// remove loading                                         
                                         $(updateplace).removeClass('delload');
                                         
                                       
                                    },
                                    error: function() { // if error occured
                                         
                                          //alert("INPUT TEXT Error: Save Field  occured.please try again");    
                                     }
                }); 
               
              
            
        }

function saveajaxselected(url,id,fieldname,fieldvalue){
             
              $.ajax({
                                    url: url,
                                    data: {id:id,fieldname:fieldname,fieldvalue:fieldvalue},
                                    type: 'get',
                                    dataType: 'json',
                                     success:function(res){
                                        
                                         var updateon = "#update_on_"+id; var updateby = "#update_by_"+id;
                                                    $(updateon).html(res.updateon);
                                                    $(updateby).html(res.updateby);
                                         
                                     }
                                    
                }); 
               
              
            
        }

function createGrid(url,updatedisplay,addnum){
             //var savefieldurl = '<?php echo $this->createUrl("quoh/savefield"); ?>';
            $.ajax({
                                    url: url,
                                    type: 'get',
                                    data:{addnum:addnum},
                                    dataType: 'html',
                                    beforeSend: function(){
                                          $("#rowload").addClass('addload');
                                    },
                                    success:function(data){
                                    /*   
                                       var txt;
                                       txt = "<a href='#' id='testtext' data-type='text' data-url='/cosmetic/index.php/category/updatetype' class='changable'>next</a>"
                                       $(updatedisplay).html(data);
                                       $('td a').addClass('changable');
                                       $('.changable').editable();
                                    */
                                      $("#fake").submit();
                                     
                                    },
                                    error: function() { // if error occured
                                          alert("Error: Create Grid Error occured.please try again");    
                                     }
                });
              
   }
function saveajax_unique(url,id,fieldname,fieldvalue,updateplace){
             
              $.ajax({
                                    url: url,
                                    data: {id:id,fieldname:fieldname,fieldvalue:fieldvalue},
                                    type: 'get',
                                    dataType: 'json',
                                    beforeSend: function(){
                                         // $(updateplace).addClass('delload');
                                        
                                         $(updateplace).html('');
                                         $(updateplace).addClass('delload');    
                                          $('.delload').click(function(e){
                                              e.stopPropagation();
                                          });
                                          
                                    },
                                    success:function(res){
                                        if(res.unique == false){
// Warning that the name exist                                            
                                                 alert('This name has been already existing');
// put the old value
                                                  $(updateplace).html('<span style="color:rgb(79,129,189)">'+res.oldvalue+'</span>');
// In case no old value, put EMPTYs
                                                  if(res.oldvalue == null || res.oldvalue == ""){
                                                    // $(updateplace).data('value',fieldvalue);         
                                                     $(updateplace).html('<span style="color:rgb(190,80,77)">Empty</span>');
                                                     var updateon = "#update_on_"+id; var updateby = "#update_by_"+id;
                                                    $(updateplace).parent().parent().find(updateon).html(res.updateon);
                                                    $(updateplace).parent().parent().find(updateby).html(res.updateby);
                                                   // $(updateplace).addClass('redtext');
                                                }
                                        }else{
// In case new value doesn't exist before                                            
                                                
                                                 if(fieldvalue == null || fieldvalue == ""){
// put the new value
                                                    $(updateplace).data('value',fieldvalue);
                                                    $(updateplace).html('<span style="color:rgb(190,80,77)">Empty</span>');
                                                   // $(updateplace).addClass('redtext');
                                                }else{
// In case value is null or space put empty                                                   
                                                    $(updateplace).data('value',fieldvalue);
                                                    $(updateplace).html('<span style="color:rgb(79,129,189)">'+fieldvalue+'</span>');
// Update who  and when editing data
                                                }
                                                    var updateon = "#update_on_"+id; var updateby = "#update_by_"+id;
                                                    $(updateplace).parent().parent().find(updateon).html(res.updateon);
                                                    $(updateplace).parent().parent().find(updateby).html(res.updateby);
                                                
                                        }
// remove loading                                         
                                         $(updateplace).removeClass('delload');
                                         
                                       
                                    },
                                    error: function() { // if error occured
                                         
                                          //alert("INPUT TEXT Error: Save Field  occured.please try again");    
                                     }
                }); 
               
              
            
        }

   
function saveajax(url,id,fieldname,fieldvalue,updateplace){
             
              $.ajax({
                                    url: url,
                                    data: {id:id,fieldname:fieldname,fieldvalue:fieldvalue},
                                    type: 'get',
                                    dataType: 'json',
                                    beforeSend: function(){
                                         // $(updateplace).addClass('delload');
                                        
                                         $(updateplace).html('');
                                         $(updateplace).addClass('delload');    
                                          $('.delload').click(function(e){
                                              e.stopPropagation();
                                          });
                                          
                                    },
                                    success:function(res){
                                       
// No check unique                                            
                                                
                                                 if(fieldvalue == null || fieldvalue == ""){
// In case value is null or space put empty 
                                                    $(updateplace).data('value',fieldvalue);
                                                    $(updateplace).html('<span style="color:rgb(190,80,77)">Empty</span>');
                                                   
                                                }else{
// put the new value
                                                    $(updateplace).data('value',fieldvalue);
                                                    $(updateplace).html('<span style="color:rgb(79,129,189)">'+fieldvalue+'</span>');
// Update who  and when editing data
                                                }
                                                    var updateon = "#update_on_"+id; var updateby = "#update_by_"+id;
                                                    $(updateplace).parent().parent().find(updateon).html(res.updateon);
                                                    $(updateplace).parent().parent().find(updateby).html(res.updateby);
                                                
                                        
// remove loading                                         
                                         $(updateplace).removeClass('delload');
                                         
                                       
                                    },
                                    error: function() { // if error occured
                                         
                                          //alert("INPUT TEXT Error: Save Field  occured.please try again");    
                                     }
                }); 
               
              
            
        }
        
       function addfollow(url,other,updateplace,updateresult){

                  $.ajax({
                                        url: url,
                                        data: {other:other},
                                        type: 'get',
                                        beforeSend:function(){
                                                $("#centerbuttons_"+other).html(updateresult);
                                        },                                      
                                        success:function(){
                                                $("#centerbuttons_"+other).html(updateresult);
                                           
                                        }
                    }); 



        }       
    function addfollow(url,other,updateplace,updateresult){

                  $.ajax({
                                        url: url,
                                        data: {other:other},
                                        type: 'get',
                                        beforeSend:function(){
                                                $("#centerbuttons_"+other).html(updateresult);
                                        },                                      
                                        success:function(){
                                                $("#centerbuttons_"+other).html(updateresult);
                                           
                                        }
                    }); 



    }
    
    function adminsearch(url,searchtext,updateplace){

                $.ajax({
                                        url: url,
                                        data: {searchtext:searchtext},
                                        type: 'get',
                                        dataType: 'html',
                                        beforeSend:function(){
                                             updateplace.html("<div style='position:absolute;background-color:#777;width:100%;height:100%;z-index:10;'></div>");
                                        },  
                                        success:function(res){
                                                
                                                updateplace.html(res);
                                           
                                        }
                 }); 



        }
        
/*        
        function removewithajax(url,other,updateplace){

                  $.ajax({
                                        url: url,
                                        data: {other:other},
                                        type: 'get',
                                        success:function(){
                                                $("#centerbuttons_"+other).html(" <div  class='btn btn-primary' style='width:150px;font-weight: bold;' disabled='disabled'>Following</div>");
                                           
                                        }
                    }); 



        }
*/

        function updatescore(url,id,fieldname,fieldvalue,updateplace){
             
              $.ajax({
                                    url: url,
                                    data: {id:id,fieldname:fieldname,fieldvalue:fieldvalue},
                                    type: 'get',
                                    //dataType: 'json',
                                    beforeSend: function(){
                                         // $(updateplace).addClass('delload');
                                         
                                         $(updateplace).html('');
                                         $(updateplace).removeClass('votebtn').removeClass('votebtn_border');    
                                         $(updateplace).addClass('delload');    
                                         $('.delload').click(function(e){
                                              e.stopPropagation();
                                          });
                                       
                                          
                                    },
                                    success:function(){
                                        $("#actionmsg").slideDown('2700');
                                        setTimeout(function(){$("#actionmsg").slideUp('2700')},6000);
                                       
                                         $(updateplace).removeClass('delload');
                                         
                                       
                                    },
                                    error: function() { // if error occured
                                         
                                          //alert("INPUT TEXT Error: Save Field  occured.please try again");    
                                     }
                }); 
               
              
            
        }

function createGrid(url,updatedisplay,addnum){
             //var savefieldurl = '<?php echo $this->createUrl("quoh/savefield"); ?>';
            $.ajax({
                                    url: url,
                                    type: 'get',
                                    data:{addnum:addnum},
                                    dataType: 'html',
                                    beforeSend: function(){
                                          $("#rowload").addClass('addload');
                                    },
                                    success:function(data){
                                    /*   
                                       var txt;
                                       txt = "<a href='#' id='testtext' data-type='text' data-url='/cosmetic/index.php/category/updatetype' class='changable'>next</a>"
                                       $(updatedisplay).html(data);
                                       $('td a').addClass('changable');
                                       $('.changable').editable();
                                    */
                                      $("#fake").submit();
                                     
                                    },
                                    error: function() { // if error occured
                                          alert("Error: Create Grid Error occured.please try again");    
                                     }
                });
              
   }
function deleteRow(delurl,click_id,clickclick,click_row){
             //var savefieldurl = '<?php echo $this->createUrl("quoh/savefield"); ?>';
             
                 $.ajax({
                                     url: delurl,
                                     data: {id:click_id},
                                     type: 'get',
                                    beforeSend: function(){
                                          $(clickclick).removeClass('del').addClass('delload');
                                    },
                                    success:function(data){
                                  
                                        $("#".concat(click_row)).hide('fast');
                                    },

                                     error: function() { // if error occured
                                           alert(" DELETE QUOD Error  occured.please try again");    
                                      }
                              });        
              
   }
   
   


$(document).ready(function(){
            
        
          $("#searchBox").focus();
          $("#datepicker").datepicker();
          $("#project_tab").tabs();
          $("#tabs").tabs();
          
          
           $(".numberFilter").keydown(function(event) {
        // Allow: backspace, delete, tab, escape, and enter
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
             // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });
    
    $( ".date" ).attr({
        placeholder: "dd/mm/yyyy"
    });
    
     $(".fourlength").attr('maxlength',4);
     $(".tenlength").attr('maxlength',10);
     
     
/*    
   
     $('#header').append( "<div id='new' style='position:fixed;width:200px;height:100px; background-color:black; '>new paragraph</div>" );
     
    
      var open = 0; 
      $('*').click(function(event){
                  event.stopPropagation();
// GET ID
                   var divid = $(this).attr('id');
// GET Element ID
                   var tag_name = $(this).get(0).tagName;
// GET Width
                   var getwidth = $(this).css('width');
// GET Height                 
                   var getheight = $(this).css('height');

                   $('#divid').val(divid);
                   $('#tagname').val(tag_name);
                   $('#getWidth').val(getwidth);
                   $('#getHeight').val(getheight);
                   $(this).draggable().resizeable();
                   //$(this).once.append("<div style='background-color:grey;width200px;height:30px;'></div>");
                   
              });
               $('*').not('.notselected').mouseover(function(event){
                   $(this).addClass('selectedborder');
                   event.stopPropagation();
               
               });
                $('*').not('.notselected').mouseout(function(event){
                   $(this).removeClass('selectedborder');
                   event.stopPropagation();
               
               });
  
       
*/        
        
        
          
            
});

 