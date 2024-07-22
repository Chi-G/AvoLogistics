<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Avo Logistics - Admin Dashboard</title>

    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/plugins/table/datatable/dt-global_style.css')}}">

    <!-- confirm sweet alert-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('admin.include.navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            
            @include('admin.include.sidebar')

        </div>
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">

                            @if(session('success'))
                                <script>
                                    swal({
                                        title: "Success!",
                                        text: "{{ session('success') }}",
                                        icon: "success",
                                        button: "OK",
                                    });
                                </script>
                            @endif

                            <a href="{{ route('admin.sliders.index') }}" class="btn btn-primary mb-3">All Slider</a>
                            <div class="table-responsive mb-4 mt-4">
                                <form action="{{ route('admin.sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mb-4">
                                        <label for="sliderTitle">Slider Title</label>
                                        <input type="text" name="title" class="form-control" id="sliderTitle" value="{{ old('title', $slider->title) }}">
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="sliderDescription">Description</label>
                                        <textarea name="description" class="form-control" id="sliderDescription" rows="3">{{ old('description', $slider->description) }}</textarea>
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4 mt-3">
                                        <label for="sliderImage">Slider Image</label>
                                        <input type="file" name="image" class="form-control-file" id="sliderImage">
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        @if($slider->image)
                                            <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}" class="mt-2" width="150">
                                        @endif
                                    </div>
                                    <button type="submit" class="mt-4 mb-4 btn btn-primary">Update Slider</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

            @include('admin.include.footer')
        </div>
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('backend/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('backend/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/app.js')}}"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('backend/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('backend/plugins/table/datatable/datatables.js')}}"></script>

    <!-- Confirmation sweert alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $('#sliders-table').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        });
    </script>


    <script>
        function deleteSlider(id) {
            swal({
                title: "Are you sure you want to delete this slider?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>

    <script>
        @if(session('success'))
        toastr.options = {
                "progressBar" : true,
                "closeButton" : true,
            }
            toastr.success("{{ session('success') }}", 'Success!', {timeout:12000});
        @endif

        @if(session('error'))
        toastr.options = {
                "progressBar" : true,
                "closeButton" : true,
            }
            toastr.error("{{ session('error') }}", 'error!', {timeout:12000});
        @endif

        @if(session('warning'))
        toastr.options = {
                "progressBar" : true,
                "closeButton" : true,
            }
            toastr.warning("{{ session('warning') }}", 'warning!', {timeout:12000});
        @endif

        @if(session('info'))
        toastr.options = {
                "progressBar" : true,
                "closeButton" : true,
            }
            toastr.info("{{ session('info') }}", 'info!', {timeout:12000});
        @endif

    </script>

</body>
</html>
