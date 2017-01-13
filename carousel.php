<div class="col-md-12">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
        <ol class="carousel-indicators">
            <!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Слайды карусели -->
        <div class="carousel-inner">
            <!-- Слайды создаются с помощью контейнера с классом item, внутри которого помещается содержимое слайда -->
            <div class="active item">
                <h2>Слайд №1</h2>
                <div class="carousel-caption">
                    <h3>Заголовок 1 слайда</h3>
                    <p>Текст (описание) 1 слайда...</p>
                </div>
            </div>
            <!-- Слайд №2 -->
            <div class="item">
                <h2>Slide 2</h2>
                <div class="carousel-caption">
                    <h3>Second slide label</h3>
                    <p>Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                </div>
            </div>
            <!-- Слайд №3 -->
            <div class="item">
                <h2>Slide 3</h2>
                <div class="carousel-caption">
                    <h3>Third slide label</h3>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <!-- Навигация для карусели -->
        <!-- Кнопка, осуществляющая переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <!-- Кнопка, осуществляющая переход на следующий слайд с помощью атрибута data-slide="next" -->
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>