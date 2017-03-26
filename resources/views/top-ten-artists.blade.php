<div class="list-group">
<h4>Top 10 Artists from Itunes</h4>
@foreach ($artists as $artist)	
    <div class="col-sm-6 col-lg-6 col-md-6 list-group-item">
        <div class="thumbnail">
            <a href="{{$artist['album_link']}}" target="blank"><img src="{{$artist['album_thumb']}}" alt=""></a>
            <div class="col-sm-12 caption">            	    
            	<span>{{$artist['album']}}</span>                
            	<br>
                <span><a href="{{$artist['href']}}" target="blank">{{$artist['name']}}</a></span> 
                <br>
                <span class="pull-right">{{$artist['price']}}</span>            
            </div>            
        </div>
    </div>
@endforeach   
</div>