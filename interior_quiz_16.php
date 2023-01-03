<?php error_reporting(0);
session_start();
 
$_SESSION['extratext'] = $_GET['extratext'];

$name = $_SESSION['name'];
 
$livingroom = $_SESSION['livingroom'];
$diningroom = $_SESSION['diningroom'];
$bedroom = $_SESSION['bedroom'];
$hallway = $_SESSION['hallway'];
$childrensbedroom = $_SESSION['childrensbedroom'];
$nursery = $_SESSION['nursery'];
$office = $_SESSION['office'];
$bathroom = $_SESSION['bathroom'];
$kitchen = $_SESSION['kitchen'];
$other = $_SESSION['other'];

$adults = $_SESSION['adults'];
$children = $_SESSION['children'];
$pets = $_SESSION['pets'];

$selling_house = $_SESSION['selling_house'];
$just_moved = $_SESSION['just_moved'];
$new_furniture = $_SESSION['new_furniture'];
$fresh_look = $_SESSION['fresh_look'];
$other_reason = $_SESSION['other_reason'];

// Bathroom
$bath_starting_scratch = $_SESSION['bath_starting_scratch'];
$bath_part_way = $_SESSION['bath_part_way'];
$bath_mostly_furnished = $_SESSION['bath_mostly_furnished'];

$bath_less2000 = $_SESSION['bath_less2000'];
$bath_v20005000 = $_SESSION['bath_v20005000'];
$bath_v50007000 = $_SESSION['bath_v50007000'];
$bath_more10000 = $_SESSION['bath_more10000'];

$bath_neutral = $_SESSION['bath_neutral'];
$bath_neutralpops = $_SESSION['bath_neutralpops'];
$bath_brightbold = $_SESSION['bath_brightbold'];

$bath_colourkeep = $_SESSION['bath_colourkeep'];
$bath_colouravoid = $_SESSION['bath_colouravoid'];

$bath_eclectic = $_SESSION['bath_eclectic'];
$bath_bohemian = $_SESSION['bath_bohemian'];
$bath_contemporary = $_SESSION['bath_contemporary'];
$bath_coastal = $_SESSION['bath_coastal'];
$bath_dramatic_bold = $_SESSION['bath_dramatic_bold'];
$bath_glam = $_SESSION['bath_glam'];
$bath_industrial = $_SESSION['bath_industrial'];
$bath_rustic = $_SESSION['bath_rustic'];
$bath_scandi = $_SESSION['bath_scandi'];
$bath_traditional = $_SESSION['bath_traditional'];
$bath_transitional = $_SESSION['bath_transitional'];
$bath_add = $_SESSION['bath_add'];


// Bedroom
$bedroom_starting_scratch = $_SESSION['bedroom_starting_scratch'];
$bedroom_part_way = $_SESSION['bedroom_part_way'];
$bedroom_mostly_furnished = $_SESSION['bedroom_mostly_furnished'];

$bedroom_less2000 = $_SESSION['bedroom_less2000'];
$bedroom_v20005000 = $_SESSION['bedroom_v20005000'];
$bedroom_v50007000 = $_SESSION['bedroom_v50007000'];
$bedroom_more10000 = $_SESSION['bedroom_more10000'];

$bedroom_neutral = $_SESSION['bedroom_neutral'];
$bedroom_neutralpops = $_SESSION['bedroom_neutralpops'];
$bedroom_brightbold = $_SESSION['bedroom_brightbold'];

$bedroom_colourkeep = $_SESSION['bedroom_colourkeep'];
$bedroom_colouravoid = $_SESSION['bedroom_colouravoid'];

$bedroom_eclectic = $_SESSION['bedroom_eclectic'];
$bedroom_bohemian = $_SESSION['bedroom_bohemian'];
$bedroom_contemporary = $_SESSION['bedroom_contemporary'];
$bedroom_coastal = $_SESSION['bedroom_coastal'];
$bedroom_dramatic_bold = $_SESSION['bedroom_dramatic_bold'];
$bedroom_glam = $_SESSION['bedroom_glam'];
$bedroom_industrial = $_SESSION['bedroom_industrial'];
$bedroom_rustic = $_SESSION['bedroom_rustic'];
$bedroom_scandi = $_SESSION['bedroom_scandi'];
$bedroom_traditional = $_SESSION['bedroom_traditional'];
$bedroom_transitional = $_SESSION['bedroom_transitional'];
$bedroom_add = $_SESSION['bedroom_add'];

//Bedroom 2
$bedroom_2_starting_scratch = $_SESSION['bedroom2_starting_scratch'];
$bedroom_2_part_way = $_SESSION['bedroom2_part_way'];
$bedroom_2_mostly_furnished = $_SESSION['bedroom2_mostly_furnished'];

$bedroom_2_less2000 = $_SESSION['bedroom2_less2000'];
$bedroom_2_v20005000 = $_SESSION['bedroom2_v20005000'];
$bedroom_2_v50007000 = $_SESSION['bedroom2_v50007000'];
$bedroom_2_more10000 = $_SESSION['bedroom2_more10000'];

$bedroom_2_neutral = $_SESSION['bedroom2_neutral'];
$bedroom_2_neutralpops = $_SESSION['bedroom2_neutralpops'];
$bedroom_2_brightbold = $_SESSION['bedroom2_brightbold'];

$bedroom_2_colourkeep = $_SESSION['bedroom2_colourkeep'];
$bedroom_2_colouravoid = $_SESSION['bedroom2_colouravoid'];

$bedroom_2_eclectic = $_SESSION['bedroom2_eclectic'];
$bedroom_2_bohemian = $_SESSION['bedroom2_bohemian'];
$bedroom_2_contemporary = $_SESSION['bedroom2_contemporary'];
$bedroom_2_coastal = $_SESSION['bedroom2_coastal'];
$bedroom_2_dramatic_bold = $_SESSION['bedroom2_dramatic_bold'];
$bedroom_2_glam = $_SESSION['bedroom2_glam'];
$bedroom_2_industrial = $_SESSION['bedroom2_industrial'];
$bedroom_2_rustic = $_SESSION['bedroom2_rustic'];
$bedroom_2_scandi = $_SESSION['bedroom2_scandi'];
$bedroom_2_traditional = $_SESSION['bedroom2_traditional'];
$bedroom_2_transitional = $_SESSION['bedroom2_transitional'];
$bedroom_2_add = $_SESSION['bedroom2_add'];

// Bedroom 3
$bedroom_3_starting_scratch = $_SESSION['bedroom3_starting_scratch'];
$bedroom_3_part_way = $_SESSION['bedroom3_part_way'];
$bedroom_3_mostly_furnished = $_SESSION['bedroom3_mostly_furnished'];

$bedroom_3_less2000 = $_SESSION['bedroom3_less2000'];
$bedroom_3_v20005000 = $_SESSION['bedroom3_v20005000'];
$bedroom_3_v50007000 = $_SESSION['bedroom3_v50007000'];
$bedroom_3_more10000 = $_SESSION['bedroom3_more10000'];

$bedroom_3_neutral = $_SESSION['bedroom3_neutral'];
$bedroom_3_neutralpops = $_SESSION['bedroom3_neutralpops'];
$bedroom_3_brightbold = $_SESSION['bedroom3_brightbold'];

$bedroom_3_colourkeep = $_SESSION['bedroom3_colourkeep'];
$bedroom_3_colouravoid = $_SESSION['bedroom3_colouravoid'];

