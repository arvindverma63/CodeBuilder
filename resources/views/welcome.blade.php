<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <link rel="stylesheet" href="{{ asset('css/page.css') }}">
</head>

<body>

    @include('partials.nav')

    <div class="side-container card">
        <div class="sidebar">
            <ul class="sidebar-list">
                <li class="active">Dashboard</li>
                <li>Laravel</li>
                <li>PHP</li>
                <li>Wordpress</li>
                <li>Android</li>
                <li>Java</li>
                <li>React</li>
            </ul>
        </div>
    </div>


    @include('partials.footer')
    @include('partials.js')

</body>

</html>
