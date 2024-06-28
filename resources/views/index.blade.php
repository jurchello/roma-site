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
            <h1>про мене</h1>
         </div>

        <div class="video-container">
<video width="485" height="365" controls>
            <source src="video/about.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        </div>
     <div class="clearfix">
     <p>Мене звати Рома, мені 8 років. Я навчаюся в другому класі нашої місцевої школи. У мене багато друзів у класі, 
        і ми разом весело проводимо час. Мені дуже подобаються уроки англійської мови і всесвіту, бо я люблю природу 
        та я знаю  що англіська мова є в багатьох країнах. Ще я обожнюю малювання, адже можу творити свої власні світи на папері.
         У вільний час я часто граю зі своїми іграшками.</p>
     <p> я люблю кататися на велосипеді.  
        Вдома я маю багато іграшок, але найбільше мені подобаються конструктори. З них можна будувати різні цікаві споруди та машини. 
        Ще я захоплююся динозаврами мені мама читає книги про пригоди та фантастику. Моя улюблена книга – про звіродухів.</p>

     <p>Я також люблю грати на комп'ютері, але мама завжди нагадує про важливість обмеження часу за екраном. 
        Разом з мамою ми часто дивимося мультфільми або сімейні фільми.</p>

     <p>На вихідних ми з мамою ходимо в парк або на екскурсії до цікавих місць. Я дуже люблю тварин, особливо левів.
         У нас вдома є собачка на ім'я Барні, і я люблю з ним гратися. Ще я ходжу в дитячий тренажерний зал, де тренуюся.
          Вечорами перед сном я зазвичай слухаю казки. Я мрію стати винахідником коли виросту. 
          Життя цікаве та повне пригод, і я завжди відкритий до нових знань і вражень.</p>
     </div>
      </div>
      @include('footer')
   </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="js/script.js"></script>
</html>