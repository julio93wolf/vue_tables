<template>
  <div>
    <v-server-table
      :columns="columns"
      url="/api/projects"
      :options="options">
      <button 
        type="button"
        slot="edit"
        slot-scope="props"
        class="btn btn-info"
        @click="edit(props.row)"
      >Editar</button>
      <button 
        type="button"
        slot="remove"
        slot-scope="props"
        class="btn btn-danger"
        @click="remove(props.row)"
      >Eliminar</button>
    </v-server-table>
  </div>
</template>

<script>
export default {
  name: 'projects-server-pagination',
  data () {
    return {
      columns: ['id','name','assigned_by','owner','cost','edit','remove'],
      options: {
        perPage: 5,
        perPageValue: [5,10,15,20],
        headings: {
          id: 'ID',
          name: 'Nombre',
          assigned_by: 'Asignado por',
          owner: 'Propietario',
          cost: 'Coste',
          edit: 'Editar',
          remove: 'Eliminar'
        },
        sortable: ['id','name','cost'],
        filterable: ['id','name','cost'],
        filterByColumn: true
      }
    }
  },
  methods: {
    edit (row) {
      console.log(row)
    },
    remove (row) {
      console.log(row)
    }
  }
}
</script>

<style scoped>

</style>
