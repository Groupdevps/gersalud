<template>
<form id="desbloqueo_agendas" method="get" @submit.prevent="submit">
    <div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="form-inline">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">ID: </span>
                        <input class="form-control" type="text" name="id_profesional" placeholder="Profesional" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input class="form-control" type="date" name="fecha" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">hora inicio: </span>
                        <input class="form-control" type="time" name="hora_inicio" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">hora final: </span>
                        <input class="form-control" type="time" name="hora_final" required>
                    </div>
                </div>
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
    id_profesional:'',
    fecha:'',
    hora_inicio:'',
    hora_final:''
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
      axios.get('Admisiones/desbloqueo_agendas', {
        datos:$("#desbloqueo_agendas").serializeArray()
      })
        .then(function (response){
          console.log(response);
           self.id_profesional='',
           self.fecha='',
           self.hora_inicio='',
           self.hora_final='';
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>