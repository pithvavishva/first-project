<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Care - Beauty Store Bootstrap 5 HTML CSS Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="author" content="TemplatesJungle">
  <meta name="keywords" content="ecommerce,fashion,store">
  <meta name="description" content="Beauty Store Bootstrap 5 HTML CSS Template">


  <?php
  include_once('includes/style.php');
  ?>


</head>

<body class="homepage">
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <defs>
      <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 15 15">
        <path fill="none" stroke="currentColor"
          d="M11 3.5h1M4.5.5h6a4 4 0 0 1 4 4v6a4 4 0 0 1-4 4h-6a4 4 0 0 1-4-4v-6a4 4 0 0 1 4-4Zm3 10a3 3 0 1 1 0-6a3 3 0 0 1 0 6Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 15 15">
        <path fill="none" stroke="currentColor"
          d="M7.5 14.5a7 7 0 1 1 0-14a7 7 0 0 1 0 14Zm0 0v-8a2 2 0 0 1 2-2h.5m-5 4h5" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="m14.478 1.5l.5-.033a.5.5 0 0 0-.871-.301l.371.334Zm-.498 2.959a.5.5 0 1 0-1 0h1Zm-6.49.082h-.5h.5Zm0 .959h.5h-.5Zm-6.99 7V12a.5.5 0 0 0-.278.916L.5 12.5Zm.998-11l.469-.175a.5.5 0 0 0-.916-.048l.447.223Zm3.994 9l.354.353a.5.5 0 0 0-.195-.827l-.159.474Zm7.224-8.027l-.37.336l.18.199l.265-.04l-.075-.495Zm1.264-.94c.051.778.003 1.25-.123 1.606c-.122.345-.336.629-.723 1l.692.722c.438-.42.776-.832.974-1.388c.193-.546.232-1.178.177-2.006l-.998.066Zm0 3.654V4.46h-1v.728h1Zm-6.99-.646V5.5h1v-.959h-1Zm0 .959V6h1v-.5h-1ZM10.525 1a3.539 3.539 0 0 0-3.537 3.541h1A2.539 2.539 0 0 1 10.526 2V1Zm2.454 4.187C12.98 9.503 9.487 13 5.18 13v1c4.86 0 8.8-3.946 8.8-8.813h-1ZM1.03 1.675C1.574 3.127 3.614 6 7.49 6V5C4.174 5 2.421 2.54 1.966 1.325l-.937.35Zm.021-.398C.004 3.373-.157 5.407.604 7.139c.759 1.727 2.392 3.055 4.73 3.835l.317-.948c-2.155-.72-3.518-1.892-4.132-3.29c-.612-1.393-.523-3.11.427-5.013l-.895-.446Zm4.087 8.87C4.536 10.75 2.726 12 .5 12v1c2.566 0 4.617-1.416 5.346-2.147l-.708-.706Zm7.949-8.009A3.445 3.445 0 0 0 10.526 1v1c.721 0 1.37.311 1.82.809l.74-.671Zm-.296.83a3.513 3.513 0 0 0 2.06-1.134l-.744-.668a2.514 2.514 0 0 1-1.466.813l.15.989ZM.222 12.916C1.863 14.01 3.583 14 5.18 14v-1c-1.63 0-3.048-.011-4.402-.916l-.556.832Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="pinterest" viewBox="0 0 15 15">
        <path fill="none" stroke="currentColor"
          d="m4.5 13.5l3-7m-3.236 3a2.989 2.989 0 0 1-.764-2V7A3.5 3.5 0 0 1 7 3.5h1A3.5 3.5 0 0 1 11.5 7v.5a3 3 0 0 1-3 3a2.081 2.081 0 0 1-1.974-1.423L6.5 9m1 5.5a7 7 0 1 1 0-14a7 7 0 0 1 0 14Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="m1.61 12.738l-.104.489l.105-.489Zm11.78 0l.104.489l-.105-.489Zm0-10.476l.104-.489l-.105.489Zm-11.78 0l.106.489l-.105-.489ZM6.5 5.5l.277-.416A.5.5 0 0 0 6 5.5h.5Zm0 4H6a.5.5 0 0 0 .777.416L6.5 9.5Zm3-2l.277.416a.5.5 0 0 0 0-.832L9.5 7.5ZM0 3.636v7.728h1V3.636H0Zm15 7.728V3.636h-1v7.728h1ZM1.506 13.227c3.951.847 8.037.847 11.988 0l-.21-.978a27.605 27.605 0 0 1-11.568 0l-.21.978ZM13.494 1.773a28.606 28.606 0 0 0-11.988 0l.21.978a27.607 27.607 0 0 1 11.568 0l.21-.978ZM15 3.636c0-.898-.628-1.675-1.506-1.863l-.21.978c.418.09.716.458.716.885h1Zm-1 7.728a.905.905 0 0 1-.716.885l.21.978A1.905 1.905 0 0 0 15 11.364h-1Zm-14 0c0 .898.628 1.675 1.506 1.863l.21-.978A.905.905 0 0 1 1 11.364H0Zm1-7.728c0-.427.298-.796.716-.885l-.21-.978A1.905 1.905 0 0 0 0 3.636h1ZM6 5.5v4h1v-4H6Zm.777 4.416l3-2l-.554-.832l-3 2l.554.832Zm3-2.832l-3-2l-.554.832l3 2l.554-.832Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="dribble" viewBox="0 0 15 15">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
          d="M4.839 1.024c3.346 4.041 5.096 7.922 5.704 12.782M.533 6.82c5.985-.138 9.402-1.083 11.97-4.216M2.7 12.594c3.221-4.902 7.171-5.65 11.755-4.293M14.5 7.5a7 7 0 1 0-14 0a7 7 0 0 0 14 0Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <rect width="20" height="18" x="2" y="4" rx="4" />
          <path d="M8 2v4m8-4v4M2 10h20" />
        </g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="shopping-bag" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path
            d="M3.977 9.84A2 2 0 0 1 5.971 8h12.058a2 2 0 0 1 1.994 1.84l.803 10A2 2 0 0 1 18.833 22H5.167a2 2 0 0 1-1.993-2.16l.803-10Z" />
          <path d="M16 11V6a4 4 0 0 0-4-4v0a4 4 0 0 0-4 4v5" />
        </g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="gift" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <rect width="18" height="14" x="3" y="8" rx="2" />
          <path d="M12 5a3 3 0 1 0-3 3m6 0a3 3 0 1 0-3-3m0 0v17m9-7H3" />
        </g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-cycle" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path
            d="M22 12c0 6-4.39 10-9.806 10C7.792 22 4.24 19.665 3 16m-1-4C2 6 6.39 2 11.806 2C16.209 2 19.76 4.335 21 8" />
          <path d="m7 17l-4-1l-1 4M17 7l4 1l1-4" />
        </g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="link" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="category" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="check" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="trash" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-outline" viewBox="0 0 15 15">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
          d="M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-solid" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>
    </defs>
  </svg>
  <?php

  include_once('includes/config.php');
  $settingqry = "SELECT * FROM sitesettings";
  $settingresult = mysqli_query($conn, $settingqry) or exit("settings  query failed: " . mysqli_error($conn));
  $settingrow = mysqli_fetch_array($settingresult);

  ?>
  <?php
  include_once('includes/header.php');
  ?>

  <section class="text-white">
  <div class="slideshow slide-in" style="height: 60vh;"> <!-- changed from 100vh to 60vh -->
    <div class="swiper-wrapper">
    
      <div class="swiper-slide d-flex align-items-center" 
           style="background-image: url('images/43-_Silver_both_offer-_Collection_Web-min.webp'); 
                  background-size: cover; 
                  background-position: center; 
                  height: 60vh;"> <!-- apply same height -->
                  
       
        </div>
      </div>

      <!-- Repeat for other slides -->

      <!-- <div class="swiper-pagination swiper-pagination-slideshow "></div>

      <i class="icon-arrow  light-arrow icon-arrow-left"></i>
      <i class="icon-arrow  light-arrow icon-arrow-right"></i> -->

      </div>

  </section>

  <section class="features py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="0">
          <div class="py-5">
            <svg width="38" height="38" viewBox="0 0 24 24" class="svg-color">
              <use xlink:href="#calendar"></use>
            </svg>
            <h4 class="element-title text-capitalize my-3">Book An Appointment</h4>
            <p>At imperdiet dui accumsan sit amet nulla risus est ultricies quis.</p>
          </div>
        </div>
        <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="300">
          <div class="py-5">
            <svg width="38" height="38" viewBox="0 0 24 24" class="svg-color">
              <use xlink:href="#shopping-bag"></use>
            </svg>
            <h4 class="element-title text-capitalize my-3">Pick up in store</h4>
            <p>At imperdiet dui accumsan sit amet nulla risus est ultricies quis.</p>
          </div>
        </div>
        <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="600">
          <div class="py-5">
            <svg width="38" height="38" viewBox="0 0 24 24" class="svg-color">
              <use xlink:href="#gift"></use>
            </svg>
            <h4 class="element-title text-capitalize my-3">Special packaging</h4>
            <p>At imperdiet dui accumsan sit amet nulla risus est ultricies quis.</p>
          </div>
        </div>
        <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="900">
          <div class="py-5">
            <svg width="38" height="38" viewBox="0 0 24 24" class="svg-color">
              <use xlink:href="#arrow-cycle"></use>
            </svg>
            <h4 class="element-title text-capitalize my-3">free global returns</h4>
            <p>At imperdiet dui accumsan sit amet nulla risus est ultricies quis.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="new-arrival" class="new-arrival product-carousel position-relative open-up" data-aos="zoom-out">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center my-5 py-lg-5">
        <div class="line-img my-2">
          <img src="images/line.png" alt="">
        </div>
        <a href="#" class="btn btn-sm btn-primary mt-2 view-btn">VIEW ALL PRODUCTS</a>

        <div class="line-img my-2">
          <img src="images/line.png" alt="">
        </div>
      </div>

      <div class="row g-4"> <!-- g-4 adds gap between columns -->
        <?php
        $homecatqry = "SELECT * FROM products ORDER BY id DESC";
        $homecatresult = mysqli_query($conn, $homecatqry) or exit("Category select fail: " . mysqli_error($conn));
        while ($homerow = mysqli_fetch_array($homecatresult)) {
          $imagePath = 'images/products/' . $homerow['image'];
          ?>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="product text-center p-2 shadow-sm h-100">
              <img src="<?php echo $imagePath; ?>" class="img-fluid mb-2" alt="Product Image">
              <p class="mb-0"><?php echo htmlspecialchars($homerow['productname']); ?></p>
              <p class="mb-0"><?php echo htmlspecialchars($homerow['productdescription']); ?></p>
              <p class="mb-0">$<?php echo htmlspecialchars($homerow['productprice']); ?></p>

              <form action="cart.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo $homerow['id']; ?>">
                <input type="hidden" name="product_name" value="<?php echo $homerow['productname']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $homerow['productprice']; ?>">
                <input type="hidden" name="product_image" value="<?php echo $homerow['image']; ?>">
               <a href="add_whishlist.php?product_id=<?= $homerow['id'] ?>" title="Add to Wishlist">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="pink" viewBox="0 0 24 24">
      <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 
               2 5.42 4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09 
               C13.09 3.81 14.76 3 16.5 3 
               19.58 3 22 5.42 22 8.5 
               c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
    </svg>

</a>

                <button type="submit" name="add_to_cart" class="btn btn-primary w-100">Buy Now</button>

              </form>
            </div>
          </div>

          <?php
        }
        ?>
      </div>
    </div>
  </section>




  <!-- <section id="related-products" class="related-products product-carousel py-5 position-relative open-up"
    data-aos="zoom-out">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center my-5 py-lg-5">
        <div class="line-img my-2">
          <img src="images/line.png" alt="">
        </div>
        <h4 class="text-uppercase mb-0"> Related Products </h4>
        <div class="line-img my-2">
          <img src="images/line.png" alt="">
        </div>
      </div>
      <div class="swiper product-swiper overflow-hidden">
        <div class="swiper-wrapper d-flex">
          <div class="swiper-slide">
            <div class="product-item ">
              <div class="image-holder position-relative">
                <a href="single-product.html">
                  <img src="images/product-item14.jpg" alt="categories" class="product-image img-fluid">
                </a>
                <a href="wishlist.html" class="btn-icon btn-wishlist ">
                  <svg width="24" height="24" viewBox="0 0 24 24" class="svg-color">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <a href="wishlist.html" class="btn-icon btn-cart ">
                  <svg width="24" height="24" viewBox="0 0 24 24" class="svg-color">
                    <use xlink:href="#cart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="element-title text-uppercase fs-6 mt-3">
                    <a href="single-product.html">Natural Glow</a>
                  </h5>
                  <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item ">
              <div class="image-holder position-relative">
                <a href="single-product.html">
                  <img src="images/product-item2.jpg" alt="categories" class="product-image img-fluid">
                </a>
                <a href="wishlist.html" class="btn-icon btn-wishlist ">
                  <svg width="24" height="24" viewBox="0 0 24 24" class="svg-color">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <a href="wishlist.html" class="btn-icon btn-cart ">
                  <svg width="24" height="24" viewBox="0 0 24 24" class="svg-color">
                    <use xlink:href="#cart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="element-title text-uppercase fs-6 mt-3">
                    <a href="single-product.html">Natural Glow</a>
                  </h5>
                  <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item ">
              <div class="image-holder position-relative">
                <a href="single-product.html">
                  <img src="images/product-item10.jpg" alt="categories" class="product-image img-fluid">
                </a>
                <a href="wishlist.html" class="btn-icon btn-wishlist ">
                  <svg width="24" height="24" viewBox="0 0 24 24" class="svg-color">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <a href="wishlist.html" class="btn-icon btn-cart ">
                  <svg width="24" height="24" viewBox="0 0 24 24" class="svg-color">
                    <use xlink:href="#cart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="element-title text-uppercase fs-6 mt-3">
                    <a href="single-product.html">Natural Glow</a>
                  </h5>
                  <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item ">
              <div class="image-holder position-relative">
                <a href="single-product.html">
                  <img src="images/product-item6.jpg" alt="categories" class="product-image img-fluid">
                </a>
                <a href="wishlist.html" class="btn-icon btn-wishlist ">
                  <svg width="24" height="24" viewBox="0 0 24 24" class="svg-color">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <a href="wishlist.html" class="btn-icon btn-cart ">
                  <svg width="24" height="24" viewBox="0 0 24 24" class="svg-color">
                    <use xlink:href="#cart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="element-title text-uppercase fs-6 mt-3">
                    <a href="single-product.html">Natural Glow</a>
                  </h5>
                  <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item ">
              <div class="image-holder position-relative">
                <a href="single-product.html">
                  <img src="images/product-item4.jpg" alt="categories" class="product-image img-fluid">
                </a>
                <a href="wishlist.html" class="btn-icon btn-wishlist ">
                  <svg width="24" height="24" viewBox="0 0 24 24" class="svg-color">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <a href="wishlist.html" class="btn-icon btn-cart ">
                  <svg width="24" height="24" viewBox="0 0 24 24" class="svg-color">
                    <use xlink:href="#cart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="element-title text-uppercase fs-6 mt-3">
                    <a href="single-product.html">Natural Glow</a>
                  </h5>
                  <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div> -->
  <!-- <div class="icon-arrow no-outline icon-arrow-left bg-light"></div>
      <div class="icon-arrow no-outline icon-arrow-right bg-light"></div> -->
  <div class="text-center mt-5">
    <a href="shop-sidebar.html" class="btn-link">View All Products</a>
  </div>

  </div>
  </section>

  <section class="collection container py-5">
    <div
      class="collection-item  row g-4 d-flex justify-content-between align-items-center flex-direction-row flex-wrap my-5">
      <div class="col-md-5 column-container">
        <div class="cat-item position-relative">
          <div class="image-holder">
            <a href="shop.html"><img src="images/e5.webp" alt="categories" class="product-image img-fluid"></a>
            <div class="collection-content position-absolute p-5 text-uppercase  ">
              <h2 class="section-title text-white display-3 "> <strike>25%</strike> Now 50% OFF</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7 column-container collection-bg">
        <div class="collection-content mx-md-5 my-5">
          <h2 class="element-title text-uppercase display-4 ">Summer collection</h2>
          <p>Dignissim lacus, turpis ut suspendisse vel tellus. Turpis purus, gravida orci, fringilla a. Ac sed eu
            fringilla odio mi. Consequat pharetra at magna imperdiet cursus ac faucibus sit libero. Ultricies quam nunc,
            lorem sit lorem urna, pretium aliquam ut. In vel, quis donec dolor id in. Pulvinar commodo mollis diam sed
            facilisis at cursus imperdiet cursus ac faucibus sit faucibus sit libero.</p>
          <a href="#" class="btn btn-dark  text-uppercase mt-3">Shop Collection</a>

        </div>
      </div>
    </div>
  </section>


  <section class="blog my-5 py-5">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
        <h4 class="text-uppercase">Read Blog Posts</h4>
      </div>
      <div class="row">
        <div class="col-md-4">
          <article class="post-item">
            <div class="post-image">
              <a href="single-post.html">
                <img src="images/k1.webp" alt="image" class="post-grid-image img-fluid">
              </a>
            </div>
            <div class="post-content d-flex flex-wrap gap-2 my-3">
              <div class="post-meta text-uppercase  text-secondary">
                <span class="post-category">Fashion /</span>
                <span class="meta-day"> jul 11, 2022</span>
              </div>
              <h5 class="post-title text-uppercase">
                <a href="single-post.html">How to look outstanding in pastel</a>
              </h5>
              <p>Dignissim lacus,turpis ut suspendisse vel tellus.Turpis purus,gravida orci,fringilla...</p>
            </div>
          </article>
        </div>
        <div class="col-md-4">
          <article class="post-item">
            <div class="post-image">
              <a href="single-post.html">
                <img src="images/j1.jpg" alt="image" class="post-grid-image img-fluid">
              </a>
            </div>
            <div class="post-content d-flex flex-wrap gap-2 my-3">
              <div class="post-meta text-uppercase  text-secondary">
                <span class="post-category">Fashion /</span>
                <span class="meta-day"> jul 11, 2022</span>
              </div>
              <h5 class="post-title text-uppercase">
                <a href="single-post.html">Top 10 make-up trend for summer</a>
              </h5>
              <p>Turpis purus, gravida orci, fringilla dignissim lacus, turpis ut suspendisse vel tellus...</p>
            </div>
          </article>
        </div>
        <div class="col-md-4">
          <article class="post-item">
            <div class="post-image">
              <a href="single-post.html">
                <img src="images/d1.jpg" alt="image" class="post-grid-image img-fluid">
              </a>
            </div>
            <div class="post-content d-flex flex-wrap gap-2 my-3">
              <div class="post-meta text-uppercase  text-secondary">
                <span class="post-category">Fashion /</span>
                <span class="meta-day"> jul 11, 2022</span>
              </div>
              <h5 class="post-title text-uppercase">
                <a href="single-post.html">daily skin care routine for teens</a>
              </h5>
              <p>Turpis purus, gravida orci, fringilla dignissim lacus, turpis ut suspendisse vel tellus...</p>
            </div>
          </article>
        </div>
      </div>
      <div class=" text-center py-3">
        <a href="blog-Summer.html" class="btn-link">View All</a>
      </div>
    </div>
  </section>
  <?php
  include_once('includes/footer.php');
  ?>
  <?php
  include_once('includes/script.php'); ?>

</body>

</html>