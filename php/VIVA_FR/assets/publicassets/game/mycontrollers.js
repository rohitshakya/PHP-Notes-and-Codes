$(document).ready(function(){
    var animid;
    var timeid;
    var charector = $("#charectorholder");
    var container = $(".game_container");
    var score = $("#viewscore");
    var totalscore = $("#totalscore");
    var questionArea = $(".questionArea");
    var optionsArea = $(".questionOptions");
    var life = $(".life_count");
    var levelcount = $('.level_count');
    //some other declarations
    var isQuestion = true;
    var game_over = false;
    var move_right = false;
    var move_left = false;
    var jumpchar = '';
    var sitchar = '';
    var totallevel   = questions.length-1;
    var currentlevel   = 1;
    var levelquestions   =   [];
    var countlife = 3;
    var runningcounter = 1;
    var runningsteps = 1;
    var milisecond = 1;
    var getQuestionNo  = '-1';
    var questionShuffle    =   [];
    var optionShuffle    =   [];
    var questionDiff    = 0;
    var questionStep    = 0;
    
    $(document).on('keydown', function(e) {
        if (game_over === false && isQuestion==false) {
            var key = e.keyCode;
            if (key === 37 && move_left === false) { //left key
                jumpchar = game_url+'charectors/jump_left.gif';
                sitchar = game_url+'charectors/left_sit.png';
                charector.attr('src', game_url+'charectors/left.gif');
                move_left = requestAnimationFrame(left);
                cancelAnimationFrame(move_right);
                move_right = false;
                cancelAnimationFrame(animid);
                cancelAnimationFrame(timeid);
                timeid = requestAnimationFrame(convertTimestamptoTime);
            } else if (key === 39 && move_right === false) { //right key
                jumpchar = game_url+'charectors/jump_right.gif';
                sitchar = game_url+'charectors/right_sit.png';
                charector.attr('src', game_url+'charectors/right.gif');
                move_right = requestAnimationFrame(right);
                cancelAnimationFrame(move_left);
                move_left = false;
                animid = requestAnimationFrame(scoregenerator);
                cancelAnimationFrame(timeid);
                timeid = requestAnimationFrame(convertTimestamptoTime);
            }
        }
        else{
            return false;
        }
    });
    
    $(document).on('keyup', function(e) {
        if (game_over === false) {
            var key = e.keyCode;
            if (key === 37) { //left
                cancelAnimationFrame(move_left);
                move_left = false;
            } else if (key === 39) { //right
                cancelAnimationFrame(move_right);
                move_right = false;
            }else if (key === 38) { //up
                var getSrc = charector.attr('src');
                charector.attr('src', jumpchar);
                setTimeout(function(){ charector.attr('src', getSrc); }, 1000);
            } else if (key === 40) { //down
                //var getSrc = charector.attr('src');
                //charector.attr('src', sitchar);
                //setTimeout(function(){ charector.attr('src', getSrc); }, 300);
            }
        }
        if(move_left == false && move_right == false ){
            charector.attr('src', game_url+'charectors/front.gif');
            cancelAnimationFrame(animid);
        }
    });

    function left() {
        if (game_over === false) {
            container.css('background-position', parseInt(container.css('background-position')) + 2);
            move_left = requestAnimationFrame(left);
        }
    }

    function right() {
        if (game_over === false) {
            container.css('background-position', parseInt(container.css('background-position')) - 2);
            move_right = requestAnimationFrame(right);
        }
    }

    function scoregenerator(){
        runningcounter++;
        if(runningcounter % 30 == 0 && isQuestion===false){
            runningsteps = runningsteps+1; 
        }
        if(runningsteps==questionStep){
            $(".restart").css('display', 'inline');
            getQuestionBoard();
        }
        animid = requestAnimationFrame(scoregenerator);
        return false;
    }

    function convertTimestamptoTime(){ 
            milisecond++;
            dateObj = new Date(milisecond * 30); 
            utcString = dateObj.toUTCString(); 
            time = utcString.slice(-11, -4); 
            document.querySelector('#viewtimer').textContent = time;    
            timeid = requestAnimationFrame(convertTimestamptoTime);
            return false;
    }
    
    function reloadlevel(){
        levelquestions   =   questions[currentlevel];
        questionDiff    = Math.round(60/Math.round(levelquestions.length));
        questionStep    = questionDiff;
        life.text(countlife);
        levelcount.text(currentlevel);
        totalscore.text(levelquestions.length);

        runningcounter = 1;
        runningsteps = 1;

        getQuestionNo = '-1';
        var getDecor = leveldecoration[currentlevel];
        totalscore.text(levelquestions.length);
        suffelData();        
        $('.nextBtn').show();
        container.css({'background-image':'url("https://lotus.vivadigitalindia.net/VivaApp/app/'+getDecor[0]+'")'});
        questionArea.css({'background-image':'url("https://lotus.vivadigitalindia.net/VivaApp/app/'+getDecor[1]+'")', 'border-color':''+getDecor[2]+''});
    }
    reloadlevel();

    function suffelData() {
        var tempArray = [];
        $.each(levelquestions, function(tm) {
            tempArray.push(tm);
        }); 
    
        function shuffle(a) {
            $.each(a, function(sf) {
                var jk = Math.floor(Math.random() * (sf + 1));
                [a[sf], a[jk]] = [a[jk], a[sf]];
            }); 
            return a;
        }
        questionShuffle = shuffle(tempArray);
        console.log(questionShuffle);
    }
    suffelData();
    function suffleAns(options=Array()){
        var tempAnsArray = [];
        $.each(options, function(an) {
            tempAnsArray.push(an);
        }); 
    
        function ansshuffle(ans) {
            $.each(ans, function(anf) {
                var jka = Math.floor(Math.random() * (anf + 1));
                [ans[anf], ans[jka]] = [ans[jka], ans[anf]];
            }); 
            return ans;
        }
        optionShuffle = ansshuffle(tempAnsArray);
    }
    
    function getQuestionBoard(){
        cancelAnimationFrame(animid);
        cancelAnimationFrame(timeid);
        cancelAnimationFrame(move_right);
        cancelAnimationFrame(move_left);
        move_right = false;
        move_left  = false;
        charector.attr('src', game_url+'charectors/front.gif');
        questionArea.css('display', 'block');
        questionArea.removeClass('bounceOutUp');
        questionArea.addClass('bounceInDown');
        if(isQuestion==false){
            getQuestionNo++;
            var currentQuestion = levelquestions[questionShuffle[getQuestionNo]];
            suffleAns(currentQuestion[1]);
            createOptions(currentQuestion[1], currentQuestion[2]);
            $("#questionTitle").html(currentQuestion[0]);
        }
        isQuestion=true;
    }

    function createOptions(alloptions, correctoptions){
        //suffelData();
        optionsArea.html("");
        $.each(alloptions, function(op){
            var correctAns = (correctoptions==alloptions[optionShuffle[op]])?true:false;
            optionsArea.append(' <li><span class="four_options" data="'+correctAns+'" >'+alloptions[optionShuffle[op]]+'</span></li> ');
        });
    }

    $(document).on('click', '.four_options', function(){
        var data = $(this).attr('data');
        $('.four_options').css('background-image', "linear-gradient(173deg, #fecfae 36%, #ff5200)");
        $(this).css('background-image', "linear-gradient(161deg, #fecfae 19%, #3ec5b2)");
        if(data=='true'){
            $('.ansText').css('color', '#3fff00');
            $('.ansText').text("You are right !");
            $('.ansImg').attr('src', game_url+'charectors/correct.gif');
            $('.nextBtn').attr('id', 'playnext');
            $('.nextBtn').text(' Next ');
            $('.nextBtn').css('background-image', "linear-gradient(161deg, #fecfae 19%, #3ec5b2)");
            score.text(parseInt(score.text())+1);
            if(parseInt(score.text())==parseInt(totalscore.text()) && totallevel!=parseInt(levelcount.text())){
                $('.ansImg').attr('src', game_url+'charectors/correct.gif');
                $('.ansText').text("Level compeleted.");
                $('.nextBtn').attr('id', 'playnextlevel');
                $('.nextBtn').text(' Play Next Level ! ');
            }
            else if(parseInt(score.text())==parseInt(totalscore.text()) && totallevel == parseInt(levelcount.text()) ){
                $('.ansImg').attr('src', game_url+'charectors/won.gif');
                $('.ansText').text("Congratulation! You won the game.");
                $('.nextBtn').attr('id', 'playagain');
                $('.nextBtn').text(' Play Again ! ');
            }
        }
        else{
            countlife--;
            life.text(countlife);
            if(countlife>0){
                $('.ansText').text("Sorry You are wrong !");
                $('.ansImg').attr('src', game_url+'charectors/wrong.gif');
                $('.nextBtn').attr('id', 'tryagain');
                $('.nextBtn').text(' Try Again ! ');
            }
            else{
                $('.ansImg').attr('src', game_url+'charectors/over.gif');
                $('.ansText').text("Sorry game is over !");
                $('.nextBtn').attr('id', 'playagain');
                $('.nextBtn').text(' Play Again ! ');
            }
            $('.ansText').css('color', '#ffa500');
            $('.nextBtn').css('background-image', "linear-gradient(161deg, #fecfae 19%, #c53e3e)");
        }
        $('.currentResult').css('display', 'inherit');
    });

    $(document).on('click', '#tryagain', function(){
        $('.currentResult').css('display', 'none');
        $('.four_options').css('background-image', "linear-gradient(173deg, #fecfae 36%, #ff5200)");
    });
    $(document).on('click', '#playnext', function(){
        $('.four_options').css('background-image', "linear-gradient(173deg, #fecfae 36%, #ff5200)");
        $('.currentResult').css('display', 'none');
        isQuestion=false;
        questionStep=questionStep+questionDiff;
        questionArea.removeClass('bounceInDown');
        questionArea.addClass('bounceOutUp');
        setTimeout(function(){
            questionArea.css('display', 'none');
        }, 500);
    });
    $(document).on('click', '#playagain', function(){
        location.reload();
    });
    $(document).on('click', '.playButton', function(){
        isQuestion=false;
        $('.loader').hide();
    }); 
    $(document).on('click', "#playnextlevel", function(){
        $('.four_options').css('background-image', "linear-gradient(173deg, #fecfae 36%, #ff5200)");
        $('.currentResult').css('display', 'none');
        isQuestion=false;
        questionArea.removeClass('bounceInDown');
        questionArea.addClass('bounceOutUp');
        setTimeout(function(){
            questionArea.css('display', 'none');
            reloadlevel();
        }, 500);
        currentlevel=currentlevel+1;
        score.text(0);
        $(this).hide();
    });

    function resizeToMinimum(){
  var minimum    = [640, 480];
  var current    = [window.outerWidth, window.outerHeight];
  var restricted = [];
  var i          = 2;

  while(i-- > 0){
    restricted[i] = minimum[i] > current[i] ? minimum[i] : current[i];
  }

  window.resizeTo(current[0], current[1]);
}

window.addEventListener('resize', resizeToMinimum, false)

})