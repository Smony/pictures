<?php

/* D:\OpenServer\domains\pictures.com.ua/themes/photonj/partials/accountres.htm */
class __TwigTemplate_2779fde78471ac24b5d5b9f8d83df7dc41cb64d97fdf2c534ab42b320918b72d extends Twig_Template
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
        if ((isset($context["answer"]) ? $context["answer"] : null)) {
            // line 2
            echo "    The result is ";
            echo twig_escape_filter($this->env, (isset($context["answer"]) ? $context["answer"] : null), "html", null, true);
            echo ".
";
        } else {
            // line 4
            echo "    Click the <em>upload</em> button to find the answer.
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/themes/photonj/partials/accountres.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if answer %}*/
/*     The result is {{ answer }}.*/
/* {% else %}*/
/*     Click the <em>upload</em> button to find the answer.*/
/* {% endif %}*/
