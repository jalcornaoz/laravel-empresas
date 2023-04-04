<template>
  <h1>Hola desde un componente Vue</h1>
  Valor recibido: {{ nombre }}
  <hr />
  Valor generado: {{ valor1 }}
  <hr />
  <button @click="dime_algo">Click me</button>
  <hr />
  <hr />
  <hr />
</template>

<script>
export default {
  name: "saludo",
  props: ["nombre"],
  data() {
    return { valor1: "Hola desde Vue" };
  },
  methods: {
    dime_algo: function () {
      return alert("Valor de valor1 es: " + this.valor1);
    },
  },
};
</script>

<style scoped></style>
