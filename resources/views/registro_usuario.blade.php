@include('layout/header')
    <section id="wrapper">
        <div class="login-register" style="background-image:url('https://i.pinimg.com/originals/30/ce/71/30ce71bb00dae4aca1c5f87bd989c657.jpg')">        
            <div class="login-box card">
            <div class="card-body">
                <form action="registrar-usuario" method="post" class="form-horizontal form-material">
                    <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
                    <h3 class="box-title m-b-20">Registrarme</h3>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Nombre" name="name">
                             <input class="form-control" type="hidden"  name="status" value="0">
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12">
                        <label for="">Género</label>
                        <select class="form-control" name="gender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="number" required="" placeholder="Edad" min="1" name="age">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Registrarme</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Ya tienes una cuenta? <a href="iniciar-sesion" class="text-info m-l-5"><b>Inicia Sesión aquí</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
        
    </section>
@include('layout/footer')