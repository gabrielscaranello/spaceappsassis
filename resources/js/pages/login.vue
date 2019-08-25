<template>
<v-app id="inspire">
    <v-content>
        <v-img src="/img/wallpaper.jpg" lazy-src="/img/wallpaper-lazy.jpg" aspect-ratio="1" class="primary px-0" min-height="100vh" max-height="100vh" position="60%">
            <v-container class="fill-height col" fluid>
                <v-row align="center" justify="center">
                    <v-col cols="12" sm="8" md="6" xl="4">
                        <v-card class="elevation-12">
                            <v-toolbar color="primary" dark flat>
                                <v-toolbar-title>Login</v-toolbar-title>
                            </v-toolbar>
                            <v-card-text>
                                <v-form>
                                    <v-text-field v-model="form.email" label="Email" name="login" prepend-icon="person" type="text"></v-text-field>

                                    <v-text-field v-model="form.password" id="password" label="Senha" name="password" prepend-icon="lock" type="password"></v-text-field>
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <div class="flex-grow-1"></div>
                                <v-btn color="primary">Login</v-btn>
                            </v-card-actions>
                        </v-card>
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
    }),
}
</script>