$bedroom_3_eclectic = $_SESSION['bedroom3_eclectic'];
$bedroom_3_bohemian = $_SESSION['bedroom3_bohemian'];
$bedroom_3_contemporary = $_SESSION['bedroom3_contemporary'];
$bedroom_3_coastal = $_SESSION['bedroom3_coastal'];
$bedroom_3_dramatic_bold = $_SESSION['bedroom3_dramatic_bold'];
$bedroom_3_glam = $_SESSION['bedroom3_glam'];
$bedroom_3_industrial = $_SESSION['bedroom3_industrial'];
$bedroom_3_rustic = $_SESSION['bedroom3_rustic'];
$bedroom_3_scandi = $_SESSION['bedroom3_scandi'];
$bedroom_3_traditional = $_SESSION['bedroom3_traditional'];
$bedroom_3_transitional = $_SESSION['bedroom3_transitional'];
$bedroom_3_add = $_SESSION['bedroom3_add'];

// Bedroom 4
$bedroom_4_starting_scratch = $_SESSION['bedroom4_starting_scratch'];
$bedroom_4_part_way = $_SESSION['bedroom4_part_way'];
$bedroom_4_mostly_furnished = $_SESSION['bedroom4_mostly_furnished'];

$bedroom_4_less2000 = $_SESSION['bedroom4_less2000'];
$bedroom_4_v20005000 = $_SESSION['bedroom4_v20005000'];
$bedroom_4_v50007000 = $_SESSION['bedroom4_v50007000'];
$bedroom_4_more10000 = $_SESSION['bedroom4_more10000'];

$bedroom_4_neutral = $_SESSION['bedroom4_neutral'];
$bedroom_4_neutralpops = $_SESSION['bedroom4_neutralpops'];
$bedroom_4_brightbold = $_SESSION['bedroom4_brightbold'];

$bedroom_4_colourkeep = $_SESSION['bedroom4_colourkeep'];
$bedroom_4_colouravoid = $_SESSION['bedroom4_colouravoid'];

$bedroom_4_eclectic = $_SESSION['bedroom4_eclectic'];
$bedroom_4_bohemian = $_SESSION['bedroom4_bohemian'];
$bedroom_4_contemporary = $_SESSION['bedroom4_contemporary'];
$bedroom_4_coastal = $_SESSION['bedroom4_coastal'];
$bedroom_4_dramatic_bold = $_SESSION['bedroom4_dramatic_bold'];
$bedroom_4_glam = $_SESSION['bedroom4_glam'];
$bedroom_4_industrial = $_SESSION['bedroom4_industrial'];
$bedroom_4_rustic = $_SESSION['bedroom4_rustic'];
$bedroom_4_scandi = $_SESSION['bedroom4_scandi'];
$bedroom_4_traditional = $_SESSION['bedroom4_traditional'];
$bedroom_4_transitional = $_SESSION['bedroom4_transitional'];
$bedroom_4_add = $_SESSION['bedroom4_add'];

// Childrens bedroom

$childrensbedroom_starting_scratch = $_SESSION['childrensbedroom_starting_scratch'];
$childrensbedroom_part_way = $_SESSION['childrensbedroom_part_way'];
$childrensbedroom_mostly_furnished = $_SESSION['childrensbedroom_mostly_furnished'];

$childrensbedroom_less2000 = $_SESSION['childrensbedroom_less2000'];
$childrensbedroom_v20005000 = $_SESSION['childrensbedroom_v20005000'];
$childrensbedroom_v50007000 = $_SESSION['childrensbedroom_v50007000'];
$childrensbedroom_more10000 = $_SESSION['childrensbedroom_more10000'];

$childrensbedroom_neutral = $_SESSION['childrensbedroom_neutral'];
$childrensbedroom_neutralpops = $_SESSION['childrensbedroom_neutralpops'];
$childrensbedroom_brightbold = $_SESSION['childrensbedroom_brightbold'];

$childrensbedroom_colourkeep = $_SESSION['childrensbedroom_colourkeep'];
$childrensbedroom_colouravoid = $_SESSION['childrensbedroom_colouravoid'];

$childrensbedroom_eclectic = $_SESSION['childrensbedroom_eclectic'];
$childrensbedroom_bohemian = $_SESSION['childrensbedroom_bohemian'];
$childrensbedroom_contemporary = $_SESSION['childrensbedroom_contemporary'];
$childrensbedroom_coastal = $_SESSION['childrensbedroom_coastal'];
$childrensbedroom_dramatic_bold = $_SESSION['childrensbedroom_dramatic_bold'];
$childrensbedroom_glam = $_SESSION['childrensbedroom_glam'];
$childrensbedroom_industrial = $_SESSION['childrensbedroom_industrial'];
$childrensbedroom_rustic = $_SESSION['childrensbedroom_rustic'];
$childrensbedroom_scandi = $_SESSION['childrensbedroom_scandi'];
$childrensbedroom_traditional = $_SESSION['childrensbedroom_traditional'];
$childrensbedroom_transitional = $_SESSION['childrensbedroom_transitional'];
$childrensbedroom_add = $_SESSION['childrensbedroom_add'];

// Childrens Bedroom 2
$childrensbedroom_2_starting_scratch = $_SESSION['childrensbedroom_2_starting_scratch'];
$childrensbedroom_2_part_way = $_SESSION['childrensbedroom_2_part_way'];
$childrensbedroom_2_mostly_furnished = $_SESSION['childrensbedroom_2_mostly_furnished'];

$childrensbedroom_2_less2000 = $_SESSION['childrensbedroom_2_less2000'];
$childrensbedroom_2_v20005000 = $_SESSION['childrensbedroom_2_v20005000'];
$childrensbedroom_2_v50007000 = $_SESSION['childrensbedroom_2_v50007000'];
$childrensbedroom_2_more10000 = $_SESSION['childrensbedroom_2_more10000'];

$childrensbedroom_2_neutral = $_SESSION['childrensbedroom_2_neutral'];
$childrensbedroom_2_neutralpops = $_SESSION['childrensbedroom_2_neutralpops'];
$childrensbedroom_2_brightbold = $_SESSION['childrensbedroom_2_brightbold'];

$childrensbedroom_2_colourkeep = $_SESSION['childrensbedroom_2_colourkeep'];
$childrensbedroom_2_colouravoid = $_SESSION['childrensbedroom_2_colouravoid'];

$childrensbedroom_2_eclectic = $_SESSION['childrensbedroom_2_eclectic'];
$childrensbedroom_2_bohemian = $_SESSION['childrensbedroom_2_bohemian'];
$childrensbedroom_2_contemporary = $_SESSION['childrensbedroom_2_contemporary'];
$childrensbedroom_2_coastal = $_SESSION['childrensbedroom_2_coastal'];
$childrensbedroom_2_dramatic_bold = $_SESSION['childrensbedroom_2_dramatic_bold'];
$childrensbedroom_2_glam = $_SESSION['childrensbedroom_2_glam'];
$childrensbedroom_2_industrial = $_SESSION['childrensbedroom_2_industrial'];
$childrensbedroom_2_rustic = $_SESSION['childrensbedroom_2_rustic'];
$childrensbedroom_2_scandi = $_SESSION['childrensbedroom_2_scandi'];
$childrensbedroom_2_traditional = $_SESSION['childrensbedroom_2_traditional'];
$childrensbedroom_2_transitional = $_SESSION['childrensbedroom_2_transitional'];
$childrensbedroom_2_add = $_SESSION['childrensbedroom_2_add'];

