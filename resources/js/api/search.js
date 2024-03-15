import axios from "axios";

export default {
    search(form, callback){
        return axios.post("/api/v1/search", form, callback)
            .then((response) => {
                callback( response.data)
            });
    },
}
