<template>
<form id="extra_cupos" method="post" @submit.prevent="submit">
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="form-inline">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">ID: </span>
                        <input class="form-control" type="text" name="id_profesional" v-model="id_profesional" placeholder="Profesional" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input class="form-control" type="date" name="fecha" v-model="fecha" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">hora: </span>
                        <input class="form-control" type="time" name="hora" v-model="hora" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="btn-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
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
    return{
    id_profesional:'',
    fecha:'',
    hora:''
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
      axios.post('Admisiones/extra_cupos', {
        datos:$("#extra_cupos").serializeArray()
      })
        .then(function (response){
          console.log(response);
          self.id_profesional='',
          self.fecha='',
          self.hora='';
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}ipt>