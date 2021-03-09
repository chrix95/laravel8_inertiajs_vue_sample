<template>
  <layout title="Welcome">
    <p>This is Dashboard, welcome {{ `${lname}, ${fname}` }}!</p>
  </layout>
</template>

<script>
  import Layout from '../../Shared/Layout'

  export default {
    components: {
      Layout,
    },
    props: {
      fname: String,
      lname: String
    },
  }
</script>