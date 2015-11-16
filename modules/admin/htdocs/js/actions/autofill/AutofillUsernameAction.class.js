NGS.createAction("admin.actions.autofill.autofill_username", {
   
    beforeAction: function (params) {

    },
     onError: function (data) {
    var html = '<div class="autocomplete_container"><div class="autocomplete_item">No Data Found</div></div>';
        $('input[name=user_id]').parent('div').find('.f_autofill_container').html(html);
    },
    afterAction: function () {
       var params = this.getArgs();
        if(!params){
            
        }
        this.drawPopup(params);
        this.setUserNameAndId();
    },
    drawPopup:function(params){
        var html = '<div class="autocomplete_container">';
       $.each(params,function(){
         var item = '<div class="autocomplete_item f_autocomplete_item" data-id ="'+ this.id+'">'+ this.first_name +' '+ this.last_name+'</div>';  
         html = html+item;
       });
       html = html+'</div>';
       $('input[name=user_id]').parent('div').find('.f_autofill_container').html(html);
        
    },
    setUserNameAndId:function(){
        $('.f_autocomplete_item').on('click',function(){
           var user_id = $(this).data('id');
           var data = $(this).html();
          $('input[name=user_id]').val(data);
          $('input[name=user_id_autofill_id]').val(user_id);
           $('input[name=user_id]').parent('div').find('.f_autofill_container').html('');
        });
    }
}, NGS.SiteAction);
