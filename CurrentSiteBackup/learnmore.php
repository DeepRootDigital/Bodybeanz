<?php
/*
  Template Name: Learn More Page
 */
?>
<?php get_header(); ?>
<?php $options = get_option('sample_theme_options'); ?>
<div id="panel1">
  <div class="container">
    <div class="content">
      <div id="headline1">
        <img alt="vitamins" src="<?php echo $options['panel1img']; ?>" width="355" height="569" />
      </div>
      <div id="productphoto">
        <img alt="bodybeanz superfood" src="<?php echo $options['panel1productimg']; ?>" />
        <div id="description">
          <?php echo $options['blurbcontent1']; ?>
        </div>
      </div>
      <a href="<?php echo $options['buynowlink']; ?>">
        <img alt="buynow" class="buy-now-button" src="<?php echo get_template_directory_uri(); ?>/images/buynow.png" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/buynow.png'" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/buynowanim.png'" />
      </a>
      <a href="<?php echo $options['panel2link']; ?>">
        <img alt="buynow" class="butwhy" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/butwhyanim.png'" 
        onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/butwhy.png'" src="<?php echo get_template_directory_uri(); ?>/images/butwhy.png">
      </a>
    </div>
  </div>
</div>
<div id="panel2">
  <div class="container">
    <div class="content">
      <div id="col1">
        <div id="headline2">
          <img alt="headline" src="<?php echo get_template_directory_uri(); ?>/images/headline2.png" />
        </div>
        <div id="panel2content">
          <?php echo $options['panel2content']; ?>
          <?php echo $options['panel2video']; ?>
        </div>
      </div>
      <div id="col2">
        <div class="ingredient-ticker">
          <div class="ticker-wrap">
            <ul>
              <li>
                <div class="pane">
                  <div class="beantitle">battle<span>beanz</span></div>

                  <div class="ingredienttitle">Alma Berry</div>
                </div>
              </li>
              <li>
                <div class="pane">
                  <div class="beantitle">belly<span>beanz</span></div>

                  <div class="ingredienttitle">Nopal Opuntina Cactus</div>
                </div>
              </li>
              <li>
                <div class="pane">
                  <div class="beantitle">boomer<span>beanz</span></div>

                  <div class="ingredienttitle">Safflower Powder</div>
                </div>
              </li>
              <li>
                <div class="pane">
                  <div class="beantitle">battle<span>beanz</span></div>

                  <div class="ingredienttitle">Camu Camu</div>
                </div>
              </li>
              <li>
                <div class="pane">
                  <div class="beantitle">belly<span>beanz</span></div>

                  <div class="ingredienttitle">Bitter Melon Fruit</div>
                </div>
              </li>
              <li>
                <div class="pane">
                  <div class="beantitle">boomer<span>beanz</span></div>

                  <div class="ingredienttitle">Flaxseed Powder</div>
                </div>
              </li>
              <li>
                <div class="pane">
                  <div class="beantitle">battle<span>beanz</span></div>

                  <div class="ingredienttitle">Acerola Cherry</div>
                </div>
              </li>
              <li>
                <div class="pane">
                  <div class="beantitle">belly<span>beanz</span></div>

                  <div class="ingredienttitle">Fenugreek Seed</div>
                </div>
              </li>
              <li>
                <div class="pane">
                  <div class="beantitle">boomer<span>beanz</span></div>

                  <div class="ingredienttitle">Sunflower Powder</div>
                </div>
              </li>
              <li>
                <div class="pane">
                  <div class="beantitle">breakdown<span>beanz</span></div>

                  <div class="ingredienttitle">Plant Based Probiotic</div>
                </div>
              </li>
              <li>
                <div class="pane">
                  <div class="beantitle">belly<span>beanz</span></div>

                  <div class="ingredienttitle">Cinnamon Bark</div>
                </div>
              </li>     
              <li>
                <div class="pane">
                  <div class="beantitle">battle<span>beanz</span></div>

                  <div class="ingredienttitle">Rose Hips</div>
                </div>
              </li>  
              <li>
                <div class="pane">
                  <div class="beantitle">belly<span>beanz</span></div>

                  <div class="ingredienttitle">Gymnema Herb</div>
                </div>
              </li>                                                   
          </ul>
          </div>
        </div>
        <a href="<?php echo $options['buynowlink']; ?>">
          <img alt="wheel" class="buy-now-button" src="<?php echo get_template_directory_uri(); ?>/images/buynow.png" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/buynow.png'" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/buynowanim.png'" />
        </a>
        <div id="sharing">
          <img alt="share" class="sharrow" src="<?php echo get_template_directory_uri(); ?>/images/sharrow.png">
          <a id="inline" href="#sharepopup">
            <img alt="share" class="sharebutton" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/shareanim.png'" 
            onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/share.png'" src="<?php echo get_template_directory_uri(); ?>/images/share.png"></a>
          </div>
          <div id="sharepopup" style="display:none;">
            <span class='st_facebook_vcount'></span>
            <span class='st_twitter_vcount'></span>
            <span class='st_linkedin_vcount'></span>
            <span class='st_email_vcount'></span>
            <span class='st_sharethis_vcount'></span>
            <span class='st_fblike_vcount'></span>
            <span class='st_plusone_vcount'></span>
            <span class='st_pinterest_vcount'></span>
            <span class='st_instagram_vcount'></span>
          </div>
          <a href="<?php echo $options['panel3link']; ?>">
            <img alt="about" class="about-ribbon" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/aboutanim.png'" 
            onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/about.png'" src="<?php echo get_template_directory_uri(); ?>/images/about.png">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div id="panel3">
    <div class="container">
      <div class="content">
        <div id="col3">
          <div id="headline3">
            <img alt="headline" src="<?php echo get_template_directory_uri(); ?>/images/headline3.png" />
          </div>
          <div id="wheel">
            <a id="lwt"></a>
            <div id="wheelcontent1" class="whldsply">
              <div class="whltitle"><?php echo $options['lttitle']; ?></div>
              <div class="whlcontent"><?php echo $options['ltcontent']; ?></div>
              <img alt="pill" class="pill-image" src="<?php  echo $options['ltimg']; ?>" width="60" />
            </div>
            <div id="wheelcontentinit" class="whldsply">
              <div class="whlcontent">
                <?php echo $options['initcontent']; ?>
              </div>
            </div>
            <a id="rwt"></a>
            <div id="wheelcontent2" class="whldsply">
              <div class="whltitle">
                <?php echo $options['rttitle']; ?>
              </div>
              <div class="whlcontent">
                <?php echo $options['rtcontent']; ?>
              </div>  
              <img alt="pill" class="pill-image" src="<?php echo $options['rtimg']; ?>" width="60" />
            </div>
            <a id="lwb"></a>
            <div id="wheelcontent3" class="whldsply">
              <div class="whltitle">
                <?php echo $options['lbtitle']; ?>
              </div>
              <div class="whlcontent">
                <?php echo $options['lbcontent']; ?>
              </div>
              <img alt="pill" class="pill-image"  src="<?php echo $options['lbimg']; ?>" width="60" />
            </div>
            <a id="rwb"></a>
            <div id="wheelcontent4" class="whldsply">
              <div class="whltitle">
                <?php echo $options['rbtitle']; ?>
              </div>
              <div class="whlcontent">
                <?php echo $options['rbcontent']; ?>
              </div>
              <img alt="pill" class="pill-image" src="<?php echo $options['rbimg']; ?>" width="60" />
            </div>
          </div>
          <div id="panel3content">
            <p>
              <?php echo $options['panel3content']; ?>
            </p>
          </div>
          <img alt="arrow" src="<?php echo get_template_directory_uri(); ?>/images/wheel/arrow.png" style="position:absolute; margin-top:560px; margin-left:-90px;" />
        </div>
        <a href="<?php echo $options['buynowlink']; ?>">
          <img alt="buynow" class="buy-now-button" src="<?php echo get_template_directory_uri(); ?>/images/buynow.png" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/buynow.png'" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/buynowanim.png'" />
        </a>
        <a href="<?php echo $options['panel4link']; ?>">
          <img alt="buynow" class="vs-ribbon" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/vsanim.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/vs.png'" src="<?php echo get_template_directory_uri(); ?>/images/vs.png">
        </a>
      </div>
    </div>
  </div>
