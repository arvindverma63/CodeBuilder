<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <link rel="stylesheet" href="{{ asset('css/page.css') }}">
</head>

<body>

    @include('partials.nav')


    <div class="wrapper">
        <div class="sidenav card">
            <div class="nav-container">
                <ul>
                    <li>Html</li>
                    <li>CSS</li>
                    <li>JAVASCRIPT</li>
                    <li>Java</li>
                    <li>Python</li>
                    <li>Php</li>
                    <li>Laravel</li>
                    <li>Mongodb</li>
                    <li>Mydql</li>
                    <li>Database</li>
                    <li>Laravel</li>
                    <li>Mongodb</li>
                    <li>Mydql</li>
                    <li>Database</li>
                </ul>
            </div>
        </div>
        <div class="main card">
            <!-- Create the editor container -->
            <div class="card">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary" data-mdb-ripple-init>Go somewhere</a>
                </div>
              </div>
            <div id="editor-container" class="card mt-4">

                <div id="editor">
                    <p>Codebuilder!</p>
                    <p>Add Your <strong>First</strong> Post</p>
                    <p><br /></p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
    @include('partials.js')

</body>

</html>
