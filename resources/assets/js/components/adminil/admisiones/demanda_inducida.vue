<template>
<form id="demanda_inducida" method="get" @submit.prevent="submit">
    <div class="container">
        <form method="GET"  action="-">
            <div class="row">
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input class="form-control"  type="date" name="programacion" placeholder="Programacion cita" v-model="programacion" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                        <input class="form-control"  type="text" name="cantidad" placeholder="Cantidad" v-model="cantidad" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                        <input class="form-control" type="time" name="hora" placeholder="Hora" v-model="hora" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-hourglass-half"></i></span>
                        <input class="form-control" type="text" name="duracion" placeholder="Duracion" v-model="duracion" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-1">
                    <div class="output-group">
                        <button type="submit" class="btn btn-primary"> Agregar</button>
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
    programacion:'',
    cantidad:'',
    hora:'',
    duracion:''
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
      axios.get('Admisiones/escritorio', {
        datos:$("#demanda_inducida").serializeArray()
      })
        .then(function (response){
          console.log(response);
          self.programacion='',
          self.cantidad='',
          self.hora='',
          self.duracion='';
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>