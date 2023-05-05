<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
			if(is_404()){
				echo 'Ошибка 404';
			}else{
				the_title();
			}
		?>
        </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <?php wp_head();?>
</head>
<body>
    <header class="header" id="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__logo">
                    <?php the_custom_logo();?>
                </div>
                <div class="header__nav">
                    <ul class="nav">
                        <li class="nav__item"><a class="nav__link" href="#section3">О компании</a></li>
                        <li class="nav__item"><a class="nav__link"  href="#section5">Тарифы</a></li>
                        <li class="nav__item"><a class="nav__link"  href="#section-1">Кому подойдет</a></li>
                    </ul>
                </div>
                <div class="header__tel">
                    <a class="tel" href="">8 800 555 35 35</a>
                </div>
            </div>
        </div>
    </header>
