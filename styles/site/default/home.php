<!-- Main Content Pages -->
<div class="content-pages">
    <!-- Subpages -->
    <div class="sub-home-pages">
        <!-- Start Page home -->
        <section id="home" class="sub-page start-page">
            <div class="sub-page-inner" style="background: url('<?php echo base_url() ?>/cdn/settings/<?php echo config('home_bg') ?>');">
                <div class="mask"></div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title-block">
                            <h2><?php echo lang('global_hello_i_am') ?> <?php echo config('name') ?></h2>
							<h2><?php echo lang('global_I_am_working_as') ?></h2>
                            <div class="type-wrap">
                                <div class="cd-headline clip">									
                                    <span class="cd-words-wrapper">
                                        <?php foreach (explode("\n", config('position_typing')) as $i): ?>
                                            <b><?php echo $i ?></b>
                                        <?php endforeach; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="home-buttons">
                                <a href="#contact" class="bt-submit"><i class="lnr lnr-envelope"></i> <?php echo lang('global_contact_me') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Start Page home -->

        <!-- Blog Subpage -->
        <section id="hasil" class="sub-page">
            <div class="sub-page-inner">
                <div class="section-title">
                    <div class="main-title">
                        <div class="title-main-page">
                            <h4><?php echo lang('global_hobihasil') ?></h4>
                            <p><?php echo lang('global_hasil_kerjaan') ?></p>
                        </div>
                    </div>
                </div>

                <div class="section-content">
                    <div class="row blog-grid-flex">
                        <?php foreach ($posts as $post): ?> 
                            <div class="col-md-4 col-sm-6 blog-item">
                                <div class="blog-article">
                                    <div class="comment-like"> <span><i class="fas fa-eye" aria-hidden="true"></i> <?php echo $post->visits ?></span></div>
                                    <div class="article-img">
                                        <a href="<?php echo site_url('post/' . $post->blog_id . '-' . sanitize($post->title)) ?>"> <img src="<?php echo base_url() ?>/cdn/blog/<?php echo $post->image ?>" class="img-responsive" alt="<?php echo $post->title ?>"></a>
                                    </div>
                                    <div class="article-link"> <a href="<?php echo site_url('post/' . $post->blog_id . '-' . sanitize($post->title)) ?>"><i class="lnr lnr-arrow-right"></i></a> </div>
                                    <div class="article-content">
                                        <h4>
                                            <a href="<?php echo site_url('post/' . $post->blog_id . '-' . sanitize($post->title)) ?>">
                                                <?php $this->load->helper('text') ?>
                                                <?php echo character_limiter($post->title, 30) ?> 
                                            </a>
                                        </h4>
                                        <div class="meta"> <span><i><?php echo date('M', strtotime($post->datetime)) ?></i> <?php echo date('d, Y', strtotime($post->datetime)) ?></span> <span><i>In</i> <a href="<?php echo site_url('blog/category/' . $post->blog_category_id . '-' . sanitize($post->post_category)) ?>"><?php echo $post->post_category ?></a></span> </div>
                                        <p>
                                            <?php $this->load->helper('text') ?>
                                            <?php echo character_limiter($post->short_description, 100) ?> 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <div class="col-md-12 text-center">
                            <a href="<?php echo site_url('blog') ?>" class="btn bt-submit"><?php echo lang('global_semua_hasil') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Blog Subpage -->


        <!-- Contact Subpage -->
        <section id="contact" class="sub-page">
            <div class="sub-page-inner">
                <div class="section-title">
                    <div class="main-title">
                        <div class="title-main-page">
                            <h4><?php echo lang('global_Browse_Contact') ?></h4>
                            <p><?php echo lang('global_Browse_Need_some_help') ?>?</p>
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="row contact-form pb-30">
                    <div class="col-sm-12 col-md-5 col-lg-5 left-background">
                        <img src="<?php echo base_url() ?>/cdn/settings/<?php echo config('contact_bg') ?>" alt="<?php echo lang('global_Contact') ?>"/>
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        <div class="form-contact-me">
                            <div id="show_contact_msg" class="row">
                                <?php if ($success) : ?>
                                    <div class="col-md-12">
                                        <div class="alert alert-success">
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>  
                                            <?php echo lang('global_Thank_you_very_much_We_will_notify_you_when_we_lunch') ?>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <?php if (validation_errors()) : ?>
                                    <div class="col-md-12">
                                        <div class="alert alert-danger">
                                            <i class="fa fa-times-circle" aria-hidden="true"></i> 
                                            <?php echo validation_errors() ?>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>
                            <form method="post" id="contact-form" action="<?php echo site_url() ?>#contact">
                                <input name="name" type="text" placeholder="<?php echo lang('global_Name') ?>:" required autocomplete="off">
                                <input name="email" type="email" placeholder="<?php echo lang('global_email') ?>:" required autocomplete="off">
                                <textarea name="message" placeholder="<?php echo lang('global_Message') ?>:" required rows="6"></textarea>
                                <input class="bt-submit" type="submit" value="<?php echo lang('global_Send_Message') ?>">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Contact Form -->

                <!-- Contact Details -->
                <div class="pt-50 pb-30">
                    <div class="section-head">
                        <h4>
                            <span><?php echo lang('global_Contact_Information') ?></span>
                            <?php echo lang('global_Find_me_here') ?>
                        </h4>
                    </div>

                    <!-- Contact Info -->
                    <div class="sidebar-textbox row pb-50">
                        <div class="contact-info d-flex col-md-4">
                            <div class="w-25">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <div class="contact-text w-75">
                                <h2><?php echo lang('global_phone') ?></h2>
                                <?php foreach (explode("\n", config('phone')) as $i): ?>
                                    <p><?php echo $i ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="contact-info d-flex col-md-4">
                            <div class="w-25">
                                <div class="contact-icon">
                                    <i class="far fa-envelope-open"></i>
                                </div>
                            </div>
                            <div class="contact-text w-75">
                                <h2><?php echo lang('global_email') ?></h2>
                                <?php foreach (explode("\n", config('email')) as $i): ?>
                                    <p><?php echo $i ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="contact-info d-flex col-md-4">
                            <div class="w-25">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="contact-text w-75">
                                <h2><?php echo lang('global_address') ?></h2>
                                <p> 
                                    <?php foreach (explode("\n", config('address')) as $i): ?>
                                        <?php echo $i ?><br>
                                    <?php endforeach; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Contact info -->

                    <!-- Map Container
                    <div class="contact-map pt-50">
                       GOOGLE MAP
                        <div id="google-map"></div>

                    </div>  -->
					
                    <!-- /Map Container -->

                    <!-- Social Media -->
                    <div class="pt-50">
                        <div class="social-media-block">
                            <h4>Ikuti Saya: </h4>
                            <ul class="social-media-links">
                                <?php if (config('facebook')): ?><li><a href="<?php echo config('facebook') ?>"><i class="fab fa-facebook-f"></i></a></li><?php endif ?>
								<?php if (config('youtube')): ?><li><a href="<?php echo config('youtube') ?>"><i class="fab fa-youtube"></i></a></li><?php endif ?>
                        <!--    <?php if (config('twitter')): ?><li><a href="<?php echo config('twitter') ?>"><i class="fab fa-twitter"></i></a></li><?php endif ?>
                                <?php if (config('linkedin')): ?><li><a href="<?php echo config('linkedin') ?>"><i class="fab fa-linkedin-in"></i></a></li><?php endif ?>
                                <?php if (config('google_plus')): ?><li><a href="<?php echo config('google_plus') ?>"><i class="fab fa-google-plus-g"></i></a></li><?php endif ?>
                                <?php if (config('behance')): ?><li><a href="<?php echo config('behance') ?>"><i class="fab fa-behance"></i></a></li><?php endif ?>                                
                                <?php if (config('snapchat')): ?><li><a href="<?php echo config('snapchat') ?>"><i class="fab fa-snapchat-ghost"></i></a></li><?php endif ?>
                                <?php if (config('vimeo')): ?><li><a href="<?php echo config('vimeo') ?>"><i class="fab fa-vimeo-v"></i></a></li><?php endif ?>
                                <?php if (config('pinterest')): ?><li><a href="<?php echo config('pinterest') ?>"><i class="fab fa-pinterest-p"></i></a></li><?php endif ?>
                                <?php if (config('codepen')): ?><li><a href="<?php echo config('codepen') ?>"><i class="fab fa-codepen"></i></a></li><?php endif ?>
                                <?php if (config('dribbble')): ?><li><a href="<?php echo config('dribbble') ?>"><i class="fab fa-dribbble"></i></a></li><?php endif ?>
                                <?php if (config('dropbox')): ?><li><a href="<?php echo config('dropbox') ?>"><i class="fab fa-dropbox"></i></a></li><?php endif ?>
                                <?php if (config('flickr')): ?><li><a href="<?php echo config('flickr') ?>"><i class="fab fa-flickr"></i></a></li><?php endif ?>
                                <?php if (config('reddit')): ?><li><a href="<?php echo config('reddit') ?>"><i class="fab fa-reddit"></i></a></li><?php endif ?>
                                <?php if (config('rss')): ?><li><a href="<?php echo config('rss') ?>"><i class="fas fa-rss"></i></a></li><?php endif ?>
                                <?php if (config('skype')): ?><li><a href="<?php echo config('skype') ?>"><i class="fab fa-skype"></i></a></li><?php endif ?>
                                <?php if (config('soundcloud')): ?><li><a href="<?php echo config('soundcloud') ?>"><i class="fab fa-soundcloud"></i></a></li><?php endif ?>
                                <?php if (config('stackoverfolw')): ?><li><a href="<?php echo config('stackoverfolw') ?>"><i class="fab fa-stack-overflow"></i></a></li><?php endif ?>
                                <?php if (config('tumblr')): ?><li><a href="<?php echo config('tumblr') ?>"><i class="fab fa-tumblr"></i></a></li><?php endif ?>
                                <?php if (config('yelp')): ?><li><a href="<?php echo config('yelp') ?>"><i class="fab fa-yelp"></i></a></li><?php endif ?> -->
                            </ul>
                        </div>
                    </div>
                    <!-- /Social Media -->
                </div>
                <!-- /Contact Details -->  
				
			<div class="pt-50">
				<footer class="main-footer sticky footer-type-1">
                    <div class="footer-inner">
                        <div class="footer-text">
                            <strong><a href="https://www.youtube.com/channel/UCDwLKNAygtK_GtJGYkfpUyg/"><?php echo '© enonymous ' . date("Y") ?></a></strong>.
                        </div>                        
                    </div>
                </footer>
			</div>	
				
            </div>
        </section>
        <!-- End Contact Subpage -->
    </div>
    <!-- /Page changer wrapper -->
</div>
<!-- /Main Content -->