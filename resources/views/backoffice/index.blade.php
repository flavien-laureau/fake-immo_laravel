@extends('layouts.backoffice')

@section('content')
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

    @include('incs.backoffice.header')
    @include('incs.backoffice.sidebar')


    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- basic table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Liste des propriétés</h4>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Photo</th>
                                            <th>Adresse</th>
                                            <th>Description</th>
                                            <th>Prix</th>
                                            <th>Autheur</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($estates as $estate)
                                        <tr>
                                            <td>{{ $estate->title }}</td>
                                            <td><img class="estate_img col-12 p-0"
                                                    src="{{ "/storage/img_maisons/" . $estate->image }}" alt=""></td>
                                            <td>adresse</td>
                                            <td>{{ $estate->description }}</td>
                                            <td>{{ $estate->price }} €</td>
                                            <td>{{ $estate->admin->name }}</td>
                                            <td class="d-flex justify-content-around">
                                                <a href="#" class="text-body"><i class="far fa-eye"></i></a>
                                                <a href="#" class="text-body"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="text-body"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Photo</th>
                                            <th>Adresse</th>
                                            <th>Description</th>
                                            <th>Prix</th>
                                            <th>Autheur</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center text-muted">
            All Rights Reserved by Adminmart. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
@endsection