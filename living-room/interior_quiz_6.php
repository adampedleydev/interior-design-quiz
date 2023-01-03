<?php
session_start();

$_SESSION['livingroom_less2000'] = $_GET["less2000"];
$_SESSION['livingroom_v20005000'] = $_GET["v20005000"];
$_SESSION['livingroom_v50007000'] = $_GET["v50007000"];
$_SESSION['livingroom_more10000'] = $_GET["more10000"];
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
            <img src="../img/icons/living-room.svg" class="circle-icon"></br>
            <div class="circle-label">Living Room</div>
          </span>
        </div>
      </div>
        <div class="center-grid">
            <img src="../img/reform.png" class="quiz-logo">
        </div>

        <div class="center-grid">
            <div style="padding-top: 65px;">
                <div style="padding-top: 15px;">
                  <h3 class="quiz-headers" style="width: 100%; text-align: center; padding-top: 25px;">What are your colour preferences?</h3>
                </div>
            </div>
        </div>
        <div class="center-grid">
          <div class="quiz-circle-2" style="margin-right: 20px;">
            <span>
              <div class="circle-label-2">Neutral Palette</div>
              <input type="radio" id="neutral" class="hiddenCheck" name="opt"> 
            </span>
          </div>
          <div class="quiz-circle-2" style="margin-right: 20px;">
            <span>
              <div class="circle-label-2" style="margin-top: -5px;">Neutral with pops</br>of colour</div>
              <input type="radio" id="neutralpops" class="hiddenCheck" name="opt"> 
            </span>
          </div>
          <div class="quiz-circle-2">
            <span>
              <div class="circle-label-2">Bright & Bold</div>
              <input type="radio" id="brightbold" class="hiddenCheck" name="opt"> 
            </span>
          </div>
        </div>
        <div class="quiz-next">
          <a href="interior_quiz_5.php">

          </a>
          <button class="quiz-next-button" onclick="nextPage()">
              <span>NEXT</span>
            </button>
        </div>
    </body>
    <script>
      $(document).ready(function() {
        party.confetti('.quiz-circle-2');
      });
      $('.quiz-circle-2').click(function() {
        $('.selectedCircle').removeClass('selectedCircle');
        $(this).addClass('selectedCircle').find('input').prop('checked', true)
    });

    function nextPage(){
      if($('#neutral').is(':checked')) {
        var neutral = 1;
      } else {
        var neutral = 0;
      }

      if($('#neutralpops').is(':checked')) {
        var neutralpops = 1;
      } else {
        var neutralpops = 0;
      }

      if($('#brightbold').is(':checked')) {
        var brightbold = 1;
      } else {
        var brightbold = 0;
      }
      window.location.href='./interior_quiz_7.php?neutral=' + neutral + '&neutralpops=' + neutralpops + '&brightbold=' + brightbold + '';
    }

  </script>
</html>