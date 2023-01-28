<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="https://upload.wikimedia.org/wikipedia/commons/3/31/Webysther_20160423_-_Elephpant.svg" />

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--CSS-->
    <link rel="stylesheet" href="./style/style.css">


</head>

<body>
    <div id="app">
        <header>
            <div class="image">
                <img src="./imgs/spotify-icon.png" alt="Spotify Icon    ">
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4" v-for="disc in discList">
                        <div class="card my-color py-2 px-3 m-3"  style="width: 20rem; height: 30rem;">
                            <img class="card-img-top" :src="disc.poster" :alt="disc.title">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold"> {{ disc.title }}</h5>
                                <p class="card-text">{{ disc.author }}</p>
                                <p class="card-text fw-bold">{{ disc.year }}</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </main>




        <!-- 
            <div v-for="disc in discList" :key="disc.title">
                {{ disc.title}}
            </div> 
        -->


        <!--End div.app-->
    </div>
    <script src="./mainJs.js"></script>
</body>

</html>