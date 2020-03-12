$(document).ready(function () {
    $("#emailsubcribebtn").click(function () {
        var base_url = $("#base_url").val();
        var email = $.trim($("#emailsubcribe").val());

        if (email == "") {
            $("#emailsubcribe").focus();
            return false;
        }
        var form_data = "email=" + email;
        jQuery.ajax({
            url: base_url + "home/emailsubcribe_add",
            type: 'POST',
            async: true,
            data: form_data,
            dataType: 'json',
            success: function (response) {
                $("#emailsubcribe").val("");
                $("#emailsubcribemsg").html("email subcribe successfully");
            }
        });
    });
    $(".lankalove-post td").removeAttr("width");
    $(window).scroll(function () {
        var x = $("#main_bottom_postall").position();
        var postbottom = x.top;
        if ($(window).scrollTop() + $(window).height() > postbottom) {
            loadnewdata();
        }
    });
});

function loadnewdata() {
    var base_url = $("#base_url").val();
    
    if($("#loadmore").val() == "0"){
        return false;
    }

    var postcount = $("#postcount").val();
    var posttype = $("#posttype").val();
    var form_data = "postcount=" + postcount + "&posttype=" + posttype;
    var isloading = $("#isloading").val();
    if (postcount == "-" || isloading == "1") {
        return false;
    }
    $("#isloading").val("1");
    jQuery.ajax({
        url: base_url + "home/getmorepost",
        type: 'POST',
        async: true,
        data: form_data,
        dataType: 'json',
        success: function (response) {
            $("#postcontainer").append(response.msg);
            if (response.count == "0") {
                $("#postcount").val("-");
            } else {
                $("#postcount").val(parseInt(postcount) + parseInt(response.count));
            }
            $("#isloading").val("0");
        }
    });
}


function join_user_add() {
    var form_data = $("#join_user_add_form").serialize();
    var base_url = jQuery("#base_url").val();

    var error = false;
    $(".form-group").removeClass("error");
    $(".form-group").find("small").addClass("hidden");
    var focus = false;
    $(".required").each(function (index) {
        if ($.trim($(this).val()) == "") {
            $(this).closest(".form-group").addClass("small");
            $(this).closest(".form-group").find("small").removeClass("hidden");
            if (!focus) {
                $(this).focus();
                focus = true
            }
            error = true;
        }
    });

    if (error) {
        return false;
    }


    jQuery.ajax({
        url: base_url + "home/join_user_add",
        type: 'POST',
        async: true,
        data: form_data,
        dataType: 'json',
        success: function (response) {
            if (response.status) {
                if (confirm(response.msg)) {
                    window.location.href = base_url;
                }
            } else {
                alert(response.msg);
            }
        }
    });
}

function saveComment() {
    var comment = $("#comment").val();
    var base_url = jQuery("#base_url").val();
    var pageid = $("#pageid").val();

    var error = false;
    if ($.trim($("#comment").val()) == "") {
        return false;
    }

    var form_data = "id="+pageid+"&comment="+comment;
    jQuery.ajax({
        url: base_url + "home/saveComment",
        type: 'POST',
        async: true,
        data: form_data,
        dataType: 'json',
        success: function (response) {
            $("#comment").val("");
            $(".comment-session").hide();
        }
    });
}