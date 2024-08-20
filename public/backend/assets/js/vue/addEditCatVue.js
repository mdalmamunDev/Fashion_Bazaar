const app = new Vue({
    el: '#app',
    data: {
        message: 'Hello, Vue 2!',
        form: {
            status: 1,
        },
        loading: false,
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
            if (this.loading) return; // Prevent multiple submissions
            this.loading = true; // Set loading to true to disable the button

            if (catId) {
                this.update()
            } else
                this.store();
        },


        fetchCategory() {
            let _this = this;
            httpReq({
                url:`${baseUrl}/api/category/${catId}/get`,
                callback: (response) => {
                    const { category_name, details, status } = response.data.result;
                    _this.form = { category_name, details, status };
                }
            });
        },
        store() {
            httpReq({
                url: `${baseUrl}/api/category/store`,
                method: 'post',
                data: this.form,
                callback: (response) => {
                    if (response.data.success)
                        toastSuccAndRedir('Category Saved!', response.data.message);
                    else
                        toastr.error('Failed to store the category.');
                }
            });
        },
        update() {
            httpReq({
                url: `${baseUrl}/api/category/${catId}/update`,
                method: 'post',
                data: this.form,
                callback: (response) => {
                    if (response.data.success)
                        toastSuccAndRedir('Category Updated!', response.data.message);
                }
            });
        }
    }
});