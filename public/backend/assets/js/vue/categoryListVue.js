const app = new Vue({
    el: '#app',
    data: {
        categories: [],
    },
    props : {

    },
    watch : {

    },
    mounted(){
        this.fetchCategories();
    },
    created(){

    },
    methods: {
        fetchCategories() {
            let _this = this;
            axios.get(`${baseUrl}/api/category/all/get`)
                .then(response => {
                        console.log(response);
                    if (response.data.success) {
                        _this.categories = response.data.result;
                    }
                })
                .catch(error => {
                    console.error(error);
                    alert('Failed to delete the category.');
                });
        },
        deleteCat(id) {
            if (confirm('Are you sure to delete this category?'))
                axios.post(`${baseUrl}/api/category/${id}/delete`)
                    .then(response => {
                        if (response.data.success) {
                            alert(response.data.message);
                            window.location.reload();
                        }
                    })
                    .catch(error => {
                        console.error(error);
                        alert('Failed to delete the category.');
                    });
        }
    }
});

console.log(app);