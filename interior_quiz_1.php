<?php

session_start();
$_SESSION['name'] = $_GET["name"];
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
      <style>
        input {
          visibility:hidden;
        }
      </style>
        <div class="center-grid">
            <img src="./img/reform.png" class="quiz-logo">
        </div>

        <div class="grid-quiz">
            <div style="padding-left: 65px; padding-top: 65px;">
                <h3 class="quiz-headers">Which space are you looking to transform, <span id="forename"></span>?</h3>
                <div style="padding-top: 15px;">
                  <img src="./img/icons/staircase.svg" style="width: 400px; margin-left: 200px;">
                </div>
            </div>
            <div class="quiz-container">
              <div class="quiz-circle-1 hvr-grow" id="bedroom_icon">
                <input class="testy" type="radio" id="bedroom"> 
                <span>
                  <img src="./img/icons/bedroom.svg" class="circle-icon" style="margin-left: -18px"></br>
                  <div class="circle-label" id="bedroom">Bedroom <span id="counterDisplayCount"></span></div>
                </span>
              </div>
              <div class="quiz-circle-1" id="livingroom_icon">
                <input class="testy" type="radio" id="living-room"> 
                <span>
                  <img src="./img/icons/living-room.svg" class="circle-icon"></br>
                  <i class="icon"><img id="dismiss" src="./img/close.png" style="width: 23px;"></i>

                  <div class="circle-label">Living Room</div>
                </span>
              </div>
              <div class="quiz-circle-1" id="diningroom_icon">
                <input class="testy" type="radio" id="dining-room"> 
                <span>
                  <img src="./img/icons/dining-room.svg" class="circle-icon" style="width: 76px; height: 76px; margin-left: -18px;"></br>
                  <div class="circle-label">Dining Room</div>
                </span>
              </div>
              <span style="width: 120px; height: 50px; position: absolute; margin-left: 750px;" onclick="reset()"><i class="fa-solid fa-arrow-rotate-left" style="font-size :30px; color: #e1595a; border: solid 3px #e1595a; padding: 10px; border-radius: 50%;"></i></span>
              <div class="quiz-circle-1" id="hallway_icon">
                <input class="testy" type="radio" id="hallway"> 
                <span>
                  <img src="./img/icons/hallway.svg" class="circle-icon" style="margin-left: -20px; padding-bottom: 10px;"></br>
                  <div class="circle-label">Hallway</div>
                </span>
              </div>

              <div class="quiz-circle-1" id="childrensbedroom_icon">
                <input class="testy" type="radio" id="childrensbedroom"> 
                <span>
                  <img src="./img/icons/kids-room.svg" class="circle-icon" style="width: 70px; height: 70px;"></br>
                  <div class="circle-label">Childrens </br> Bedroom <span id="counterDisplayCount2"></div>
                </span>
              </div>
              <div class="quiz-circle-1" id="nursery_icon">
                <input class="testy" type="radio" id="nursery"> 
                <span>
                  <img src="./img/icons/crib.svg" class="circle-icon"></br>
                  <div class="circle-label">Nursery</div>
                </span>
              </div>
              <div class="quiz-circle-1" id="office_icon">
                <span>
                  <img src="./img/icons/workspace.svg" class="circle-icon"></br>
                  <input class="testy" type="radio" id="office"> 
                  <div class="circle-label" style="margin-top: -8px;">Office</div>
                </span>
              </div>
              <div class="quiz-circle-1" id="kitchen_icon">
                <span>
                  <img src="./img/icons/kitchen.svg" class="circle-icon" style="margin-top: -10px;"></br>
                  <input class="testy" type="radio" id="kitchen"> 
                  <div class="circle-label" style="margin-top: -18px;">Kitchen</br> Extension</div>
                </span>
              </div>
              <div class="quiz-circle-1" id="bathroom_icon">
                <span>
                  <img src="./img/icons/bathroom.svg" class="circle-icon"></br>
                  <input class="testy" type="radio" id="bathroom"> 
                  <div class="circle-label" style="margin-top : -10px;">Bathroom</div>
                </span>
              </div>
              <div class="quiz-circle-1" id="other_icon">
                <span>
                  <img src="./img/icons/ellipsis.svg" class="circle-icon"></br>
                  <input class="testy" type="radio" id="other"> 
                  <div class="circle-label" style="margin-top : -10px;">Other</div>
                </span>
              </div>
            </div>
        </div>
        <div class="quiz-next">
          <button class="quiz-next-button" id="submit">
            <span>NEXT</span>
          </button>
        </div>

        <div id="myModal" class="modal">
          <div class="modal-content" style="width: 40%; padding: 50px;">
            <h3>How many bedrooms would you like to style?</h3>
            <div class="center-grid" style="margin-top: 50px;">
              <img class="counter-arrow" src="./img/arrow.svg">
              <span class="counter">
                0
              </span>
              <img class="counter-arrow-invert" src="./img/arrow.svg"></br>
            </div>
          </div>
        </div>

        <div id="myModal2" class="modal">
          <div class="modal-content" style="width: 40%; padding: 50px;">
            <h3>How many childrens' bedrooms would you like to style?</h3>
            <div class="center-grid" style="margin-top: 50px;">
              <img class="counter-arrow-2" src="./img/arrow.svg">
              <span class="counter-2">
                0
              </span>
              <img class="counter-arrow-invert-2" src="./img/arrow.svg"></br>
            </div>
          </div>
        </div>
    </body>
    <script>
    var modal = document.getElementsByClassName('modal');
    var name = sessionStorage.getItem("name");

    window.onload = function(){
      document.getElementById('forename').innerHTML = name;
    };
    var array = []

    $('.quiz-circle-1').click(function(e) {
        $('.selectedCircle').removeClass('selectedCircle');
        $(this).addClass('selectedOrange').find('input').prop('checked', true)
        if (e.target.id == 'bedroom_icon') {
          document.getElementById('bedroomcheck').style.display = "inherit";
          console.log(e.target.id)
        } else if (e.target.id == 'livingroom_icon') {
          document.getElementById('livingroomcheck').style.display = "inherit";
        }
    });
    
    $('#bedroom_icon').click(function() {
    if($('#bedroom').is(':checked')) {
      var modal1 = document.getElementById('myModal')
      modal1.style.display = "block";
      updateDisplay();
    }
  })
    
    // $('#bedroomcheck').click(function() {
    //     $(this).removeClass('selectedOrange').find('input').prop('checked', false)
    //     document.getElementById('bedroomcheck').style.display = "none";
    // });

    // $('#livingroomcheck').click(function() {
    //     $(this).removeClass('selectedOrange').find('input').prop('checked', false)
    //     document.getElementById('livingroomcheck').style.display = "none";
    // });
    
    // $('.quiz-circle-1').click(function(e) {
    //   if ($(e.target).hasClass('selectedOrange')) {
    //     $(this).removeClass('selectedOrange').find('input').prop('checked', false)
    //   }
    // });

  $('#submit').click(function() {
    if($('#bedroom').is(':checked') && array.includes("bedroom") == false) {
      if (count == 1) {
        array.push("bedroom");
      } else if (count == 2) {
        array.push("bedroom");
        array.push("bedroom2");
      } else if (count == 3) {
        array.push("bedroom");
        array.push("bedroom2");
        array.push("bedroom3");
      } else if (count == 4) {
        array.push("bedroom");
        array.push("bedroom2");
        array.push("bedroom3");
        array.push("bedroom4");
      }
    }

    if($('#childrensbedroom').is(':checked') && array.includes("childrensbedroom") == false) {
      if (count1 == 1) {
        array.push("childrensbedroom");
      } else if (count1 == 2) {
        array.push("childrensbedroom");
        array.push("childrensbedroom2");
      } else if (count1 == 3) {
        array.push("childrensbedroom");
        array.push("childrensbedroom2");
        array.push("childrensbedroom3");
      } else if (count1 == 4) {
        array.push("childrensbedroom");
        array.push("childrensbedroom2");
        array.push("childrensbedroom3");
        array.push("childrensbedroom4");
      }
    }

    if($('#living-room').is(':checked') && array.includes("living-room") == false) {
      array.push("living-room");
      var livingroom = 1;
    } else {
      var livingroom = 0;
    }

    if($('#dining-room').is(':checked') && array.includes("dining-room") == false) {
      array.push("dining-room");
      var diningroom = 1;
    } else {
      var diningroom = 0;
    }

    if($('#hallway').is(':checked') && array.includes("hallway") == false) {
      array.push("hallway");
      var hallway = 1;
    } else {
      var hallway = 0;
    }

    if($('#bedroom').is(':checked') && array.includes("bedroom") == false) {
      array.push("bedroom");
      var bedroom = count;
    } else {
      var bedroom = 0;
    }
  
    if($('#nursery').is(':checked')&& array.includes("nursery") == false) {
      array.push("nursery");
      var nursery = 1;
    } else {
      var nursery = 0;
    }

    if($('#office').is(':checked')&& array.includes("office") == false) {
      array.push("office");
      var office = 1;
    } else {
      var office = 0;
    }

    if($('#bathroom').is(':checked')&& array.includes("bathroom") == false) {
      array.push("bathroom");
      var bathroom = 1;
    } else {
      var bathroom = 0;
    }

    if($('#kitchen').is(':checked')&& array.includes("kitchen") == false) {
      array.push("kitchen");
      var kitchen = 1;
    } else {
      var kitchen = 0;
    }
    if($('#other').is(':checked')&& array.includes("other") == false) {
      array.push("other");
      var other = 1
    } else {
      var other = 0
    }
    
    let arr = JSON.stringify(array);
    sessionStorage.setItem("array", arr);

    location.href = './interior_quiz_2.php?livingroom=' + livingroom + '&diningroom=' + diningroom + '&hallway=' + hallway + '&nursery=' + nursery + '&office=' + office + '&bathroom=' + bathroom + '&kitchen=' + kitchen + '&other=' + other + '&bedroom=' + count + '&childrensbedroom=' + count1 + '';

  });

  
