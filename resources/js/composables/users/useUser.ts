import { ref } from "vue";
import axios from "axios";

export default function () {
    const errors = ref([]);
    const createUser = async (formData) => {
        await axios
            .post("/api/users", formData)
            .then((res) => console.log(res))
            .catch((err) => {
                errors.value = err.response.data.errors;
                console.log(err.response.data.errors);
            });
    };
    return {
        errors,
        createUser,
    };
}
