@extends('sidebar')

@section('content')
<div class="content-wrapper" style="min-height: 541px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Item</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('items') }}">Item</a></li>
                        <li class="breadcrumb-item active">Edit Item</li>
                    </ol>
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header"></div>
                        <!-- form start -->
                        <form action="{{ route('create_items_process') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name <small class="text-danger">*</small></label>
                                    <input type="text" class="form-control " id="name" name="name"
                                        placeholder="Input Item Name" value="" maxlength="255">
                                    <small>Maximal 255 characters</small>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Description <small class="text-danger">*</small></label>
                                    <input type="text" class="form-control " id="deskripsi" name="deskripsi"
                                        placeholder="Input Item Description" value="" maxlength="255">
                                    <small>Maximal 255 characters</small>
                                </div>

                                <div class="form-group">
                                    <label for="photo1">Photo 1</label>
                                    <div class="file-input file-input-new">
                                        <div class="kv-upload-progress kv-hidden" style="display: none;">
                                            <div class="progress">
                                                <div class="progress-bar bg-success progress-bar-success progress-bar-striped active progress-bar-animated"
                                                    role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 0%;">
                                                    0%
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="file-caption">
                                            <div class="input-group ">
                                                <input readonly=""
                                                    class="file-caption-name form-control kv-fileinput-caption"
                                                    placeholder="Select file ..." title="">

                                                <span class="file-caption-icon"></span>
                                                <div class="input-group-btn input-group-append">
                                                    <div class="btn btn-primary btn-file" tabindex="500"><i
                                                            class="bi-folder2-open"></i> <span class="hidden-xs">Browse
                                                            …</span><input id="photo1" name="photo1" type="file"
                                                            class="file custom-file-label" data-show-preview="false"
                                                            accept=".jpg, .jpeg, .png"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <small>Masukkan gambar berekstensi jpg/jpeg/png dan berukuran &lt; 2MB</small>
                                </div>

                                <div class="form-group">
                                    <label for="price">Price <small class="text-danger">*</small></label>
                                    <input type="text" class="form-control " id="price" name="price"
                                        placeholder="Input Item Price" value="" maxlength="255">
                                    <small>Maximal 255 characters</small>
                                </div>
                                <div class="form-group">
                                    <span class="select2 select2-container select2-container--default" dir="ltr"
                                        data-select2-id="16" style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--multiple" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="-1"
                                                aria-disabled="false">
                                                <ul class="select2-selection__rendered">
                                                    <li class="select2-search select2-search--inline"><input
                                                            class="select2-search__field" type="search" tabindex="0"
                                                            autocomplete="off" autocorrect="off" autocapitalize="none"
                                                            spellcheck="false" role="searchbox" aria-autocomplete="list"
                                                            placeholder="Select a State" style="width: 716.667px;"></li>
                                                </ul>
                                            </span></span><span class="dropdown-wrapper"
                                            aria-hidden="true"></span></span>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"
                                    onclick="return confirm('Yakin ingin menambah tabel ini?')">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </section>
</div>


<!-- /.content -->
</div>
@endsection