// Childrens Bedroom 3
$childrensbedroom_3_starting_scratch = $_SESSION['childrensbedroom_3_starting_scratch'];
$childrensbedroom_3_part_way = $_SESSION['childrensbedroom_3_part_way'];
$childrensbedroom_3_mostly_furnished = $_SESSION['childrensbedroom_3_mostly_furnished'];

$childrensbedroom_3_less2000 = $_SESSION['childrensbedroom_3_less2000'];
$childrensbedroom_3_v20005000 = $_SESSION['childrensbedroom_3_v20005000'];
$childrensbedroom_3_v50007000 = $_SESSION['childrensbedroom_3_v50007000'];
$childrensbedroom_3_more10000 = $_SESSION['childrensbedroom_3_more10000'];

$childrensbedroom_3_neutral = $_SESSION['childrensbedroom_3_neutral'];
$childrensbedroom_3_neutralpops = $_SESSION['childrensbedroom_3_neutralpops'];
$childrensbedroom_3_brightbold = $_SESSION['childrensbedroom_3_brightbold'];

$childrensbedroom_3_colourkeep = $_SESSION['childrensbedroom_3_colourkeep'];
$childrensbedroom_3_colouravoid = $_SESSION['childrensbedroom_3_colouravoid'];

$childrensbedroom_3_eclectic = $_SESSION['childrensbedroom_3_eclectic'];
$childrensbedroom_3_bohemian = $_SESSION['childrensbedroom_3_bohemian'];
$childrensbedroom_3_contemporary = $_SESSION['childrensbedroom_3_contemporary'];
$childrensbedroom_3_coastal = $_SESSION['childrensbedroom_3_coastal'];
$childrensbedroom_3_dramatic_bold = $_SESSION['childrensbedroom_3_dramatic_bold'];
$childrensbedroom_3_glam = $_SESSION['childrensbedroom_3_glam'];
$childrensbedroom_3_industrial = $_SESSION['childrensbedroom_3_industrial'];
$childrensbedroom_3_rustic = $_SESSION['childrensbedroom_3_rustic'];
$childrensbedroom_3_scandi = $_SESSION['childrensbedroom_3_scandi'];
$childrensbedroom_3_traditional = $_SESSION['childrensbedroom_3_traditional'];
$childrensbedroom_3_transitional = $_SESSION['childrensbedroom_3_transitional'];
$childrensbedroom_3_add = $_SESSION['childrensbedroom_3_add'];

// Childrens Bedroom 4

$childrensbedroom_4_starting_scratch = $_SESSION['childrensbedroom_4_starting_scratch'];
$childrensbedroom_4_part_way = $_SESSION['childrensbedroom_4_part_way'];
$childrensbedroom_4_mostly_furnished = $_SESSION['childrensbedroom_4_mostly_furnished'];

$childrensbedroom_4_less2000 = $_SESSION['childrensbedroom_4_less2000'];
$childrensbedroom_4_v20005000 = $_SESSION['childrensbedroom_4_v20005000'];
$childrensbedroom_4_v50007000 = $_SESSION['childrensbedroom_4_v50007000'];
$childrensbedroom_4_more10000 = $_SESSION['childrensbedroom_4_more10000'];

$childrensbedroom_4_neutral = $_SESSION['childrensbedroom_4_neutral'];
$childrensbedroom_4_neutralpops = $_SESSION['childrensbedroom_4_neutralpops'];
$childrensbedroom_4_brightbold = $_SESSION['childrensbedroom_4_brightbold'];

$childrensbedroom_4_colourkeep = $_SESSION['childrensbedroom_4_colourkeep'];
$childrensbedroom_4_colouravoid = $_SESSION['childrensbedroom_4_colouravoid'];

$childrensbedroom_4_eclectic = $_SESSION['childrensbedroom_4_eclectic'];
$childrensbedroom_4_bohemian = $_SESSION['childrensbedroom_4_bohemian'];
$childrensbedroom_4_contemporary = $_SESSION['childrensbedroom_4_contemporary'];
$childrensbedroom_4_coastal = $_SESSION['childrensbedroom_4_coastal'];
$childrensbedroom_4_dramatic_bold = $_SESSION['childrensbedroom_4_dramatic_bold'];
$childrensbedroom_4_glam = $_SESSION['childrensbedroom_4_glam'];
$childrensbedroom_4_industrial = $_SESSION['childrensbedroom_4_industrial'];
$childrensbedroom_4_rustic = $_SESSION['childrensbedroom_4_rustic'];
$childrensbedroom_4_scandi = $_SESSION['childrensbedroom_4_scandi'];
$childrensbedroom_4_traditional = $_SESSION['childrensbedroom_4_traditional'];
$childrensbedroom_4_transitional = $_SESSION['childrensbedroom_4_transitional'];
$childrensbedroom_4_add = $_SESSION['childrensbedroom_4_add'];

// Dining room
$diningroom_starting_scratch = $_SESSION['diningroom_starting_scratch'];
$diningroom_part_way = $_SESSION['diningroom_part_way'];
$diningroom_mostly_furnished = $_SESSION['diningroom_mostly_furnished'];

$diningroom_less2000 = $_SESSION['diningroom_less2000'];
$diningroom_v20005000 = $_SESSION['diningroom_v20005000'];
$diningroom_v50007000 = $_SESSION['diningroom_v50007000'];
$diningroom_more10000 = $_SESSION['diningroom_more10000'];

$diningroom_neutral = $_SESSION['diningroom_neutral'];
$diningroom_neutralpops = $_SESSION['diningroom_neutralpops'];
$diningroom_brightbold = $_SESSION['diningroom_brightbold'];

$diningroom_colourkeep = $_SESSION['diningroom_colourkeep'];
$diningroom_colouravoid = $_SESSION['diningroom_colouravoid'];

$diningroom_eclectic = $_SESSION['diningroom_eclectic'];
$diningroom_bohemian = $_SESSION['diningroom_bohemian'];
$diningroom_contemporary = $_SESSION['diningroom_contemporary'];
$diningroom_coastal = $_SESSION['diningroom_coastal'];
$diningroom_dramatic_bold = $_SESSION['diningroom_dramatic_bold'];
$diningroom_glam = $_SESSION['diningroom_glam'];
$diningroom_industrial = $_SESSION['diningroom_industrial'];
$diningroom_rustic = $_SESSION['diningroom_rustic'];
$diningroom_scandi = $_SESSION['diningroom_scandi'];
$diningroom_traditional = $_SESSION['diningroom_traditional'];
$diningroom_transitional = $_SESSION['diningroom_transitional'];
$diningroom_add = $_SESSION['diningroom_add'];

// Hallway 

$hallway_starting_scratch = $_SESSION['hallway_starting_scratch'];
$hallway_part_way = $_SESSION['hallway_part_way'];
$hallway_mostly_furnished = $_SESSION['hallway_mostly_furnished'];

$hallway_less2000 = $_SESSION['hallway_less2000'];
$hallway_v20005000 = $_SESSION['hallway_v20005000'];
$hallway_v50007000 = $_SESSION['hallway_v50007000'];
$hallway_more10000 = $_SESSION['hallway_more10000'];

$hallway_neutral = $_SESSION['hallway_neutral'];
$hallway_neutralpops = $_SESSION['hallway_neutralpops'];
$hallway_brightbold = $_SESSION['hallway_brightbold'];

