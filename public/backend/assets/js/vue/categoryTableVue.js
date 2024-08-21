const categoryTableApp = new Vue({
    el: '#categoryTableArea',
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
            httpReq({
                url :`${baseUrl}/api/category/all/get`,
                callback : (response) => {
                    if (response.data.success)
                        _this.categories = response.data.result;
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
        }
    }
});