<template>
<form id="" method="get" @submit.prevent="submit">
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