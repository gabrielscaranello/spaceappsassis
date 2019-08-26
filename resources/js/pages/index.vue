<template>
<v-app id="inspire">
    <v-content>
        <v-img src="/img/wallpaper.jpg" lazy-src="/img/wallpaper-lazy.jpg" aspect-ratio="1" class="primary px-0" min-height="100vh" max-height="100vh" position="0 60%" gradient="to bottom left, rgba(181,63,81,.33), rgba(63,81,181,.6)">
            <v-container class="fill-height col" fluid>
                <v-row align="center" justify="center">
                    <v-col cols="12" sm="8" md="6" xl="4">
                        <v-card class="elevation-12" color="rgba(0, 0, 0, 0.7)">
                            <v-toolbar color="transparent" dark flat>
                                <v-toolbar-title class="text-uppercase">Pré-inscrições Abertas!</v-toolbar-title>
                            </v-toolbar>
                            <v-card-text>
                                <v-form class="px-md-2" @submit.prevent="submit">
                                    <v-row>
                                        <v-flex md6 class="px-2">
                                            <v-text-field dark v-model="form.first_name" label="Primeiro nome" name="first_name" type="text"></v-text-field>
                                        </v-flex>
                                        <v-flex md6 class="px-2">
                                            <v-text-field dark v-model="form.last_name" label="Sobrenome" name="last_name" type="text"></v-text-field>
                                        </v-flex>
                                        <v-flex md12 class="px-2">
                                            <v-text-field dark v-model="form.email" label="Email" name="email" type="email"></v-text-field>
                                        </v-flex>
                                        <v-flex md12 class="px-2">
                                            <v-text-field dark v-mask="['(##) # ####-####']" v-model="form.phone" label="WhatsApp" name="phone" type="tel"></v-text-field>
                                        </v-flex>
                                        <v-flex md12 class="px-2">
                                            <v-text-field dark v-model="form.univercity" label="Instituição" name="univercity" type="text"></v-text-field>
                                        </v-flex>
                                    </v-row>
                                    <v-row class="px-2 mt-3">
                                        <v-btn :loading="loading" dark block rounded outlined type="submit">Inscrever-se</v-btn>
                                    </v-row>
                                </v-form>
                            </v-card-text>


                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-img>
    </v-content>
</v-app>
</template>

<script>
import {
    mask
} from 'vue-the-mask';

export default {
    directives: {
        mask,
    },
    props: {
        source: String,
    },
    data: () => ({
        loading: false,
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

                const response = (await this.$http.post(url, this.form));
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
