@extends('pages-admin.part-admin.app-admin')
@section('title-page','Edit Pages')
@section('content')
    @php($active="customer_say")
    <!-- BEGIN CONTENT -->
    <div class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row bg">
                <div class="col-md-12 col-sm-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Customer edit</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="form-group border-0 mt-2 mb-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input border-0" id="customFile">
                                        <label class="custom-file-label border-0" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="input-group mt-2 mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 ">
                                            <i class="fas fa-text-width"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control border-0" id="exampleInputaddress"
                                           aria-describedby="addressHelp" placeholder="name customer">
                                </div>
                                <div class="input-group mt-2 mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 ">
                                            <i class="fas fa-text-width"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control border-0" id="exampleInputaddress"
                                           aria-describedby="addressHelp" placeholder="job customer">
                                </div>
                                <div class="input-group mt-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 ">
                                            <i class="fas fa-text-width"></i>
                                        </div>
                                    </div>
                                    <textarea type="textarea"
                                              class="form-control border-0 "
                                              id="exampleInputContent_About"
                                              aria-describedby="addressHelp"
                                              placeholder="content About"
                                              style="min-height: 140px; max-height: 140px"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="clearfix mt-lg-4">
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit content</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                           placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-wrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>job</th>
                                    <th>content</th>
                                    <th>image</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>SOFTWARE DEVELOPMENT</td>
                                    <td>Software consulting</td>
                                    <td>www.google.com</td>
                                    <td>www.google.com</td>
                                    <td class="text-right py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
@endsection
@section('import-script')
    <script src="/dist/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>

@endsection
