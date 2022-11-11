<html>
<head>
<style>
.big-box{ 
       background-color:yellow;
       width:400px;
       height:400px;
       
      
}
body{
  background-color:black;
}
.box{
  margin-left:200px;
  margin-top:300px;
  position:center;
  background-image:"wallpaper-site.jpg";
  
}

h1{
    max-width:1000px;
    position:center;
    
    font-size: 3.25rem;
    color:yellow;
}
</style>

<div class="ml-30 pt-1">
            <a class="text-muted" href="/co.user">Back to your page</a>
</div>
<div class ="big box">


<form action="{{ route('movies.movie1') }}" class = "d-flex " >


  <div class ="box">
    <div class="form-group ">
    <h1> What are you looking for?</h1>
        <input type ="text" name = "q" class ="form-control border-grey-600 border-2">

    </div>
    <button class="btn-search" type="button"><i class="fa fa-search" aria-hidden ="true"></button>
</div>
</form>
 
</div>
