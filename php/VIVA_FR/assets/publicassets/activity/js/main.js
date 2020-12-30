var ls = $.localStorage();
jQuery(document).ready(function($) {

    $(".box-a").click(function() {
        $('#loader').css('display', 'grid');
        var dataTarget = $(this).attr('data-target');
        var setIds = $(this).attr('data-setids');
        var classIs = $(this).attr('data-class');
        var viewIds = $(this).attr('id');
        /*document.cookie = "typeis="+dataTarget;*/
        ls.setItem('typeis', dataTarget);
        ls.setItem('idis', viewIds);
        $('.act-box-2').hide();
        $('.result').hide();
        $(dataTarget).show();
        $("a.box-a").css('opacity', '1');
        $("a[data-target='" + dataTarget + "']").css({ 'opacity': '0.7', 'background': '#206aa2' });
        window.location.replace(base_url_practice + '/' + setIds + '/' + dataTarget.slice(1) + '?c=' + classIs);
        //window.location.reload();
    });

    $(document.body).on("click", ".draggable", function() {
        $(".draggable").css("box-shadow", "");
        actiondata = true;
        bgcolors = $(this).css('backgroundColor');
        attemptQ = $(this).data("id");
        $(".droppable:not(.right-tick)").css("pointer-events", "auto");
        $(this).css("box-shadow", "2px 1px 20px 5px #a35627");
    });

    var dropCnt = 1;
    $(document.body).on("click", ".droppable", function() {
        if (actiondata == true) {
            attemptA = $(this).data("aid");
            $('.droppable').removeClass("wrong-tick");
            if (attemptQ == attemptA) {
                $('[data-id="' + attemptA + '"]').css("pointer-events", "none");
                $(this).css({ "background-color": bgcolors, "color": "#fff" });
                $(this).addClass("right-tick");
                $(this).removeClass("wrong-tick");
                $(".droppable").css("pointer-events", "none");
                if (cnt_mch == dropCnt) {
                    setTimeout(function() {
                        $('.result').show();
                    }, 2000);
                }
                dropCnt++;
            } else {
                $(this).addClass("wrong-tick");
            }
        } else {
            $(".error").text("Please select question!");
            $(".error").css("display", "inline-block");
        }
    });

    var mcqCnt = 1;
    $(document.body).on('click', '.qClick', function(e) {
        var currentData = $(this);
        var Cvalue = currentData[0].innerText;
        var answer = currentData.data('answer');
        if ($(this).hasClass('qClick')) {
            if (Cvalue == answer) {
                currentData.addClass('right-tick');
                currentData.parent().find('p').removeClass('qClick');
                if (mcqCnt < cnt_mcq) {
                    currentData.parent().next().show();
                }
                if (cnt_mcq == mcqCnt) {
                    setTimeout(function() {
                        $('.result').show();
                    }, 2000);
                }
                mcqCnt++;
            } else {
                currentData.addClass('wrong-tick');
            }
        }
    });

    var tfCnt = 1;
    $(document.body).on('click', '.qtfClick', function(e) {
        var currentData = $(this);
        var Cvalue = currentData[0].innerText;
        var answer = currentData.data('answer');
        if ($(this).hasClass('qtfClick')) {
            if (Cvalue == answer) {
                currentData.addClass('right-tick');
                currentData.parent().find('p').removeClass('qtfClick');
                if (tfCnt < cnt_tnf) {
                    currentData.parent().next().show();
                }
                if (cnt_tnf == tfCnt) {
                    setTimeout(function() {
                        $('.result').show();
                    }, 2000);
                }
                tfCnt++;
            } else {
                currentData.addClass('wrong-tick');
            }
        }
    });

    $('.next').click(function() {
        $(this).parent().hide().next().show(); //hide parent and show next   
        $('.next').hide();
    });
});

function htmlEntities(str) {
    return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}

var fibCnt = 1;
$(document.body).on('click', '.fibClick', function(e) {
    var currentData = $(this);
    var Cvalue = currentData[0].innerText;
    var answer = currentData.data('answer');
    var fibId = currentData.data("id");
    if ($(this).hasClass('fibClick')) {
        if (Cvalue == answer) {
            ansTxt = answer;
            $('#div' + fibId).html(ansTxt);
            $('#div' + fibId).css('padding', '0 10px');
            currentData.addClass('right-tick');
            currentData.parent().find('p').removeClass('fibClick');
            if (fibCnt < cnt_fib) {
                currentData.parent().next().show();
            }
            if (cnt_fib == fibCnt) {
                setTimeout(function() {
                    $('.result').show();
                }, 2000);
            }
            fibCnt++;
            //console.log("MCQ");
        } else {
            currentData.addClass('wrong-tick');
        }
    }
});

$.fn.shufflelistitems = function() {
    $.each(this.get(), function(index, el) {
        var $el = $(el);
        var $find = $el.children();

        $find.sort(function() {
            return 0.5 - Math.random();
        });

        $el.empty();
        $find.appendTo($el);
    });
};
$(".shuffle-list-items").shufflelistitems();
$.fn.jquery