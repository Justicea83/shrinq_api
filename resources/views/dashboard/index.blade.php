@extends('partials.app')

@section('content')
    <main class="contentArea">
        <div class="contentAreaInner small-canvas clearfix">
            <header class="page-header user-widget-wrap">
                <h1>Create a Post</h1>
                <div class="user-widget top-right">
                    <figure><img src="assets/img/author.jpg" alt=""></figure>
                    <cite>{{auth()->user()->name}}</cite>
                </div>
            </header>

            <form method="POST" action="{{route('create_post')}}">
                <div class="input-block">
                    <label for="writeDetails">Create a Post</label>
                    <textarea id="writeDetails" name="body" required></textarea>
                </div>
                <div class="custom-checkbox">
                    <input type="checkbox" id="followup-check">
                    <label for="followup-check">
                        <span></span>
                        Notify me of follow-up replies
                    </label>
                </div>
                <br>
                <br>
                <br>
                <div class="text-center">
                    <button class="btn btn-lg"><i class="fa fa-hashtag"></i>POST QUESTION</button>
                </div>
                {{csrf_field()}}
            </form>

        </div><!--contenAreaInner-->
    </main>
@endsection
