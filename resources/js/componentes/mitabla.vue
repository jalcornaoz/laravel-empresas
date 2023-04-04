<template>
  <table class="w-full text-center">
    <caption>
      Listado de
      {{
        tabla
      }}
    </caption>
    <tr>
      <th v-for="campo in campos">{{ campo }}</th>
    </tr>
    <tr v-for="fila in filas">
      <td v-for="valor in fila">{{ valor }}</td>
      <td>
        <form action="{{route('empresas.show',$empresa->id)}}" method="get">
          @csrf
          <button>Mostrar</button>
        </form>
      </td>
      <!--
      <td>
        <form action="{{route('empresas.destroy',$empresa->id)}}" method="post">
          @method('DELETE') @csrf
          <x-primary-button>Borrar</x-primary-button>
        </form>
      </td>
      <td>
        <form action="{{route('empresas.edit',$empresa->id)}}" method="get">
          @csrf
          <x-primary-button>Editar</x-primary-button>
        </form>
      </td> -->
    </tr>
  </table>
</template>

<script>
export default {
  name: "mitabla",
  props: ["filas_serializadas", "campos_serializados", "tabla"],
  data() {
    return {
      filas: Array,
      campos: Array,
    };
  },
  created() {
    this.filas = JSON.parse(this.filas_serializadas);
    this.campos = JSON.parse(this.campos_serializados);
  },
  methods: {
    ordenar: function (campo) {
      this.filas = this.filas.sort((a, b) => {});
    },
  },
};
</script>

<style scoped></style>
