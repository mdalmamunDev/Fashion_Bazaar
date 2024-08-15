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
                    toastr.error(error.message, 'Failed To Fetch Category!', {positionClass: 'toast-top-center'});
                });
        },
        deleteCat(id) {
            let _this = this;
            if (confirm('Are you sure to delete this category?'))
                axios.post(`${baseUrl}/api/category/${id}/delete`)
                    .then(response => {
                        if (response.data.success) {
                            toastr.success(response.data.message, 'Category Deleted!', {positionClass: 'toast-top-center'});
                            _this.fetchCategories();
                        }
                    })
                    .catch(error => {
                        toastr.error(error.message, 'Failed To Delete Category!', {positionClass: 'toast-top-center'});
                    });
        }
    }
});

console.log(app);