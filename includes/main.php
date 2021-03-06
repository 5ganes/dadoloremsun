<style type="text/css">
  .slider-prev{background-image: url('images/slider-prev.png')}
  .slider-next{background-image: url('images/slider-next.png')
</style>
<div id="content" class="cf">
  <div id="slider" class="slider-content">
    <div id="basic-slider" style="height: 327.958px; max-width: 480px; position: relative;">  
      <ul class="bjqs" style="height: 327.958px; width: 100%; display: block;">
        <?php
        $slide=$groups->getByParentId(SLIDER);
        while($slideGet=$conn->fetchArray($slide)){?>
          <li class="bjqs-slide" style="">
            <img class="slider-element" src="<?=CMS_GROUPS_DIR.$slideGet['image'];?>" alt="">
            <p class="slider-element"><?=$slideGet['shortcontents'];?></p>  
            <p class="bjqs-descript"><?=$slideGet['shortcontents'];?></p>
          </li>
        <?php }?>
      </ul>
      <ul class="bjqs-controls v-centered">
        <li class="bjqs-prev">
          <a href="#" data-direction="previous" style="top: 43.5294%;"><span class="slider-prev"></span></a>
        </li>
        <li class="bjqs-next">
          <a href="#" data-direction="forward" style="top: 43.5294%;"><span class="slider-next"></span></a>
        </li>
      </ul>
    </div>
  </div>  
  <article id="post-77" class="single-view post-77 page type-page status-publish hentry">
    <header class="entry-header cf">
      <?php $welcome=$conn->fetchArray($groups->getById(WELCOME));?>
      <h1 class="entry-title"><?=$welcome['name'];?></h1>
    </header>
    <div class="entry-byline cf">
    </div>
    <div class="entry-content cf" style="text-align: justify;">
      <?=$welcome['shortcontents'];?>
      <br>
      <a href="<?=$welcome['urlname'];?>"><em><strong>Read More</strong></em></a>
      </p>
    </div>
    <footer class="entry-footer cf">
    </footer>
  </article>
  <div id="comment-area">
    <div id="comments">
    </div>
  </div>
</div>

<div id="sidebar-right" class="sidebar cf">
  <div id="widgets-wrap-sidebar-right">
    
    
    <div id="ewic-widget-2" class="widget-sidebar frontier-widget widget_ewic_sc_widget">
      <div id="ewic-conwidget-75">
        <div id="preloaderwidget-75" class="sliderpreloader" style="display: none;"></div>
          <div class="bx-wrapper" style="max-width: 100%; margin: 0px auto;">
            <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 238px;">
              <ul style="width: auto; position: relative;" class="bxsliderwidget-75">
                <?php
                $gallery=$groups->getByParentId(PHOTO_GALLERY);
                while($galleryGet=$conn->fetchArray($gallery)){?>
                  <li class="ewic-slider" style="float: none; list-style: none; position: absolute; width: 200px; z-index: 0; display: none;">
                    <a href="<?=CMS_GROUPS_DIR.$galleryGet['image'];?>" title="<?=$galleryGet['shortcontents'];?>" rel="ewicwidgetprettyPhoto[75]">
                      <img title="<?=$galleryGet['shortcontents'];?>" class="ewic-wid-imgs" 
                      src="<?=CMS_GROUPS_DIR.$galleryGet['image']?>">
                    </a>
                    <div class="ewic-caption" style="display: block; overflow: hidden; height: 1px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                      <span><?=$galleryGet['shortcontents']?></span>
                    </div>
                  </li>

                  <!-- <li class="ewic-slider" style="float: none; list-style: none; position: absolute; width: 200px; z-index: 0; display: none;">
                    <a href="./index_files/RAJENDRA-LAMICHHANE-2.jpg" title="RAJENDRA LAMICHHANE (2)" rel="ewicwidgetprettyPhoto[75]"><img title="RAJENDRA LAMICHHANE (2)" class="ewic-wid-imgs" src="./index_files/RAJENDRA-LAMICHHANE-2.jpg"></a>
                    <div class="ewic-caption" style="display: block; overflow: hidden; height: 1px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;"><span>RAJENDRA LAMICHHANE (2)</span>
                    </div>
                  </li> -->

                <? }?>
              </ul>
            </div>
            <div class="bx-controls bx-has-controls-direction bx-has-controls-auto">
              <div class="bx-controls-direction">
                <a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a>
              </div>
              <div class="bx-controls-auto">
                <div class="bx-controls-auto-item">
                  <a class="bx-start active" href="">Start</a>
                </div>
                <div class="bx-controls-auto-item">
                  <a class="bx-stop" href="">Stop</a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <script type="text/javascript">
            jQuery(document).ready(function() {
              jQuery("#preloaderwidget-75").fadeOut(2000, function () {
              jQuery(".bxsliderwidget-75, .ewc-aff-link").fadeIn(3000);
              jQuery(".bxsliderwidget-75").bxSlider({
                slideWidth: 0,
                slideMargin: 10,
                minSlides: 1,
                pager: false,
                useCSS: false,
                easing: "easeInOutCubic",
                auto: true,
                autoControls: true,
                stopAuto: false,
                speed: 2000,
                pause: 5000,
                adaptiveHeight: true,
                adaptiveHeightSpeed: 700,
                controls: true,
                preloadImages: "visible",
                infiniteLoop: true,
                captions: true,
                autoHover: true,
                mode: "fade",
                onSlideBefore:  function() {
                  jQuery(".bxsliderwidget-75 .ewic-caption").slideUp();
                      },
                onSlideAfter: function() {
                  jQuery("."+jQuery(".bxsliderwidget-75").parent().next().find(".bx-controls-auto").find("a").attr("class")).trigger("click");
                  jQuery(".bxsliderwidget-75 .ewic-caption").slideDown();
                      }
                
                });
                
                jQuery(".bx-clone a").removeAttr( "rel" ); 
                
            jQuery("a[rel^='ewicwidgetprettyPhoto[75]']").ewcPhoto({theme: "ewc_default", allow_expand: false, deeplinking: false, slideshow:4000, autoplay_slideshow:true, social_tools:false});
                  
              });
            });
          </script>
        </div>
      </div>

      <div id="text-6" class="widget-sidebar frontier-widget widget_text">
        <div class="textwidget">
          <a href="bills.php"><img src="images/Untitled.png"></a>
        </div>
      </div>

      <div id="text-4" class="widget-sidebar frontier-widget widget_text">
        <h4 class="widget-title">डाउनलोड्स</h4>
        <div class="textwidget">
          <?php
          $download=$groups->getByParentId(PUBLICATION);
          while($downloadGet=$conn->fetchArray($download)){?>
            <a href="<?=CMS_FILES_DIR.$downloadGet['contents']?>" target="_blank">
              <?=$downloadGet['name'];?>
            </a><br>
          <? }?>
        </div>
      </div>

      <div id="notice_board_widget-2" class="widget-sidebar frontier-widget widget_notice_board_widget">
      <h4 class="widget-title">सूचना </h4>
      <div class="msnb_notice scroll-up">
        <ul class="notice-list">
          <?php
          $news=$groups->getByParentId(NEWS);
          while($newsGet=$conn->fetchArray($news)){?>
            <li>
              <a href="<?=$newsGet['urlname'];?>"><?=$newsGet['name'];?></a>
            </li>
          <?php }?>
        </ul>
      </div>
    </div>

    </div>
  </div>