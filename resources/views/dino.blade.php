<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>My Website</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <!-- Favicons -->
      <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png" sizes="180x180">
      <link rel="icon" href="img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
      <link rel="icon" href="img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
      <link rel="icon" href="img/favicons/favicon.ico">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   </head>
   <body>
      <div class="container">
      <div class="row ">
         <h1>Мої динозаври</h1>
         <h2>Мої динозаври-іграшки    </h2>



        @foreach ([1,28,33,58,78,87] as $id)
            @include("dino-card", ["dinoName" => "Паразауролоф"])
        @endforeach
        @foreach ([2,6,9,10,15,18,20,38,52,59,79,88,94,99,101] as $id)
            @include("dino-card", ["dinoName" => "Трицератопс"])
        @endforeach
        <div class="card">
            <div class="card-body">
               <div id="carouselExampleAutoplaying2" class="carousel slide ride" data-bs-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="img/76.jpg" class="d-block w-100">
                     </div>
                     <div class="carousel-item">
                        <img src="img/77.jpg" class="d-block w-100">
                     </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                  </button>
               </div>
            </div>
            <div class="card-footer">
               <p class="card-text">Трицератопс</p>
            </div>
         </div>
         @foreach ([3,12,14,41,48] as $id)
            @include("dino-card", ["dinoName" => "Анкелозавр"])
        @endforeach
        @foreach ([4,26,39] as $id)
            @include("dino-card", ["dinoName" => "Аргентинозавр"])
        @endforeach
        @foreach ([5,25,31,60,64] as $id)
            @include("dino-card", ["dinoName" => "Невідомо"])
        @endforeach
        @foreach ([7,23,43] as $id)
            @include("dino-card", ["dinoName" => "Птеранодон"])
        @endforeach
        @foreach ([8,21,24,71] as $id)
            @include("dino-card", ["dinoName" => "Диплодок"])
        @endforeach
        @foreach ([11,16,34,45,55,105,93] as $id)
            @include("dino-card", ["dinoName" => "Пахіцефалозавр"])
        @endforeach
        @foreach ([13,17,19,62,66,83,92] as $id)
            @include("dino-card", ["dinoName" => "Стегозавр"])
        @endforeach
        @foreach ([22,29,35,40,84,85,95,97,98,107,112] as $id)
            @include("dino-card", ["dinoName" => "Велоцераптор"])
        @endforeach







        @foreach ([27,44,65] as $id)
            @include("dino-card", ["dinoName" => "Ящір"])
        @endforeach
        @foreach ([30,61,102] as $id)
            @include("dino-card", ["dinoName" => "Мегалозавр"])
        @endforeach
        @foreach ([32] as $id)
            @include("dino-card", ["dinoName" => "Катцелькоатль"])
        @endforeach
        @foreach ([36,42,46,47,49,51,57,68,69,73,80,96,104,108,110,111] as $id)
            @include("dino-card", ["dinoName" => "Теринозавр"])
        @endforeach
        </div>
         <div class="card">
            <div class="card-body">
               <div id="carouselExampleAutoplaying1" class="carousel slide ride" data-bs-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="img/74.jpg" class="d-block w-100">
                     </div>
                     <div class="carousel-item">
                        <img src="img/75.jpg" class="d-block w-100">
                     </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                  </button>
               </div>
            </div>
            <div class="card-footer">
               <p class="card-text">Теринозавр</p>
            </div>


         
         
         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/37.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Гуаньлунь</p>
            </div>


        


         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/50.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Скелети динозаврів</p>
            </div>

         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/53.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Брахіозавр</p>
            </div>
         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/54.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Качкодзьоб</p>
            </div>


            </div>
         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/63.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Ютараптор</p>
            </div>
 
         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/67.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Ютараптор</p>
            </div>
 

         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/70.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Юрський період</p>
            </div>
         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/72.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Стиракозавр</p>
            </div>
 
 
  
         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/81.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Сальтозавр</p>
            </div>
         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/82.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Брахіозавр</p>
            </div>
         </div>

 
         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/86.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Дилофозавр</p>
            </div>
         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/89.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Брахіозавр</p>
            </div>
         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/90.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Дилофозавр</p>
            </div>
         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/91.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Баріонікс</p>
            </div>



         <div class="card">
            <div class="card-body">
               <img src="img/100.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Баріонікс</p>
            </div>


         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/106.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Дилофозавр</p>
            </div>

         </div>
         <div class="card">
            <div class="card-body">
               <img src="img/109.jpg" class="card-img-top">
            </div>
            <div class="card-footer">
               <p class="card-text">Скелет динозавра</p>
            </div>



         </div>
      </div>
      <div class="row">
         <h2>Моя книга</h2>
         <div class="book-section">
            <div class="container">
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/001.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/061.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/060.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/059.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/058.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/057.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/056.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/055.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/054.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/053.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/052.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/051.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/050.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/049.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/048.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/047.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/046.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/045.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/044.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/043.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/042.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/041.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/040.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/039.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/038.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/037.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/036.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/035.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/034.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/033.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/032.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/031.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/030.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/029.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/028.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/027.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/026.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/025.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/024.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/023.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/022.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/021.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/020.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/019.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/018.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/017.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/016.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/015.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/014.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/013.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/012.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/011.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/010.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/009.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/008.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/007.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/006.jpg);"></figure>
                  <figure class="front" style="background-image: url('img/book/005.jpg');"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/004.jpg);"></figure>
                  <figure class="front" style="background-image: url(img/book/003.jpg);"></figure>
               </div>
               <div class="right">
                  <figure class="back" style="background-image: url(img/book/002.jpg);"></figure>
                  <figure class="front" style="background-image: url(img/book/001.jpg);"></figure>
               </div>
               <button onclick="turnLeft()">Prev</button>
               <button onclick="turnRight()">Next</button>
               <br />
            </div>
         </div>
      </div>
         <div class="row">
         </div>
   </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="js/script.js"></script>
</html>