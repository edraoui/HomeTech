<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> My Account
            </div>
        </div>
    </div>
    <section class="pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="dashboard-menu">
                                <ul class="nav flex-column" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="users-tab" data-bs-toggle="tab" href="#users" role="tab" aria-controls="users" aria-selected="true"><i class="fi-rs-user mr-10"></i>Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="products-tab" data-bs-toggle="tab" href="#products" role="tab" aria-controls="products" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M352 320c88.4 0 160-71.6 160-160c0-15.3-2.2-30.1-6.2-44.2c-3.1-10.8-16.4-13.2-24.3-5.3l-76.8 76.8c-3 3-7.1 4.7-11.3 4.7H336c-8.8 0-16-7.2-16-16V118.6c0-4.2 1.7-8.3 4.7-11.3l76.8-76.8c7.9-7.9 5.4-21.2-5.3-24.3C382.1 2.2 367.3 0 352 0C263.6 0 192 71.6 192 160c0 19.1 3.4 37.5 9.5 54.5L19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L297.5 310.5c17 6.2 35.4 9.5 54.5 9.5zM80 408a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>  Technicians</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <form method="POST" action="{{ Route('logout')}}">
                                            @csrf
                                            <a class="nav-link" href="{{Route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();"><i class="fi-rs-sign-out mr-10"></i>Logout</a>
                                        </li>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content dashboard-content">
                                <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Hello {{Auth::user()->name}}! </h5>
                                        </div>
                                        <div class="card-body">
                                            <p>From your account dashboard. you can easily manage <a href="{{route('admin.users')}}">the users</a>, view and update <a href="{{route('admin.products')}}">the Technicians </a> and edit the <a href="{{route('admin.orders')}}">orders</a> status.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="users" role="tabpanel" aria-labelledby="users-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Users </h5>
                                        </div>
                                        <div class="card-body">
                                            <p>Manage the <a href="{{route('admin.users')}}">users</a>.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="products" role="tabpanel" aria-labelledby="products-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Technicians </h5>
                                        </div>
                                        <div class="card-body">
                                            <p>Manage the <a href="{{route('admin.products')}}">Technicians </a>.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Orders </h5>
                                        </div>
                                        <div class="card-body">
                                            <p>Manage the <a href="{{route('admin.orders')}}">orders</a>.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Users </h5>
                                        </div>
                                        <div class="card-body">
                                            <p>Manage the <a href="{{route('admin.users')}}">users</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
