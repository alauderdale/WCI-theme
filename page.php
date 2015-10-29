<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package boiler
 */

get_header(); ?>

 <section class='invert-section bg-cover' style='background-image:url(<?php bloginfo('template_url'); ?>/images/header_home.png);'>
            <div class='container'>
              <div class='row'>
                <div class='col-lg-8 col-md-10'>
                  <h1>
                    Walnut Creek is great. Here’s a headline about that.
                  </h1>
                </div>
                <div class='col-lg-3 col-md-2'></div>
              </div>
            </div>
          </section>
          <section>
            <div class='container'>
              <div class='row'>
                <div class='col-lg-12'>
                  <div class='heading-bordered'></div>
                  <h2>
                    Next Level VC
                  </h2>
                </div>
              </div>
              <div class='row'>
                <div class='col-sm-9'>
                  <div class='padding-right no-padding-right-sm'>
                    <p>
                      WCI is a boutique capital group investing in lower middle market companies. We leverage digital progress to bring sophistication in systems, operations and technology to our portfolio companies, helping them achieve transformational growth.
                    </p>
                  </div>
                </div>
                <div class='col-sm-3'>
                  <a class='btn btn-default btn-skew' href='/approach'>
                    Learn More
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class='no-padding-top'>
            <div class='container'>
              <div class='home-line'></div>
              <div class='row'>
                <div class='col-sm-4'>
                  <h3 class='display-num'>
                    1
                  </h3>
                  <h5>
                    LASTING RELATIONSHIPS
                  </h5>
                  <p>
                    <small>
                      We never sacrifice long-term vision for short-term gain: we aim to create life-long partners out of our clients while contributing to the growth of differentiated products, services and solutions.
                    </small>
                  </p>
                </div>
                <div class='col-sm-4'>
                  <h3 class='display-num'>
                    2
                  </h3>
                  <h5>
                    DELIBERATE  FOCUS
                  </h5>
                  <p>
                    <small>
                      We focus on crafting long-term relationships with management, bringing new technology to dated industries, and using data to provide trend insight We advisie intelligent, consumer-guided decisions.
                    </small>
                  </p>
                </div>
                <div class='col-sm-4'>
                  <h3 class='display-num'>
                    3
                  </h3>
                  <h5>
                    DEDICATED PARTNERS
                  </h5>
                  <p>
                    <small>
                      Our partners deliver a combination of expertise and experience that enables us a cutting-edge advantage in identifying and creating value in investment opportunities.
                    </small>
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class='invert-section bg-cover' style='background-image:url(<?php bloginfo('template_url'); ?>/images/banner_value.png);'>
            <div class='container'>
              <div class='row'>
                <div class='col-lg-12'>
                  <div class='heading-bordered'></div>
                  <h2>
                    Encompassing Values. Long-Term Vision.
                  </h2>
                  <p class='text-columns-2'>
                    We view all of our investments through a globally encompassing lens, and choose our partnerships accordingly. We believe that companies with mindful management of environmental and social issues are better situated for long-term success.
                    in a future where diminishing resources, complex consumer demand, and increased regulation are projected to amplify both challenge and opportunity. We allocate small amounts of capital from all of our investments to improving the world around us.
                  </p>
                </div>
              </div>
              <div class='row margin-top'>
                <div class='col-lg-12'>
                  <div class='text-center'>
                    <a class='btn btn-default btn-skew' href='/contact'>
                      Contact Us
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class='container'>
              <div class='row'>
                <div class='col-lg-12'>
                  <div class='heading-bordered'></div>
                  <h2>
                    We Believe in Innovative & Exciting Companies Like These
                  </h2>
                </div>
              </div>
              <div class='row'>
                <div class='col-sm-4'>
                  <a href='#'>
                    <div class='portfolio-card'>
                      <img src='<?php bloginfo('template_url'); ?>/images/logo_five.png'>
                    </div>
                  </a>
                </div>
                <div class='col-sm-4'>
                  <a href='#'>
                    <div class='portfolio-card'>
                      <img src='<?php bloginfo('template_url'); ?>/images/logo_mod.png'>
                    </div>
                  </a>
                </div>
                <div class='col-sm-4'>
                  <a href='#'>
                    <div class='portfolio-card'>
                      <img src='<?php bloginfo('template_url'); ?>/images/logo_geek.png'>
                    </div>
                  </a>
                </div>
              </div>
              <div class='row margin-top'>
                <div class='col-lg-12'>
                  <div class='text-center'>
                    <a class='btn btn-default btn-skew' href='/portfolio'>
                      See All
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class='invert-section bg-cover' style='background-image:url(<?php bloginfo('template_url'); ?>/images/banner_signup.png); background-color:#C2B170;'>
            <div class='container padding-top'>
              <div class='row'>
                <div class='col-sm-3'></div>
                <div class='col-sm-6'>
                  <h4 class='text-uppercase quarter-margin-bottom'>
                    HEADLINE ABOUT WORKING WITH US
                  </h4>
                  <p>
                    <small>
                      Subtext about why you want to choose Walnut Creek Investments
                    </small>
                  </p>
                </div>
                <div class='col-sm-3'>
                  <a class='btn btn-skew btn-default btn-white' href='/contact'>
                    Lets do this
                  </a>
                </div>
              </div>
            </div>
          </section>


<?php get_footer(); ?>
