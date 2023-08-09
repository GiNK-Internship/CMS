@extends('sidebar')

@section('content')
<style>
    body {
        background: #eee;
    }

    .form-control {
        border-radius: 0;
        box-shadow: none;
        border-color: #d2d6de
    }

    .select2-hidden-accessible {
        border: 0 !important;
        clip: rect(0 0 0 0) !important;
        height: 1px !important;
        margin: -1px !important;
        overflow: hidden !important;
        padding: 0 !important;
        position: absolute !important;
        width: 1px !important
    }

    .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
    }

    .select2-container--default .select2-selection--single,
    .select2-selection .select2-selection--single {
        border: 1px solid #d2d6de;
        border-radius: 0;
        padding: 6px 12px;
        height: 34px
    }

    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border: 1px solid #aaa;
        border-radius: 4px
    }

    .select2-container .select2-selection--single {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: 28px;
        user-select: none;
        -webkit-user-select: none
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        padding-right: 10px
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        padding-left: 0;
        padding-right: 0;
        height: auto;
        margin-top: -3px
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #444;
        line-height: 28px
    }

    .select2-container--default .select2-selection--single,
    .select2-selection .select2-selection--single {
        border: 1px solid #d2d6de;
        border-radius: 0 !important;
        padding: 6px 12px;
        height: 40px !important
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 26px;
        position: absolute;
        top: 6px !important;
        right: 1px;
        width: 20px
    }
</style>
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
                                <div class="form-group" data-select2-id="97">
                                    <label>Status</label>
                                    <select class="form-control select2 select2-accessible" style="width: 100%;"
                                        data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option selected="selected" data-select2-id="3">Ready</option>
                                        <option data-select2-id="47">Kosong</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Minimal</label>
                                    <select class="form-control select2" style="width: 100%" multiple="multiple"
                                        name="minimals[]">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
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

<!-- Select2 -->
<script src="{{asset('template/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
    $(document).ready(function() {
    $('.select2').select2({
    closeOnSelect: false
});
});
</script>
@endsection