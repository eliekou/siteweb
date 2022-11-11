<style>

h1{
    max-width:250px;
    max-height:250px;
    font-size:2;
    color:yellow;
    
    font-size: 1.5rem;

}
</style>

<h1>Leave a rating</h1>


<form method="POST" action="{{route('review.store',$movie)}}">
    @csrf
    <input type="text" name="rate" class = "border-red-600 border-2">
    <button type = "submit"  class="bg-green-50">RATE</button>

</form>    