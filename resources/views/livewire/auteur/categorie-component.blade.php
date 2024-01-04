<!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Categories</h3>
                                        </div><!-- .nk-block-head-content -->
                                        {{--<a class="btn btn-primary" wire:click="showCate">Ajouter categorie</a>--}}
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs flex-row-reverse">
                                        <div class="col-xxl-7">
                                            <div class="card card-bordered card-stretch">
                                                <div class="card-inner-group">
                                                    <div class="card-inner position-relative card-tools-toggle">
                                                        <div class="card-title-group">

                                                            <div class="card-tools me-n1">
                                                                <ul class="btn-toolbar gx-1">
                                                                    <li>
                                                                        <input type="text" wire:model.prevent="search" class="form-control border-transparent form-focus-none" placeholder="Recherche">
                                                                        <!--<a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>-->
                                                                    </li><!-- li -->
                                                                    <!--<li class="btn-toolbar-sep"></li><!-- li -->

                                                                </ul><!-- .btn-toolbar -->
                                                            </div><!-- .card-tools -->
                                                        </div><!-- .card-title-group -->
                                                        <!--<div class="card-search search-wrap" data-search="search">
                                                            <div class="card-body">
                                                                <div class="search-content">
                                                                    <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                                    <input type="text" wire:model.debounce="search" class="form-control border-transparent form-focus-none" placeholder="Search by Author Name or Post Title">
                                                                    <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                                </div>
                                                            </div>
                                                        </div><!-- .card-search -->
                                                    </div>
                                                    <div class="card-inner p-0">
                                                        <div class="nk-tb-list nk-tb-ulist">
                                                            <div class="nk-tb-item nk-tb-head">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid">
                                                                        <label class="custom-control-label" for="uid"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col"><span class="sub-text">N°</span></div>
                                                                <!--<div class="nk-tb-col tb-col-xxl"><span class="sub-text">Description</span></div>-->
                                                                <div class="nk-tb-col tb-col-sm"><span class="sub-text">Name</span></div>
                                                                <!--<div class="nk-tb-col"><span class="sub-text">Description</span></div>-->
                                                                <div class="nk-tb-col nk-tb-col-tools text-end"><span class="sub-text">Actions</span></div>
                                                            </div><!-- .nk-tb-item -->

                                                            {{--@if ($ajoutcate)
                                                                <div class="nk-tb-item">
                                                                    <input type="text" wire:model="storeCategorie">
                                                                </div>
                                                            @endif--}}

                                                            @foreach($categorie as $cate)
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid1">
                                                                        <label class="custom-control-label" for="uid1"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span>{{$loop->index + 1}}</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-xxl">
                                                                    <div class="text-ellipsis w-max-200px">
                                                                        <span>—</span>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span>{{$cate->name}}</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">

                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#" wire:click.prevent="editCategorie({{$cate->id}})"><em class="icon ni ni-edit-fill"></em><span>Edit Category</span></a></li>
                                                                                        <li><a href="#" wire:click.prevent="confirmDelete('{{$cate->name}}', '{{$cate->id}}')"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                                                        {{--<li><a href="{{route('auteur.edit', ['categorie_slug'=>$cate->id])}}"><em class="icon ni ni-edit-fill"></em><span>Edit Category</span></a></li>
                                                                                        <li><a href="{{route('auteur.cate')}}" wire:click="deleteCategorie({{$cate->id}})"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>--}}
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
                                                                    {{$categorie->links()}}
                                                                </ul><!-- .pagination -->
                                                            </div>

                                                        </div><!-- .nk-block-between -->
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card-inner-group -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-5">
                                            <div class="card card-bordered h-100">
                                                @if(Session::has('success_message'))
                                                <div class="alert alert-success">
                                                    <strong>Success</strong> {{Session::get('success_message')}}
                                                </div>
                                                @endif
                                                <div class="card-inner">
                                                    <form wire:submit.prevent="storeCategorie">
                                                        @csrf

                                                        <div class="row g-3 align-center">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name">Name</label>

                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="name" required placeholder="Name" wire:model.defer="name">
                                                                    </div>
                                                                </div>
                                                            </div><!-- col -->
                                                        </div><!-- .row --><br>
                                                        {{--<div class="row g-3 align-center">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Slug</label>
                                                                    
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="slug" required placeholder="Slug" wire:model="slug" >
                                                                    </div>
                                                                </div>
                                                            </div><!-- col -->
                                                        </div><!-- .row --><br>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="addDescription">Description</label>

                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-control-wrap">
                                                                    <textarea class="form-control form-control-sm no-resize" id="addDescription" placeholder="Write your description" wire:model="content"></textarea>
                                                                </div>
                                                            </div><!-- col -->
                                                        </div><!-- .row -->--}}
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <div class="form-group mt-2">
                                                                    <button type="submit" class="btn btn-lg btn-primary">Ajouter Categorie</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form><!-- form -->
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
</div>
    <!-- content @e -->

<script>
    window.addEventListener("showEditForm", function(e){
        Swal.fire({
        title: "Modification de categorie",
        input: "text",
        inputValue: e.detail.categorie.name,
        showCancelButton: true,
        inputValidator: (value) => {
            if (!value) {
            return "Champ obligatoire";
            }

            @this.updateCategorie(e.detail.categorie.id, value)
        }
    })
    })
</script>

<script>
    window.addEventListener("showMessage", event=>{
        Swal.fire({
        title: "Super!",
        text: "Opération réussie!",
        icon: "success",

        /*position: 'top-end',
        icon: 'success',
        toast:true,
        title:event.detail.message || "Opération effectuée avec succès",
        showConfirmButton;false,
        timer:500*/

        });
    })
</script>

<script>
    window.addEventListener("showMessagedelete", event=>{
        Swal.fire({
        title: event.detail.message.title,
        text: event.detail.message.text,
        icon: event.detail.message.type,
        showCancelButton: true,
        }).then((result)=>{
            if (result.isConfirmed) {
                if (event.detail.message.data) {
                    @this.deleteCategorie(event.detail.message.data.categorie_id)
                }


            }
        });
    })
</script>
