<?php
include 'header.php';
?>

<html>
<div class="main-container">
    <div class="container1">
        <div id="mySlides">
            <div id="slide1">
                <img src="images/slider1.jpg" alt="Slide 1 jFlow Plus"/>
                <span><b class="slideheading">Голяма Базилика</b></span>
            </div>
            <div id="slide2">
                <img src="images/slider2.jpg" alt="Slide 2 jFlow Plus"/>
                <span><b class="slideheading">Голяма Базилика</b><br/></span>
            </div>
            <div id="slide3">
                <img src="images/slider3.jpg" alt="Slide 3 jFlow Plus"/>
                <span><b class="slideheading">Крумов дворец</b><br/></span>
            </div>
            <div id="slide4">
                <img src="images/slider4.jpg" alt="Slide 4 jFlow Plus"/>
                <span><b class="slideheading">Плиска - музей</b><br/></span>
            </div>
        </div>
        <div id="myController">
            <span class="jFlowControl"></span>
            <span class="jFlowControl"></span>
            <span class="jFlowControl"></span>
            <span class="jFlowControl"></span>
        </div>

        <section class="jFlowPrev">
            <div></div>
        </section>
        <section class="jFlowNext">
            <div></div>
        </section>
        <br/>
        <br/>

<!-- Допълнителна информация -->
        <article class="box" id="home_featured21">
            <div class="block"><h2><u>Работно време</u></h2>
              <p>  <font size="4px">&nbsp;&nbsp;&nbsp;&nbsp;Всеки ден от <b>9:00</b>ч. до <b>19:00</b>ч.</br>
             <i>&nbsp;&nbsp;&nbsp;&nbsp;В празничните дни<br/> &nbsp;&nbsp;&nbsp;&nbsp;включително.</i></font>
</p>
            </div>

            <div class="block"><h2><u>Цена за билет</u></h2>
          <ul class="dotsmenu">
  <!--числата да са точки --><font size="4px"><li>За възрастни - <b>5</b>лв.</li>
                    <li>За учащи - <b>5</b>лв.</li>
                    <li>Семейни - <b>5</b>лв.</li>
                    <li>Комбинирани - <b>5</b>лв.</li></font>
                </ul>
                <br/>
                <br/>

            </div>

            <div class="block last"><h2><u class="menu3">Цена за беседа</u></h2>
               <ul class="dotsmenu3">
              <font size="4px"><li>Беседа на български език - <b>10</b>лв.</li>
                  <li>Беседа на чужд език - <b>15</b>лв.</li> <br/></font>
                </ul>
            </div>
            <div class="clear"></div>
        </article>

    </div>
    <br/><br/>
<!-- Галерия с инфо-->
    <div class="container2">
        <article id="home_featured2">
            <ul>
                <li>
                    <div class="imgholder"><a href="images/slide1.jpg" data-gal="prettyPhoto[featured]"
                                              title="Дни на предците"><img src="images/featured1.jpg" width="275"
                                                                                height="145" alt=""/></a></div>
                    <h4>Дни на предците</h4>

                    <p>Снимка от ежегодното събитие „Дни на предците” в Плиска</p>
                </li>

                <li>
                    <div class="imgholder"><a href="images/slide2.jpg" data-gal="prettyPhoto[featured]"
                                              title="Източна порта"><img src="images/featured2.jpg" width="275"
                                                                                 height="145" alt=""/></a></div>
                    <h4>Източна порта</h4>

                    <p>Източната порта на каменната крепост (след частична реставрация).</p>
                </li>
                <li class="last">
                    <div class="imgholder"><a href="images/slide3.jpg" data-gal="prettyPhoto[featured]"
                                              title="НИАР-Плиска от високо"><img src="images/featured3.jpg" width="275"
                                                                                height="145" alt=""/></a></div>
                    <h4>НИАР-Плиска от високо</h4>

                    <p>Първопрестолна Плиска - панорамна снимка на Вътрешния град.</p>
                </li>
<!--test foto -->
  <li>
<a href="images/slide4.jpg" data-gal="prettyPhoto[featured]"
                                                              title="Kаменна площадка"></a></div>
</li>
<!--test foto -->
            </ul>
            <br class="clear"/>
        </article>
    </div>
</div>
<div class="main-container">
</div>

<br/>
<br/>
<br/>


</body>
</html>
<?php
include 'footer.php';
?>
