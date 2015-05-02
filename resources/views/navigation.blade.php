<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{URL::route('home')}}">AJVDC</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    {{-- <li class="{{set_active('home')}}"><a href="{{URL::route('home')}}">Home</a></li> --}}
                    <li class="{{set_active('about')}}"><a href="{{URL::route('about')}}">About Us</a></li>
                    <li class="{{set_active('what_we_do')}}"><a href="{{URL::route('what_we_do')}}">What We Do</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li class="{{set_active('entrepreneurship')}}"><a href="{{URL::route('entrepreneurship')}}">Youth Entrepreneurship Program</a></li>
                            <li class="{{set_active('engagement')}}"><a href="{{URL::route('engagement')}}">Youth Civic Engagement For Peace
</a></li>
                        </ul>
                    </li>
                    {{-- <li class="{{set_active('how_to_help')}}"><a href="{{URL::route('how_to_help')}}">How to Help Us</a></li> --}}
                    {{-- <li class="{{set_active('success_stories')}}"><a href="{{URL::route('success_stories')}}">Success Stories</a></li> --}}
                    {{-- <li class="{{set_active('photovoici')}}"><a href="{{URL::route('photovoici')}}">Photovoici program</a></li> --}}
                    <li class="{{set_active('partners')}}"><a href="{{URL::route('partners')}}">Partners and affiliation</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->