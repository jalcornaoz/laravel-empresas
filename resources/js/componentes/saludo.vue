<template>
  <h1>Hola desde un componente Vue (saludo.php)</h1>
  Valor recibido desde welcome.blade.php
  <i>&lt;saludo nombre="Pedro"&gt;&lt;/saludo&gt;</i>:
  {{ nombre }}
  <hr />
  Valor generado en "saludo.vue", dentro de <i>data()</i>: {{ valor1 }}
  <hr />
  <button @click="dime_algo">Click me</button>
  <p>Al pulsar el botón se ejecuta el método <i>dime_algo</i></p>
  <hr />
  <hr />
  <hr />
</template>

<script>
export default {
  name: "saludo",
  props: ["nombre"],
  data() {
    return { valor1: "Valor generado en el objeto." };
  },
  methods: {
    dime_algo: function () {
      return alert("Valor de valor1 es: " + this.valor1);
    },
  },
};
</script>

<style scoped></style>
