<template>
  <div class="container">
    <div class="row">
      <projects-client-pagination :projects="projects" />
      <projects-server-pagination />
    </div>
  </div>
</template>

<script>
import ProjectsClientPagination from "./ProjectsClientPagination"
import ProjectsServerPagination from "./ProjectsServerPagination"

export default {
  components: {
    ProjectsClientPagination,
    ProjectsServerPagination
  },
  props: {
    projects: {
        type: Array,
        required: true
    }
  },
  name: 'projects'
}
</script>

