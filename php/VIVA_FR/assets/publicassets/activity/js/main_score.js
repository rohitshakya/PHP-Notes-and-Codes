var ls = $.localStorage();
jQuery(document).ready(function ($) {
  $(".box-a").click(function () {
    $("#loader").css("display", "grid");
    var dataTarget = $(this).attr("data-target");
    var setIds = $(this).attr("data-setids");
    var classIs = $(this).attr("data-class");
    var viewIds = $(this).attr("id");
    /*document.cookie = "typeis="+dataTarget;*/
    ls.setItem("typeis", dataTarget);
    ls.setItem("idis", viewIds);
    $(".act-box-2").hide();
    $(".result").hide();
    $(dataTarget).show();
    $("a.box-a").css("opacity", "1");
    $("a[data-target='" + dataTarget + "']").css({
      opacity: "0.7",
      background: "#206aa2",
    });
    window.location.replace(
      base_url_practice +
        "/" +
        setIds +
        "/" +
        dataTarget.slice(1) +
        "?" +
        classIs
    );
    //window.location.reload();
  });
});

  $(document.body).on("click", ".draggable", function () {
    $(".draggable").css("box-shadow", "");
    actiondata = true;
    bgcolors = $(this).css("backgroundColor");
    attemptQ = $(this).data("id");
    //$(".droppable:not(.right-tick)").css("pointer-events", "auto");
    $(this).css({
      "box-shadow": "#656565 0px 0px 10px 1px",
    });
  });

  var skip = 0;

  var dropCnt = 0;
  var rightmch = 0;
  var wrngmch = 0;
  $(document.body).on("click", ".droppable", function () {
    if (actiondata == true) {
      attemptA = $(this).data("aid");
      //$('.droppable').removeClass("wrong-tick");
      $('[data-id="' + attemptQ + '"]').css("pointer-events", "none");
      $('[data-aid="' + attemptA + '"]').css("pointer-events", "none");
      $(this).css({
        "background-color": bgcolors,
        color: "#fff",
      });
      $(this).css("pointer-events", "none");
      actiondata = false;
      if (attemptQ == attemptA) {
        //$(this).addClass("right-tick");
        //$(this).removeClass("wrong-tick");
        rightmch++;
      } else {
        //$(this).addClass("wrong-tick");
        wrngmch++;
      }
      dropCnt++;
      if (cnt_mch == dropCnt) {
        $('.submit-ans').show();
        setTimeout(function () {
          $('.submit-ans').click(function(){
            $(".result").show();
          });
          // $(".result").show();
          $(".total_qns").html(cnt_mch);
          $(".right_qns").html(rightmch);
          $(".wrng_qns").html(wrngmch);
        }, 2000);

        $.ajax({
          type: "POST",
          url: base_url + "Publicmodule/gen_report",
          data: {
            total_qns: cnt_mch,
            right_qns: rightmch,
            wrng_qns: wrngmch,
            setId: setId,
            starttime: starttime,
            type: "mch",
          },
          success: function (response) {
            console.log(response);
          },
        });
      }
      //console.log(cnt_mch + "== R:" + rightmch + "== W:" + wrngmch + "== T:" + dropCnt);
    } else {
      $(".error").text("Please select question!");
      $(".error").css("display", "inline-block");
    }
  });

  var mcqCnt = 0;
  wrngmcq = 0;
  rightmcq = 0;
  currentattempt = 0;
  $(document.body).on("click", ".qClick", function (e) {
    $(".qClick").removeClass("qns-attempt");
    var currentData = $(this);
    var Cvalue = currentData[0].innerText;
    var answer = currentData.data("answer");
    var qId = currentData.data("qid");
    $("#skip-" + qId).hide();
    if ($(this).hasClass("qClick")) {
      if (Cvalue == answer) {
        // rightmcq++;
      } else {
        //$("#ans" + currentData.attr("id")).removeClass("optmcq");
        // wrngmcq++;
      }
      currentData.addClass("qns-attempt");
      currentData.parent().find("p");
      //.removeClass("qClick");
      if (mcqCnt < cnt_mcq - 1) {
        currentData.parent().next().show();
      }
      //mcqCnt++;
    }

    if (cnt_mcq == mcqCnt + 1) {
      $("#ans" + currentData.attr("id")).removeClass("optqns");

      var catchOptions = $(".qns-attempt");
      var correctIs = catchOptions.data("answer");
      var selectedIs = catchOptions.text();
      if (selectedIs == correctIs) {
        rightmcq++;
      } else {
        wrngmcq++;
      }

      if (correctIs === undefined || selectedIs.length < 0) {
        skip++;
      } else {
        $(".viewscore").removeClass("qClick");
      }

      //setTimeout(function () {
        //$(".result").show();
        $(".total_qns").html(cnt_mcq);
        $(".right_qns").html(rightmcq);
        $(".wrng_qns").html(wrngmcq);
        $(".skip_qns").html(skip);
     // }, 2000);

      $.ajax({
        type: "POST",
        url: base_url + "Publicmodule/gen_report",
        data: {
          total_qns: cnt_mcq,
          right_qns: rightmcq,
          wrng_qns: wrngmcq,
          setId: setId,
          starttime: starttime,
          type: "mcq",
        },
        success: function (response) {
          console.log(response);
        },
      });
      //console.log(cnt_mcq + "== R:" + rightmcq + "== W:" + wrngmcq + "== T:" + mcqCnt);
    }
  });

  var tfCnt = 0;
  var wrngtnf = 0;
  var righttnf = 0;
  $(document.body).on("click", ".qtfClick", function (e) {
    $(".qtfClick").removeClass("qns-attempt");
    var currentData = $(this);
    var Cvalue = currentData[0].innerText;
    var answer = currentData.data("answer");
    var qId = currentData.data("qid");
    $("#skip-" + qId).hide();
    
    if ($(this).hasClass("qtfClick")) {
      if (Cvalue == answer) {
        //righttnf++;
      } else {
        //$("#ans" + currentData.attr("id")).removeClass("opttnf");
        //wrngtnf++;
      }
      currentData.addClass("qns-attempt");
      currentData.parent().find("p");
      //.removeClass("qtfClick");
      if (tfCnt < cnt_tnf - 1) {
        currentData.parent().next().show();
      }
    }

    if (cnt_tnf == tfCnt + 1) {
      $("#ans" + currentData.attr("id")).removeClass("optqns");
      var catchOptions = $(".qns-attempt");
      var correctIs = catchOptions.data("answer");
      var selectedIs = catchOptions.text();
      if (selectedIs == correctIs) {
        righttnf++;
      } else {
        wrngtnf++;
      }

      if (correctIs === undefined || selectedIs.length < 0) {
        skip++;
      } else {
        $(".viewscore").removeClass("qtfClick");
      }
      //console.log(skip);
     // setTimeout(function () {
        //$(".result").show();
        $(".total_qns").html(cnt_tnf);
        $(".right_qns").html(righttnf);
        $(".wrng_qns").html(wrngtnf);
        $(".skip_qns").html(skip);
     // }, 2000);

      $.ajax({
        type: "POST",
        url: base_url + "Publicmodule/gen_report",
        data: {
          total_qns: cnt_tnf,
          right_qns: righttnf,
          wrng_qns: wrngtnf,
          setId: setId,
          starttime: starttime,
          type: "tnf",
        },
        success: function (response) {
          console.log(response);
        },
      });
    }
  });

  function htmlEntities(str) {
    return String(str)
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;");
  }

  var fibCnt = 0;
  wrngfib = 0;
  rightfib = 0;
  $(document.body).on("click", ".fibClick", function (e) {
    $(".fibClick").removeClass("qns-attempt");
    //$(".optfib").removeClass("crctopt");
    var currentData = $(this);
    var Cvalue = currentData[0].innerText;
    var answer = currentData.data("answer");
    var ansTxt = currentData.data("text");
    var fibId = currentData.data("id");
    var qId = currentData.data("qid");
    $("#skip-" + qId).hide();

    if ($(this).hasClass("fibClick")) {
      if (Cvalue == answer) {
        //currentData.addClass("optfib");
        ansTxt = answer;
        //rightfib++;
      } else {
        //$('#ans'+currentData.attr('id')).removeClass("badge-secondary");
        //$("#ans" + currentData.attr("id")).removeClass("optfib");
        //wrngfib++;
      }
      //$("#ans" + currentData.attr("id")).addClass("crctopt");
      currentData.addClass("qns-attempt");
      currentData.parent().find("p");
      //.removeClass("fibClick");
      if (fibCnt < cnt_fib - 1) {
        currentData.parent().next().show();
      }

      $("#div" + fibId).html(ansTxt);
      $("#div" + fibId).css("padding", "0 10px");
    }
    if (cnt_fib == fibCnt + 1) {
      $("#ans" + currentData.attr("id")).removeClass("optqns");

      var catchOptions = $(".qns-attempt");
      var correctIs = catchOptions.data("answer");
      var selectedIs = catchOptions.text();
      if (selectedIs == correctIs) {
        rightfib++;
      } else {
        wrngfib++;
      }

      if (correctIs === undefined || selectedIs.length < 0) {
        skip++;
      } else {
        $(".viewscore").removeClass("fibClick");
      }

      //setTimeout(function () {
        //$(".result").show();
        $(".total_qns").html(cnt_fib);
        $(".right_qns").html(rightfib);
        $(".wrng_qns").html(wrngfib);
        $(".skip_qns").html(skip);
    //   }, 2000);

      $.ajax({
        type: "POST",
        url: base_url + "Publicmodule/gen_report",
        data: {
          total_qns: cnt_fib,
          right_qns: rightfib,
          wrng_qns: wrngfib,
          setId: setId,
          starttime: starttime,
          type: "fib",
        },
        success: function (response) {
          console.log(response);
        },
      });
    }
    //console.log(cnt_mcq + "== R:" + rightmcq + "== W:" + wrngmcq+"== T:"+fibCnt);
  });

  $(".viewscore").click(function () { 
		
      $(".result").show();  
		audioReset();
  });

	function audioReset(){
			$('audio').each(function(){
		this.pause(); // Stop playing
		this.currentTime = 0; // Reset time
		}); 
	}
  $(".next").click(function () {
    var catchOptions = $(".qns-attempt");
    var correctIs = catchOptions.data("answer");
    var selectedIs = catchOptions.text();
	
    $("#ans" + catchOptions.attr("id")).removeClass("optqns");

    if (selectedIs == correctIs) {
      rightmcq++;
      righttnf++;
      rightfib++;
    } else {
      wrngmcq++;
      wrngtnf++;
      wrngfib++;
    }
    mcqCnt++;
    tfCnt++;
    fibCnt++;
    $(this).parent().hide().next().show(); //hide parent and show next
    $(".next").hide();
	audioReset();
  });

  $(".skip").click(function () {
    mcqCnt++;
    tfCnt++;
    fibCnt++;
    skip++;
    $(this).parent().hide().next().show(); //hide parent and show next
    $(".next").hide();
    $(".skip_qns").show();
	audioReset();
  });


  var infoCnt = 0;
  $('.TypeNxt1').click(function() {
      $(this).parent().hide().next().show(); //hide parent and show next    
      infoCnt++;
      if ($('[name="infoNum"]').val() == infoCnt) {
          setTimeout(function() {
              $('#act_result').hide();
              $('.result').show();           
          }, 100);
      }
  });

$.fn.shufflelistitems = function () {
  $.each(this.get(), function (index, el) {
    var $el = $(el);
    var $find = $el.children();

    $find.sort(function () {
      return 0.5 - Math.random();
    });

    $el.empty();
    $find.appendTo($el);
  });
};
$(".shuffle-list-items").shufflelistitems();
$.fn.jquery;
