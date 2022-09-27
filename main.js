console.log('main.js working !');

$(document).ready(function(){
    $("#video-url-form").on("submit", function(e){
        console.log('submited');
        e.preventDefault();
        $.ajax({
            type : "post",
            url : "api/info.php",
            data : {
                url : $("#video-url").val()
            },
            beforeSend : function(){
                console.log('sending ...');
            },
            success : function(response){
            
                if(response != "worng url" || response != "wrong request"){
                    let links = JSON.parse(response);
                    $(".download-btns").removeClass("d-none");
                    $(".download-1080-btn").attr('href', links[1080]);
                    $(".download-720-btn").attr('href', links[720]);
                    $(".download-480-btn").attr('href', links[480]);
                    $(".download-360-btn").attr('href', links[360]);
                    console.log();
                }
            }
        });
    });
    
});