<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_df4943814877fb021c37c7fe03126e51f1e1faa6f924e9cdfd8a1bf86d2e49a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"container login\">
       <div class=\"row\">
\t\t
\t\t<div class=\"background-image\"></div>
            <div class=\"col-md-7 col-md-offset-3 panel-login\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3>
                            Inscrivez-vous
                        </h3>
                    </div>
                    <div class=\"panel-body\">

            <div class=\"col-xs-10\">
                <h2 class=\"text-muted\" style=\"margin-left: 100px\">Inscrivez-vous</h2>
                <br />
                ";
        // line 21
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 21)->display($context);
        // line 22
        echo "            </div>

                </div>
            </div>
        </div>
\t  </div>\t
    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 22,  50 => 21,  31 => 4,  28 => 3,  11 => 1,);
    }
}
