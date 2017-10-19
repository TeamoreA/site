@extends('main')

@section('title', '| About')

@section('content')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1>About Me</h1>
                <p>Email : {{$data['email']}} </p>
                <p>Fullname: {{$data['fullname']}} </p>
                {{--<p> a: {{$a}} <br> b: {{$b}} <br> c: {{$c}}</p>--}}
                    {{--$data['fullname'] = $fullname;</p>--}}
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis aspernatur quas quibusdam veniam sunt animi, est quos optio explicabo deleniti inventore unde minus, tempore enim ratione praesentium, cumque, dolores nesciunt?</p>
            </div>
        </div>


        <!-- image gallery -->
        <div class="row">

            <div class="col-lg-10 col-md-offset-1">
                <h1 class="page-header">Dev-X Gallery</h1>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-fluid" src="gallery/images/1.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-fluid" src="gallery/images/3.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-fluid" src="gallery/images/3.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-fluid" src="gallery/images/3.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-fluid" src="gallery/images/2.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-fluid" src="gallery/images/1.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="gallery/images/2.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="gallery/images/2.jpg" alt="">
                </a>
            </div>
        </div>   
            
            
@endsection

@section('scripts')

    {!! Html::script('gallery/js/jquery.js') !!}
    {!! Html::script('gallery/js/bootstrap.min.js') !!}

@endsection