<template>
    <h1>Hello World!!!</h1>
    <template v-for="user in users">
        <p v-text="user.name"></p>
    </template>
</template>
<script setup>
import { ref } from 'vue';
const users = ref([]);
const loadFromServer = () => {
    axios.get('/api/users/')
        .then((res) => users.value = res.data.data)
        .catch((err) => console.log(err));
}
loadFromServer();
</script>
