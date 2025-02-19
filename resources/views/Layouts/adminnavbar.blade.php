<div id="sidebar" class="d-flex flex-column">
    <!-- Sidebar Header with Burger Menu -->
    <div class="sidebar-header d-flex align-items-center px-3 py-2">
        <i class="bi bi-list" id="toggleSidebar" style="cursor: pointer; font-size: 24px;"></i>
        <span class="ms-2 fw-bold">Admin Panel</span>
    </div>

    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-house-door"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.users') }}" class="nav-link {{ Request::routeIs('admin.users') ? 'active' : '' }}">
                <i class="bi bi-people"></i> <span>Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.reports') }}" class="nav-link {{ Request::routeIs('admin.reports') ? 'active' : '' }}">
                <i class="bi bi-bar-chart"></i> <span>Reports</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.settings') }}" class="nav-link {{ Request::routeIs('admin.settings') ? 'active' : '' }}">
                <i class="bi bi-gear"></i> <span>Settings</span>
            </a>
        </li>
    </ul>

    <!-- Logout Button -->
    <div class="logout mt-auto p-3">
        <a href="{{ route('logout') }}" class="nav-link text-danger"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right"></i> <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>

<!-- Sidebar Styles -->
<style>
    body {
        display: flex;
        height: 100vh;
        overflow: hidden;
        background-color: #f8f9fa;
    }

    #sidebar {
        width: 260px;
        background: #212529;
        color: white;
        height: 100vh;
        transition: all 0.3s;
        position: fixed;
        left: 0;
        top: 0;
        display: flex;
        flex-direction: column;
    }

    #sidebar.collapsed {
        width: 80px;
    }

    #sidebar .nav-link {
        color: white;
        padding: 12px;
        font-size: 18px;
        display: flex;
        align-items: center;
        gap: 12px;
        transition: all 0.3s;
    }

    #sidebar .nav-link:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    #sidebar .nav-link.active {
        background: rgba(255, 255, 255, 0.2);
        font-weight: bold;
    }

    #sidebar .nav-link span {
        transition: opacity 0.3s ease;
    }

    #sidebar.collapsed .nav-link span {
        opacity: 0;
        width: 0;
        overflow: hidden;
    }

    .sidebar-header {
        font-size: 22px;
        font-weight: bold;
    }

    #sidebar.collapsed .sidebar-header span {
        display: none;
    }

    .logout {
        margin-top: auto;
    }
</style>

<!-- Sidebar Toggle Script -->
<script>
    document.getElementById('toggleSidebar').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('collapsed');
    });
</script>
