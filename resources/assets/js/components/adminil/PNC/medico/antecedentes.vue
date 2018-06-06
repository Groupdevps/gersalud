<template>
<form id="antecendentes" method="post" @submit.prevent="submit">

<h2>Antecedentes</h2>

<div class="container">
  <!--form-->
  <h3>Heredo Familiares</h3>
    <div class="row">
      <div class="col-md-10">
        <span>Marcar todas quien ha padecido y especificar quien</span>
        <br>
        <div class="row">
          <div class="col-md-4">
            <div class="input-group">
              <select for="enfermedad">Seleccionar enfermedad
                <option>Diabetes</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group">
              <label class="checkbox-inline"><input type="checkbox" name="options" id="diabetes"/>Diabetes
              <input class="form-control" type="text" name="diabetes" placeholder="Familiar"></label>
            </div>
            <div class="input-group">
              <label class="checkbox-inline"><input type="checkbox" name="options" id="hepatopatia"/>Hepatopatia
              <input class="form-control" type="text" name="hepatopatia" placeholder="Familiar"></label>
            </div>
            <div class="input-group">
              <label class="checkbox-inline"><input type="checkbox" name="options" id="asma"/>Asma
              <input class="form-control" type="text" name="asma" placeholder="Familiar"></label>
            </div>
            <div class="input-group">
              <label class="checkbox-inline"><input type="checkbox" name="options" id="enf. endocrinas"/>Enf. endocrinas
              <input class="form-control" type="text" name="enf.endocrinas" placeholder="Familiar"></label>
            </div>
            <div class="input-group">
              <label class="checkbox-inline"><input type="checkbox" name="options" id="hipertension"/>Hipertension
              <input class="form-control" type="text" name=" hipertension" placeholder="Familiar"></label>
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group">
              <label class="checkbox-inline"><input type="checkbox" name="options" id="nefropatia"/>Nefropatia
              <input class="form-control" type="text" name="nefropatia" placeholder="Familiar"></label>
            </div>
            <div class="input-group">
              <label class="checkbox-inline"><input type="checkbox" name="options" id="cancer"/>Cancer
              <input class="form-control" type="text" name="cancer" placeholder="Familiar"></label>
            </div>
            <div class="input-group">
              <label class="checkbox-inline"><input type="checkbox" name="options" id="cardiopatia"/>Cardiopatia
              <input class="form-control" type="text" name="cardiopatia" placeholder="Familiar"></label>
            </div>
            <div class="input-group">
              <label class="checkbox-inline"><input type="checkbox" name="options" id="enf. mentales"/>Enf. mentales
              <input class="form-control" type="text" name="enf.mentales" placeholder="Familiar"></label>
            </div>
            <div class="input-group">
              <label class="checkbox-inline"><input type="checkbox" name="options" id="enf. alergicas"/>Enf. alergicas
              <input class="form-control" type="text" name="enf.alergicas" placeholder="Familiar"></label>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-8">
              <div class="input-group">
              <label class="checkbox-inline"><input type="checkbox" name="options" id="otros"/>Otros
              <input class="form-control" type="textarea" name="comentarios" placeholder="Investigar etiología y edades de Morbimortalidad en abuelos, padres, hijos, conyuges, hermanos"></label>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <h3>Personales Patologicos</h3>
    <br>
    <span>Marcar todas las que apliquen y especificar</span>
    <br>
    <div class="row">
      <div class="col-md-4">
        <div class="input-group">
          <label class="checkbox-inline"><input type="checkbox" name="options" id="enfermedades actuales"/>Enfermedades actuales
          <input class="form-control" type="text" name="enf.actuales" placeholder="Familiar"></label>
        </div>
        <div class="input-group">
          <label class="checkbox-inline"><input type="checkbox" name="options" id="quirurgicos"/>Quirurgicos
          <input class="form-control" type="text" name="quirurgicos" placeholder="Familiar"></label>
        </div>
        <div class="input-group">
          <label class="checkbox-inline"><input type="checkbox" name="options" id="transfucionales"/>Transfucionales
          <input class="form-control" type="text" name="transfucionales" placeholder="Familiar"></label>
        </div>
        <div class="input-group">
          <label class="checkbox-inline"><input type="checkbox" name="options" id="alergias"/>Alergias
          <input class="form-control" type="text" name="alergias" placeholder="Familiar"></label>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group">
          <label class="checkbox-inline"><input type="checkbox" name="options" id="traumaticos"/>Traumaticos
          <input class="form-control" type="text" name="traumaticos" placeholder="Familiar"></label>
        </div>
        <div class="input-group">
          <label class="checkbox-inline"><input type="checkbox" name="options" id="hospitalizaciones previas"/>Hospitalizaciones previas
          <input class="form-control" type="text" name="hospitalizaciones.previas" placeholder="Familiar"></label>
        </div>
        <div class="input-group">
          <label class="checkbox-inline"><input type="checkbox" name="options" id="adicciones"/>Adicciones
          <input class="form-control" type="text" name="adicciones" placeholder="Familiar"></label>
        </div>
        <div class="input-group">
          <label class="checkbox-inline"><input type="checkbox" name="options" id="otros"/>Otros
          <input class="form-control" type="textarea" name="otros" placeholder="Otros"></label>
        </div>
      </div>
    </div>
    <h3>Personales no Patologicos</h3>
    <br>
    <div class="row">
      <div class="col-md-8">
        <span>Habitos personales</span><br><span>Baño :</span>
        <label class="radio-inline"><input type="radio" name="diario" id="diario"/>Diario</label>
        <label class="radio-inline"><input type="radio" name="3er_dia" id="c/3er dia"/> C/3er dia</label>
        <label class="radio-inline"><input type="radio" name="irregular" id="irregular">Irregular</label>
        <br>
        <span>Lav. Dientes :</span>
        <label class="radio-inline"><input type="radio" name="1/dia" id="1/dia"/>1/dia</label>
        <label class="radio-inline"><input type="radio" name="2/dia" id="2/dia"/>2/dia</label>
        <label class="radio-inline"><input type="radio" name="3/dia" id="3/dia"/>3/dia</label>
        <br>
        <span>Habitacion :</span>
        <label class="radio-inline"><input type="radio" name="urbana" id="urbana"/>Urbana</label>
        <label class="radio-inline"><input type="radio" name="rural" id="rural"/>Rural</label>
        <label class="radio-inline"><input type="radio" name="todos_servicios" id="todos los servicios"/>Todos los servicios</label>
        <label class="radio-inline"><input type="radio" name="letrina" id="letrina"/>Letrina</label>
        <br>
        <br>
        <div class="form-inline">
           <div class="form-group">
            <label for="tabaquismo">Tabaquismo :</label>
            <input class="form-control input-sm" type="text" id="tabaquismo">
            <label for="cig/dia/">cig/dia/</label>
            <input class="form-control input-sm" type="text" id="cig/dia/">
            <label>años</label>
           </div>
        </div>
        <br>
        <div class="form-inline">
          <div class="form-group">
            <label for="alcoholismo">Alcoholismo (beb/frec) :</label>
            <input class="form-control input-sm" type="text" id="alcoholismo">
          </div>
        </div>
        <br>
        <div class="form-inline">
          <div class="form-group">
            <label for="alimentacion">Alimentacion :</label>
            <input class="form-control input-sm" type="text" id="alimentacion">
            <label for="veces/dia">veces/dia </label>
            <input class="form-control input-sm" type="text" id="veces/dia">
            <label>Calidad</label>
          </div>
        </div>
        <br>
        <div class="form-inline">
          <div class="form-group">
            <label for="deportes">Deportes (act. Fisica/f)</label>
            <input class="form-control input-sm" type=text"" id="deportes">
            <label>Inmunizaciones</label>
            <label class="radio-inline"><input type="radio" name="options" id="completas a edad">Completas a edad</label>
            <label class="radio-inline"><input type="radio" name="options" id="pendientes">Pendientes</label>
            <br><br><input class="form-control input-sm" type="text" id="pendiente">
            <label for="desparasitacion">Ultima desparasitacion</label>
            <input class="form-control input-sm" type="text" id="desparasitacion">
          </div>
        </div>
      </div>
    </div>
    <h3>Gineco-obstetricos</h3>
    <label class="radio-inline"><input type="radio" name="options" id="no aplica">No aplica</label>
    <br>
    <div class="row">
      <div class="col-md-8">
        <div class="form-inline">
          <div class="form-group">
            <label for="menarca">Menarca</label>
            <input class="form-control input-sm" type="text" id="menarca">
            <label for="ritmo">Ritmo Menstrual (f/d/c)</label>
            <input class="form-control input-sm" type="text" id="ritmo">
            <label class="checkbox-inline"><input type="checkbox" name="options" id="dismenorrea">Dismenorrea</label>
          </div>
        </div>
        <br>
        <div class="form-inline">
          <div class="form-group">
            <label for="fum">FUM</label>
            <input class="form-control input-sm" type="text" id="fum">
            <label for="ivsa">IVSA</label>
            <input class="form-control input-sm" type="text" id="ivsa">
            <label for="no parejas">No Parejas</label>
            <input class="form-control input-sm" type="text" id="no parejas">
          </div>
        </div>
        <br>
        <div class="form-inline">
          <div class="form-group">
            <label for="g">G</label>
            <input class="form-control input-sm" type="text" id="g" style="height: 30px; width: 50px">
            <label for="a">A</label>
            <input class="form-control input-sm" type="text" id="a" style="height: 30px; width: 50px">
            <label for="p">P</label>
            <input class="form-control input-sm" type="text" id="p" style="height: 30px; width: 50px">
            <label for="c">C</label>
            <input class="form-control input-sm" type="text" id="c" style="height: 30px; width: 50px">
            <label for="fpp">FPP</label>
            <input class="form-control input-sm" type="text" id="fpp">
            <br><br><label for="fup">FUP</label>
            <input class="form-control input-sm" type="text" id="fup">
            <label for="menp">Menp/Climaterio</label>
            <input class="form-control input-sm" type="text" id="menp">
          </div>
        </div>
        <br>
        <div class="form-inline">
          <div class="form-group">
            <label for="met">Met. Planificacion :</label>
            <input class="form-control input-sm" type="text" id="met">
            <label for="cit">Cit. Vaginal :</label>
            <input class="form-control input-sm" type="text" id="cit">
            <br><br><label for="ex.m">Ex. Mamas/Mastografia :</label>
            <input class="form-control input-sm" type="text" id="ex.m">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col-md-4 col-md-offset-6">
      <div class="btn-group">
        <button class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
  <!--/form-->
</div><!--container-->
</form>
</template>
<script>
 export default {
  data: function () {

  },
  props: {

  },
  computed: {

  },
  watch: {

  },
  methods: {
    submit () {
      axios.get('Medico/', {
        datos:$("#").serializeArray()
      })
        .then(function (response){
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>