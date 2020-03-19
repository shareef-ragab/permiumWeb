@extends('pages-admin.part-admin.app-admin')
@section('title-page','Edit Pages')
@section('content')
    @php($active="footer")
    <!-- BEGIN CONTENT -->
    <div class="content">
        <div class="container-fluid">
            <div class="row bg">
                <div class="col-md-6 col-sm-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Footer Edite</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="input-group mt-2 mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 ">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control border-0" id="exampleInputaddress"
                                           aria-describedby="addressHelp" placeholder="address">
                                </div>
                                <div class="input-group mt-2 mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 ">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control border-0 " id="exampleInputphone"
                                           placeholder="phone">
                                </div>
                                <div class="input-group mt-2 mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 ">
                                            <i class="fas fa-at"></i>
                                        </div>
                                    </div>
                                    <input type="email" class="form-control border-0 " id="exampleInputemail"
                                           placeholder="email">
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-6 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fab fa-facebook-f"></i>
                                                </div>
                                            </div>
                                            <input type="url" class="form-control border-0 " placeholder="facebook">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fab fa-twitter"></i>
                                                </div>
                                            </div>
                                            <input type="url" class="form-control border-0 " placeholder="twtter">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-6 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fab fa-linkedin-in"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control border-0 "
                                                   id="inlineFormInputGroupUsername"
                                                   placeholder="linkedIn">

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
                <div class="col-md-6 col-sm-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{trans('APP.need_consultation')}}</h3>
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
                                    <label for="exampleInputaddress"></label>
                                    <textarea type="textarea"
                                              class="form-control border-0 "
                                              id="exampleInputaddress"
                                              aria-describedby="addressHelp"
                                              placeholder="content"
                                              style="min-height: 140px; max-height: 140px"></textarea>
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-6 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fas fa-heading"></i>
                                                </div>
                                            </div>
                                            <input type="url" class="form-control border-0 "
                                                   placeholder="Header Press left">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fas fa-link"></i>
                                                </div>
                                            </div>
                                            <input type="url" class="form-control border-0 "
                                                   placeholder="link Press left">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-6 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fas fa-heading"></i>
                                                </div>
                                            </div>
                                            <input type="url" class="form-control border-0 "
                                                   placeholder="Header Press right">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fas fa-link"></i>
                                                </div>
                                            </div>
                                            <input type="url" class="form-control border-0 "
                                                   placeholder="link Press right">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="clearfix mt-lg-4">
            </div>
            <div class="row bg">
                <div class="col-md-4 col-sm-4">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Card 1</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <input type="hidden" value="1">
                                <div class="input-group mt-2 mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 text-uppercase"
                                        >
                                            T
                                        </div>
                                    </div>
                                    <input name="title_1" type="text" class="form-control border-0 "
                                           placeholder="title">
                                </div>
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 text-uppercase"
                                        >
                                            S
                                        </div>
                                    </div>
                                    <input name="subtitle_1" type="text" class="form-control border-0 "
                                           placeholder="sub-title">
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-12 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fas fa-text-width"></i>
                                                </div>
                                            </div>
                                            <textarea name="content_1" type="textarea" class="form-control border-0"
                                                      placeholder="content"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group ">
                                    <div class="custom-file border-0 ">
                                        <input type="file" class="custom-file-input border-0  "
                                               id="exampleInputFile2">
                                        <label class="custom-file-label border-0  " for="exampleInputFile2">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-4 col-sm-4">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Card 2</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <input type="hidden" value="2">
                                <div class="input-group mt-2 mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 text-uppercase"
                                        >
                                            T
                                        </div>
                                    </div>
                                    <input name="title_2" type="text" class="form-control border-0 "
                                           placeholder="title">
                                </div>
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 text-uppercase"
                                        >
                                            S
                                        </div>
                                    </div>
                                    <input name="subtitle_2" type="text" class="form-control border-0 "
                                           placeholder="sub-title">
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-12 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fas fa-text-width"></i>
                                                </div>
                                            </div>
                                            <textarea name="content_2" type="textarea" class="form-control border-0"
                                                      placeholder="content"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group ">
                                    <div class="custom-file border-0 ">
                                        <input type="file" class="custom-file-input border-0  "
                                               id="exampleInputFile2">
                                        <label class="custom-file-label border-0  " for="exampleInputFile2">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-4 col-sm-4">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Card 3</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <input type="hidden" value="3">
                                <div class="input-group mt-2 mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 text-uppercase"
                                        >
                                            T
                                        </div>
                                    </div>
                                    <input name="title_3" type="text" class="form-control border-0 "
                                           placeholder="title">
                                </div>
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 text-uppercase"
                                        >
                                            S
                                        </div>
                                    </div>
                                    <input name="subtitle_3" type="text" class="form-control border-0 "
                                           placeholder="sub-title">
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-sm-12 my-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text border-0 "
                                                >
                                                    <i class="fas fa-text-width"></i>
                                                </div>
                                            </div>
                                            <textarea name="content_3" type="textarea" class="form-control border-0"
                                                      placeholder="content"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group ">
                                    <div class="custom-file border-0 ">
                                        <input type="file" class="custom-file-input border-0  "
                                               id="exampleInputFile2">
                                        <label class="custom-file-label border-0  " for="exampleInputFile2">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="clearfix mt-lg-4">
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
@endsection
@section('import-script')
    <script src="/dist/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
@endsection
