<template>
<v-menu bottom origin="center center" transition="scale-transition" offset-y>
    <template v-slot:activator="{ on }">
        <v-avatar v-on="on">
            <img :src="user.avatar">
        </v-avatar>
    </template>

    <v-list>
        <v-list-item>
            <v-list-item-title>
                <v-icon left> person </v-icon> {{user.name}}
            </v-list-item-title>
        </v-list-item>
        <v-divider></v-divider>
        <v-list-item @click.prevent="logout">
            <v-list-item-title>
                <v-icon left> directions_run </v-icon> Sair
            </v-list-item-title>
        </v-list-item>
    </v-list>
</v-menu>
</template>

<script>
import {
    mapState
} from 'vuex';

export default {
    computed: {
        ...mapState('auth', ['user'])
    },
    methods: {
        async logout() {
            await this.$jwt.logout();
            this.$router.push('/login');
        }
    }
}
</script>
