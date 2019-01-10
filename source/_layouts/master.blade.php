<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
       
    	<nav id="nav">
  <a class="logo" id="logo">igolabs</a>
  <button class="nav-icon" id="nav-icon"><span></span></button>
  <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#blog">Blog</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>
<section id="home">
  <div class="row">
    <div class="six columns">
        <div class="box-column">
            <h1 class="title"><span class="outlined">Ecommerce Web Development</span> & Web Design, Brighton, West Sussex. </h1>
        </div>
    </div>
    <div class="six columns">
        <div class="box-column">
            <p>Image goes here</p>
        </div>
    </div>
</div>
</section>

<section>
  
  @yield('contents')

</section>

    </body>
</html>
