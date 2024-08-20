const app = new Vue({
    el: '#testimonialArea',
    data: {
        message: 'Hi this is me',
        testList:  [],
        form: {},
    },
    mounted(){
        this.fetchTestimonials();
    },
    methods: {
        doLike(test, userId) {
            let _this = this;
            let url = `${baseUrl}/api/testimonial/do-like/`+test.id+'/'+userId;
            httpReq({
                url: url,
                method: 'post',
                callback: (response) => {
                    if (response.data) {
                        test.likes = response.data.result;
                        test.isLiked = response.data.isLiked;
                    }
                }
            });
        },


        fetchTestimonials() {
            let _this = this;
            httpReq({
                url:`${baseUrl}/api/testimonial`,
                callback: (response) => {
                    _this.testList = [..._this.testList, ...response.data.result];
                }
            });
        },

        userHasLiked(test, userId) {
            let res = test.likes.some(like => like.user_id === parseInt(userId));
            return res;
        }
    }
});