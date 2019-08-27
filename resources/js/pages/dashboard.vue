<template>
<div>
    <h4>Olá {{user.name.split(' ')[0]}}, bem vindo ao sistema!</h4>
</div>
</template>

<script>
import {
    mapState
} from 'vuex';

export default {
    computed: {
        ...mapState('auth', ['user'])
    },
}
</script>

<style lang="css" scoped></style>
