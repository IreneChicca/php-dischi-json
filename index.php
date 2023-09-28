<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./main.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
</head>

<body>
    <div id="app">

        <header class=""></header>
        <main class="pt-5">

            <div class="card-box container p-5 d-flex justify-content-evenly flex-wrap">

                <div class="card col-3 p-3 m-2" v-for="(disc,index) in discs" v-on:click="showDisc(index)">

                    <img :src=disc.poster alt="">
                    <h5>{{ disc.title }}</h5>
                    <p>{{ disc.author }}</p>
                    <h6>{{ disc.year }}</h6>

                </div>


            </div>

        </main>
    </div>
</body>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js"
    integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>