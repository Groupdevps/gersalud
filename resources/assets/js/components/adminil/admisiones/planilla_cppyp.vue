<template>
<form id="planilla_cppyp" method="get" @submit.prevent="submit">
    <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="input-group">
                <label for="sel1">Programa: </label>
                <select class="form-control" id="sel1" v-model="roll">
                    <option>Agudeza Visual</option>
                    <option>Adulto Mayor</option>
                </select>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-info"></i></span>
                <input class="form-control"  type="number" maxlength="8" name="N.atencion" placeholder="Número de atención" v-model="numero_atencion" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-info"></i></span>
                <input class="form-control"  type="number" maxlength="9" name="N.ingreso" v-model="numero_ingreso" placeholder="Número de ingreso">
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="btn-group">
                <button class="btn btn-primary">Guardar</button>
                <button class="btn btn-primary">Eliminar</button>
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
    roll:'',
    numero_atencion:'',
    numero_ingreso:''
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
      axios.get('Admisiones/planilla_cppyp', {
        datos:$("#planilla_cppyp").serializeArray()
      })
        .then(function (response){
          console.log(response);
          self.roll='',
          self.numero_atencion='',
          self.numero_ingreso='';
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>