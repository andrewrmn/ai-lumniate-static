<!doctype html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="shortcut icon" type="image/ico" href="build/img/favicon/apple-touch-icon.png" />
  <link rel="apple-touch-icon" href="build/img/favicon/apple-touch-icon.png" />
  <link rel="icon" href="build/img/favicon/favicon.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Instrument+Serif&family=Roboto+Mono&display=swap" rel="stylesheet">

  <style>
    :root {
      --color-brand: #034ea2;
      --color-brand-dark: #4AC7EB;
      --color-light: #F7F8FA;
      --color-dark: #11141F;
      --color-blue-gray: #535869;
      --color-black: #000000;
      --border-color: #EBEEF4;

      --color-blue: #034ea2;
      --color-blue-light: #4AC7EB;

      --color-dark-blue: #343C52;

      --spacing-1: clamp(24px, calc(1vw + 28px), 32px);
      --spacing-2: clamp(36px, calc(2vw + 28px), 48px);
      --spacing-3: clamp(48px, calc(3vw + 30px), 72px);
      --spacing-4: clamp(72px, calc(4vw + 40px), 96px);

      --risk-excellent: #034EA2;
      --risk-very-good: #00926B;
      --risk-good: #12CA98;
      --risk-fair: #FFB024;
      --risk-poor: #FF5C5C;

    }
  </style>
  <link rel="stylesheet" href="build/main.css?ver=1.0.0" media="all" />

</head>

<body>
<div id="page" class="site">
  <a class="screen-reader-text" href="#primary">Skip to content</a>

  <header class="site-header" id="site-header">
    <div class="site-header__inner wrapper">
      <div class="site-branding">
        <a href="/">
          <img src="build/img/ML-Commons-Logo.svg" alt="MLCommons" />
        </a>
      </div>

      <nav class="desktop-navigation">
        <ul>
            <?php include('nav-menu.php'); ?>
        </ul>
      </nav>

      <div class="desktop-utility">

        <button class="burger">
          <svg class="open" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M3 4H21V6H3V4ZM9 11H21V13H9V11ZM3 18H21V20H3V18Z" fill="currentColor" />
          </svg>
          <svg class="close" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M11.9997 10.5865L16.9495 5.63672L18.3637 7.05093L13.4139 12.0007L18.3637 16.9504L16.9495 18.3646L11.9997 13.4149L7.04996 18.3646L5.63574 16.9504L10.5855 12.0007L5.63574 7.05093L7.04996 5.63672L11.9997 10.5865Z" fill="currentColor"/>
          </svg>
        </button>
      </div>
    </div>
  </header>

  <?php include('navigation.php'); ?>

  <main id="content">

