@extends('../app')
@section('content')
     <section id="error" class="container">
        <h1>404, Page not found</h1>
        <p>The Page you are looking for doesn't exist</p>
        <a class="btn btn-success" href="{{URL::route('home')}}">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->
@endsection
