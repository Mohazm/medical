    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            @if(Auth::user()->role === 'admin')
            
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/admin/student">
                        <i class="bi bi-person"></i>
                        <span>Student</span>
                    </a>
                </li><!-- End Dashboard Nav -->
                
            @endif


            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin/course">
                    <i class="bi bi-person"></i>
                    <span>course</span>
                </a>
            </li><!-- End Dashboard Nav -->

        </ul>

    </aside><!-- End Sidebar-->