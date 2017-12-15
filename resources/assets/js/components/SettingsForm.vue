<template>
    <form class="settings" @submit.prevent="send">

        <div class="form-group">
            <input type="text" v-model="fullName" placeholder="Nombre completo">
            <input type="text" v-model="userEmail" placeholder="Email del usuario">
            <input type="text" v-model="enterpriseEmail" placeholder="Email de la recolectora">
        </div>

        <div class="form-group">
            <input type="text" v-model="address" placeholder="Dirección">
        </div>

        <div class="form-group">
            <input type="text" v-model="city" placeholder="Ciudad">
            <input type="text" v-model="province" placeholder="Provincia">
            <input type="text" v-model="postalCode" placeholder="Código Postal">
        </div>

        <textarea class="customized-data" name="" id="" cols="30" rows="10" placeholder="Correo personalizado. Use este espacio para especificar datos."></textarea>

        <div class="form-group button">
            <button class="btn">Enviar</button>
        </div>

    </form>
</template>

<script>
    export default {
        name: 'settings-form',

        data() {
            return {
                'fullName': '',
                'userEmail': '',
                'enterpriseEmail' : '',
                'address': '',
                'city': '',
                'province': '',
                'postalCode': ''
            };
        },

        methods: {
            send() {
                io.$emit('emit', {
                    channel: 'settings',
                    data: {
                        'fullName': this.fullName,
                        'userEmail': this.userEmail,
                        'enterpriseEmail' : this.enterpriseEmail,
                        'address': this.address,
                        'city': this.city,
                        'province': this.province,
                        'postalCode': this.postalCode
                    }
                });
            }
        }
    }
</script>