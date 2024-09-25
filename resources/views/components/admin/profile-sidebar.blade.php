<div class="col-3 d-none d-md-block border-end">
    <div class="card-body">
        <h4 class="subheader">Navigasi profile</h4>
        <div class="list-group list-group-transparent">
            <a href="{{ route('show.profile') }}"
                class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('admin/profile-saya*') ? 'active' : '' }}">Profile saya</a>
            <a href="{{ route('show.chPassword') }}" class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('admin/ganti-password*') ? 'active' : '' }}">Ganti password</a>
        </div>
    </div>
</div>
