<template>
<v-flex sm12>
    <v-card>
        <v-card-title>
            {{$route.name.toUpperCase()}}
            <div class="flex-grow-1"></div>
            <v-text-field v-model="search" append-icon="search" label="Pesquisar" single-line hide-details></v-text-field>
        </v-card-title>
        <v-data-table :headers="headers" :items="items" :search="search" :loading="loading" loading-text="Buscando dados..." no-results-text="Nenhum dado encontrado." no-data-text="Nenhum dado para mostrar." sort-by-text="Ordenar por">
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
            page: 1,
            search: '',
            headers: [],
            items: [],
            total: 0,
            perPage: 5,
            loading: true,
        }
    },
    methods: {
        async getData() {
            this.loading = true;
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

            this.loading = false;
        }
    },
    mounted() {
        this.getData();
    },
}
</script>
