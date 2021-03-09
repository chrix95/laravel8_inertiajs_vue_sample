<template>
    <div>
        This is the welcome page {{ `${lname}, ${fname}` }}
    </div>
</template>

<script>
    export default {
        props: ['fname', 'lname', 'age']
    }
</script>

<style scoped>

</style>