<?php
include ('config.php');

$db = pg_connect( "$host $port $dbname $credentials");

$sql = pg_query($db,"SELECT * FROM responses");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reform Interiors - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/sidebars.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src="./css/sidebars.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>

    </script>
  </head>
<body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
  </symbol>
  <symbol id="speedometer2" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
  </symbol>
  <symbol id="table" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
  </symbol>
  <symbol id="people-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
  </symbol>
  <symbol id="grid" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
  </symbol>
  <symbol id="collection" viewBox="0 0 16 16">
    <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/>
  </symbol>
  <symbol id="calendar3" viewBox="0 0 16 16">
    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  </symbol>
  <symbol id="chat-quote-fill" viewBox="0 0 16 16">
    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
  </symbol>
  <symbol id="cpu-fill" viewBox="0 0 16 16">
    <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
    <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z"/>
  </symbol>
  <symbol id="gear-fill" viewBox="0 0 16 16">
    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
  </symbol>
  <symbol id="speedometer" viewBox="0 0 16 16">
    <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
  </symbol>
  <symbol id="toggles2" viewBox="0 0 16 16">
    <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"/>
    <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z"/>
    <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"/>
  </symbol>
  <symbol id="tools" viewBox="0 0 16 16">
    <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </symbol>
  <symbol id="geo-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
  </symbol>
