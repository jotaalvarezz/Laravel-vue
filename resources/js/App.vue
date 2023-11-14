<template>
    <div class="container">
        <router-view></router-view>
    </div>
</template>
<script>
import Cabecera from './components/Cabecera.vue'

export default {
    components:{
        Cabecera
    }
}
</script>