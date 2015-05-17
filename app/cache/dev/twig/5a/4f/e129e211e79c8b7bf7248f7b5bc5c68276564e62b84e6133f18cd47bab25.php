<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_5a4fe129e211e79c8b7bf7248f7b5bc5c68276564e62b84e6133f18cd47bab25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"container login\">
        <div class=\"row\">
\t\t<div class=\"background-image\"></div>
            <div class=\"col-md-4 col-md-offset-4 panel-login\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3>
                            <strong><span class=\"glyphicon glyphicon-user\"></span> Login</strong>
                        </h3>
                    </div>
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"logform\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                            ";
        // line 20
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 21
            echo "                                <div class=\"col-xs-12 alert alert-danger text-center\">
                                    Nom d'utilisateur ou mot de passe incorrect
                                </div>
                            ";
        }
        // line 25
        echo "                            <div class=\"col-xs-12\">
                                <input type=\"text\" id=\"username\" id=\"inputEmail3\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"Votre Nom\" />
                                <br />
                            </div>
                            <div class=\"col-xs-12\">
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Votre mot de passe\" />
                                <br />
                            </div>
                            <div class=\"col-xs-12\">
                                <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary pull-right\">Envoyez</button>
                                <br />
                            </div>
                        </form>
                    </div>
                    <div class=\"panel-footer\">
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">
                            <strong>Inscrivez-vous?</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 40,  64 => 26,  61 => 25,  55 => 21,  53 => 20,  49 => 19,  45 => 18,  31 => 6,  28 => 5,  11 => 1,);
    }
}
