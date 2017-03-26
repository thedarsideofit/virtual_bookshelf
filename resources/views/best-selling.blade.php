<img src="http://i.usatoday.net/life/books/_common/images/best-selling-books-logo.png" width="260" />
<div class="list-group">
@foreach ($bestSellers as $indexKey => $bestSeller)
    <a href="{{route('book_show',array('id' => $bestSeller->id))}}" class="list-group-item"><span class="badge pull-left">{{$indexKey + 1 }}</span>
    <h4>{{$bestSeller->title}}</h4>
    </a>   
@endforeach   
</div>