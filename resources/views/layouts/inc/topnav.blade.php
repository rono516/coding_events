<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://poshui-components.netlify.app/css/main.css" />

<style>
    body {
        overflow-x: hidden;
    }
</style>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">

    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand">Coding Contests<span style="color: blue">&Events</span></a>
    </div>


    <button type="button" data-toggle="collapse" data-target="#navbar-menu" class="navbar-toggler">
        <span class="navbar-toggler-icon"></span> </button>

    <div class="collapse navbar-collapse mr-4 center-me" id="navbar-menu">

        <ul class="navbar-nav mr-auto">
            <li><a href="{{ url('/') }}" class="nav-link">All Contests</a></li>
            <li><a href="{{ url('/hackerearth') }}" class="nav-link">Hacker Earth</a></li>
            <li><a href="{{ url('/codeforces') }}" class="nav-link">CodeForces</a></li>

            <li><a href="{{ url('/topcoder') }}" class="nav-link">TopCoder</a></li>
            <li><a href="{{ url('/atcoder') }}" class="nav-link">AtCoder</a></li>
            <li><a href="{{ url('/codechef') }}" class="nav-link">CodeChef</a></li>
            <li><a href="{{ url('/hackerrank') }}" class="nav-link">HackerRank</a></li>
            <li><a href="{{ url('/kickstart') }}" class="nav-link">Kick Start</a></li>
            <li><a href="{{ url('/leetcode') }}" class="nav-link">LeetCode</a></li>
            <li><a href="{{ url('/sites') }}" class="nav-link">Contest Sites</a></li>
            <li><a target="_blank" href="https://www.facebook.com/collins.sharks.3/">
                    <button class="btn btn-primary-solid btn-rounded"><i class="fa fa-facebook"
                            style="font-size:28px;"></i></button>
                </a></li>
            <li><a target="_blank" href="https://github.com/rono516/">
                    <button class="btn btn-primary-solid btn-rounded"><i class="fa fa-github"
                            style="font-size:28px"></i></button>
                </a></li>
            <li><a href="https://twitter.com/collins_rono_" target="_blank">
                    <button class="btn btn-primary-solid btn-rounded"><i class="fa fa-twitter"
                            style="font-size:28px"></i></button>
                </a></li>

        </ul>

    </div>


</nav>
