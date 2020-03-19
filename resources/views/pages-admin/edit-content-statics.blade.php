@extends('pages-admin.part-admin.app-admin')
@section('title-page','Edit Pages')
@section('content')
    @php($active="content static")
    <!-- BEGIN CONTENT -->
    <div class="content">
        <div class="container-fluid">
            <div class="row bg">
                <div class="col-md-6 col-sm-6 bg-secondary">
                    <form>
                        <div class="card-header display-4">
                            Footer Edite
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text border-0 bg-secondary" >
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control border-0 bg-secondary" id="exampleInputaddress"
                                   aria-describedby="addressHelp" placeholder="address">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text border-0 bg-secondary" style="background-color:#FFFFFF">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control border-0 bg-secondary" id="exampleInputphone" placeholder="phone">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text border-0 bg-secondary" style="background-color:#FFFFFF">
                                    <i class="fas fa-at"></i>
                                </div>
                            </div>
                            <input type="email" class="form-control border-0 bg-secondary" id="exampleInputemail" placeholder="email">
                        </div>
                        <div class="form-row align-items-center">
                            <div class="col-sm-6 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 bg-secondary" style="background-color:#FFFFFF">
                                            <i class="fab fa-facebook-f"></i>
                                        </div>
                                    </div>
                                    <input type="url" class="form-control border-0 bg-secondary" placeholder="facebook">
                                </div>
                            </div>
                            <div class="col-sm-6 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 bg-secondary" style="background-color:#FFFFFF">
                                            <i class="fab fa-twitter"></i>
                                        </div>
                                    </div>
                                    <input type="url" class="form-control border-0 bg-secondary" placeholder="twtter">
                                </div>
                            </div>
                        </div>
                        <div class="form-row align-items-center">
                            <div class="col-sm-6 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-0 bg-secondary" style="background-color:#FFFFFF">
                                            <i class="fab fa-linkedin-in"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control border-0 bg-secondary" id="inlineFormInputGroupUsername"
                                           placeholder="Username">

                                </div>
                            </div>
                            <div class="col-sm-6 my-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix">
            </div>

        </div>
    </div>
    <!-- END CONTENT -->
@endsection
