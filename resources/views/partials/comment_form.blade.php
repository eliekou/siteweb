<style>

h1{
    max-width:250px;
    max-height:250px;
    font-size:2;
    color:yellow;
    
    font-size: 1.5rem;

}
</style>

<h1>Leave a comment</h1>


<form method="POST" action="{{route('comment.store',$movie)}}">
    @csrf
    <input type="text" name="comment1" class = "border-red-600 border-2">
    <button type = "submit"  class="bg-green-50">COMMENT</button>

</form>   