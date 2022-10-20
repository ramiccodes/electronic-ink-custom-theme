<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width", initial-scale=1>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
            <p class="brand">ramicreads</p>
            <div class="headericons">
                <i id="airplane"></i>
                <i id="wifi" class="fa-solid fa-wifi"></i>
                <p>70%</p>
                <i class="fa-solid fa-battery-three-quarters battery"></i>
                <p class="time">
                <span id="hours">12</span>:<span id="minutes">51</span>
                <span id="session">AM</span>
                </p>
            </div>
        </header>
        <hr />
    <div class="topbuttons">
      <button id="home">
        <a href="index.html">
          <i class="fa-sharp fa-solid fa-house-chimney"></i>
          <p>home</p>
        </a>
      </button>
      <button id="back" onclick="history.go(-1)">
        <i class="fa-sharp fa-solid fa-arrow-left"></i>
        <p>back</p>
      </button>
      <button id="darkmode">
        <i class="fa-solid fa-moon"></i>
        <p>dark mode</p>
      </button>
      <button id="brightness">
        <i class="fa-sharp fa-solid fa-lightbulb"></i>
        <p>brightness</p>
      </button>
      <button id="airplanemode" onclick="toggleAirplaneMode()">
        <i class="fa-solid fa-plane"></i>
        <p>airplane mode</p>
      </button>
    </div>
    <hr class="bottom" />
