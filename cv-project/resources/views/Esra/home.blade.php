<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /><!--important-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" >

<style>
body{
    height: 100vh;
    background-color: #000;
    background-image: url('img/840843081452.jpg');
    background-size: cover;
    background-position: center;
	background-attachment: fixed;
	background-repeat: no-repeat;
    }
</style>
</head>
<body>
<header>
<div class="navbar">
<div>
  <a href="#">
    <img src="img/Screenshot_2023-07-24_100523-removebg-preview.png" alt="logo" width="70">
  </a>
</div>
<ul class="links">
<li class='s'><a href="/home"><a style='color:orange;'>Home</a></a></li>
<li class='s'><a href="/resume">About/CV</a></li>
<li class='s'><a href="/blog">Blog</a></li>
<li class='s'><a href="/contact">Contact</a></li>
</ul>
<a style="text-decoration:none;" href="https://github.com/Esra-Ashbli" class="action_btn">GitHub</a>
<div class="toggle_btn">
<i class="fa-solid fa-bars"></i>
</div>
</div>

<div class="dropdown_menu">
    <li class='s'><a href="/home"><a style='color:orange;'>Home</a></a></li>
    <li class='s'><a href="/resume">About/CV</a></li>
    <li class='s'><a href="/blog">Blog</a></li>
    <li class='s'><a href="/contact">Contact</a></li>
    <li><a style="text-decoration:none;" href="https://github.com/Esra-Ashbli" class="action_btn">GitHub</a></li>
</div>

<script>
    const toggleBtn=document.querySelector('.toggle_btn')
    const toggleBtnIcon=document.querySelector('.toggle_btn i')
    const dropDownMenu=document.querySelector('.dropdown_menu')
    
    toggleBtn.onclick = function (){
        dropDownMenu.classList.toggle('open')
        const isOpen = dropDownMenu.classList.contains('open')
        toggleBtnIcon.classList=isOpen
        ? 'fa-solid fa-xmark'
        : 'fa-solid fa-bars'
    }

</script>
  

</header>
<br><br><br><br><br>

<main>
    <section id='wel'>
      <h1><span style="background-color:orange;">W</span>ELCOME.</h1>
     
	  <br>
	  <h2>I'm ESRA' A-SHBLI</h2>
	  <P style="font-size:20px; width:60%;">A Frontend focused Web Developer building the Frontend of Websites and Web Applications that leads to the success of the overall product. 
	  Since 2020, I've enjoyed turning complex problems into simple, beautiful and intuitive designs. When I'm not pushing pixels, you'll find me cooking, or gardening.</p>
  
      
  </section>
  @extends('layouts.footer')
  @extends('layouts.myStory')
  @section('story')
  <span style="  text-shadow: -1px -1px 0 orange, 1px -1px 0 orange, -1px 1px 0 orange, 1px 1px 0 orange;">My Story</span>
  @endsection
</main>

 


</body>
</html>