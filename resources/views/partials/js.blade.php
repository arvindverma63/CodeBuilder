<script src="{{asset('js/mdb.umd.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const sidebar = document.getElementById("sidebar");
        const sidebarCollapse = document.getElementById("sidebarCollapse");

        // Sidebar toggle
        sidebarCollapse.addEventListener("click", function() {
            sidebar.classList.toggle("active");
        });

        // Dropdown toggle for sidebar menu items
        const dropdownToggles = document.querySelectorAll("#sidebar .dropdown-toggle");
        dropdownToggles.forEach(toggle => {
            toggle.addEventListener("click", function(e) {
                e.preventDefault();
                const target = this.nextElementSibling;
                if (target) {
                    target.classList.toggle("show");
                    toggle.setAttribute("aria-expanded", target.classList.contains("show"));
                }
            });
        });



        // Close navbar after clicking a link in mobile view
        const navbarLinks = document.querySelectorAll(".navbar-collapse .nav-link");
        navbarLinks.forEach(link => {
            link.addEventListener("click", function() {
                if (window.innerWidth < 992) { // Check if in mobile view
                    navbarCollapse.classList.remove("show");
                }
            });
        });
    });
    </script>
