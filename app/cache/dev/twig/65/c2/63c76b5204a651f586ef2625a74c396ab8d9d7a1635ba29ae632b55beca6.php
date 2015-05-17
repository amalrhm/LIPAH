<?php

/* ::nav.html.twig */
class __TwigTemplate_65c263c76b5204a651f586ef2625a74c396ab8d9d7a1635ba29ae632b55beca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"navbar-main\">
    <!-- Fixed navbar -->
    <div class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon icon-map\" style=\"font-size:30px; color:#3498db;\"></span>
                </button>
                <a class=\"navbar-brand hidden-xs hidden-sm\" href=\"#home\"><span class=\"icon icon-map\" style=\"font-size:18px; color:#3498db;\"></span></a>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"#home\" class=\"smoothScroll\">Accueil</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Formation <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#formation\" class=\"smoothScroll\"> Cours</a></li>
                            <li><a href=\"#certif\" class=\"smoothScroll\"> Certifications</a></li>
                        </ul>
                    </li>
                    <li> <a href=\"#team\" class=\"smoothScroll\"> Enseignants</a></li>
                    <li> <a href=\"#events\" class=\"smoothScroll\"> Évènements</a></li>
                    <li> <a href=\"#admin\" class=\"smoothScroll\"> Admin</a></li>
                    <li> <a href=\"#contact\" class=\"smoothScroll\"> Contact</a></li>
                    <li> <a href=\"#about\" class=\"smoothScroll\"> A Propos</a></li>
                </ul>

                <div class=\"navbar-form navbar-right\" style=\"margin-top: 15px; color:#ffffff\">
                    ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 30
            echo "                        <span class=\"glyphicon glyphicon-log-out\"></span>
                        <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                            <span class=\"glyphicon glyphicon-user\"></span> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 36
            echo "                        <span class=\"glyphicon glyphicon-log-in\"></span>
                        <a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                            ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 41
        echo "                </div>

            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 41,  75 => 38,  71 => 37,  68 => 36,  62 => 33,  58 => 32,  54 => 31,  51 => 30,  49 => 29,  19 => 1,);
    }
}