<div id="panel4">
  <div class="container">
    <div class="content">
      <div id="col4">
        <div id="headline4">
          <img alt="headline" src="<?php echo get_template_directory_uri(); ?>/images/headline4.png" />
        </div>
        <div id="panel4content">
          <p style="margin-top:2px;">
            <?php echo $options['panel4content']; ?>
          </p>
        </div>
        <div id="chart">
          <div id="charttitle">
            <div style="margin-right:42px;" class="charttitle">
             <?php echo $options['thead1']; ?>
           </div>
           <div style="margin-right:27px;" class="charttitle">
            <?php echo $options['thead2']; ?>
          </div>
          <div style="" class="charttitle">
            <?php echo $options['thead3']; ?>
          </div>
        </div>
        <div class="chartrow">
          <div class="chartitem"><?php  echo $options['ct1']; ?></div>
          <div style="color:#f17a1c;" class="option"><?php  echo $options['tc1']; ?></div>
          <div style="margin-left:58px;" class="option"><?php  echo $options['tc2']; ?></div>
          <div style="margin-left:106px;" class="option"><?php  echo $options['tc3']; ?></div>
        </div>
        <div class="chartrow">
          <div class="chartitem"><?php  echo $options['ct2']; ?></div>
          <div style="color:#f17a1c;" class="option"><?php  echo $options['tc01']; ?></div>
          <div style="margin-left:58px;" class="option"><?php  echo $options['tc02']; ?></div>
          <div style="margin-left:106px;" class="option"><?php  echo $options['tc03']; ?></div>
        </div>
        <div class="chartrow">
          <div class="chartitem"><?php  echo $options['ct3']; ?></div>
          <div style="color:#f17a1c;" class="option"><?php  echo $options['tcc01']; ?></div>
          <div style="margin-left:58px;" class="option"><?php  echo $options['tcc02']; ?></div>
          <div style="margin-left:106px;" class="option"><?php  echo $options['tcc03']; ?></div>
        </div>
        <div class="chartrow">
          <div class="chartitem"><?php  echo $options['ct4']; ?></div>
          <div style="color:#f17a1c;" class="option"><?php  echo $options['tccc01']; ?></div>
          <div style="margin-left:58px;" class="option"><?php  echo $options['tccc02']; ?></div>
          <div style="margin-left:106px;" class="option"><?php  echo $options['tccc03']; ?></div>
        </div>
        <div class="chartrow">
          <div class="chartitem"><?php  echo $options['ct5']; ?></div>
          <div style="color:#f17a1c;" class="option"><?php  echo $options['tcccc01']; ?></div>
          <div style="margin-left:58px;" class="option"><?php  echo $options['tcccc02']; ?></div>
          <div style="margin-left:106px;" class="option"><?php  echo $options['tcccc03']; ?></div>
        </div>
        <div class="chartrow">
          <div class="chartitem"><?php  echo $options['ct6']; ?></div>
          <div style="color:#f17a1c;" class="option"><?php  echo $options['tccccc01']; ?></div>
          <div style="margin-left:58px;" class="option"><?php  echo $options['tccccc02']; ?></div>
          <div style="margin-left:106px;" class="option"><?php  echo $options['tccccc03']; ?></div>
        </div>
      </div>
      <p>You can look at the product FAQ,  <a href="http://bodybeanz.com/?page_id=59 ">Click here</a></p>
    </div>
    <a href="<?php echo $options['buynowlink'];?>">
      <img alt="buynow" class="buy-now-button" src="<?php echo get_template_directory_uri(); ?>/images/buynow.png" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/buynow.png'" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/buynowanim.png'" />
    </a>
    <a href="<?php echo $options['panel5link']; ?>">
      <img alt="compare" class="compare-ribbon" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/compareanim.png'" 
      onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/compare.png'" src="<?php echo get_template_directory_uri(); ?>/images/compare.png">
    </a>
  </div>
</div>
</div>
<div id="panel5">
  <div class="container">
    <div class="content">
      <div id="col5">
        <div id="headline5">
          <img alt="headline" src="<?php echo get_template_directory_uri(); ?>/images/headline5.png" />
        </div>
        <div id="panel5content">
          <p>
            <?php echo $options['panel5content']; ?>
          </p>
        </div>
        <div id="bottleimages">
          <img alt="compare or buy" style="float:left;" src="<?php echo $options['panel5compareimg1']; ?>"  />
          <img alt="comparison" class="right" src="<?php echo $options['panel5compareimg2']; ?>" />
          <a href="<?php echo $options['buynowlink'];?>">
            <img alt="compare vitamins" class="measily-ribbon" src="http://bodybeanz.com/wp-content/uploads/2013/11/bodybeanz_type.png">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>