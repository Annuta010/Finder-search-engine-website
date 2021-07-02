<?php
    //require_once("php/connect.php");
    $mysqli = new mysqli("localhost", "root", "", "finder");
    $query = "SELECT * FROM `news`";
    $results = [];
    $res = $mysqli->query($query);

    while ($result = mysqli_fetch_assoc($res)) {
        array_push($results, $result);
    }
    $mysqli->close();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finder - новости</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body> 
    <div class="wrapper">
        <div class="overlay hidden"></div>
        <div class="content">
           <header>
                <div class="container">
                    <form id="search-bar" action=" " method="GET">
                        <section class="logo">
                            <a href="index.html">
                                <img src="img/logo2.svg" alt="logo">
                            </a>
                        </section>
                        <label>
                            <input type="search" name="search-input" id="search" placeholder="Поиск" value="<?php echo (isset($_GET['search-input'] )) ? $_GET['search-input'] : ""; ?>">
                            <button type="submit" id="search-button"><img src="icons/lupa.svg" alt="Искать"></button>                            
                        </label>
                        <div class="settings">
                            <button id="show-settings" class="showing">
                                <div class="img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.7531 24H11.2469C10.0286 24 9.03745 23.0089 9.03745 21.7906V21.2811C8.51953 21.1156 8.01633 20.9067 7.53291 20.6565L7.17178 21.0177C6.29714 21.8934 4.89609 21.8677 4.04686 21.0173L2.98228 19.9528C2.13155 19.103 2.10708 17.7024 2.98256 16.8279L3.34341 16.467C3.09323 15.9836 2.88441 15.4805 2.71889 14.9625H2.20936C0.991172 14.9625 0 13.9714 0 12.7531V11.2469C0 10.0286 0.991172 9.0375 2.20941 9.0375H2.71894C2.88445 8.51953 3.09328 8.01638 3.34345 7.53295L2.98233 7.17188C2.10736 6.29784 2.1315 4.89712 2.98261 4.04695L4.04728 2.98233C4.89848 2.12995 6.2992 2.10867 7.17216 2.98261L7.53295 3.34341C8.01638 3.09328 8.51958 2.88441 9.0375 2.71889V2.20936C9.0375 0.991125 10.0286 0 11.2469 0H12.7531C13.9714 0 14.9625 0.991125 14.9625 2.20936V2.71894C15.4804 2.88441 15.9836 3.09328 16.467 3.34345L16.8282 2.98233C17.7028 2.10661 19.1039 2.1323 19.9531 2.98266L21.0177 4.04719C21.8684 4.89698 21.8929 6.29756 21.0174 7.17211L20.6565 7.53295C20.9067 8.01638 21.1155 8.51948 21.2811 9.0375H21.7906C23.0088 9.0375 24 10.0286 24 11.2469V12.7531C24 13.9714 23.0088 14.9625 21.7906 14.9625H21.2811C21.1155 15.4805 20.9067 15.9836 20.6565 16.467L21.0177 16.8282C21.8926 17.7022 21.8685 19.1029 21.0174 19.9531L19.9527 21.0177C19.1015 21.8701 17.7008 21.8914 16.8278 21.0174L16.467 20.6566C15.9836 20.9068 15.4804 21.1156 14.9625 21.2812V21.7907C14.9625 23.0089 13.9714 24 12.7531 24ZM7.76798 19.1798C8.43956 19.577 9.16238 19.8771 9.91631 20.0716C10.2268 20.1518 10.4438 20.4318 10.4438 20.7525V21.7906C10.4438 22.2335 10.8041 22.5938 11.2469 22.5938H12.7531C13.196 22.5938 13.5563 22.2335 13.5563 21.7906V20.7525C13.5563 20.4318 13.7732 20.1518 14.0837 20.0716C14.8377 19.8771 15.5605 19.577 16.2321 19.1798C16.5084 19.0164 16.8602 19.0609 17.0872 19.2879L17.8226 20.0233C18.1396 20.3407 18.6488 20.3334 18.9581 20.0236L20.0234 18.9584C20.3319 18.6502 20.3422 18.141 20.0237 17.8228L19.288 17.0871C19.061 16.8601 19.0166 16.5083 19.1799 16.232C19.5771 15.5605 19.8771 14.8377 20.0717 14.0837C20.1518 13.7732 20.4319 13.5563 20.7525 13.5563H21.7906C22.2335 13.5563 22.5938 13.196 22.5938 12.7532V11.2469C22.5938 10.8041 22.2335 10.4438 21.7906 10.4438H20.7525C20.4318 10.4438 20.1518 10.2269 20.0717 9.91641C19.8771 9.16242 19.5771 8.43961 19.1799 7.76808C19.0166 7.4918 19.061 7.13995 19.288 6.91298L20.0234 6.17756C20.3413 5.86003 20.333 5.35097 20.0237 5.04202L18.9585 3.97678C18.6497 3.66759 18.1404 3.65855 17.8229 3.9765L17.0872 4.7122C16.8603 4.93922 16.5083 4.98366 16.2321 4.82025C15.5605 4.42308 14.8377 4.12303 14.0838 3.92845C13.7733 3.84834 13.5563 3.56831 13.5563 3.24764V2.20936C13.5563 1.76653 13.196 1.40625 12.7532 1.40625H11.247C10.8041 1.40625 10.4438 1.76653 10.4438 2.20936V3.24755C10.4438 3.56822 10.2269 3.84825 9.91636 3.92836C9.16242 4.12294 8.43961 4.42298 7.76803 4.82016C7.49166 4.98352 7.13986 4.93908 6.91289 4.71211L6.17752 3.97669C5.86045 3.65925 5.35125 3.66661 5.04202 3.97636L3.97669 5.04164C3.66816 5.3498 3.65784 5.859 3.97641 6.17719L4.71211 6.91289C4.93908 7.13986 4.98352 7.4917 4.82016 7.76798C4.42298 8.43952 4.12298 9.16233 3.92841 9.91631C3.84825 10.2268 3.56822 10.4437 3.24759 10.4437H2.20941C1.76658 10.4437 1.40625 10.804 1.40625 11.2469V12.7531C1.40625 13.196 1.76658 13.5563 2.20941 13.5563H3.24755C3.56822 13.5563 3.8482 13.7732 3.92836 14.0836C4.12294 14.8376 4.42298 15.5604 4.82011 16.232C4.98347 16.5083 4.93903 16.8601 4.71206 17.0871L3.97664 17.8225C3.65873 18.14 3.66703 18.6491 3.97636 18.958L5.04159 20.0233C5.35036 20.3325 5.85961 20.3415 6.17714 20.0235L6.9128 19.2878C7.08005 19.1206 7.428 18.9788 7.76798 19.1798Z" fill="#979494"/>
                                        <path d="M11.9997 17.2219C9.12032 17.2219 6.77783 14.8794 6.77783 12C6.77783 9.12067 9.12032 6.77814 11.9997 6.77814C14.8791 6.77814 17.2216 9.12067 17.2216 12C17.2216 14.8794 14.8791 17.2219 11.9997 17.2219ZM11.9997 8.18439C9.89572 8.18439 8.18408 9.89607 8.18408 12C8.18408 14.1039 9.89577 15.8156 11.9997 15.8156C14.1036 15.8156 15.8153 14.1039 15.8153 12C15.8153 9.89607 14.1037 8.18439 11.9997 8.18439Z" fill="#979494"/>
                                    </svg> 
                                </div>
                            </button> 
                            <section id="modal-settings" class="hidden modal settings-popup">
                                <h5>Внешний вид</h5>
                                <ul class="view">
                                    <!-- <li></li> -->
                                    <li>
                                        <label for="font-size">Размер шрифта</label>
                                        <select name="" id="font-size" class="settings-select">
                                            <option selected value="12">12</option>
                                            <option value="14">14</option>
                                        </select>
                                    </li>
                                    <li>
                                        <label for="results-on-page">Результатов на странице</label>
                                        <select name="" id="results-on-page" class="settings-select">
                                            <option selected value="12">10</option>
                                            <option value="14">20</option>
                                        </select>
                                    </li>
                                </ul>
                                <h5>Основные</h5>
                                <ul class="main">
                                    <li>
                                        <label for="search-languag">Язык поиска</label>
                                        <select name="" id="search-language" class="settings-select">
                                            <option selected value="ru">Русский</option>
                                            <option value="en">Английский</option>
                                        </select>
                                    </li>
                                    <li>
                                        <label for="interface-language">Язык интерфейса</label>
                                        <select name="" id="interface-language" class="settings-select">
                                            <option selected value="ru">Русский</option>
                                            <option value="en">Английский</option>
                                        </select>
                                    </li>
                                </ul>
                                <button id="more-settings-btn" class="title">Больше настроек</button>
                            </section>                            
                        </div>

                    </form>
                    <nav>
                        <ul class="header-nav">
                            <li class="header-link"><a href="all.html">Все</a></li>
                            <li class="header-link"><a href="pictures.html">Картинки</a></li>
                            <li class="header-link"><a href="video.html">Видео</a></li>
                            <li class="header-link active"><a href="news.html">Новости</a></li>
                            <li class="header-link"><a href="music.html">Музыка</a></li>
                            <li class="header-link"><a href="maps.html">Карты</a></li>
                            <li class="header-link"><a href="interests.html">Интересы</a></li>
                        </ul>
                    </nav>
                </div>
            </header> 
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
                    <section>
                        <ul class="post-list">
                        <?php foreach($results as $result) :?>
                            <li class="post">
                            <a href="<?= $result['link']?>">
                                <div class="left-col">
                                    <h3><?= $result['title']?></h3>
                                    <p class="info">
                                        <img src="<?= $result['source_favicon']?>" alt="">
                                        <span class="source"><?= $result['source']?></span>
                                        <span class="time"><?= $result['date']?></span>
                                    </p>
                                    <p class="description"><?= $result['description']?></p>                                        
                                </div>
                                <div class="image">
                                    <img src="<?= $result['img_link']?>" alt="Алексей Навальный">
                                </div>
                            </a>
                        </li>
        
                        <?php endforeach; ?>
                        </ul>

                    </section>
                </div>
            </main>    
        </div>
        <div class="sidebar">
            <section id="modal-more-settings" class="hidden modal settings-popup">
                <h5>Основные</h5>
                <ul class="main">
                    <li>
                        <label for="settings-region">
                            <p class="subtitle">Регион</p>
                            <p class="explanation">Показывать результаты, характерные для региона</p>
                        </label>
                        <input type="checkbox" class="toggle" name="change-region" id="settings-region"> 
                    </li>
                    <li>
                        <label for="settings-language">
                            <p class="subtitle">Язык интерфейса</p>
                            <p class="explanation">Изменить используемый язык</p>
                        </label>
                        <input type="checkbox" class="toggle" name="change-language" id="settings-language"> 
                    </li>
                    <li>
                        <label for="settings-save-search">
                            <p class="subtitle">Безопасный поиск</p>
                            <p class="explanation">Скрывать непристойные результаты</p>
                        </label>
                        <input type="checkbox" class="toggle" name="save-search" id="settings-region"> 
                    </li>
                    <li>
                        <label for="settings-cookie">
                            <p class="subtitle">Куки</p>
                            <p class="explanation">Показывать уведомления сайтов о использовании cookies</p>
                        </label>
                        <input type="checkbox" class="toggle" name="change-cookie" id="settings-cookie"> 
                    </li>
                    <li>
                        <label for="settings-tabs">
                            <p class="subtitle">Новая вкладка</p>
                            <p class="explanation">Открывать ссылки в новой вкладке</p>
                        </label>
                        <input type="checkbox" class="toggle" name="tabs" id="settings-tabs"> 
                    </li>
                </ul>
                <h5>Внешний вид</h5>
                <ul class="view">
                    <!-- <li></li> -->
                    <li>
                        <label for="set-font-size">
                            <p class="subtitle">Размер шрифта</p>
                            <p class="explanation">Изменить размер шрифта интерфейса</p>
                        </label>
                        <select name="font-size" id="set-font-size" class="settings-select">
                            <option selected value="12">12</option>
                            <option value="14">14</option>
                        </select>
                    </li>
                    <li>
                        <label for="set-results-on-page">
                            <p class="subtitle">Размер шрифта</p>
                            <p class="explanation">Изменить размер шрифта интерфейса</p>
                        </label>
                        <select name="results-on-page" id="set-results-on-page" class="settings-select">
                            <option selected value="12">10</option>
                            <option value="14">20</option>
                        </select>
                    </li>
                </ul>
                <h5>Аккаунт</h5>
                <ul class="account">
                    <li>
                        <button class="acc-settings">
                            <p class="subtitle">Пароль</p>
                            <p class="explanation">Изменить пароль</p>
                        </button> 
                    </li>
                    <li>
                        <button class="acc-settings">
                            <p class="subtitle">Имя</p>
                            <p class="explanation">Изменить имя</p>
                        </button> 
                    </li>
                    <li>
                        <button class="acc-settings">
                            <p class="subtitle">Почта</p>
                            <p class="explanation">Изменить электронный адрес</p>
                        </button> 
                    </li>
                </ul>
            </section>  
            <section id="modal-lk" class="hidden modal">
                <aside>
                    <figure>
                        <figure id="edit-photo">
                            <div id="user-avatar"></div>
                            <button id="add-photo">
                                <img  src="icons/camera.svg" alt="">
                            </button>
                        </figure>
                        <p id="user-nickname">
                            <span id="user-lname-output">Свистунова </span>
                            <span id="user-fname-output">Мария</span>
                        </p>
                        <p class="user-email">
                            mashasv@mail.com
                        </p>
                    </figure>
                    <ul class="control-btns title">
                        <li class="active" id="add-acc">Добавить аккаунт</li>
                        <li id="edit-acc">Редактировать</li>
                        <li id="admin-acc">
                            <a href="admin.html">Администрирование</a>
                        </li>
                    </ul>
                    <button id="exit-btn" class="title">Выйти</button>
                </aside>
                <form id="field">
                    <h3 class="title">Добавление аккаунта</h3>
                    <fieldset>
                        <label>
                            Логин (электронная почта)
                            <input type="email" name="login" id="user-login" placeholder="example@mail.ru">
                        </label>
                        <label id="pass">
                            Пароль
                            <div class="passw">
                                <input type="password" name="password" id="user-password" value="fhjdfjfdjk">
                                <div class="eye">
                                    <img src="icons/view.svg" alt="">
                                </div>
                            </div>

                        </label>
                    </fieldset>
                    <fieldset>
                        <label>
                            Имя
                            <input type="password" name="user-name" id="user-first-name" placeholder="Валерий">
                        </label>
                        <label>
                            Фамилия
                            <input type="password" name="user-last-name" id="user-last-name" placeholder="Кормушкин">
                        </label>
                    </fieldset>
                    <button type="submit" class="title">Готово</button>
                </form>
            </section> 
            <aside class="aside-menu">
                <div class="sidebar-first">
                    <a href="" id="open-lk-modal" class="sidebar-link showing">
                        <div class="img">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.6703 3.69288C18.4051 1.3284 15.2709 -0.00600475 11.9965 2.0315e-05C5.37941 -0.00831435 0.00834381 5.34942 9.49964e-06 11.9669C-0.00410745 15.239 1.33009 18.3704 3.69271 20.6341C3.69959 20.6409 3.70215 20.6512 3.70898 20.6572C3.77837 20.7241 3.85378 20.7807 3.92406 20.8449C4.11686 21.0163 4.30965 21.1937 4.51274 21.3591C4.62154 21.4448 4.73465 21.5304 4.84606 21.6093C5.038 21.7523 5.22994 21.8954 5.43042 22.0274C5.56668 22.1131 5.70721 22.1988 5.84683 22.2845C6.03189 22.3959 6.21615 22.5081 6.40724 22.6101C6.5692 22.6958 6.73454 22.7695 6.89906 22.8475C7.079 22.9332 7.25638 23.0188 7.44059 23.0959C7.6248 23.1731 7.80991 23.2331 7.99668 23.2999C8.18345 23.3667 8.34456 23.4284 8.52365 23.4832C8.72588 23.5441 8.93324 23.5912 9.13888 23.6418C9.31024 23.6837 9.47647 23.7317 9.653 23.766C9.88947 23.8132 10.1294 23.8431 10.3694 23.8757C10.5176 23.8963 10.6624 23.9254 10.8123 23.94C11.2048 23.9786 11.6006 24 11.9999 24C12.3992 24 12.7951 23.9786 13.1875 23.94C13.3375 23.9254 13.4823 23.8963 13.6305 23.8757C13.8704 23.8431 14.1103 23.8132 14.3468 23.766C14.5182 23.7317 14.6896 23.6803 14.8609 23.6418C15.0666 23.5912 15.2739 23.5441 15.4762 23.4832C15.6553 23.4284 15.8283 23.3616 16.0031 23.2999C16.178 23.2382 16.3767 23.1714 16.5592 23.0959C16.7417 23.0205 16.9208 22.9323 17.1008 22.8475C17.2653 22.7695 17.4307 22.6958 17.5926 22.6101C17.7837 22.5081 17.9679 22.3959 18.153 22.2845C18.2927 22.1988 18.4332 22.1208 18.5694 22.0274C18.7699 21.8955 18.9619 21.7524 19.1538 21.6093C19.2652 21.5235 19.3782 21.4464 19.4871 21.3591C19.6902 21.1962 19.883 21.0232 20.0758 20.8449C20.146 20.7807 20.2214 20.7241 20.2908 20.6572C20.2977 20.6513 20.3003 20.641 20.3071 20.6341C25.0855 16.0562 25.248 8.47131 20.6703 3.69288ZM18.7444 19.7369C18.5884 19.874 18.4273 20.0043 18.2646 20.1303C18.1686 20.204 18.0726 20.2768 17.9741 20.3471C17.819 20.4593 17.6613 20.5656 17.5011 20.6675C17.3845 20.7421 17.2654 20.814 17.1454 20.8843C16.9946 20.97 16.8412 21.0557 16.6862 21.1414C16.549 21.2117 16.4094 21.2777 16.2689 21.3428C16.1284 21.4079 15.9733 21.4773 15.8216 21.5382C15.6699 21.599 15.5089 21.6564 15.3503 21.7095C15.2055 21.7592 15.0607 21.8106 14.9142 21.8543C14.7428 21.9057 14.5637 21.9477 14.3863 21.9906C14.2475 22.0231 14.1105 22.06 13.9699 22.0874C13.7668 22.1269 13.5595 22.1543 13.3513 22.1825C13.233 22.198 13.1157 22.2194 12.9965 22.2314C12.6675 22.2631 12.3341 22.282 11.9974 22.282C11.6607 22.282 11.3273 22.2631 10.9983 22.2314C10.8792 22.2194 10.7618 22.198 10.6435 22.1825C10.4353 22.1543 10.228 22.1269 10.0249 22.0874C9.88435 22.06 9.74724 22.0232 9.60847 21.9906C9.43109 21.9478 9.25456 21.9049 9.08064 21.8543C8.93414 21.8106 8.78929 21.7592 8.6445 21.7095C8.486 21.6547 8.32744 21.599 8.17321 21.5382C8.01897 21.4773 7.87332 21.4105 7.72592 21.3428C7.57851 21.2751 7.44571 21.2117 7.30865 21.1414C7.15356 21.0609 7.00018 20.976 6.84936 20.8843C6.72941 20.8141 6.61027 20.7421 6.49374 20.6675C6.33353 20.5656 6.17584 20.4593 6.02075 20.3471C5.92219 20.2768 5.82625 20.204 5.73025 20.1303C5.56743 20.0043 5.40637 19.8732 5.25043 19.7369C5.21272 19.7086 5.17843 19.6726 5.14163 19.6401C5.17994 16.7251 7.05249 14.1512 9.81411 13.2176C11.1949 13.8745 12.7981 13.8745 14.179 13.2176C16.9406 14.1512 18.8131 16.725 18.8515 19.6401C18.8155 19.6726 18.7812 19.7052 18.7444 19.7369ZM9.0086 6.8705C9.93637 5.22044 12.026 4.63495 13.676 5.56276C15.326 6.49057 15.9115 8.58031 14.9837 10.2304C14.6759 10.7779 14.2235 11.2302 13.676 11.5381C13.6717 11.5381 13.6666 11.5381 13.6615 11.5432C13.4342 11.6697 13.1941 11.7714 12.9451 11.8466C12.9006 11.8595 12.8594 11.8766 12.8123 11.8877C12.7266 11.91 12.6366 11.9254 12.5484 11.9408C12.3822 11.9699 12.214 11.9868 12.0454 11.9914H11.9477C11.7791 11.9868 11.6109 11.9699 11.4447 11.9408C11.359 11.9254 11.2682 11.91 11.1808 11.8877C11.1354 11.8766 11.0951 11.8595 11.048 11.8466C10.7991 11.7714 10.5589 11.6698 10.3317 11.5432L10.3163 11.5381C8.66629 10.6103 8.08083 8.52056 9.0086 6.8705ZM20.3715 17.9409C19.8217 15.3761 18.1328 13.2017 15.7839 12.0343C17.704 9.94258 17.565 6.6902 15.4733 4.76996C13.3817 2.84972 10.1294 2.9888 8.20926 5.08055C6.40413 7.04703 6.40413 10.0679 8.20926 12.0343C5.86034 13.2017 4.17148 15.3761 3.62162 17.9409C0.335893 13.3125 1.42417 6.89671 6.05238 3.61084C10.6806 0.324972 17.0961 1.4133 20.3818 6.0417C21.617 7.78159 22.28 9.86279 22.2789 11.9966C22.2789 14.1285 21.612 16.207 20.3715 17.9409Z" fill="#979494"/>
                            </svg>
                        </div>
                    </a>
                    <a href="email.html" class="sidebar-link">
                        <div class="img">
                            <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.8906 0.5625H2.10938C0.943922 0.5625 0 1.51228 0 2.67188V15.3281C0 16.4946 0.950859 17.4375 2.10938 17.4375H21.8906C23.0463 17.4375 24 16.4986 24 15.3281V2.67188C24 1.51434 23.0598 0.5625 21.8906 0.5625ZM21.5952 1.96875C21.1642 2.39742 13.7476 9.77499 13.4916 10.0297C13.0931 10.4281 12.5634 10.6475 12 10.6475C11.4366 10.6475 10.9069 10.4281 10.5071 10.0284C10.3349 9.85706 3.00014 2.56097 2.40478 1.96875H21.5952ZM1.40625 15.0419V2.95898L7.48303 9.00375L1.40625 15.0419ZM2.40567 16.0312L8.48006 9.99548L9.51408 11.0241C10.1781 11.6881 11.061 12.0538 12 12.0538C12.939 12.0538 13.8219 11.6881 14.4846 11.0254L15.5199 9.99548L21.5943 16.0312H2.40567ZM22.5938 15.0419L16.517 9.00375L22.5938 2.95898V15.0419Z" fill="#979494"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="sidebar-second">
                    <a href="" id="open-set-modal" class="sidebar-link showing">
                        <div class="img">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.7531 24H11.2469C10.0286 24 9.03745 23.0089 9.03745 21.7906V21.2811C8.51953 21.1156 8.01633 20.9067 7.53291 20.6565L7.17178 21.0177C6.29714 21.8934 4.89609 21.8677 4.04686 21.0173L2.98228 19.9528C2.13155 19.103 2.10708 17.7024 2.98256 16.8279L3.34341 16.467C3.09323 15.9836 2.88441 15.4805 2.71889 14.9625H2.20936C0.991172 14.9625 0 13.9714 0 12.7531V11.2469C0 10.0286 0.991172 9.0375 2.20941 9.0375H2.71894C2.88445 8.51953 3.09328 8.01638 3.34345 7.53295L2.98233 7.17188C2.10736 6.29784 2.1315 4.89712 2.98261 4.04695L4.04728 2.98233C4.89848 2.12995 6.2992 2.10867 7.17216 2.98261L7.53295 3.34341C8.01638 3.09328 8.51958 2.88441 9.0375 2.71889V2.20936C9.0375 0.991125 10.0286 0 11.2469 0H12.7531C13.9714 0 14.9625 0.991125 14.9625 2.20936V2.71894C15.4804 2.88441 15.9836 3.09328 16.467 3.34345L16.8282 2.98233C17.7028 2.10661 19.1039 2.1323 19.9531 2.98266L21.0177 4.04719C21.8684 4.89698 21.8929 6.29756 21.0174 7.17211L20.6565 7.53295C20.9067 8.01638 21.1155 8.51948 21.2811 9.0375H21.7906C23.0088 9.0375 24 10.0286 24 11.2469V12.7531C24 13.9714 23.0088 14.9625 21.7906 14.9625H21.2811C21.1155 15.4805 20.9067 15.9836 20.6565 16.467L21.0177 16.8282C21.8926 17.7022 21.8685 19.1029 21.0174 19.9531L19.9527 21.0177C19.1015 21.8701 17.7008 21.8914 16.8278 21.0174L16.467 20.6566C15.9836 20.9068 15.4804 21.1156 14.9625 21.2812V21.7907C14.9625 23.0089 13.9714 24 12.7531 24ZM7.76798 19.1798C8.43956 19.577 9.16238 19.8771 9.91631 20.0716C10.2268 20.1518 10.4438 20.4318 10.4438 20.7525V21.7906C10.4438 22.2335 10.8041 22.5938 11.2469 22.5938H12.7531C13.196 22.5938 13.5563 22.2335 13.5563 21.7906V20.7525C13.5563 20.4318 13.7732 20.1518 14.0837 20.0716C14.8377 19.8771 15.5605 19.577 16.2321 19.1798C16.5084 19.0164 16.8602 19.0609 17.0872 19.2879L17.8226 20.0233C18.1396 20.3407 18.6488 20.3334 18.9581 20.0236L20.0234 18.9584C20.3319 18.6502 20.3422 18.141 20.0237 17.8228L19.288 17.0871C19.061 16.8601 19.0166 16.5083 19.1799 16.232C19.5771 15.5605 19.8771 14.8377 20.0717 14.0837C20.1518 13.7732 20.4319 13.5563 20.7525 13.5563H21.7906C22.2335 13.5563 22.5938 13.196 22.5938 12.7532V11.2469C22.5938 10.8041 22.2335 10.4438 21.7906 10.4438H20.7525C20.4318 10.4438 20.1518 10.2269 20.0717 9.91641C19.8771 9.16242 19.5771 8.43961 19.1799 7.76808C19.0166 7.4918 19.061 7.13995 19.288 6.91298L20.0234 6.17756C20.3413 5.86003 20.333 5.35097 20.0237 5.04202L18.9585 3.97678C18.6497 3.66759 18.1404 3.65855 17.8229 3.9765L17.0872 4.7122C16.8603 4.93922 16.5083 4.98366 16.2321 4.82025C15.5605 4.42308 14.8377 4.12303 14.0838 3.92845C13.7733 3.84834 13.5563 3.56831 13.5563 3.24764V2.20936C13.5563 1.76653 13.196 1.40625 12.7532 1.40625H11.247C10.8041 1.40625 10.4438 1.76653 10.4438 2.20936V3.24755C10.4438 3.56822 10.2269 3.84825 9.91636 3.92836C9.16242 4.12294 8.43961 4.42298 7.76803 4.82016C7.49166 4.98352 7.13986 4.93908 6.91289 4.71211L6.17752 3.97669C5.86045 3.65925 5.35125 3.66661 5.04202 3.97636L3.97669 5.04164C3.66816 5.3498 3.65784 5.859 3.97641 6.17719L4.71211 6.91289C4.93908 7.13986 4.98352 7.4917 4.82016 7.76798C4.42298 8.43952 4.12298 9.16233 3.92841 9.91631C3.84825 10.2268 3.56822 10.4437 3.24759 10.4437H2.20941C1.76658 10.4437 1.40625 10.804 1.40625 11.2469V12.7531C1.40625 13.196 1.76658 13.5563 2.20941 13.5563H3.24755C3.56822 13.5563 3.8482 13.7732 3.92836 14.0836C4.12294 14.8376 4.42298 15.5604 4.82011 16.232C4.98347 16.5083 4.93903 16.8601 4.71206 17.0871L3.97664 17.8225C3.65873 18.14 3.66703 18.6491 3.97636 18.958L5.04159 20.0233C5.35036 20.3325 5.85961 20.3415 6.17714 20.0235L6.9128 19.2878C7.08005 19.1206 7.428 18.9788 7.76798 19.1798Z" fill="#979494"/>
                                <path d="M11.9997 17.2219C9.12032 17.2219 6.77783 14.8794 6.77783 12C6.77783 9.12067 9.12032 6.77814 11.9997 6.77814C14.8791 6.77814 17.2216 9.12067 17.2216 12C17.2216 14.8794 14.8791 17.2219 11.9997 17.2219ZM11.9997 8.18439C9.89572 8.18439 8.18408 9.89607 8.18408 12C8.18408 14.1039 9.89577 15.8156 11.9997 15.8156C14.1036 15.8156 15.8153 14.1039 15.8153 12C15.8153 9.89607 14.1037 8.18439 11.9997 8.18439Z" fill="#979494"/>
                            </svg>
                        </div>
                    </a>
                    <a href="" class="sidebar-link not-showing">
                        <div class="img">
                            <svg width="24" height="15" viewBox="0 0 24 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.5285 0.0543528C23.2472 -0.0584345 22.9191 0.0118829 22.7067 0.233802C21.8951 1.08636 20.3556 1.50082 18.0001 1.50082C15.9933 1.50082 14.5504 2.68736 13.4972 3.55369C12.931 4.01951 12.3458 4.50063 12.0001 4.50063C11.6544 4.50063 11.0692 4.01951 10.503 3.55369C9.44981 2.68732 8.00691 1.50082 6.00007 1.50082C3.64458 1.50082 2.10505 1.08636 1.29351 0.233802C1.08039 0.0103935 0.754443 -0.060646 0.47173 0.0543528C0.18676 0.168629 0 0.444031 0 0.75089C0 5.52456 0.705338 11.1675 6.2029 12.4507C8.88944 13.0776 9.88701 13.8451 10.5476 14.3534C10.9798 14.686 11.3877 15.0001 12 15.0001C12.6123 15.0001 13.0203 14.6859 13.4524 14.3527C14.113 13.8451 15.1106 13.0769 17.7964 12.4499C23.2947 11.1668 24 5.52379 24 0.750845C24.0001 0.443986 23.8133 0.168629 23.5285 0.0543528ZM17.4552 10.9896C14.453 11.6898 13.254 12.6133 12.5377 13.1648C11.9649 13.6057 12.0352 13.6057 11.4625 13.1648C10.7462 12.6132 9.54716 11.6905 6.54424 10.9903C3.29078 10.2308 1.75342 7.57748 1.52929 2.20981C2.63157 2.7408 4.11107 3.00072 6.00002 3.00072C7.46928 3.00072 8.57522 3.91038 9.55081 4.7123C10.3558 5.37517 11.1167 6.00062 12 6.00062C12.8833 6.00062 13.6443 5.37512 14.4493 4.7123C15.4249 3.91038 16.5309 3.00072 18.0001 3.00072C19.889 3.00072 21.3685 2.7408 22.4708 2.20981C22.246 7.57748 20.7093 10.2301 17.4552 10.9896Z" fill="#979494"/>
                                <path d="M4.5 6.11428C4.5 6.11428 4.5 10.5001 10.5 10.5001C10.5 9.40356 10.5 8.30724 9.49997 7.21069C7.91891 5.477 4.5 6.11428 4.5 6.11428Z" fill="#979494"/>
                                <path d="M13.5 10.5003C19.5 10.5003 19.5 6.11447 19.5 6.11447C19.5 6.11447 16.0811 5.47724 14.5 7.21093C13.5 8.30748 13.5 9.40385 13.5 10.5003Z" fill="#979494"/>
                            </svg>
                        </div>
                    </a>
                    <a href="" class="sidebar-link not-showing">
                        <div class="img">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.2788 6.10352e-05H0.72142C0.322948 6.10352e-05 0 0.314819 0 0.703184V11.4718C0 15.2622 2.11297 18.7586 5.51436 20.5964L11.6502 23.9117C11.759 23.9705 11.8796 24 12 24C12.1204 24 12.241 23.9705 12.3498 23.9117L18.4856 20.5964C21.887 18.7586 24 15.2622 24 11.4718V0.703184C24.0002 0.314819 23.6771 6.10352e-05 23.2788 6.10352e-05ZM22.5573 11.4718C22.5573 14.7514 20.7292 17.7764 17.7862 19.3665L12 22.4929L6.2138 19.3665C3.271 17.7764 1.44284 14.7514 1.44284 11.4718V1.40631H22.5573V11.4718Z" fill="#979494"/>
                                <path d="M6.49756 10.6425L7.78662 6.36517H9.09131L7.11084 12.0527H5.88818L3.91553 6.36517H5.21631L6.49756 10.6425ZM10.8022 10.0488V12.0527H9.63037V6.36517H11.8491C12.2762 6.36517 12.6512 6.4433 12.9741 6.59955C13.2996 6.7558 13.5496 6.97845 13.7241 7.26752C13.8986 7.55398 13.9858 7.8808 13.9858 8.24799C13.9858 8.80528 13.7944 9.24538 13.4116 9.5683C13.0314 9.88861 12.5041 10.0488 11.8296 10.0488H10.8022ZM10.8022 9.09955H11.8491C12.159 9.09955 12.3947 9.02663 12.5562 8.8808C12.7202 8.73497 12.8022 8.52663 12.8022 8.2558C12.8022 7.97715 12.7202 7.75189 12.5562 7.58002C12.3921 7.40814 12.1655 7.3196 11.8765 7.31439H10.8022V9.09955ZM19.4194 12.0527H18.2476L15.9663 8.31049V12.0527H14.7944V6.36517H15.9663L18.2515 10.1152V6.36517H19.4194V12.0527Z" fill="#979494"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </aside>
        </div>

    </div>
    <script src="js/index.js"></script>
    <script src="js/pictures.js"></script>
</body>
</html>


<?php 
    $sW = $_GET['search-input'];
    $terms = explode(" ", $sW);
    $query = "SELECT * from `news` WHERE ";

    foreach ($terms as $term) {
        $i++;
        if($i == 1) {
            $query .= "keywords LIKE '$term' ";
        } else {
            $query .= "OR keywords LIKE '$term' ";
        }
    }
    echo $query;

?>