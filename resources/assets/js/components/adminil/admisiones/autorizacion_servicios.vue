<template>
<form id="autorizacion_servicios" method="get" @submit.prevent="submit">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                    <input class="form-control" type="number" maxlength="8" name="N.servicio" v-model="n_servicio" placeholder="Numero de Servicio" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-time"></i></span>
                    <input class="form-control" type="date" name="fecha_exp" placeholder="Fecha expedicion" v-model="fecha_exp" required>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3>Prestador Autorizado</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">EPS <i class="fa fa-hospital-o"></i></span>
                                    <input class="form-control" type="text" name="eps" placeholder="EPS" v-model="eps" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                    <input class="form-control" type="text" name="nit" placeholder="NIT" v-model="nit" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-"></i></span>
                                    <input class="form-control" type="number" maxlength="8" name="codigo" placeholder="Codigo" v-model="codigo" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input class="form-control" type="number" maxlength="9" name="tel" placeholder="Telefono" v-model="tel" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                    <input class="form-control" type="text" name="direccion" placeholder="Direccion" v-model="direccion" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                    <input class="form-control" type="text" name="municipio" placeholder="Municipio" v-model="municipio" required>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <hr>
        <br>
        <h3>Paciente</h3>
        <br>
        <br>

        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon Colorspanik">Beneficiario </span>
                        <input class="form-control input-sm" name="beneficiario" v-model="beneficiario" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon" >Fecha de nacimiento</span>
                        <input class="form-control input-sm" type="date" name="nacimiento" v-model="fecha_nac" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">Edad</span>
                        <input class="form-control input-sm" type="number" maxlength="2" name="edad" v-model="edad" required>
                    </div>
                </div>
                <div class="col-md-4 input-xs">
                    <div class="input-group">
                        <span class="input-group-addon">Num Sisben</span>
                        <input class="form-control input-sm" type="number" maxlength="6" name="n_sisben" v-model="n_sisben" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">Tipo de identificacion </span>
                        <input class="form-control input-sm" type="text" name="t_identificacion" v-model="tipo_dc" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">Numero de identificacion</span>
                        <input class="form-control input-sm" type="number" maxlength="10" name="n_identificacion" v-model="cc" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon">Carnet</span>
                        <input class="form-control input-sm" type="text" name="carnet" v-model="carnet" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon">Ficha</span>
                        <input class="form-control input-sm" type="text" name="ficha" v-model="ficha" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <span class="input-group-addon">Contrato</span>
                        <input class="form-control input-sm" type="text" name="contrato" v-model="contrato" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon">Direccion</span>
                        <input class="form-control input-sm" type="text" name="direccion1" v-model="direccion1" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon">Municipio</span>
                        <input class="form-control input-sm" type="text" name="municipio1" v-model="municipio1" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <span class="input-group-addon">Telefono</span>
                        <input class="form-control input-sm" type="tel" name="telefono" v-model="telefono" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon">Modalidad</span>
                        <input class="form-control input-sm" type="text" name="modalidad" v-model="modalidad" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon">Fecha de inicio</span>
                        <input class="form-control input-sm" type="date" name="f_inicio" v-model="f_inicio" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <span class="input-group-addon">Fecha de salida</span>
                        <input class="form-control input-sm" type="date" name="f_salida" required v-model="f_salida">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <hr>
            <div class="row">
                <h3>Servicios Autorizados</h3>
                <br>
                <div class="col-md-8">
                    <label>Diagnostico</label>

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Código</th>
                            <th>Descripción</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="col-md-1"><input type="number" maxlength="6" name="codigo1" v-model="codigo1" required></td>
                            <td class="col-md-1"><input type="text" name="descripción" v-model="descripcion" required></td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <label>Motivo de autorizacion <Strong>Orden Medica</Strong></label>
                    <br>

                </div>
            </div>
            <br>
            <div class="form-inline">
                <div class="form-group">
                    <label for="nivel">Nivel :</label>
                    <input class="form-control input-sm" type="number" maxlength="1" id="nivel" v-model="nivel" required>

                    <label for="servicio">Servicio :</label>
                    <input class="form-control input-sm" type="text" id="servicio" v-model="servicio" required>
                    <label for="especialidad">Especialidad :</label>
                    <input class="form-control input-sm" type="text" id="especialidad" v-model="especialidad" required>

                </div>
            </div>
            <br>
            <div class="form-inline">
                <div class="form-group">
                    <label for="ambito">Ambito :</label>
                    <input class="form-control input-sm" type="text" id="ambito" v-model="ambito" required>

                    <label for="ubi_pac">Ubicacion del paciente :</label>
                    <input class="form-control input-sm" type="text" id="ubi_pac" v-model="ubi_pac" required>
                    <br>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <label>Manejo integral segun guia : </label>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="col-md-1"><input type="number" maxlength="6" name="codigo2" v-model="codigo2"required></td>
                            <td class="col-md-1"><input type="text" name="descripción1" v-model="descripcion1" required></td>
                            <td class="col-md-1"><input type="number" maxlength="3" name="cantidad" v-model="cantidad" required></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="form-inline">
                <div class="form-group">
                    <h5>AUTORIZACION SUJETA A AUDITORIA MEDICA</h5>
                    <br>
                    <label >Cualquier evento debe ser autorizado previamente por la EPS.S</label>
                    <br>
                    <label for="valido">Valido :</label>
                    <input class="form-control input-sm" type="text" id="valido" v-model="valido" required>
                    <br>
                    <label for="o_solicitud">Origen de la solicitud :</label>
                    <input class="form-control input-sm" type="text" id="o_solicitud" v-model="o_solicitud" required>
                    <label for="observacion">Observaciones :</label>
                    <input class="form-control input-sm" type="text" id="observacion" v-model="observacion" required>
                    <br>
                    <label for="numero"><strong>Numero :       </strong></label>
                    <input class="form-control input-sm" type="number" maxlength="6" id="numero" v-model="numero" required>
                    <br>
                    <label for="f_medico"><strong>Fecha Medico :   </strong></label>
                    <input class="form-control input-sm" type="date" id="f_medico" v-model="f_medico" required>
                    <br>
                    <label for="ips"><strong>IPS que solicita :   </strong></label>
                    <input class="form-control input-sm" type="text" id="ips" v-model="ips" required>
                    <br>
                    <label for="persona"><strong>Persona :        </strong></label>
                    <input class="form-control input-sm" type="text" id="persona" v-model="persona" required>
                    <br>
                    <label for="telefono"><strong>Telefono :       </strong></label>
                    <input class="form-control input-sm" type="tel" id="telefono1" v-model="telefono1" required>
                </div>
            </div>

        </div>
    </div>
