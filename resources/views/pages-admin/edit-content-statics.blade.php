@extends('pages-admin.part-admin.app-admin')
@section('title-page','Edit Pages')
@section('content')
    @php($active="content static")
    <!-- BEGIN CONTENT -->
    <div class="content">
        <div class="container-fluid">
            <div class="row bg">
                <div class="col-md-12 col-sm-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Content</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="input-group mt-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 ">
                                            <i class="fas fa-text-width"></i>
                                        </div>
                                    </div>
                                    <textarea type="textarea"
                                              class="form-control border-0 "
                                              id="exampleInputContent_Header"
                                              aria-describedby="addressHelp"
                                              placeholder="content IMPROVE AND INNOVATE WITH THE TECH TRENDS"
                                              style="min-height: 140px; max-height: 140px"></textarea>
                                </div>
                                <div class="input-group mt-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 ">
                                            <i class="fas fa-text-width"></i>
                                        </div>
                                    </div>
                                    <textarea type="textarea"
                                              class="form-control border-0 "
                                              id="exampleInputContent_Header"
                                              aria-describedby="addressHelp"
                                              placeholder="content SOLUTIONS WE DELIVER"
                                              style="min-height: 140px; max-height: 140px"></textarea>
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 "
                                        >
                                            <i class="fas fa-text-width"></i>
                                        </div>
                                    </div>
                                    <input type="url" class="form-control border-0 " placeholder="link Our custome say">
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
            <div class="clearfix">
            </div>
            <div class="row bg">
                <div class="col-md-6 col-sm-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Platforms work with</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="input-group mt-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 ">
                                            <i class="fas fa-text-width"></i>
                                        </div>
                                    </div>
                                    <textarea type="textarea"
                                              class="form-control border-0 "
                                              id="exampleInputContent_Header"
                                              aria-describedby="addressHelp"
                                              placeholder="content Platforms work with"
                                              style="min-height: 140px; max-height: 140px"></textarea>
                                </div>
                                <div class="form-group border-0 mt-2 mb-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input border-0" id="customFile">
                                        <label class="custom-file-label border-0" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group border-0 mt-2 mb-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input border-0" id="customFile">
                                        <label class="custom-file-label border-0" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group border-0 mt-2 mb-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input border-0" id="customFile">
                                        <label class="custom-file-label border-0" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group border-0 mt-2 mb-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input border-0" id="customFile">
                                        <label class="custom-file-label border-0" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group border-0 mt-2 mb-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input border-0" id="customFile">
                                        <label class="custom-file-label border-0" for="customFile">Choose file</label>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                    <!-- /.card -->
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Card 1</h3>
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
                                <div class="input-group mt-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 ">
                                            <i class="fas fa-text-width"></i>
                                        </div>
                                    </div>
                                    <textarea type="textarea"
                                              class="form-control border-0 "
                                              id="exampleInputContent_Header"
                                              aria-describedby="addressHelp"
                                              placeholder="content"
                                              style="min-height: 140px; max-height: 140px"></textarea>
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 text-uppercase"
                                        >
                                            T
                                        </div>
                                    </div>
                                    <input name="title" type="text" class="form-control border-0 "
                                           placeholder="title">
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
                <div class="col-md-6 col-sm-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit INDUSTRY EXPERTISE</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="input-group mt-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 ">
                                            <i class="fas fa-text-width"></i>
                                        </div>
                                    </div>
                                    <textarea type="textarea"
                                              class="form-control border-0 "
                                              id="exampleInputContent_Header"
                                              aria-describedby="addressHelp"
                                              placeholder="content IMPROVE AND INNOVATE WITH THE TECH TRENDS"
                                              style="min-height: 140px; max-height: 140px"></textarea>
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-7 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fas fa-text-width"></i>
                                                </div>
                                            </div>
                                            <input type="url" class="form-control border-0 " placeholder="title">
                                        </div>
                                    </div>
                                    <div class="col-sm-5 my-3">
                                        <div class="form-group border-0">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input border-0" id="customFile">
                                                <label class="custom-file-label border-0" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-7 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fas fa-text-width"></i>
                                                </div>
                                            </div>
                                            <input type="url" class="form-control border-0 " placeholder="title">
                                        </div>
                                    </div>
                                    <div class="col-sm-5 my-3">
                                        <div class="form-group border-0">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input border-0" id="customFile">
                                                <label class="custom-file-label border-0" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-7 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fas fa-text-width"></i>
                                                </div>
                                            </div>
                                            <input type="url" class="form-control border-0 " placeholder="title">
                                        </div>
                                    </div>
                                    <div class="col-sm-5 my-3">
                                        <div class="form-group border-0">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input border-0" id="customFile">
                                                <label class="custom-file-label border-0" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-7 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fas fa-text-width"></i>
                                                </div>
                                            </div>
                                            <input type="url" class="form-control border-0 " placeholder="title">
                                        </div>
                                    </div>
                                    <div class="col-sm-5 my-3">
                                        <div class="form-group border-0">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input border-0" id="customFile">
                                                <label class="custom-file-label border-0" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-7 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fas fa-text-width"></i>
                                                </div>
                                            </div>
                                            <input type="url" class="form-control border-0 " placeholder="title">
                                        </div>
                                    </div>
                                    <div class="col-sm-5 my-3">
                                        <div class="form-group border-0">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input border-0" id="customFile">
                                                <label class="custom-file-label border-0" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-7 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fas fa-text-width"></i>
                                                </div>
                                            </div>
                                            <input type="url" class="form-control border-0 " placeholder="title">
                                        </div>
                                    </div>
                                    <div class="col-sm-5 my-3">
                                        <div class="form-group border-0">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input border-0" id="customFile">
                                                <label class="custom-file-label border-0" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-7 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fas fa-text-width"></i>
                                                </div>
                                            </div>
                                            <input type="url" class="form-control border-0 " placeholder="title">
                                        </div>
                                    </div>
                                    <div class="col-sm-5 my-3">
                                        <div class="form-group border-0">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input border-0" id="customFile">
                                                <label class="custom-file-label border-0" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-7 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fas fa-text-width"></i>
                                                </div>
                                            </div>
                                            <input type="url" class="form-control border-0 " placeholder="title">
                                        </div>
                                    </div>
                                    <div class="col-sm-5 my-3">
                                        <div class="form-group border-0">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input border-0" id="customFile">
                                                <label class="custom-file-label border-0" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
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
            <div class="clearfix">
            </div>
            <div class="row bg">
                <div class="col-md-6 col-sm-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Card 2</h3>
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
                                <div class="input-group mt-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 ">
                                            <i class="fas fa-text-width"></i>
                                        </div>
                                    </div>
                                    <textarea type="textarea"
                                              class="form-control border-0 "
                                              id="exampleInputContent_Header"
                                              aria-describedby="addressHelp"
                                              placeholder="content"
                                              style="min-height: 140px; max-height: 140px"></textarea>
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 text-uppercase"
                                        >
                                            T
                                        </div>
                                    </div>
                                    <input name="title" type="text" class="form-control border-0 "
                                           placeholder="title">
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
                <div class="col-md-6 col-sm-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Card 3</h3>
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
                                <div class="input-group mt-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 ">
                                            <i class="fas fa-text-width"></i>
                                        </div>
                                    </div>
                                    <textarea type="textarea"
                                              class="form-control border-0 "
                                              id="exampleInputContent_Header"
                                              aria-describedby="addressHelp"
                                              placeholder="content"
                                              style="min-height: 140px; max-height: 140px"></textarea>
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 text-uppercase"
                                        >
                                            T
                                        </div>
                                    </div>
                                    <input name="title" type="text" class="form-control border-0 "
                                           placeholder="title">
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
            <div class="clearfix">
            </div>
            <div class="row bg">
                <div class="col-md-6 col-sm-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Card 4</h3>
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
                                <div class="input-group mt-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 ">
                                            <i class="fas fa-text-width"></i>
                                        </div>
                                    </div>
                                    <textarea type="textarea"
                                              class="form-control border-0 "
                                              id="exampleInputContent_Header"
                                              aria-describedby="addressHelp"
                                              placeholder="content"
                                              style="min-height: 140px; max-height: 140px"></textarea>
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 text-uppercase"
                                        >
                                            T
                                        </div>
                                    </div>
                                    <input name="title" type="text" class="form-control border-0 "
                                           placeholder="title">
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
            <div class="clearfix">
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
@endsection
@section('import-script')
    <script src="/dist/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>

@endsection
