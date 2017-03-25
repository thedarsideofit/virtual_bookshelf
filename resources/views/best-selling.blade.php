<img src="http://i.usatoday.net/life/books/_common/images/best-selling-books-logo.png" width="260" />
<div class="list-group">
@foreach ($bestSellers as $bestSeller)
    <a href="#" class="list-group-item">{{$bestSeller->title}}</a>   
@endforeach   
</div>