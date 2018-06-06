<template>
<form id="radicacion_eps" method="get" @submit.prevent="submit">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="eps"><h5>EPS </h5></label>
                        <input class="form-control input-sm" type="text" id="eps" v-model="eps" required>
                        <br>
                        <label for="nit"><h5>NIT :</h5></label>
                        <input class="form-control input-sm" type="number" maxlength="10" id="nit" v-model="nit" required>
                        <br>

                    </div>
                    <div class="col-md-4">
                        <label for="radicacion"><h5>NUMERO :</h5></label>
                        <input class="form-control input-sm" type="number" maxlength="8" id="radicacion" v-model="radicacion" required>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="nombre">Nombre :</label>
                        <input class="form-control input-sm" type="text" id="nombre" v-model="nombre" required>
                        <br>
                        <label for="tipo_id">Tipo de documento :</label>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="tipo_id" v-model="tipo_dc">
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Cedula de Ciudadania</a></li>
                                <li><a href="#">Tarjeta de identidad</a></li>
                                <li><a href="#">Registro civil</a></li>
                            </ul>
                        </div>
                        <br>

                    </div>
                    <div class="col-md-4">
                        <label for="numero_id">Numero de identificacion :</label>
                        <input class="form-control input-sm" type="number" maxlength="10" id="numero_id" v-model="cc" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-md-offset-8">
                        <button class="btn btn-primary">Buscar</button>
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
        radicacion:'',
        nombre:'',
        tipo_dc:'',
        cc:''
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
      axios.get('Admisiones/radicacion_eps', {
        datos:$("#radicacion_eps").serializeArray()
      })
        .then(function (response){
          console.log(response);
          self.eps='',
          self.nit='',
          self.radicacion='',
          self.nombre='',
          self.tipo_dc='',
          self.cc='';
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>