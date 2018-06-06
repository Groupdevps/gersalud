<template>
<form id="incapacidad" method="get" @submit.prevent="submit">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <label><h4>Nombre de la entidad</h4></label>
        </div>
        <div class="col-md-2">
            <h4># de radicado aqui</h4>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-8">
            <p class="text-center">INCAPACIDAD</p>
        </div>
        <div class="col-md-2">
            <label for="fechainc">Fecha :</label>
            <input class="form-control input-sm" type="date" id="fechainc" v-model="fechainc" required>
        </div>
        <br>
    </div>
    <!-- datos de la empresa encargada del pago de la incapacidad-->
    <div class="row">
        <div class="col-md-5">
            <label for="entidad">Entidad responsable de pago :</label>
            <input class="form-control input-sm" type="text" id="entidad" v-model="entidad" required>
        </div>
        <div class="col-md-5">
            <label for="code">Codigo :</label>
            <input class="form-control input-sm" type="number" maxlength="6" id="code" v-model="code" required>
        </div>
    </div>
    <hr>
    <!-- datos del paciente-->
    <h4>Datos de paciente</h4>
    <div class="row">
        <div class="col-md-3">
            <label for="tipoid">Tipo de documento :</label>
            <input class="form-control input-sm" type="text" id="tipoid" v-model="tipo_dc" required>

            <label for="direccion">Direccion :</label>
            <input class="form-control input-sm" type="text" id="direccion" v-model="direccion" required>

            <label for="tel">Telefono :</label>
            <input class="form-control input-sm" type="tel" id="tel" v-model="tel" required>
        </div>

        <div class="col-md-3">
            <label for="id">Numero de documento :</label>
            <input class="form-control input-sm" type="number" maxlength="10" id="id" v-model="cc" required>

            <label for="municipio">Municipio :</label>
            <input class="form-control input-sm" type="text" id="municipio" v-model="municipio" required>

            <label for="cel">Celular :</label>
            <input class="form-control input-sm" type="number" maxlength="9" id="cel" v-model="cel" required>

        </div>

        <div class="col-md-4">
            <label for="fechanac">Fecha de nacimiento :</label>
            <input class="form-control input-sm" type="date" id="fechanac" v-model="fechanac" required>

            <label for="depart">Departamento :</label>
            <input class="form-control input-sm" type="text" id="depart" v-model="depart" required>

            <label for="email">Correo electronico :</label>
            <input class="form-control input-sm" type="text" id="email" v-model="email" required>

        </div>
    </div>

    <hr>
    <!-- datos de la transaccion o del proceso de atencion al paciente-->
    <h4>Datos de transaccion</h4>
    <div class="row">
        <div class="col-md-3">
            <label for="tipotra">Tipo :</label>
            <input class="form-control input-sm" type="text" id="tipotra" v-model="tipo_tra" required>
        </div>

        <div class="col-md-3">
            <label for="regimen">Regimen :</label>
            <input class="form-control input-sm" type="text" id="regimen" v-model="regimen" required>
        </div>

        <div class="col-md-3">
            <label for="origen">Origen del servicio :</label>
            <input class="form-control input-sm" type="text" id="origen" v-model="origen" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <label for="motivo">Motivo :</label>
            <input class="form-control input-sm" type="text" id="motivo" v-model="motivo" required>
        </div>
    </div>
    <!-- detalles de la incapacidad-->
    <h4>Detalles</h4>
    <div class="row">
        <div class="col-md-5">
            <label for="diag">Diagnostico :</label>
            <input class="form-control input-sm" type="text" id="diag" v-model="diagnostico" required>

            <label for="feciinc">Fecha inicio de incapacidad :</label>
            <input class="form-control input-sm" type="date" id="fecinc" v-model="fecinc" required>
        </div>
        <div class="col-md-5">
            <label for="ubipac">Ubicacion del paciente :</label>
            <input class="form-control input-sm" type="text" id="ubipac" v-model="ubipac" required>

            <label for="fecfinc">Fecha final de incapacidad :</label>
            <input class="form-control input-sm" type="date" id="fecfinc" v-model="fecfinc" required>
        </div>


    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="diainc">Dias de incapacidad :</label>
            <input class="form-control input-sm" type="text" id="diainc" v-model="diainc" required>
        </div>
    </div>
    <hr>
    <!-- preinscriptor-->
    <h4>Informacion del preinscriptor</h4>
    <div class="row">
        <div class="col-md-3">
            <label for="nompre">Nombre :</label>
            <input class="form-control input-sm" type="text" id="nompre" v-model="nombre" required>
            <label for="dirips">Direccion :</label>
            <input class="form-control input-sm" type="text" id="dirips" v-model="dir_ips" required>
        </div>

        <div class="col-md-3">
            <label for="car">Cargo :</label>
            <input class="form-control input-sm" type="text" id="cargo" v-model="cargo" required>
            <label for="tel">Telefono :</label>
            <input class="form-control input-sm" type="tel" id="tel1" v-model="tel1" required>
        </div>

        <div class="col-md-4">
            <label for="ipspre">IPS que prescribe :</label>
            <input class="form-control input-sm" type="text" id="ips_pre" v-model="ips_pre" required>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-10">
            <label for="obs">Observacion :</label>
            <input class="form-control input-sm" type="text" id="observacion" v-model="observacion" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <label id="infimp">Presente este formato en la barra de atencion para que le sea
                efectuada la liquidacion correspondiente</label>
            <br>
            <label id="adv">Señor Usuario no sobreescribir ni enmendar este documento</label>
        </div>
    </div>

    <div class="row">
        <div class="col-md-1 col-md-offset-5" >
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                Imprimir
            </button>
        </div>
    </div>
    <!-- crear -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>


                </div>
                <!-- V-show todos los campos son obligatorios-->
                <div class="modal-body">
                    <p>Formato de impresion aqui</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    </div>
</form>
</template>
<script>
export default {
  data: function () {
    return {
        fechainc:'',
        entidad:'',
        code:'',
        tipo_dc:'',
        direccion:'',
        tel:'',
        cc:'',
        municipio:'',
        cel:'',
        fechanac:'',
        depart:'',
        email:'',
        tipo_tra:'',
        regimen:'',
        origen:'',
        motivo:'',
        diagnostico:'',
        fecin:'',
        ubipac:'',
        fecfinc:'',
        diainc:'',
        nombre:'',
        dir_ips:'',
        cargo:'',
        tel1:'',
        ips_pre:'',
        observacion:''
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
      axios.get('Admisiones/incapacidad', {
        datos:$("#incapacidad").serializeArray()
      })
        .then(function (response){
          console.log(response);
          self.fechainc='',
          self.entidad='',
          self.code='',
          self.tipo_dc='',
          self.direccion='',
          self.tel='',
          self.cc='',
          self.municipio='',
          self.cel='',
          self.fechanac='',
          self.depart='',
          self.email='',
          self.tipo_tra='',
          self. regimen='',
          self.origen='',
          self.motivo='',
          self.diagnostico='',
          self.fecin='',
          self.ubipac='',
          self.fecfinc='',
          self.diainc='',
          self.nombre='',
          self.dir_ips='',
          self.cargo='',
          self.tel1='',
          self.ips_pre='',
          self.observacion='';
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>