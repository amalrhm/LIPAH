<?php

/* AuthenteBundle:Default:index.html.twig */
class __TwigTemplate_a004e2ab33bd119a54ab839a7869d41f46e59656eac3e889007309218715a1d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AuthenteBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <!-- ==== HEADERWRAP ==== -->
    <div id=\"home\" name=\"home\">

        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active\">
                    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/header1.jpg"), "html", null, true);
        echo "\" width=\"100%\">
                    <div class=\"carousel-caption\">
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/header2.jpg"), "html", null, true);
        echo "\" width=\"100%\">
                    <div class=\"carousel-caption\">
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/header3.jpg"), "html", null, true);
        echo "\" width=\"100%\">
                    <div class=\"carousel-caption\">
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>

        ";
        // line 52
        echo "    </div><!-- /headerwrap -->

    <!-- ==== GREYWRAP ==== -->
    <div id=\"greywrap\">
        <div class=\"row\">



            <div class=\"col-lg-4 callout\">
                <span class=\"icon icon-stack\"></span>
                <h2>INSTITUT</h2>
                <p>INSAT : Institut National des Sciences Appliquées et de Technologie <br>
                    <a href=\"http://www.insat.rnu.tn\">http://www.insat.rnu.tn</a></p>
            </div><!-- col-lg-4 -->

            <div class=\"col-lg-4 callout\">
                <span class=\"icon icon-eye\"></span>
                <h2>UNIVERSITÉ</h2>
                <p>Université de Tunis Carthage <br>
                    <a href=\"http://ucar.rnu.tn\">http://ucar.rnu.tn</a></p>
            </div><!-- col-lg-4 -->

            <div class=\"col-lg-4 callout\">
                <span class=\"icon icon-heart\"></span>
                <h2>PAYS</h2>
                <p>TUNISIE <br>
                    <a href=\"#\">www.democracy-in-progress.tn</a></p>
            </div><!-- col-lg-4 -->
        </div><!-- row -->
    </div><!-- greywrap -->

    <!-- ==== ABOUT ==== -->
    <div class=\"container\" id=\"about\" name=\"about\">
        <div class=\"row white\">
            <br>
            <h1 class=\"centered\">Département de Génie Informatique et Mathématiques</h1>
            <hr>

            <div class=\"col-lg-6\" align=\"center\">
                <p><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/departement.jpg"), "html", null, true);
        echo "\" width=60%></p>
            </div><!-- col-lg-6 -->

            <div class=\"col-lg-6\" align=\"justify\">
                <p>Le département Génie Informatique et Mathématiques est l’un des quatre départements de l’INSAT. Ses activités consistent à mobiliser et gérer les ressources nécessaires pour l’enseignement des disciplines informatique et mathématiques durant le cursus des élèves ingénieurs de l’INSAT. Par ailleurs, le département participe au développement de travaux de recherche, à la gestion des stages et à la mise en place ainsi qu'au bon déroulement des mastères de recherche et professionnels.
                </p>
            </div><!-- col-lg-6 -->
        </div><!-- row -->
    </div><!-- container -->

    <!-- ==== SECTION DIVIDER1 -->
    <section class=\"section-divider textdivider divider1\">
        <div class=\"container\">
            <h1>DESIGN EXPAND BOUNDARIES</h1>
            <hr>
            <p>To achieve real change, we have to expand boundaries. Because the Wild West of what-could-be is unexplored but rife with opportunity.</p>
        </div><!-- container -->
    </section><!-- section -->

    <!-- ==== FORMATION ==== -->
    <div class=\"container\" id=\"formation\" name=\"formation\">
        <br>
        <br>
        <div class=\"row\">
            <h2 class=\"centered\">ONE BRAND, ONE VOICE.</h2>
            <hr>
            <br>
            <div class=\"col-lg-offset-2 col-lg-8\">
                <p>Employees and consumers. Two halves of a brand’s entirety, the whole of a brand’s audience. Sometimes these two halves have very different viewpoints, creating a weak spot in the brand story. Weakness tarnishes credibility. Brands that aren’t credible aren’t viable.
                </p>
                <p>We squash weakness by designing the whole brand story. It’s crafted around the truism held by employees and consumers to create an experience that connects from the inside out.</p>
                <p>By being true to the brand we represent, we elevate the audiences’ relationship to it. Like becomes love becomes a passion. Passion becomes advocacy. And we see the brand blossom from within, creating a whole story the audience embraces. That’s when the brand can truly flex its muscles.</p>
            </div><!-- col-lg -->
        </div><!-- row -->

        <div class=\"row\">
            <h2 class=\"centered\">MOBILE FIRST THINKING, ALWAYS.</h2>
            <hr>
            <br>
            <div class=\"col-lg-offset-2 col-lg-8\">
                <img class=\"img-responsive\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/iphone.png"), "html", null, true);
        echo "\">
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <!-- ==== SECTION DIVIDER2 -->
    <section class=\"section-divider textdivider divider2\">
        <div class=\"container\">
            <h1>DESIGN IS AN INTERACTION</h1>
            <hr>
            <p>To develop a deeper and more meaningful connection with consumers, we believe design must invite them to take part in the conversation.</p>
        </div><!-- container -->
    </section><!-- section -->

    <!-- ==== TEAM MEMBERS ==== -->

    <div class=\"container\" id=\"team\" name=\"team\">
        <br>

        <div class=\"row white centered\">
            <h1 class=\"centered\">CORPS ENSEIGNANT</h1>
            <hr>
            <br>

            <h2> Chef de département</h2>


            <div class=\"col-lg-15 centered\">
                <img class=\"img img-circle\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/team01.jpg"), "html", null, true);
        echo "\" height=\"120px\" width=\"120px\" alt=\"\">

                <h4><b>Faten Chaieb</b></h4>
                <a href=\"#\" class=\"icon icon-twitter\"></a>
                <a href=\"#\" class=\"icon icon-facebook\"></a>
                <a href=\"#\" class=\"icon icon-envelop\"></a>

            </div><!-- col-lg-3 -->
        </div>
        <div class=\"row white centered\">

            <br>
            <h2> Spécialité Informatique</h2>
            <br>

            <div class=\"col-lg-3 centered\">
                <img class=\"img img-circle\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/team02.jpg"), "html", null, true);
        echo "\" height=\"120px\" width=\"120px\" alt=\"\">
                <br>
                <h4><b>Tim Davies</b></h4>
                <a href=\"#\" class=\"icon icon-twitter\"></a>
                <a href=\"#\" class=\"icon icon-facebook\"></a>
                <a href=\"#\" class=\"icon icon-envelop\"></a>

            </div><!-- col-lg-3 -->

            <div class=\"col-lg-3 centered\">
                <img class=\"img img-circle\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/team03.jpg"), "html", null, true);
        echo "\" height=\"120px\" width=\"120px\" alt=\"\">
                <br>
                <h4><b>Michele Lampa</b></h4>
                <a href=\"#\" class=\"icon icon-twitter\"></a>
                <a href=\"#\" class=\"icon icon-facebook\"></a>
                <a href=\"#\" class=\"icon icon-envelop\"></a>

            </div><!-- col-lg-3 -->

            <div class=\"col-lg-3 centered\">
                <img class=\"img img-circle\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/team04.jpg"), "html", null, true);
        echo "\" height=\"120px\" width=\"120px\" alt=\"\">
                <br>
                <h4><b>Jaye Smith</b></h4>
                <a href=\"#\" class=\"icon icon-twitter\"></a>
                <a href=\"#\" class=\"icon icon-facebook\"></a>
                <a href=\"#\" class=\"icon icon-envelop\"></a>

            </div><!-- col-lg-3 -->
            <div class=\"col-lg-3 centered\">
                <img class=\"img img-circle\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/team02.jpg"), "html", null, true);
        echo "\" height=\"120px\" width=\"120px\" alt=\"\">
                <br>
                <h4><b>Tim Davies</b></h4>
                <a href=\"#\" class=\"icon icon-twitter\"></a>
                <a href=\"#\" class=\"icon icon-facebook\"></a>
                <a href=\"#\" class=\"icon icon-envelop\"></a>

            </div><!-- col-lg-3 -->

        </div><!-- row -->

        <div class=\"row white centered\">

            <br>
            <h2> Spécialité Mathématiques</h2>
            <br>

            <div class=\"col-lg-3 centered\">
                <img class=\"img img-circle\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/team02.jpg"), "html", null, true);
        echo "\" height=\"120px\" width=\"120px\" alt=\"\">
                <br>
                <h4><b>Tim Davies</b></h4>
                <a href=\"#\" class=\"icon icon-twitter\"></a>
                <a href=\"#\" class=\"icon icon-facebook\"></a>
                <a href=\"#\" class=\"icon icon-envelop\"></a>

            </div><!-- col-lg-3 -->

            <div class=\"col-lg-3 centered\">
                <img class=\"img img-circle\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/team03.jpg"), "html", null, true);
        echo "\" height=\"120px\" width=\"120px\" alt=\"\">
                <br>
                <h4><b>Michele Lampa</b></h4>
                <a href=\"#\" class=\"icon icon-twitter\"></a>
                <a href=\"#\" class=\"icon icon-facebook\"></a>
                <a href=\"#\" class=\"icon icon-envelop\"></a>

            </div><!-- col-lg-3 -->

            <div class=\"col-lg-3 centered\">
                <img class=\"img img-circle\" src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/team04.jpg"), "html", null, true);
        echo "\" height=\"120px\" width=\"120px\" alt=\"\">
                <br>
                <h4><b>Jaye Smith</b></h4>
                <a href=\"#\" class=\"icon icon-twitter\"></a>
                <a href=\"#\" class=\"icon icon-facebook\"></a>
                <a href=\"#\" class=\"icon icon-envelop\"></a>

            </div><!-- col-lg-3 -->
            <div class=\"col-lg-3 centered\">
                <img class=\"img img-circle\" src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/team02.jpg"), "html", null, true);
        echo "\" height=\"120px\" width=\"120px\" alt=\"\">
                <br>
                <h4><b>Tim Davies</b></h4>
                <a href=\"#\" class=\"icon icon-twitter\"></a>
                <a href=\"#\" class=\"icon icon-facebook\"></a>
                <a href=\"#\" class=\"icon icon-envelop\"></a>

            </div><!-- col-lg-3 -->

        </div><!-- row -->

        <div class=\"row white centered\">

            <br>
            <h2> Spécialité Télécommunications</h2>
            <br>

            <div class=\"col-lg-2 centered\">
                <img class=\"img img-circle\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/team02.jpg"), "html", null, true);
        echo "\" height=\"120px\" width=\"120px\" alt=\"\">
                <br>
                <h4><b>Tim Davies</b></h4>
                <a href=\"#\" class=\"icon icon-twitter\"></a>
                <a href=\"#\" class=\"icon icon-facebook\"></a>
                <a href=\"#\" class=\"icon icon-envelop\"></a>

            </div><!-- col-lg-3 -->

            <div class=\"col-lg-2 centered\">
                <img class=\"img img-circle\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/team03.jpg"), "html", null, true);
        echo "\" height=\"120px\" width=\"120px\" alt=\"\">
                <br>
                <h4><b>Michele Lampa</b></h4>
                <a href=\"#\" class=\"icon icon-twitter\"></a>
                <a href=\"#\" class=\"icon icon-facebook\"></a>
                <a href=\"#\" class=\"icon icon-envelop\"></a>

            </div><!-- col-lg-3 -->

            <div class=\"col-lg-2 centered\">
                <img class=\"img img-circle\" src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/team04.jpg"), "html", null, true);
        echo "\" height=\"120px\" width=\"120px\" alt=\"\">
                <br>
                <h4><b>Jaye Smith</b></h4>
                <a href=\"#\" class=\"icon icon-twitter\"></a>
                <a href=\"#\" class=\"icon icon-facebook\"></a>
                <a href=\"#\" class=\"icon icon-envelop\"></a>

            </div><!-- col-lg-3 -->
            <div class=\"col-lg-2 centered\">
                <img class=\"img img-circle\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/team02.jpg"), "html", null, true);
        echo "\" height=\"120px\" width=\"120px\" alt=\"\">
                <br>
                <h4><b>Tim Davies</b></h4>
                <a href=\"#\" class=\"icon icon-twitter\"></a>
                <a href=\"#\" class=\"icon icon-facebook\"></a>
                <a href=\"#\" class=\"icon icon-envelop23\"></a>

            </div><!-- col-lg-3 -->

        </div><!-- row -->
    </div><!-- container -->

    <!-- ==== GREYWRAP ==== -->
    <div id=\"greywrap\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 centered\">
                    <img class=\"img-responsive\" src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/macbook.png"), "html", null, true);
        echo "\" align=\"\">
                </div>
                <div class=\"col-lg-4\">
                    <h2>We Are Hiring!</h2>
                    <p>Do you want to be one of use? Sure you want, because we are an awesome team!. Here we work hard every day to craft pixel perfect sites.</p>
                    <p><a class=\"btn btn-success\">Contact Us</a></p>
                </div>
            </div><!-- row -->
        </div>
        <br>
        <br>
    </div><!-- greywrap -->

    <!-- ==== SECTION DIVIDER3 -->
    <section class=\"section-divider textdivider divider3\">
        <div class=\"container\">
            <h1>DESIGN SOLVE PROBLEMS</h1>
            <hr>
            <p>From the purely practical to the richly philosophical, design is the solution to a host of challenges.</p>
        </div><!-- container -->
    </section><!-- section -->

    <!-- ==== PORTFOLIO ==== -->
    <div class=\"container\" id=\"events\" name=\"events\">
        <br>
        <div class=\"row\">
            <br>
            <h1 class=\"centered\">WE CREATE COOL STUFF</h1>
            <hr>
            <br>
            <br>
        </div><!-- /row -->
        <div class=\"container\">
            <div class=\"row\">

                <!-- PORTFOLIO IMAGE 1 -->
                <div class=\"col-md-4 \">
                    <div class=\"grid mask\">
                        <figure>
                            <img class=\"img-responsive\" src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/folio01.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <figcaption>
                                <h5>DASHBOARD</h5>
                                <a data-toggle=\"modal\" href=\"#myModal\" class=\"btn btn-primary btn-lg\">Take a Look</a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->


                <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
                     a modal for each of your projects. -->

                <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                <h4 class=\"modal-title\">Project Title</h4>
                            </div>
                            <div class=\"modal-body\">
                                <p><img class=\"img-responsive\" src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/folio01.jpg"), "html", null, true);
        echo "\" alt=\"\"></p>
                                <p>This project was crafted for Some Name corp. Detail here a little about your job requirements and the tools used. Tell about the challenges faced and what you and your team did to solve it.</p>
                                <p><b><a href=\"#\">Visit Site</a></b></p>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->


                <!-- PORTFOLIO IMAGE 2 -->
                <div class=\"col-md-4\">
                    <div class=\"grid mask\">
                        <figure>
                            <img class=\"img-responsive\" src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/folio02.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <figcaption>
                                <h5>UI DESIGN</h5>
                                <a data-toggle=\"modal\" href=\"#myModal\" class=\"btn btn-primary btn-lg\">Take a Look</a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <!-- PORTFOLIO IMAGE 3 -->
                <div class=\"col-md-4\">
                    <div class=\"grid mask\">
                        <figure>
                            <img class=\"img-responsive\" src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/folio03.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <figcaption>
                                <h5>ANDROID PAGE</h5>
                                <a data-toggle=\"modal\" href=\"#myModal\" class=\"btn btn-primary btn-lg\">Take a Look</a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->
            </div><!-- /row -->

            <!-- PORTFOLIO IMAGE 4 -->
            <div class=\"row\">
                <div class=\"col-md-4 \">
                    <div class=\"grid mask\">
                        <figure>
                            <img class=\"img-responsive\" src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/folio04.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <figcaption>
                                <h5>PROFILE</h5>
                                <a data-toggle=\"modal\" href=\"#myModal\" class=\"btn btn-primary btn-lg\">Take a Look</a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <!-- PORTFOLIO IMAGE 5 -->
                <div class=\"col-md-4\">
                    <div class=\"grid mask\">
                        <figure>
                            <img class=\"img-responsive\" src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/folio05.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <figcaption>
                                <h5>TWITTER STATUS</h5>
                                <a data-toggle=\"modal\" href=\"#myModal\" class=\"btn btn-primary btn-lg\">Take a Look</a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <!-- PORTFOLIO IMAGE 6 -->
                <div class=\"col-md-4\">
                    <div class=\"grid mask\">
                        <figure>
                            <img class=\"img-responsive\" src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/folio06.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <figcaption>
                                <h5>PHONE MOCKUP</h5>
                                <a data-toggle=\"modal\" href=\"#myModal\" class=\"btn btn-primary btn-lg\">Take a Look</a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->
            </div><!-- /row -->
            <br>
            <br>
        </div><!-- /row -->
    </div><!-- /container -->

    <!-- ==== SECTION DIVIDER4 ==== -->
    <section class=\"section-divider textdivider divider4\">
        <div class=\"container\">
            <h1>DESIGN CREATES EMOTIONAL CONNECTION</h1>
            <hr>
            <p>There’s more to design than meets the eye. It’s when it meets the heart that design creates a meaningful, lasting connection with the audience.</p>
        </div><!-- container -->
    </section><!-- section -->

    <!-- ==== ADMIN ==== -->
    <div class=\"container\" id=\"admin\" name=\"admin\">
        <br>
        <div class=\"row\">
            <br>
            <h1 class=\"centered\">WE ARE STORYTELLERS</h1>
            <hr>
            <br>
            <br>
        </div><!-- /row -->

        <div class=\"row\">
            <div class=\"col-lg-6 blog-bg\">
                <div class=\"col-lg-4 centered\">
                    <br>
                    <p><img class=\"img img-circle\" src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/team04.jpg"), "html", null, true);
        echo "\" width=\"60px\" height=\"60px\"></p>
                    <h4>Jaye Smith</h4>
                    <h5>Published Aug 30.</h5>
                </div>
                <div class=\"col-lg-8 blog-content\">
                    <h2>We Define Success</h2>
                    <p>Armed with insight, we embark on designing the right brand experience that engages the audience. It encompasses both the strategic direction and creative execution that solves a business problem and brings the brand to life.</p>
                    <p>In the create phase, the big idea is unleashed to the world through different media touchpoints. This is when we watch the audience fall in love all over again with our client’s brand.</p>
                    <p><a href=\"#\" class=\"icon icon-link\"> Read More</a></p>
                    <br>
                </div>
            </div><!-- /col -->

            <div class=\"col-lg-6 blog-bg\">
                <div class=\"col-lg-4 centered\">
                    <br>
                    <p><img class=\"img img-circle\" src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/team03.jpg"), "html", null, true);
        echo "\" width=\"60px\" height=\"60px\"></p>
                    <h4>Michele Lampa</h4>
                    <h5>Published Aug 28.</h5>
                </div>
                <div class=\"col-lg-8 blog-content\">
                    <h2>A Beautiful Story</h2>
                    <p>Armed with insight, we embark on designing the right brand experience that engages the audience. It encompasses both the strategic direction and creative execution that solves a business problem and brings the brand to life.</p>
                    <p>In the create phase, the big idea is unleashed to the world through different media touchpoints. This is when we watch the audience fall in love all over again with our client’s brand.</p>
                    <p><a href=\"#\" class=\"icon icon-link\"> Read More</a></p>
                    <br>
                </div>
            </div><!-- /col -->
        </div><!-- /row -->
        <br>
        <br>
    </div><!-- /container -->


    <!-- ==== SECTION DIVIDER6 ==== -->
    <section class=\"section-divider textdivider divider6\">
        <div class=\"container\">
            <h1>CRAFTED IN NEW YORK, USA.</h1>
            <hr>
            <p>Some Address 987,</p>
            <p>+34 9884 4893</p>
            <p><a class=\"icon icon-twitter\" href=\"#\"></a> | <a class=\"icon icon-facebook\" href=\"#\"></a></p>
        </div><!-- container -->
    </section><!-- section -->

    <div class=\"container\" id=\"contact\" name=\"contact\">
        <div class=\"row\">
            <br>
            <h1 class=\"centered\">THANKS FOR VISITING US</h1>
            <hr>
            <br>
            <br>
            <div class=\"col-lg-4\">
                <h3>Contact Information</h3>
                <p><span class=\"icon icon-home\"></span> Some Address 987, NY<br/>
                    <span class=\"icon icon-phone\"></span> +34 9884 4893 <br/>
                    <span class=\"icon icon-mobile\"></span> +34 59855 9853 <br/>
                    <span class=\"icon icon-envelop\"></span> <a href=\"#\"> agency@blacktie.co</a> <br/>
                    <span class=\"icon icon-twitter\"></span> <a href=\"#\"> @blacktie_co </a> <br/>
                    <span class=\"icon icon-facebook\"></span> <a href=\"#\"> BlackTie Agency </a> <br/>
                </p>
            </div><!-- col -->

            <div class=\"col-lg-4\">
                <h3>Newsletter</h3>
                <p>Register to our newsletter and be updated with the latests information regarding our services, offers and much more.</p>
                <p>
                <form class=\"form-horizontal\" role=\"form\">
                    <div class=\"form-group\">
                        <label for=\"inputEmail1\" class=\"col-lg-4 control-label\"></label>
                        <div class=\"col-lg-10\">
                            <input type=\"email\" class=\"form-control\" id=\"inputEmail1\" placeholder=\"Email\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"text1\" class=\"col-lg-4 control-label\"></label>
                        <div class=\"col-lg-10\">
                            <input type=\"text\" class=\"form-control\" id=\"text1\" placeholder=\"Your Name\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-lg-10\">
                            <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
                        </div>
                    </div>
                </form><!-- form -->
                </p>
            </div><!-- col -->

            <div class=\"col-lg-4\">
                <h3>Support Us</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div><!-- col -->

        </div><!-- row -->

    </div><!-- container -->

    <div id=\"footerwrap\">
        <div class=\"container\">
            <h4>Created by <a href=\"http://blacktie.co\">BlackTie.co</a> - Copyright 2014</h4>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "AuthenteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 499,  593 => 483,  552 => 445,  536 => 432,  520 => 419,  502 => 404,  486 => 391,  467 => 375,  443 => 354,  401 => 315,  381 => 298,  369 => 289,  356 => 279,  343 => 269,  322 => 251,  310 => 242,  297 => 232,  284 => 222,  263 => 204,  251 => 195,  238 => 185,  225 => 175,  206 => 159,  175 => 131,  132 => 91,  91 => 52,  71 => 30,  63 => 25,  55 => 20,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
    }
}
