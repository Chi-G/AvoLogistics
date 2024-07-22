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

                            <a href="{{ route('admin.services.index') }}" class="btn btn-primary mb-3">All Service</a>
                            <div class="table-responsive mb-4 mt-4">
                                <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mb-4">
                                        <label for="serviceTitle1">Service Title 1</label>
                                        <input type="text" name="service_title1" class="form-control" id="serviceTitle1" value="{{ old('service_title1', $service->service_title1) }}" required>
                                        @error('service_title1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="serviceTitle2">Service Title 2</label>
                                        <input type="text" name="service_title2" class="form-control" id="serviceTitle2" value="{{ old('service_title2', $service->service_title2) }}" required>
                                        @error('service_title2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="serviceTitle3">Service Title 3</label>
                                        <input type="text" name="service_title3" class="form-control" id="serviceTitle3" value="{{ old('service_title3', $service->service_title3) }}" required>
                                        @error('service_title3')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="serviceTitle4">Service Title 4</label>
                                        <input type="text" name="service_title4" class="form-control" id="serviceTitle4" value="{{ old('service_title4', $service->service_title4) }}" required>
                                        @error('service_title4')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="serviceDesc1">Service Description 1</label>
                                        <textarea name="service_desc1" class="form-control" id="serviceDesc1" rows="3" required>{{ old('service_desc1', $service->service_desc1) }}</textarea>
                                        @error('service_desc1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="serviceDesc2">Service Description 2</label>
                                        <textarea name="service_desc2" class="form-control" id="serviceDesc2" rows="3" required>{{ old('service_desc2', $service->service_desc2) }}</textarea>
                                        @error('service_desc2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="serviceDesc3">Service Description 3</label>
                                        <textarea name="service_desc3" class="form-control" id="serviceDesc3" rows="3" required>{{ old('service_desc3', $service->service_desc3) }}</textarea>
                                        @error('service_desc3')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="serviceDesc4">Service Description 4</label>
                                        <textarea name="service_desc4" class="form-control" id="serviceDesc4" rows="3" required>{{ old('service_desc4', $service->service_desc4) }}</textarea>
                                        @error('service_desc4')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="offerBgTitle">Offer Background Title</label>
                                        <input type="text" name="offer_bg_title" class="form-control" id="offerBgTitle" value="{{ old('offer_bg_title', $service->offer_bg_title) }}" required>
                                        @error('offer_bg_title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="offerTitle1">Offer Title 1</label>
                                        <input type="text" name="offer_title1" class="form-control" id="offerTitle1" value="{{ old('offer_title1', $service->offer_title1) }}" required>
                                        @error('offer_title1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="offerTitle2">Offer Title 2</label>
                                        <input type="text" name="offer_title2" class="form-control" id="offerTitle2" value="{{ old('offer_title2', $service->offer_title2) }}" required>
                                        @error('offer_title2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="offerTitle3">Offer Title 3</label>
                                        <input type="text" name="offer_title3" class="form-control" id="offerTitle3" value="{{ old('offer_title3', $service->offer_title3) }}" required>
                                        @error('offer_title3')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="offerDesc1">Offer Description 1</label>
                                        <textarea name="offer_desc1" class="form-control" id="offerDesc1" rows="3" required>{{ old('offer_desc1', $service->offer_desc1) }}</textarea>
                                        @error('offer_desc1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="offerDesc2">Offer Description 2</label>
                                        <textarea name="offer_desc2" class="form-control" id="offerDesc2" rows="3" required>{{ old('offer_desc2', $service->offer_desc2) }}</textarea>
                                        @error('offer_desc2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="offerDesc3">Offer Description 3</label>
                                        <textarea name="offer_desc3" class="form-control" id="offerDesc3" rows="3" required>{{ old('offer_desc3', $service->offer_desc3) }}</textarea>
                                        @error('offer_desc3')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="serviceDetailsTitle">Service Details Title</label>
                                        <input type="text" name="service_details_title" class="form-control" id="serviceDetailsTitle" value="{{ old('service_details_title', $service->service_details_title) }}" required>
                                        @error('service_details_title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="serviceDetailsBgDesc">Service Details Background Description</label>
                                        <textarea name="service_details_bg_desc" class="form-control" id="serviceDetailsBgDesc" rows="3" required>{{ old('service_details_bg_desc', $service->service_details_bg_desc) }}</textarea>
                                        @error('service_details_bg_desc')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="serviceImage">Image</label>
                                        <input type="file" name="image" class="form-control-file" id="serviceImage">
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="mt-4 mb-4 btn btn-primary">Update Service</button>
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
