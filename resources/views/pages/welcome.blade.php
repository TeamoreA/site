@extends('main')

@section('title', '| Homepage')

@section('content')
        <div class="row">
            <div class="col-md-12">
                
                  <!-- <h1>Welcome to My Blog!</h1>
                  <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
                   {{--<p class="lead">  {{ Html::linkRoute('posts.create', 'Create Post Link') }} </p>--}}
                    <p class="lead">  {{ Html::linkRoute('register', 'Create New User Account',array(),array('class' => 'btn btn-lg btn-block btn-success')) }} </p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
 -->                 


                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            {{ HTML::image('images/1.jpg') }}
                            {{ HTML::image('images/picture.jpg') }}
                            {{ HTML::image('images/toystory.jpg') }}
                            {{ HTML::image('images/nemo.jpg', 'a picture',['title' => '#htmlcaption']) }}

                            <!--
                            <img src="/school/nivo_slider/images/toystory.jpg" data-thumb="/school/nivo_slider/images/toystory.jpg" alt="" />
                            <a href="http://dev7studios.com"><img src="/school/nivo_slider/images/up.jpg" data-thumb="/school/nivo_slider/images/up.jpg" alt="" title="This is an example of a caption" /></a>
                            <img src="/school/nivo_slider/images/walle.jpg" data-thumb="/school/nivo_slider/images/walle.jpg" alt="" data-transition="slideInLeft" />
                            <img src="/school/nivo_slider/images/nemo.jpg" data-thumb="/school/nivo_slider/images/nemo.jpg" alt="" title="#htmlcaption" />
                            -->
                        </div>
                        
                        <div id="htmlcaption" class="nivo-html-caption">
                            <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
                        </div>
                        
                    </div>

                
                
            </div>
        </div> <!-- end of header .row -->

        <div class="row">
            <div class="col-md-8">
                
                @foreach($posts as $post)

                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
                        <a href="{{ route('blog.single', $post->id) }}" class="btn btn-primary">Read More</a>
                    </div>

                    <hr>

                @endforeach

            </div>

            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
@stop

@section('scripts')

    {!! Html::script('js/jquery-1.7.1.min.js') !!}
    {!! Html::script('js/jquery.nivo.slider.js') !!}

    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

@endsection