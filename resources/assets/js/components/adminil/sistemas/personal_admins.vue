<template>
<form id="personal_admins" method="post" @submit.prevent="submit">
<div clas="container">
 <div class="panel panel-default">
  <div class="panel-body">
  <!-- <form method="GET"  action="-">-->
    <div class="row">
      <div class="col-md-10">
      <div class="form-horizontal">
        <div class="row">
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
              <input class="form-control"  type="text" name="Nombre" placeholder="Nombre" v-model="nombre" required>
            </div>
            </div>
          <div class="col-md-5">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
              <input class="form-control"  type="text" name="apellido" placeholder="Apellido" v-model="apellido" required>
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
              <span class="input-group-addon"><i class="fa fa-cc"></i></span>
              <input class="form-control" type="text" name="Documento" placeholder="Documento" v-model="cc" required>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
              <input class="form-control" type="text" name="cargo_id" placeholder="Cargo ID" v-model="cargo_id" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input class="form-control"  type="text" name="User_id" placeholder="User ID" v-model="User_id" required>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
              <input class="form-control"  type="text" name="id_centro" placeholder="ID centro" v-model="id_centro" required>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-1">
            <div class="output-group">
              <button type="submit" class="btn btn-primary"> Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
 <!-- </form>-->
  </div>
 </div>
</div> <!--container-->
</form>
</template>
<script>
 export default {
  data: function () {
    return {
      nombre:'',
      apellido:'',
      direccion:'',
      cc:'',
      cargo_id:'',
      User_id:'',
      id_centro:''
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
      axios.post('AdminIlc/personal_adm', {
        datos:$("#personal_admins").serializeArray()
      })
        .then(function (response){
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>