$('#bedroom_icon').click(function() {
    if($('#bedroom').is(':checked')) {
      var modal = document.getElementById('myModal')
      modal.style.display = "block";
      updateDisplay();
    }
  })

  $('#childrensbedroom_icon').click(function() {
    if($('#childrensbedroom').is(':checked')) {
      var modal1 = document.getElementById('myModal2')
      modal1.style.display = "block";
      updateDisplay1();
    }
  })

$(document).click(function(event) {
  //if you click on anything except the modal itself or the "open modal" link, close the modal
  if (!$(event.target).closest(".modal-content,.quiz-circle-1").length) {
    document.getElementById('myModal').style.display = "none" 
    if (count < 1) {
      $('input[id="bedroom"]').prop('checked', false);
      var element = document.getElementById("bedroom_icon");
      element.classList.remove("selectedOrange");
    }
  }

  if (!$(event.target).closest(".modal-content,.quiz-circle-1").length) {
    document.getElementById('myModal2').style.display = "none" 
    if (count1 < 1) {
      $('input[id="childrensbedroom"]').prop('checked', false);
      var element = document.getElementById("childrensbedroom_icon");
      element.classList.remove("selectedOrange");
    }
  }
});

let counterDisplayElem = document.querySelector('.counter');
let counterMinusElem = document.querySelector('.counter-arrow');
let counterPlusElem = document.querySelector('.counter-arrow-invert');
let count = 0;

