<?php
session_start();
$_SESSION['bedroom3_starting_scratch'] = $_GET["starting_scratch"];
$_SESSION['bedroom3_part_way'] =  $_GET["part_way"];
$_SESSION['bedroom3_mostly_furnished'] =  $_GET["mostly_furnished"];


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.extensionplansuk.co.uk/wp-content/themes/extensionplan/css/main.css">
        <link rel="stylesheet" href="https://www.extensionplansuk.co.uk/wp-content/themes/extensionplan/css/stylesheet.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/party-js@latest/bundle/party.min.js"></script>
    </head>
    <body>
      <div class="type-sticker">
        <div class="quiz-circle-3 hvr-grow">
          <span>
            <img src="../img/icons/bedroom.svg" class="circle-icon"></br>
            <div class="circle-label">Bedroom #3</div>
          </span>
        </div>
      </div>
        <div class="center-grid">
            <img src="../img/reform.png" class="quiz-logo">
        </div>

        <div class="grid" style="padding-top: 100px;">
          <div>
            <div style="padding-top: 15px;">
              <h3 class="quiz-headers" style="width: 100%; padding-top: 25px; padding-left: 90px;">What does your budget look like?</h3>
              <h6 class="quiz-headers" style="width: 100%; padding-top: 10px; padding-left: 100px; font-size: 16px;">(materials, furniture, paint) not including labour</h6>

            </div>
            
            <div class="center-grid">
              <div class="quiz-circle-1" style="margin-left: 70px; padding-top: 21px;">
                <span>
                  <img src="../img/money.svg" class="circle-icon"></br>
                  <div class="circle-label">Less than </br> £2000</div>
                  <input type="radio" id="less2000" class="hiddenCheck" name="opt"> 
                </span>
              </div>
              <div class="quiz-circle-1" style="margin-left: 70px; padding-top: 21px;">
                <span>
                  <img src="../img/money.svg" class="circle-icon"></br>
                  <div class="circle-label">£2000 - £5000</div>
                  <input type="radio" id="v20005000" class="hiddenCheck" name="opt"> 
                </span>
              </div>
              <div class="quiz-circle-1" style="margin-left: 70px; padding-top: 21px;">
                <span>
                  <img src="../img/money.svg" class="circle-icon"></br>
                  <div class="circle-label">£5000 - £7000</div>
                  <input type="radio" id="v50007000" class="hiddenCheck" name="opt"> 
                </span>
              </div>
              <div class="quiz-circle-1" style="margin-left: 70px; padding-top: 21px;">
                <span>
                  <img src="../img/money.svg" class="circle-icon"></br>
                  <div class="circle-label">£10,000 or </br>more</div>
                  <input type="radio" id="more10000" class="hiddenCheck" name="opt"> 
                </span>
              </div>
            </div>

          </div>
          <div>
            <img src="../img/heart-sketch.svg" style="width: 55%; padding-left: 150px;">
          </div>
        </div>          
        <div class="quiz-next">
          <a href="../interior_quiz_4.php">

          </a>
          <button class="quiz-next-button" onclick="nextPage()">
              <span>NEXT</span>
            </button>
        </div>
    </body>
    <script>
      $('.quiz-circle-1').click(function() {
        $('.selectedCircle').removeClass('selectedCircle');
        $(this).addClass('selectedCircle').find('input').prop('checked', true)
    });

    function nextPage(){
      if($('#less2000').is(':checked')) {
        var less2000 = 1;
      } else {
        var less2000 = 0;
      }

      if($('#v20005000').is(':checked')) {
        var v20005000 = 1;
      } else {
        var v20005000 = 0;
      }

      if($('#v50007000').is(':checked')) {
        var v50007000 = 1;
      } else {
        var v50007000 = 0;
      }

      if($('#more10000').is(':checked')) {
        var more10000 = 1;
      } else {
        var more10000 = 0;
      }
      window.location.href='./interior_quiz_6.php?v20005000=' + v20005000 + '&v50007000=' + v50007000 + '&more10000=' + more10000 + '&less2000=' + less2000 + '';
    }
  </script>
</html>