$hallway_colourkeep = $_SESSION['hallway_colourkeep'];
$hallway_colouravoid = $_SESSION['hallway_colouravoid'];

$hallway_eclectic = $_SESSION['hallway_eclectic'];
$hallway_bohemian = $_SESSION['hallway_bohemian'];
$hallway_contemporary = $_SESSION['hallway_contemporary'];
$hallway_coastal = $_SESSION['hallway_coastal'];
$hallway_dramatic_bold = $_SESSION['hallway_dramatic_bold'];
$hallway_glam = $_SESSION['hallway_glam'];
$hallway_industrial = $_SESSION['hallway_industrial'];
$hallway_rustic = $_SESSION['hallway_rustic'];
$hallway_scandi = $_SESSION['hallway_scandi'];
$hallway_traditional = $_SESSION['hallway_traditional'];
$hallway_transitional = $_SESSION['hallway_transitional'];
$hallway_add = $_SESSION['hallway_add'];

// Kitchen

$kitchen_starting_scratch = $_SESSION['kitchen_starting_scratch'];
$kitchen_part_way = $_SESSION['kitchen_part_way'];
$kitchen_mostly_furnished = $_SESSION['kitchen_mostly_furnished'];

$kitchen_less2000 = $_SESSION['kitchen_less2000'];
$kitchen_v20005000 = $_SESSION['kitchen_v20005000'];
$kitchen_v50007000 = $_SESSION['kitchen_v50007000'];
$kitchen_more10000 = $_SESSION['kitchen_more10000'];

$kitchen_neutral = $_SESSION['kitchen_neutral'];
$kitchen_neutralpops = $_SESSION['kitchen_neutralpops'];
$kitchen_brightbold = $_SESSION['kitchen_brightbold'];

$kitchen_colourkeep = $_SESSION['kitchen_colourkeep'];
$kitchen_colouravoid = $_SESSION['kitchen_colouravoid'];

$kitchen_eclectic = $_SESSION['kitchen_eclectic'];
$kitchen_bohemian = $_SESSION['kitchen_bohemian'];
$kitchen_contemporary = $_SESSION['kitchen_contemporary'];
$kitchen_coastal = $_SESSION['kitchen_coastal'];
$kitchen_dramatic_bold = $_SESSION['kitchen_dramatic_bold'];
$kitchen_glam = $_SESSION['kitchen_glam'];
$kitchen_industrial = $_SESSION['kitchen_industrial'];
$kitchen_rustic = $_SESSION['kitchen_rustic'];
$kitchen_scandi = $_SESSION['kitchen_scandi'];
$kitchen_traditional = $_SESSION['kitchen_traditional'];
$kitchen_transitional = $_SESSION['kitchen_transitional'];
$kitchen_add = $_SESSION['kitchen_add'];

// Living Room
$livingroom_starting_scratch = $_SESSION['livingroom_starting_scratch'];
$livingroom_part_way = $_SESSION['livingroom_part_way'];
$livingroom_mostly_furnished = $_SESSION['livingroom_mostly_furnished'];

$livingroom_less2000 = $_SESSION['livingroom_less2000'];
$livingroom_v20005000 = $_SESSION['livingroom_v20005000'];
$livingroom_v50007000 = $_SESSION['livingroom_v50007000'];
$livingroom_more10000 = $_SESSION['livingroom_more10000'];

$livingroom_neutral = $_SESSION['livingroom_neutral'];
$livingroom_neutralpops = $_SESSION['livingroom_neutralpops'];
$livingroom_brightbold = $_SESSION['livingroom_brightbold'];

$livingroom_colourkeep = $_SESSION['livingroom_colourkeep'];
$livingroom_colouravoid = $_SESSION['livingroom_colouravoid'];

$livingroom_eclectic = $_SESSION['livingroom_eclectic'];
$livingroom_bohemian = $_SESSION['livingroom_bohemian'];
$livingroom_contemporary = $_SESSION['livingroom_contemporary'];
$livingroom_coastal = $_SESSION['livingroom_coastal'];
$livingroom_dramatic_bold = $_SESSION['livingroom_dramatic_bold'];
$livingroom_glam = $_SESSION['livingroom_glam'];
$livingroom_industrial = $_SESSION['livingroom_industrial'];
$livingroom_rustic = $_SESSION['livingroom_rustic'];
$livingroom_scandi = $_SESSION['livingroom_scandi'];
$livingroom_traditional = $_SESSION['livingroom_traditional'];
$livingroom_transitional = $_SESSION['livingroom_transitional'];
$livingroom_add = $_SESSION['livingroom_add'];

// Nursery

$nursery_starting_scratch = $_SESSION['nursery_starting_scratch'];
$nursery_part_way = $_SESSION['nursery_part_way'];
$nursery_mostly_furnished = $_SESSION['nursery_mostly_furnished'];

$nursery_less2000 = $_SESSION['nursery_less2000'];
$nursery_v20005000 = $_SESSION['nursery_v20005000'];
$nursery_v50007000 = $_SESSION['nursery_v50007000'];
$nursery_more10000 = $_SESSION['nursery_more10000'];

$nursery_neutral = $_SESSION['nursery_neutral'];
$nursery_neutralpops = $_SESSION['nursery_neutralpops'];
$nursery_brightbold = $_SESSION['nursery_brightbold'];

$nursery_colourkeep = $_SESSION['nursery_colourkeep'];
$nursery_colouravoid = $_SESSION['nursery_colouravoid'];

$nursery_eclectic = $_SESSION['nursery_eclectic'];
$nursery_bohemian = $_SESSION['nursery_bohemian'];
$nursery_contemporary = $_SESSION['nursery_contemporary'];
$nursery_coastal = $_SESSION['nursery_coastal'];
$nursery_dramatic_bold = $_SESSION['nursery_dramatic_bold'];
$nursery_glam = $_SESSION['nursery_glam'];
$nursery_industrial = $_SESSION['nursery_industrial'];
$nursery_rustic = $_SESSION['nursery_rustic'];
$nursery_scandi = $_SESSION['nursery_scandi'];
$nursery_traditional = $_SESSION['nursery_traditional'];
$nursery_transitional = $_SESSION['nursery_transitional'];
$nursery_add = $_SESSION['nursery_add'];

// Office

$office_starting_scratch = $_SESSION['office_starting_scratch'];
$office_part_way = $_SESSION['office_part_way'];
$office_mostly_furnished = $_SESSION['office_mostly_furnished'];

$office_less2000 = $_SESSION['office_less2000'];
$office_v20005000 = $_SESSION['office_v20005000'];
$office_v50007000 = $_SESSION['office_v50007000'];
$office_more10000 = $_SESSION['office_more10000'];

$office_neutral = $_SESSION['office_neutral'];
$office_neutralpops = $_SESSION['office_neutralpops'];
$office_brightbold = $_SESSION['office_brightbold'];

$office_colourkeep = $_SESSION['office_colourkeep'];
$office_colouravoid = $_SESSION['office_colouravoid'];

$office_eclectic = $_SESSION['office_eclectic'];
$office_bohemian = $_SESSION['office_bohemian'];
$office_contemporary = $_SESSION['office_contemporary'];
$office_coastal = $_SESSION['office_coastal'];
$office_dramatic_bold = $_SESSION['office_dramatic_bold'];
$office_glam = $_SESSION['office_glam'];
$office_industrial = $_SESSION['office_industrial'];
$office_rustic = $_SESSION['office_rustic'];
$office_scandi = $_SESSION['office_scandi'];
$office_traditional = $_SESSION['office_traditional'];
$office_transitional = $_SESSION['office_transitional'];
$office_add = $_SESSION['office_add'];

