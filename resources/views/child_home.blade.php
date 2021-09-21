@extends('home')

@section('title', 'home')

@section('header')
<div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="{{asset ('index.html')}}">Stone</a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{asset ('index.html')}}">Home</a></li>
                            <li><a href="{{asset ('promotion.html')}}">Promotion</a></li>
                            <li><a href="{{asset ('products.html')}}">Products</a></li>
                            <li><a href="{{asset ('contact.html')}}">Contact</a></li>
                        </ul>
                    </div>
                </nav>         
            </div>
        </div>

@endsection

@section('content')
<h4>First Item</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-2 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{asset ('images/p2.jpg')}}" alt="">
                        <div class="overlay-p">
                            <a href="{{asset ('images/p2.jpg')}}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <h4>New Second</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-3 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{asset ('images/p3.jpg')}}" alt="">
                        <div class="overlay-p">
                            <a href="{{asset ('images/p3.jpg')}}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <h4>Number Three</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-2 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{asset ('images/p4.jpg')}}" alt="">
                        <div class="overlay-p">
                            <a href="{{asset ('images/p4.jpg')}}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <h4>Fourth Item</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-1 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{asset ('images/p5.jpg')}}" alt="">
                        <div class="overlay-p">
                            <a href="{{asset ('images/p5.jpg')}}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <h4>Active Five</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-3 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{asset ('images/p6.jpg')}}" alt="">
                        <div class="overlay-p">
                            <a href="{{asset ('images/p6.jpg')}}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <h4>Another Six</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-2 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{asset ('images/p7.jpg')}}" alt="">
                        <div class="overlay-p">
                            <a href="{{asset ('images/p7.jpg')}}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <h4>New Seven</h4>
                        <span>Creative</span>
                    </div>
                    <h4>Eighth Item</h4>
                        <span>Creative</span>
                    </div>
@endsection

@section('footer')
<div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="social">
                        <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                        <li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
                        <li class="rss"><a href="#" class="fa fa-rss"></a></li>
                        <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                    <p>Copyright &copy; 2084 Company Name</p>
                </div>
            </div>
        </div>

@endsection
