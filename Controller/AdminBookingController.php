<?php
include_once("../Model/BlogModel.php");
include("../Model/AdminCommentsModel.php");
include_once("../Model/UserProfileModel.php");
include_once("../Model/AdminBookings.php");
include_once("../View/Admin/Layout/SideBar.view.php");
// include("../root/CSS/Admin/AdminComment.css.php");
$bookings = new AdminBooking();
$all_bookings = $bookings->get_all_bookings();
if(isset($_POST['sttInput'])){

     $id = $_POST['sttInput'];
     $user_id = $_POST['customerInput'];
     $expert_id = $_POST['expertInput'];
     $calendar_id = $_POST['scheduleInput'];
     $note = $_POST['noteInput'];
     $date = $_POST['dateInput'];
     $status = $_POST['statusInput'];
     $rating = $_POST['ratingInput'];
     $result = $bookings->update_booking($id,$user_id,$expert_id,$calendar_id,$note,$date,$status,$rating);
   if($result){
    header("Location: Adminbooking");
   }

}
include("../View/Admin/AdminBooking/AdminBookingView.php");
