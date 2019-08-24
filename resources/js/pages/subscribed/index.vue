<template>
<v-flex sm12>
    <v-card>
        <v-card-title>
            {{$route.name.toUpperCase()}}
            <div class="flex-grow-1"></div>
            <v-text-field v-model="search" append-icon="search" label="Pesquisar" single-line hide-details></v-text-field>
        </v-card-title>
        <v-data-table :headers="headers" :items="items" :search="search" :loading="!items.length" loading-text="Buscando dados...">
            <template v-slot:item.first_name="{ item }">
                {{`${item.first_name} ${item.last_name}`}}
            </template>
            <template v-slot:item.id="{ item }">
                <v-icon @click="">edit</v-icon>
                <v-icon @click="">delete</v-icon>
            </template>
        </v-data-table>
    </v-card>
</v-flex>
</template>

<script>
export default {
    data() {
        return {
            search: '',
            headers: [],
            items: [],
        }
    },
    methods: {
        async getData() {
            const response = (await this.$http.get('pre-register'));
            this.items = response.data;

            this.headers = [{
                text: 'Nome',
                align: 'left',
                sortable: true,
                value: 'first_name',
            }, {
                text: 'Email',
                align: 'left',
                sortable: true,
                value: 'email',
            }, {
                text: 'Telefone',
                align: 'left',
                sortable: false,
                value: 'phone',
            }, {
                text: 'Universidade',
                align: 'left',
                sortable: false,
                value: 'univercity',
            }, {
                text: 'Ações',
                align: 'center',
                sortable: false,
                value: 'id',
            }];
        }
    },
    mounted() {
        this.getData();
    },
}
</script>
