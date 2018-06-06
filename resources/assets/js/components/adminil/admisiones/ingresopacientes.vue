<template>
<form id="ingreso_pacientes" method="post" @submit.prevent="submit">
<div class="container">
    <div class="row">
        <div class="col-md-10">

            <div class="row">
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-cc"></i></span>
                        <input class="form-control" type="number" maxlength="10" name="searhdocumento" placeholder="Documento" v-model="cc">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="output-group">
                        <button  class="btn btn-primary">Buscar</button> <!---->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>
    <hr>
    <!-- if vue para llenar formulario-->

    <div class="row">
        <div class="col-md-10">
            <div class="nav-tabs-fluid">
                <ul class="nav nav-pills">
                    <li class="active"><a href="#1" data-toggle="pill" aria-expanded="true">1</a></li>
                    <li><a href="#2" data-toggle="pill" aria-expanded="true">2</a></li>
                    <li><a href="#3" data-toggle="pill" aria-expanded="true">3</a></li>
                    <li><a href="#4" data-toggle="pill" aria-expanded="true">4</a></li>
                </ul>
                <hr>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="1">
                        <!--form-->
                            <h3>Datos personales</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input class="form-control" type="text" name="primer_nombre" placeholder="Primer nombre" v-model="name" required> <!-- --> 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input class="form-control" type="text" name="segundo_nombre" placeholder="Segundo nombre" v-model="name1" required> <!---->
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input class="form-control" type="text" name="primer_apellido" placeholder="Primer apellido" v-model="lastname" required> <!---->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input class="form-control" type="text" name="segundo_apellido" placeholder="Segundo apellido" v-model="lastname2" required> <!---->
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-cc"></i></span>
                                        <input class="form-control" type="number" maxlength="10" name="identificacion" placeholder="Documento" v-model="cc" required> <!---->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <label for="sel1"> Tipo de Documento:</label>
                                        <select name="tipo_dc" class="form-control" id="sel1" v-model="tipo_dc"> <!---->
                                            <option>C.C</option>
                                            <option>T.I</option>
                                            <option>R.C</option>
                                            <option>N.V</option>
                                            <option>N.N</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">

                                    <div class="input-group">
                                        <label for="sel"><span class="input-group-addon">Sexo:</span>
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default active">
                                                    <input type="radio" name="options" id="F"  value="F" autocomplete="off" />F
                                                </label>
                                                <label class="btn btn-default active">
                                                    <input type="radio" name="options" id="M" value="M" autocomplete="off" />M
                                                </label>
                                            </div>
                                        </label>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input class="form-control" type="tel" name="telefono" placeholder="Telefono 1" v-model="telefono" required> <!---->
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input class="form-control" type="tel" name="telefono1" placeholder="Telefono 2" v-model="telefono1" required> <!---->
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                        <input class= "form-control" type="text" name="direccion" placeholder="Direccion" v-model="direccion" required> <!---->
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input class="form-control" type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento" v-model="fecha_nac" required> <!---->
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                        <input class="form-control" type="numer" maxlength="2" name="edad" placeholder="Edad" v-model="edad" required> <!---->
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <label for="sel"><span class="form-control"> Zona:
             							<select id="sel" name="zona" v-model="zona"> <!---->
            								<option>Urbana</option>
            								<option>Rural</option>
            							</select></span></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                        <input class="form-control" type="text" name="barrio" placeholder="Barrio" v-model="barrio" required> <!---->
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input class="form-control" type="text" name="ocupacion" placeholder="Ocupacion" v-model="ocupacion" required> <!---->
                                    </div>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <h3>Datos Familiares</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input class="form-control" type="text" name="nombrep" placeholder="Nombre padre" v-model="name2" required> <!---->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input class="form-control" type="text" name="apellidop" placeholder="Apellidos" v-model="lastname2" required> <!---->
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-cc"></i></span>
                                        <input class="form-control" type="number" maxlength="10" name="documentop" placeholder="documentop" v-model="cc1" required> <!---->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <label for="sel2">Tipo de documento:
                                            <select name="tipo_dc1" class="form-control" id="sel2" v-model="tipo_dc1"> <!---->
                                                <option>C.C</option>
                                                <option>T.I</option>
                                                <option>R.C</option>
                                                <option>N.V</option>
                                                <option>N.N</option>
                                            </select></label> <!--@ click="prueba" -->
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input class="form-control" type="text" name="nombrem" placeholder="Nombre madre" v-model="name3" required> <!---->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input class="form-control" type="text" name="apellidom" placeholder="Apellidos" v-model="lastname3" required> <!---->
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-cc"></i></span>
                                        <input class="form-control" type="number" maxlength="10" name="documentom" placeholder="documento" v-model="cc2" required> <!---->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <label for="sel3">Tipo de documento:
                                            <select name="tipo_dcm" class="form-control" id="sel3" v-model="tipo_dc2"> <!---->
                                                <option>C.C</option>
                                                <option>T.I</option>
                                                <option>R.C</option>
                                                <option>N.V</option>
                                                <option>N.N</option>
                                            </select></label>
                                    </div>
                                </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary">Gardar</button>
                                    </div>
                                </div>
                        <!--/form-->
                    </div>
                    <hr>
                    <div class="tab-pane fade" id="2">
                        <form>
                            <h3>Informacion aseguradora</h3>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <label for="sel4">EPS:
                                            <select class="form-control" id="sel4" v-model="eps">
                                                <option>EPS</option>
                                            </select></label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <label for="sel5">Contratos:
                                        <select class="form-control" id="sel5" v-model="contrato">
                                            <option>contratos</option>
                                        </select></label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                    <br>
                    <div class="tab-pane fade" id="3">
                        <form>
                            <h3>Informacion de servicio</h3>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <label for="sel6">Servicio:
                                            <select class="form-control" id="sel6" v-model="servicio">
                                                <option>Consulta externa</option>
                                                <option>Promocion y prevencion</option>
                                                <option>Servicio de urgencia</option>
                                                <option>Hospitalizacion</option>
                                                <option>Servicios especializados</option>
                                            </select></label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <label for="sel7">Nivel socio-economico:
                                            <select class="form-control" id="sel7" v-model="nivel_socioeconomico" required>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select></label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <label for="sel8">Cuota moderadora:
                                            <select class="form-control" id="sel8" v-model="cuota_moderadora">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select></label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                    <br>
                    <div class="tab-pane fade" id="4">
                        <form>
                            <h3>Programacion de citas</h3>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <modalpaciente
                                                message="hola  mundo"
                                                btnClass="success"
                                                btnText="prueba1"


                                        ></modalpaciente>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--nav-tabs -->
            <!--<div class="row">
                    <div class="output-group">
                        <button class="btn btn-primary"> Editar</button>
                    </div>
                </div>-->
        </div>
    </div><!--row-->