updateDisplay();

counterPlusElem.addEventListener("click",()=>{
        if (count < 4) {
          count++;
          updateDisplay();
        }
    }) ;
    
    counterMinusElem.addEventListener("click",()=>{
      if (count > 1) {
        count--;
        updateDisplay();
      };
    });
    
    function updateDisplay(){
      counterDisplayElem.innerHTML = count;
      if($('#bedroom').is(':checked')) {
        document.getElementById("counterDisplayCount").innerHTML = "("+ count +")";
      }
    };

let counterDisplayElem1 = document.querySelector('.counter-2');
let counterMinusElem1 = document.querySelector('.counter-arrow-2');
let counterPlusElem1 = document.querySelector('.counter-arrow-invert-2');
let count1 = 0;

updateDisplay1();

counterPlusElem1.addEventListener("click",()=>{
        if (count1 < 4) {
          count1++;
          updateDisplay1();
        }
    });
    
    counterMinusElem1.addEventListener("click",()=>{
      if (count1 > 1) {
        count1--;
        updateDisplay1();
      };
    });
    
    function updateDisplay1(){
        counterDisplayElem1.innerHTML = count1;
        if($('#childrensbedroom').is(':checked')) {
        document.getElementById("counterDisplayCount2").innerHTML = "("+ count1 +")";
      }
    };
  
    function reset() {
      $('input[type="radio"]').prop('checked', false);

      var elems = document.querySelectorAll(".quiz-circle-1");
      [].forEach.call(elems, function(el) {
          el.classList.remove("selectedOrange");
      });

      
    }
  </script>

</html>