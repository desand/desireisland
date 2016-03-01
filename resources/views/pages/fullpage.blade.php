@extends('fullpage-master')

@section('body')
    <fullpage name="fullpage"
    		  :normal-scroll-elements=['.NormalScroll']
          slide-selector='slider'>
    	<div class="section relative">
    		<div class="container-fluid fullheight relative">
          <div class="row">
      			<section class="header">
      				<div class="col-xs-4 logo">
                <img src="images/logo.png" alt="logo" height="50px">
              </div>
      				<div class="col-xs-4 text-center text-yellow">
      				FAKE CHARACTERS<br>
  					FAKE<br>
  					假字假字假字假字<br>
  					</div>
      				<div class="col-xs-4 logo text-right">
                <img src="images/logo.png" alt="logo" height="50px">
              </div>
      			</section>
      			<div class="clearfix"></div>
      			<section class="nav">
      				<css3navigation>
                <li class="cols-5 text-center">
                  <a href="#">新闻及资讯</a>
                  <ul class="submenu">
                    <li><a href="#0">假字</a></li>
                    <li><a href="#0">假字</a></li>
                    <li><a href="#0">假字</a></li>
                    <li><a href="#0">假字</a></li>
                  </ul>  
                </li>
                <li class="cols-5 text-center">
                  <a href="#">产业政策及动态</a>
                    <ul class="submenu">
                    <li><a href="#0">假字</a></li>
                    <li><a href="#0">假字</a></li>
                    <li><a href="#0">假字</a></li>
                    <li><a href="#0">假字</a></li>
                  </ul> 
                </li>
                <li class="cols-5 text-center">
                  <a href="#">烟草种类</a>
                    <ul class="submenu">
                    <li><a href="#0">假字</a></li>
                    <li><a href="#0">假字</a></li>
                    <li><a href="#0">假字</a></li>
                  </ul> 
                </li>
                <li class="cols-5 text-center">
                  <a href="#">投资者服务</a>
                    <ul class="submenu">
                    <li><a href="#0">假字</a></li>
                    <li><a href="#0">假字</a></li>
                    <li><a href="#0">假字</a></li>
                  </ul> 
                </li>
                <li class="cols-5 text-center">
                  <a href="#">联系方式</a>
                </li>
              </css3navigation>
      			</section>
            <section>
              <vs-carousel :interval=10000 :controls="false" :indicators="false" id="vsCarousel">
                <vs-slide class="item fullheight flexbackground"
                  style="background-image: url(images/banner1.jpg)">
                  <img src="http://www.menda.mobi/public/default/frontEnd/image/transparent.png" alt="" height="100%">
                </vs-slide>
                <vs-slide class="item fullheight flexbackground"
                  style="background-image: url(images/banner1.jpg)">
                  <img src="http://www.menda.mobi/public/default/frontEnd/image/transparent.png" alt="" height="100%">
                </vs-slide>
              </vs-carousel>
            </section>
            <section>
              <div id="indexMarquee">
                假字假字假字假字  •  假字假字假字假字  •  假字假字假字假字假字  •  假字假字假字假字假字假字假字 >>>
              </div>
            </section>
          </div>
    		</div>
    	</div>
	    <div class="section relative" id="section2">
        <section class="header">
          <div class="col-xs-12 text-center text-yellow">
            FAKE CHARACTERS FAKE<br>
          假字假字假字假字<br>
          </div>
        </section>
        <section id="mainContent">
          <div class="col-xs-7">
            <video id="indexVideo" src="/movie/movie.ogg" controls="controls">
            your browser does not support the video tag
            </video>
          </div>
          <div class="col-xs-5">
            <div class="col-xs-12 mainContent__title">
              假字假字假假字假字假字假字
            </div>
            <div class="col-xs-12 mainContent__content">
              假字假字假假字假字假字假字假字假字假假字假字假字假字假字假字假假字假字假字假字假字假字假假字假字假字假字假字假字假假字假字假字假字假字假字假假字假字假字假字假字假字假假字假字假字假字
            </div>
          </div>
        </section>
        <section id="footer">
          <div class="footer__nav col-xs-12">
            <div class="col-xs-2 cols-5 text-center">
              <a href="#">新闻及资讯</a>
            </div>
            <div class="col-xs-2 cols-5 text-center">
              <a href="#">产业政策及动态</a>
            </div>
            <div class="col-xs-2 cols-5 text-center">
              <a href="#">烟草种类</a>
            </div>
            <div class="col-xs-2 cols-5 text-center">
              <a href="#">投资者服务</a>
            </div>
            <div class="col-xs-2 cols-5 text-center">
              <a href="#">联系方式</a>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="footer__info">
            <div class="col-xs-6">
              <img src="images/img1.png" alt="third"/>
            </div>
            <div class="col-xs-6 text-right">
              powered by KAID &copy; 2013- 2016
            </div>
          </div>
        </section>
      </div>
    </fullpage>
@stop

@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $(window).resize(function(){
        var tar = $('#vsCarousel');
        var w = tar.width();
        var h = tar.height();
        if(w >= h)
        {
          tar.find('.flexbackground').addClass('flexbackground__width').removeClass('flexbackground__height');
        }
        else
        {
          tar.find('.flexbackground').addClass('flexbackground__height').removeClass('flexbackground__width');
        }

        $('#indexVideo').height($('#mainContent').height());
        $('#indexVideo').width('100%');
      });
      $(window).resize();
    });
  </script>
@stop