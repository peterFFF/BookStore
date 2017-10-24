//ajax提交
function TofnAjax(_url, _data, _type, _datatype, successfn) {
    _data = (_data == null || _data == "" || typeof (_data) == "undefined") ? { "_data": new Date().getTime() } : _data;
    _type = (_type == null || _type == "" || typeof (_type) == "undefined") ? "post" : _type;
    _datatype = (_datatype == null || _datatype == "" || typeof (_datatype) == "undefined") ? "json" : _datatype;
    //alert(_url); alert(_data); alert(_type); alert(_datatype);
    $.ajax({
        type: _type,
        data: _data,
        url: _url,
        dataType: _datatype,
        beforeSend: function (x) {
            SimplePop.alert(MsgList(), { type: "loding" });
        },
        success: function (d) {
            successfn(d);
        },
        error: function (e) {
            SimplePop.alert("网络请求错误！", { type: "error" });
        }
    });
}

//function fnAjax(_url, _data, _type, _datatype, successfn, _timeout) {
//    _data = (_data == null || _data == "" || typeof (_data) == "undefined") ? { "_data": new Date().getTime() } : _data;
//    _type = (_type == null || _type == "" || typeof (_type) == "undefined") ? "post" : _type;
//    _datatype = (_datatype == null || _datatype == "" || typeof (_datatype) == "undefined") ? "json" : _datatype;
//    //alert(_url); alert(_data); alert(_type); alert(_datatype);
//    var ajaxTimeOut = $.ajax({
//        type: _type,
//        data: _data,
//        url: _url,
//        timeout: _timeout,
//        dataType: _datatype,
//        beforeSend: function (x) {
//          //  SimplePop.alert(MsgList(), { type: "loding" });
//        },
//        success: function (d) {
//            successfn(d);
//        },
//        error: function (e) {
//            SimplePop.alert("网络请求错误！", { type: "error" });
//        },
//        complete: function (XMLHttpRequest, status) {
//            if (status == 'timeout') {//超时,status还有success,error等值的情况
//                ajaxTimeOut.abort(); //取消请求

//            }
//        }
//    });
//}

function MsgList() {
    var msg = ["加载中，请稍等..."];
    var Min = 0, Max = msg.length;
    var Range = (Max - 1) - Min;
    var Rand = Math.random();
    return msg[Min + Math.round(Rand * Range)];
}

//验证手机号码
function checkPhone(obj) {
    var zz = /^[1]\d{10}$/;
    if (zz.test(obj)) {
        return true;
    }
    else {
        return false;
    }
}

