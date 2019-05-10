@include('layout/header')
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url('https://i.pinimg.com/originals/30/ce/71/30ce71bb00dae4aca1c5f87bd989c657.jpg');">        
            <div class="login-box card">
            <div class="card-body">
                <form action="login" method="post" class="form-horizontal form-material" id="loginform">
                    <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
                    <h3 class="box-title m-b-20">Iniciar sesión</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" required="" placeholder="Email" name="email"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Password" name="password"> 
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Ingresar</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>No tienes una cuenta? <a href="form-registrar-usuario" class="text-info m-l-5"><b>Registrate aquí</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
        
    </section>
@include('layout/footer')