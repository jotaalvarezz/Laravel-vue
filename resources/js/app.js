require('./bootstrap');

import { createApp } from 'vue';
import { createRouter,createWebHashHistory } from 'vue-router';
import axios from 'axios'
import VueAxios from 'vue-axios'
import Agregar from './views/Agregarfruta.vue'
import Frutas from './views/Frutas.vue'
import Base from './components/Cabecera.vue'
import Dashboard from './App.vue'
import Contactanos from './views/Mail.vue'

const routes = [
    {
        path:'/',
        component:Base,
        children:[
            {
                path:'/frutas',
                component:Frutas
            },
            {
                path:'/agregar',
                component:Agregar
            },
            {
                path:'/contactanos',
                component:Contactanos
            }
        ]
    },
]

const router = createRouter({
    history:createWebHashHistory(process.env.BASE_URL),
    routes
})

const app = createApp({})
app.use(router)
app.use(VueAxios, axios)
app.component('dashboard',Dashboard)


app.mount('#app')   