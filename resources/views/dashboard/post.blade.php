@extends('partials.app')

@section('content')
    <main class="contentArea">
        <div class="contentAreaInner clearfix">
            @foreach($posts as $post)
                <div class="heading">
                    <h1><span class="version status solved">{{$post->body}}</h1>
                    <hr>
                </div>
                <div class="discussion-area" style="margin-bottom: 2rem;">
                    <div class="topic-comments">
                        @foreach($post->comments as $comment)
                            <div class="comment user-comment">
                                <div class="comment-content">
                                    <p>
                                        {{$comment->body}}
                                    </p>
                                </div>
                                <cite class="commentator">
                                    <span class="auth-dp"><img src="assets/img/author.jpg" alt="asd"></span>
                                    {{$comment->user->name}}
                                </cite>
                            </div>
                            @endforeach

                    </div>
                    <hr>
                    <h4><strong>Reply To: </strong> <br/>{{$post->body}}</h4>
                    <form method="POST" action="{{route('save_comment',['id' => $post->id])}}">
                        <div class="input-block">
                            <label for="writeDetails">How can we help you?</label>
                            <textarea class="text-area-sm" id="writeDetails" name="body" required></textarea>
                        </div>
                        <br>
                        <button class="btn"><i class="fa fa-hashtag"></i>POST Reply</button>
                        {{csrf_field()}}
                    </form>
                </div>
            @endforeach

        </div>
    </main>
@endsection