</svg>

  <div class="container mt-5" style="width:100%;max-width:1800px;">
    <div class="card">
      <h2 class="p-3">Welcome to Reform Interiors admin</h2>

      <h6 class="px-3">Here are the latest submissions to the Interior Design form:</h6>
      <table class="table table-responsive" style="text-align: center; table-layout: fixed; width: 100%;">
        <?php
          $rows = array();
          while($row = pg_fetch_assoc($sql)){ 
          $rows[] = $row;
          }
        ?>
        <?php
        if (pg_num_rows($sql) > 0) {
        ?>
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Adults</th>
            <th scope="col">Children</th>
            <th scope="col">Pets</th>
            <th scope="col">Occasion</th>
            <th scope="col">Living Room</th>
            <th scope="col">Dining Room</th>
            <th scope="col">Bedroom(s)</th>
            <th scope="col">Hallway</th>
            <th scope="col">Childrens Bedroom(s)</th>
            <th scope="col">Nursery</th>
            <th scope="col">Office</th>
            <th scope="col">Bathroom</th>
            <th scope="col">Kitchen</th>
            <th scope="col">Other</th>
            <th scope="col">Preference</th>
            <th scope="col">Finish</th>
            <th scope="col">Anything to add?</th>
            <th scope="col">Inspiration</th>
            <th scope="col">Incorporate</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($rows as $row) { ?>
          <td><?php echo $row["name"]; ?></td>
          <td><?php echo $row["adults"]; ?></td>
          <td><?php echo $row["children"]; ?></td>
          <td><?php echo $row["pets"]; ?></td>

          <td>
          <?php if ($row["selling_house"] == 1) { ?>
            Selling house
          <?php } else if ($row["just_moved"] == 1)  { ?>
            Just moved
            <?php } else if ($row["new_furniture"] == 1)  { ?>
            New Furniture
          <?php } else if ($row["fresh_look"] == 1) { ?>
            Fresh Look
          <?php } else if ($row["other_reason"] == 1) { ?>
            Other reason
          <?php } ?>
          </td>

          <?php if ($row["livingroom"] == 1) { ?>
            <td data-bs-toggle="modal" data-bs-target="#livingroomModal<?php echo $row['id']; ?>"><a href="#">Included</a></td>
          <?php } else { ?>
            <td>Not Included</td>
          <?php } ?>

          <?php if ($row["diningroom"] == 1) { ?>
            <td data-bs-toggle="modal" data-bs-target="#diningroomModal<?php echo $row['id']; ?>"><a href="#">Included</a></td>
          <?php } else { ?>
            <td>Not Included</td>
          <?php } ?>

          <?php if ($row["bedroom"] > 0) { ?>
            <td data-bs-toggle="modal" data-bs-target="#bedroomModal<?php echo $row['id']; ?>"><a href="#">Included</a></td>
          <?php } else { ?>
            <td>Not Included</td>
          <?php } ?>

          <?php if ($row["hallway"] == 1) { ?>
            <td data-bs-toggle="modal" data-bs-target="#hallwayModal<?php echo $row['id']; ?>"><a href="#">Included</a></td>
          <?php } else { ?>
            <td>Not Included</td>
          <?php } ?>

          <?php if ($row["childrensbedroom"] > 0) { ?>
            <td data-bs-toggle="modal" data-bs-target="#childrensbedroomModal<?php echo $row['id']; ?>"><a href="#">Included</a></td>
          <?php } else { ?>
            <td>Not Included</td>
          <?php } ?>

          <?php if ($row["nursery"] == 1) { ?>
            <td data-bs-toggle="modal" data-bs-target="#nurseryModal<?php echo $row['id']; ?>"><a href="#">Included</a></td>
          <?php } else { ?>
            <td>Not Included</td>
          <?php } ?>

          <?php if ($row["office"] == 1) { ?>
            <td data-bs-toggle="modal" data-bs-target="#officeModal<?php echo $row['id']; ?>"><a href="#">Included</a></td>
          <?php } else { ?>
            <td>Not Included</td>
          <?php } ?>

          <?php if ($row["bathroom"] == 1) { ?>
            <td data-bs-toggle="modal" data-bs-target="#bathroomModal<?php echo $row['id']; ?>"><a href="#">Included</a></td>
          <?php } else { ?>
            <td>Not Included</td>
          <?php } ?>

          <?php if ($row["kitchen"] == 1) { ?>
            <td data-bs-toggle="modal" data-bs-target="#kitchenModal<?php echo $row['id']; ?>"><a href="#">Included</a></td>
          <?php } else { ?>
            <td>Not Included</td>
          <?php } ?>

          <?php if ($row["other"] == 1) { ?>
            <td data-bs-toggle="modal" data-bs-target="#otherModal<?php echo $row['id']; ?>"><a href="#">Included</a></td>
          <?php } else { ?>
            <td>Not Included</td>
          <?php } ?>
          
          <td>
          <?php if ($row["less"] == 1) { ?>
            Less is more
          <?php } else if ($row["middle"] == 1)  { ?>
            In-between
          <?php } else if ($row["more"] == 1) { ?>
            More is more
          <?php } ?>
          </td>
          
          <td>
          <?php if ($row["chrome"] == 1) { ?>
            Chrome
          <?php } else if ($row["gold"] == 1)  { ?>
            Gold
          <?php } else if ($row["copper"] == 1) { ?>
            Copper
          <?php } else if ($row["black"] == 1) { ?>
            Black
          <?php } ?>
          </td>

          <td>
          <?php if ($row["extratext"]) {
            echo "<span data-bs-toggle='popover' data-bs-placement='bottom' data-bs-trigger='hover' data-bs-content='" . base64_decode($row['extratext']) .  "'>
                <i class='bi bi-check-circle' style='font-size: 21px;'></i>
                "
           ?>
            </span>
          <?php } else { ?>
            <i class="bi bi-x-circle" style="font-size: 21px;"></i>
          <?php } ?>
          </td>

          <td>
          <?php if ($row["inspiration"]) { ?>
          <?php
           $split = base64_decode($row['inspiration']);
           $newArray = explode(',', trim($split));
           foreach ($newArray as $arr) {

            echo "<a target='_blank' href=" . "./image/" . $arr . "><img class='rounded-circle' style='width: 30px; height: 30px; border: 1px black solid' src=" . "./image/" . $arr . "></img></a>";
          }   
           ?>
          <?php } ?> 
          </td>

          <td>
          <?php if ($row["incorporate"]) { ?>
          <?php
           $split = base64_decode($row['incorporate']);
           $newArray2 = explode(',', trim($split));
           foreach ($newArray2 as $arrarr2) {

            echo "<a tabindex='0' data-bs-toggle='popover' data-bs-placement='bottom' data-bs-trigger='hover' data-bs-content='" . base64_decode($row['itemtext'] ).  "' target='_blank' href=" . "./image/" . $arrarr2 . "><img class='rounded-circle' style='width: 30px; height: 30px; border: 1px black solid' src=" . "./image/" . $arrarr2 . "></img></a>";
          }   
           ?>
          <?php } ?> 
          </td>


          
          </tr>
        <?php } ?>
        </tbody>
      </table>
        <?php
        }
        else{
            echo "No result found";
        }
        ?>

        <?php foreach($rows as $row) { ?>
          <div class="modal fade" id="bathroomModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="bathroomModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="width:100%;max-width:1500px;">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="bathroomModalLabel">Bathroom</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <table class="table" style="text-align: center; table-layout: fixed;">
                      <thead class="thead-dark">
                          <tr>
                          <th scope="col">How finished is bathroom?</th>
                          <th scope="col">Budget</th>
                          <th scope="col">Colour preferences</th>
                          <th scope="col">Colours they'd like</th>
                          <th scope="col">Colours/styles to avoid</th>
                          <th scope="col">Pick your style</th>
                          <th scope="col">Style/design ideas to add</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>

                          <td>
                          <?php if ($row['bath_starting_scratch'] == 1) {
                              echo 'Starting from scratch';
                          } ?>

                          <?php if ($row['bath_part_way'] == 1) {
                              echo 'Part way there';
                          } ?>

                          <?php if ($row['bath_mostly_furnished'] == 1) {
                              echo 'Mostly furnished';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['bath_less2000'] == 1) {
                              echo 'Less than 2000';
                          } ?>

                          <?php if ($row['bath_v20005000'] == 1) {
                              echo '£2000-£5000';
                          } ?>

                          <?php if ($row['bath_v50007000'] == 1) {
                              echo '£5000-£7000';
                          } ?>

                          <?php if ($row['bath_more10000'] == 1) {
                              echo 'More than £10,000';
                          } ?>
                          </td>
                          
                          <td>
                          <?php if ($row['bath_neutral'] == 1) {
                              echo 'Neutral';
                          } ?>
                          <?php if ($row['bath_neutralpops'] == 1) {
                              echo 'Neutral with pops';
                          } ?>
                          <?php if ($row['bath_brightbold'] == 1) {
                              echo 'Bright & Bold';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['bath_colourkeep']) {
                            echo base64_decode($row['bath_colourkeep']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['bath_colouravoid']) {
                            echo base64_decode($row['bath_colouravoid']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['bath_eclectic']) {
                            echo 'Eclectic -'; 
                          } ?>
                          <?php if ($row['bath_bohemian']) {
                            echo 'Bohemian -';
                          } ?>
                          <?php if ($row['bath_contemporary']) {
                            echo 'Contemporary -';
                          } ?>
                          <?php if ($row['bath_coastal']) {
                            echo 'Coastal -';
                          } ?>
                          <?php if ($row['bath_dramatic_bold']) {
                            echo 'Dramatic & Bold -';
                          } ?>
                          <?php if ($row['bath_glam']) {
                            echo 'Glam -';
                          } ?>
                          <?php if ($row['bath_industrial']) {
                            echo 'Industrial -';
                          } ?>
                          <?php if ($row['bath_rustic']) {
                            echo 'Rustic -';
                          } ?>
                          <?php if ($row['bath_scandi']) {
                            echo 'Scandi -';
                          } ?>
                          <?php if ($row['bath_traditional']) {
                            echo 'Traditional -';
                          } ?>
                          <?php if ($row['bath_transitional']) {
                            echo 'Transitional -';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['bath_add']) {
                            echo base64_decode($row['bath_add']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>
                        
                          </tr>
                      </tbody>
                      </table>

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                  </div>
              </div>
              </div>
        <?php } ?>

        <?php foreach($rows as $row) { ?>
          <div class="modal fade" id="bedroomModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="bathroomModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="width:100%;max-width:1500px;">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="bathroomModalLabel">Bedroom</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <?php if ($row['bedroom'] == 1 )  { ?>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['bedroom_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['bedroom_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['bedroom_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['bedroom_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['bedroom_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['bedroom_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['bedroom_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['bedroom_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['bedroom_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_colourkeep']) {
                          echo base64_decode($row['bedroom_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_colouravoid']) {
                          echo base64_decode($row['bedroom_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['bedroom_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['bedroom_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['bedroom_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['bedroom_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['bedroom_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['bedroom_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['bedroom_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['bedroom_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['bedroom_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['bedroom_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_add']) {
                          echo base64_decode($row['bedroom_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                  <?php } ?>

                  <?php if ($row['bedroom'] == 2 )  { ?>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['bedroom_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['bedroom_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['bedroom_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['bedroom_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['bedroom_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['bedroom_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['bedroom_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['bedroom_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['bedroom_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_colourkeep']) {
                          echo base64_decode($row['bedroom_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_colouravoid']) {
                          echo base64_decode($row['bedroom_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['bedroom_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['bedroom_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['bedroom_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['bedroom_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['bedroom_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['bedroom_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['bedroom_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['bedroom_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['bedroom_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['bedroom_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_add']) {
                          echo base64_decode($row['bedroom_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['bedroom_2_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['bedroom_2_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['bedroom_2_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_2_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['bedroom_2_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['bedroom_2_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['bedroom_2_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['bedroom_2_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['bedroom_2_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['bedroom_2_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_2_colourkeep']) {
                          echo base64_decode($row['bedroom_2_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_2_colouravoid']) {
                          echo base64_decode($row['bedroom_2_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_2_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['bedroom_2_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['bedroom_2_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['bedroom_2_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['bedroom_2_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['bedroom_2_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['bedroom_2_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['bedroom_2_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['bedroom_2_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['bedroom_2_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['bedroom_2_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_2_add']) {
                          echo base64_decode($row['bedroom_2_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                  <?php } ?>

                  <?php if ($row['bedroom'] == 3 )  { ?>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['bedroom_3_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['bedroom_3_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['bedroom_3_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_3_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['bedroom_3_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['bedroom_3_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['bedroom_3_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['bedroom_3_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['bedroom_3_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['bedroom_3_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_3_colourkeep']) {
                          echo base64_decode($row['bedroom_3_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_3_colouravoid']) {
                          echo base64_decode($row['bedroom_3_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_3_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['bedroom_3_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['bedroom_3_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['bedroom_3_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['bedroom_3_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['bedroom_3_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['bedroom_3_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['bedroom_3_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['bedroom_3_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['bedroom_3_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['bedroom_3_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_3_add']) {
                          echo base64_decode($row['bedroom_3_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['bedroom_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['bedroom_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['bedroom_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['bedroom_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['bedroom_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['bedroom_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['bedroom_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['bedroom_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['bedroom_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_colourkeep']) {
                          echo base64_decode($row['bedroom_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_colouravoid']) {
                          echo base64_decode($row['bedroom_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['bedroom_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['bedroom_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['bedroom_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['bedroom_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['bedroom_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['bedroom_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['bedroom_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['bedroom_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['bedroom_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['bedroom_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_add']) {
                          echo base64_decode($row['bedroom_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['bedroom_2_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['bedroom_2_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['bedroom_2_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_2_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['bedroom_2_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['bedroom_2_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['bedroom_2_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['bedroom_2_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['bedroom_2_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['bedroom_2_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_2_colourkeep']) {
                          echo base64_decode($row['bedroom_2_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_2_colouravoid']) {
                          echo base64_decode($row['bedroom_2_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_2_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['bedroom_2_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['bedroom_2_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['bedroom_2_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['bedroom_2_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['bedroom_2_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['bedroom_2_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['bedroom_2_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['bedroom_2_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['bedroom_2_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['bedroom_2_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_2_add']) {
                          echo base64_decode($row['bedroom_2_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                  <?php } ?>

                  <?php if ($row['bedroom'] == 4 )  { ?>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['bedroom_3_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['bedroom_3_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['bedroom_3_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_3_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['bedroom_3_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['bedroom_3_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['bedroom_3_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['bedroom_3_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['bedroom_3_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['bedroom_3_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_3_colourkeep']) {
                          echo base64_decode($row['bedroom_3_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_3_colouravoid']) {
                          echo base64_decode($row['bedroom_3_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_3_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['bedroom_3_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['bedroom_3_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['bedroom_3_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['bedroom_3_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['bedroom_3_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['bedroom_3_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['bedroom_3_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['bedroom_3_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['bedroom_3_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['bedroom_3_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_3_add']) {
                          echo base64_decode($row['bedroom_3_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['bedroom_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['bedroom_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['bedroom_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['bedroom_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['bedroom_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['bedroom_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['bedroom_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['bedroom_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['bedroom_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_colourkeep']) {
                          echo base64_decode($row['bedroom_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_colouravoid']) {
                          echo base64_decode($row['bedroom_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['bedroom_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['bedroom_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['bedroom_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['bedroom_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['bedroom_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['bedroom_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['bedroom_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['bedroom_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['bedroom_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['bedroom_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_add']) {
                          echo base64_decode($row['bedroom_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['bedroom_2_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['bedroom_2_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['bedroom_2_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_2_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['bedroom_2_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['bedroom_2_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['bedroom_2_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['bedroom_2_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['bedroom_2_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['bedroom_2_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_2_colourkeep']) {
                          echo base64_decode($row['bedroom_2_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_2_colouravoid']) {
                          echo base64_decode($row['bedroom_2_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_2_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['bedroom_2_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['bedroom_2_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['bedroom_2_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['bedroom_2_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['bedroom_2_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['bedroom_2_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['bedroom_2_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['bedroom_2_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['bedroom_2_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['bedroom_2_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_2_add']) {
                          echo base64_decode($row['bedroom_2_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['bedroom_4_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['bedroom_4_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['bedroom_4_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_4_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['bedroom_4_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['bedroom_4_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['bedroom_4_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['bedroom_4_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['bedroom_4_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['bedroom_4_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_4_colourkeep']) {
                          echo base64_decode($row['bedroom_4_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_4_colouravoid']) {
                          echo base64_decode($row['bedroom_4_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_4_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['bedroom_4_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['bedroom_4_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['bedroom_4_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['bedroom_4_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['bedroom_4_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['bedroom_4_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['bedroom_4_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['bedroom_4_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['bedroom_4_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['bedroom_4_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['bedroom_4_add']) {
                          echo base64_decode($row['bedroom_4_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                  <?php } ?>
                  
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                  </div>
              </div>
              </div>
        <?php } ?>

        <?php foreach($rows as $row) { ?>
          <div class="modal fade" id="kitchenModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="bathroomModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="width:100%;max-width:1500px;">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="bathroomModalLabel">Kitchen</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <table class="table" style="text-align: center; table-layout: fixed;">
                      <thead class="thead-dark">
                          <tr>
                          <th scope="col">How finished is Kitchen?</th>
                          <th scope="col">Budget</th>
                          <th scope="col">Colour preferences</th>
                          <th scope="col">Colours they'd like</th>
                          <th scope="col">Colours/styles to avoid</th>
                          <th scope="col">Pick your style</th>
                          <th scope="col">Style/design ideas to add</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>

                          <td>
                          <?php if ($row['kitchen_starting_scratch'] == 1) {
                              echo 'Starting from scratch';
                          } ?>

                          <?php if ($row['kitchen_part_way'] == 1) {
                              echo 'Part way there';
                          } ?>

                          <?php if ($row['kitchen_mostly_furnished'] == 1) {
                              echo 'Mostly furnished';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['kitchen_less2000'] == 1) {
                              echo 'Less than 2000';
                          } ?>

                          <?php if ($row['kitchen_v20005000'] == 1) {
                              echo '£2000-£5000';
                          } ?>

                          <?php if ($row['kitchen_v50007000'] == 1) {
                              echo '£5000-£7000';
                          } ?>

                          <?php if ($row['kitchen_more10000'] == 1) {
                              echo 'More than £10,000';
                          } ?>
                          </td>
                          
                          <td>
                          <?php if ($row['kitchen_neutral'] == 1) {
                              echo 'Neutral';
                          } ?>
                          <?php if ($row['kitchen_neutralpops'] == 1) {
                              echo 'Neutral with pops';
                          } ?>
                          <?php if ($row['kitchen_brightbold'] == 1) {
                              echo 'Bright & Bold';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['kitchen_colourkeep']) {
                            echo base64_decode($row['kitchen_colourkeep']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['kitchen_colouravoid']) {
                            echo base64_decode($row['kitchen_colouravoid']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['kitchen_eclectic']) {
                            echo 'Eclectic -'; 
                          } ?>
                          <?php if ($row['kitchen_bohemian']) {
                            echo 'Bohemian -';
                          } ?>
                          <?php if ($row['kitchen_contemporary']) {
                            echo 'Contemporary -';
                          } ?>
                          <?php if ($row['kitchen_coastal']) {
                            echo 'Coastal -';
                          } ?>
                          <?php if ($row['kitchen_dramatic_bold']) {
                            echo 'Dramatic & Bold -';
                          } ?>
                          <?php if ($row['kitchen_glam']) {
                            echo 'Glam -';
                          } ?>
                          <?php if ($row['kitchen_industrial']) {
                            echo 'Industrial -';
                          } ?>
                          <?php if ($row['kitchen_rustic']) {
                            echo 'Rustic -';
                          } ?>
                          <?php if ($row['kitchen_scandi']) {
                            echo 'Scandi -';
                          } ?>
                          <?php if ($row['kitchen_traditional']) {
                            echo 'Traditional -';
                          } ?>
                          <?php if ($row['kitchen_transitional']) {
                            echo 'Transitional -';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['kitchen_add']) {
                            echo base64_decode($row['kitchen_add']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>
                        
                          </tr>
                      </tbody>
                      </table>

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                  </div>
              </div>
              </div>
        <?php } ?>

        <?php foreach($rows as $row) { ?>
          <div class="modal fade" id="diningroomModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="bathroomModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="width:100%;max-width:1500px;">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="bathroomModalLabel">Dining room</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <table class="table" style="text-align: center; table-layout: fixed;">
                      <thead class="thead-dark">
                          <tr>
                          <th scope="col">How finished is Dining room?</th>
                          <th scope="col">Budget</th>
                          <th scope="col">Colour preferences</th>
                          <th scope="col">Colours they'd like</th>
                          <th scope="col">Colours/styles to avoid</th>
                          <th scope="col">Pick your style</th>
                          <th scope="col">Style/design ideas to add</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>

                          <td>
                          <?php if ($row['diningroom_starting_scratch'] == 1) {
                              echo 'Starting from scratch';
                          } ?>

                          <?php if ($row['diningroom_part_way'] == 1) {
                              echo 'Part way there';
                          } ?>

                          <?php if ($row['diningroom_mostly_furnished'] == 1) {
                              echo 'Mostly furnished';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['diningroom_less2000'] == 1) {
                              echo 'Less than 2000';
                          } ?>

                          <?php if ($row['diningroom_v20005000'] == 1) {
                              echo '£2000-£5000';
                          } ?>

                          <?php if ($row['diningroom_v50007000'] == 1) {
                              echo '£5000-£7000';
                          } ?>

                          <?php if ($row['diningroom_more10000'] == 1) {
                              echo 'More than £10,000';
                          } ?>
                          </td>
                          
                          <td>
                          <?php if ($row['diningroom_neutral'] == 1) {
                              echo 'Neutral';
                          } ?>
                          <?php if ($row['diningroom_neutralpops'] == 1) {
                              echo 'Neutral with pops';
                          } ?>
                          <?php if ($row['diningroom_brightbold'] == 1) {
                              echo 'Bright & Bold';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['diningroom_colourkeep']) {
                            echo base64_decode($row['diningroom_colourkeep']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['diningroom_colouravoid']) {
                            echo base64_decode($row['diningroom_colouravoid']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['diningroom_eclectic']) {
                            echo 'Eclectic -'; 
                          } ?>
                          <?php if ($row['diningroom_bohemian']) {
                            echo 'Bohemian -';
                          } ?>
                          <?php if ($row['diningroom_contemporary']) {
                            echo 'Contemporary -';
                          } ?>
                          <?php if ($row['diningroom_coastal']) {
                            echo 'Coastal -';
                          } ?>
                          <?php if ($row['diningroom_dramatic_bold']) {
                            echo 'Dramatic & Bold -';
                          } ?>
                          <?php if ($row['diningroom_glam']) {
                            echo 'Glam -';
                          } ?>
                          <?php if ($row['diningroom_industrial']) {
                            echo 'Industrial -';
                          } ?>
                          <?php if ($row['diningroom_rustic']) {
                            echo 'Rustic -';
                          } ?>
                          <?php if ($row['diningroom_scandi']) {
                            echo 'Scandi -';
                          } ?>
                          <?php if ($row['diningroom_traditional']) {
                            echo 'Traditional -';
                          } ?>
                          <?php if ($row['diningroom_transitional']) {
                            echo 'Transitional -';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['diningroom_add']) {
                            echo base64_decode($row['diningroom_add']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>
                        
                          </tr>
                      </tbody>
                      </table>

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                  </div>
              </div>
              </div>
        <?php } ?>

        <?php foreach($rows as $row) { ?>
          <div class="modal fade" id="hallwayModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="bathroomModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="width:100%;max-width:1500px;">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="bathroomModalLabel">Hallway</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <table class="table" style="text-align: center; table-layout: fixed;">
                      <thead class="thead-dark">
                          <tr>
                          <th scope="col">How finished is Hallway?</th>
                          <th scope="col">Budget</th>
                          <th scope="col">Colour preferences</th>
                          <th scope="col">Colours they'd like</th>
                          <th scope="col">Colours/styles to avoid</th>
                          <th scope="col">Pick your style</th>
                          <th scope="col">Style/design ideas to add</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>

                          <td>
                          <?php if ($row['hallway_starting_scratch'] == 1) {
                              echo 'Starting from scratch';
                          } ?>

                          <?php if ($row['hallway_part_way'] == 1) {
                              echo 'Part way there';
                          } ?>

                          <?php if ($row['hallway_mostly_furnished'] == 1) {
                              echo 'Mostly furnished';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['hallway_less2000'] == 1) {
                              echo 'Less than 2000';
                          } ?>

                          <?php if ($row['hallway_v20005000'] == 1) {
                              echo '£2000-£5000';
                          } ?>

                          <?php if ($row['hallway_v50007000'] == 1) {
                              echo '£5000-£7000';
                          } ?>

                          <?php if ($row['hallway_more10000'] == 1) {
                              echo 'More than £10,000';
                          } ?>
                          </td>
                          
                          <td>
                          <?php if ($row['hallway_neutral'] == 1) {
                              echo 'Neutral';
                          } ?>
                          <?php if ($row['hallway_neutralpops'] == 1) {
                              echo 'Neutral with pops';
                          } ?>
                          <?php if ($row['hallway_brightbold'] == 1) {
                              echo 'Bright & Bold';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['hallway_colourkeep']) {
                            echo base64_decode($row['hallway_colourkeep']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['hallway_colouravoid']) {
                            echo base64_decode($row['hallway_colouravoid']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['hallway_eclectic']) {
                            echo 'Eclectic -'; 
                          } ?>
                          <?php if ($row['hallway_bohemian']) {
                            echo 'Bohemian -';
                          } ?>
                          <?php if ($row['hallway_contemporary']) {
                            echo 'Contemporary -';
                          } ?>
                          <?php if ($row['hallway_coastal']) {
                            echo 'Coastal -';
                          } ?>
                          <?php if ($row['hallway_dramatic_bold']) {
                            echo 'Dramatic & Bold -';
                          } ?>
                          <?php if ($row['hallway_glam']) {
                            echo 'Glam -';
                          } ?>
                          <?php if ($row['hallway_industrial']) {
                            echo 'Industrial -';
                          } ?>
                          <?php if ($row['hallway_rustic']) {
                            echo 'Rustic -';
                          } ?>
                          <?php if ($row['hallway_scandi']) {
                            echo 'Scandi -';
                          } ?>
                          <?php if ($row['hallway_traditional']) {
                            echo 'Traditional -';
                          } ?>
                          <?php if ($row['hallway_transitional']) {
                            echo 'Transitional -';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['hallway_add']) {
                            echo base64_decode($row['hallway_add']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>
                        
                          </tr>
                      </tbody>
                      </table>

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                  </div>
              </div>
              </div>
        <?php } ?>

        <?php foreach($rows as $row) { ?>
          <div class="modal fade" id="nurseryModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="bathroomModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="width:100%;max-width:1500px;">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="bathroomModalLabel">Nursery</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <table class="table" style="text-align: center; table-layout: fixed;">
                      <thead class="thead-dark">
                          <tr>
                          <th scope="col">How finished is Kitchen?</th>
                          <th scope="col">Budget</th>
                          <th scope="col">Colour preferences</th>
                          <th scope="col">Colours they'd like</th>
                          <th scope="col">Colours/styles to avoid</th>
                          <th scope="col">Pick your style</th>
                          <th scope="col">Style/design ideas to add</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>

                          <td>
                          <?php if ($row['nursery_starting_scratch'] == 1) {
                              echo 'Starting from scratch';
                          } ?>

                          <?php if ($row['nursery_part_way'] == 1) {
                              echo 'Part way there';
                          } ?>

                          <?php if ($row['nursery_mostly_furnished'] == 1) {
                              echo 'Mostly furnished';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['nursery_less2000'] == 1) {
                              echo 'Less than 2000';
                          } ?>

                          <?php if ($row['nursery_v20005000'] == 1) {
                              echo '£2000-£5000';
                          } ?>

                          <?php if ($row['nursery_v50007000'] == 1) {
                              echo '£5000-£7000';
                          } ?>

                          <?php if ($row['nursery_more10000'] == 1) {
                              echo 'More than £10,000';
                          } ?>
                          </td>
                          
                          <td>
                          <?php if ($row['nursery_neutral'] == 1) {
                              echo 'Neutral';
                          } ?>
                          <?php if ($row['nursery_neutralpops'] == 1) {
                              echo 'Neutral with pops';
                          } ?>
                          <?php if ($row['nursery_brightbold'] == 1) {
                              echo 'Bright & Bold';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['nursery_colourkeep']) {
                            echo base64_decode($row['nursery_colourkeep']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['nursery_colouravoid']) {
                            echo base64_decode($row['nursery_colouravoid']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['nursery_eclectic']) {
                            echo 'Eclectic -'; 
                          } ?>
                          <?php if ($row['nursery_bohemian']) {
                            echo 'Bohemian -';
                          } ?>
                          <?php if ($row['nursery_contemporary']) {
                            echo 'Contemporary -';
                          } ?>
                          <?php if ($row['nursery_coastal']) {
                            echo 'Coastal -';
                          } ?>
                          <?php if ($row['nursery_dramatic_bold']) {
                            echo 'Dramatic & Bold -';
                          } ?>
                          <?php if ($row['nursery_glam']) {
                            echo 'Glam -';
                          } ?>
                          <?php if ($row['nursery_industrial']) {
                            echo 'Industrial -';
                          } ?>
                          <?php if ($row['nursery_rustic']) {
                            echo 'Rustic -';
                          } ?>
                          <?php if ($row['nursery_scandi']) {
                            echo 'Scandi -';
                          } ?>
                          <?php if ($row['nursery_traditional']) {
                            echo 'Traditional -';
                          } ?>
                          <?php if ($row['nursery_transitional']) {
                            echo 'Transitional -';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['nursery_add']) {
                            echo base64_decode($row['nursery_add']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>
                        
                          </tr>
                      </tbody>
                      </table>

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                  </div>
              </div>
              </div>
        <?php } ?>

        <?php foreach($rows as $row) { ?>
          <div class="modal fade" id="officeModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="bathroomModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="width:100%;max-width:1500px;">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="bathroomModalLabel">Office</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <table class="table" style="text-align: center; table-layout: fixed;">
                      <thead class="thead-dark">
                          <tr>
                          <th scope="col">How finished is Office?</th>
                          <th scope="col">Budget</th>
                          <th scope="col">Colour preferences</th>
                          <th scope="col">Colours they'd like</th>
                          <th scope="col">Colours/styles to avoid</th>
                          <th scope="col">Pick your style</th>
                          <th scope="col">Style/design ideas to add</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>

                          <td>
                          <?php if ($row['office_starting_scratch'] == 1) {
                              echo 'Starting from scratch';
                          } ?>

                          <?php if ($row['office_part_way'] == 1) {
                              echo 'Part way there';
                          } ?>

                          <?php if ($row['office_mostly_furnished'] == 1) {
                              echo 'Mostly furnished';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['office_less2000'] == 1) {
                              echo 'Less than 2000';
                          } ?>

                          <?php if ($row['office_v20005000'] == 1) {
                              echo '£2000-£5000';
                          } ?>

                          <?php if ($row['office_v50007000'] == 1) {
                              echo '£5000-£7000';
                          } ?>

                          <?php if ($row['office_more10000'] == 1) {
                              echo 'More than £10,000';
                          } ?>
                          </td>
                          
                          <td>
                          <?php if ($row['office_neutral'] == 1) {
                              echo 'Neutral';
                          } ?>
                          <?php if ($row['office_neutralpops'] == 1) {
                              echo 'Neutral with pops';
                          } ?>
                          <?php if ($row['office_brightbold'] == 1) {
                              echo 'Bright & Bold';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['office_colourkeep']) {
                            echo base64_decode($row['office_colourkeep']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['office_colouravoid']) {
                            echo base64_decode($row['office_colouravoid']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['office_eclectic']) {
                            echo 'Eclectic -'; 
                          } ?>
                          <?php if ($row['office_bohemian']) {
                            echo 'Bohemian -';
                          } ?>
                          <?php if ($row['office_contemporary']) {
                            echo 'Contemporary -';
                          } ?>
                          <?php if ($row['office_coastal']) {
                            echo 'Coastal -';
                          } ?>
                          <?php if ($row['office_dramatic_bold']) {
                            echo 'Dramatic & Bold -';
                          } ?>
                          <?php if ($row['office_glam']) {
                            echo 'Glam -';
                          } ?>
                          <?php if ($row['office_industrial']) {
                            echo 'Industrial -';
                          } ?>
                          <?php if ($row['office_rustic']) {
                            echo 'Rustic -';
                          } ?>
                          <?php if ($row['office_scandi']) {
                            echo 'Scandi -';
                          } ?>
                          <?php if ($row['office_traditional']) {
                            echo 'Traditional -';
                          } ?>
                          <?php if ($row['office_transitional']) {
                            echo 'Transitional -';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['office_add']) {
                            echo base64_decode($row['office_add']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>
                        
                          </tr>
                      </tbody>
                      </table>

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                  </div>
              </div>
              </div>
        <?php } ?>

        <?php foreach($rows as $row) { ?>
          <div class="modal fade" id="otherModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="bathroomModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="width:100%;max-width:1500px;">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="bathroomModalLabel">Other</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <table class="table" style="text-align: center; table-layout: fixed;">
                      <thead class="thead-dark">
                          <tr>
                          <th scope="col">How finished is Other room?</th>
                          <th scope="col">Budget</th>
                          <th scope="col">Colour preferences</th>
                          <th scope="col">Colours they'd like</th>
                          <th scope="col">Colours/styles to avoid</th>
                          <th scope="col">Pick your style</th>
                          <th scope="col">Style/design ideas to add</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>

                          <td>
                          <?php if ($row['office_starting_scratch'] == 1) {
                              echo 'Starting from scratch';
                          } ?>

                          <?php if ($row['office_part_way'] == 1) {
                              echo 'Part way there';
                          } ?>

                          <?php if ($row['office_mostly_furnished'] == 1) {
                              echo 'Mostly furnished';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['office_less2000'] == 1) {
                              echo 'Less than 2000';
                          } ?>

                          <?php if ($row['office_v20005000'] == 1) {
                              echo '£2000-£5000';
                          } ?>

                          <?php if ($row['office_v50007000'] == 1) {
                              echo '£5000-£7000';
                          } ?>

                          <?php if ($row['office_more10000'] == 1) {
                              echo 'More than £10,000';
                          } ?>
                          </td>
                          
                          <td>
                          <?php if ($row['office_neutral'] == 1) {
                              echo 'Neutral';
                          } ?>
                          <?php if ($row['office_neutralpops'] == 1) {
                              echo 'Neutral with pops';
                          } ?>
                          <?php if ($row['office_brightbold'] == 1) {
                              echo 'Bright & Bold';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['office_colourkeep']) {
                            echo base64_decode($row['office_colourkeep']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['office_colouravoid']) {
                            echo base64_decode($row['office_colouravoid']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['office_eclectic']) {
                            echo 'Eclectic -'; 
                          } ?>
                          <?php if ($row['office_bohemian']) {
                            echo 'Bohemian -';
                          } ?>
                          <?php if ($row['office_contemporary']) {
                            echo 'Contemporary -';
                          } ?>
                          <?php if ($row['office_coastal']) {
                            echo 'Coastal -';
                          } ?>
                          <?php if ($row['office_dramatic_bold']) {
                            echo 'Dramatic & Bold -';
                          } ?>
                          <?php if ($row['office_glam']) {
                            echo 'Glam -';
                          } ?>
                          <?php if ($row['office_industrial']) {
                            echo 'Industrial -';
                          } ?>
                          <?php if ($row['office_rustic']) {
                            echo 'Rustic -';
                          } ?>
                          <?php if ($row['office_scandi']) {
                            echo 'Scandi -';
                          } ?>
                          <?php if ($row['office_traditional']) {
                            echo 'Traditional -';
                          } ?>
                          <?php if ($row['office_transitional']) {
                            echo 'Transitional -';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['office_add']) {
                            echo base64_decode($row['office_add']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>
                        
                          </tr>
                      </tbody>
                      </table>

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                  </div>
              </div>
              </div>
        <?php } ?>

        <?php foreach($rows as $row) { ?>
          <div class="modal fade" id="livingroomModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="bathroomModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="width:100%;max-width:1500px;">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="bathroomModalLabel">Living Room</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <table class="table" style="text-align: center; table-layout: fixed;">
                      <thead class="thead-dark">
                          <tr>
                          <th scope="col">How finished is Living Room?</th>
                          <th scope="col">Budget</th>
                          <th scope="col">Colour preferences</th>
                          <th scope="col">Colours they'd like</th>
                          <th scope="col">Colours/styles to avoid</th>
                          <th scope="col">Pick your style</th>
                          <th scope="col">Style/design ideas to add</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>

                          <td>
                          <?php if ($row['livingroom_starting_scratch'] == 1) {
                              echo 'Starting from scratch';
                          } ?>

                          <?php if ($row['livingroom_part_way'] == 1) {
                              echo 'Part way there';
                          } ?>

                          <?php if ($row['livingroom_mostly_furnished'] == 1) {
                              echo 'Mostly furnished';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['livingroom_less2000'] == 1) {
                              echo 'Less than 2000';
                          } ?>

                          <?php if ($row['livingroom_v20005000'] == 1) {
                              echo '£2000-£5000';
                          } ?>

                          <?php if ($row['livingroom_v50007000'] == 1) {
                              echo '£5000-£7000';
                          } ?>

                          <?php if ($row['livingroom_more10000'] == 1) {
                              echo 'More than £10,000';
                          } ?>
                          </td>
                          
                          <td>
                          <?php if ($row['livingroom_neutral'] == 1) {
                              echo 'Neutral';
                          } ?>
                          <?php if ($row['livingroom_neutralpops'] == 1) {
                              echo 'Neutral with pops';
                          } ?>
                          <?php if ($row['livingroom_brightbold'] == 1) {
                              echo 'Bright & Bold';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['livingroom_colourkeep']) {
                            echo base64_decode($row['livingroom_colourkeep']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['livingroom_colouravoid']) {
                            echo base64_decode($row['livingroom_colouravoid']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['livingroom_eclectic']) {
                            echo 'Eclectic -'; 
                          } ?>
                          <?php if ($row['livingroom_bohemian']) {
                            echo 'Bohemian -';
                          } ?>
                          <?php if ($row['livingroom_contemporary']) {
                            echo 'Contemporary -';
                          } ?>
                          <?php if ($row['livingroom_coastal']) {
                            echo 'Coastal -';
                          } ?>
                          <?php if ($row['livingroom_dramatic_bold']) {
                            echo 'Dramatic & Bold -';
                          } ?>
                          <?php if ($row['livingroom_glam']) {
                            echo 'Glam -';
                          } ?>
                          <?php if ($row['livingroom_industrial']) {
                            echo 'Industrial -';
                          } ?>
                          <?php if ($row['livingroom_rustic']) {
                            echo 'Rustic -';
                          } ?>
                          <?php if ($row['livingroom_scandi']) {
                            echo 'Scandi -';
                          } ?>
                          <?php if ($row['livingroom_traditional']) {
                            echo 'Traditional -';
                          } ?>
                          <?php if ($row['livingroom_transitional']) {
                            echo 'Transitional -';
                          } ?>
                          </td>

                          <td>
                          <?php if ($row['livingroom_add']) {
                            echo base64_decode($row['livingroom_add']);
                          } else {
                            echo 'n/a';
                          } ?>
                          </td>
                        
                          </tr>
                      </tbody>
                      </table>

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                  </div>
              </div>
              </div>
        <?php } ?>

        <?php foreach($rows as $row) { ?>
          <div class="modal fade" id="childrensbedroomModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="bathroomModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="width:100%;max-width:1500px;">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="bathroomModalLabel">Childrens Bedroom</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <?php if ($row['childrensbedroom'] == 1 )  { ?>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['childrensbedroom_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['childrensbedroom_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['childrensbedroom_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['childrensbedroom_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['childrensbedroom_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['childrensbedroom_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['childrensbedroom_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['childrensbedroom_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['childrensbedroom_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_colourkeep']) {
                          echo base64_decode($row['childrensbedroom_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_colouravoid']) {
                          echo base64_decode($row['childrensbedroom_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['childrensbedroom_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['childrensbedroom_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['childrensbedroom_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['childrensbedroom_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['childrensbedroom_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['childrensbedroom_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['childrensbedroom_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['childrensbedroom_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['childrensbedroom_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['childrensbedroom_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_add']) {
                          echo base64_decode($row['childrensbedroom_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                  <?php } ?>

                  <?php if ($row['childrensbedroom'] == 2 )  { ?>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Childrens Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['childrensbedroom_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['childrensbedroom_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['childrensbedroom_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['childrensbedroom_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['childrensbedroom_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['childrensbedroom_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['childrensbedroom_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['childrensbedroom_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['childrensbedroom_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_colourkeep']) {
                          echo base64_decode($row['childrensbedroom_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_colouravoid']) {
                          echo base64_decode($row['childrensbedroom_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['childrensbedroom_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['childrensbedroom_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['childrensbedroom_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['childrensbedroom_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['childrensbedroom_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['childrensbedroom_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['childrensbedroom_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['childrensbedroom_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['childrensbedroom_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['childrensbedroom_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_add']) {
                          echo base64_decode($row['childrensbedroom_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['childrensbedroom_2_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['childrensbedroom_2_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['childrensbedroom_2_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_2_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['childrensbedroom_2_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['childrensbedroom_2_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['childrensbedroom_2_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['childrensbedroom_2_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['childrensbedroom_2_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['childrensbedroom_2_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_2_colourkeep']) {
                          echo base64_decode($row['childrensbedroom_2_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_2_colouravoid']) {
                          echo base64_decode($row['childrensbedroom_2_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_2_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['childrensbedroom_2_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_2_add']) {
                          echo base64_decode($row['childrensbedroom_2_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                  <?php } ?>

                  <?php if ($row['childrensbedroom'] == 3 )  { ?>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Childrens Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['childrensbedroom_3_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['childrensbedroom_3_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['childrensbedroom_3_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_3_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['childrensbedroom_3_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['childrensbedroom_3_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['childrensbedroom_3_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['childrensbedroom_3_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['childrensbedroom_3_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['childrensbedroom_3_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_3_colourkeep']) {
                          echo base64_decode($row['childrensbedroom_3_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_3_colouravoid']) {
                          echo base64_decode($row['childrensbedroom_3_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_3_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['childrensbedroom_3_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_3_add']) {
                          echo base64_decode($row['childrensbedroom_3_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Childrens Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['childrensbedroom_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['childrensbedroom_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['childrensbedroom_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['childrensbedroom_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['childrensbedroom_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['childrensbedroom_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['childrensbedroom_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['childrensbedroom_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['childrensbedroom_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_colourkeep']) {
                          echo base64_decode($row['childrensbedroom_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_colouravoid']) {
                          echo base64_decode($row['childrensbedroom_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['childrensbedroom_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['childrensbedroom_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['childrensbedroom_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['childrensbedroom_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['childrensbedroom_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['childrensbedroom_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['childrensbedroom_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['childrensbedroom_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['childrensbedroom_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['childrensbedroom_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_add']) {
                          echo base64_decode($row['childrensbedroom_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Childrens Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['childrensbedroom_2_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['childrensbedroom_2_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['childrensbedroom_2_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_2_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['childrensbedroom_2_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['childrensbedroom_2_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['childrensbedroom_2_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['childrensbedroom_2_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['childrensbedroom_2_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['childrensbedroom_2_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_2_colourkeep']) {
                          echo base64_decode($row['childrensbedroom_2_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_2_colouravoid']) {
                          echo base64_decode($row['childrensbedroom_2_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_2_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['childrensbedroom_2_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_2_add']) {
                          echo base64_decode($row['childrensbedroom_2_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                  <?php } ?>

                  <?php if ($row['childrensbedroom'] == 4 )  { ?>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Childrens Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['childrensbedroom_3_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['childrensbedroom_3_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['childrensbedroom_3_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_3_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['childrensbedroom_3_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['childrensbedroom_3_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['childrensbedroom_3_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['childrensbedroom_3_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['childrensbedroom_3_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['childrensbedroom_3_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_3_colourkeep']) {
                          echo base64_decode($row['childrensbedroom_3_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_3_colouravoid']) {
                          echo base64_decode($row['childrensbedroom_3_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_3_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['childrensbedroom_3_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['childrensbedroom_3_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_3_add']) {
                          echo base64_decode($row['childrensbedroom_3_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Childrens Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['childrensbedroom_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['childrensbedroom_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['childrensbedroom_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['childrensbedroom_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['childrensbedroom_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['childrensbedroom_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['childrensbedroom_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['childrensbedroom_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['childrensbedroom_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_colourkeep']) {
                          echo base64_decode($row['childrensbedroom_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_colouravoid']) {
                          echo base64_decode($row['childrensbedroom_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['childrensbedroom_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['childrensbedroom_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['childrensbedroom_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['childrensbedroom_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['childrensbedroom_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['childrensbedroom_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['childrensbedroom_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['childrensbedroom_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['childrensbedroom_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['childrensbedroom_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_add']) {
                          echo base64_decode($row['childrensbedroom_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Childrens Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['childrensbedroom_2_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['childrensbedroom_2_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['childrensbedroom_2_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_2_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['childrensbedroom_2_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['childrensbedroom_2_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['childrensbedroom_2_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['childrensbedroom_2_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['childrensbedroom_2_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['childrensbedroom_2_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_2_colourkeep']) {
                          echo base64_decode($row['childrensbedroom_2_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_2_colouravoid']) {
                          echo base64_decode($row['childrensbedroom_2_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_2_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['childrensbedroom_2_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['childrensbedroom_2_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_2_add']) {
                          echo base64_decode($row['childrensbedroom_2_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                    <table class="table" style="text-align: center; table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">How finished is Childrens Bedroom?</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Colour preferences</th>
                        <th scope="col">Colours they'd like</th>
                        <th scope="col">Colours/styles to avoid</th>
                        <th scope="col">Pick your style</th>
                        <th scope="col">Style/design ideas to add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <td>
                        <?php if ($row['childrensbedroom_4_starting_scratch'] == 1) {
                            echo 'Starting from scratch';
                        } ?>

                        <?php if ($row['childrensbedroom_4_part_way'] == 1) {
                            echo 'Part way there';
                        } ?>

                        <?php if ($row['childrensbedroom_4_mostly_furnished'] == 1) {
                            echo 'Mostly furnished';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_4_less2000'] == 1) {
                            echo 'Less than 2000';
                        } ?>

                        <?php if ($row['childrensbedroom_4_v20005000'] == 1) {
                            echo '£2000-£5000';
                        } ?>

                        <?php if ($row['childrensbedroom_4_v50007000'] == 1) {
                            echo '£5000-£7000';
                        } ?>

                        <?php if ($row['childrensbedroom_4_more10000'] == 1) {
                            echo 'More than £10,000';
                        } ?>
                        </td>
                        
                        <td>
                        <?php if ($row['childrensbedroom_4_neutral'] == 1) {
                            echo 'Neutral';
                        } ?>
                        <?php if ($row['childrensbedroom_4_neutralpops'] == 1) {
                            echo 'Neutral with pops';
                        } ?>
                        <?php if ($row['childrensbedroom_4_brightbold'] == 1) {
                            echo 'Bright & Bold';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_4_colourkeep']) {
                          echo base64_decode($row['childrensbedroom_4_colourkeep']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_4_colouravoid']) {
                          echo base64_decode($row['childrensbedroom_4_colouravoid']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_4_eclectic']) {
                          echo 'Eclectic -'; 
                        } ?>
                        <?php if ($row['childrensbedroom_4_bohemian']) {
                          echo 'Bohemian -';
                        } ?>
                        <?php if ($row['childrensbedroom_4_contemporary']) {
                          echo 'Contemporary -';
                        } ?>
                        <?php if ($row['childrensbedroom_4_coastal']) {
                          echo 'Coastal -';
                        } ?>
                        <?php if ($row['childrensbedroom_4_dramatic_bold']) {
                          echo 'Dramatic & Bold -';
                        } ?>
                        <?php if ($row['childrensbedroom_4_glam']) {
                          echo 'Glam -';
                        } ?>
                        <?php if ($row['childrensbedroom_4_industrial']) {
                          echo 'Industrial -';
                        } ?>
                        <?php if ($row['childrensbedroom_4_rustic']) {
                          echo 'Rustic -';
                        } ?>
                        <?php if ($row['childrensbedroom_4_scandi']) {
                          echo 'Scandi -';
                        } ?>
                        <?php if ($row['childrensbedroom_4_traditional']) {
                          echo 'Traditional -';
                        } ?>
                        <?php if ($row['childrensbedroom_4_transitional']) {
                          echo 'Transitional -';
                        } ?>
                        </td>

                        <td>
                        <?php if ($row['childrensbedroom_4_add']) {
                          echo base64_decode($row['childrensbedroom_4_add']);
                        } else {
                          echo 'n/a';
                        } ?>
                        </td>
                      
                        </tr>
                    </tbody>
                    </table>
                  <?php } ?>
                  
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                  </div>
              </div>
              </div>
        <?php } ?>

          </div>
        </div>

        <script>
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

        </script>
      </body>
      </html>
