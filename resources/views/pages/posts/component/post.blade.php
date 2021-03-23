<div class="col-lg-12">
    <div class="blog-post">
        <div class="blog-thumb">
            <img src="{{asset('storage/assets/images/'.$post->image)}}" alt="{{$post->title}}">
        </div>
        <div class="down-content">
            <span>{{$post->catName}}</span>
            <a href="{{route('post', ['id' => $post->id])}}"><h4>{{$post->title}}</h4></a>
            <ul class="post-info">
                <li>{{$post->userName}}</li>
                <li>{{date("F j, Y", strtotime($post->created_at))}}</li>
            </ul>
            <p> {{$post->intro}}</p>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" onclick="location.href='{{route('post', ["id" => $post->id])}}';">read more</button>
        </div>
    </div>
</div>
