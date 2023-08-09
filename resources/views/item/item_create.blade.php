@extends('sidebar')

@section('content')
    <style>
        .select2-container .select2-selection .select2-selection__choice {
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
        }

        .select2-container .select2-selection .select2-selection__choice:hover {
            background-color: #007bff;
            color: #fff;
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
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Ready</option>
                                            <option>Kosong</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Multiple</label>
                                        <select class="select2" multiple="multiple" data-placeholder="Select a State"
                                            style="width: 100%;">
                                            <option>Alabama</option>
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
    <script src="{{ asset('template/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
@endsection
