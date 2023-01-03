<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./css/style.css" rel="stylesheet">
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
                  <h3 class="quiz-headers" style="width: 100%; text-align: center; padding-top: 25px;">Firstly, what is your name?</h3>
                </div>
            </div>
        </div>
        <div class="center-grid">
            <input class="text-field" id="name">
        </div>

        <div class="quiz-next">
          <button class="quiz-next-button" id="next">
            <span>NEXT</span>
          </button>
          </div>
    </body>
    <script>
    document.getElementById('next').addEventListener("click", function() {
      var name = document.getElementById('name').value 
      sessionStorage.setItem("name", name);
      location.href = './interior_quiz_1.php?name=' + name;
    });

      $(document).ready(function() {
        party.confetti('.quiz-circle-2');
      });
      $('.quiz-circle-1').click(function() {
        $('.selectedCircle').removeClass('selectedCircle');
        $(this).addClass('selectedCircle').find('input').prop('checked', true)
    });
  </script>
</html>