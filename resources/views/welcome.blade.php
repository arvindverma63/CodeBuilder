<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <link rel="stylesheet" href="{{asset('css/page.css')}}">
</head>
<body>

@include('partials.nav')

<div class="container-card bg-dark p-0">
    <div class="row align-items-end mb-5 overflow-hidden py-5">
        <div class="col-12 col-md-6 pb-5 pb-md-0 text-center text-md-start">
            <h1 class="custom-heading mb-4">
                Every <span class="js-user-slider text-secondary d-inline-flex flex-column align-items-center mx-auto" data-words="developer, data scientist, system admin, mobile developer, game developer">developer</span> has a<br class="d-none d-md-block"> tab open to CodeBuilder.
            </h1>
            <p class="custom-paragraph mb-4 px-3">A platform to share your thought & and Explaination about coding world feel free to share.</p>
            <div class="d-flex justify-content-center justify-content-md-start" id="poster1-btn">
                <a href="/users/signup?ssrc=product_home" class="btn btn-primary" data-ga='["home page","body cta","join community",null,null]'>Sign up</a>
                <a href="/questions" class="btn btn-outline-light">
                    Community
                    <svg aria-hidden="true" class="svg-icon iconArrowRightAltSm ms-2" width="13" height="14" viewBox="0 0 13 14"><path d="m4.38 4.62 1.24-1.24L9.24 7l-3.62 3.62-1.24-1.24L6.76 7z"></path></svg>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-6 px-3">
            <img src="{{asset('images/regulation.png')}}" id="poster1" class="img-fluid" alt="">
        </div>
    </div>
</div>


@include('partials.footer')
@include('partials.js')

</body>
</html>
