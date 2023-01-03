<?php error_reporting(0);

session_start();

if ($_GET['selling_house']) {
  $_SESSION['selling_house'] = $_GET["selling_house"];
} else if ($_GET['just_moved']) {
  $_SESSION['just_moved'] = $_GET["just_moved"];
} else if ($_GET['new_furniture']) {
  $_SESSION['new_furniture'] = $_GET["new_furniture"];
} else if ($_GET['new_furniture']) {
  $_SESSION['fresh_look'] = $_GET["fresh_look"];
} else if ($_GET['other_reason']) {
  $_SESSION['other_reason'] = $_GET["other_reason"];
}

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
        <div class="center-grid">
            <img src="../img/reform.png" class="quiz-logo">
        </div>
        <div class="center-grid">
          <img src="../img/icons/bedroom.svg" style="width: 10%; margin-top: 40px;">
        </div>
        <div class="center-grid">
            <div style="padding-top: 30px;">
                <div style="padding-top: 15px;">
                  <h3 class="quiz-headers" style="width: 100%; text-align: center;">Bedroom #2</h3>
                </div>
            </div>
        </div>
        <div class="center-grid">
          <a href="./interior_quiz_4.php">
            <button class="proceed-style" style="height: 65px; margin-top: 20px;">
              <span>Continue</span>
            </button>
          </a>
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
  </script>
</html>