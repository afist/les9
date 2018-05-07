
 

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

$(".changeDate").click(function(event){
    console.log("12");
    var data = $(this).parent().find('.id').html();
    console.log(data);

    // var serializedData = {changeDate:'yes'};
    // request = $.ajax({
    //     url: "form-send.php",
    //     type: "post",
    //     data: serializedData,
    //     success(a){
    //         $('#question').html(a);
    //         if (a.substr(0, 9) == "Pravilnux") {
    //             $(".btn-default").css("display","none");
    //             $(".btn-form3").css("display","block");

    //         }

    //     }
    // });

})

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



