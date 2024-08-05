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
               <h1>мої малюнки</h1>
            </div>
            <div class="row">
               @include("picture-card", ["id" => 1, "pictureName" => "Три їжачка", "size" => "A4"])
               @include("picture-card", ["id" => 2, "pictureName" => "Ведмедик на морі", "size" => "A4"])
               @include("picture-card", ["id" => 3, "pictureName" => "Зебра малює себе", "size" => "A4"])
               @include("picture-card", ["id" => 4, "pictureName" => "Захід сонця", "size" => "A4"])
               @include("picture-card", ["id" => 5, "pictureName" => "Леопард на заборі", "size" => "A4"])
               @include("picture-card", ["id" => 6, "pictureName" => "Носоріг на приироді", "size" => "A5"])
               @include("picture-card", ["id" => 7, "pictureName" => "Захід сонця", "size" => "A4"])
               @include("picture-card", ["id" => 8, "pictureName" => "НЛО на 
               Землі", "size" => "A4"])
               @include("picture-card", ["id" => 9, "pictureName" => "Автомобіль везе квіти", "size" => "A4"])
               @include("picture-card", ["id" => 10, "pictureName" => "Кішка у квітах", "size" => "A4"])
               @include("picture-card", ["id" => 11, "pictureName" => "Кінь на галявині", "size" => "A4"])
               @include("picture-card", ["id" => 12, "pictureName" => "Млин", "size" => "A4"])
               @include("picture-card", ["id" => 13, "pictureName" => "Слон-Мороз", "size" => "A4"])
               @include("picture-card", ["id" => 14, "pictureName" => "Лебідь", "size" => "A4"])
               @include("picture-card", ["id" => 15, "pictureName" => "Чапля", "size" => "A4"])
               @include("picture-card", ["id" => 16, "pictureName" => "Ластівка", "size" => "A4"])
               @include("picture-card", ["id" => 17, "pictureName" => "Натюрморт", "size" => "A4"])
               @include("picture-card", ["id" => 18, "pictureName" => "Сніговик", "size" => "A4"])
               @include("picture-card", ["id" => 19, "pictureName" => "Сім'я на морі", "size" => "A4"])
               @include("picture-card", ["id" => 20, "pictureName" => "Небезпечна акула", "size" => "A4"])
               @include("picture-card", ["id" => 21, "pictureName" => "Панда", "size" => "A4"])
               @include("picture-card", ["id" => 22, "pictureName" => "Сонечки", "size" => "A4"])
               @include("picture-card", ["id" => 23, "pictureName" => "Лисичка", "size" => "A4"])
               @include("picture-card", ["id" => 24, "pictureName" => "Повітряна куля", "size" => "A4"])
               @include("picture-card", ["id" => 25, "pictureName" => "На березі річки", "size" => "A4"])
               @include("picture-card", ["id" => 26, "pictureName" => "Відпочинок єнота", "size" => "A4"])
               @include("picture-card", ["id" => 27, "pictureName" => "Морозиво", "size" => "A4"])
               @include("picture-card", ["id" => 28, "pictureName" => "Загадковий місяць", "size" => "A4"])
               @include("picture-card", ["id" => 29, "pictureName" => "Під парасолькою", "size" => "A4"])
               @include("picture-card", ["id" => 30, "pictureName" => "Людина на ведмеді", "size" => "A4"])
               @include("picture-card", ["id" => 31, "pictureName" => "Тукан", "size" => "A4"])
               @include("picture-card", ["id" => 32, "pictureName" => "Шлях до домівки на Місяці", "size" => "A4"])
               @include("picture-card", ["id" => 33, "pictureName" => "Хеловін", "size" => "A4"])
               @include("picture-card", ["id" => 34, "pictureName" => "Працьовита білка", "size" => "A4"])
               @include("picture-card", ["id" => 35, "pictureName" => "Рожере поросятко і птах", "size" => "A4"])
               @include("picture-card", ["id" => 36, "pictureName" => "Зимовий табір", "size" => "A4"])
               @include("picture-card", ["id" => 37, "pictureName" => "Сліди на снігу", "size" => "A4"])
               @include("picture-card", ["id" => 38, "pictureName" => "Черепаха у воді", "size" => "A4"])
               @include("picture-card", ["id" => 39, "pictureName" => "Захід сонця", "size" => "A4"])
               @include("picture-card", ["id" => 40, "pictureName" => "Лисичка під дощем", "size" => "A4"])
               @include("picture-card", ["id" => 41, "pictureName" => "Гарі Поттер. Снітч", "size" => "A5"])
               @include("picture-card", ["id" => 42, "pictureName" => "Гарі Поттер. Герб Гріфіндора", "size" => "A5"])
               @include("picture-card", ["id" => 43, "pictureName" => "Гарі Поттер. Шведська короткорилка", "size" => "A5"])
               @include("picture-card", ["id" => 44, "pictureName" => "Жиирафа і колібрі", "size" => "A5"])
               @include("picture-card", ["id" => 45, "pictureName" => "Восьминіг на охоті", "size" => "A3"])
               @include("picture-card", ["id" => 46, "pictureName" => "Підготовка до Різдва", "size" => "A3"])
               @include("picture-card", ["id" => 47, "pictureName" => "Подарунки дітям", "size" => "A3"])
               @include("picture-card", ["id" => 48, "pictureName" => "Різдвяний олень", "size" => "A3"])
               @include("picture-card", ["id" => 49, "pictureName" => "Поні", "size" => "A3"])
               @include("picture-card", ["id" => 50, "pictureName" => "Такса грається", "size" => "A3"])
               @include("picture-card", ["id" => 51, "pictureName" => "Заєць на хмаринці", "size" => "A3"])
               @include("picture-card", ["id" => 52, "pictureName" => "Пасхальний заєць", "size" => "A3"])
               @include("picture-card", ["id" => 53, "pictureName" => "Працьовита білка", "size" => "A3"])
               @include("picture-card", ["id" => 54, "pictureName" => "Зимовий будинок", "size" => "A3"])
               @include("picture-card", ["id" => 55, "pictureName" => "Кавун", "size" => "A3"])
               @include("picture-card", ["id" => 56, "pictureName" => "Годівничка в лісі", "size" => "A3"])
               @include("picture-card", ["id" => 57, "pictureName" => "Вечерній міст", "size" => "A3"])
               @include("picture-card", ["id" => 58, "pictureName" => "Ранкова сова", "size" => "A3"])
               @include("picture-card", ["id" => 59, "pictureName" => "Космічна подорож", "size" => "A3"])
               @include("picture-card", ["id" => 60, "pictureName" => "Сумний вечір", "size" => "A3"])
               @include("picture-card", ["id" => 61, "pictureName" => "Переліт гусей", "size" => "A3"])
               @include("picture-card", ["id" => 62, "pictureName" => "Поні", "size" => "A3"])
               @include("picture-card", ["id" => 63, "pictureName" => "Дім на киті", "size" => "A3"])
               @include("picture-card", ["id" => 64, "pictureName" => "Лісова пригода", "size" => "A3"])
               @include("picture-card", ["id" => 65, "pictureName" => "Веселий заєць", "size" => "A3"])
               @include("picture-card", ["id" => 66, "pictureName" => "Їжача пригода", "size" => "A3"])
               @include("picture-card", ["id" => 67, "pictureName" => "Ведмежий холод", "size" => "A3"])
               @include("picture-card", ["id" => 68, "pictureName" => "Працьовитий їжак", "size" => "A3"])
               @include("picture-card", ["id" => 69, "pictureName" => "Пасхальний заєць", "size" => "A3"])
               @include("picture-card", ["id" => 70, "pictureName" => "Киця-Мороз", "size" => "A3"])
               @include("picture-card", ["id" => 71, "pictureName" => "Ранкова веселка", "size" => "A3"])
               @include("picture-card", ["id" => 72, "pictureName" => "Снігур", "size" => "A3"])
               @include("picture-card", ["id" => 73, "pictureName" => "Зубастий крокодил", "size" => "A3"])
               @include("picture-card", ["id" => 74, "pictureName" => "Квіти в вазоні", "size" => "A3"])
               @include("picture-card", ["id" => 75, "pictureName" => "Милий пес", "size" => "A3"])
               @include("picture-card", ["id" => 76, "pictureName" => "Киця-водій", "size" => "A3"])
               @include("picture-card", ["id" => 77, "pictureName" => "Ведмідь на охоті", "size" => "A3"])
               @include("picture-card", ["id" => 78, "pictureName" => "Весела акула", "size" => "A3"])
               @include("picture-card", ["id" => 79, "pictureName" => "Танок дельфінів", "size" => "A3"])
               @include("picture-card", ["id" => 80, "pictureName" => "На острові", "size" => "A3"])
               @include("picture-card", ["id" => 81, "pictureName" => "Кіт-чарівник", "size" => "A3"])
               @include("picture-card", ["id" => 82, "pictureName" => "Іграшка-переливалка", "size" => "A3"])
               @include("picture-card", ["id" => 83, "pictureName" => "Ведмедик п'є чай", "size" => "A3"])
               @include("picture-card", ["id" => 84, "pictureName" => "Коктейль", "size" => "A3"])
               @include("picture-card", ["id" => 85, "pictureName" => "Працьовита білка", "size" => "A3"])
               @include("picture-card", ["id" => 86, "pictureName" => "Дитинча динозавра", "size" => "A3"])
               @include("picture-card", ["id" => 87, "pictureName" => "Зайчик", "size" => "A3"])
               @include("picture-card", ["id" => 88, "pictureName" => "Мікімаус", "size" => "A3"])
               @include("picture-card", ["id" => 89, "pictureName" => "Безкрая подорож", "size" => "A3"])
               @include("picture-card", ["id" => 90, "pictureName" => "Найвища жирафа", "size" => "A3"])
               @include("picture-card", ["id" => 91, "pictureName" => "Бегемот", "size" => "A3"])
               @include("picture-card", ["id" => 92, "pictureName" => "Мій дім", "size" => "A3"])
               @include("picture-card", ["id" => 93, "pictureName" => "Качки на водопої", "size" => "A3"])
               @include("picture-card", ["id" => 94, "pictureName" => "Різдвяний пінгвін", "size" => "A3"])
               @include("picture-card", ["id" => 95, "pictureName" => "Заєць і кавун", "size" => "A3"])
               @include("picture-card", ["id" => 96, "pictureName" => "Золота рибка", "size" => "A3"])
               @include("picture-card", ["id" => 97, "pictureName" => "Різнобарвний слон", "size" => "A3"])
               @include("picture-card", ["id" => 98, "pictureName" => "Ведмежа", "size" => "A3"])
               @include("picture-card", ["id" => 99, "pictureName" => "Людина на морі", "size" => "A3"])
               @include("picture-card", ["id" => 100, "pictureName" => "Кактус", "size" => "A3"])
               @include("picture-card", ["id" => 101, "pictureName" => "Кактуси", "size" => "A3"])
               @include("picture-card", ["id" => 102, "pictureName" => "Павич", "size" => "A3"])
               @include("picture-card", ["id" => 103, "pictureName" => "Ведмідь", "size" => "A3"])
               @include("picture-card", ["id" => 104, "pictureName" => "Чай на столі", "size" => "A3"])
               @include("picture-card", ["id" => 105, "pictureName" => "Півень", "size" => "A3"])
               @include("picture-card", ["id" => 106, "pictureName" => "Паска", "size" => "A3"])
               @include("picture-card", ["id" => 107, "pictureName" => "Дівчинка-олень", "size" => "A3"])
               @include("picture-card", ["id" => 108, "pictureName" => "Куль-баба", "size" => "A3"])
               @include("picture-card", ["id" => 109, "pictureName" => "Дім мурах", "size" => "A3"])
               @include("picture-card", ["id" => 110, "pictureName" => "На мосту", "size" => "A3"])
               @include("picture-card", ["id" => 111, "pictureName" => "Олівець", "size" => "A3"])
            </div>
         </div>
      </div>
      @include('footer')
   </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script>
      img = document.getElementById("img1");
      function enlargeImg() {
      // Set image size to 1.5 times original
      img.style.transform = "scale(2.5)";
      // Animation effect
      img.style.transition = "transform 0.25s ease";
      }
   </script>
   <script src="js/script.js"></script>
</html>