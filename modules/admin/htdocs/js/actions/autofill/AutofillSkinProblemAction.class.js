NGS.createAction("admin.actions.autofill.autofill_skin_problem", {
   
    beforeAction: function (params) {

    },
     onError: function (data) {
       var html = '<div class="autocomplete_container"><div class="autocomplete_item">No Data Found</div></div>';
        $('input[name=skin_problem_id]').parent('div').find('.f_autofill_container').html(html);
    },
    afterAction: function () {
       var params = this.getArgs();
        if(!params){
            
        }
        this.drawPopup(params);
        this.setSkinProblemandId();
    },
    drawPopup:function(params){
        var html = '<div class="autocomplete_container">';
       $.each(params,function(){
         var item = '<div class="autocomplete_item f_autocomplete_item" data-id ="'+ this.id+'">'+ this.name +'</div>';  
         html = html+item;
       });
       html = html+'</div>';
       $('input[name=skin_problem_id]').parent('div').find('.f_autofill_container').html(html);
        
    },
    setSkinProblemandId:function(){
        $('.f_autocomplete_item').on('click',function(){
           var skin_problem_id = $(this).data('id');
           var data = $(this).html();
          $('input[name=skin_problem_id]').val(data);
          $('input[name=skin_problem_id_autofill_id]').val(skin_problem_id);
          $('input[name=skin_problem_id]').parent('div').find('.f_autofill_container').html('');
        });
    }
}, NGS.SiteAction);
