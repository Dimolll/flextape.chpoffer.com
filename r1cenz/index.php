<?php
	if($_POST["submit"]){
		mail("vladbrusentcev1@gmail.com","Новый заказ","Пользователь по имени ".$_POST["name"]." сделал заказ. Его телефон ".$_POST["phone"]);
	}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Yandex.Metrika counter --> <script type="text/javascript" >     (function (d, w, c) {         (w[c] = w[c] || []).push(function() {             try {                 w.yaCounter48870554 = new Ya.Metrika({                     id:48870554,                     clickmap:true,                     trackLinks:true,                     accurateTrackBounce:true,                     webvisor:true                 });             } catch(e) { }         });          var n = d.getElementsByTagName("script")[0],             s = d.createElement("script"),             f = function () { n.parentNode.insertBefore(s, n); };         s.type = "text/javascript";         s.async = true;         s.src = "https://mc.yandex.ru/metrika/watch.js";          if (w.opera == "[object Opera]") {             d.addEventListener("DOMContentLoaded", f, false);         } else { f(); }     })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/48870554" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script>


window.app = {
    timestamp: parseInt((new Date()).getTime() / 1000),
    jq: jQuery,
    formAction: window.location.href,
    leadToken: '5af9e9e6e333c0.16784990',
    offers: {"5980":{"product_sku":"","delivery_price":"1200","currency":{"name":"\u0442\u04a3\u0433","code":"KZT"},"discount":"","price":"8660","id":5980,"country":{"name":"\u041a\u0430\u0437\u0430\u0445\u0441\u0442\u0430\u043d","code":"KZ"},"link":"","price2":"17320"},"5979":{"product_sku":"","delivery_price":"430","currency":{"name":"\u0440\u0443\u0431","code":"RUB"},"discount":"","price":"1490","id":5979,"country":{"name":"\u0420\u043e\u0441\u0441\u0438\u044f","code":"RU"},"link":"","price2":"2980"}},
    currentOffer: {"product_sku":"","delivery_price":"1200","currency":{"name":"\u0442\u04a3\u0433","code":"KZT"},"discount":"","price":"8660","id":5980,"country":{"name":"\u041a\u0430\u0437\u0430\u0445\u0441\u0442\u0430\u043d","code":"KZ"},"link":"","price2":"17320"},
    allowedCountries: ["KZ","RU"],
    _setOfferId: false,
    
    setOffer: function (offerId) {
        if (offerId == this._setOfferId) {
            return ;
        }
        this._setOfferId = offerId;
        if (offerId) {
            var offer = app.offers[offerId];
            var previousOffer = app.currentOffer;
            app.currentOffer = offer;
            var event = this.jq.Event("offerchange");
            event.previousOffer = previousOffer;
            event.currentOffer = app.currentOffer;
            this.jq(document).trigger(event);
            this.updatePage(offer);
        } else {
            $('input[name=country]').val('');
        }
    },
    
    updatePage: function(offer) {
        $('x-newprice').html(offer.price);
        $('x-oldprice').html(offer.price2);
        $('x-currency').html(offer.currency.name);
        $('input[name=offer], select[name=offer]').val(offer.id);
        $('input[name=country]').val(offer.country.code);
    }
    

};


</script><script src="../shared/form.validate.js%3F10"></script>
<script src="../shared/form.incomplete.js%3F10"></script>
<script src="../shared/main.js%3F11"></script>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlexTape</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/media.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	
	<meta property="og:type" content="website" />
	<meta property="og:title" content="FlexTape" />
	<meta property="og:image" content="1.png" />
	<meta property="og:site_name" content="FlexTape" />
	<meta property="og:description" content="FLEX TAPE – НАДЕЖНАЯ ЛЕНТА, 
КОТОРАЯ НЕ ПОДВЕДЕТ!" />
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	
	
</head>

