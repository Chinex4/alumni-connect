<x-home title="About AlumniConnect">
        <!--==========================-->
        <!--=         Banner         =-->
        <!--==========================-->
        <section id="page-title-area">
            <div class="container">
                <div class="row">
                    <div class="m-auto text-center col-lg-8">
                        <div class="page-title-content">
                            <h1 class="h2">Membership Form</h1>
                            <p>
                                Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need
                            </p>
                            <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===========================-->
        <!--=         Register        =-->
        <!--===========================-->
        <section id="page-content-wrap">
            <div class="register-page-wrapper section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="register-page-inner">
                                <div class="m-auto col-lg-10">
                                    <div class="register-form-content">
                                        <div class="row justify-content-between">
                                            <!-- Signin Area Content Start -->
                                            <div class="text-center col-lg-4 col-md-6">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="signin-area-wrap">
                                                            <h4>Already a Member?</h4>
                                                            <div class="sign-form">
                                                                <form action="https://codeboxr.net/themedemo/AlumniConnect/html/{{ route('index') }}">
                                                                    <input type="text" placeholder="Enter your ID">
                                                                    <input type="password" placeholder="Password">
                                                                    <button type="submit" class="btn btn-reg">Login</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Signin Area Content End -->

                                            <!-- Regsiter Form Area Start -->
                                            <div class="ml-auto col-lg-7 col-md-6">
                                                <div class="register-form-wrap">
                                                    <h3>registration Form</h3>
                                                    <div class="register-form">
                                                        <form action="https://codeboxr.net/themedemo/AlumniConnect/html/{{ route('index') }}">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_email">Email</label>
                                                                        <input type="email" class="form-control" id="register_email" name="register_email" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_password">Password</label>
                                                                        <input type="password" class="form-control" id="register_password" name="register_password" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_name">Name</label>
                                                                        <input type="text" class="form-control" id="register_name" name="register_name" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_stuid">Student Id</label>
                                                                        <input type="text" class="form-control" id="register_stuid" name="register_stuid" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_year">Passing Year</label>
                                                                        <input type="text" class="form-control" id="register_year" name="register_year" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_deptno">Depertment No</label>
                                                                        <input type="text" class="form-control" id="register_deptno" name="register_deptno" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group file-input">
                                                                <input type="file" name="register_file" id="customfile" class="d-none" />
                                                                <label class="custom-file" for="customfile"><i class="fa fa-upload"></i>Upload Your Photo</label>
                                                            </div>

                                                            <div class="gender form-group">
                                                                <label class="g-name d-block">Gender</label>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="register_gender_male" name="register_gender" value="mail" class="custom-control-input" />
                                                                    <label class="custom-control-label" for="register_gender_male">Male</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="register_gender_female" name="register_gender" value="female" class="custom-control-input">
                                                                    <label class="custom-control-label" for="register_gender_female">Female</label>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox float-lg-right">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                    <label class="custom-control-label" for="customCheck1"> I
                                                                        have read and agree to the <a href="#">Alumni</a> Terms
                                                                        of Service</label>
                                                                </div>
                                                                <input type="submit" class="btn btn-reg" value="Registration">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Regsiter Form Area End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=========================-->
        <!--=        Footer         =-->
        <!--=========================-->
    </x-home>
