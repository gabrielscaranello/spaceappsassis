<template>
<v-app id="inspire">
    <v-navigation-drawer v-model="drawer" app clipped>
        <v-list dense>
            <v-list-item v-for="(item, index) in menu" :key="index" @click="$router.push(item.link)" :class="{'primary': $route.path == item.link}">
                <v-list-item-action>
                    <v-icon :class="{'white--text': $route.path == item.link}">{{item.icon}}</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                    <v-list-item-title :class="{'white--text': $route.path == item.link}">{{item.text}}</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
        </v-list>
    </v-navigation-drawer>

    <v-app-bar app clipped-left color="primary" dark>
        <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
        <v-toolbar-title>NASA Space Apps Assis</v-toolbar-title>
    </v-app-bar>

    <v-content>
        <v-container fluid>
            <v-row align="center" class="px-4">
                <router-view></router-view>
            </v-row>
        </v-container>
    </v-content>
</v-app>
</template>

<script>
import menu from '../utils/menu';

export default {
    props: {
        source: String,
    },
    data: () => ({
        drawer: null,
        menu: menu,
    }),
    created() {
        this.$vuetify.theme.dark = false
    },
}
</script>
