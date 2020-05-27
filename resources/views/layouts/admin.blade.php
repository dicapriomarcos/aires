@include('parts.header')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar-column">
            @include('admin.sidebar')
        </div>
        <div class="col-md-10">
            @include('parts.messages')
            @yield('admin-content')
        </div>
    </div>
</div>
@include('parts.footer')