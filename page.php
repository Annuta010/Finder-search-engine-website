<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finder - интересы</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body> 
    <div class="wrapper">
        <div class="overlay hidden"></div>
        <div class="content">
            <?php 
                require_once('templates/header.html');
            ?>
            <main>
                <div class="container">
                    <section class="filters">
                        <div class="search-region">
                            <label>
                                <input type="checkbox" class="toggle" name="activate-search-region" id="search-region-activator">
                                Регион
                                <select name="region" id="search-region">
                                    <option value="Russia" selected>Россия</option>
                                    <option value="Europe">Европа</option>
                                    <option value="USA">США</option>
                                </select>
                            </label>
                        </div>
                        <label>
                            <input type="checkbox" class="toggle" name="activate-safe-mode" id="safe-mode">
                            Скрывать непристойные результаты
                        </label>
                        <select name="date-filter" id="post-date-filter">
                            <option value="all" selected>За все время</option>
                            <option value="new">Сначала новые</option>
                            <option value="old">Сначала старые</option>
                        </select>
                    </section>
                    <ul class="tags">
                        <li class="tags-item active">Подписки</li>
                        <li class="tags-item">Популярное</li>
                        <li class="tags-item">Лучшее</li>
                        <li class="tags-item">Рекомендации</li>
                    </ul>
                    <section class="flex-container">
                        <ul class="post-list">
                            <li class="post interest-post open-popup">
                                <a class="ver-post" href="post1">
                                    <div class="description">
                                        <img src="img/favicon1.png" alt="Пользователь1">
                                        <div class="source-info">
                                            <p class="">Пользователь1</p>
                                            <p class="date-time source">01.03.2021</p>                                        
                                        </div>
                                    </div>
                                    <div class="image"><img src="img/fight-club.png" alt="Бойцовский клуб"></div>
                                    <p class="title">
                                        Общество потребления
                                    </p>
                                    <p class="post-cont">
                                        Нам внушили, что возможность покупать все больше разных удобных и красивых вещей — это хорошо. Это наша награда за нашу цивилизованность и прогресс. Но мы уже доказали сами себе, что мы не цивилизованы. И что наш прогресс в общей картине мира остается на одном месте, потому что пока одни богатеют - другие беднеют, пока растут города - растут и зоны экологического загрязнения. Такой прогресс все равно что удлинение одной ноги за счет укорачивания другой.
                    Мы покупаем вещи согласно моде, а не их реальной надобности мы покупаем новые автомобили...
                                    </p>
                                    <div class="social-btns">
                                        <button><img src="icons/message.svg" alt="Комментарий"></button><span>1</span>
                                        <button><img src="icons/heart.svg" alt="Лайк"></button><span>12</span>
                                    </div>
                                </a>
                            </li>
                            <li class="post interest-post open-popup">
                                <a class="ver-post" href="post2">
                                    <div class="description">
                                        <img src="img/favicon2.png" alt="Пользователь2">
                                        <span></span>
                                        <div class="source-info">
                                            <p class="">Пользователь2</p>
                                            <p class="date-time source">10.01.2021</p>                                        
                                        </div>
                                    </div>
                                    <p class="title">
                                        Genshin Impact гайд на Диону
                                    </p>
                                    <p class="post-cont">
                                        В лоре игры Диона – это бармен таверны «Кошкин хвост». Четырехзвездочный саппорт и лучник, ее элемент – Крио
                    Благодаря своим особенностям Диона становится одним из лучших хиллеров в игре по мнению девяти отаку из десяти. Диону за свою специфику можно поставить в один ряд с Барбарой. На минутку, одной... 
                                    </p>
                                    <div class="social-btns">
                                        <button><img src="icons/message.svg" alt="Комментарий"><span>4</span></button>
                                        <button><img src="icons/heart.svg" alt="Лайк"><span>21</span></button>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <aside>
                            <section>
                                <h3>Теги</h3>
                                <ul class="aside-tags">
                                    <li class="active">
                                        <span>Кино</span>
                                    </li>
                                    <li class="active">
                                        <span>Туризм</span>
                                    </li>
                                    <li class="active">
                                        <span>Политика</span>
                                    </li>
                                    <li class="active">
                                        <span>Кино</span>
                                    </li>
                                    <li class="active">
                                        <span>Путешествия</span>
                                    </li>
                                    <li class="active">
                                        <span>Кино</span>
                                    </li>
                                    <li class="active">
                                        <span>Туризм</span>
                                    </li>
                                    <li class="">
                                        <span>Политика</span>
                                    </li>
                                    <li class="">
                                        <span>Кино</span>
                                    </li>
                                    <li class="">
                                        <span>Путешествия</span>
                                    </li>
                                </ul>                                
                            </section>
                            <section>
                                <h3>Подписки</h3>
                                <ul class="subscribes">
                                    <li>
                                        <img src="img/favicon1.png" alt="Пользователь1">
                                        <span>Марина Королева</span>
                                    </li>
                                    <li>
                                        <img src="img/favicon2.png" alt="Пользователь2">
                                        <span>Невероятно и невообразимо длинное имя пользователя</span>
                                    </li>
                                    <li>
                                        <img src="img/favicon3.png" alt="Пользователь3">
                                        <span>Алексей Мирный</span>
                                    </li>
                                </ul>
                            </section>   
                        </aside>
                    </section> 
                </div>
                <div class="popup-cover hidden">
                <div class="popup-overlay hidden"></div>
                    <article class="modal popup" id="interest">
                        <button id="cross" class="cross">
                            <img src="icons/close big.svg" alt="">
                        </button>
                        <section id="interest-cont">
                            <div class="description">
                                <img src="img/favicon1.png" alt="Пользователь1">
                                <div class="source-info">
                                    <p class="">Пользователь1</p>
                                    <p class="date-time source">01.03.2021</p>                                        
                                </div>
                            </div>
                            <div class="image"><img src="img/fight-club.png" alt="Бойцовский клуб"></div>
                            <p class="title">
                                Общество потребления
                            </p>
                            <p class="popup-post-cont">
                                Нам внушили, что возможность покупать все больше разных удобных и красивых вещей — это хорошо. Это наша награда за нашу цивилизованность и прогресс. Но мы уже доказали сами себе, что мы не цивилизованы. И что наш прогресс в общей картине мира остается на одном месте, потому что пока одни богатеют - другие беднеют, пока растут города - растут и зоны экологического загрязнения. Такой прогресс все равно что удлинение одной ноги за счет укорачивания другой.
    
                                Мы покупаем вещи согласно моде, а не их реальной надобности мы покупаем новые автомобили...абсолютно все. 
                            </p>
                            <section class="info-sec">
                                <ul class="tags">
                                    <li class="tags-item active">Кино</li>
                                    <li class="tags-item active">Бойцовский клуб</li>
                                </ul>
                                <button><img src="icons/heart.svg" alt="Лайк"><span>12</span></button>
                            </section>
                        </section>

                        <section class="comment-section">
                            <div class="control-panel">
                                <div class="controls">
                                    <button class="tab-heading title added" id="view-items">
                                        Комментарии
                                        <span class="comment-q-output">1</span>
                                    </button>
                                    <button class="tab-heading title" id="add-item">Комментировать</button>                                    
                                </div>
 
                                <ul class="items" id="comments">
                                    <li>
                                        <aside class="avatar">
                                            <img src="img/favicon2.png" alt="" class="comment-user-avatar">
                                        </aside>
                                        <figure class="comment-content">
                                            <figure class="comment-info">
                                                <p class="name">blackJack</p>
                                                <p class="time">15:00</p>                                                
                                            </figure>
                                            <figure class="comment">
                                                <p class="comment-text">Люди — рабы своих вещей</p>
                                                <ul class="comment-photos">
                                                    <li>
                                                        <img src="img/fight-club-comment.png" alt="" class="comment-photo">
                                                    </li>
                                                </ul>
                                            </figure>
                                            <figure class="comment-buttons">
                                                <button>
                                                    <div class="img active">
                                                        <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.5 12.5658C7.31493 12.5658 7.1365 12.4988 6.99744 12.377C6.47227 11.9178 5.96595 11.4862 5.51923 11.1056L5.51695 11.1036C4.20725 9.9875 3.07628 9.02365 2.28937 8.07418C1.40972 7.01273 1 6.00633 1 4.90689C1 3.8387 1.36628 2.85322 2.0313 2.13187C2.70425 1.40199 3.62763 1 4.63165 1C5.38206 1 6.0693 1.23724 6.67421 1.70509C6.97949 1.94124 7.25621 2.23026 7.5 2.56738C7.74389 2.23026 8.02051 1.94124 8.32589 1.70509C8.9308 1.23724 9.61803 1 10.3684 1C11.3724 1 12.2959 1.40199 12.9688 2.13187C13.6338 2.85322 14 3.8387 14 4.90689C14 6.00633 13.5904 7.01273 12.7107 8.07408C11.9238 9.02365 10.7929 9.98741 9.48344 11.1034C9.03593 11.4847 8.52882 11.9169 8.00246 12.3772C7.8635 12.4988 7.68497 12.5658 7.5 12.5658ZM4.63165 1.76152C3.84286 1.76152 3.11823 2.07633 2.59108 2.64801C2.05609 3.22833 1.76142 4.03052 1.76142 4.90689C1.76142 5.83157 2.10509 6.65855 2.87563 7.58828C3.62039 8.48698 4.72816 9.43099 6.01078 10.5241L6.01316 10.5261C6.46156 10.9082 6.96987 11.3414 7.49891 11.804C8.03112 11.3406 8.54022 10.9066 8.98952 10.5239C10.272 9.43079 11.3797 8.48698 12.1245 7.58828C12.8949 6.65855 13.2386 5.83157 13.2386 4.90689C13.2386 4.03052 12.9439 3.22833 12.4089 2.64801C11.8819 2.07633 11.1571 1.76152 10.3684 1.76152C9.79061 1.76152 9.26009 1.94521 8.79165 2.30742C8.37419 2.63036 8.08339 3.03859 7.9129 3.32424C7.82522 3.47113 7.67089 3.5588 7.5 3.5588C7.32911 3.5588 7.17478 3.47113 7.0871 3.32424C6.91671 3.03859 6.62591 2.63036 6.20835 2.30742C5.73991 1.94521 5.20939 1.76152 4.63165 1.76152Z" fill="#C4C4C4" stroke="#1A91FF" stroke-width="0.1"/>
                                                        </svg>
                                                    </div>
                                                    <span>5</span></button>
                                                <button><img src="icons/reply.svg" alt=""></button>
                                            </figure>
                                        </figure>

                                    </li>
                                </ul>
                                <form action="" class="hidden new-item" id="new-comment">
                                    <textarea rows="30" name="comm-input" id="new-com-input">Комментарий</textarea>
                                    <button id="new-comment-send" class="title">Отправить</button>
                                </form>
                            </div>
                        </section>
                    </article>
                </div>
                
            </main>   
        </div>
        <?php 
                require_once('templates/footer.html');
        ?>
    </div>
    <script src="js/index.js"></script>
    <script src="js/pictures.js"></script>
    <script src="js/interest.js"></script>
</body>
</html>