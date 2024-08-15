const app = new Vue({
    el: '#app',
    data: {
        message: 'Hello, Vue 2!',
        form: {
            // id: '{{ isset($category) ? $category->id : "" }}',
            category_name: '',
            details: '',
            status: 1,
        },
    },
    props : {

    },
    watch : {
        'form.category_name' : function(val) {
            // console.log(val);
        }
    },
    mounted(){
        if (catId) this.fetchCategory();
    },
    created(){

    },
    methods: {
        greet : function() {
            this.message = 'Hello, Md Al Mamun!';
        },
        handleSubmit() {
            if (catId) {
                this.update()
            } else
                this.store();
        },


        fetchCategory() {
            let _this = this;
            axios.get(`${baseUrl}/api/category/${catId}/get`)  // the basedUrl is assigned on master lay
                .then(response => {
                    // this.data = response.data;  // Store the response data
                    let cat = response.data.result;
                    console.log(cat);
                    _this.form.category_name = cat.category_name;
                    _this.form.details = cat.details;
                    _this.form.status = cat.status;
                })
                .catch(error => {
                    this.error = error.message;  // Handle any errors
                });
        },
        store() {
            axios.post(`${baseUrl}/api/category/store`, this.form)
                .then(response => {
                    if (response.data.success) {
                        toastr.success(response.data.message, 'Category Saved!', {
                            positionClass: 'toast-top-center', // Set position
                            timeOut: 3000 // Adjust timeout
                        });

                        setTimeout(() => {window.location.href = document.referrer;}, 3010)

                    } else {
                        toastr.error('Failed to store the category.');
                    }
                })
                .catch(error => {
                    toastr.error(error.message, 'Failed To Save Category!', {positionClass: 'toast-top-center'});
                });
        },
        update() {
            axios.post(`${baseUrl}/api/category/${catId}/update`, this.form)
                .then(response => {
                    if (response.data.success) {
                        toastr.success(response.data.message, 'Category Updated!', {
                            positionClass: 'toast-top-center', // Set position
                            timeOut: 3000 // Adjust timeout
                        });

                        setTimeout(() => {window.location.href = document.referrer;}, 3010)
                    }
                })
                .catch(error => {
                    toastr.error(error.message, 'Failed To Update Category!', {positionClass: 'toast-top-center'});
                });
        }
    }
});

console.log(app);