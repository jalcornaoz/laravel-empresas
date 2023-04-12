<template>
  <h1 v-html="mensaje"></h1>
  <table class="w-full text-center">
    <caption class="titulo">
      Listado de
      {{
        tabla
      }}
    </caption>
    <tr>
      <td v-for="(campo, indice) in campos">
        <input
          type="text"
          @keyup="filtrar(campo, valor[indice])"
          v-model="valor[indice]"
          :size="campo.length"
        />
      </td>
    </tr>
    <tr>
      <th v-for="campo in campos">
        <button @click="ordenar(campo)" class="cabecera">
          {{ campo }}
        </button>
      </th>
      <th colspan="3" class="cabecera">opciones</th>
    </tr>
    <tr v-for="fila in filas.data">
      <td v-for="valor in fila">{{ valor }}</td>
      <td>
        <button @click="mostrar(fila.id)">Mostrar</button>
      </td>
      <td>
        <button @click="editar(fila.id)">Editar</button>
      </td>
      <td>
        <button @click="borrar(fila.id)">Borrar</button>
      </td>
    </tr>
  </table>
  <TailwindPagination :data="filas" @pagination-change-page="getResults" />
</template>

<script>
import axios from "axios";
import { TailwindPagination } from "laravel-vue-pagination";
export default {
  name: "mitabla",
  components: { TailwindPagination },
  props: ["filas_serializadas", "campos_serializados", "tabla"],
  data() {
    return {
      filas: Array,
      campos: Array,
      asc: true,
      valor: Array,
      mensaje: String,
    };
  },
  created() {
    this.filas = JSON.parse(this.filas_serializadas);
    this.campos = JSON.parse(this.campos_serializados);
    this.mensaje = "";
  },
  methods: {
    ordenar: function (campo) {
      if (this.asc) {
        this.asc = false;
        this.filas.data = this.filas.data.sort((a, b) => {
          if (a[campo] > b[campo]) return 1;
          else return -1;
        });
      } else {
        this.asc = true;
        this.filas.data = this.filas.data.sort((a, b) => {
          if (b[campo] > a[campo]) return 1;
          else return -1;
        });
      }
    },
    filtrar: function (campo, valor) {
      this.filas = JSON.parse(this.filas_serializadas);
      this.filas.data = this.filas.data.filter((fila) => {
        let texto = new String(fila[campo]);
        if (texto.indexOf(valor) > -1) return fila;
      });
    },
    editar: function (id) {
      let url = window.location.href;
      window.location.href = url + "/" + id + "/edit";
    },
    mostrar: function (id) {
      let url = window.location.href;
      url = url + "/" + id;
      window.location.href = url;
    },
    borrar: function borrar(id) {
      let url = window.location.href;
      url = url + "/" + id;
      axios
        .delete(url)
        .then((response) => {
          this.filas = response.data;
          this.mensaje =
            "<span style='color:blue'>Se ha borrado en la tabla " +
            this.tabla +
            " la fila de id " +
            id +
            "</span>";
        })
        .catch(
          (e) =>
            (this.mensaje =
              "<span style='color:red'>Error borrando en la tabla " +
              this.tabla +
              " la fila de id " +
              id +
              "</span>")
        );
    },
    getResults: function (page = 1) {
      let url = window.location.href;
      url = url + "/paginate?page=" + page;
      console.log(url);
      axios
        .get(url)
        .then((response) => {
          this.filas = response.data;
          console.log("Respuesta " + response.data);
        })
        .catch(function (error) {
          console.error("ERROR" + error);
        });
    },
  },
};
</script>

<style scoped>
.titulo {
  @apply text-amber-500 text-4xl;
}
.cabecera {
  @apply uppercase;
}
td {
  @apply px-2;
}
</style>
