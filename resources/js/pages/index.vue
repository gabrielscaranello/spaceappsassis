<template>
<div class="background">
    <div class="form-content">
        <div class="item-form">
            <div class="row">
                <div class="col-12">
                    <h4>
                        Pre Inscrições NASA Space Apps - Assis Chateubriand
                    </h4>
                </div>
            </div>
            <form @submit.prevent.stop="submit">
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">Primeiro Nome</label>
                            <input id="first_name" name="first_name" required class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last_name">Sobrenome</label>
                            <input id="last_name" name="last_name" required class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" name="email" required class="form-control" type="email">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="whatsapp">Whatsapp</label>
                            <input id="whatsapp" name="phone" required class="form-control" type="tel">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="univercity">Instrituição de Ensino</label>
                            <input id="univercity" name="univercity" required class="form-control">
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
export default {
    data: () => ({
        form: {},
    }),
    methods: {
        async submit() {
            if (this.validate) {
                console.log('validou');
            }
        },
    },
    computed: {
        validate() {
            return true;
        }
    }
}
</script>


<!-- nome  email whatsapp instrituicao -->
