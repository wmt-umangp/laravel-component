<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <h1>Hello</h1>
    <div>
        @foreach($latestPosts as $post)
            <article>
                <h3>{{$post['title']}}</h3>
                <p>{{$post['content']}}</p>
            </article>
        @endforeach
    </div>
</div>
{{$slot}}

