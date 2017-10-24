
function logincommon() {
    $.ajax({
        type: "post",
        url: "/ashx/userlogin.ashx?indexuserlogin=1",
        success: function (data) {
            if (data != "" && data != "0") {
                if ($("#logininnerhtmlcommon")) {
                    $("#logininnerhtmlcommon").html("欢迎光临中国图书网，<a style=\"color:#0365B9;\" href=\"/vieworder/default.aspx\" target=\"_blank\">" + data + "</a>&nbsp;<a href=\"javascript:void(0)\" onclick=\"loginoutcommon();\">[退出登录]</a>");
                }
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            return
            // alert(errorThrown);
        }
    })
}


function loginoutcommon() {
    $.ajax({
        type: "post",
        url: "/ashx/userlogin.ashx?outs=1",
        success: function (data) {
            if (data == "1") {
                if ($("#__VIEWSTATE")) {
                    parent.location.reload();
                }
                if ($("#logininnerhtmlcommon")) {
                    $("#logininnerhtmlcommon").html("欢迎光临中国图书网，<a href=\"/RegUser/login.aspx\"  target=\"_parent\">[请登录]</a> <a href=\"/RegUser/Register.aspx\"  target=\"_parent\">[免费注册]</a>");
                }
                window.location = '/RegUser/login.aspx';
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            return
            // alert(errorThrown);
        }
    })
}

function isLoging() {//新版检测是否登录
    $.ajax({
        type: "post",
        url: "/ashx/userlogin.ashx?indexuserlogin=1",
        success: function (data) {
            if (data != "" && data != "0") {
                $(".loginArea").html("欢迎光临中国图书网，<a style=\"color:#0365B9;\" href=\"/vieworder/default.aspx\" target=\"_blank\">" + data + "</a>&nbsp;<a href=\"javascript:void(0)\" onclick=\"loginoutcommon();\">[退出登录]</a>");
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            return
        }
    })
}