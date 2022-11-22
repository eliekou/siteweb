<style>

h1{
    max-width:250px;
    max-height:250px;
    font-size:2;
    color:yellow;
    
    font-size: 1.5rem;

}
</style>

<h1>Delete comment</h1>


<form method="POST" action="{{route('comment.delete',$movie)}}">
    @csrf
    
    <button type = "submit"  class="bg-green-50">DELETE</button>

</form>   