// Other

$other_starting_scratch = $_SESSION['other_starting_scratch'];
$other_part_way = $_SESSION['other_part_way'];
$other_mostly_furnished = $_SESSION['other_mostly_furnished'];

$other_less2000 = $_SESSION['other_less2000'];
$other_v20005000 = $_SESSION['other_v20005000'];
$other_v50007000 = $_SESSION['other_v50007000'];
$other_more10000 = $_SESSION['other_more10000'];

$other_neutral = $_SESSION['other_neutral'];
$other_neutralpops = $_SESSION['other_neutralpops'];
$other_brightbold = $_SESSION['other_brightbold'];

$other_colourkeep = $_SESSION['other_colourkeep'];
$other_colouravoid = $_SESSION['other_colouravoid'];

$other_eclectic = $_SESSION['other_eclectic'];
$other_bohemian = $_SESSION['other_bohemian'];
$other_contemporary = $_SESSION['other_contemporary'];
$other_coastal = $_SESSION['other_coastal'];
$other_dramatic_bold = $_SESSION['other_dramatic_bold'];
$other_glam = $_SESSION['other_glam'];
$other_industrial = $_SESSION['other_industrial'];
$other_rustic = $_SESSION['other_rustic'];
$other_scandi = $_SESSION['other_scandi'];
$other_traditional = $_SESSION['other_traditional'];
$other_transitional = $_SESSION['other_transitional'];
$other_add = $_SESSION['other_add'];


$less = $_SESSION['less'];
$middle = $_SESSION['middle'];
$more = $_SESSION['more'];

$chrome = $_SESSION['chrome'];
$gold = $_SESSION['gold'];
$copper =$_SESSION['copper'];
$black = $_SESSION['black'];

$inspiration = $_SESSION['inspiration'];

$incorporate = $_SESSION['incorporate'];
$itemtext = $_SESSION['itemtext'];

$extratext = $_SESSION['extratext'];

include ('config.php');

$db = pg_connect( "$host $port $dbname $credentials");

