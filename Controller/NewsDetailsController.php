<?php
require ("../Controller/Database/database.php");
include("../Model/NewsModel.php");
include("../Model/AdminNewsModel.php");
// include ("../Model/NewsModel.php");

if (isset($_GET['id'])){
    $newsDetailsAdmin = new AdminNews();
    $news = $newsDetailsAdmin->selectOneNews($_GET['id']);
}

require "../View/News/NewsDetailsView.php";

?>