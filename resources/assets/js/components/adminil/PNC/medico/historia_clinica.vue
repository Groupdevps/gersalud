<template>
<form id="historia_clinica" method="get" @submit.prevent="submit">

<h2>Historia clinica</h2>

<div class="container">
  <form method="POST"  action="-">
    <div class="row">
      <div class="col-md-8">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input class="form-control"  type="text" name="Nombre" placeholder="Nombre" v-model="nombre" required>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-cc"></i></span>
          <input class="form-control"  type="number" maxlength="10" name="cc" placeholder="Documento" v-model="cc" required>  
        </div>
      </div>
      <div class="col-md-2">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-hospital-o"></i></span>
          <input class="form-control" type="text" name="EPS"  placeholder="EPS" v-model="eps" required>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
          <input class="form-control" type="tel" name="Telefono" placeholder="Telefono" v-model="telefono" required>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
          <input class="form-control" type="text" name="direccion" placeholder="Direccion" v-model="direccion" required>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-8">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-info-circle"></i></span>
          <input class="form-control" type="number" maxlength="8" name="n_atencion" placeholder="N. Atencion" v-model="n_atencion" required>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-8">
        <table class="table table-bordered table-hover">
        <thead>
          <tbody>
            <tr>
            <td><input class="form-control" name="Diagnostico" placeholder="Diagnostico" v-model="diagnostico" required /></td>
            <td class="col-md-1"><input type="button" value="Menos" class="btn btn-primary"/></td>
            <td class="col-md-1"><input type="submit" value="Agregar" class="btn btn-info"></td>
            </tr>
          </tbody>
        </thead>
        </table>
        <!--<div class="btn-der">
          <button id="agregar" name="agregar" type="button" class="btn btn-warning"> Mas+</button>
        </div> -->
      </div>
    </div>
    <br>
    <div class="row"> 
      <div class="col-md-8">
        <table class="table table-bordered  table-hover">
        <thead>
          <tbody>
            <tr>
            <td><input class="form-control" name="Observacion" placeholder="Observacion" v-model="observacion" required /></td>
            <td class="col-md-1"><input type="button" value="Menos" class="btn btn-primary"/></td>
            <td class="col-md-1"><input type="submit" value="Agregar" class="btn btn-info"></td>
            </tr>
          </tbody>
        </thead>
        </table>
        <!--<div class="btn-der">
          <button id="agregar" name="agregar" type="button" class="btn btn-warning">Mas+<</button>
        </div> -->
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-1 col-md-offset-6">
        <div class="output-group">
            <button class="btn btn-primary">Registro Medico</button>
        </div>
      </div>
    </div>
  </form> 
</div>

</form>
</template>
<script>
 export default {
  data: function () {
    return {
      nombre:'',
      cc:'',
      eps:'',
      telefono:'',
      direccion:'',
      n_atencion:'',
      diagnostico:'',
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
      axios.get('Medico/historia', {
        datos:$("#historia_clinica").serializeArray()
      })
        .then(function (response){
          console.log(response);
          self.nombre='',
          self.cc='',
          self.eps='',
          self.telefono='',
          self.direccion='',
          self.n_atencion='',
          self.diagnostico='',
          self.observacion='';
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>