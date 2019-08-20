<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
    <script src="https://cdn.staticfile.org/axios/0.18.0/axios.min.js"></script>

    <title>Document</title>
</head>

<body>

    <div id="app">
        {{ data }}
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                data: [],

            },
             

            methods: {
                getUrlContent(url) {

 
                    axios
                        .get(url)
                        .then(res => {
                             this.data = res.data ;
                             
                        })
                        .catch(err => {
                            console.log(err);
                        });


                       
                },

            },
            mounted() {
                this.getUrlContent("http://localhost/api.php");
            },
        })
    </script>
</body>

</html>