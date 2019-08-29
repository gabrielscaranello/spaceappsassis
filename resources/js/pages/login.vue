<template>
<v-app id="inspire">
    <v-content>
        <v-img src="/img/wallpaper.jpg" lazy-src="/img/wallpaper-lazy.jpg" aspect-ratio="1" class="primary px-0" min-height="100vh" max-height="100vh" position="0 60%" gradient="to bottom left, rgba(181,63,81,.3), rgba(63,81,181,.6)">
            <v-container class="fill-height col" fluid>
                <v-row align="center" justify="center">
                    <v-col cols="12" sm="8" md="6" xl="4">
                        <v-form ref="login" v-model="valid" lazy-validation @submit.prevent="onSubmit">
                            <v-card class="elevation-12" color="rgba(0, 0, 0, 0.7)">
                                <v-toolbar color="transparent" dark flat>
                                    <v-toolbar-title>Login</v-toolbar-title>
                                </v-toolbar>
                                <v-card-text>
                                    <v-alert class="mt-1 mb-5 radius-lg" :value="invalidCredentials" color="error" icon="error" outlined>
                                        Usuário ou senha inválidos.
                                    </v-alert>
                                    <v-alert class="mt-1 mb-5 radius-lg" :value="serverError" color="error" icon="error" outlined>
                                        Desculpe, ocorreu um erro, tente novamente mais tarde.
                                    </v-alert>


                                    <v-text-field :rules="emailRules" required dark v-model="form.email" label="Email" name="login" prepend-icon="person" type="text"></v-text-field>

                                    <v-text-field :rules="passwordRules" required dark v-model="form.password" id="password" label="Senha" name="password" prepend-icon="lock" type="password"></v-text-field>
                                </v-card-text>
                                <v-card-actions>
                                    <div class="flex-grow-1"></div>
                                    <v-flex sm6>
                                        <v-btn :loading="loading" outlined dark rounded block class="mb-3" type="submit">
                                            Entrar
                                        </v-btn>
                                    </v-flex>
                                </v-card-actions>
                            </v-card>
                        </v-form>
                    </v-col>
                </v-row>
            </v-container>
        </v-img>
    </v-content>
</v-app>
</template>

<script>
export default {
    props: {
        source: String,
    },
    data: () => ({
        form: {},
        valid: true,
        loading: false,
        invalidCredentials: false,
        serverError: false,
        emailRules: [
            v => !!v || 'Um email válido é obrigatório',
            v => /.+@.+/.test(v) || 'Endereço de email inválido',
        ],
        passwordRules: [
            v => !!v || 'A senha é obrigatória',
            v => (v && v.length >= 6) || 'A senha deve conter ao menos 6 caracteres',
        ],
    }),
    methods: {
        async onSubmit() {
            if (this.$refs.login.validate()) {
                this.loading = true;
                const isLoged = await this.$jwt.accessToken(this.form);
                if (isLoged === 200) this.$router.push('/admin');
                if (isLoged !== 200) this.loading = false;
                if (isLoged === 401) {
                    this.invalidCredentials = true;
                    this.serverError = false;
                }
                if (isLoged === 500) {
                    this.invalidCredentials = false;
                    this.serverError = true;
                }
            }
        },
    }
}
</script>
