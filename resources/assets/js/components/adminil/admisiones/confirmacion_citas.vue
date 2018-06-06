<template>
<form id="confirmacion_citas" method="get" @submit.prevent="submit">
    <div class="container-fluid">
    <div class="row">
        <!--div class="col-md-8">

            <div class="row">
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-cc"></i></span>
                        <input class="form-control" type="text" name="documento" placeholder="Documento" v-model="id" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="output-group">
                        <button  class="btn btn-primary">Buscar</button> 
                    </div>
                </div>
            </div>

        </div-->
    </div>
    <br>
    <div class="row">
        <div class="col-md-11">
        <!--form method="GET" action="-"-->
            <div class="form-horizontal">
                <table class="table table-bordered table-hover">
                    <thead>
                    <th>Paciente</th>
                    <th>Medico</th>
                    <th>Fecha</th>
                    <th>Confirmar / Cancelar</th>
                    <tr>
                        <td class="col-md-1"><input type="text" name="paciente" v-model="paciente" required> </td>
                        <td class="col-md-1"><input type="text" name="medico" v-model="medico" required> </td>
                        <td class="col-md-1"><input type="date" name="fecha" v-model="fecha" required> </td>
                        <td><input type="button" value="confirmar"><input type="button" value="cancelar"></td>
                    </tr>
                    </thead>
                </table>
            </div>
        <!--/form-->
        </div>
    </div>
    </div>
</form>
</template>
<script>
export default {
  data: function () {
    return{
    paciente:'',
    medico:'',
    fecha:''
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
      axios.get('/admicionista/confirmacion_cits', {
        datos:$("#confirmacion_citas").serializeArray()
      })
        .then(function (response){
          console.log(response);
          self.paciente='',
          self.medico='',
          self.fecha='';
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>