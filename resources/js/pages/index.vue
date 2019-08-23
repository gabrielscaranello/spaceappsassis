<template>
<div class="background">
    <div class="form-content">
        <div class="item-form">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-uppercase">
                        Pré-inscrições Abertas!
                    </h4>
                </div>
            </div>
            <form @submit.prevent.stop="submit">
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">Primeiro Nome</label>
                            <input v-model="form.first_name" class="form-control text-uppercase" id="first_name" name="first_name" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last_name">Sobrenome</label>
                            <input v-model="form.last_name" class="form-control text-uppercase" id="last_name" name="last_name" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input v-model="form.email" class="form-control text-lowercase" id="email" name="email" required type="email">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="whatsapp">Whatsapp</label>
                            <the-mask v-model="form.phone" class="form-control text-lowercase" id="whatsapp" name="phone" required type="tel" :mask="['(##) # ####-####']" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="univercity">Instrituição de Ensino</label>
                            <input v-model="form.univercity" class="form-control text-uppercase" id="univercity" name="univercity" required>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <button class="btn btn-block" type="submit">
                            Inscrever-se
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';
import swal from 'sweetalert2';
import Vue from 'vue';
import VueTheMask from 'vue-the-mask';

Vue.use(VueTheMask);

export default {
    data: () => ({
        form: {},
    }),
    methods: {
        async submit() {
            if (this.validate) {
                const url = '/api/pre-register';
                this.form.first_name = this.form.first_name.toUpperCase();
                this.form.last_name = this.form.last_name.toUpperCase();
                this.form.univercity = this.form.univercity.toUpperCase();
                this.form.email = this.form.email.toLowerCase();
                this.form.phone = this.form.phone.toLowerCase();

                swal.fire({
                    title: 'Aguarde!',
                    text: 'Realizando registro...',
                    onBeforeOpen: () => {
                        swal.showLoading()
                    },
                })

                const response = (await axios.post(url, this.form));
                if (response.data.status == 'success') {
                    this.alert('success', 'Pre inscrição realizada com sucesso')
                    this.form = {};
                } else if (response.data.status == 'exists') {
                    this.alert('error', 'Email já cadastrado')
                } else {
                    this.alert('error', 'Ocorreu um erro, tente novamente mais tarde')
                }
            } else {
                this.alert('error', 'Favor, preencher todos os dados')
            }
        },
        alert(type, message) {
            swal.fire({
                type: type,
                title: type == 'error' ? 'Oops...' : 'Sucesso!',
                text: message,
                showConfirmButton: true
            })
        }
    },
    computed: {
        validate() {
            const data = this.form;
            if (!data.first_name) return false;
            if (!data.last_name) return false;
            if (!data.email) return false;
            if (!data.phone) return false;
            if (!data.univercity) return false;
            return true;
        }
    }
}
</script>
