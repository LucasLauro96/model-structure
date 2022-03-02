<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Admin - Login</title>

    <!-- CSS -->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet" />

    <!-- JS -->
    <script src="{{ asset('admin/assets/fontawesome/js/fontawesome.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/assets/js/sweertalert2.min.js') }}" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">{{ env('APP_NAME') }} - Admin</h3>
                                </div>
                                <div class="card-body">
                                    <form id="login">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
                                            <label for="inputPassword">Senha</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox"
                                                value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Lembrar senha</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Esqueci minha senha!</a>
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('admin/assets/js/scripts.js') }}" crossorigin="anonymous"></script>

    <script>
        $( document ).ready(function() {
           
            $("#login").submit( (e) => {
                e.preventDefault();

                jQuery.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                });

                var form = new FormData($('#login')[0]);

                jQuery.ajax({
                    type: "POST",
                    url: "{{ URL::to('/') }}/admin/login",
                    data: form,
                    contentType: false,
                    processData: false,
                    statusCode: {
                        200: () => {
                            window.location.href = "{{ URL::to('/') }}/admin/dashboard";
                        },
                        500: () => {
                            Swal.fire(
                                'O servidor reportou um erro, tente novamente',
                                '',
                                'error'
                            )
                        }
                    }
                });
            });

        });
    </script>
</body>

</html>
