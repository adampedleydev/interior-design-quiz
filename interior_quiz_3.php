<?php session_start();

$_SESSION['adults'] = $_GET["adults"];
$_SESSION['children'] = $_GET["children"];
$_SESSION['pets'] = $_GET["pets"];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.extensionplansuk.co.uk/wp-content/themes/extensionplan/css/main.css">
        <link rel="stylesheet" href="https://www.extensionplansuk.co.uk/wp-content/themes/extensionplan/css/stylesheet.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
    </head>
    <body>
        <div class="center-grid">
            <img src="./img/reform.png" class="quiz-logo">
        </div>

        <div class="grid-quiz" style="margin-top: -100px;">
            <div style="padding-left: 65px; padding-top: 65px;">
                <div style="padding-top: 15px;">
                  <img src="./img/icons/star.svg" style="width: 50%; margin-left: 150px;">
                  <h3 class="quiz-headers" style="width: 80%; text-align: center; padding-top: 25px;">What's the occasion?</h3>
                </div>
            </div>
            <div class="quiz-container-2" style="padding-top: 200px;">
              <div class="quiz-circle-2">
                <span>
                  <div class="circle-label-2">Selling house</div>
                  <input type="radio" id="selling_house" class="hiddenCheck" name="opt"> 
                </span>
              </div>
              <div class="quiz-circle-2">
                <span>
                  <div class="circle-label-2" onclick="confetti()">Just moved</div>
                  <input type="radio" id="just_moved" class="hiddenCheck" name="opt"> 
                </span>
              </div>
              <div class="quiz-circle-2">
                <span>
                  <div class="circle-label-2" style="margin-top: -10px;">Budget allows for new furniture</div>
                  <input type="radio" id="new_furniture" class="hiddenCheck" name="opt"> 
                </span>
              </div>
              <div class="quiz-circle-2">
                <span>
                  <div class="circle-label-2" style="margin-top: -10px;">Ready for a </br>fresh look</div>
                  <input type="radio" id="fresh_look" class="hiddenCheck" name="opt"> 
                </span>
              </div>
              <div class="quiz-circle-2">
                <span>
                  <div class="circle-label-2">Other</div>
                  <input type="radio" id="other_reason" class="hiddenCheck" name="opt"> 
                </span>
              </div>
              
            </div>
        </div>
        <div class="quiz-next">
          <a href="./interior_quiz_2.php">

          </a>
          <button onclick="nextPage()" class="quiz-next-button">
            <span>NEXT</span>
          </button>
        </div>
    </body>
    <script>
       var array = sessionStorage.getItem("array");
       parsedArray = JSON.parse(array)
       var nextSection = parsedArray[0]
      $('.quiz-circle-2').click(function() {
        $('.selectedCircle').removeClass('selectedCircle');
        $(this).addClass('selectedCircle').find('input').prop('checked', true)
    });

    
    var myCanvas = document.createElement('canvas');
    document.body.appendChild(myCanvas);
    
    var myConfetti = confetti.create(myCanvas, { resize: true });
    
    myConfetti();

    function nextPage(){
    if($('#selling_house').is(':checked')) {
      var selling_house = 1;
    } else {
      var selling_house = 0;
    }

    if($('#just_moved').is(':checked')) {
      var just_moved = 1;
    } else {
      var just_moved = 0;
    }

    if($('#new_furniture').is(':checked')) {
      var new_furniture = 1;
    } else {
      var new_furniture = 0;
    }

    if($('#fresh_look').is(':checked')) {
      var fresh_look = 1;
    } else {
      var fresh_look = 0;
    }

    if($('#other_reason').is(':checked')) {
      var other_reason = 1;
    } else {
      var other_reason = 0;
    }
    window.location.href='./'+nextSection+'/interior_quiz_intro.php?selling_house=' + selling_house + '&just_moved=' + just_moved + '&new_furniture=' + new_furniture + '&fresh_look=' + fresh_look + '&other_reason=' + other_reason + '&next=yes' + '';
  }
    
    setTimeout(() => {
      myConfetti.reset();
    }, 100);
  </script>
</html>