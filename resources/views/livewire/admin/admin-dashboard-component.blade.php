<!-- content @s -->
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Users</h3>
                                            
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <a data-bs-toggle="modal" href="#addUser" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a data-bs-toggle="modal" href="#addUser" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add User</span></a>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner position-relative card-tools-toggle">
                                                <div class="card-title-group">
                                                    <div class="card-tools">
                                                        <div class="form-inline flex-nowrap gx-3">
                                                            <div class="form-wrap w-150px">
                                                                <select class="form-select js-select2" data-search="off" data-placeholder="Bulk Action">
                                                                    <option value="">Bulk Action</option>
                                                                    <option value="pass">Send Password Reset</option>
                                                                    <option value="delete">Delete</option>
                                                                </select>
                                                            </div>
                                                            <div class="btn-wrap">
                                                                <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                                <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                                            </div>
                                                        </div><!-- .form-inline -->
                                                    </div><!-- .card-tools -->
                                                    <div class="card-tools me-n1">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li>
                                                                <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                            </li><!-- li -->
                                                            <li class="btn-toolbar-sep"></li><!-- li -->
                                                            <li>
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-setting"></em>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                        <ul class="link-check">
                                                                            <li><span>Show</span></li>
                                                                            <li class="active"><a href="#">10</a></li>
                                                                            <li><a href="#">20</a></li>
                                                                            <li><a href="#">50</a></li>
                                                                        </ul>
                                                                        <ul class="link-check">
                                                                            <li><span>Order</span></li>
                                                                            <li class="active"><a href="#">DESC</a></li>
                                                                            <li><a href="#">ASC</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- .dropdown -->
                                                            </li><!-- li -->
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .card-tools -->
                                                </div><!-- .card-title-group -->
                                                <div class="card-search search-wrap" data-search="search">
                                                    <div class="card-body">
                                                        <div class="search-content">
                                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by User Name">
                                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                        </div>
                                                    </div>
                                                </div><!-- .card-search -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col"><span class="sub-text">Name</span></div>
                                                        <!--<div class="nk-tb-col tb-col-xxl"><span class="sub-text">Name</span></div>-->
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Role</span></div>
                                                        <!--<div class="nk-tb-col tb-col-lg"><span class="sub-text">Posts</span></div>-->
                                                        <div class="nk-tb-col nk-tb-col-tools text-end">
                                                            <a href="#" class="btn btn-xs btn-outline-light btn-icon"><em class="icon ni ni-plus"></em></a>
                                                        </div>                                                    
                                                    </div><!-- .nk-tb-item -->
                                                    @foreach($user as $users)
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                                <label class="custom-control-label" for="uid1"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <a href="#">
                                                                <div class="user-card">
                                                                    <div class="user-avatar  sm bg-primary-dim">
                                                                        <em class="icon ni ni-user-fill"></em>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$users->name}}</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--<div class="nk-tb-col tb-col-xxl">
                                                            <span>Abu Bin Ishtiyak</span>
                                                        </div>-->
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>{{$users->email}}</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>{{$users->utype}}</span>
                                                        </div>
                                                        <!--<div class="nk-tb-col tb-col-lg">
                                                            <span>{{$users->count()}}</span>
                                                        </div>-->
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                {{---<li class="nk-tb-action-hidden">
                                                                    <a href="html/cms/user-profile.html" class="btn btn-trigger btn-icon" data-bs-placement="top" title="View">
                                                                        <em class="icon ni ni-eye-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editUser" data-bs-placement="top" title="Quick Edit">
                                                                        <em class="icon ni ni-edit-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                        <em class="icon ni ni-trash-fill"></em>
                                                                    </a>
                                                                </li>--}}
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="html/cms/user-profile.html"><em class="icon ni ni-eye-fill"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editUser"><em class="icon ni ni-edit-fill"></em><span>Edit User</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    @endforeach
                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner">
                                                <div class="nk-block-between-md g-3">
                                                    <div class="g">
                                                        <ul class="pagination justify-content-center justify-content-md-start">
                                                            {{$user->links()}}
                                                        </ul><!-- .pagination -->
                                                    </div>
                                                    
                                                </div><!-- .nk-block-between -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card-inner-group -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
</div>
<!-- content @e -->


<!-- Add User-->
<div class="modal fade" tabindex="-1" role="dialog" id="addUser">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add User</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="firstName">Name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="First Name">
                                </div>
                            </div><!-- .col -->
                            <!--<div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Username can't be changed later">
                                </div>
                            </div>-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="email@example.com">
                                </div>
                            </div><!-- .col -->
                            <!--<div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                </div>
                            </div><!-- .col -->
                            <!--<div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="website">Website</label>
                                    <input type="text" class="form-control" id="website" placeholder="Website">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Select Role</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Role">
                                            <option value="">Select Role</option>
                                            <option value="ADM">Admin</option>
                                            <option value="ATR">Auteur</option>
                                            <option value="USR">User</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <!--<div class="col-12">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="userNoti">
                                    <label class="custom-control-label" for="userNoti">Send User Notification</label>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Add User</button>
                                    </li>
                                    <li>
                                        <a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a>
                                    </li>
                                </ul>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
</div><!-- .modal -->
<!-- Edit User-->
<div class="modal fade" tabindex="-1" role="dialog" id="editUser">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Edit User</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editFirstName">First Name</label>
                                    <input type="text" class="form-control" id="editFirstName" placeholder="First Name" value="Abu Bin">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editEmail">Email</label>
                                    <input type="email" class="form-control" id="editEmail" placeholder="email@example.com" value="softnio@gmail.com">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editLastName">Last Name</label>
                                    <input type="text" class="form-control" id="editLastName" placeholder="Last Name" value="Ishtiyak">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editWebsite">Website</label>
                                    <input type="text" class="form-control" id="editWebsite" placeholder="Website" value="softnio.com">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editPassword">Password</label>
                                    <input type="password" class="form-control" id="editPassword" placeholder="Password" value="123456">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editPost">Post</label>
                                    <input type="text" class="form-control" id="editPost" placeholder="Post" value="01">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Select Role</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2">
                                            <option value="superadmin">Super Admin</option>
                                            <option value="admin">Admin</option>
                                            <option value="subscriber">Subscriber</option>
                                            <option value="contributor">Contributor</option>
                                            <option value="author">Author</option>
                                            <option value="editor">Editor</option>
                                            <option value="none">Guest</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="editNoti">
                                    <label class="custom-control-label" for="editNoti">Send User Notification</label>
                                </div>
                            </div><!-- .col --> 
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Update</button>
                                    </li>
                                    <li>
                                        <a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a>
                                    </li>
                                </ul>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
</div><!-- .modal -->

