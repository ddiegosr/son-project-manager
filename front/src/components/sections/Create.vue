<template>
    <v-card color="blue-grey lighten-5">
        <v-card-title primary-title>
            <div class="headline">
                Nova sessão
            </div>
        </v-card-title>
        <v-card-text>
            <v-form v-model="valid" ref="form">
                <v-text-field
                        v-model="data.title"
                        label="Titulo"
                        :rules="validations.title"
                        required
                ></v-text-field>
                <v-text-field
                        v-model="data.description"
                        label="Descrição"
                        outline
                ></v-text-field>

                <v-btn
                        :disabled="!valid"
                        @click="submit"
                >Salvar</v-btn>
            </v-form>
        </v-card-text>
    </v-card>
</template>

<script>
export default {
    name: "Create",
    data() {
        return {
            data: {},
            valid: false,
            validations: {
                title: [
                    v => !!v || 'Titulo é obrigatorio'
                ]
            }
        }
    },
    methods: {
        submit() {
            this.data.project_id = this.$route.params.id;
            this.$store.dispatch('sections/create', this.data).then(res => {
                this.$refs.form.reset();
            });
        }
    }
}
</script>

<style scoped>

</style>