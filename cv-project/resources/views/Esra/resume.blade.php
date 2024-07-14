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
    table, tr, th, td {
  border: none;
  width:80%;
  text-align: left;
}
table {
  border-collapse: separate;
  border-spacing: 50px 0;
}
td {
  padding: 10px 0;
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
<li class='s'><a href="/home">Home</a></li>
<li class='s'><a href="/resume"><a style='color:orange;'>About/CV</a></a></li>
<li class='s'><a href="/blog">Blog</a></li>
<li class='s'><a href="/contact">Contact</a></li>
</ul>
<a style="text-decoration:none;" href="https://github.com/Esra-Ashbli" class="action_btn">GitHub</a>
<div class="toggle_btn">
<i class="fa-solid fa-bars"></i>
</div>
</div>

<div class="dropdown_menu">
    <li class='s'><a href="/home">Home</a></li>
    <li class='s'><a href="/resume"><a style='color:orange;'>About/CV</a></a></li>
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
<br>
<main>
    <section id='wel'>
      <h1>ABOUT <span style="background-color:orange;">ME</span></h1>
	  <br>
	
	  <P style="font-size:20px; width:60%;">Here you will find more information about me, what I do, 
	  and my current skills mostly in terms of programming and technology</P>
  </section>
	 <br><br><br><br>
   <br><br><br><br><br>
  <section id='wel'> 
<table>
  <tr>
    <th><h2>Get to know me!</h2></th>
    <th><h2>My Skills</h2></th>
  </tr>
  <tr>
    <td>
      
      <p style="font-size:20px;width:90%;">I'm a Frontend Web Developer building the Front-end of Websites and Web Applications that leads to the success of the overall product. I also like sharing content related to the stuff that I have learned in Web Development . Feel free to Connect me. I'm open to Job opportunities where I can contribute, learn and grow. 
      If you have a good opportunity that matches my skills and experience then don't hesitate to contact me.</p>
<br>
<a style="font-size:20px; text-decoration:none;" href="/contact" class="action_btn">Contact</a>
</td>
  <td>
    <p>HTML&ensp;&ensp;CSS&ensp;&ensp;JAVA SCRIPT<br> JAVA&ensp;&ensp;PYTHON&ensp;&ensp; C&ensp;&ensp; C++&ensp;&ensp;SQL</p>
  </td>
</tr>
</table>
  <br>
<table>
<tr>
    <th><h2>Education</h2></th>
    <th><h2>Other Skills</h2></th>
</tr>
<tr>
    <td>
      <p style="font-size:20px;width:90%;">Bachelor of information technology [ IT ]<br>Qassim university, buraydah</p>
  </td>
  <td>
    <p>Team communication, Leadership skills, Problem solving, Time management.</p>
  </td>
</tr>
  </table>
  <br><br><br><br><br>
  </section>
</main>
<br><br><br><br><br>
<br><br><br><br><br>
@extends('layouts.footer')
@extends('layouts.myStory')
  @section('story')
      Don't forget to read <span style="  text-shadow: -1px -1px 0 orange, 1px -1px 0 orange, -1px 1px 0 orange, 1px 1px 0 orange;">My Story</span>
  @endsection

</body>
</html>