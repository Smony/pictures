<?php

/* D:\OpenServer\domains\pictures.com.ua/themes/photonj/pages/s.htm */
class __TwigTemplate_49fa368fd3e259185e0f51baf8e9046218a5696730d8eb4aeeb20558a2305981 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("carousel"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("work"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "          <!--INCLUDE WORK ITEMS -->

";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("item"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "          <!--INCLUDE IF YOU ITEMS -->

";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("homeCoffee"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "    <!-- INCLUDE COFFEE ITEMS -->

";
        // line 9
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("plan.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/themes/photonj/pages/s.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  40 => 7,  33 => 5,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% component 'carousel' %}*/
/* */
/* {% component 'work' %}          <!--INCLUDE WORK ITEMS -->*/
/* */
/* {% component 'item' %}          <!--INCLUDE IF YOU ITEMS -->*/
/* */
/* {% component 'homeCoffee' %}    <!-- INCLUDE COFFEE ITEMS -->*/
/* */
/* {% content "plan.htm" %}*/