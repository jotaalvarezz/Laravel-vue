<template>
        <nav>
            <router-link to="/frutas" class="text-danger">Frutas</router-link> |
            <router-link to="/agregar" class="text-danger">Agregar fruta</router-link> |
            <router-link to="/contactanos" class="text-danger">Contactanos</router-link>
        </nav>
        <router-view></router-view>
</template>
<script>
export default {
    name:'Cabecera'
}
</script>