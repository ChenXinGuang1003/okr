$(function () {
    //点击添加objrct
    function initCommenEvent() {
        var str = ""
        $(".add-obj").on("click", function () {
            var newCont = $(".none").find(".object-cont").html();
            var objLen = $(".content").find(".append").children("div").length;
            if (objLen > 4) {
                $(".add-obj").addClass("dn")
                return
            } else {
                $(".append").append(newCont)
            }
        })

    }

    //点击KR添加
    // function addKR(){
    //   $(".content").on("click",".add-kr",function(){
    //     var $tab = $(this).closest(".js-cont").find(".table-cont");
    //     var firstLen = $(this).closest(".js-cont").find(".table-cont li").length+1;
    //     var tabLenText = $(this).closest(".js-cont").find(".table-cont li:last").text();
    //         tabLen=tabLenText.replace(/[^\d^\.]+/g,"")*1+1;
    //     var newkr ='<li class="list-li"><div class="left-cont"><img src="img/list-icon.png" alt="" class="list-img"><span class="list-info">KR'+((tabLen==""&&firstLen) || tabLen)+':</span></div><div class="right-cont g-bdtm"><input class="obj-input" placeholder="填写详情"/><span class="btn-clos icon-iconfonterror"></span></div></li>';
    //     var len = $tab.find(".list-li").length;
    //     if(len >=4 ){
    //       return
    //     }
    //     $tab.append(newkr)
    //   })
    // }

    function addKR() {
        $(".content").on("click", ".add-kr", function () {
            sortKR($(this));


        })
    }

    function sortKR(obj) {
        var $tab = obj.closest(".js-cont").find(".table-cont");
        var firstLen = obj.closest(".js-cont").find(".table-cont li").length + 1;
        var newkr = '<li class="list-li"><div class="left-cont"><img src="/okr/web/static/img/list-icon.png" alt="" class="list-img"><span class="list-info">KR' + firstLen + ':</span></div><div class="right-cont g-bdtm"><input class="obj-input" placeholder="填写详情"/><span class="btn-clos icon-iconfonterror"></span></div></li>';
        var len = $tab.find(".list-li").length;
        if (len >= 4) {
            return
        }
        var $listLi = $tab.find(".list-info");
        for (var i = 0; i < 4; i++) {
            $listLi.eq(i).html("KR" + (i * 1 + 1) + ":")

        }
        $tab.append(newkr)

    }

    //点击关闭
    function btnClose() {
        $(".content").on("click", ".btn-clos", function () {
            var thisTabCont = $(this).closest(".table-cont");
            var tabLi = thisTabCont.children().length;
            if (tabLi == 1) {
                thisTabCont.closest(".js-cont").remove()
            }
            $(this).closest(".list-li").remove();
            for (var i = 0; i < tabLi; i++) {
                thisTabCont.find(".list-info").eq(i).html("KR" + (i * 1 + 1) + ":")
            }


        })
    }

    function initApp() {

        initCommenEvent();
        addKR();
        btnClose();
    }

    initApp();
});


function saveOKR(action){
    var data = [];
    $('.content .Object').each(function(){
        var object = {};
        object['title'] = $(this).find('.object-cont-sub input').val();
        object['sub'] = getObjectInfo($(this));
        data.push(JSON.stringify(object))
    });
    $('#postData').val(data.join(','));
    $('#okrTitle').val($('.time-cont time').text());
    $('#action').val(action);
    $('#okrCreateForm').submit();
}
function getObjectInfo(obj){
    var data = {};
    obj.find('.table-cont li').each(function(){
        data[$(this).index()] = $(this).find('input').val()
    });
    return data;
}
