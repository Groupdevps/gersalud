<template>
 <form id="nuevocentro" method="post" @submit.prevent="submit">

  <div class="panel panel-default">
  <div class="panel-body">
   <div class="col-md-10">
    <div class="form-horizontal">
     <div class="row">
      <div class="col-md-3">
       <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-list"></i></span>
        <input class="form-control"  type="text" name="nombre" placeholder="Razon social" v-model="nombre">

       </div>
      </div>
      <div class="col-md-5">
       <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
        <input v-model="nit" id="nit" class="form-control"  type="number" maxlenght="10" name="nit" placeholder="NIT">
       </div>
      </div>
     </div>
     <br>
     <div class="row">
      <div class="col-md-4">
       <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
        <input class="form-control" type="number" maxlenght="9" name="Telefono" placeholder="Telefono" v-model="celular">
       </div>
      </div>
      <div class="col-md-4">
       <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
        <input class="form-control"  type="email" name="email" placeholder="Email" v-model="email" required>
       </div>
      </div>
     </div>
     <br>
     <div class="row">
      <div class="col-md-4">
       <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
        <input class="form-control" type="text" name="Ubicacion" placeholder="Ubicacion" v-model="ubicacion">
       </div>
      </div>
      <div class="col-md-4">
       <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
        <input class="form-control" type="text" name="direccion" placeholder="Direccion" v-model="direccion">
       </div>
      </div>
     </div>
     <br>
     <div class="row">
      <div class="col-md-5">
       <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input class="form-control"  type="text" name="Nombre_contacto" placeholder="Nombre de contacto" v-model="nombreContacto">
       </div>
      </div>
      <div class="col-md-3">
       <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
        <input class="form-control" type="number" maxlength="9" name="Telefono_contacto" placeholder="Telefono de contacto" v-model="telefonoContacto">
       </div>
      </div>
     </div>
     <br>
     <div class="row">
       <div class="col-md-8">
         <div class="input-group">
           <label for="sel1">Nivel:</label>
          <select class="form-control" id="sel1" v-model="roll" required>
            <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
          </select>
         </div>
       </div>
     </div>
     <br>
     <div class="row">
      <div class="col-md-1">
       <div class="output-group">
        <button type="submit" class="btn btn-primary">Guardar</button>
       </div>
      </div>

     </div>
    </div>
   </div>
   <div class="col-md-2">
    <div class="alert alert-warning">
     <ul>
      <li v-for="item in errores">

       <strong>{{item.tipo}}!</strong>{{item.mensaje}}.
      </li>
     </ul>

    </div>
   </div>
   </div>
   </div>

 </form>
</template>



<script>




export default {
    name: "addcentro",
  data:function() {
      return {
          nit:'',
          mensaje:'',
          ubicacion:'',
          nombre:'',
          email:'',
          direccion:'',
          nombreContacto:'',
          celular:'',
          telefonoContacto:'',
          centroinfo:{'id':0},
          roll:'',
          classerror:'hidden',
          titulo:'',
          mensaje:'',
          errores:{
              'tipo':'Informacion',
              'mensaje':'Area  reservada  para  notificaiones '
          }
      }


  },
  props: {

  },
  computed: {
     isBoolNit: function () {

          if ((this.nit).length<3){
              this.mensaje="Tiene menos de 3";
              return false;
          }else if((this.nit).length==10){
              var  digitos=this.nit;
              var v = 41 * digitos[0] +
                  37 * digitos[1] +
                  29 * digitos[2] +
                  23 * digitos[3] +
                  19 * digitos[4] +
                  17 * digitos[5] +
                  13 * digitos[6] +
                  7 * digitos[7] +
                  3 * digitos[8];
              v = v % 11;
              if (v >= 2)
                  v = 11 - v;
              this.mensaje="v:"+ v + "=="+ digitos[9];
              return true;

          }
          if (this.nit==0){
              this.mensaje="NIT  NO VALIDO";
              return false;
          }else{
              //this.mensaje="VALIDO";
              //return true;
          }


      } 
  },
  watch: {

  },
  methods: {
    submit () {



     //  var self = this;
       let  evenbus=this.$bus;
        var pesactual=$("#infob");
        var pesacrive=$("#infoas");
        var liinfob=$("#liinfob");
        var liifoas=$("#liinfoas");
        axios.post('/AdminIlc/nuevo_centro', {
            datos:$("#nuevocentro").serializeArray()
        })
            .then(function (response) {
                console.log(response);
               self.centroinfo=response.data;
               pesactual.removeClass('active');
               liinfob.removeClass('active')
              liifoas.addClass('active');
               pesactual.addClass('disable');
               pesacrive.addClass('active');
                self.nit='';
                    self.ubicacion='',
                    self.nombre='',
                    self.email='',
                    self.direccion='',
                    self.nombreContacto='',
                    self.celular='',
                    self.telefonoContacto='';

               console.log("emitido");
                console.log(self.centroinfo);
                evenbus.$emit('newcentroe', self.centroinfo);

            })
            .catch(function (error) {
                console.log(error);
                self.errores=error;
            })


    }
  }
}

</script>
