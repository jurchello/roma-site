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
      <div class="row">
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

         @foreach ([37] as $id)
            @include("dino-card", ["dinoName" => "Гуаньлунь"])
         @endforeach
         @foreach ([50] as $id)
               @include("dino-card", ["dinoName" => "Cкелети динозаврів"])
         @endforeach
         @foreach ([53,82,89] as $id)
               @include("dino-card", ["dinoName" => "Брахіозавр"])
         @endforeach
         @foreach ([54] as $id)
               @include("dino-card", ["dinoName" => "Утконос"])
         @endforeach
         @foreach ([63,67] as $id)
               @include("dino-card", ["dinoName" => "Ютараптор"])
         @endforeach
         @foreach ([70] as $id)
               @include("dino-card", ["dinoName" => "Юрський період"])
         @endforeach
         @foreach ([72] as $id)
               @include("dino-card", ["dinoName" => "Стиракозавр"])
         @endforeach
         @foreach ([81] as $id)
               @include("dino-card", ["dinoName" => "Сальтозавр"])
         @endforeach
         @foreach ([86,90,106] as $id)
               @include("dino-card", ["dinoName" => "Дилофозавр"])
         @endforeach
         @foreach ([91,100] as $id)
               @include("dino-card", ["dinoName" => "Баріонікс"])
         @endforeach
         @foreach ([109] as $id)
               @include("dino-card", ["dinoName" => "Скелет динозавра"])
         @endforeach
   </div>

      <div class="row">
         <h2>Моя книга</h2>
         <div class="book-section">
            <div class="container">
               <div class="right">
                     @php
                        $backCoverUrl = asset('img/book/061.jpg');
                     @endphp
                     <figure class="back" id="back-cover"></figure>
                     <figure class="front" style="background-image: url('{{ $backCoverUrl }}');"></figure>
               </div>
               @for ($i = 60; $i >= 2; $i -= 2)
                     @php
                        $backImageUrl = asset('img/book/' . str_pad($i, 3, '0', STR_PAD_LEFT) . '.jpg');
                        $frontImageUrl = asset('img/book/' . str_pad($i - 1, 3, '0', STR_PAD_LEFT) . '.jpg');
                     @endphp
                     <div class="right">
                        <figure class="back" style="background-image: url('{{ $backImageUrl }}');"></figure>
                        <figure class="front" style="background-image: url('{{ $frontImageUrl }}');"></figure>
                     </div>
               @endfor
               <div class="right">
                     @php
                        $backImageUrl = asset('img/book/002.jpg');
                        $frontImageUrl = asset('img/book/001.jpg');
                     @endphp
                     <figure class="back" style="background-image: url('{{ $backImageUrl }}');"></figure>
                     <figure class="front" id="cover" style="background-image: url('{{ $frontImageUrl }}');"></figure>
               </div>
            </div>
            <button onclick="turnLeft()">Prev</button>
            <button onclick="turnRight()">Next</button>
            <br />
            </div>
         </div>
      </div>
   </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="js/script.js"></script>
</html>