$query = "
INSERT INTO
  public.responses (
    name,
    livingroom,
    diningroom,
    hallway,
    bedroom,
    childrensbedroom,
    nursery,
    office,
    bathroom,
    kitchen,
    other,
    adults,
    children,
    pets,
    selling_house,
    just_moved,
    new_furniture,
    fresh_look,
    other_reason,
    bath_starting_scratch,
    bath_part_way,
    bath_mostly_furnished,
    bath_less2000,
    bath_v20005000,
    bath_v50007000,
    bath_more10000,
    bath_neutral,
    bath_neutralpops,
    bath_brightbold,
    bath_colourkeep,
    bath_colouravoid,
    bath_eclectic,
    bath_bohemian,
    bath_contemporary,
    bath_coastal,
    bath_dramatic_bold,
    bath_glam,
    bath_industrial,
    bath_rustic,
    bath_scandi,
    bath_traditional,
    bath_transitional,
    bath_add,
    bedroom_starting_scratch,
    bedroom_part_way,
    bedroom_mostly_furnished,
    bedroom_less2000,
    bedroom_v20005000,
    bedroom_v50007000,
    bedroom_more10000,
    bedroom_neutral,
    bedroom_neutralpops,
    bedroom_brightbold,
    bedroom_colourkeep,
    bedroom_colouravoid,
    bedroom_eclectic,
    bedroom_bohemian,
    bedroom_contemporary,
    bedroom_coastal,
    bedroom_dramatic_bold,
    bedroom_glam,
    bedroom_industrial,
    bedroom_rustic,
    bedroom_scandi,
    bedroom_traditional,
    bedroom_transitional,
    bedroom_add,
    bedroom_2_starting_scratch,
    bedroom_2_part_way,
    bedroom_2_mostly_furnished,
    bedroom_2_less2000,
    bedroom_2_v20005000,
    bedroom_2_v50007000,
    bedroom_2_more10000,
    bedroom_2_neutral,
    bedroom_2_neutralpops,
    bedroom_2_brightbold,
    bedroom_2_colourkeep,
    bedroom_2_colouravoid,
    bedroom_2_eclectic,
    bedroom_2_bohemian,
    bedroom_2_contemporary,
    bedroom_2_coastal,
    bedroom_2_dramatic_bold,
    bedroom_2_glam,
    bedroom_2_industrial,
    bedroom_2_rustic,
    bedroom_2_scandi,
    bedroom_2_traditional,
    bedroom_2_transitional,
    bedroom_2_add,
    bedroom_3_starting_scratch,
    bedroom_3_part_way,
    bedroom_3_mostly_furnished,
    bedroom_3_less2000,
    bedroom_3_v20005000,
    bedroom_3_v50007000,
    bedroom_3_more10000,
    bedroom_3_neutral,
    bedroom_3_neutralpops,
    bedroom_3_brightbold,
    bedroom_3_colourkeep,
    bedroom_3_colouravoid,
    bedroom_3_eclectic,
    bedroom_3_bohemian,
    bedroom_3_contemporary,
    bedroom_3_coastal,
    bedroom_3_dramatic_bold,
    bedroom_3_glam,
    bedroom_3_industrial,
    bedroom_3_rustic,
    bedroom_3_scandi,
    bedroom_3_traditional,
    bedroom_3_transitional,
    bedroom_3_add,
    bedroom_4_starting_scratch,
    bedroom_4_part_way,
    bedroom_4_mostly_furnished,
    bedroom_4_less2000,
    bedroom_4_v20005000,
    bedroom_4_v50007000,
    bedroom_4_more10000,
    bedroom_4_neutral,
    bedroom_4_neutralpops,
    bedroom_4_brightbold,
    bedroom_4_colourkeep,
    bedroom_4_colouravoid,
    bedroom_4_eclectic,
    bedroom_4_bohemian,
    bedroom_4_contemporary,
    bedroom_4_coastal,
    bedroom_4_dramatic_bold,
    bedroom_4_glam,
    bedroom_4_industrial,
    bedroom_4_rustic,
    bedroom_4_scandi,
    bedroom_4_traditional,
    bedroom_4_transitional,
    bedroom_4_add,
    childrensbedroom_starting_scratch,
    childrensbedroom_part_way,
    childrensbedroom_mostly_furnished,
    childrensbedroom_less2000,
    childrensbedroom_v20005000,
    childrensbedroom_v50007000,
    childrensbedroom_more10000,
    childrensbedroom_neutral,
    childrensbedroom_neutralpops,
    childrensbedroom_brightbold,
    childrensbedroom_colourkeep,
    childrensbedroom_colouravoid,
    childrensbedroom_eclectic,
    childrensbedroom_bohemian,
    childrensbedroom_contemporary,
    childrensbedroom_coastal,
    childrensbedroom_dramatic_bold,
    childrensbedroom_glam,
    childrensbedroom_industrial,
    childrensbedroom_rustic,
    childrensbedroom_scandi,
    childrensbedroom_traditional,
    childrensbedroom_transitional,
    childrensbedroom_add,
    childrensbedroom_2_starting_scratch,
    childrensbedroom_2_part_way,
    childrensbedroom_2_mostly_furnished,
    childrensbedroom_2_less2000,
    childrensbedroom_2_v20005000,
    childrensbedroom_2_v50007000,
    childrensbedroom_2_more10000,
    childrensbedroom_2_neutral,
    childrensbedroom_2_neutralpops,
    childrensbedroom_2_brightbold,
    childrensbedroom_2_colourkeep,
    childrensbedroom_2_colouravoid,
    childrensbedroom_2_eclectic,
    childrensbedroom_2_bohemian,
    childrensbedroom_2_contemporary,
    childrensbedroom_2_coastal,
    childrensbedroom_2_dramatic_bold,
    childrensbedroom_2_glam,
    childrensbedroom_2_industrial,
    childrensbedroom_2_rustic,
    childrensbedroom_2_scandi,
    childrensbedroom_2_traditional,
    childrensbedroom_2_transitional,
    childrensbedroom_2_add,
    childrensbedroom_3_starting_scratch,
    childrensbedroom_3_part_way,
    childrensbedroom_3_mostly_furnished,
    childrensbedroom_3_less2000,
    childrensbedroom_3_v20005000,
    childrensbedroom_3_v50007000,
    childrensbedroom_3_more10000,
    childrensbedroom_3_neutral,
    childrensbedroom_3_neutralpops,
    childrensbedroom_3_brightbold,
    childrensbedroom_3_colourkeep,
    childrensbedroom_3_colouravoid,
    childrensbedroom_3_eclectic,
    childrensbedroom_3_bohemian,
    childrensbedroom_3_contemporary,
    childrensbedroom_3_coastal,
    childrensbedroom_3_dramatic_bold,
    childrensbedroom_3_glam,
    childrensbedroom_3_industrial,
    childrensbedroom_3_rustic,
    childrensbedroom_3_scandi,
    childrensbedroom_3_traditional,
    childrensbedroom_3_transitional,
    childrensbedroom_3_add,
    childrensbedroom_4_starting_scratch,
    childrensbedroom_4_part_way,
    childrensbedroom_4_mostly_furnished,
    childrensbedroom_4_less2000,
    childrensbedroom_4_v20005000,
    childrensbedroom_4_v50007000,
    childrensbedroom_4_more10000,
    childrensbedroom_4_neutral,
    childrensbedroom_4_neutralpops,
    childrensbedroom_4_brightbold,
    childrensbedroom_4_colourkeep,
    childrensbedroom_4_colouravoid,
    childrensbedroom_4_eclectic,
    childrensbedroom_4_bohemian,
    childrensbedroom_4_contemporary,
    childrensbedroom_4_coastal,
    childrensbedroom_4_dramatic_bold,
    childrensbedroom_4_glam,
    childrensbedroom_4_industrial,
    childrensbedroom_4_rustic,
    childrensbedroom_4_scandi,
    childrensbedroom_4_traditional,
    childrensbedroom_4_transitional,
    childrensbedroom_4_add,
    diningroom_starting_scratch,
    diningroom_part_way,
    diningroom_mostly_furnished,
    diningroom_less2000,
    diningroom_v20005000,
    diningroom_v50007000,
    diningroom_more10000,
    diningroom_neutral,
    diningroom_neutralpops,
    diningroom_brightbold,
    diningroom_colourkeep,
    diningroom_colouravoid,
    diningroom_eclectic,
    diningroom_bohemian,
    diningroom_contemporary,
    diningroom_coastal,
    diningroom_dramatic_bold,
    diningroom_glam,
    diningroom_industrial,
    diningroom_rustic,
    diningroom_scandi,
    diningroom_traditional,
    diningroom_transitional,
    diningroom_add,
    hallway_starting_scratch,
    hallway_part_way,
    hallway_mostly_furnished,
    hallway_less2000,
    hallway_v20005000,
    hallway_v50007000,
    hallway_more10000,
    hallway_neutral,
    hallway_neutralpops,
    hallway_brightbold,
    hallway_colourkeep,
    hallway_colouravoid,
    hallway_eclectic,
    hallway_bohemian,
    hallway_contemporary,
    hallway_coastal,
    hallway_dramatic_bold,
    hallway_glam,
    hallway_industrial,
    hallway_rustic,
    hallway_scandi,
    hallway_traditional,
    hallway_transitional,
    hallway_add,
    kitchen_starting_scratch,
    kitchen_part_way,
    kitchen_mostly_furnished,
    kitchen_less2000,
    kitchen_v20005000,
    kitchen_v50007000,
    kitchen_more10000,
    kitchen_neutral,
    kitchen_neutralpops,
    kitchen_brightbold,
    kitchen_colourkeep,
    kitchen_colouravoid,
    kitchen_eclectic,
    kitchen_bohemian,
    kitchen_contemporary,
    kitchen_coastal,
    kitchen_dramatic_bold,
    kitchen_glam,
    kitchen_industrial,
    kitchen_rustic,
    kitchen_scandi,
    kitchen_traditional,
    kitchen_transitional,
    kitchen_add,
    livingroom_starting_scratch,
    livingroom_part_way,
    livingroom_mostly_furnished,
    livingroom_less2000,
    livingroom_v20005000,
    livingroom_v50007000,
    livingroom_more10000,
    livingroom_neutral,
    livingroom_neutralpops,
    livingroom_brightbold,
    livingroom_colourkeep,
    livingroom_colouravoid,
    livingroom_eclectic,
    livingroom_bohemian,
    livingroom_contemporary,
    livingroom_coastal,
    livingroom_dramatic_bold,
    livingroom_glam,
    livingroom_industrial,
    livingroom_rustic,
    livingroom_scandi,
    livingroom_traditional,
    livingroom_transitional,
    livingroom_add,
    nursery_starting_scratch,
    nursery_part_way,
    nursery_mostly_furnished,
    nursery_less2000,
    nursery_v20005000,
    nursery_v50007000,
    nursery_more10000,
    nursery_neutral,
    nursery_neutralpops,
    nursery_brightbold,
    nursery_colourkeep,
    nursery_colouravoid,
    nursery_eclectic,
    nursery_bohemian,
    nursery_contemporary,
    nursery_coastal,
    nursery_dramatic_bold,
    nursery_glam,
    nursery_industrial,
    nursery_rustic,
    nursery_scandi,
    nursery_traditional,
    nursery_transitional,
    nursery_add,
    office_starting_scratch,
    office_part_way,
    office_mostly_furnished,
    office_less2000,
    office_v20005000,
    office_v50007000,
    office_more10000,
    office_neutral,
    office_neutralpops,
    office_brightbold,
    office_colourkeep,
    office_colouravoid,
    office_eclectic,
    office_bohemian,
    office_contemporary,
    office_coastal,
    office_dramatic_bold,
    office_glam,
    office_industrial,
    office_rustic,
    office_scandi,
    office_traditional,
    office_transitional,
    office_add,
    other_starting_scratch,
    other_part_way,
    other_mostly_furnished,
    other_less2000,
    other_v20005000,
    other_v50007000,
    other_more10000,
    other_neutral,
    other_neutralpops,
    other_brightbold,
    other_colourkeep,
    other_colouravoid,
    other_eclectic,
    other_bohemian,
    other_contemporary,
    other_coastal,
    other_dramatic_bold,
    other_glam,
    other_industrial,
    other_rustic,
    other_scandi,
    other_traditional,
    other_transitional,
    other_add,
    less,
    middle,
    more,
    chrome,
    gold,
    copper,
    black,
    inspiration,
    incorporate,
    itemtext,
    extratext
  )
