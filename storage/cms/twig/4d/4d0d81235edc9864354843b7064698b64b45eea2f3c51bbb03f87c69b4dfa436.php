<?php

/* D:\OpenServer\domains\pictures.com.ua/themes/photonj/pages/contanct.htm */
class __TwigTemplate_ad041c80a48a5400d09aceb5fcb8a94521897a09d3670f3ee06ba26a0a61c8c3 extends Twig_Template
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
        echo "<div class=\"row\">

   Contact template 
   
   ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("googleMap"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/themes/photonj/pages/contanct.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="row">*/
/* */
/*    Contact template */
/*    */
/*    {% component 'googleMap' %}*/
/* </div>*/
