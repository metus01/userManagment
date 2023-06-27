<template>
    <h1>Créer un utlisateur</h1>
    <form action="" method="post">
        <label for="name">Name</label>
        <input v-model="formData.name" type="text" name="" id="name" /><br />
        <template v-if="errors.name">
            <span style="color:red" v-text="errors.name[0]"></span>
        </template>


        <label for="email">Email</label>
        <input type="email" v-model="formData.email" name="email" id="email" /><br />
        <template v-if="errors.email">
            <span style="color:red" v-text="errors.email[0]"></span>
        </template>
        <label for="password">Password</label>
        <input type="password" name="password" v-model="formData.password" id="password" /><br />

        <template v-if="errors.password">
            <span style="color:red" v-text="errors.password[0]"></span>
        </template>
        <label for="confirm-password">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" v-model="formData.password_confirmation" />
        <button type="button" v-on:click="createUserAction">Créer</button>
    </form>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";
import useUser from "../../composables/users/useUser";
const  {
    errors,
    createUser
} = useUser();
const formData = ref({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});
//callback , coroutine , promesses
//formData.value
const createUserAction = async () => {
    await createUser (formData.value)
}
</script>
