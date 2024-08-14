const app = new Vue({
    el: '#app',
    data: {
        message: 'Hello, Vue 2!'
    },
    methods: {
        greet : function() {
            this.message = 'Hello, Md Al Mamun!';
        }
    }
});

console.log(app);