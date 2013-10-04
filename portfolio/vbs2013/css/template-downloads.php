<?php
/*
Template Name: Downloads
*/
?>

<?php get_header(); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">

				<?php remove_filter( 'the_content', 'wpautop' ); the_content(); ?>
                   
                    <div class="col-narrow left">
                        <div class="wrap links box3">
                            <div class="col-head">
                                <h3>Bible Content</h5>
                            </div>
                            <ul class="links-list target-links">
                                <!--<li><a href="#special-ed">Special Needs</a></li>  -->
                                 <li><a href="#media">Media &amp; Images</a></li>
                                <li><a href="#helps">Folow-ups &amp; Helps</a></li>
                               <!-- <li><a href="#club-vbs">Club VBS Downloads</a></li>
                                <li><a href="#asscoiational">Asscoiational Resources</a></li> -->
                            </ul>
                        </div>
                    </div> <!-- .col_narrow.right -->


                    <div class="col-wide right">
                        <div class="col-head">
                            <h2>Downloads</h2>
                        </div>
                        <div id="helps" class="clearfix target">
                            <h4 class="special">Folow-up &amp; Help Marterials</h4>
                            <div class="content-block link-block clearfix">
                                <h5 class="sub-title">Worship Rally Helps</h5>
                                <ul>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-vbs-worship-rally-drama-scriptpdf">Worship Rally Drama Script</a></li>
                                </ul>
                            </div> <!-- .content-block -->
                        </div>  <!-- #helps -->

                     <!--    <div id="special-ed" class=" target">
                            <h4 class="special">Special Needs Information &amp; Helps</h4>
                            <div class="content-block">
                            </div>
                        </div> --> <!-- #special-ed -->

                        <div id="media" class="clearfix target">
                            <h4 class="special">Music, Images &amp; Videos</h4>

                            <div class="content-block link-block clearfix">
                                <h5 class="sub-title">Songs</h5>
                                <ul>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-vbs-change-my-heart">Change My Heart</a></li>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-vbs-colossal-coaster-world">Colossal Coaster World Theme</a></li>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-vbs-i-will-trust-in-you">I will Trust in You</a></li>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-club-vbs-he-made-a-way-listening-version">He Made a Way</a></li>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-club-vbs-jehovah-jireh-listening-version">Jehovah Jirah</a></li>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-club-vbs-jungle-jaunt-listening-version">Jungle Jaunt</a></li>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-club-vbs-lord-of-all-listening-version">Lord of All</a></li>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-vbs-jungle-jaunt-REV-FM">Jungle Jaunt - REV-FM</a></li>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-vbs-speak-up-tell-the-world">Speak Up: Tell the World</a></li>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-vbs-stand-strong">Stand Strong</a></li>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-vbs-the-ride-of-your-life">The Ride of Your Life</a></li>
                                </ul>
                            </div> <!-- .content-block -->

                            <div class="content-block link-block clearfix">
                                <h5 class="sub-title">Audio Devotions</h5>
                                <ul>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-vbs-day-1-devotion">Day 1 Devotion</a></li>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-vbs-day-2-devotion">Day 2 Devotion</a></li>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-vbs-day-3-devotion">Day 3 Devotion</a></li>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-vbs-day-4-devotion">Day 4 Devotion</a></li>
                                    <li><a class="dl" href="http://s7d9.scene7.com/is/content/LifeWayChristianResources/2013-vbs-day-5-devotion">Day 5 Devotion</a></li>
                                </ul>
                            </div> <!-- .content-block -->







                            <div class="content-block images clearfix">
                                <h5 class="sub-title">Desktop Wallpaper</h5>
                                <div class="desktop clearfix">
                                    <!-- Desktop -->
                                    <div class="image-block block-wrap">
                                        <div class="thumb-block">
                                            <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-800x600-3BK1?wid=300&fmt=jpg&qlt=75"/>
                                        </div>
                                        <p class="title">Desktop 1</p>
                                        <ul>
                                            <li><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-800x600-3BK1?scl=1">800x600</a></li>
                                            <li><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-1024x768-2BK1?scl=1">1024x768</a></li>
                                            <li><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-1600x1200-BK1?scl=1">1600x1200</a></li>
                                        </ul>
                                    </div>

                                    <div class="image-block block-wrap">
                                        <div class="thumb-block">
                                            <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-800x600-3BK2?wid=300&fmt=jpg&qlt=75"/>
                                        </div>
                                        <p class="title">Desktop 2</p>
                                        <ul>
                                            <li><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-800x600-3BK2?scl=1">800x600</a></li>
                                            <li><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-1024x768-2BK2?scl=1">1024x768</a></li>
                                            <li><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-1600x1200-BK2?scl=1">1600x1200</a></li>
                                        </ul>
                                    </div>

                                    <div class="image-block block-wrap">
                                        <div class="thumb-block">
                                            <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-800x600-3BK3?wid=300&fmt=jpg&qlt=75"/>
                                        </div>
                                        <p class="title">Desktop 3</p>
                                        <ul>
                                            <li><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-800x600-3BK3?scl=1">800x600</a></li>
                                            <li><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-1024x768-2BK3?scl=1">1024x768</a></li>
                                            <li><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-1600x1200-BK3?scl=1">1600x1200</a></li>
                                        </ul>
                                    </div>

                                    <div class="image-block block-wrap">
                                        <div class="thumb-block">
                                            <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-800x600-3BK4?wid=300&fmt=jpg&qlt=75"/>
                                        </div>
                                        <p class="title">Desktop 4</p>
                                        <ul>
                                            <li><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-800x600-3BK4?scl=1">800x600</a></li>
                                            <li><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-1024x768-2BK4?scl=1">1024x768</a></li>
                                            <li><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-1600x1200-BK4?scl=1">1600x1200</a></li>
                                        </ul>
                                    </div>

                                    <div class="image-block block-wrap">
                                        <div class="thumb-block">
                                            <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-800x600-3BK5?wid=300&fmt=jpg&qlt=75"/>
                                        </div>
                                        <p class="title">Desktop 5</p>
                                        <ul>
                                            <LI><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-800x600-3BK5?scl=1">800x600</a></LI>
                                            <LI><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-1024x768-2BK5?scl=1">1024x768</a></LI>
                                            <LI><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-1600x1200-BK5?scl=1">1600x1200</a></LI>
                                       </ul>
                                    </div>

                                    <div class="image-block block-wrap">
                                        <div class="thumb-block">
                                            <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-800x600-3BK6?wid=300&fmt=jpg&qlt=75"/>
                                        </div>
                                        <p class="title">Desktop 6</p>
                                        <ul>
                                            <LI><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-800x600-3BK6?scl=1">800x600</a></LI>
                                            <LI><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-1024x768-2BK6?scl=1">1024x768</a></LI>
                                            <LI><a class="dl" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-desktop-wallpaper-1600x1200-BK6?scl=1">1600x1200</a></LI>
                                       </ul>
                                    </div>
                                    <!-- end Desktop -->
                                </div>

                            </div> <!-- .content-block -->

                                <!-- iPad -->
                            <div class="content-block images clearfix">
                                <h5 class="sub-title">iPad Wallpaper</h5>
                                <div class="ipad-wp clearfix">
                                    <a class="dl block-wrap" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-ipad-wallpaper-BK1?scl=1">
                                        <div class="image-block">
                                            <div class="thumb-block">
                                                <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-ipad-wallpaper-BK1?wid=300&fmt=jpg&qlt=75"/>
                                            </div>
                                            <p class="title">Download</p>
                                        </div>
                                    </a>

                                    <a class="dl block-wrap" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-ipad-wallpaper-BK2?scl=1">
                                        <div class="image-block">
                                            <div class="thumb-block">
                                                <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-ipad-wallpaper-BK2?wid=300&fmt=jpg&qlt=75"/>
                                            </div>
                                            <p class="title">Download</p>
                                        </div>
                                    </a>

                                    <a class="dl block-wrap" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-ipad-wallpaper-BK3?scl=1">
                                        <div class="image-block">
                                            <div class="thumb-block">
                                                <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-ipad-wallpaper-BK3?wid=300&fmt=jpg&qlt=75"/>
                                            </div>
                                            <p class="title">Download</p>
                                        </div>
                                    </a>

                                    <a class="dl block-wrap" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-ipad-wallpaper-BK5?scl=1">
                                        <div class="image-block">
                                            <div class="thumb-block">
                                                <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-ipad-wallpaper-BK5?wid=300&fmt=jpg&qlt=75"/>
                                            </div>
                                            <p class="title">Download</p>
                                        </div>
                                    </a>

                                    <a class="dl block-wrap" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-ipad-wallpaper-BK6?scl=1">
                                        <div class="image-block">
                                            <div class="thumb-block">
                                                <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-ipad-wallpaper-BK6?wid=300&fmt=jpg&qlt=75"/>
                                            </div>
                                            <p class="title">Download</p>
                                        </div>
                                    </a>

                                    <a class="dl block-wrap" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-ipad-wallpaper-BK7?scl=1">
                                        <div class="image-block">
                                            <div class="thumb-block">
                                                <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-ipad-wallpaper-BK7?wid=300&fmt=jpg&qlt=75"/>
                                            </div>
                                            <p class="title">Download</p>
                                        </div>
                                    </a>
                                </div>
                                <!-- end iPad -->

                            </div> <!-- .content-block -->

                            <div class="content-block images  clearfix">

                                <!-- iPhone -->
                                <h5 class="sub-title">iPhone Wallpaper</h5>
                                <div class="iphone-wp clearfix">
                                    <a class="dl block-wrap" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-iphone-wallpaper-BK1?scl=1">
                                        <div class="image-block">
                                            <div class="thumb-block">
                                                <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-iphone-wallpaper-BK1?wid=300&fmt=jpg&qlt=75"/>
                                            </div>
                                            <p class="title">Download</p>
                                        </div>
                                    </a>
                                    <a class="dl block-wrap" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-iphone-wallpaper-BK2?scl=1">
                                        <div class="image-block">
                                            <div class="thumb-block">
                                                <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-iphone-wallpaper-BK2?wid=300&fmt=jpg&qlt=75"/>
                                            </div>
                                            <p class="title">Download</p>
                                        </div>
                                    </a>
                                    <a class="dl block-wrap" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-iphone-wallpaper-BK3?scl=1">
                                        <div class="image-block">
                                            <div class="thumb-block">
                                                <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-iphone-wallpaper-BK3?wid=300&fmt=jpg&qlt=75"/>
                                            </div>
                                            <p class="title">Download</p>
                                        </div>
                                    </a>
                                    <a class="dl block-wrap" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-iphone-wallpaper-BK4?scl=1">
                                        <div class="image-block">
                                            <div class="thumb-block">
                                                <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-iphone-wallpaper-BK4?wid=300&fmt=jpg&qlt=75"/>
                                            </div>
                                            <p class="title">Download</p>
                                        </div>
                                    </a>
                                    <a class="dl block-wrap" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-iphone-wallpaper-BK5?scl=1">
                                        <div class="image-block">
                                            <div class="thumb-block">
                                                <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-iphone-wallpaper-BK5?wid=300&fmt=jpg&qlt=75"/>
                                            </div>
                                            <p class="title">Download</p>
                                        </div>
                                    </a>
                                    <a class="dl block-wrap" href="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-iphone-wallpaper-BK6?scl=1">
                                        <div class="image-block">
                                            <div class="thumb-block">
                                                <img src="http://s7d9.scene7.com/is/image/LifeWayChristianResources/2013-vbs-iphone-wallpaper-BK6?wid=300&fmt=jpg&qlt=75"/>
                                            </div>
                                            <p class="title">Download</p>
                                        </div>
                                    </a>
                                </div>
                                <!-- end iPhone -->

                            </div> <!-- .content-block -->

                            <div class="content-block videos clearfix">
                                <h5 class="sub-title">Videos</h5>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1824648296001_VBS-Colossal-Coaster-Overview.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/colossal-coaster-world-owerview_thumb.jpg"/>
                                        </div>
                                        <p class="title">Colossal Coaster World Overview</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1841291923001_melita-adrenaline-zone-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/melita-adrenaline-zone_thumb.jpg"/>
                                        </div>
                                        <p class="title">Melita Adrenaline Zone</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1841287611001_melita-cotton-candy-cafe-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/melita-cotton-candy-cafe_thumb.jpg"/>
                                        </div>
                                        <p class="title">Melita Cotton Candy Cafe</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1841286013001_melita-global-expo-web-720p-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/melita-global-expo-web_thumb.jpg"/>
                                        </div>
                                        <p class="title">Melita Global Expo Web</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1841285574001_melita-scissor-and-stuff-web-720p-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/melita-scissors-and-stuff-web_thumb.jpg"/>
                                        </div>
                                        <p class="title">Melita Scissors And Stuff Web</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1841285488001_melita-tune-town-web-720p-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/melita-tune-town-web_thumb.jpg"/>
                                        </div>
                                        <p class="title">Melita Tune Town Web</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1841288065001_melita-worship-rally-at-main-gate-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/melita-worship-rally-at-main-gate_thumb.jpg"/>
                                        </div>
                                        <p class="title">Melita Worship Rally At Main Gate</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1841289600001_melita-coaster-alley-web-720p-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/vbs-melita-coaster-alley-web_thumb.jpg"/>
                                        </div>
                                        <p class="title">VBS Melita Coaster Alley Web</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1841317285001_coaster-alley--bible-study-rotation-720x480.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/coaster-alley-bible-study-rotation_thumb.jpg"/>
                                        </div>
                                        <p class="title">Coaster Alley Bible Study Rotation</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1841281561001_scissors-n--stuff-crafts-rotation-720x480.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/scissors-n-stuff-crafts-rotation_thumb.jpg"/>
                                        </div>
                                        <p class="title">Scissors N Stuff Crafts Rotation</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1841312284001_cotton-candy-cafe-snack-rotation-720x480.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/cotton-candy-cafe-snack-rotation_thumb.jpg"/>
                                        </div>
                                        <p class="title">Cotton Candy Cafe Snack Rotation</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1841280523001_tune-town-music-rotation-720x480.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/tune-town-music-rotation_thumb.jpg"/>
                                        </div>
                                        <p class="title">Tune Town Music Rotation</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1849730456001_01-2013-bible-study-rotation-quicktime-h-264-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/vbs-bible-study-rotation_thumb.jpg"/>
                                        </div>
                                        <p class="title">VBS Bible Study Rotation</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1849725694001_02-2013-missions-rotation-quicktime-h-264-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/vbs-missions-rotation_thumb.jpg"/>
                                        </div>
                                        <p class="title">VBS Missions Rotation</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1849723642001_03-2013-music-rotation-quicktime-h-264-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/vbs-music-rotation_thumb.jpg"/>
                                        </div>
                                        <p class="title">VBS Music Rotation</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1849718131001_04-2013-rec-rotation-quicktime-h-264-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/vbs-rec-rotation_thumb.jpg"/>
                                        </div>
                                        <p class="title">VBS Rec Rotation</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1849715107001_06-2013-snacks-rotation-ry-quicktime-h-264-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/vbs-snacks-rotation_thumb.jpg"/>
                                        </div>
                                        <p class="title">VBS Snacks Rotation</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1849728716001_ccw-vbs-leader-recruitment-quicktime-h-264-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/vbs-colossal-coaster-world-leader-recruitment_thumb.jpg"/>
                                        </div>
                                        <p class="title">VBS Colossal Coaster World Leader Recruitment</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1849730019001_05-2013-craft-rotation-ry-quicktime-h-264-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/vbs-craft-rotation_thumb.jpg"/>
                                        </div>
                                        <p class="title">VBS Craft Rotation</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1841306357001_main-gate-720x480.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/main-gate_thumb.jpg"/>
                                        </div>
                                        <p class="title">Main Gate</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1849740568001_kids-promo2-ad-quicktime-h-264-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/vbs-kids-promo_thumb.jpg"/>
                                        </div>
                                        <p class="title">VBS Kids Promo</p>
                                    </div>
                                </a>
                                <a class="dl block-wrap" href="http://brightcove.vo.llnwd.net/pd16/media/1143621176001/1143621176001_1849716997001_07-2013-worship-rally-ry-quicktime-h-264-1280x720.mp4">
                                    <div class="vid-block">
                                        <div class="thumb-block">
                                            <img src="http://blog.lifeway.com/portfolio/vbs2013/images/thumbs/vbs-worship-rally_thumb.jpg"/>
                                        </div>
                                        <p class="title">VBS Worship Rally</p>
                                    </div>
                                </a>



















                            </div> <!-- .content-block -->

                                <h5 class="sub-title">More downloads coming soon....</h5>
                        </div> <!-- #media -->


                        <div id="club-vbs" class="study target clearfix">
                            <h4 class="special">Downloads for Club VBS: Jungle Jaunt</h4>
                            <div class="content-block">
                            </div>
                            <div class="content-block">
                            </div>
                            <div class="content-block">
                            </div>
                        </div> <!-- #club-vbs -->

                        <div id="asscoiational" class="study target clearfix">
                            <h4 class="special">Asscoiational Resources</h4>
                            <div class="content-block">
                            </div>
                            <div class="content-block">
                            </div>
                            <div class="content-block">
                            </div>
                        </div> <!-- #asscoiational -->

                    </div> <!-- .col_wide.left -->
                   
                   
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

		</article>
		
				<div class="inner-1">
		<?php comments_template(); ?></div>

		<?php endwhile; endif; ?>
        </div>

		<div id="page-bottom" class="outer">
			<div class="outer-2">
				<div class="inner-1 clearfix">
					<div  class="left wrapper clearfix">

						<div id="social-block">
								<a class="facebook" href="#">facebook</a>
								<a class="twitter" href="#">twitter</a>
								<a class="pinterest" href="#">pinterest</a>
						</div>

					</div> <!-- .left -->


					<div id="blog-block">
						<div class="top clearfix">
							<a id="view-all" class="blog-link" href="#">view all</a>
							<h2 class="bubble">BLOG</h2>
						</div>
						<div class="post">
							<h3 class="post-title">From the Fab Five to Final Two!</h3>
							<p class="excerpt">Last week's vote resulted in two strong contenders for the title of motions leader for LifeWay's VBS 2013 events. Our budget won't allow us to take both ladies on tour, so we need you to help us choose between these two great VBS music leaders&#133;<a href="#">Read More</a></p>
						</div>
						<div class="post">
							<h3 class="post-title">Back to (Vacation Bible) School!</h3>
							<p class="excerpt">Where did the summer go? If you are like me, the last couple of months have gone by in a blur of events, wacky schedules and, well, just stuff! But the smell of new school supplies is back in the air! (I just love the crisp feel of a new notebook and the smell of a fresh box of crayons&#133;<a href="#">Read More</a></p>
						</div>
					</div> <!-- /#blog-block -->
				<div> <!-- /.inner-1 -->
			</div> <!-- /.outer-2 -->
		</div> <!--  /#page-bottom -->
<?php get_footer(); ?>
