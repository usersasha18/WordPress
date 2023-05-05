<?php get_header();?>

    <div class="intro" style="background-image: url(<?= CFS()->get('background_img');?>); background-position: top;
    background-repeat: no-repeat;">
            <div class="container">
                <div class="intro__wrapper">
                    <div class="circle-bg"><?= CFS()->get('circle_bg');?></div>
                    <div class="circle-bg__two"><?= CFS()->get('"circle_bg_two');?></div>
                    <div class="circle-bg__three"><?= CFS()->get('circle_bg_three');?></div>
                    <div class="circle-bg__four"><?= CFS()->get('circle_bg_four');?></div>
                    <h1 class="intro__title"><?= CFS()->get('header-title')?></h1>
                    <button class="intro__button"><?= CFS()->get('button-left')?></button>
                    <button class="intro__button"><?= CFS()->get('button-right')?></button>
                    <div class="intro__image">
                        <img src="<?= CFS()->get('inner_img');?>" alt="картинка">
                    </div>
                </div>
            </div>
        </div>

    <!-- /intro -->

    <section class="section-1" id="section-1" style="background-image: url(<?= CFS()->get('section_1_img')?>); background-position: top;
    background-repeat: no-repeat;">
        <div class="container">
            <h1 class="section-1__title">Кому подойдет?</h1>
            <p class="section-1__description">
                На самом деле, сейчас не стоит вопрос есть ли у тебя amoCRM, нужна она или нет. Использование crm-системы — стандарт в любой компании, в том числе, и у твоих конкурентов. Однако важно как система внедрена и как применяется.
            </p>
 
            <div class="cards">

                <div class="card">
                    <div class="card__wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="67" height="67" viewBox="0 0 67 67" fill="none">
                            <g clip-path="url(#clip0_525_411)">
                            <path d="M65.4724 15.209L57.5128 3.7118C56.7179 2.56758 55.6582 1.63248 54.4239 0.986186C53.1896 0.33989 51.8174 0.00155119 50.4242 0L16.5758 0C15.1826 0.00155119 13.8104 0.33989 12.5761 0.986186C11.3418 1.63248 10.2821 2.56758 9.4872 3.7118L1.5276 15.209C0.534958 16.6471 0.00227057 18.3526 0 20.1L0 58.3704C0 60.6591 0.909188 62.8541 2.52755 64.4725C4.14592 66.0908 6.34089 67 8.6296 67H58.3704C60.6591 67 62.8541 66.0908 64.4725 64.4725C66.0908 62.8541 67 60.6591 67 58.3704V20.1C66.9977 18.3526 66.465 16.6471 65.4724 15.209ZM50.4242 6.7C50.7354 6.69967 51.042 6.77514 51.3175 6.9199C51.593 7.06465 51.8291 7.27433 52.0054 7.5308L56.9902 14.74H36.8902V6.7H50.4242ZM14.9946 7.5308C15.1709 7.27433 15.407 7.06465 15.6825 6.9199C15.958 6.77514 16.2646 6.69967 16.5758 6.7H30.15V14.74H10.05L14.9946 7.5308ZM60.3 58.3704C60.3018 58.6243 60.2531 58.876 60.1567 59.1109C60.0604 59.3458 59.9183 59.5593 59.7388 59.7388C59.5593 59.9183 59.3458 60.0604 59.1109 60.1567C58.876 60.2531 58.6243 60.3018 58.3704 60.3H8.6296C8.3757 60.3018 8.12399 60.2531 7.88907 60.1567C7.65416 60.0604 7.44073 59.9183 7.2612 59.7388C7.08166 59.5593 6.93959 59.3458 6.84325 59.1109C6.74691 58.876 6.69822 58.6243 6.7 58.3704V23.115C6.7 22.6708 6.87647 22.2447 7.1906 21.9306C7.50472 21.6165 7.93076 21.44 8.375 21.44H58.625C59.0692 21.44 59.4953 21.6165 59.8094 21.9306C60.1235 22.2447 60.3 22.6708 60.3 23.115V58.3704Z" fill="#262626"/>
                            <path d="M43.5496 28.1396H23.4496C21.5995 28.1396 20.0996 29.6395 20.0996 31.4896C20.0996 33.3398 21.5995 34.8396 23.4496 34.8396H43.5496C45.3998 34.8396 46.8996 33.3398 46.8996 31.4896C46.8996 29.6395 45.3998 28.1396 43.5496 28.1396Z" fill="#262626"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_525_411">
                            <rect width="67" height="67" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                        <p class="card__text">Салоны красоты и сфера услуг</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card__wrapper">
                        <svg width="70" height="67" viewBox="0 0 70 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.3346 63.8743C26.0145 63.8743 27.3763 62.5125 27.3763 60.8327C27.3763 59.1528 26.0145 57.791 24.3346 57.791C22.6548 57.791 21.293 59.1528 21.293 60.8327C21.293 62.5125 22.6548 63.8743 24.3346 63.8743Z" stroke="#262626" stroke-width="4.86667" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M57.7917 63.8743C59.4715 63.8743 60.8333 62.5125 60.8333 60.8327C60.8333 59.1528 59.4715 57.791 57.7917 57.791C56.1118 57.791 54.75 59.1528 54.75 60.8327C54.75 62.5125 56.1118 63.8743 57.7917 63.8743Z" stroke="#262626" stroke-width="4.86667" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M0 0H12.1667L20.3183 40.7279C20.5965 42.1283 21.3583 43.3862 22.4704 44.2815C23.5826 45.1768 24.9742 45.6524 26.4017 45.625H55.9667C57.3941 45.6524 58.7857 45.1768 59.8979 44.2815C61.01 43.3862 61.7719 42.1283 62.05 40.7279L66.9167 15.2083H15.2083" stroke="#262626" stroke-width="4.86667" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        <p class="card__text">Интернет магазины</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card__wrapper">
                        <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M65.4724 15.209L57.5128 3.7118C56.7179 2.56758 55.6582 1.63248 54.4239 0.986186C53.1896 0.33989 51.8174 0.00155119 50.4242 0L16.5758 0C15.1826 0.00155119 13.8104 0.33989 12.5761 0.986186C11.3418 1.63248 10.2821 2.56758 9.4872 3.7118L1.5276 15.209C0.534958 16.6471 0.00227057 18.3526 0 20.1L0 58.3704C0 60.6591 0.909188 62.8541 2.52755 64.4725C4.14592 66.0908 6.34089 67 8.6296 67H58.3704C60.6591 67 62.8541 66.0908 64.4725 64.4725C66.0908 62.8541 67 60.6591 67 58.3704V20.1C66.9977 18.3526 66.465 16.6471 65.4724 15.209ZM50.4242 6.7C50.7354 6.69967 51.042 6.77514 51.3175 6.9199C51.593 7.06465 51.8291 7.27433 52.0054 7.5308L56.9902 14.74H36.8902V6.7H50.4242ZM14.9946 7.5308C15.1709 7.27433 15.407 7.06465 15.6825 6.9199C15.958 6.77514 16.2646 6.69967 16.5758 6.7H30.15V14.74H10.05L14.9946 7.5308ZM60.3 58.3704C60.3018 58.6243 60.2531 58.876 60.1567 59.1109C60.0604 59.3458 59.9183 59.5593 59.7388 59.7388C59.5593 59.9183 59.3458 60.0604 59.1109 60.1567C58.876 60.2531 58.6243 60.3018 58.3704 60.3H8.6296C8.3757 60.3018 8.12399 60.2531 7.88907 60.1567C7.65416 60.0604 7.44073 59.9183 7.2612 59.7388C7.08166 59.5593 6.93959 59.3458 6.84325 59.1109C6.74691 58.876 6.69822 58.6243 6.7 58.3704V23.115C6.7 22.6708 6.87647 22.2447 7.1906 21.9306C7.50472 21.6165 7.93076 21.44 8.375 21.44H58.625C59.0692 21.44 59.4953 21.6165 59.8094 21.9306C60.1235 22.2447 60.3 22.6708 60.3 23.115V58.3704Z" fill="#262626"/>
                            <path d="M43.5496 28.1396H23.4496C21.5995 28.1396 20.0996 29.6395 20.0996 31.4896C20.0996 33.3398 21.5995 34.8396 23.4496 34.8396H43.5496C45.3998 34.8396 46.8996 33.3398 46.8996 31.4896C46.8996 29.6395 45.3998 28.1396 43.5496 28.1396Z" fill="#262626"/>
                        </svg>  
                        <p class="card__text">Застройщики и агенства недвижимости</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card__wrapper">
                        <svg width="75" height="69" viewBox="0 0 75 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.0781 63.1871C37.3594 63.1871 37.6828 63.1168 38.0484 62.9762C38.4141 62.8355 38.7094 62.6527 38.9344 62.4277L67.3688 33.909C68.1 33.1777 68.6484 32.348 69.0141 31.4199C69.3797 30.4918 69.5625 29.5496 69.5625 28.5934C69.5625 27.6371 69.3797 26.6809 69.0141 25.7246C68.6484 24.7684 68.1 23.9246 67.3688 23.1934L52.1813 8.00586C51.45 7.27461 50.6063 6.72617 49.65 6.36055C48.6938 5.99492 47.7375 5.81211 46.7812 5.81211C45.825 5.81211 44.8828 5.99492 43.9547 6.36055C43.0266 6.72617 42.1969 7.27461 41.4656 8.00586L39.9469 9.52461L46.7812 16.4434C47.5125 17.2309 48.1594 18.1449 48.7219 19.1855C49.2844 20.2262 49.5656 21.3652 49.5656 22.6027C49.5656 24.7402 48.7359 26.6246 47.0766 28.2559C45.4172 29.8871 43.5187 30.7027 41.3812 30.7027C39.975 30.7027 38.8078 30.4918 37.8797 30.0699C36.9516 29.648 36.0938 29.0434 35.3063 28.2559L29.1469 22.0965L13.875 37.3684C13.5938 37.6496 13.3969 37.9449 13.2844 38.2543C13.1719 38.5637 13.1156 38.8871 13.1156 39.2246C13.1156 39.9559 13.3547 40.5605 13.8328 41.0387C14.3109 41.5168 14.9156 41.7559 15.6469 41.7559C15.9844 41.7559 16.3078 41.6715 16.6172 41.5027C16.9266 41.334 17.1938 41.1371 17.4188 40.9121L29.0625 29.2684L32.6063 32.8121L21.0469 44.3715C20.7656 44.6527 20.5687 44.9621 20.4562 45.2996C20.3438 45.6371 20.2875 45.9746 20.2875 46.3121C20.2875 46.9871 20.5406 47.5777 21.0469 48.084C21.5531 48.5902 22.1438 48.8434 22.8188 48.8434C23.1562 48.8434 23.4797 48.773 23.7891 48.6324C24.0984 48.4918 24.3656 48.309 24.5906 48.084L36.2344 36.4402L39.7781 39.984L28.2188 51.5434C27.9937 51.7684 27.8109 52.0637 27.6703 52.4293C27.5297 52.7949 27.4594 53.1465 27.4594 53.484C27.4594 54.159 27.7125 54.7496 28.2188 55.2559C28.725 55.7621 29.3156 56.0152 29.9906 56.0152C30.3281 56.0152 30.6375 55.959 30.9188 55.8465C31.2 55.734 31.4813 55.5371 31.7625 55.2559L43.4062 43.6121L46.95 47.1559L35.3063 58.7996C35.025 59.0809 34.8281 59.3902 34.7156 59.7277C34.6031 60.0652 34.5469 60.3746 34.5469 60.6559C34.5469 61.4434 34.7719 62.0621 35.2219 62.5121C35.6719 62.9621 36.2906 63.1871 37.0781 63.1871ZM37.0781 68.2496C35.2219 68.2496 33.5625 67.5606 32.1 66.1824C30.6375 64.8043 29.7656 63.1027 29.4844 61.0777C27.5719 60.7965 25.9688 60.009 24.675 58.7152C23.3812 57.4215 22.5938 55.8184 22.3125 53.9059C20.4 53.6246 18.8109 52.823 17.5453 51.5012C16.2797 50.1793 15.5063 48.5902 15.225 46.734C13.1438 46.4527 11.4281 45.609 10.0781 44.2027C8.72812 42.7965 8.05313 41.109 8.05313 39.1402C8.05313 38.184 8.23594 37.2277 8.60156 36.2715C8.96719 35.3152 9.51562 34.4715 10.2469 33.7402L29.1469 14.8402L38.4281 24.1215C38.8781 24.5715 39.3703 24.923 39.9047 25.1762C40.4391 25.4293 40.9594 25.5559 41.4656 25.5559C42.1969 25.5559 42.8859 25.2324 43.5328 24.5855C44.1797 23.9387 44.5031 23.2496 44.5031 22.5184C44.5031 22.1809 44.4047 21.8012 44.2078 21.3793C44.0109 20.9574 43.6875 20.5215 43.2375 20.0715L31.1719 8.00586C30.4406 7.27461 29.5969 6.72617 28.6406 6.36055C27.6844 5.99492 26.7281 5.81211 25.7719 5.81211C24.8156 5.81211 23.8734 5.99492 22.9453 6.36055C22.0172 6.72617 21.1875 7.27461 20.4562 8.00586L7.63125 20.8309C6.84375 21.6184 6.29531 22.448 5.98594 23.3199C5.67656 24.1918 5.49375 25.1621 5.4375 26.2309C5.38125 27.3559 5.59219 28.4387 6.07031 29.4793C6.54844 30.5199 7.125 31.4621 7.8 32.3059L4.17188 35.934C3.04688 34.6965 2.13281 33.2059 1.42969 31.4621C0.726563 29.7184 0.375 27.9465 0.375 26.1465C0.375 24.459 0.698438 22.8418 1.34531 21.2949C1.99219 19.748 2.90625 18.384 4.0875 17.2027L16.8281 4.46211C18.0656 3.22461 19.4719 2.31055 21.0469 1.71992C22.6219 1.1293 24.225 0.833984 25.8563 0.833984C27.4875 0.833984 29.0766 1.1293 30.6234 1.71992C32.1703 2.31055 33.5625 3.22461 34.8 4.46211L36.3187 5.98086L37.8375 4.46211C39.075 3.22461 40.4813 2.31055 42.0563 1.71992C43.6313 1.1293 45.2344 0.833984 46.8656 0.833984C48.4969 0.833984 50.0859 1.1293 51.6328 1.71992C53.1797 2.31055 54.5719 3.22461 55.8094 4.46211L70.9125 19.5652C72.15 20.8027 73.0781 22.209 73.6969 23.784C74.3156 25.359 74.625 26.9621 74.625 28.5934C74.625 30.2246 74.3156 31.8137 73.6969 33.3605C73.0781 34.9074 72.15 36.2996 70.9125 37.5371L42.4781 65.9715C41.7469 66.7027 40.9172 67.2652 39.9891 67.659C39.0609 68.0527 38.0906 68.2496 37.0781 68.2496Z" fill="#262626"/>
                        </svg>
                        <p class="card__text">Оптовая и розничная торговля</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card__wrapper">
                        <svg width="89" height="70" viewBox="0 0 89 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M44.5 3.125L2.78125 25.375L44.5 47.625L86.2188 25.375L44.5 3.125Z" stroke="#262626" stroke-width="5.5625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.4688 34.2754V53.1879C19.4688 59.3066 30.5938 67.0941 44.5 67.0941C58.4062 67.0941 69.5312 59.3066 69.5312 53.1879V34.2754" stroke="#262626" stroke-width="5.5625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p class="card__text">Образовательные центры</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card__wrapper">
                        <svg width="93" height="53" viewBox="0 0 93 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.3438 49.5625C25.159 49.5625 29.0625 45.659 29.0625 40.8438C29.0625 36.0285 25.159 32.125 20.3438 32.125C15.5285 32.125 11.625 36.0285 11.625 40.8438C11.625 45.659 15.5285 49.5625 20.3438 49.5625Z" stroke="#262626" stroke-width="5.8125" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M66.8438 49.5625C71.659 49.5625 75.5625 45.659 75.5625 40.8438C75.5625 36.0285 71.659 32.125 66.8438 32.125C62.0285 32.125 58.125 36.0285 58.125 40.8438C58.125 45.659 62.0285 49.5625 66.8438 49.5625Z" stroke="#262626" stroke-width="5.8125" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.625 20.5H69.75" stroke="#262626" stroke-width="5.8125" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M37.7812 3.0625L29.0625 20.5" stroke="#262626" stroke-width="5.8125" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M75.5625 40.8438H87.1875C88.9313 40.8438 90.0938 39.6813 90.0938 37.9375V32.125C90.0938 25.7312 84.8625 20.5 78.4688 20.5H69.75L58.7063 7.13125C56.3813 4.51562 53.1844 3.0625 49.6969 3.0625H27.6094C23.25 3.0625 19.1813 5.67812 17.1469 9.45625L11.625 20.5H8.71875C5.52187 20.5 2.90625 23.1156 2.90625 26.3125V37.9375C2.90625 39.6813 4.06875 40.8438 5.8125 40.8438H11.625" stroke="#262626" stroke-width="5.8125" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M29.0625 40.8438H58.125" stroke="#262626" stroke-width="5.8125" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>   
                        <p class="card__text">Автосалоны</p>
                    </div>
                </div>

            </div>
            
        </div>
    </section>
    <!-- section-1  -->

    <section class="section2" id="section2">
        <div class="container">
            <div class="section2__wrapper">
                <div class="text">
                    <h2 class="section2__text">Зачем вам CRM система?</h2>
                    <p class="section2__subtext">И правда. Сейчас мы объясним, зачем вам все-таки нужна СРМ система</p>
                </div>
    
                <div class="ticker">
    
                    <div class="section2__left">

                        

                        <div class="section2__card">
                            <img src="./assets/images/section-2.svg" alt="item1">
                            <h3 class="section2__card-title">Перестаньте терять заявки</h3>
                            <p class="section2__card-subtitle">
                                Все приходит и хранится в amoCRM, вся переписка и звонки сохраняются в одном месте, сотрудники помнят про каждого клиента
                            </p>
                        </div>
    
                        <div class="section2__card">
                            <img src="./assets/images/section2-2.svg" alt="item2">
                            <h3 class="section2__card-title">База клиентов в одном месте</h3>
                            <p class="section2__card-subtitle">
                                С amoCRM вся клиентская база находится   в одном месте в едином виде. В случае болезни или увольнения одного сотрудника ничего не потеряется
                            </p>
                        </div>
    
                        <div class="section2__card">
                            <img src="./assets/images/section2-3.svg" alt="item3">
                            <h3 class="section2__card-title">Автоматизация процессов</h3>
                            <p class="section2__card-subtitle">
                                Звонки, рассылки, документооборот - все ежедневные процессы, которые отнимают немало времени у менеджеров в amoCRM выполняются автоматически
                            </p>
                        </div>

                        <div class="section2__card">
                            <img src="./assets/images/section2-3.svg" alt="item3">
                            <h3 class="section2__card-title">Автоматизация процессов</h3>
                            <p class="section2__card-subtitle">
                                Звонки, рассылки, документооборот - все ежедневные процессы, которые отнимают немало времени у менеджеров в amoCRM выполняются автоматически
                            </p>
                        </div>

                        <div class="section2__card">
                            <img src="./assets/images/section2-3.svg" alt="item3">
                            <h3 class="section2__card-title">Автоматизация процессов</h3>
                            <p class="section2__card-subtitle">
                                Звонки, рассылки, документооборот - все ежедневные процессы, которые отнимают немало времени у менеджеров в amoCRM выполняются автоматически
                            </p>
                        </div>

                        <div class="section2__card">
                            <img src="./assets/images/section2-3.svg" alt="item3">
                            <h3 class="section2__card-title">Автоматизация процессов</h3>
                            <p class="section2__card-subtitle">
                                Звонки, рассылки, документооборот - все ежедневные процессы, которые отнимают немало времени у менеджеров в amoCRM выполняются автоматически
                            </p>
                        </div>

                        <div class="section2__card">
                            <img src="./assets/images/section2-3.svg" alt="item3">
                            <h3 class="section2__card-title">Автоматизация процессов</h3>
                            <p class="section2__card-subtitle">
                                Звонки, рассылки, документооборот - все ежедневные процессы, которые отнимают немало времени у менеджеров в amoCRM выполняются автоматически
                            </p>
                        </div>

                        <div class="section2__card">
                            <img src="./assets/images/section2-3.svg" alt="item3">
                            <h3 class="section2__card-title">Автоматизация процессов</h3>
                            <p class="section2__card-subtitle">
                                Звонки, рассылки, документооборот - все ежедневные процессы, которые отнимают немало времени у менеджеров в amoCRM выполняются автоматически
                            </p>
                        </div>

                        <div class="section2__card">
                            <img src="./assets/images/section2-3.svg" alt="item3">
                            <h3 class="section2__card-title">Автоматизация процессов</h3>
                            <p class="section2__card-subtitle">
                                Звонки, рассылки, документооборот - все ежедневные процессы, которые отнимают немало времени у менеджеров в amoCRM выполняются автоматически
                            </p>
                        </div>

                        
                    </div>
                    
                    <div class="section2__right">
    
                        <div class="section2__card">
                            <img src="./assets/images/section-2.svg" alt="item1">
                            <h3 class="section2__card-title">Перестаньте терять заявки</h3>
                            <p class="section3__card-subtitle">
                                Все приходит и хранится в amoCRM, вся переписка и звонки сохраняются в одном месте, сотрудники помнят про каждого клиента
                            </p>
                        </div>
    
                        <div class="section2__card">
                            <img src="./assets/images/section2-2.svg" alt="item2">
                            <h3 class="section2__card-title">База клиентов в одном месте</h3>
                            <p class="section3__card-subtitle">
                                С amoCRM вся клиентская база находится   в одном месте в едином виде. В случае болезни или увольнения одного сотрудника ничего не потеряется
                            </p>
                        </div>
    
                        <div class="section2__card">
                            <img src="./assets/images/section2-3.svg" alt="item3">
                            <h3 class="section2__card-title">Автоматизация процессов</h3>
                            <p class="section3__card-subtitle">
                                Звонки, рассылки, документооборот - все ежедневные процессы, которые отнимают немало времени у менеджеров в amoCRM выполняются автоматически
                            </p>
                        </div>

                        <div class="section2__card">
                            <img src="./assets/images/section2-3.svg" alt="item3">
                            <h3 class="section2__card-title">Автоматизация процессов</h3>
                            <p class="section3__card-subtitle">
                                Звонки, рассылки, документооборот - все ежедневные процессы, которые отнимают немало времени у менеджеров в amoCRM выполняются автоматически
                            </p>
                        </div>

                        <div class="section2__card">
                            <img src="./assets/images/section2-3.svg" alt="item3">
                            <h3 class="section2__card-title">Автоматизация процессов</h3>
                            <p class="section3__card-subtitle">
                                Звонки, рассылки, документооборот - все ежедневные процессы, которые отнимают немало времени у менеджеров в amoCRM выполняются автоматически
                            </p>
                        </div>

                        <div class="section2__card">
                            <img src="./assets/images/section2-3.svg" alt="item3">
                            <h3 class="section2__card-title">Автоматизация процессов</h3>
                            <p class="section3__card-subtitle">
                                Звонки, рассылки, документооборот - все ежедневные процессы, которые отнимают немало времени у менеджеров в amoCRM выполняются автоматически
                            </p>
                        </div>

                        <div class="section2__card">
                            <img src="./assets/images/section2-3.svg" alt="item3">
                            <h3 class="section2__card-title">Автоматизация процессов</h3>
                            <p class="section3__card-subtitle">
                                Звонки, рассылки, документооборот - все ежедневные процессы, которые отнимают немало времени у менеджеров в amoCRM выполняются автоматически
                            </p>
                        </div>

                        <div class="section2__card">
                            <img src="./assets/images/section2-3.svg" alt="item3">
                            <h3 class="section2__card-title">Автоматизация процессов</h3>
                            <p class="section3__card-subtitle">
                                Звонки, рассылки, документооборот - все ежедневные процессы, которые отнимают немало времени у менеджеров в amoCRM выполняются автоматически
                            </p>
                        </div>

                        <div class="section2__card">
                            <img src="./assets/images/section2-3.svg" alt="item3">
                            <h3 class="section2__card-title">Автоматизация процессов</h3>
                            <p class="section3__card-subtitle">
                                Звонки, рассылки, документооборот - все ежедневные процессы, которые отнимают немало времени у менеджеров в amoCRM выполняются автоматически
                            </p>
                        </div>
                    </div>
    
    
                </div>
            </div>
        </div>
    </section>

    <!-- section-2  -->

    <section class="section3" id="section3">
        <div class="container">
            <div class="section3__wrapper">
                <h1 class="section3__title">Почему мы?</h1>
            </div>

            <div class="section3__cards">
                <div class="section3__item">
                    <div class="section3__item-wrapper">
                        <h1 class="section3__card-title">Наш опыт</h1>
                        <p class="section3__card-subtitle">
                            Имеем большой опыт работы в сфере автоматизации и продаж. Знаем о всех болях в бизнесе не понаслышке.
                        </p>
                    </div>
                    <div class="section3__item-wrapper">
                        <h1 class="section3__card-title">Аудит</h1>
                        <p class="section3__card-subtitle">
                            Мы изучим слабые и сильные стороны твоего бизнесу и предложим лучше решение
                        </p>
                    </div>
                    <div class="section3__item-wrapper">
                        <h1 class="section3__card-title">Наши клиенты</h1>
                        <p class="section3__card-subtitle">
                            Большое количество довольных клиентов в разных отраслях, ощутивших пользу от работы с нами и использования наших сервисов)
                        </p>
                    </div>
                    <div class="section3__item-wrapper">
                        <h1 class="section3__card-title">Индивидуальный подход</h1>
                        <p class="section3__card-subtitle">
                            У нас нет ни одного шаблонного проекта - каждый из них индивидуален и мы делаем его, основываясь на твоём видении. Под копирку не работаем
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- section-3 -->

    <section class="section4" id="section4" style="background-image: url(<?= CFS()->get('background_img');?>); background-position: top;
    background-repeat: no-repeat;">
        <div class="container">
            <h1 class="section4__title">Сохрани свои нервы</h1>
            <div class="section4__items">
                <div class="section4__left">
                    <img src="<?= CFS()->get('left_img');?>" alt="...">
                    <p class="section4__text">Когда самостоятельно выстраиваешь сложные процессы</p>
                </div>
                <div class="arrow">
                    <img  src="<?= CFS()->get('middle_img');?>" alt="...">
                </div>
                <div class="section4__right">
                    <img src="<?= CFS()->get('right_img');?>" alt="...">
                    <p class="section4__text">когда внедрил amoCRM</p>
                </div>
            </div>
        </div>
    </section>

    <!-- section-4 -->

    <section class="section5" id="section5">
        <div class="container">
            <div class="section5__wrapper">
                <h1 class="section3__title">Тарифы</h1>
                <p class="section5__subtitle">У нас есть план для любого бизнеса</p>

                <div class="section5__card-items">
                    <div class="section5__card-item" style="margin-top:10%;">
                        <div>
                            <button class="button-more" id="section5__button">                          
                                <div>Подробнее</div>
                                <img 
                                src="./assets/images/arrow-bottom.svg" 
                                alt="..." id="ArrowImage" >
                            </button>
                        </div>
                    </div>
                    <div class="section5__card-item">
                        <p  class="item-title">Базовый</p>
                        <p  class="item-subtitle">Автоматизация продаж и работы сотрудников</p>
                        <h1 class="item-price">от 15 000 р</h1>
                        <button class="section5__button">Заказать</button>
                    </div>

                    <div class="section5__card-itemBlack" id="blackItem">
                        <div class="section5__block">Самый популярный</div>
                        <p  class="item-titleWhite">"Индивидуальный"</p>
                        <p  class="item-subtitle">Автоматизация продаж и работы сотрудников</p>
                        <h1 class="item-price">от 30 000 р</h1>
                        <button class="section5__buttonYellow">Заказать</button>
                    </div>

                    <div class="section5__card-item">
                        <p  class="item-title">"Профессиональный"</p>
                        <p  class="item-subtitle">Автоматизация + плотная работа системы с маркетингом</p>
                        <h1 class="item-price">от 50 000 р</h1>
                        <button class="section5__button">Заказать</button>
                    </div>
                </div>
                <div class="hiddenBlock hidden" id="hiddenBlock">
                    <div class="hiddenBlockWrapper">
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Экспресс анализ системы продаж</div>
                            <div class="list-item center"><img src="./assets/images/hiddenArrow.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/hiddenArrowWhite.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/hiddenArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Создание портала amoCRM</div>
                            <div class="list-item center"><img src="./assets/images/hiddenArrow.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/hiddenArrowWhite.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/hiddenArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Разработка и настройка 2-ух воронок и этапов продаж</div>
                            <div class="list-item center"><img src="./assets/images/hiddenArrow.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/hiddenArrowWhite.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/hiddenArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Добавление полей в карточки сделок, контактов и компаний</div>
                            <div class="list-item center"><img src="./assets/images/hiddenArrow.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/hiddenArrowWhite.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/hiddenArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Подключение корпоративной почты в amoCRM для каждого пользователя</div>
                            <div class="list-item center"><img src="./assets/images/hiddenArrow.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/hiddenArrowWhite.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/hiddenArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">
                                Интеграция с социальными сетями и мессенджерами (Instagram, VK, Facebook, Whatsapp, Telegram)
                            </div>
                            <div class="list-item center"><img src="./assets/images/hiddenArrow.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/hiddenArrowWhite.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/hiddenArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Детальный анализ бизнес процессов продажи</div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/goldArrow.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Написание технического задания нашим бизнес аналитиком</div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/goldArrow.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Настройка раздела "Аналитика"</div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/goldArrow.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Настройка функции «постановка целей»</div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/goldArrow.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Импорт базы клиентов в amoCRM</div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/goldArrow.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Настройка прав доступа сотрудников</div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/goldArrow.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Настройка обязательности заполнения полей</div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/goldArrow.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Маркетинг-рассылки(подключение sms/e-mail сервисов)</div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/goldArrow.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">
                                Настройка автоматических действий (digital pipeline) Автоворонки
                            </div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/goldArrow.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">
                                Обучения для руководителей и менеджеров до полной адаптации сотрудников с записью
                            </div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/goldArrow.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Техническая поддержка команды AtlantisGroup</div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/goldArrow.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Внедрение сквозной аналитики и маркетинга</div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/krestWhite.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">
                                Передача сделки в сети таргетированной рекламы в соцсетях в Adwords или Директ
                            </div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/krestWhite.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Настройка salesbot</div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/krestWhite.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Постоянное сопровождение персональным менеджером INNOLIX</div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/krestWhite.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">Оптимизация конверсии на основе данных рекламы и CRM</div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/krestWhite.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>
                        <div class="hiddenBlockWrapper__list">
                            <div class="list-item">
                                Оптимизация и автоматизация системы на основе маркетинговых показателей
                            </div>
                            <div class="list-item center"><img src="./assets/images/krest.svg" alt="..."></div>
                            <div class="list-item black center">
                                <img src="./assets/images/krestWhite.svg" alt="...">
                            </div>
                            <div class="list-item center"><img src="./assets/images/goldArrow.svg" alt="..."></div>
                        </div>

                    </div>
                    <div>
                        <button class="button-more" id="section5__button-close">                          
                            <div>свернуть</div>
                            <img 
                            src="./assets/images/ArrowUp.svg" 
                            alt="..." id="ArrowImageClose" >
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /section5  -->


    <div class="section_form">
        <div class="container">
            <div class="section_form__wrapper">
                <h1 class="section2__text">Заманивающий заголовок, вы точно им заинтересуетесь</h1>
                <p class="section_form__card-subtitle">Отсюда естественно следует, что теорема Гаусса - Остроградского осмысленно</p>
                <div class="section_form__input">
                    <form action="" class="form">
                        <input class="section_form__input-item" type="text" placeholder="Имя">
                        <input class="section_form__input-item" type="text" placeholder="Электронная почта">
                        <button class="section5__buttonYellow">Отправить заявку</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <section class="sectio6">
        <div class="container">
            <div class="section6__wrapper" style="margin-top: 70px;">
                <h1 class="section3__title">Мучают сомнения? Тогда потряси шарик!!!!</h1>
                <div class="section6__circle" id="circle">
                    <div class="inner__circle" id="circleInner">
                        <div class="innerCirle__text" id="innerText">
                            <h1 class="item-titleWhite" id="circleItem">Дорого</h1>
                            <p class="section3__card-subtitle" id="circleItemSub">Посмотри в предыдущем блоке,<br> скольких клиентов ты потерял.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer();?>