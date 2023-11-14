<template>
    <div>
        <div class="card">
            <div class="card-header text-center">
                <strong>
                    Registro de frutas
                </strong> 
            </div>
            <div class="card-body row">
                    <div class="col-md-12">
                        <Label>Nombre:</Label>
                        <input type="text" class="form-control" v-model="nombre" required>
                    </div>
                    <div class="col-md-12">
                        <Label>Descripcion:</Label>
                        <input type="text" class="form-control" v-model="descripcion" required>
                    </div>
                    <div class="col-md-12">
                        <Label>Url de iamgen:</Label>
                        <input type="text" class="form-control" v-model="imagen" required>
                    </div>
                    <div class="col-md-12">
                        <Label>Cantidad:</Label>
                        <input type="number" class="form-control" v-model="cantidad" required>
                    </div>
                    <div class="col-md-12 mt-3 text-center">
                        <button class="btn btn-primary btn-lg btn-block" @click="agregarFruta()">Agregar</button>
                    </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios'

export default {
    data() {
        return {
            nombre:'',
            descripcion:'',
            imagen:'',
            cantidad:0
        }
    },
    methods: {
        async agregarFruta()
        {
            try {
                await axios.post('frutas', {
                        name:this.nombre,
                        description:this.descripcion,
                        imagen:this.imagen,
                        amount:this.cantidad
                })
                this.nombre=''
                this.descripcion=''
                this.imagen=''
                this.cantidad=''    
            } catch (error) {
                console.log('EL PROBLEMA ES => ',error)
            }
        }
    },
}
</script>