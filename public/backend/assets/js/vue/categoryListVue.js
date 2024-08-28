const categoryTableApp = new Vue({
    el: '#categoryTableArea',
    data: {
        message: 'Hello, Vue 2!',
        categories: [],
        form: {
            status: 1,
        },
        loading: false,
    },
    props : {

    },
    watch : {

    },
    mounted(){
        this.fetchCategories();
        $('#categoryModal').on('hidden.bs.modal', () => {
            // reset data
            this.form = {
                status: 1,
            };
        });
    },
    created(){

    },
    methods: {
        fetchCategories() {
            let _this = this;
            httpReq({
                url :`${baseUrl}/api/category/all/get`,
                callback : (response) => {
                    if (response.data.success)
                        _this.categories = response.data.result;
                }
            });
        },
        handleSubmit() {
            // if (this.loading) return; // Prevent multiple submissions
            // this.loading = true; // Set loading to true to disable the button

            if (this.form.id) {
                this.update(this.form.id)
            } else
                this.store();

            this.closeModal();
        },
        onClickUpdate(category) {
            this.form = category;
            this.openModal();
        },
        store() {
            httpReq({
                url: `${baseUrl}/api/category/store`,
                method: 'post',
                data: this.form,
                callback: (response) => {
                    if (response.data.success)
                        toastr.success(response.data.message, 'Category Saved!');
                    else
                        toastr.error('Failed to store the category.');
                }
            });
        },
        update(id) {
            httpReq({
                url: `${baseUrl}/api/category/${id}/update`,
                method: 'post',
                data: this.form,
                callback: (response) => {
                    if (response.data.success)
                        toastr.success(response.data.message, 'Category Updated!');
                }
            });
        },
        deleteCat(id) {
            let _this = this;
            if (confirm('Are you sure to delete this category?'))
                httpReq({
                    url: `${baseUrl}/api/category/${id}/delete`,
                    method : 'post',
                    callback : (response) => {
                        if (response.data.success) {
                            toastr.success(response.data.message, 'Category Deleted!', {positionClass: 'toast-top-center'});
                            _this.fetchCategories();
                        }
                    }
                });
        },


        closeModal() {
            $('#categoryModal').modal('hide');
            this.fetchCategories();
        },
        openModal() {
            $('#categoryModal').modal('show');
        }
    }
});