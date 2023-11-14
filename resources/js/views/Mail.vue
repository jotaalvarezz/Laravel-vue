<template>
    <div>
        <div class="card">
            <div class="card-header text-center">
                <strong>
                    Mensaje de correo
                </strong> 
            </div>
            <div class="card-body row">
                    <div class="col-md-12">
                        <Label>Nombre:</Label>
                        <input type="text" class="form form-control" v-model="nombre" required>
                    </div>
                    <div class="col-md-12">
                        <Label>Descripcion:</Label>
                        <input type="text" class="form form-control" v-model="descripcion" required>
                    </div>
                    <div class="col-md-12">
                        <Label>Cantidad:</Label>
                        <input type="number" class="form form-control" v-model="cantidad" required>
                    </div>
                    <div class="col-md-12 mt-3 text-center">
                        <button class="btn btn-primary btn-lg btn-block" @click="enviarcorreo">Enviar</button>
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
            imagen:'data:image/jpeg;base64,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',
            cantidad:0
        }
    },
    methods: {
        async enviarcorreo()
        {
            try {
                await axios.post('contacto', {
                        name:this.nombre,
                        description:this.descripcion,
                        amount:this.cantidad
                })
                this.nombre=''
                this.descripcion=''
                this.cantidad=''    
            } catch (error) {
                console.log('EL PROBLEMA ES => ',error)
            }
        }
    },
   /*  created() {
        this.enviarcorreo()
    }, */
}
</script>