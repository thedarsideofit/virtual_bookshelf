<p class="lead">Popular Authors</p>
<a href="/author">
<img src="http://www.authorhouse.co.uk/uploadedImages/AuthorHouse_UK/AuthorsInTheHouse/Our-Authors.jpg" width="100%" />
</a>
<div class="list-group">
@foreach ($authors as $author)
    <a href="#" class="list-group-item">{{$author->name}}</a>   
@endforeach   
</div>