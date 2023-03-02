@extends('template.default')

{{-- <h1>{{ $title }}</h1>
<h2>{{ $heading }}</h2>
@foreach ($version2 as $list)
    <h3>{{ $list['flavor'] }}</h3>
    <p>{{ $list['desc'] }}</p>
@endforeach --}}
@section('content')
@foreach ($version2 as $list)
 
    <!-- Services-->
    <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">{{ $list['head'] }}</h2>
                    <h3 class="section-subheading text-muted">{{ $list['body'] }}</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Shop for Apple computers, compare iPod and iPhone models, and discover Apple and third-party accessories, software, and much more.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Responsive web design or responsive design is an approach to web design that aims to make web pages render well on a variety of devices and window or screen sizes from minimum to maximum display size to ensure usability and satisfaction. </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Defender for Endpoint on iOS includes and enables the web protection feature. Web protection helps to secure devices against web threats and protect users from phishing attacks. Note that Anti-phishing and custom indicators (URL and IP addresses) are supported as part of Web Protection.</p>
                    </div>
                </div>
            </div>
        </section>

    
    @endforeach
  @endsection