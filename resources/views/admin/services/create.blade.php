@extends('admin.layouts.app')


@section('containt')
<section>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Services</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Services/Create</a></li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class=" container-fluid h-100">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control " />
                            </div>
                            <div class="form-group">
                                <label for="name">Description</label>
                                <textarea name="description" id="description" class="summernote"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                <lavel for="Image">Image</lavel>
                                <div id="image" class="dropzone dz-clickable">
                                <div class="dz-message needclick">
                            <br>Drop File here or click <br> <br>
                                </div>
                                </div>
                                </div>
                                <div class="col-md-6" >
                                    <lavel for="">Short Description</lavel>
                                    <textarea name="short_description" id="short_description" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row (main row) -->

        </div>
    </div>
</section>
@endsection