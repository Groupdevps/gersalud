<template>
<form id="notas_evolucion" method="post" @submit.prevent="submit">

<h2>Notas de evolucion</h2>
<div class="container">
  <!--form method="POST"  action="-"-->
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
      <div class="col-md-8">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-cc"></i></span>
          <input class="form-control"  type="number" maxlength="10" name="cc" placeholder="Documento" v-model="cc" required>
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
              <td><input class="form-control" required name="diagnostico" placeholder="Diagnostico" v-model="diagnostico" /></td>
              <td class="col-md-1"><input type="button" value="Menos" class="btn btn-primary" /></td>
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
            <td><input class="form-control" name="observacion" placeholder="Observacion" v-model="observacion" required /></td>
            <td class="col-md-1"><input type="button" value="Menos" class="btn btn-primary" /></td>
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
      <div class="col-md-1 col-md-offset-6">
        <div class="output-group">
          <button type="submit" class="btn btn-primary">Registro Medico</button>
        </div>
      </div>
    </div>
    <!--/form--> 
</div>
</form>
</template>
<script>
 export default {
  data: function () {
    return {
      nombre:'',
      cc:'',
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
      axios.post('/Medico/notas', {
        datos:$("#notas_evolucion").serializeArray()
      })
        .then(function (response){
          console.log(response);
          self.nombre='';
          self.cc='',
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