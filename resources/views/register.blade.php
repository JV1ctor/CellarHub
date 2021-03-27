<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>CellarHub - Register</title>

        <link rel="icon" type="img" href="{{ mix('favicon.png') }}">
        <link href=" {{ mix('/css/login.css') }} " rel="stylesheet">
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create account</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label class="small mb-1">Complete name</label>
                                                <input class="form-control py-4" type="name" placeholder="Enter complete name" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Email</label>
                                                <input class="form-control py-4" type="email" placeholder="Enter email address" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Password</label>
                                                <input class="form-control py-4" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="btn btn-primary" href="#">Create account</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="{{ url('login') }}">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CellarHub {{ date('Y') }}</div>
                            <div>
                                <a href="https://github.com/guilhermecostam/CellarHub/blob/main/LICENSE">License</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src=" {{ mix('/js/login.js') }} "></script>
    </body>
</html>
