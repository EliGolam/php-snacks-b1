<?php
  /* SNACK 1 */
  $games = [
    [
      'homeTeam' => "Grave Falcons",
      'awayTeam' => "Heavenly Lions",
      'homeScore' => rand(30, 100),
      'awayScore' => rand(30, 100)
    ],
    [
      'homeTeam' => "Loyal Foxes",
      'awayTeam' => "Gotham Predators",
      'homeScore' => rand(30, 100),
      'awayScore' => rand(30, 100)
    ],
    [
      'homeTeam' => "Voodoo Jets",
      'awayTeam' => "Lady Commanders",
      'homeScore' => rand(30, 100),
      'awayScore' => rand(30, 100)
    ],
    [
      'homeTeam' => "Crimson Girls",
      'awayTeam' => "Pink SuperSonics",
      'homeScore' => rand(30, 100),
      'awayScore' => rand(30, 100)
    ]
  ];

  /* SNACK 2 */
  $snack2Values = [
    'name' => "", 
    'age' => "", 
    'email' => "",
    'isSuccessful' => False
  ];

  $snack2Parameters = ["name", "age", "email"];

  foreach($snack2Parameters as &$parameter) {
    if (isset($_GET[$parameter])) {
      $snack2Values[$parameter] = trim($_GET[$parameter]);
    }
  }

  // Deconstructing for easier readability
  ['name' => $name, 'age' => $age, 'email' => $email] = $snack2Values;
  
  // Check Booleans
  $isValidName = strlen($name) >= 3;
  $isValidAge = is_int(intval($age));
  $isValidEmail = strpos($email, '@') && strpos($email, '.');

  // Verify inputs
  if( $isValidName && $isValidAge && $isValidEmail ) {
    $snack2Values['isSuccessful'] = True;
  };

  if ( $snack2Values['isSuccessful'] ) {
    $accessMessage = "Access Successful";
  } else {
    $accessMessage = "Unable to access";
  };


  /* SNACK 3 */
  $posts = [

    '10/01/2019' => [
      [
          'title' => 'Post 1',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 1'
      ],
      [
          'title' => 'Post 2',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 2'
      ],
    ],
    '10/02/2019' => [
      [
          'title' => 'Post 3',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 3'
      ]
    ],
    '15/05/2019' => [
      [
          'title' => 'Post 4',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 4'
      ],
      [
          'title' => 'Post 5',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 5'
      ],
      [
          'title' => 'Post 6',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 6'
      ]
    ],
  ];

  $postDates = array_keys($posts);

?><!DOCTYPE html>
<html lang="en">
<!-- METADATA -->
<head>
    <title>PHP Practice | Mini coding challenges</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--#region FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700;900&display=swap" rel="stylesheet"> 

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--#endregion FONTS -->

    <!--#region Stylesheets and Scripts -->
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

     <!-- VUEJS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.7.10/vue.min.js" integrity="sha512-H8u5mlZT1FD7MRlnUsODppkKyk+VEiCmncej8yZW1k/wUT90OQon0F9DSf/2Qh+7L/5UHd+xTLrMszjHEZc2BA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <!-- AXIOS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="./stylesheets/css-reset.css" type="text/css" />
    <link rel="stylesheet" href="./stylesheets/style.css" type="text/css" />

    <!-- My Scripts -->
    <script src="./scripts/script.js" type="text/javascript" defer></script>
    <!--#endregion Stylesheets and Scripts -->

    <!--#region META -->
    <meta name="searchtitle" content="Boolean">
    <meta name="keywords" content="Boolean, Programming, Coding">
    <meta name="description" content="Learn, Practice, Improve - with Boolean Careers">
    <!--#endregion META -->
    
</head>

<!-- BODY -->
<body>
  <header class="container">
    <h1 class="title">PHP Practice | Mini coding challenges</h1>
    <p class="subtitle">by Elias Mahfuzul</p>

    <nav class="top-nav">
      <ul class="nav-links">
        <li class="nav-link"><a href="#snack1">Challenge 1</a></li>
        <li class="nav-link"><a href="#snack2">Challenge 2</a></li>
        <li class="nav-link"><a href="#snack3">Challenge 3</a></li>
        <li class="nav-link"><a href="#snack4">Challenge 4</a></li>
        <li class="nav-link"><a href="#snack5">Challenge 5</a></li>
      </ul>
    </nav>
  </header>

  <main class="container flow">
      <section id="snack1">
        <h2>Mini Challenge 1</h2>
        
        <!-- DEBUG OUTPUT TESTING -->
        <!-- <article>
          <h3>Test Outputs</h3>
          <p><?php var_dump($games) ?></p>
        </article> -->

        <article>
          <h3>Games</h3>

          <!-- PHP -->
          <?php 
            foreach($games as ['homeTeam' => $homeTeam, 'awayTeam' => $awayTeam, 'homeScore' => $homeScore, 'awayScore' => $awayScore]) {
              $formatGameScore = $homeTeam . " - " . $awayTeam . " | " . $homeScore . " - " . $awayScore;

              ?><p><?= $formatGameScore ?></p><?php
            }
          ?>
        </article>
      </section>

      <hr />

      <section id="snack2">
        <h2>Mini Challenge 2</h2>
        <p>URL parameters: <em>name</em>, <em>age</em>, <em>email</em></p>
            
        <article>
          <h3>VarDump Outputs for testing</h3>
          <p><?php var_dump($snack2Values) ?></p>
        </article>
        
        <article>
          <h3>Login Values</h3>
          <p>Name: <?= $name ?></p>
          <p>Age: <?= $age ?></p>
          <p>Email: <?= $email ?></p>
          <p><strong><?= $accessMessage ?></strong></p>
        </article>
      </section>

      <section id="snack3">
            <h2>Mini Challenge 3</h2>
            <p>Pseudo blogposts</p>

            <?php 
              foreach ($postDates as &$date) {
                ?><h3 class="post-date"><?= $date ?></h3><?php

                foreach ($posts[$date] as &$post) {
                  ?><article>
                    <h4 class="post-title"><?= $post['title'] ?></h4>
                    <p class="post-author">written by <?= $post['author'] ?></p>
                    <p class="post-content"><?= $post['text'] ?></p>
                  </article><?php
                }
              }
            ?>
      </section>
  </main>
</body>
</html>