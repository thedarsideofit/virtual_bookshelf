<p class="lead">Popular Subjects</p>
<a href="/subject">
<img src="http://www.careerfaqs.com.au/images/news_pages/iStock_000013118083Small.jpg" width="100%"/>
</a>
<div class="list-group">
@foreach ($subjects as $subject)
    <a href="{{route('subject_show',array('id' => $subject->id))}}" class="list-group-item">{{$subject->name}}</a>   
@endforeach   
</div>
