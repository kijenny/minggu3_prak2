@extends('home')

@section('title', 'home')

@yield('header')
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

@section('footer')
<div class="container">
            <div class="row">
                <div class="col-md-12 text-center">KIRANA JENNY ALQORNI</h3>
                <p>MI 2F- 2031710086 PILITEKNIK NEGRI MALANG</p>
                    <ul class="social">
                        <li class="twitter"><a href="{{aaset ('#')}}" class="fa fa-twitter"></a></li>
                        <li class="facebook"><a href="{{asset ('#')}}" class="fa fa-facebook"></a></li>
                        <li class="rss"><a href="{{asset ('#')}}" class="fa fa-rss"></a></li>
                        <li class="linkedin"><a href="{{asset ('#')}}" class="fa fa-linkedin"></a></li>
                    </ul>
                    <p>Copyright &copy; 2084 Company Name</p>
                </div>
            </div>
        </div>

@endsection

