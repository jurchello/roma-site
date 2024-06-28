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
      @include("navbar")
      <div class="container">
      <div class="row">
            <h1>мої програми на scratch</h1>
         </div>
         <div class="row row-long-2">
            <div class="col">
               <video width="485" height="365" controls>
                  <source src="video/1.mp4" type="video/mp4">
                  Your browser does not support the video tag.
               </video>
            </div>
            <div class="col">
               Ця програма допомагає вивчати тварин англіською мовою.
            </div>
         </div>
         <div class="row row-long-1">
            <div class="col">
               Треба стрибати по каменях щоб дійти до дверей.
            </div>
            <div class="col">
               <video width="485" height="365" controls>
                  <source src="video/2.mp4" type="video/mp4">
                  Your browser does not support the video tag.
               </video>
            </div>
         </div>
         <div class="row row-long-2">
            <div class="col">
               <video width="485" height="365" controls>
                  <source src="video/3.mp4" type="video/mp4">
                  Your browser does not support the video tag.
               </video>
            </div>
            <div class="col">
               Це гра про зомбі. Тут можна робити справжні дива.
            </div>
         </div>
         <div class="row row-long-1">
            <div class="col">
               Гра-стрілялка. Ти керуєш літаком, знищуєш противників.
            </div>
            <div class="col">
               <video width="485" height="365" controls>
                  <source src="video/4.mp4" type="video/mp4">
                  Your browser does not support the video tag.
               </video>
            </div>
         </div>
         <p class="mt-2">Решту моїх програм дивися за посиланням <a href="https://scratch.mit.edu/mystuff/">Мої програми</a></p>
      </div>
      @include('footer')
   </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="js/script.js"></script>
</html>