</form>
</template>
<script>
export default {
  data: function () {
    return{
        n_servicio:'',
        fecha_exp:'',
        eps:'',
        nit:'',
        codigo:'',
        tel:'',
        direccion:'',
        municipio:'',
        beneficiario:'',
        fecha_nac:'',
        edad:'',
        n_sisben:'',
        tipo_dc:'',
        cc:'',
        carnet:'',
        ficha:'',
        contrato:'',
        direccion1:'',
        municipio1:'',
        telefono:'',
        modalidad:'',
        f_inicio:'',
        f_salida:'',
        codigo1:'',
        descripcion:'',
        nivel:'',
        servicio:'',
        especialidad:'',
        ambito:'',
        ubi_pac:'',
        codigo2:'',
        descripcion1:'',
        cantidad:'',
        valido:'',
        o_solicitud:'',
        observacion:'',
        numero:'',
        f_medico:'',
        ips:'',
        persona:'',
        telefono1:''
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
      axios.get('Admisiones/escritorio', {
        datos:$("#autorizacion_servicios").serializeArray()
      })
        .then(function (response){
          console.log(response);
          n_servicio='',
          self.fecha_exp='',
          self.eps='',
          self.nit='',
          self.codigo='',
          self.tel='',
          self.direccion='',
          self.municipio='',
          self.beneficiario='',
          self.fecha_nac='',
          self.edad='',
          self.n_sisben='',
          self.tipo_dc='',
          self.cc='',
          self.carnet='',
          self.ficha='',
          self.contrato='',
          self.direccion1='',
          self.municipio1='',
          self.telefono='',
          self.modalidad='',
          self.f_inicio='',
          self.f_salida='',
          self.codigo1='',
          self.descripcion='',
          self.nivel='',
          self.servicio='',
          self.especialidad='',
          self.ambito='',
          self.ubi_pac='',
          self.codigo2='',
          self.descripcion1='',
          self.cantidad='',
          self.valido='',
          self.o_solicitud='',
          self.observacion='',
          self.numero='',
          self.f_medico='',
          self.ips='',
          self.persona='',
          self.telefono1='';
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>