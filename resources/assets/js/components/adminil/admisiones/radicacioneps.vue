<template>
<form id="radicacioneps" method="get" @submit.prevent="submit">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3">
                        <label for="eps">EPS :</label>
                        <input class="form-control input-sm" type="text" id="eps" v-model="eps" required>
                        <br>
                    </div>
                    <div class="col-md-3">
                        <label for="nit">NIT :</label>
                        <input class="form-control input-sm" type="number" maxlength="10" id="nit" v-model="nit" required>
                        <br>
                    </div>
                    <!--div class="col-md-3">
                        
                        <br>
                        <br>
                    </div-->
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3">
                        <label for="nombre">Nombre :</label>
                        <input class="form-control input-sm" type="text" id="nombre" v-model="nombre" required>
                        <br>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="sel">Tipo de documento :</label>
                            <select class="form-control" id="sel" v-model="tipo_dc"> <!--v-bind:value="paciente.tipo_dc"-->
                                <option>C.C</option>
                                <option>T.I</option>
                                <option>R.C</option>
                                <option>N.V</option>
                                <option>N.N</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="numero_id">Número de identificación :</label>
                        <input class="form-control input-sm" type="number" maxlength="10" id="numero_id" v-model="cc" required>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="row">
                <div class="col-md-8">
                    <div class="input-group">
                    <label for="asunto">Asunto :</label>
                    <input class="form-control input-sm" type="text" id="asunto" v-model="asunto" required>
                    </div>
                </div>
            </div>
            <hr>
             <div class="row">
                <div class="col-md-8">
                    <div class="input-group">
                    <label for="descripcion">Descripcion :</label>
                    <input class="form-control input-sm" type="text" id="descripcion" v-model="descripcion" required>
                    </div>
                </div>
            </div>
            <hr>
             <div class="row">
                <div class="col-md-8">
                    <div class="input-group">
                    <label for="observacion">Observacion :</label>
                    <input class="form-control input-sm" type="text" id="observacion" v-model="observacion" required>
                    </div>
                </div>
            </div>
            <br>
        </div>
        
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
            Crear
        </button>

        <!-- crear -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- V-show todos los campos son obligatorios-->
                    <div class="modal-body">
                        <p>Radicado # creado satisfactoriamente</p>
                        <label for="radicado">Número :</label>
                        <input class="form-control input-sm" type="number" maxlength="8" id="radicado" v-model="radicado" required></div>
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
        eps:'',
        nit:'',
        nombre:'',
        tipo_dc:'',
        cc:'',
        asunto:'',
        descripcion:'',
        observacion:'',
        radicado:''
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
      axios.get('Admisiones/radicacion', {
        datos:$("#radicacioneps").serializeArray()
      })
        .then(function (response){
          console.log(response);
           self.eps='',
           self.nit='',
           self.nombre='',
           self.tipo_dc='',
           self.cc='',
           self.asunto='',
           self.descripcion='',
           self.observacion='',
           self.radicado='';
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>