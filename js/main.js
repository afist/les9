$.ajax({
        url: "form-send.php",
        type: "post",
        data: {"start": "go"},
        success(a){
            $(a).insertAfter( $(".list-brigad") );
        }
    });
 
function changeDate(e, id){
    var serializedData = {'setDaysWorker':e, 'id':id};
    request = $.ajax({
        url: "form-send.php",
        type: "post",
        data: serializedData,
        success(a){
            
        }
    });
};

setTimeout(function(){  
$("#ddmenu a").click(function(event){
    event.preventDefault();
    $("#ddmenu li").find("table").css("display","none");
    $(this).parent().find("table").slideToggle();
    var serializedData = {'id':$(this).parent().attr("data-id")};
    var b = $(this).parent();
    request = $.ajax({
        url: "form-send.php",
        type: "post",
        data: serializedData,
        success(a){
            $(b).find( "table" ).find("tr").remove();
            $(a).insertAfter(b.find( "table" ).find(".main"));
        }
    });

})


$('.modal-brigadir').click(function() {

        var modalWindow = $(".brigadir-modal");
        M1.modalShow(modalWindow);
        $("#overlay-popup-m1").show();
        return false;
    })
    $(window).click(function(e) {
        var target = $(event.target);
        if (target.is("#overlay-popup-m1")) {
            $("#overlay-popup-m1").hide();
            $(".brigadir-modal").hide();

        }
    });

    $('.modal-worker').click(function() {

        var modalWindow = $(".worker-modal");
        M1.modalShow(modalWindow);
        $("#overlay-popup-m1").show();
        return false;
    })
    $(window).click(function(e) {
        var target = $(event.target);
        if (target.is("#overlay-popup-m1")) {
            $("#overlay-popup-m1").hide();
            $(".worker-modal").hide();

        }
    });


$('.add-brigadir').click(function(event){
    // event.preventDefault();
    
    var serializedData = $(this).parent().serialize();
    // var b = $(this).parent();
    request = $.ajax({
        url: "form-send.php",
        type: "post",
        data: serializedData,
        success(a){
        }
    });

})
$('.add-worker').click(function(event){
    // event.preventDefault();
    
    var serializedData = $(this).parent().serialize();
    // var b = $(this).parent();
    request = $.ajax({
        url: "form-send.php",
        type: "post",
        data: serializedData,
        success(a){
        }
    });

})



}, 500);

