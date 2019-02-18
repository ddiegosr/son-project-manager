<template>
    <v-form v-model="valid" ref="form" @submit.prevent>
        <v-text-field
                v-model="data.title"
                label="Nova tarefa"
                :rules="validation.title"
                required
                @keyup.native.enter="submit()"
        ></v-text-field>
    </v-form>
</template>

<script>
export default {
    name: 'Create',
    props: [
        'section'
    ],
    data() {
        return {
            data: {},
            valid: false,
            validation: {
                title: [
                    v => !!v || 'Titulo é obrigatorio'
                ]
            }
        }
    },
    methods: {
        submit() {
            this.data.section_id = this.section;
            this.$store.dispatch('tasks/create', this.data).then(res => {
                this.$refs.form.reset();
            });
        }
    }
}
</script>

<style scoped>

</style>