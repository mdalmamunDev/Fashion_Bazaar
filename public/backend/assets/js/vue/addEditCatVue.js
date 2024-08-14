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
                    if (response.data.success)
                        alert(response.data.message)

                    // Redirect back to the previous page
                    window.location.href = document.referrer;
                })
                .catch(error => {
                    console.error(error);
                    // Handle error (e.g., display an error message)
                });
        },
        update() {
            axios.post(`${baseUrl}/api/category/${catId}/update`, this.form)
                .then(response => {
                    if (response.data.success) {
                        alert(response.data.message);
                        window.location.href = document.referrer; // Redirect to a specific route
                    }
                })
                .catch(error => {
                    console.error(error);
                    alert('Failed to update the category.');
                });
        }
    }
});

console.log(app);