VALUES(
    '$name',
    '$livingroom',
    '$diningroom',
    '$hallway',
    '$bedroom',
    '$childrensbedroom',
    '$nursery',
    '$office',
    '$bathroom',
    '$kitchen',
    '$other',
    '$adults',
    '$children',
    '$pets',
    '$selling_house',
    '$just_moved',
    '$new_furniture',
    '$fresh_look',
    '$other_reason',
    '$bath_starting_scratch',
    '$bath_part_way',
    '$bath_mostly_furnished',
    '$bath_less2000',
    '$bath_v20005000',
    '$bath_v50007000',
    '$bath_more10000',
    '$bath_neutral',
    '$bath_neutralpops',
    '$bath_brightbold',
    '$bath_colourkeep',
    '$bath_colouravoid',
    '$bath_eclectic',
    '$bath_bohemian',
    '$bath_contemporary',
    '$bath_coastal',
    '$bath_dramatic_bold',
    '$bath_glam',
    '$bath_industrial',
    '$bath_rustic',
    '$bath_scandi',
    '$bath_traditional',
    '$bath_transitional',
    '$bath_add',
    '$bedroom_starting_scratch',
    '$bedroom_part_way',
    '$bedroom_mostly_furnished',
    '$bedroom_less2000',
    '$bedroom_v20005000',
    '$bedroom_v50007000',
    '$bedroom_more10000',
    '$bedroom_neutral',
    '$bedroom_neutralpops',
    '$bedroom_brightbold',
    '$bedroom_colourkeep',
    '$bedroom_colouravoid',
    '$bedroom_eclectic',
    '$bedroom_bohemian',
    '$bedroom_contemporary',
    '$bedroom_coastal',
    '$bedroom_dramatic_bold',
    '$bedroom_glam',
    '$bedroom_industrial',
    '$bedroom_rustic',
    '$bedroom_scandi',
    '$bedroom_traditional',
    '$bedroom_transitional',
    '$bedroom_add',
    '$bedroom_2_starting_scratch',
    '$bedroom_2_part_way',
    '$bedroom_2_mostly_furnished',
    '$bedroom_2_less2000',
    '$bedroom_2_v20005000',
    '$bedroom_2_v50007000',
    '$bedroom_2_more10000',
    '$bedroom_2_neutral',
    '$bedroom_2_neutralpops',
    '$bedroom_2_brightbold',
    '$bedroom_2_colourkeep',
    '$bedroom_2_colouravoid',
    '$bedroom_2_eclectic',
    '$bedroom_2_bohemian',
    '$bedroom_2_contemporary',
    '$bedroom_2_coastal',
    '$bedroom_2_dramatic_bold',
    '$bedroom_2_glam',
    '$bedroom_2_industrial',
    '$bedroom_2_rustic',
    '$bedroom_2_scandi',
    '$bedroom_2_traditional',
    '$bedroom_2_transitional',
    '$bedroom_2_add',
    '$bedroom_3_starting_scratch',
    '$bedroom_3_part_way',
    '$bedroom_3_mostly_furnished',
    '$bedroom_3_less2000',
    '$bedroom_3_v20005000',
    '$bedroom_3_v50007000',
    '$bedroom_3_more10000',
    '$bedroom_3_neutral',
    '$bedroom_3_neutralpops',
    '$bedroom_3_brightbold',
    '$bedroom_3_colourkeep',
    '$bedroom_3_colouravoid',
    '$bedroom_3_eclectic',
    '$bedroom_3_bohemian',
    '$bedroom_3_contemporary',
    '$bedroom_3_coastal',
    '$bedroom_3_dramatic_bold',
    '$bedroom_3_glam',
    '$bedroom_3_industrial',
    '$bedroom_3_rustic',
    '$bedroom_3_scandi',
    '$bedroom_3_traditional',
    '$bedroom_3_transitional',
    '$bedroom_3_add',
    '$bedroom_4_starting_scratch',
    '$bedroom_4_part_way',
    '$bedroom_4_mostly_furnished',
    '$bedroom_4_less2000',
    '$bedroom_4_v20005000',
    '$bedroom_4_v50007000',
    '$bedroom_4_more10000',
    '$bedroom_4_neutral',
    '$bedroom_4_neutralpops',
    '$bedroom_4_brightbold',
    '$bedroom_4_colourkeep',
    '$bedroom_4_colouravoid',
    '$bedroom_4_eclectic',
    '$bedroom_4_bohemian',
    '$bedroom_4_contemporary',
    '$bedroom_4_coastal',
    '$bedroom_4_dramatic_bold',
    '$bedroom_4_glam',
    '$bedroom_4_industrial',
    '$bedroom_4_rustic',
    '$bedroom_4_scandi',
    '$bedroom_4_traditional',
    '$bedroom_4_transitional',
    '$bedroom_4_add',
    '$childrensbedroom_starting_scratch',
    '$childrensbedroom_part_way',
    '$childrensbedroom_mostly_furnished',
    '$childrensbedroom_less2000',
    '$childrensbedroom_v20005000',
    '$childrensbedroom_v50007000',
    '$childrensbedroom_more10000',
    '$childrensbedroom_neutral',
    '$childrensbedroom_neutralpops',
    '$childrensbedroom_brightbold',
    '$childrensbedroom_colourkeep',
    '$childrensbedroom_colouravoid',
    '$childrensbedroom_eclectic',
    '$childrensbedroom_bohemian',
    '$childrensbedroom_contemporary',
    '$childrensbedroom_coastal',
    '$childrensbedroom_dramatic_bold',
    '$childrensbedroom_glam',
    '$childrensbedroom_industrial',
    '$childrensbedroom_rustic',
    '$childrensbedroom_scandi',
    '$childrensbedroom_traditional',
    '$childrensbedroom_transitional',
    '$childrensbedroom_add',
    '$childrensbedroom2_starting_scratch',
    '$childrensbedroom2_part_way',
    '$childrensbedroom2_mostly_furnished',
    '$childrensbedroom2_less2000',
    '$childrensbedroom2_v20005000',
    '$childrensbedroom2_v50007000',
    '$childrensbedroom2_more10000',
    '$childrensbedroom2_neutral',
    '$childrensbedroom2_neutralpops',
    '$childrensbedroom2_brightbold',
    '$childrensbedroom2_colourkeep',
    '$childrensbedroom2_colouravoid',
    '$childrensbedroom2_eclectic',
    '$childrensbedroom2_bohemian',
    '$childrensbedroom2_contemporary',
    '$childrensbedroom2_coastal',
    '$childrensbedroom2_dramatic_bold',
    '$childrensbedroom2_glam',
    '$childrensbedroom2_industrial',
    '$childrensbedroom2_rustic',
    '$childrensbedroom2_scandi',
    '$childrensbedroom2_traditional',
    '$childrensbedroom2_transitional',
    '$childrensbedroom2_add',
    '$childrensbedroom3_starting_scratch',
    '$childrensbedroom3_part_way',
    '$childrensbedroom3_mostly_furnished',
    '$childrensbedroom3_less2000',
    '$childrensbedroom3_v20005000',
    '$childrensbedroom3_v50007000',
    '$childrensbedroom3_more10000',
    '$childrensbedroom3_neutral',
    '$childrensbedroom3_neutralpops',
    '$childrensbedroom3_brightbold',
    '$childrensbedroom3_colourkeep',
    '$childrensbedroom3_colouravoid',
    '$childrensbedroom3_eclectic',
    '$childrensbedroom3_bohemian',
    '$childrensbedroom3_contemporary',
    '$childrensbedroom3_coastal',
    '$childrensbedroom3_dramatic_bold',
    '$childrensbedroom3_glam',
    '$childrensbedroom3_industrial',
    '$childrensbedroom3_rustic',
    '$childrensbedroom3_scandi',
    '$childrensbedroom3_traditional',
    '$childrensbedroom3_transitional',
    '$childrensbedroom3_add',
    '$childrensbedroom4_starting_scratch',
    '$childrensbedroom4_part_way',
    '$childrensbedroom4_mostly_furnished',
    '$childrensbedroom4_less2000',
    '$childrensbedroom4_v20005000',
    '$childrensbedroom4_v50007000',
    '$childrensbedroom4_more10000',
    '$childrensbedroom4_neutral',
    '$childrensbedroom4_neutralpops',
    '$childrensbedroom4_brightbold',
    '$childrensbedroom4_colourkeep',
    '$childrensbedroom4_colouravoid',
    '$childrensbedroom4_eclectic',
    '$childrensbedroom4_bohemian',
    '$childrensbedroom4_contemporary',
    '$childrensbedroom4_coastal',
    '$childrensbedroom4_dramatic_bold',
    '$childrensbedroom4_glam',
    '$childrensbedroom4_industrial',
    '$childrensbedroom4_rustic',
    '$childrensbedroom4_scandi',
    '$childrensbedroom4_traditional',
    '$childrensbedroom4_transitional',
    '$childrensbedroom4_add',
    '$diningroom_starting_scratch',
    '$diningroom_part_way',
    '$diningroom_mostly_furnished',
    '$diningroom_less2000',
    '$diningroom_v20005000',
    '$diningroom_v50007000',
    '$diningroom_more10000',
    '$diningroom_neutral',
    '$diningroom_neutralpops',
    '$diningroom_brightbold',
    '$diningroom_colourkeep',
    '$diningroom_colouravoid',
    '$diningroom_eclectic',
    '$diningroom_bohemian',
    '$diningroom_contemporary',
    '$diningroom_coastal',
    '$diningroom_dramatic_bold',
    '$diningroom_glam',
    '$diningroom_industrial',
    '$diningroom_rustic',
    '$diningroom_scandi',
    '$diningroom_traditional',
    '$diningroom_transitional',
    '$diningroom_add',
    '$hallway_starting_scratch',
    '$hallway_part_way',
    '$hallway_mostly_furnished',
    '$hallway_less2000',
    '$hallway_v20005000',
    '$hallway_v50007000',
    '$hallway_more10000',
    '$hallway_neutral',
    '$hallway_neutralpops',
    '$hallway_brightbold',
    '$hallway_colourkeep',
    '$hallway_colouravoid',
    '$hallway_eclectic',
    '$hallway_bohemian',
    '$hallway_contemporary',
    '$hallway_coastal',
    '$hallway_dramatic_bold',
    '$hallway_glam',
    '$hallway_industrial',
    '$hallway_rustic',
    '$hallway_scandi',
    '$hallway_traditional',
    '$hallway_transitional',
    '$hallway_add',
    '$kitchen_starting_scratch',
    '$kitchen_part_way',
    '$kitchen_mostly_furnished',
    '$kitchen_less2000',
    '$kitchen_v20005000',
    '$kitchen_v50007000',
    '$kitchen_more10000',
    '$kitchen_neutral',
    '$kitchen_neutralpops',
    '$kitchen_brightbold',
    '$kitchen_colourkeep',
    '$kitchen_colouravoid',
    '$kitchen_eclectic',
    '$kitchen_bohemian',
    '$kitchen_contemporary',
    '$kitchen_coastal',
    '$kitchen_dramatic_bold',
    '$kitchen_glam',
    '$kitchen_industrial',
    '$kitchen_rustic',
    '$kitchen_scandi',
    '$kitchen_traditional',
    '$kitchen_transitional',
    '$kitchen_add',
    '$livingroom_starting_scratch',
    '$livingroom_part_way',
    '$livingroom_mostly_furnished',
    '$livingroom_less2000',
    '$livingroom_v20005000',
    '$livingroom_v50007000',
    '$livingroom_more10000',
    '$livingroom_neutral',
    '$livingroom_neutralpops',
    '$livingroom_brightbold',
    '$livingroom_colourkeep',
    '$livingroom_colouravoid',
    '$livingroom_eclectic',
    '$livingroom_bohemian',
    '$livingroom_contemporary',
    '$livingroom_coastal',
    '$livingroom_dramatic_bold',
    '$livingroom_glam',
    '$livingroom_industrial',
    '$livingroom_rustic',
    '$livingroom_scandi',
    '$livingroom_traditional',
    '$livingroom_transitional',
    '$livingroom_add',
    '$nursery_starting_scratch',
    '$nursery_part_way',
    '$nursery_mostly_furnished',
    '$nursery_less2000',
    '$nursery_v20005000',
    '$nursery_v50007000',
    '$nursery_more10000',
    '$nursery_neutral',
    '$nursery_neutralpops',
    '$nursery_brightbold',
    '$nursery_colourkeep',
    '$nursery_colouravoid',
    '$nursery_eclectic',
    '$nursery_bohemian',
    '$nursery_contemporary',
    '$nursery_coastal',
    '$nursery_dramatic_bold',
    '$nursery_glam',
    '$nursery_industrial',
    '$nursery_rustic',
    '$nursery_scandi',
    '$nursery_traditional',
    '$nursery_transitional',
    '$nursery_add',
    '$office_starting_scratch',
    '$office_part_way',
    '$office_mostly_furnished',
    '$office_less2000',
    '$office_v20005000',
    '$office_v50007000',
    '$office_more10000',
    '$office_neutral',
    '$office_neutralpops',
    '$office_brightbold',
    '$office_colourkeep',
    '$office_colouravoid',
    '$office_eclectic',
    '$office_bohemian',
    '$office_contemporary',
    '$office_coastal',
    '$office_dramatic_bold',
    '$office_glam',
    '$office_industrial',
    '$office_rustic',
    '$office_scandi',
    '$office_traditional',
    '$office_transitional',
    '$office_add',
    '$other_starting_scratch',
    '$other_part_way',
    '$other_mostly_furnished',
    '$other_less2000',
    '$other_v20005000',
    '$other_v50007000',
    '$other_more10000',
    '$other_neutral',
    '$other_neutralpops',
    '$other_brightbold',
    '$other_colourkeep',
    '$other_colouravoid',
    '$other_eclectic',
    '$other_bohemian',
    '$other_contemporary',
    '$other_coastal',
    '$other_dramatic_bold',
    '$other_glam',
    '$other_industrial',
    '$other_rustic',
    '$other_scandi',
    '$other_traditional',
    '$other_transitional',
    '$other_add',
    '$less',
    '$middle',
    '$more',
    '$chrome',
    '$gold',
    '$copper',
    '$black',
    '$inspiration',
    '$incorporate',
    '$itemtext',
    '$extratext'
  )
";

if($result = pg_query($query)){
  echo "";
 }
 else{
  echo "";
  echo pg_result_error($sql);
 }

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

        <div class="center-grid" style="margin-top: 200px;">
          <h2>Thank you!</h2>
        </div>
        <div class="center-grid" style="padding-top: 15px;">
          <h5>All of your answers have been recorded, we will be in touch shortly!</h5>

        </div>
        <div class="center-grid" style="padding-top: 30px;">
        </div>
    </body>
    <script>
  </script>
</html>
