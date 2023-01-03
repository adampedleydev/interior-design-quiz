<?php
session_start();

$_SESSION['less'] = $_GET["less"];
$_SESSION['middle'] = $_GET["middle"];
$_SESSION['more'] = $_GET["more"];

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
        <script src="https://cdn.jsdelivr.net/npm/party-js@latest/bundle/party.min.js"></script>
    </head>
    <body>
        <div class="center-grid">
            <img src="./img/reform.png" class="quiz-logo">
        </div>

        <div class="center-grid">
            <div style="padding-top: 65px;">
                <div style="padding-top: 15px;">
                  <h3 class="quiz-headers" style="width: 100%; text-align: center; padding-top: 25px;">What is your preferred finish?</h3>
                </div>
            </div>
        </div>
        <div class="center-grid">
          <div class="quiz-circle-1" style="margin-right: 10px;">
            <span>
              <div class="circle-label-2" style="margin-top: 40px;">Chrome</div>
              <input type="radio" id="chrome" class="hiddenCheck" name="opt"> 
            </span>
          </div>
          <div class="quiz-circle-1" style="margin-right: 10px;">
            <span>
              <div class="circle-label-2" style="margin-top: 40px;">Gold</div>
              <input type="radio" id="gold" class="hiddenCheck" name="opt"> 
            </span>
          </div>
          <div class="quiz-circle-1" style="margin-right: 10px;">
            <span>
              <div class="circle-label-2" style="margin-top: 40px;">Copper</div>
              <input type="radio" id="copper" class="hiddenCheck" name="opt"> 
            </span>
          </div>
          <div class="quiz-circle-1" style="margin-right: 10px;">
            <span>
              <div class="circle-label-2" style="margin-top: 40px;">Black</div>
              <input type="radio" id="black" class="hiddenCheck" name="opt"> 
            </span>
          </div>
        </div>
        <div class="quiz-next">
          <a href="./interior_quiz_12.php">

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
      $('.quiz-circle-1').click(function() {
        $('.selectedCircle').removeClass('selectedCircle');
        $(this).addClass('selectedCircle').find('input').prop('checked', true)
    });

    function nextPage(){
      if($('#chrome').is(':checked')) {
        var chrome = 1;
      } else {
        var chrome = 0;
      }

      if($('#gold').is(':checked')) {
        var gold = 1;
      } else {
        var gold = 0;
      }

      if($('#copper').is(':checked')) {
        var copper = 1;
      } else {
        var copper = 0;
      }

      if($('#black').is(':checked')) {
        var black = 1;
      } else {
        var black = 0;
      }
      
      window.location.href='interior_quiz_13.php?chrome=' + chrome + '&gold=' + gold + '&copper=' + copper + '&black=' + black + '';
    }

  </script>
</html>