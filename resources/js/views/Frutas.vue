<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-sm-3 mr-3 mt-3 text-center" v-for="(fruta,index) of datos" :key="index">
                <div class="card" style="width: 18rem;">
                    <img :src="fruta.imagen" class="card-img-top" style="width:270px ;height:230px ;" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{fruta.name}}</h5>
                        <button class="btn btn-success btn-lg btn-block">Mostrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    name:'frutas',
    data() {
        return {
            datos:[]
        }
    },
    methods: {
        async frutas(){
            try {
                let info = await axios.get('frutas')
                console.log(info.data)
                this.datos = info.data
                //console.log(this.datos.imagen)
            } catch (error) {
                console.log(error)
            }
        } 
    },
    created() {
        this.frutas();
    },
}
</script>