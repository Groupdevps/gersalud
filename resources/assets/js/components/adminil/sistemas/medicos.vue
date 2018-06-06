<template>
<form id="medicos" method="post" @submit.prevent="submit">
<div class="container">
  <div class="row">
    <div class="col-md-8">
 <div class="panel panel-default">
  <div class="panel-body">
  <!-- <form method="GET"  action="-">-->
    
      <div class="form-horizontal">
        <div class="row">
          <div class="col-md-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
              <input class="form-control" v-bind:value="this.centroinfo.nit||0" type="number" name="nit_centro" placeholder="NIT Centro"  required disabled>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input class="form-control"  type="text" name="Nombre" placeholder="Nombre" v-model="nombre" required>
            </div>
          </div>
          <div class="col-md-5">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input class="form-control"  type="text" name="apellido" placeholder="Apellido" v-model="apellido" required>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
              <input class="form-control" type="email" name="email" placeholder="Email" v-model="User_id" required>
            </div>
          </div>  
          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-cc"></i></span>
              <input class="form-control" type="number" name="Documento" placeholder="Documento" v-model="cc" required>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-phone"></i></span>
              <input class="form-control" type="number" name="Telefono" placeholder="Telefono" v-model="telefono" required>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
              <input class="form-control"  type="text" name="t.paciente" placeholder="Tarjeta de paciente" v-model="tarjeta_p" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group">
              <label for="sel1">Tipo especialista:</label>
              <select class="form-control" id="sel1" v-model="roll" required>
                <option>Medico general</option>
                  <option>Odontologo</option>
                  <option>Pediatria</option>
                  <option>Nutricion</option>
                  <option>Fisioterapia</option>
                  <option>Medico PYP</option>
                  <option>Medico hipertensos</option>
              </select>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <div class="output-group">
              <button class="btn btn-primary"> Buscar</button>
              <button type="submit" class="btn btn-primary"> Agregar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  <!-- </form>-->
    <div class="col-md-2">

    </div>
 </div>
    <div class="col-md-2">
      <div class="panel panel-default">
      <div class="panel-body">
      <ul>
        <li v-for="item in medicoscentro">
          <div v-for="medico in item.medicos">
            {{ medico.nombre }}
          </div>
        </li>
      </ul>
      </div>
      </div>
    </div>
</div>
</div> <!--container-->
</form>
</template>
<script>
 export default {
  data: function () {
    return {
      nitcentro:'',
      nombre:'',
      apellido:'',
      User_id:'',
      cc:'',
      telefono:'',
      tarjeta_p:'',
      roll:'',
      medicoscentro:''
    }

  },
     created () {

     },
  props: ['centroinfo'],
  computed: {

  },
  watch: {

  },
  methods: {

    submit () {
        var self= this;
        axios.post('/AdminIlc/medico', {
            datos: $("#medicos").serializeArray(),
            nit:this.centroinfo.nit
        })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            })

        axios.get('/AdminIlc/nuevo_centro/' + this.centroinfo.nit+" ")
            .then(function (response) {
                console.log(response);
                self.medicoscentro = response.data;
                self.nitcentro='',
                self.nombre='',
                self.apellido='',
                self.User_id='',
                self.cc='',
                self.telefono='',
                self.tarjeta_p='',
                self.roll='';

            })
            .catch(function (error) {
                console.log(error);
            })
    }
  }
}
</script>