<script src="../../../app.js"></script>
<template>
<form id="administracion" method="post" @submit.prevent="submit">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
 <div class="panel panel-default">
  <div class="panel-body">
  <!-- <form method="GET"  action="-">-->
    <div class="row">
      <div class="col-md-3">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input class="form-control"  type="text" name="Nombre" placeholder="Nombre" v-model="Nombre" required>
        </div>
      </div>
      <div class="col-md-5">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input class="form-control"  type="text" name="apellido" placeholder="Apellido" v-model="Apellido" required>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-cc"></i></span>
          <input class="form-control" type="text" name="Documento" placeholder="Documento" v-model="CC" required>
        </div>
      </div>  
      <div class="col-md-4">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
          <input class="form-control" type="text" name="Telefono" placeholder="Telefono" v-model="Telefono" required>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
          <input class="form-control"  type="text" name="Celular" placeholder="Celular" v-model="Celular" required>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input class="form-control" type="email" name="Email" placeholder="Email" v-model="Email" required>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-8">
        <div class="input-group">
          <!--span class="input-group-addon"><i class="fa fa-check"></i></span-->
          <!--input class="form-control"  type="text" name="enum" placeholder="Selecciona" v-model="roll" required-->
           <label for="sel1">Tipo de Usuario:</label>
          <select class="form-control" id="sel1" v-model="roll" required>
            <option>Administrativo</option>
              <option>Paciente</option>
              <option>Medico</option>
              <option>Centro</option>
              <option>Soporte</option>
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
  <!-- </form>-->
 </div>
</div>
</div>
<div class="col-md-2">
      <div class="panel panel-default">
      <div class="panel-body">
      <ul>
        <li v-for="item in administracioncentro">
          {{ item.nombre }}
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
  data:function() {
    return {
      Nombre:'',
      Apellido:'',
      CC:'',
      Telefono:'',
      Celular:'',
      Email:'',
      roll:'',
      administracioncentro:''
    }

  },
  created () {

  },
  props:['centroinfo'],
  computed: {

  },
  watch: {

  },
  methods: {
    submit () {
      axios.post('AdminIlc/personal_adm', {
        datos:$("#administracion").serializeArray(),
        nit:this.centroinfo.nit
      })
        .then(function (response){
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        })

    axios.get('/AdminIlc/nuevo_centro/' + this.centroinfo.nit+" ")
            .then(function (response) {
                console.log(response);
                self.administracioncentro = response.data;
                self.Nombre='',
                self.Apellido='',
                self.CC='',
                self.Telefono='',
                self.Celular='',
                self.Email='',
                self.roll='';

            })
            .catch(function (error) {
                console.log(error);
            })
          }  
  }
}
</script>