<template>
<form id="proveedores" method="post" @submit.prevent="submit">
<div class="container">
  <div class="col-md-8">
  <div class="panel panel-default">
  <div class="panel-body">
    
  <!-- <form method="GET"  action="-">-->
    <div class="row">
      <div class="col-md-3">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
          <input class="form-control"  type="text" name="nit" placeholder="NIT" v-bind:value="centroinfo.nit" required disabled>
        </div>
      </div>
      <div class="col-md-5">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-list"></i></span>
          <input class="form-control"  type="text" name="razon_social" placeholder="Razon social" v-model="Razon_social" required>
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
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input class="form-control" type="text" name="User_id" placeholder="User ID" v-model="User_id" required>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-8">
        <div class="input-group">
            <label for="sel1">Tipo Proveedor:</label>
          <select class="form-control" id="sel1" v-model="tipo_pro" required>
              <option>1</option>
              <option>2</option>
              <option>3</option>
          </select>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-1">
        <div class="output-group">
          <button type="submit" class="btn btn-primary"> Agregar proveedor</button>
        </div>
      </div>
    </div>  
  </div>
  <!-- </form>-->
  <div class="col-md-2">
      <ul>
        <template v-for="item in centroinfo.proveedores">
          <li>{{ item.nombre }}</li>
          <li class="divider"></li>
        </template>
      </ul>
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
      nit:'',
      Razon_social:'',
      direccion:'',
      User_id:'',
      tipo_pro:'',
      proveedorcentro:''
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

      //let  evenbus=this.$bus;

      axios.post('/AdminIlc/proveedor', {
        datos:$("#proveedores").serializeArray(),
        nit:this.centroinfo.nit
      })
       .then(function (response) {
                console.log(response);
                self.proveedorcentro=response.data;
            })
            .catch(function (error) {
                console.log(error);
            })

        axios.get('/AdminIlc/nuevo_centro/' + this.centroinfo.nit+" ")
            .then(function (response) {
                console.log(response);
                self.proveedorcentro = response.data;
                self.nit='';
                self.Razon_social='',
                self.direccion='',
                self.User_id='',
                self.tipo_pro=''; 

            })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>