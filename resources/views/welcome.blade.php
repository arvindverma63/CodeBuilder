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
            <div class="question-card card mb-5">
                <!-- Card header -->
                <div class="card-header forum-card-img-30 d-flex justify-content-between align-items-center border-0">
                    <p class="pt-2 mb-0">
                        <img src="https://s.gravatar.com/avatar/a3e7dce3b212b4df69e60e874cb668cc?s=96&amp;d=mm&amp;r=g"
                            alt="" class="rounded-circle mr-2" width="30px">
                        <strong><a href="https://mdbootstrap.com/support/?user=61122/"
                                target="_blank">cawgit</a></strong>
                        <span class="badge d-none mx-1">free</span>
                        <span title="7/23/2019, 7:48:18 AM">asked 5 years ago</span>
                    </p>
                    <div>

                    </div>
                </div>
                <hr class="m-0">
                <!--Card content-->
                <div class="card-body">
                    <p><strong>Expected behavior*_Be able to click on an icon and have it set a variable to true to open
                            a modal_*Actual behavior*_Icon is not clickable._*Resources (screenshots, code snippets
                            etc.)</strong></p>
                    <p><a href="https://www.dropbox.com/s/948k4i4j04sxyyy/Capture.PNG?dl=0" target="_blank"
                            rel="nofollow">Click the link to view the image. I want the question mark to be
                            clickable.</a></p>
                    <hr>
                    <div class="comment-card ml-5">
                        <div class="form-group mb-0 d-none d-lg-block">
                            <a href="#"
                                class="btn btn-primary btn-sm ml-0 comment-form-toggle show_login waves-effect waves-light">Add
                                comment</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="editor-container" class="card mt-1">
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
