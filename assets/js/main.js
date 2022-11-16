(function ($) {
  "use strict";
  $(document).ready(function () {
    var serverUrl = 'https://young-wave-84989.herokuapp.com/rendivalores/';
    var serverUrl2 = 'https://untitled-r0qbaqcziew6.runkit.sh/';
    var encode = 'cmVuZGl2YWxvcmVzOnJlbmRwYXNz';
    var lang = 'es';
    var _width;
    var left;
    var containerwidth;
    var bvcTicker;
    function getDataInstrument() {
      //alert('aqui');
      $.ajax({
        url: serverUrl + 'bvc',
        headers: {
          "Accept-Language": lang,
          'Access-Control-Allow-Origin': '*',
          "Authorization": "Basic " + encode
        },
        success: function (result) {
          if (result.length > 0) {
            var data = result;
            bvcTicker = data;
            //createBVCTable(data)
            createTicker()
            console.log('got bvc data');
          } else {
            console.log('Connection failure, retrying');
            getDataInstrument();
          }
        },
        error: function (error) {
          console.log('Error loading data');
        }
      });
    }
    function createTicker() {
      var data = _.concat(bvcTicker);
      var ticker = _.uniqBy(data, 'symbol');
      ticker.forEach(function (data) {
        var tickerData = document.getElementById("tickerData");
        var spanTag = document.createElement("span");
        spanTag.appendChild(document.createTextNode(`${data.displayName}  ${data.value.displayValue} `))

        var spanTag2 = document.createElement("span");

        if (data.variation.value.value[0] == "-") {
          spanTag2.setAttribute("style", "color:#ef5350");

        } else {
          spanTag2.setAttribute("style", "color:#27fa5e");
        }

        spanTag2.appendChild(document.createTextNode(data.variation.value.displayValue ? data.variation.value.displayValue + "(" + data.variation.percentage.displayValue + ")" + ' ' : ""))


        tickerData.appendChild(spanTag)
        tickerData.appendChild(spanTag2)
      })
      var width = $('.ticker-text').width(function (n, newWidth) {
        _width = newWidth;
      });
      //ticker
      var width = $('.ticker-text').width(_width);
      containerwidth = $('.ticker-container').width(),
        left = containerwidth;
      tick()
    }
    function tick() {
      if (--left < -_width) {
        left = containerwidth;
      }
      $(".ticker-text").css("margin-left", left + "px");
      setTimeout(tick, 16);
    }
    function getBCVRate() {
      $.ajax({
        url: serverUrl2,
        success: function (result) {
          var tasa = document.getElementById('tasaDolarBCV').innerHTML = result['tasa'];
          var fecha = document.getElementById('fechaValorDolarBCV').innerHTML = 'Fecha valor: ' + result['fecha'];
          var tasa = document.getElementById('bcv2').innerHTML = result['tasa'];
        },
        error: function (error) {
          console.log('Error loading data from BCV' + JSON.stringify(error));
        }
      });
    }

    getDataInstrument();
    getBCVRate();
  }); // End document ready

  jQuery(document).ready(function (e) {
    // var img = $('.bg_img');
    // img.css('background-image', function () {
    //   var bg = ('url(' + $(this).data('background') + ')');
    //   return bg;
    // });

    const list = document.querySelector("#news");
    retrieve();
    function retrieve() {
      list.innerHTML = '';
      // e.preventDefault()
      const apiKey = "a13547ca2a3c4ca9b12627e82b498cce"
      let topic = "inversion"
      //let url = 'https://newsapi.org/v2/everything?q='+topic+'&sortBy=popularity&language=es&pageSize=6&excludeDomains=hipertextual.com&qInTitle=inversion&apiKey='+apiKey
      let url = 'https://api.nytimes.com/svc/search/v2/articlesearch.json?api-key=Dsak6ljecPclOkCgEeAdB1dmdr1bEqAC&q=business'
      let web = 'https://nytimes.com/';
      let output = "";
      let media = "";
      let x = 0;
      fetch(url).then((res) => {
        return res.json()
      }).then((data) => {
        console.log(data)
        let latestNews = data.response.docs;
        //data.articles.forEach(article=>{
        // let div1 = document.createElement('div');
        for (var i in latestNews) {
          //console.log(latestNews[i]);

          try {
            //console.log(latestNews[i].media[0].media-metadata[2].length);
            //if(latestNews[i].media[0].length > 0){
            media = latestNews[i].multimedia[2].url;
            //}
            //else{
            //  media = "";
            //}

          } catch (error) {
            console.log(error);
            media = "";
          }
          //console.log(media);

          output += '<div class="col-xl-4 col-md-6">' +
            '<div class="blog-item blog-grid mb-30">' +

            '<img class="thumb bg_img" src="' + web + media + '"/>' +
            '<div class="content">' +
            '<div class="post-tags"><a href="#0">' + latestNews[i].news_desk + '</a></div>' +
            '<h3 class="post-title"><a href="' + latestNews[i].web_url + '">' + latestNews[i].headline.main + '</a></h3>' +
            '<ul class="post-meta">' +
            '<li>' +
            '<a href="#0" class="post-author">' +
            '<div class="thumb"><img src="assets/images/blog/a1.png" alt="image"></div>' +
            '<span class="name">' + latestNews[i].byline.original + '</span>' +
            '</a>' +
            '</li>' +
            '<li>' +
            '<a href="#0" class="post-view">' +
            '<i class="fa fa-eye"></i>' +
            '<span class="amount"></span>' +
            '<span class="text">' + latestNews[i].news_desk + '</span>' +
            '</a>' +
            '</li>' +
            '</ul>' +
            '</div>' +
            '</div>' +
            '</div>';
          x++;
          if (x === 3) {
            break;
          }
        }
        // })
        if (output !== "") {
          $("#news").html(output);
        }
      })

    }
  });

  //menu options custom affix
  var fixed_top = $(".header-section");
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 50) {
      fixed_top.addClass("animated fadeInDown menu-fixed");
    }
    else {
      fixed_top.removeClass("animated fadeInDown menu-fixed");
    }
  });

  $(window).on('load', function () {

    //preloader
    $(".preloader").delay(300).animate({
      "opacity": "0"
    }, 500, function () {
      $(".preloader").css("display", "none");
    });

    // run test on initial page load
    checkSize();
    // run test on resize of the window
    // $(window).resize(checkSize);

    //menu options custom affix
    var fixed_top = $(".header-section");
    $(window).on("scroll", function () {

      if ($(this).scrollTop() > 50) {
        fixed_top.addClass("header-close");
      }
      else {
        fixed_top.removeClass("header-close");
      }
    });
  });

  //Function to the css rule
  function checkSize() {
    if (window.matchMedia('(max-width: 1199px)').matches) {
      $(".navbar-collapse>ul>li>a, .navbar-collapse ul.sub-menu>li>a").on("click", function () {
        var element = $(this).parent("li");
        if (element.hasClass("open")) {
          element.removeClass("open");
          element.find("li").removeClass("open");
          element.find("ul").slideUp(500, "linear");
        }
        else {
          element.addClass("open");
          element.children("ul").slideDown();
          element.siblings("li").children("ul").slideUp();
          element.siblings("li").removeClass("open");
          element.siblings("li").find("li").removeClass("open");
          element.siblings("li").find("ul").slideUp();
        }
      });
    }
  };

  $('.offer-slider').owlCarousel({
    loop: true,
    margin: 0,
    responsiveClass: true,
    dots: false,
    center: true,
    items: 4,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      768: {
        items: 2,
        nav: false,
        center: false,
      },
      992: {
        items: 3,
        nav: true,
        center: false,
      },
      1200: {
        items: 4,
        nav: true,
        center: false,
      }
    }
  });

  $('.investor-slider').owlCarousel({
    loop: true,
    margin: 0,
    responsiveClass: true,
    dots: false,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      768: {
        items: 2,
        nav: false
      },
      992: {
        items: 3,
        nav: true,
        loop: false
      }
    }
  });

  //js code for mobile menu 
  $(".menu-toggle").on("click", function () {
    $(this).toggleClass("is-active");
  });

  $('.faq-header').on('click', function (e) {
    e.preventDefault();

    var $this = $(this);

    if ($this.next().hasClass('show')) {
      $this.next().removeClass('show');
      $this.next().slideUp(350);
      $this.removeClass('open');
    } else {
      $this.next().toggleClass('show');
      $this.next().slideToggle(350);
      $this.addClass('open');
    }
  });

  // Show or hide the sticky footer button
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 200) {
      $(".scroll-to-top").fadeIn(200);
    } else {
      $(".scroll-to-top").fadeOut(200);
    }
  });
  // Animate the scroll to top
  $(".scroll-to-top").on("click", function (event) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 800);
  });

})(jQuery);
