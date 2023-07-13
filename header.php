<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= get_template_directory_uri(  ) . './assets/css/style.css'; ?>">
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(  ); ?>
</head>
<body>
  
    <nav id="navbar">
      <div class="face">
        <div class="eyes">
          <div class="globe">
            <div class="eye"></div>
          </div>
          <div class="globe">
            <div class="eye"></div>
          </div>
        </div>
      </div>
      <?php wp_nav_menu( 
        array('menu' => 'menu-navegacao')
        ); 
      ?>
      <div class="menu-social">
        <a href="" class="menu-social__link">
          <img src="<?= get_template_directory_uri(  ) . './assets/img/brands/instagram.svg'; ?>" alt="" class="menu-social__logo">
        </a>
        <a href="" class="menu-social__link"><img src="<?= get_template_directory_uri(  ) . './assets/img/brands/twitter.svg'; ?>" alt="" class="menu-social__logo"></a>
        <a href="" class="menu-social__link"><img src="<?= get_template_directory_uri(  ) . './assets/img/brands/facebook.svg'; ?>" alt="" class="menu-social__logo"></a>
        <a href="" class="menu-social__link"><img src="<?= get_template_directory_uri(  ) . './assets/img/brands/linkedin.svg'; ?>" alt="" class="menu-social__logo"></a>
      </div>      
    </nav>
