@if(Auth::user()->utype === 'ADM')
<!-- content @s -->
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Posts </h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total 95 posts.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <a href="{{route('auteur.ajoutpost')}}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a href="{{route('auteur.ajoutpost')}}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Post</span></a>
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
                                                                    <option value="edit">Edit</option>
                                                                    <option value="delete">Move To Trash</option>
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
                                                                <div class="toggle-wrap">
                                                                    <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                                    <div class="toggle-content" data-content="cardTools">
                                                                        <ul class="btn-toolbar gx-1">
                                                                            <li class="toggle-close">
                                                                                <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                                            </li><!-- li -->
                                                                            <li>
                                                                                <div class="dropdown">
                                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                                        <div class="dot dot-primary"></div>
                                                                                        <em class="icon ni ni-filter-alt"></em>
                                                                                    </a>
                                                                                    <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                                        <div class="dropdown-head">
                                                                                            <span class="sub-title dropdown-title">Filter Users</span>
                                                                                            <div class="dropdown">
                                                                                                <a href="#" class="btn btn-sm btn-icon">
                                                                                                    <em class="icon ni ni-more-h"></em>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dropdown-body dropdown-body-rg">
                                                                                            <div class="row gx-6 gy-3">
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Tags</label>
                                                                                                        <select class="form-select js-select2">
                                                                                                            <option value="any">All Tags</option>
                                                                                                            <option value="health">health</option>
                                                                                                            <option value="technology">technology</option>
                                                                                                            <option value="seo">SEO</option>
                                                                                                            <option value="react">react</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Categories</label>
                                                                                                        <select class="form-select js-select2">
                                                                                                            <option value="any">All Categories</option>
                                                                                                            <option value="uncategorized">Uncategorized</option>
                                                                                                            <option value="covid">Covid</option>
                                                                                                            <option value="seo">SEO</option>
                                                                                                            <option value="website">Website</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Status</label>
                                                                                                        <select class="form-select js-select2">
                                                                                                            <option value="any">All Status</option>
                                                                                                            <option value="published">Published</option>
                                                                                                            <option value="pending">Pending</option>
                                                                                                            <option value="draft">Draft</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Date</label>
                                                                                                        <div class="form-control-wrap">
                                                                                                            <div class="form-icon form-icon-right">
                                                                                                                <em class="icon ni ni-calendar"></em>
                                                                                                            </div>
                                                                                                            <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12">
                                                                                                    <div class="form-group">
                                                                                                        <button type="button" class="btn btn-secondary">Filter</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dropdown-foot between">
                                                                                            <a class="clickable" href="#">Reset Filter</a>
                                                                                            <a href="#">Save Filter</a>
                                                                                        </div>
                                                                                    </div><!-- .filter-wg -->
                                                                                </div><!-- .dropdown -->
                                                                            </li><!-- li -->
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
                                                                    </div><!-- .toggle-content -->
                                                                </div><!-- .toggle-wrap -->
                                                            </li><!-- li -->
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .card-tools -->
                                                </div><!-- .card-title-group -->
                                                <div class="card-search search-wrap" data-search="search">
                                                    <div class="card-body">
                                                        <div class="search-content">
                                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by Author Name or Post Title">
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
                                                        <div class="nk-tb-col"><span class="sub-text">Title</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Author</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Categories</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Tags</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Comments</span></div>
                                                        <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Date</span></div>
                                                        <div class="nk-tb-col nk-tb-col-tools text-end">
                                                            <div class="dropdown">
                                                                <a href="#" class="btn btn-xs btn-outline-light btn-icon dropdown-toggle" data-bs-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-plus"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                    <ul class="link-tidy sm no-bdr">
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" checked="" id="bl">
                                                                                <label class="custom-control-label" for="bl">Athor</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" checked="" id="ph">
                                                                                <label class="custom-control-label" for="ph">Date</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="vri">
                                                                                <label class="custom-control-label" for="vri">Slug</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                                <label class="custom-control-label" for="uid1"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span>Hello World!</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <a href="#">
                                                                <div class="user-card">
                                                                    <div class="user-avatar  sm bg-orange-dim">
                                                                        <span>A</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">abubin_ishtiyak</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Uncategorized</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>—</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>1 Comment</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <div>
                                                                <span>Published</span>
                                                            </div>
                                                            <div>
                                                                <span>10 Feb 2020</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editPost" data-bs-placement="top" title="Quick Edit">
                                                                        <em class="icon ni ni-edit-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Trash">
                                                                        <em class="icon ni ni-trash-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a data-bs-toggle="modal" href="#editPost"><em class="icon ni ni-edit-fill"></em><span>Edit Post</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid2">
                                                                <label class="custom-control-label" for="uid2"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span>About Covid!</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <a href="#">
                                                                <div class="user-card">
                                                                    <div class="user-avatar sm bg-purple-dim">
                                                                        <span>IB</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">ifrat_binte</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Covid</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>health</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>3 Comments</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <div>
                                                                <span>Published</span>
                                                            </div>
                                                            <div>
                                                                <span>11 Feb 2020</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editPost" data-bs-placement="top" title="Quick Edit">
                                                                        <em class="icon ni ni-edit-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Trash">
                                                                        <em class="icon ni ni-trash-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a data-bs-toggle="modal" href="#editPost"><em class="icon ni ni-edit-fill"></em><span>Edit Post</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid3">
                                                                <label class="custom-control-label" for="uid3"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span>SEO Optimization</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <a href="#">
                                                                <div class="user-card">
                                                                    <div class="user-avatar  sm">
                                                                        <img src="./images/avatar/a-sm.jpg" alt="">
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">ashleylawson</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>SEO, Website</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>technology</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>12 Comments</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <div>
                                                                <span>Published</span>
                                                            </div>
                                                            <div>
                                                                <span>11 Jun 2021</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editPost" data-bs-placement="top" title="Quick Edit">
                                                                        <em class="icon ni ni-edit-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Trash">
                                                                        <em class="icon ni ni-trash-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a data-bs-toggle="modal" href="#editPost"><em class="icon ni ni-edit-fill"></em><span>Edit Post</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid4">
                                                                <label class="custom-control-label" for="uid4"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span>Website Design</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <a href="#">
                                                                <div class="user-card">
                                                                    <div class="user-avatar  sm bg-orange-dim">
                                                                        <span>J</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">joelarson</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Website, Design</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>technology</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>51 Comments</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <div>
                                                                <span>Published</span>
                                                            </div>
                                                            <div>
                                                                <span>11 Apr 2021</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editPost" data-bs-placement="top" title="Quick Edit">
                                                                        <em class="icon ni ni-edit-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Trash">
                                                                        <em class="icon ni ni-trash-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a data-bs-toggle="modal" href="#editPost"><em class="icon ni ni-edit-fill"></em><span>Edit Post</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid5">
                                                                <label class="custom-control-label" for="uid5"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span>React Redux</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <a href="#">
                                                                <div class="user-card">
                                                                    <div class="user-avatar sm bg-orange-dim">
                                                                        <img src="./images/avatar/b-sm.jpg" alt="">
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">frances</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Frontend, Website</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>technology</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>102 Comments</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <div>
                                                                <span>Published</span>
                                                            </div>
                                                            <div>
                                                                <span>12 Apr 2021</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editPost" data-bs-placement="top" title="Quick Edit">
                                                                        <em class="icon ni ni-edit-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Trash">
                                                                        <em class="icon ni ni-trash-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a data-bs-toggle="modal" href="#editPost"><em class="icon ni ni-edit-fill"></em><span>Edit Post</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid6">
                                                                <label class="custom-control-label" for="uid6"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span>React Native</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <a href="#">
                                                                <div class="user-card">
                                                                    <div class="user-avatar sm bg-orange-dim">
                                                                        <img src="./images/avatar/c-sm.jpg" alt="">
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">butler</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Website</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>react</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>25 Comments</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <div>
                                                                <span>Published</span>
                                                            </div>
                                                            <div>
                                                                <span>25 Jan 2021</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editPost" data-bs-placement="top" title="Quick Edit">
                                                                        <em class="icon ni ni-edit-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Trash">
                                                                        <em class="icon ni ni-trash-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a data-bs-toggle="modal" href="#editPost"><em class="icon ni ni-edit-fill"></em><span>Edit Post</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid7">
                                                                <label class="custom-control-label" for="uid7"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span>Keyword Research for SEO</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <a href="#">
                                                                <div class="user-card">
                                                                    <div class="user-avatar sm bg-orange-dim">
                                                                        <span>V</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">victoria</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>SEO</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>—</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>15 Comments</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <div>
                                                                <span>Published</span>
                                                            </div>
                                                            <div>
                                                                <span>21 Fab 2021</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editPost" data-bs-placement="top" title="Quick Edit">
                                                                        <em class="icon ni ni-edit-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Trash">
                                                                        <em class="icon ni ni-trash-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a data-bs-toggle="modal" href="#editPost"><em class="icon ni ni-edit-fill"></em><span>Edit Post</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid8">
                                                                <label class="custom-control-label" for="uid8"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span>Start with SEO</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <a href="#">
                                                                <div class="user-card">
                                                                    <div class="user-avatar sm bg-orange-dim">
                                                                        <img src="./images/avatar/d-sm.jpg" alt="">
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">harris</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>SEO</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>seo</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>0 Comments</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <div>
                                                                <span>Published</span>
                                                            </div>
                                                            <div>
                                                                <span>15 Aug 2021</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editPost" data-bs-placement="top" title="Quick Edit">
                                                                        <em class="icon ni ni-edit-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Trash">
                                                                        <em class="icon ni ni-trash-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a data-bs-toggle="modal" href="#editPost"><em class="icon ni ni-edit-fill"></em><span>Edit Post</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner">
                                                <div class="nk-block-between-md g-3">
                                                    <div class="g">
                                                        <ul class="pagination justify-content-center justify-content-md-start">
                                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                        </ul><!-- .pagination -->
                                                    </div>
                                                    <div class="g">
                                                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                            <div>Page</div>
                                                            <div>
                                                                <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
                                                                    <option value="page-1">1</option>
                                                                    <option value="page-2">2</option>
                                                                    <option value="page-4">4</option>
                                                                    <option value="page-5">5</option>
                                                                    <option value="page-6">6</option>
                                                                    <option value="page-7">7</option>
                                                                    <option value="page-8">8</option>
                                                                    <option value="page-9">9</option>
                                                                    <option value="page-10">10</option>
                                                                    <option value="page-11">11</option>
                                                                    <option value="page-12">12</option>
                                                                    <option value="page-13">13</option>
                                                                    <option value="page-14">14</option>
                                                                    <option value="page-15">15</option>
                                                                    <option value="page-16">16</option>
                                                                    <option value="page-17">17</option>
                                                                    <option value="page-18">18</option>
                                                                    <option value="page-19">19</option>
                                                                    <option value="page-20">20</option>
                                                                </select>
                                                            </div>
                                                            <div>OF 102</div>
                                                        </div>
                                                    </div><!-- .pagination-goto -->
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
@else
<!-- content @s -->
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Projects</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total 95 projects.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Open</span></a></li>
                                                                        <li><a href="#"><span>Closed</span></a></li>
                                                                        <li><a href="#"><span>Onhold</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt d-none d-sm-block">
                                                            <a href="{{route('auteur.ajoutpost')}}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Post</span></a>
                                                        </li>
                                                        <li class="nk-block-tools-opt d-block d-sm-none">
                                                            <a href="#" class="btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        @foreach($posts as $post)
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="project">
                                                        <div class="project-head">
                                                            <a href="html/project-kanban.html" class="project-title">
                                                                <div class="user-avatar sq bg-purple"><span>{{$post->image}}</span></div>
                                                                <div class="project-info">
                                                                    <h6 class="title">{{$post->titre}}</h6>
                                                                    <span class="sub-text">Softnio</span>
                                                                </div>
                                                            </a>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="html/project-kanban.html"><em class="icon ni ni-eye"></em><span>View Project</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Project</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-check-round-cut"></em><span>Mark As Done</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <p>{{$post->content}}</p>
                                                        </div>
                                                        <div class="project-progress">
                                                            <div class="project-progress-details">
                                                                <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>3 Tasks</span></div>
                                                                <div class="project-progress-percent">93.5%</div>
                                                            </div>
                                                            <div class="progress progress-pill progress-md bg-light">
                                                                <div class="progress-bar" data-progress="93.5"></div>
                                                            </div>
                                                        </div>
                                                        <div class="project-meta">
                                                            <ul class="project-users g-1">
                                                                <li>
                                                                    <div class="user-avatar sm bg-primary"><span>A</span></div>
                                                                </li>
                                                                <li>
                                                                    <div class="user-avatar sm bg-blue"><img src="./images/avatar/b-sm.jpg" alt=""></div>
                                                                </li>
                                                                <li>
                                                                    <div class="user-avatar bg-light sm"><span>+12</span></div>
                                                                </li>
                                                            </ul>
                                                            <span class="badge badge-dim bg-warning"><em class="icon ni ni-clock"></em><span>5 Days Left</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
</div>
<!-- content @e -->
@endif