//验证邮箱
function checkMail(obj) {
    var zz = /([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)/;
    if (zz.test(obj)) {
        return true;
    }
    else {
        return false;
    }
}
//验证电话
function checkTel(obj) {
    var zz = /^[1]\d{10}$/;
    if (zz.test(obj)) {
        return true;
    }
    else {
        return false;
    }
}
//验证网址
function checkUrl(obj) {
    var zz = /^http:\/\/[[0-9a-zA-Z][^\s]*$/;
    var zz2 = /^https:\/\/[[0-9a-zA-Z][^\s]*$/;
    if (zz.test(obj)) {
        return zz.test(obj);
    }
    else {
        return zz2.test(obj);
    }
}
//判断是否为整数
function f_check_integer(obj) {
    var zz = /^\d+$/;
    if (zz.test(obj)) {
        return true;
    }
    else {
        return false;
    }
}
//字母开头，数字或下划线
function checkName(obj) {//    /^[0-9A-Za-z_]{6,15}$/
    if (/^[a-zA-z][a-zA-Z0-9_]{6,16}$/.test(obj)) {
        return true;
    } else {
        return false;
    }
}

//判断是否为英文或字母
function checkEnglish(obj) {

}

//判断是否含有中文字符，有则返回false，无则返回true
function checkChinese(objID) {
    if (/.*[\u4e00-\u9fa5]+.*/g.test(objID)) {
        return false;
    }
    return true;
}

//同时为按钮及文本框绑定绑定事件
function bindClickorEnter(oInput, oBut, fn) {
    $(oInput).keydown(function (evebt) {
        var jianzhi = event.keyCode;
        if (jianzhi == 13) {
            fn();
        }
    })
    $(oBut).click(function () {
        fn();
    })
}

//随机数
function GetRandomNum(Min, Max) {
    var Range = (Max - 1) - Min;
    var Rand = Math.random();
    return (Min + Math.round(Rand * Range));
}

//设置弹窗错误信息
function errmsg(msg) {
    $(".errormsg").html(msg);
}

//JS 获取Url参数
function getParam(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) {
        return (r[2]);
    }
    return "";
};

//设置url参数值，name参数名,value新的参数值
function setParam(url, name, value) {
    var str = "";
    if (url.indexOf('?') != -1)
        str = url.substr(url.indexOf('?') + 1);
    else
        return url + "?" + name + "=" + value;
    var returnurl = "";
    var setparam = "";
    var arr;
    var modify = "0";
    if (str.indexOf('&') != -1) {
        arr = str.split('&');
        for (i in arr) {
            if (arr[i].split('=')[0] == name) {
                setparam = value;
                modify = "1";
            }
            else {
                setparam = arr[i].split('=')[1];
            }
            returnurl = returnurl + arr[i].split('=')[0] + "=" + setparam + "&";
        }
        returnurl = returnurl.substr(0, returnurl.length - 1);
        if (modify == "0")
            if (returnurl == str)
                returnurl = returnurl + "&" + name + "=" + value;
    }
    else {
        if (str.indexOf('=') != -1) {
            arr = str.split('=');
            if (arr[0] == name) {
                setparam = value;
                modify = "1";
            }
            else {
                setparam = arr[1];
            }
            returnurl = arr[0] + "=" + setparam;
            if (modify == "0")
                if (returnurl == str)
                    returnurl = returnurl + "&" + name + "=" + value;
        }
        else
            returnurl = name + "=" + value;
    }
    return url.substr(0, url.indexOf('?')) + "?" + returnurl;
}

//删除参数值
function delParam(url, name) {
    var str = "";
    if (url.indexOf('?') != -1) {
        str = url.substr(url.indexOf('?') + 1);
    }
    else {
        return url;
    }
    var arr = "";
    var returnurl = "";
    var setparam = "";
    if (str.indexOf('&') != -1) {
        arr = str.split('&');
        for (i in arr) {
            if (arr[i].split('=')[0] != name) {
                returnurl = returnurl + arr[i].split('=')[0] + "=" + arr[i].split('=')[1] + "&";
            }
        }
        return url.substr(0, url.indexOf('?')) + "?" + returnurl.substr(0, returnurl.length - 1);
    }
    else {
        arr = str.split('=');
        if (arr[0] == name) {
            return url.substr(0, url.indexOf('?'));
        }
        else {
            return url;
        }
    }
}
//写cookies
function setCookie(name, value) {
    var Days = 30;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
    document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}
//读取cookies
function getCookie(name) {
    var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
    if (arr = document.cookie.match(reg)) return unescape(arr[2]);
    else return null;
}
//删除cookies
function delCookie(name) {
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval = getCookie(name);
    if (cval != null) document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString();
}


var VF = {
    //Api: "http://192.168.0.103:8100",
    Api: "http://api.bookschina.com",
    tokename: "BookUser",
    error: function (msg) {
        alert(msg);
    },
    token: function () {
        var cookieValue = "";
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                var index = VF.tokename.length + 1;
                if (cookie.substring(0, index) == (VF.tokename + '=')) {
                    cookieValue = cookie.substring(index);
                    break;
                }
            }
        }

        return cookieValue;
    }
}

function fnAjax(_url, augs, fn) {
    var datav;
    var url = VF.Api + _url;

    url = delParam(url, "tm");
    var s = new Date().getTime();
    url = setParam(url, "tm", s);


    if (augs == null || augs == undefined || augs == '') {
        augs = {};
    }

    var token = augs['token'];
    if (!token) {
        augs['token'] = VF.token();
    }
    $.ajax({
        type: "get",
        url: url,
        cache: false,
        data: augs,
        dataType: 'jsonp',
        beforeSend: function (x) {
            SimplePop.alert(MsgList(), { type: "loding" });
        },
        success: function (result) {
            // layer.close(index);

            fn(result);

        },
        error: function () { }
    });
}
