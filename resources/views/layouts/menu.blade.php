<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-cogs"></i>
        <p>
            Administrations
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('profile') ? 'active' : '' }}">
                <i class="far fa-user nav-icon"></i>
                <p>Profile</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.index') }}" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                <i class="far fa-user nav-icon"></i>
                <p>Users</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('user_group') ? 'active' : '' }}">
                <i class="far fa-user nav-icon"></i>
                <p>User Groups</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('change_password') ? 'active' : '' }}">
                <i class="far fa-user nav-icon"></i>
                <p>Change Password</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-address-book"></i>
        <p>
            Admissions
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('patient_registration') ? 'active' : '' }}">
                <i class="far fa-registered nav-icon"></i>
                <p>Registration</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('patient.index') }}" class="nav-link {{ Request::is('patient') ? 'active' : '' }}">
                <i class="far fa-registered nav-icon"></i>
                <p>Patients</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('doctor.index') }}" class="nav-link {{ Request::is('doctor') ? 'active' : '' }}">
                <i class="far fa-registered nav-icon"></i>
                <p>Doctors</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('doctor_schedules') ? 'active' : '' }}">
                <i class="far fa-calendar nav-icon"></i>
                <p>Doctors Schedules</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('price_list') ? 'active' : '' }}">
                <i class="far fa-money-bill-alt nav-icon"></i>
                <p>Price List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('room') ? 'active' : '' }}">
                <i class="far fa-house-user nav-icon"></i>
                <p>Rooms</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('queue') ? 'active' : '' }}">
                <i class="far fa-house-user nav-icon"></i>
                <p>Queues</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user-friends"></i>
        <p>
            Doctors
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('mr.index') }}" class="nav-link {{ Request::is('mr.index') ? 'active' : '' }}">
                <i class="far fa-hospital-user nav-icon"></i>
                <p>Medical Records</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('examination') ? 'active' : '' }}">
                <i class="far fa-stethoscope nav-icon"></i>
                <p>Examination</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('doctor_schedule') ? 'active' : '' }}">
                <i class="far fa-calendar nav-icon"></i>
                <p>Schedules</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user-friends"></i>
        <p>
            Inventory
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('medical_record') ? 'active' : '' }}">
                <i class="far fa-hospital-user nav-icon"></i>
                <p>Warehouse</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('medical_record') ? 'active' : '' }}">
                <i class="far fa-hospital-user nav-icon"></i>
                <p>Master Item/Product</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('examination') ? 'active' : '' }}">
                <i class="far fa-stethoscope nav-icon"></i>
                <p>Stock</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('doctor_schedule') ? 'active' : '' }}">
                <i class="far fa-calendar nav-icon"></i>
                <p>Stock Inbound</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('doctor_schedule') ? 'active' : '' }}">
                <i class="far fa-calendar nav-icon"></i>
                <p>Stock Transfer</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('doctor_schedule') ? 'active' : '' }}">
                <i class="far fa-calendar nav-icon"></i>
                <p>Stock Opaname</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('doctor_schedule') ? 'active' : '' }}">
                <i class="far fa-calendar nav-icon"></i>
                <p>Item Specs</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user-friends"></i>
        <p>
            Laboratory
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('medical_record') ? 'active' : '' }}">
                <i class="far fa-hospital-user nav-icon"></i>
                <p>Lab/Medical Test</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user-friends"></i>
        <p>
            Cashier
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('medical_record') ? 'active' : '' }}">
                <i class="far fa-hospital-user nav-icon"></i>
                <p>Transactions</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user-friends"></i>
        <p>
            Management
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('tariff.index') }}" class="nav-link {{ Request::is('tariff') ? 'active' : '' }}">
                <i class="far fa-money nav-icon"></i>
                <p>Tariff</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('tariff') ? 'active' : '' }}">
                <i class="far fa-file-word nav-icon"></i>
                <p>Reports</p>
            </a>
        </li>
    </ul>
</li>
