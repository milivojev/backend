<?php require "partials/header.view.php" ?>
    This is main dashboard

    <div id="app">
        Currrent time is : {{date}}
        <ul>
            <li v-for="user in users">{{user.name}}</li>
        </ul>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.1/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>

    <script>
        new Vue({
            el: "#app",
            data: {
                test: "asldklas",
                users: [],
                date: ""
            },
            mounted() {
                axios.get('/api/users').then( (response) => {

                    this.users = response.data
                });

                axios.get('/api/time').then( (response) => {
                    console.log(response)
                this.date = response.
                    data.date
            });
            }
        });
    </script>
<?php require "partials/footer.view.php" ?>