<body>
    <div class="desktop">
        <div class="container">
            <header>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="product_wrapper">
                            <img src="img/product.png" alt="">
                            <div class="opis1"><span>чинит</span> за 1 минуту</div>
                            <div class="opis2">надежно фиксирует,
                                <br> крепко держит!</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="prices">
                            <ul class="header_list">
                                <li>Избавляет от трещин,
                                    <br> протечки</li>
                                <hr>
                                <li>Сильная, прочная лента
                                    <br> с гарантией 3 года</li>
                                <hr>
                                <li>Надежна
                                    <br> Устойчива</li>
                            </ul>
                            <div class="price_wrap">
                                <div class="double">Акция: 1+1=3</div>
                                <div class="price__new">
                                    <div class="header_npr">цена по
                                        <br> акции:</div>
                                    <div class="new_price_val"><x-newprice>239</x-newprice></div>
                                    <div class="new_price_cur"><x-currency>грн</x-currency>.</div>
                                </div>
                                <div class="price__old">
                                    <div class="header_opr">обычная цена:</div>
                                    <div class="old_price_val"><x-oldprice>500</x-oldprice></div>
                                    <div class="old_price_cur"><x-currency>грн</x-currency>.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video_wrapper">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="video">
                                <iframe src="https://www.youtube.com/embed/qPfOzB_w8oc?ecver=2" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <form action="index.php" method="post" class="form landing__form">
                                <div class="form__list">
                                    <div class="form__item">
                                            
   
     
                                    </div>
                                    <div class="form__item">
                                        <input type="text" class="form__input" name="name" placeholder="Имя">
                                    </div>
                                    <div class="form__item">
                                        <input type="tel" class="form__input phone__mask" placeholder="Телефон" name="phone">
                                    </div>
                                    <div class="form__item">
                                        <input type="submit" name="submit" class="form__btn" value="ЗАКАЗАТЬ FLEX TAPE">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            <section class="problems">
                <div class="problems_head">какие проблемы решит flex tape?</div>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="gif_wrapper">
                            <div class="gif">
                                <img data-src="img/3.gif" alt="">
                            </div>
                            <div class="gif_text">Уплотнит стенки
                                <br>и поверхности т<x-currency>руб</x-currency>  </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="gif_wrapper">
                            <div class="gif">
                                <img data-src="img/2.gif" alt="">
                            </div>
                            <div class="gif_text">Устранит даже большие
                                <br>разрывы, трещины, протечки</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="gif_wrapper">
                            <div class="gif">
                                <img data-src="img/1.gif" alt="">
                            </div>
                            <div class="gif_text">Соединит сломанные,
                                <br>порванные и разбитые объекты                           </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="gif_wrapper">
                            <div class="gif">
                                <img data-src="img/4.gif" alt="">
                            </div>
                            <div class="gif_text">Починит бассейны, матрасы,
                                <br>садовые шланги</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="lenta">
                <div class="lenta_head">
                    <span>flex tape &ndash; </span> надежная лента,
                    <br> которая не подведет!
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <p>Фил и Алан Свифт – братья, создавшие продукт высокого качества, который легко использовать везде: в офисе, квартире, саду и загородном доме! Сегодня они с гордостью представляют надежную защитную ленту, новый сильный и прочный скотч, который работает даже под водой. </p>
                        <p>Прочная прорезиненная водонепроницаемая лента создает эластичный барьер и отталкивает воду, мгновенно останавливает протечки. Три слоя плотно и надежно скрепляют, запечатывают и ремонтируют! </p>
                    </div>
                </div>
            </section>
            <section class="uspey">
                <span>успей заказать по акции:</span> <span>1+1=3</span>
            </section>
            <section class="chudo">
                <div class="chudo_head">простое чудо, доступное каждому</div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="chudo_img">
                            <span>1</span>
                            <div>отрежьте
                            </div>
                            <img src="img/step1.png" alt="">
                            <p>Обрежьте ленту до нужного размера, оставив подложку на пленке </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="chudo_img">
                            <span>2</span>
                            <div>приложите
                            </div>
                            <img src="img/step2.png" alt="">
                            <p>Отклейте подложку и приложите ленту на чистую поверхность, надавите и зафиксируйте</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="chudo_img">
                            <span>3</span>
                            <div>разгладьте
                            </div>
                            <img src="img/step3.png" alt="">
                            <p>Тщательно разгладьте, чтобы удалить любые воздушные карманы или пузыри</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="chudo_img">
                            <span>4</span>
                            <div>результат
                            </div>
                            <img src="img/step4.png" alt="">
                            <p>Флекслента устраняет протечки и пробоины, создает мощный водонепроницаемый барьер!</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="skills">
                <div class="skills_head">надежна, экологична, проста в применении</div>
                <div class="skills_wrapper">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="skills_item">
                                <img src="img/strelka.png" alt="">
                                <p>Надежная
                                    <br>фиксация
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="skills_item">
                                <img src="img/strelka.png" alt="">
                                <p>Под любую
                                    <br>форму
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="skills_item">
                                <img src="img/strelka.png" alt="">
                                <p>Для любых
                                    <br>поверхностей
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="skills_item">
                                <img src="img/strelka.png" alt="">
                                <p>Устойчива
                                    <br>к УФ-лучам
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="skills_item">
                                <img src="img/strelka.png" alt="">
                                <p>экологический
                                    <br>материал
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="skills_item">
                                <img src="img/strelka.png" alt="">
                                <p>Купирует щели,
                                    <br>трещины
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           
            <section class="algoritm">
                <div class="algoritm_head">как заказать flex tape?</div>
                <div class="algoritm_wrapper">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="algoritm_item">
                                <span>1</span>
                                <img src="img/alg1.png" alt="">
                                <p><span>оформление</span>Оставьте заявку
                                    <br>на нашем сайте и мы
                                    <br>свяжемся с вами</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="algoritm_item">
                                <span>2</span>
                                <img src="img/alg2.png" alt="">
                                <p><span>доставка</span>Мы отправляем заказ.
                                    <br>Время доставки от 2 до 10
                                    <br> рабочих дней</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="algoritm_item">
                                <span>3</span>
                                <img src="img/alg3.png" alt="">
                                <p><span>оплата</span>Никакой предоплаты!
                                    <br>Вы оплачиваете
                                    <br>при получении товара</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="algoritm_item">
                                <span>4</span>
                                <img src="img/alg4.png" alt="">
                                <p><span>гарантии</span>Вы вправе вернуть товар
                                    <br>в течение 14 дней с
                                    <br>момента получения </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="reviews">
                <div class="reviews_head">отзывы покупателей</div>
                <div class="reviews_wrapper">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="reviews_item">
                                <img src="img/review1.png" alt="">
                                <span>ирина виноградова, 25 лет</span>
                                <p>Хочу еще раз поблагодарить вас за прекрасную работу!!! Понравилось все: общение с мастером Ольгой, сроки доставки заказа, качество ленты и приятный комплимент в виде нескольких нужных товаров в подарок!!! Теперь я буду вашей постоянной клиенткой =)))</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="reviews_item">
                                <img src="img/review2.png" alt="">
                                <span>олег попов, 30 лет</span>
                                <p>На даче решил починить лодку. Наклеил ленту на пробой в днище, перед наклейкой даже не обезжирил ткань. Результат превзошел олжидания! Лента держит давление, наклеивается как обычный скотч, лодка находится в накачанном состоянии уже второй день и наклейка работает! </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="reviews_item">
                                <img src="img/review3.png" alt="">
                                <span>юрий краков, 19 лет</span>
                                <p>Проверено лично мной! Чинит все от прорванныхт в снегопад палаток до текущих водостоков и даже крыш. Брал ленту в длительный поход!! Заделывает трещины, прорехи, разрывы и проколы, пробоины контейнеров, содержащих жидкости. Еще и дома пригодилась)))</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          
        
            <footer>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="product_wrapper">
                            <img src="img/product.png" alt="">
                            <div class="opis1"><span>чинит</span> за 1 минуту</div>
                            <div class="opis2">надежно фиксирует,
                                <br> крепко держит!</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="prices">
                            <ul class="header_list">
                                <li>Избавляет от трещин,
                                    <br> протечки</li>
                                <hr>
                                <li>Сильная, прочная лента
                                    <br> с гарантией 3 года</li>
                                <hr>
                                <li>Надежна
                                    <br> Устойчива</li>
                            </ul>
                            <div class="price_wrap">
                                <div class="double">Акция: 1+1=3</div>
                                <div class="price__new">
                                    <div class="header_npr">цена по
                                        <br> акции:</div>
                                    <div class="new_price_val"><x-newprice>239</x-newprice></div>
                                    <div class="new_price_cur"><x-currency>грн</x-currency>.</div>
                                </div>
                                <div class="price__old">
                                    <div class="header_opr">обычная цена:</div>
                                    <div class="old_price_val"><x-oldprice>500</x-oldprice></div>
                                    <div class="old_price_cur"><x-currency>грн</x-currency>.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video_wrapper">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="video">
                                <iframe src="https://www.youtube.com/embed/qPfOzB_w8oc?ecver=2" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <form action="index.php" method="post" class="form landing__form">
                                <div class="form__list">
                                    <div class="form__item">
                                            
   
     
                                    </div>
                                    <div class="form__item">
                                        <input type="text" class="form__input" name="name" placeholder="Имя">
                                    </div>
                                    <div class="form__item">
                                        <input type="tel" class="form__input phone__mask" placeholder="Телефон" name="phone">
                                    </div>
                                    <div class="form__item">
                                        <input type="submit" class="form__btn" name="submit" value="ЗАКАЗАТЬ FLEX TAPE">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </footer>
        </div>
    </div>
    <div class="mobile">
            <header>
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/qPfOzB_w8oc?ecver=2" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="product_wrapper">
                    <img src="img/product_mob.png" alt="">
                    <div class="opis1"><span>чинит</span> за 1 минуту</div>
                    <div class="prices">
                        <div class="price_wrap">
                              <div class="double">Акция: 1+1=3</div>
                            <div class="price__old">
                                <div class="header_opr">обычная цена:</div>
                                <div class="old_price_val"><x-oldprice>17320</x-oldprice></div>
                                <div class="old_price_cur"><x-currency>тңг</x-currency>.</div>
                            </div>
                            <div class="price__new">
                                <div class="header_npr">цена по
                                    <br> акции:</div>
                                <div class="new_price_val"><x-newprice>8660</x-newprice></div>
                                <div class="new_price_cur"><x-currency>тңг</x-currency>.</div>
                            </div>
                        </div>
                    </div>
                    <div class="opis2">надежно фиксирует,
                        <br> крепко держит!</div>
                </div>
                <ul class="header_list">
                    <li><span>Избавляет</span> от трещин,
                        <br> протечки</li>
                    <hr>
                    <li>Сильная, прочная лента
                        <br> <span>с гарантией 3 года</span></li>
                    <hr>
                    <li>Надежна
                        <br> <span>Устойчива</span></li>
                </ul>
                <a href="index.html%3Fm=543e3660d860c6.html#form" class="zak_btn">заказать flex tape</a>
            </header>
             <section class="problems">
                <div class="problems_head">какие проблемы решит flex tape?</div>
         
                <div class="reviews_head">отзывы покупателей</div>
                <div class="reviews_wrapper">
                  
                       
                         <div class="owl-carousel">
                                <div class="reviews_item">
                                 <img src="img/review1.png" alt="">
                                 <span>ирина виноградова, 25 лет</span>


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <script src="js/main.js"></script>

	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-url-parser/2.3.1/purl.min.js"></script>


	

	

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '296343957462600'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=296343957462600&ev=PageView&noscript=1"/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

</body>

</html>