<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap_min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="movie1.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="/movies">Back to movie search</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="/">TierMovie</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="{{route('co.user')}}">Userpage</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">World</a>
          <a class="p-2 text-muted" href="#">U.S.</a>
          <a class="p-2 text-muted" href="#">Technology</a>
          <a class="p-2 text-muted" href="#">Design</a>
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="/co.user">Back to your page</a>
          <a class="p-2 text-muted" href="#">Politics</a>
          <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#"></a>
        </nav>
      </div>
      <div class= "Rankings">Movie score</div>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
      
        <div class="col-xl-6 px-0">
          <h1 class="col-6 display-4 font-italic ml-10  "> @foreach($movie as $movie)
            {{$movie->getName()}}
            @endforeach
            </h1>
          <h7> {{$movie['overview']}}</h7>
          <div class ="container">
            <div class = "row ">
                <div class="col">
                    <div class ="ranking">

            Movie score

                    </div>
                    @if($movie->reviews->isNotEmpty())
                        <div class="score">{{$movie->avg_score()}}/10</div>

                        <a class="text-muted" href="/showRev/{{$movie->getId()}}">Go see scores!</a>
                    @else
                       <div class ="ranking">
                        No scores until now! Leave one!
                       </div>
                    @endif

                    @if($movie->comments->isNotEmpty())
                        
                        
                        <a class="text-muted" href="/showCom/{{$movie->getId()}}">Go see comments!</a>
                    @else
                       <div class ="ranking">
                        No comments until now! Leave one!
                       </div>
                    @endif
                </div>

                <div class="col">
            @include('partials.form')
                </div>

                <div class="col">
              @include('partials.comment_form')

                </div>

            </div>
              

                
                
                    

                
            
        </div>  
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Movie from {{$movie['origin_country0']}}</a></p>
          
        </div>
        
        <img src="{{($movie['poster_path'])}}" width ="400" height="500" alt="Logo Internet Explorer" />
      </div>
      </div>
  
    </div>



    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
