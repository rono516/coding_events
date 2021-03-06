<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://poshui-components.netlify.app/css/main.css"/> 
  
  <nav style="margin-left: 2.5%; margin-right:2.5%;" class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-centre">

    <div class="container-fluid">
      <figure>
        <img class="img img-round margin-lr-1" style="border: 5px solid white;" height="170px" width="170px" src="{{ asset('img/CodeiT.png') }}" alt="">
        <figcaption>By Rono</figcaption>
      </figure>

      <!-- <a href="{{ url('/') }}" class="navbar-brand" style=" color:blue;" >CodeiT by Rono</a> -->
      <a href="{{ url('/') }}" class="navbar-brand" style=" color:blue; font-size: 30px;" >Coding Contests</a>
      
      
      
      
      
      <button type="button" data-toggle="collapse" data-target="#navbar-menu" class="navbar-toggler">
         <span class="navbar-toggler-icon"></span> </button>

    <div class="parent">
      <div class="collapse navbar-collapse mr-4 center-me" id="navbar-menu">  
        
        <ul class="navbar-nav mr-auto">
          <li><a href="{{ url('/') }}" class="nav-link">All Contests</a></li>
          <li><a href="{{ url('/hackerearth') }}" class="nav-link">Hacker Earth</a></li>
          <li><a href="{{ url('/codeforces') }}" class="nav-link">CodeForces</a></li>
       
          <!-- <li><a href="{{ url('/topcoder') }}" class="nav-link">TopCoder</a></li>
          <li><a href="{{ url('/atcoder') }}" class="nav-link">AtCoder</a></li>
          <li><a href="{{ url('/codechef') }}" class="nav-link">CodeChef</a></li> -->
          <li><a href="{{ url('/hackerrank') }}" class="nav-link">HackerRank</a></li>
          <li><a href="{{ url('/kickstart') }}" class="nav-link">Kick Start</a></li>
          <li><a href="{{ url('/leetcode') }}" class="nav-link">LeetCode</a></li>
          <!-- <li><a href="{{ url('/sites') }}" class="nav-link">Contest Sites</a></li> -->
          <li><a href="https://www.facebook.com/collins.sharks.3/">
          <button class="btn btn-primary-solid btn-rounded"><i class="fa fa-facebook"  style="font-size:28px;"></i></button>
          </a></li>
          <li><a href="https://github.com/rono516/">
           <button class="btn btn-primary-solid btn-rounded"><i class="fa fa-github" style="font-size:28px"></i></button>
          </a></li>
          <li><a href="https://mobile.twitter.com/Collins42Rono/">
          <button class="btn btn-primary-solid btn-rounded"><i class="fa fa-twitter" style="font-size:28px"></i></button>
           </a></li>
        
      </ul>

    </div>
    </div>
  </div>
    
  </nav>
