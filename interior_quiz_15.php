<?php
session_start();

$_SESSION['incorporate'] = $_GET['filename'];
$_SESSION['itemText'] = $_GET['itemText'];

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
                  <h3 class="quiz-headers" style="width: 100%; text-align: center; padding-top: 25px;">Anything else you think we should know?</h3>
                  <h5 style="color: rgb(63, 63, 63); text-align: center; line-height: 1.2 !important; padding-top: 10px;">
                    The more information we have, the better we can design to you
                    personally!
                  </br>(Examples may be, certain items you would like to make space for or radiators or steps to watch out for)
                  </h5>
                </div>
                <div class="center-grid">
                  <textarea id="extratext" style="border: 2px solid #f6936e; width: 40%; resize: none; margin-top: 40px;"></textarea>
                </div>
            </div>
        </div>
        <div class="center-grid" style="padding-top: 30px;">
        </div>
        <div class="quiz-next">
          <a href="./interior_quiz_14.php">

          </a>
          <button class="quiz-next-button" onclick="nextButton()">
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

      function nextButton() {
        var text = document.getElementById("extratext").value;
        var encode = btoa(text)
        window.location.href='./interior_quiz_16.php?&extratext=' + encode + '';
      }
  </script>
</html>