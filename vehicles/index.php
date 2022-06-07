<?php
//this is the vehicles controller

// Get the database connection file
require_once '../library/connections.php';
// Get the PHP Motors model for use as needed
require_once '../model/main-model.php';
// Get the accounts model
require_once '../model/vehicles-model.php';

// Get the array of classifications
$classifications = getClassifications();

// Build a navigation bar using the $classifications array
$navList = '<ul>';
$navList .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
foreach ($classifications as $classification) {
  $navList .= "<li><a href='/phpmotors/index.php?action=" . urlencode($classification['classificationName']) . "' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
}
$navList .= '</ul>';

$classificationList = '<select name="classification">';
$classificationList .= '<option disabled selected>Choose Car Classification</option>';
foreach ($classifications as $classification) {
  $classificationList .= '<option value="' . $classification['classificationId'] . '">' . $classification['classificationName'] . '</option>';
}
$classificationList .= '</select>';

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }


switch ($action) {
  case 'AddVehicle':
    $make = filter_input(INPUT_POST, 'make');
    $model = filter_input(INPUT_POST, 'model');
    $desc = filter_input(INPUT_POST, 'desc');
    $imagePath = filter_input(INPUT_POST, 'imagePath');
    $thumbnail = filter_input(INPUT_POST, 'thumbnail');
    $price = filter_input(INPUT_POST, 'price');
    $stock = filter_input(INPUT_POST, 'stock');
    $color = filter_input(INPUT_POST, 'color');
    $classification = filter_input(INPUT_POST, 'classification');

    if(empty($make) || empty($model) || empty($desc) || empty($imagePath) || empty($thumbnail) || empty($price) || empty($stock) || empty($color) || empty($classification)) {
      $message = '<p>Please provide information for all empty form fields.</p>';
      include '../view/add-vehicle.php';
      exit;
    }
    $outcome = addVehicle($make, $model, $desc, $imagePath, $thumbnail, $price, $stock, $color, $classification);
    if($outcome === 1){
      $message = "<p>Successfully added vehicle</p>";
      include '../view/add-vehicle.php';
      exit;
    } else {
      $message = "<p>Sorry, the vehicle could not be added. Please try again.</p>";
      include '../view/add-vehicle.php';
      exit;
    }
    break;

  case 'AddClassification':
    $classification = filter_input(INPUT_POST, 'classification');
  if (empty($classification)) {
    $message = '<p>Please provide information for all empty form fields.</p>';
    include '../view/add-classification.php';
    exit;
  }

  $outcome = addClassification($classification);

  if($outcome === 1){
    header('location:/phpmotors?action=vehicleMan');
    exit;
  } else {
    $message = "<p>Sorry, but the registration failed. Please try again.</p>";
    include '../view/registration.php';
    exit;
  }
  break;
  
  case 'addClassification':
    include '../view/add-classification.php';
    break;

  case 'addVehicle':
    include '../view/add-vehicle.php';
    break;

  case 'login':
    include '../view/login.php';
     break;

  case 'register':
    include '../view/registration.php';
    break;

  default:
    include '../view/home.php';
    break;
}
