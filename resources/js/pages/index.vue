<template>
<v-app id="inspire">
    <v-content>
        <v-img src="/img/wallpaper.jpg" lazy-src="/img/wallpaper-lazy.jpg" class="primary px-0 background_astronalt" min-width="100%" max-width="100%" position="60%" gradient="to bottom left, rgba(181,63,81,.33), rgba(63,81,181,.6)">
            <v-container class="fill-height px-0 col">
                <v-row class="px-0 mx-0 mw-100" align="center">
                    <v-col cols="12" lg="6" xl="4">
                        <v-img src="/img/logo.png" width="25rem" max-width="70%" class="mr-auto ml-auto float-lg-right mb-5" absolute></v-img>
                    </v-col>
                    <v-col cols="12" xs="12" lg="6" xl="4">
                        <v-card class="elevation-12" color="rgba(0, 0, 0, 0.7)">
                            <v-toolbar color="transparent" dark flat>
                                <v-toolbar-title class="text-uppercase">Pré-inscrições Abertas!</v-toolbar-title>
                            </v-toolbar>
                            <v-card-text>
                                <v-form @submit.prevent="submit">
                                    <v-row>
                                        <v-flex class="px-3" lg6>
                                            <v-text-field dark v-model="form.first_name" label="Primeiro nome" name="first_name" type="text"></v-text-field>
                                        </v-flex>
                                        <v-flex class="px-3" lg6>
                                            <v-text-field dark v-model="form.last_name" label="Sobrenome" name="last_name" type="text"></v-text-field>
                                        </v-flex>
                                        <v-flex class="px-3" xs12>
                                            <v-text-field dark v-model="form.email" label="Email" name="email" type="email"></v-text-field>
                                        </v-flex>
                                        <v-flex class="px-3" xs12>
                                            <v-text-field dark v-mask="['(##) # ####-####']" v-model="form.phone" label="WhatsApp" name="phone" type="tel"></v-text-field>
                                        </v-flex>
                                        <v-flex class="px-3" xs12>
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
                <v-snackbar v-model="snackbar.show" :color="snackbar.color" top>
                    {{ snackbar.text }}
                    <v-btn dark text @click="snackbar.show = false">
                        Ok
                    </v-btn>
                </v-snackbar>
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
        snackbar: {
            show: false,
            text: '',
            color: '',
        }
    }),
    methods: {
        async submit() {
            if (this.validate) {
                this.loading = true;
                const url = 'pre-register';
                this.form.first_name = this.form.first_name.toUpperCase();
                this.form.last_name = this.form.last_name.toUpperCase();
                this.form.univercity = this.form.univercity.toUpperCase();
                this.form.email = this.form.email.toLowerCase();
                this.form.phone = this.form.phone.toLowerCase();

                const res = (await this.$http.post(url, this.form));
                if (res.status && res.data.status == 'success') {
                    this.alert('indigo', 'Pré-inscrição realizada com sucesso')
                    this.form = {};
                } else if (res.status && res.data.status == 'exists') {
                    this.alert('error', 'Email já cadastrado anteriormente')
                } else {
                    this.alert('error', 'Ocorreu um erro, tente novamente mais tarde')
                }

                this.loading = false;
            } else {
                this.alert('error', 'Favor, preencher todos os dados')
            }
        },
        alert(color, text) {
            this.snackbar = {
                color: color,
                text: text,
                show: true,
            };
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
    },
}
</script>
