<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Movie Rent</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="<?=base_url()?>css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div id="wrapper">
      <div id="inner">
          <div id="header">
              <div id="nav">
                  Hello <b>Member</b> <b><?php echo $USERNAME; ?></b><br>
                  <a href="account.html">My Account</a> | <a href="chart.html">Chart Sewa</a> | <a href="<?php echo site_url('admin/c_admin/logout'); ?>">Log Out</a>
              </div><!-- end nav -->
              <a href="#"><img src="<?=base_url()?>images/login.jpg" width="744" height="223" alt="Harry Potter cd" /></a>
              <!--<a href="#"><img src="images/header_2.jpg" width="744" height="48" alt="" /></a>-->
          </div><!-- end header -->
          <dl id="browse">
              <dt>Full Category Lists</dt>
			  <dd><a href="index.html">All Movie</a></dd>
              <dd><a href="#">Action</a></dd>
              <dd><a href="#">Anime</a></dd>
              <dd><a href="#">Adventure</a></dd>
              <dd><a href="#">Drama</a></dd>
              <dd><a href="#">Horror</a></dd>
              <dd><a href="#">Musicals</a></dd>
              <dd><a href="#">Mystery</a></dd>
              <dd><a href="#">Fiction</a></dd>
              
              <dt>Search Your Favourite Movie</dt>
              <dd class="searchform">
                <form action="?" method="get">
					<p><div><input name="q" type="teksbox" placeholder="Judul FIlm" class="text" /></div></p>
                    <p><div><select name="cat">
                        <option value="-" selected="selected">CATEGORIES</option>
                        <option value="-">Action</option>
						<option value="-">Anime</option>
						<option value="-">Adventure</option>
						<option value="-">Drama</option>
						<option value="-">Horror</option>
						<option value="-">Musicals</option>
						<option value="-">Mystery</option>
						<option value="-">Fiction</option>
                    </select></div></p>
                    <p><div class="softsearch"><input type="image" src="<?=base_url()?>images/cari.png" width="68" height="20"/></div></p>
                </form>
              </dd>
          </dl>
          
          <div id="body">
              <div class="inner">
                  
                  <div class="leftbox">
                      <h3><b>Star Wars Trilogy (Widescreen Edition)</b></h3>
                      <img src="<?=base_url()?>images/photo.jpg" width="93" height="115" alt="photo 1" class="left" />
                      <p> Film ini merupakan film yang dibintangi oleh dengan meceritakan peristiwa 
					  <p><b>Harga:</b> $225.97
                      <p><b>Availability:</b> Yes</p>
					  <p class="readmore"><a href="comment.html"><b>GIVE COMMENT</b></a>
                      <a class="readmore"><a href="rental.html"><b>RENT NOW</b></a></a></p>
                      <div class="clear"></div>
                  </div><!-- end .leftbox -->
                  <div class="rightbox">
                      <h3><b>Batman - The Animated Series (New Platinum Series)</b></h3>
                      <img src="<?=base_url()?>images/photo2.jpg" width="93" height="115" alt="photo 4" class="left" />
					  <p> Film ini merupakan film yang dibintangi oleh dengan meceritakan peristiwa 
                      <p><b>Harga:</b> $125
                      <p><b>Availability:</b> Yes</p>
					  <p class="readmore"><a href="#"><b>GIVE COMMENT</b></a>
                      <a class="readmore"><a href="#"><b>RENT NOW</b></a></a></p>
                      <div class="clear"></div>
                  </div><!-- end .rightbox -->
                  
                  <div class="clear br"></div>

                  <div class="leftbox">
                      <h3><b>Harry Potter and the Prisoner of Azkaban</b></h3>
                      <img src="<?=base_url()?>images/photo3.jpg" width="93" height="115" alt="photo 2" class="left" />
					  <p> Film ini merupakan film yang dibintangi oleh dengan meceritakan peristiwa 
                      <p><b>Harga:</b> $350
                      <p><b>Availability:</b> Yes</p>
                      <p class="readmore"><a href="#"><b>GIVE COMMENT</b></a>
                      <a class="readmore"><a href="#"><b>RENT NOW</b></a></a></p>
                      <div class="clear"></div>
                  </div><!-- end .leftbox -->
                  <div class="rightbox">
                      <h3><b>Blade - Trinity (New Platinum Series)</b></h3>
                      <img src="<?=base_url()?>images/photo4.jpg" width="93" height="115" alt="photo 5" class="left" />
					  <p> Film ini merupakan film yang dibintangi oleh dengan meceritakan peristiwa 
                      <p><b>Harga:</b> $115
                      <p><b>Availability:</b> Yes</p>
                      <p class="readmore"><a href="#"><b>GIVE COMMENT</b></a>
                      <a class="readmore"><a href="#"><b>RENT NOW</b></a></a></p>
                      <div class="clear"></div>
                  </div><!-- end .rightbox -->

                  <div class="clear br"></div>

                  <div class="leftbox">
                      <h3><b>Million Dollar Baby (Widescreen Edition)</b></h3>
                      <img src="<?=base_url()?>images/photo5.jpg" width="93" height="115" alt="photo 3" class="left" />
					  <p> Film ini merupakan film yang dibintangi oleh dengan meceritakan peristiwa 
                      <p><b>Harga:</b> 105.97
                      <p><b>Availability:</b> Yes</p>
                      <p class="readmore"><a href="#"><b>GIVE COMMENT</b></a>
                      <a class="readmore"><a href="#"><b>RENT NOW</b></a></a></p>
                      <div class="clear"></div>
                  </div><!-- end .leftbox -->
                  <div class="rightbox">
                      <h3><b>The Matrix Reloaded (Full Screen Edition)</b></h3>
                      <img src="<?=base_url()?>images/photo6.jpg" width="93" height="115" alt="photo 6" class="left" />
					  <p> Film ini merupakan film yang dibintangi oleh dengan meceritakan peristiwa 
                      <p><b>Harga:</b> $75
                      <p><b>Availability:</b> Yes</p>
                      <p class="readmore"><a href="#"><b>GIVE COMMENT</b></a>
                      <a class="readmore"><a href="#"><b>RENT NOW</b></a></a></p>
                      <div class="clear"></div>
                  </div><!-- end .rightbox -->

                  <div class="clear"></div>
                  
              </div><!-- end .inner -->
          </div><!-- end body -->
          
          <div class="clear"></div>
          <div id="footer">
              Kelompok (07) MPPL-E
          </div><!-- end footer -->
      </div><!-- end inner -->
  </div><!-- end wrapper -->
</body>
</html>
