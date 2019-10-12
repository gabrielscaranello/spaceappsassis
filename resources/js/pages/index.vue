<template>
<v-app id="inspire">
    <v-content>
        <v-img src="/img/wallpaper.jpg" lazy-src="/img/wallpaper-lazy.jpg" class="primary px-0 background_astronalt" min-width="100%" max-width="100%" position="60%" gradient="to bottom left, rgba(181,63,81,.33), rgba(63,81,181,.6)"> </v-img>
        <v-container class="px-1">
            <v-row class="px-0 mx-0 mw-100" align="center">
                <v-col cols="12" lg="4" xl="4">
                    <v-img src="/img/logo.png" width="25rem" max-width="70%" class="mr-auto ml-auto mb-5" absolute></v-img>
                </v-col>
                <v-col cols="12" xs="12" lg="4" xl="4">
                    <v-card class="elevation-12" color="rgba(0, 0, 0, 0.7)">
                        <v-toolbar color="transparent" class="d-flex justify-center" dark flat>
                            <v-toolbar-title class="text-uppercase">Inscrições Abertas!</v-toolbar-title>
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


                <v-col cols="12" md="6" offset-md="3" class="mt-2">
                    <v-card class="elevation-12" color="rgba(0, 0, 0, 0.7)">




                        <v-card-text class="white--text">
                            <h2 class="text-uppercase mb-5 white--text">Olá! Seja bem-vindo ao Nasa Space Apps Assis Chateaubriand</h2>

                            <h2 class="mb-2">DESAFIOS GLOBAIS REQUEREM SOLUÇÕES GLOBAIS.</h2>
                            <h3> Sobre o Nasa Space Apps Challenge</h3>
                            <p>
                                Nos dias 18, 19 e 20 de outubro, ocorrerá na ACIAC - Associação Comercial e Industrial e Agropecuária de Assis Chateaubriand, uma maratona de programação de 48h, simultaneamente a diversas cidades ao redor do
                                mundo. No
                                Brasil, o evento ocorrerá também em outras 40 cidades.
                            </p>

                            <p>
                                O evento, fundado em 2012, atinge sua maior edição global. Neste ano, as categorias determinadas para que sejam solucionadas envolvem desde oceanos do planeta terra, a nossa lua, os planetas próximos e distantes,
                                as
                                estrelas e a vida em nosso mundo.
                            </p>

                            <p>
                                O que é um Hackathon? O que devo fazer?
                                Um hackathon é evento que reúne profissionais de diversas áreas, interessados em tecnologia, para focar esforços durante 48h na resolução de problemas propostos anteriormente.
                            </p>

                            <p>
                                Os desafios propostos pela Nasa já estão publicados, aqui em nosso site. Role a página e confira o que será demandado durante o Space Apps Assis Chateaubriand.
                            </p>


                            <h3>AS CATEGORIAS E DESAFIOS!</h3>
                            <p>
                                Categorias e desafios propostos pela Nasa para a sua maratona mundial
                            </p>

                            <h4>#1 OCEANOS DA TERRA</h4>
                            <p>
                                De praias e pântanos salgados, a mar aberto, gelo marinho e fundo do mar, os oceanos da Terra são dinâmicos. Esta categoria de desafio solicitará que você use os dados da NASA para entender e proteger melhor os
                                oceanos da Terra
                            </p>

                            <h4>#2 NOSSA LUA</h4>
                            <p>
                                Em toda a história da humanidade, nossa lua tem sido um farol fiel para os observadores do céu da Terra. Os desafios desta categoria solicitarão que você pense criativamente sobre o nosso vizinho mais próximo e
                                interprete os dados e conceitos da NASA para encontrar soluções.
                            </p>

                            <h4>#3 PLANETAS PRÓXIMOS E DISTANTES</h4>
                            <p>
                                Dos planetas vizinhos aos visíveis apenas através dos telescópios mais poderosos, outros corpos planetários há muito fascinam cientistas, artistas e exploradores. Esta categoria de desafio solicitará que você use
                                os
                                dados da NASA para explorar os sistemas de outros planetas, próximos e distantes.
                            </p>

                            <h4>#4 PARA AS ESTRELAS</h4>
                            <p>
                                Se seus interesses estão em nosso sistema solar ou além, o espaço sideral oferece uma oportunidade aparentemente interminável de estudo, exploração e inspiração. Os desafios desta categoria o convidarão a pensar
                                muito e a ser criativo sobre ciência e exploração espacial, seja seu ponto de vista científico, tecnológico, artístico - ou todos os três!
                            </p>

                            <h4>#5 VIVENDO EM NOSSO MUNDO</h4>
                            <p>
                                A Terra é composta de sistemas complicados - terra, água, ar, seres vivos e o próprio planeta. É importante entender como esses sistemas funcionam juntos. Os desafios desta categoria solicitarão que você crie
                                soluções usando dados da NASA - uma história, um jogo, um vídeo, qualquer produto de seu design - que capturam como é viver na Terra.
                            </p>


                            <hr class="mb-5 mt-5">

                            <p class="mb-3">
                                <em>"ESTE É UM PEQUENO PASSO PARA O HOMEM, UM SALTO GIGANTESCO PARA A HUMANIDADE".</em>
                                <br>
                                <small>NEIL ARMSTRONG</small>
                            </p>


                            <h2 class="mb-4 mt-4">
                                Schedule (All times UTC)
                            </h2>
                            <v-row>
                                <v-col cols="12" md="6" offset-md="3" class="pl-0">
                                    <v-timeline dense dark class="mt-5">
                                        <v-timeline-item hide-dot>
                                            <span class="text-uppercase">
                                                Friday, October 18th
                                            </span>
                                        </v-timeline-item>
                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Palestras de Abertura.</v-col>
                                                <v-col class="text-right" cols="4">7:00 pm</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item hide-dot>
                                            <span class="text-uppercase">
                                                Saturday, October 19th
                                            </span>
                                        </v-timeline-item>
                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Credenciamento</v-col>
                                                <v-col class="text-right" cols="4"> 8:00 am</v-col>
                                            </v-row>
                                        </v-timeline-item>
                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Abertura do evento, agenda, anúncio de logística do evento e desafios</v-col>
                                                <v-col class="text-right" cols="4"> 8:45 am</v-col>
                                            </v-row>
                                        </v-timeline-item>
                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Formação dos times, seleção do desafio e registro do time e membros no site oficial do evento</v-col>
                                                <v-col class="text-right" cols="4"> 9:00 am</v-col>
                                            </v-row>
                                        </v-timeline-item>
                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Início do desenvolvimento</v-col>
                                                <v-col class="text-right" cols="4"> 9:30 am</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Coffee break</v-col>
                                                <v-col class="text-right" cols="4">10:00 am</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Checkpoint com os times</v-col>
                                                <v-col class="text-right" cols="4">11:00 am</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Parada para almoço</v-col>
                                                <v-col class="text-right" cols="4">12:00 pm</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8"> Retorno do desenvolvimento</v-col>
                                                <v-col class="text-right" cols="4">1:00 pm</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Checkpoint com os times</v-col>
                                                <v-col class="text-right" cols="4">3:30 pm</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Coffee break</v-col>
                                                <v-col class="text-right" cols="4">4:00 pm</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Saída para almoço</v-col>
                                                <v-col class="text-right" cols="4">6:30 pm</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Retorno do desenvolvimento e anúncio sobre a madrugada</v-col>
                                                <v-col class="text-right" cols="4">8:00 pm</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item hide-dot>
                                            <span class="text-uppercase">
                                                Sunday, October 20th
                                            </span>
                                        </v-timeline-item>



                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Coffee break e return dos mentores</v-col>
                                                <v-col class="text-right" cols="4">8:00 am</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Checkpoint com os times</v-col>
                                                <v-col class="text-right" cols="4">8:30 am</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Treino de pitch</v-col>
                                                <v-col class="text-right" cols="4">9:30 am</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Parada para almoço</v-col>
                                                <v-col class="text-right" cols="4">12:00 pm</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Retorno para finalização dos projetos</v-col>
                                                <v-col class="text-right" cols="4">1:00 pm</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Entrega dos computadores com pitch e projeto</v-col>
                                                <v-col class="text-right" cols="4">2:00 pm</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Apresentações</v-col>
                                                <v-col class="text-right" cols="4">3:00 pm</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Julgamento e votação</v-col>
                                                <v-col class="text-right" cols="4">4:30 pm</v-col>
                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item color="info" icon="access_time" small>
                                            <v-row justify="space-between">
                                                <v-col cols="8">Premiação e encerramento</v-col>
                                                <v-col class="text-right" cols="4">5:00 pm</v-col>
                                            </v-row>
                                        </v-timeline-item>
                                    </v-timeline>
                                </v-col>
                            </v-row>
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
                    this.alert('indigo', 'Inscrição realizada com sucesso')
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