</div>
</form>
</template>

<script>
    //this.$parent.metodo()
export default {
  data: function () {
    return{
        name:'',
        name1:'',
        lastname:'',
        lastname1:'',
        cc:'',
        tipo_dc:'',
        sexo:'',
        telefono:'',
        telefono1:'',
        email:'',
        direccion:'',
        fecha_nac:'',
        edad:'',
        zona:'',
        barrio:'',
        ocupacion:'',
        name2:'',
        lastname2:'',
        cc1:'',
        tipo_dc1:'',
        name3:'',
        lastname3:'',
        cc2:'',
        tipo_dc2:'',
        eps:'',
        contrato:'',
        servicio:'',
        nivel_socioeconomico:'',
        cuota_moderadora:''
    }
  },
  props: {

  },
  computed: {

  },
  watch: {

  },
  methods: {
    submit () {
      axios.post('/admicionista/ing_pacientes', {
        datos:$("#ingreso_pacientes").serializeArray()
      })
        .then(function (response){
          console.log(response);
            self.name='',
            self.name1='',
            self.lastname='',
            self.lastname1='',
            self.cc='',
            self.tipo_dc='',
            self.sexo='',
            self.telefono='',
            self.telefono1='',
            self.email='',
            self.direccion='',
            self.fecha_nac='',
            self.edad='',
            self.zona='',
            self.barrio='',
            self.ocupacion='',
            self.name2='',
            self.lastname2='',
            self.cc1='',
            self.tipo_dc1='',
            self.name3='',
            self.lastname3='',
            self.cc2='',
            self.tipo_dc2=''
            self.eps='',
            self.contrato='',
            self.servicio='',
            self.nivel_socioeconomico='',
            self.cuota_moderadora='';
        })
        .catch(function (error) {
          console.log(error);
        })
    },
      showModal () {
        console.log("hola  mostro  modal");
          this.$refs.myModalRef.show()
      },
      hideModal () {
          this.$refs.myModalRef.hide()
      },
      buscarPaciente(){

      }


  }
}
</script>