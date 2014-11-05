/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


ajaxCall = function(a){
            jQuery.ajax({
                // The url must be appropriate for your configuration;
                // this works with the default config of 1.1.11
                url: 'index.php?r=project/ajaxProcessor',
                type: "POST",
                data: {ajaxData: a},  
                error: function(xhr,tStatus,e){
                    if(!xhr){
                        alert(" We have an error ");
                        alert(tStatus+"   "+e.message);
                    }else{
                        alert("else: "+e.message); // the great unknown
                    }
                    },
                success: function(resp){
                    nextThingToDo(resp);  // deal with data returned
                    }
                });
            };