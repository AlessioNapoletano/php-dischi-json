const { createApp } = Vue;

createApp({
    data() {
        return {
            urlAdress: './server.php',
            discList: [],
        }
    },

    methods: {
        getDiscsInfos() {
            axios.get(this.urlAdress).then((response) => {
                console.log(response.data);
                this.discList = response.data;
            })
        },

    },

    created() {
        this.getDiscsInfos();
    },


}).mount('#app')