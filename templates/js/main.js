
$(document).ready(function(){
    
    $('#callcenter').change(function(){
        var callcenterId = $('#callcenter').val();
        jQuery.ajax({
            url:"callcenter/"  + callcenterId + '/',
            type:"post",
            data:{callcenterId:callcenterId},
            dataType: "json",
            success: function(data){
                
                if(data){
                    $('#deskName').val(data['id']);
                } else {
                    console.log('Не получилось');
                }
            }
        });
    });
    
    $('#teamName').change(function(){
        var teamNameId = $('#teamName').val();
        jQuery.ajax({
            url:"team/"  + teamNameId + '/',
            type:"post",
            data:{teamNameId:teamNameId},
            dataType: "json",
            success: function(data){
                
                if(data){
                    $('#userName').val(data['user_id']);
                } else {
                    console.log('Не получилось');
                }
            }
        });
    });
});
