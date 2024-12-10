<link rel="stylsheet/css" href="{{asset('css/style.css')}}?v={{time()}}"/>

<div class="navbars">
    <div class="nav-container">
        <div class="nav-icon">
            <h4>CodeBuilder</h4>
        </div>
        <div class="nav-btn" id="nav-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="nav-list" id="nav-list">
            <ul>
                <li>Dashboard</li>
                <li>About</li>
                <li>Service</li>
                <li>Contact</li>
                <li>Arvind</li>
                <li><button type="button" class="btn btn-dark" data-mdb-ripple-init><i class="fa-brands fa-google"></i> Google</button></li>
            </ul>
        </div>
    </div>
</div>
<script>
    // Select the toggle button and the navigation list
    const navBtn = document.getElementById('nav-btn');
    const navList = document.getElementById('nav-list');

    navBtn.addEventListener('click', function () {
        // Toggle the 'show' class to add/remove animation effects
        navList.classList.toggle('show');
    });
</script>
