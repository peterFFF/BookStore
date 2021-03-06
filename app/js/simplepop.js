/* *
 * jQuery SimplePop
 * IE 7+
 * @date 2014-11-24 13:19:36
 * https://www.sucaijiayuan.com
 * */

"use strict";
var PopTime = null;
var SimplePop = {
    alert: function (msg, arg) {
        var alertDefaults = {
            popType: "alert",
            title: "提示",
            content: "<div class='layer_msg'><p>" + (msg === undefined ? "" : msg) + "</p></div>",
            callback: function () {
                
            }
        };
        var opt = $.extend({}, this._defaults, alertDefaults, arg);
        this._creatLayer(opt);
        if (opt.time > 0) {
            PopTime = setInterval(function () {
                $(".popTitle .close").triggerHandler("click");
                clearInterval(PopTime);
                PopTime = undefined;
            }, opt.time * 1000);
        }
    },
    confirm: function (msg, arg) {
        var confirmDefaults = {
            popType: "confirm",
            title: "请选择",
            content: "<div class='layer_msg'><p>" + (msg === undefined ? "" : msg) + "</p></div><div class='layer_but'><button id='simplePopBtnSure' type='button'>确定</button><button id='SimplePopBtncancel' type='button'>取消</button></div>",
            cancel: function () {

            },
            confirm: function () {

            }
        };
        var opt = $.extend({}, this._defaults, confirmDefaults, arg);
        this._creatLayer(opt);
        if (opt.time > 0) {
            PopTime = setInterval(function () {
                $(".popTitle .close").triggerHandler("click");
                clearInterval(PopTime);
                PopTime = undefined;
            }, opt.time * 1000);
        }
    },
    prompt: function (msg, arg) {
        var promptDefaults = {
            popType: "prompt",
            title: "请输入",
            content: "<div class='layer_msg'><p>" + (msg === undefined ? "" : msg) + "</p><div><input type='text' /></div><button id='simplePopBtnSure' type='button'>确定</button><button id='SimplePopBtncancel' type='button'>取消</button></div>",
            cancel: function () {

            },
            confirm: function (value) {

            }
        };
        var opt = $.extend({}, this._defaults, promptDefaults, arg);
        this._creatLayer(opt);
        if (opt.time > 0) {
            PopTime = setInterval(function () {
                $(".popTitle .close").triggerHandler("click");
                clearInterval(PopTime);
                PopTime = undefined;
            }, opt.time * 1000);
        }
    },
    closeSimplePop: function () {
        this._closeLayer();
    },
    _defaults: {
        icon: "",
        title: "",
        content: "",
        width: 0,
        height: 0,
        background: "#000",
        opacity: 0.4,
        duration: "normal",
        showTitle: true,
        escClose: true,
        popMaskClose: false,
        drag: true,
        dragOpacity: 1,
        popType: "alert",
        type: "info",
        time: 0,
        id: "",
        isTitle: true,
        isContent: true
    },
    _creatLayer: function (opt) {
        var self = this;
        $(".popMask").empty().remove();
        $(".popMain").empty().remove();
        $("body").append("<div class='popMask'></div>");
        var $mask = $(".popMask");
        $mask.css({
            "background-color": opt.background,
            filter: "alpha(opacity=" + opt.opacity * 100 + ")",
            "-moz-opacity": opt.opacity,
            opacity: opt.opacity
        });
        opt.popMaskClose &&
			$mask.bind("click", function () {
			    self._closeLayer()
			});
        opt.escClose && $(document).bind("keyup", function (e) {
            try {
                e.keyCode == 27 && self._closeLayer()
            } catch (f) {
                self._closeLayer()
            }
        });
        $mask.fadeIn(opt.duration);
        var wrap = "<div class='popMain " + opt.id + "'>";
        if (opt.isTitle) {
            wrap += "<div class='popTitle'>" + (opt.icon !== undefined && opt.icon !== "" ? "<img class='icon' src='" +
                opt.icon + "' />" : "") + "<span class='text'>" + opt.title + "</span><span class='close'>&times;</span></div>";
        } else {
            wrap += "<div class='popTitle'><span class='close'>&times;</span></div>";

        }
        wrap += "<div class='popContent'>" + opt.content + "</div>";
        wrap += "</div>";
        $("body").append(wrap);
        var $popMain = $(".popMain");
        $popMain.find('.layer_msg').addClass(opt.type + '_icon')
        var $popTitle = $(".popTitle");
        var $popContent = $(".popContent");
        opt.showTitle ? $popTitle.show() : $popTitle.hide();
        opt.width !== 0 && $popTitle.width(opt.width);
        $(".popTitle .close").bind("click", function () {
            $mask.fadeOut(opt.duration);
            $popMain.fadeOut(opt.duration);
            $popMain.attr("isClose", "1");
            opt.type == "container" && $(opt.targetId).empty().append(opt.content);
        });
        opt.width !== 0 && $popContent.width(opt.width);
        opt.height !== 0 && $popContent.height(opt.height);
        $popMain.css({
            left: $(window).width() / 2 - $popMain.width() / 2 + "px",
            top: $(window).height() / 2 - $popMain.height() / 2 + "px"
        });
        $(window).resize(function () {
            $popMain.css({
                left: $(window).width() / 2 - $popMain.width() / 2 + "px",
                top: $(window).height() / 2 - $popMain.height() / 2 + "px"
            })
        });
        opt.drag && this._drag(opt.dragOpacity)

        switch (opt.popType) {
            case "alert":
                $popMain.fadeIn(opt.duration, function () {
                    $popMain.attr("style", $popMain.attr("style").replace("FILTER:", ""))
                });
                $("#simplePopBtnSure").bind("click", function () {
                    opt.callback();
                    self._closeLayer()
                });
                break;
            case "confirm":
                $popMain.fadeIn(opt.duration, function () {
                    $popMain.attr("style", $popMain.attr("style").replace("FILTER:", ""))
                });
                $("#simplePopBtnSure").bind("click",//确定
					function () {
					    opt.confirm()
					    self._closeLayer()
					});
                $("#SimplePopBtncancel").bind("click",//取消
                    function () {
                    opt.cancel()
                    self._closeLayer()
                });
                break;
            case "prompt":
                $popMain.fadeIn(opt.duration, function () {
                    $popMain.attr("style", $popMain.attr("style").replace("FILTER:", ""))
                });
                $("#simplePopBtnSure").bind("click",//确定
					function () {
					    opt.confirm()
					    //opt.confirm($(".layer_msg input").val())
					    //self._closeLayer()
					});
                $("#SimplePopBtncancel").bind("click",//取消
                    function () {
                        opt.cancel()
                        self._closeLayer()
                    });
                break;
            default:
                break;
        }
    },
    _closeLayer: function () {
        $(".popTitle .close").triggerHandler("click");
        clearInterval(PopTime);
        PopTime = undefined;
    },
    _drag: function (d) {
        var isDown = false,
			b, g;
        $(".popTitle").bind("mousedown", function (e) {
            if ($(".popMain:visible").length > 0) {
                isDown = true;
                b = e.pageX - parseInt($(".popMain").css("left"), 10);
                g = e.pageY - parseInt($(".popMain").css("top"), 10);
                $(".popTitle").css({
                    cursor: "move"
                })
            }
        });
        $(document).bind("mousemove", function (e) {
            if (isDown && $(".popMain:visible").length > 0) {
                d != 1 && $(".popMain").fadeTo(0, d);
                var f = e.pageX - b;
                e = e.pageY - g;
                if (f < 0) f = 0;
                if (f > $(window).width() - $(".popMain").width()) f = $(window).width() - $(".popMain").width() - 2;
                if (e <
					0) e = 0;
                if (e > $(window).height() - $(".popMain").height()) e = $(window).height() - $(".popMain").height() - 2;
                $(".popMain").css({
                    top: e,
                    left: f
                })
            }
        }).bind("mouseup", function () {
            if ($(".popMain:visible").length > 0) {
                isDown = false;
                d != 1 && $(".popMain").fadeTo(0, 1);
                $(".popTitle").css({
                    cursor: "auto"
                })
            }
        })
    }
}