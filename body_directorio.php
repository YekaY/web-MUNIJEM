<!--titulo-->
<section class="mi-tabs-medium" style="background-image: url('images/directoriocomercial_1.jpg');">
  <div class="overlay-medium">
    <div class="main-page">
      <div class="contenedor">
        <span>Directorio Empresarial</span>
      </div>
    </div>
  </div>
</section>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
<style>
  [class^="swiper-button-"] {
    transition: all 0.3s ease;
  }

  .swiper-slide {
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
  }

  *,
  *:before,
  *:after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  .swiper-container {
    width: 80%;
    height: 100vh;
    float: left;
    transition: opacity 0.6s ease, transform 0.3s ease;
  }

  .swiper-container.nav-slider {
    width: 20%;
    padding-left: 5px;
  }

  .swiper-container.nav-slider .swiper-slide {
    cursor: pointer;
    opacity: 0.4;
    transition: opacity 0.3s ease;
  }

  .swiper-container.nav-slider .swiper-slide.swiper-slide-active {
    opacity: 1;
  }

  .swiper-container.nav-slider .swiper-slide .content {
    width: 100%;
  }

  .swiper-container.nav-slider .swiper-slide .content .title {
    font-size: 20px;
  }

  .swiper-container:hover .swiper-button-prev,
  .swiper-container:hover .swiper-button-next {
    transform: translateX(0);
    opacity: 1;
    visibility: visible;
  }

  .swiper-container.loading {
    opacity: 0;
    visibility: hidden;
  }

  .swiper-slide {
    overflow: hidden;
  }

  .swiper-slide .slide-bgimg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
  }

  .swiper-slide .entity-img {
    display: none;
  }

  .swiper-slide .content {
    position: absolute;
    top: 40%;
    left: 0;
    width: 50%;
    padding-left: 5%;
    color: #fff;
  }

  .swiper-slide .content .title {
    font-size: 2.6em;
    font-weight: bold;
    margin-bottom: 30px;
  }

  .swiper-slide .content .caption {
    display: block;
    font-size: 13px;
    line-height: 1.4;
    transform: translateX(50px);
    opacity: 0;
    transition: opacity 0.3s ease, transform 0.7s ease;
  }

  .swiper-slide .content .caption.show {
    transform: translateX(0);
    opacity: 1;
  }

  [class^="swiper-button-"] {
    width: 44px;
    opacity: 0;
    visibility: hidden;
  }

  .swiper-button-prev {
    transform: translateX(50px);
  }

  .swiper-button-next {
    transform: translateX(-50px);
  }
</style>
<!--slider-->
<section class="full-slider"style="height: 350px; background-image: url('images/bgpublicidad.jpg'); margin-top:-25px;">
  <div class="swiper-container main-slider loading" style="height: 350px;">
    <div class="swiper-wrapper" style="height: 350px;">
    <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(imagenes/obras/mercado.jpg)">
          <img src="imagenes/obras/mercado.jpg" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Construcción de Mercado de Abastos de Mollebamba</p>
          <span class="caption">La construccion del Mercado de Abastos con una propuesta de proyectos en los años 2019-2022</span>
        </div>
      </div>
      <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(imagenes/obras/constru.jpg)">
          <img src="imagenes/obras/constru.jpg" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Construcción de Infraestructura</p>
        </div>
      </div>
      <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(imagenes/obras/recer.jpg)">
          <img src="imagenes/obras/recer.jpg" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Construcción de Recervorio</p>
        </div>
      </div>
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
  </div>
  <!-- Thumbnail navigation -->
  <div class="swiper-container nav-slider loading" style="height: 350px;">
    <div class="swiper-wrapper" role="navigation">
      <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(imagenes/obras/mercado.jpg)">
          <img src="" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Construcción de Mercado de Abastos de Mollebamba</p>
        </div>
      </div>
      <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(imagenes/obras/constru.jpg)">
          <img src="" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Construcción de Infraestructura</p>
        </div>
      </div>
      <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(imagenes/obras/recer.jpg)">
          <img src="" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Construcción de Recervorio</p>
        </div>
      </div>

    </div>
  </div>
</section>
<!--directorio-->
<section class="full-directorio" style="margin-top: -24px; z-index: 10; ">
  <div class="ed-content" style="background-color: white;">
    <div id="container">
      <div id="parentVerticalTab">
        <ul class="resp-tabs-list hor_1">
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="1"><span>Obras Principales</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="2"><span>Obras Entregadas</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="3"><span>Obras en Ejecución</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="4"><span>Obras en Proyecto</span></li>
        </ul>
        <div class="resp-tabs-container hor_1">
          <!-- Obras Principales                                  -->
          <div>
            <div id="table1"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Obras Entregadas     -->
          <div>
            <div id="table2"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Obras en Ejecución                              -->
          <div>
            <div id="table3"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Obras en Proyecto                               -->
          <div>
            <div id="table4"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
<script>
  // Params
  let mainSliderSelector = '.main-slider',
    navSliderSelector = '.nav-slider',
    interleaveOffset = 0.5;

  // Main Slider
  let mainSliderOptions = {
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 3000
    },
    loopAdditionalSlides: 10,
    grabCursor: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    on: {
      init: function() {
        this.autoplay.stop();
      },
      imagesReady: function() {
        this.el.classList.remove('loading');
        this.autoplay.start();
      },
      slideChangeTransitionEnd: function() {
        let swiper = this,
          captions = swiper.el.querySelectorAll('.caption');
        for (let i = 0; i < captions.length; ++i) {
          captions[i].classList.remove('show');
        }
        swiper.slides[swiper.activeIndex].querySelector('.caption').classList.add('show');
      },
      progress: function() {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
          let slideProgress = swiper.slides[i].progress,
            innerOffset = swiper.width * interleaveOffset,
            innerTranslate = slideProgress * innerOffset;

          swiper.slides[i].querySelector(".slide-bgimg").style.transform =
            "translateX(" + innerTranslate + "px)";
        }
      },
      touchStart: function() {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = "";
        }
      },
      setTransition: function(speed) {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = speed + "ms";
          swiper.slides[i].querySelector(".slide-bgimg").style.transition =
            speed + "ms";
        }
      }
    }
  };
  let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

  // Navigation Slider
  let navSliderOptions = {
    loop: true,
    loopAdditionalSlides: 10,
    speed: 1000,
    spaceBetween: 5,
    slidesPerView: 5,
    centeredSlides: true,
    touchRatio: 0.2,
    slideToClickedSlide: true,
    direction: 'vertical',
    on: {
      imagesReady: function() {
        this.el.classList.remove('loading');
      },
      click: function() {
        mainSlider.autoplay.stop();
      }
    }
  };
  let navSlider = new Swiper(navSliderSelector, navSliderOptions);

  // Matching sliders
  mainSlider.controller.control = navSlider;
  navSlider.controller.control = mainSlider;
</script>
