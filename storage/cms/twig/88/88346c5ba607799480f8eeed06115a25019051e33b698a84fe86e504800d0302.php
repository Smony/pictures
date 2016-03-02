<?php

/* D:\OpenServer\domains\pictures.com.ua/themes/photonj/pages/account.htm */
class __TwigTemplate_d3d369083f90768363ab9eb741d8222d331d0a292f25e31e867f192ef025195c extends Twig_Template
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
        echo "<div class=\"conteiner\">
    <div class=\"row\">
        <div class=\"col-lg-1\"></div>

        <div class=\"col-lg-10 \">
            ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "        <hr />

        <div id=\"upload\" class=\"dropzone2\" style=\"display:none\">123</div>

    <!--
            <form data-request=\"onTest\" data-request-update=\"accountres: '#result'\">
                <input type=\"text\" name=\"value1\" value=\"\"/>
                <input type=\"text\" name=\"value2\" value=\"\" />
                <input type=\"submit\" value=\"upload\">
            </form>
            <div id=\"#result\">
                ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("accountres"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "            </div>
-->

        </div>
        <div class=\"col-lg-1\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/themes/photonj/pages/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 19,  43 => 18,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="conteiner">*/
/*     <div class="row">*/
/*         <div class="col-lg-1"></div>*/
/* */
/*         <div class="col-lg-10 ">*/
/*             {% component 'account' %}*/
/*         <hr />*/
/* */
/*         <div id="upload" class="dropzone2" style="display:none">123</div>*/
/* */
/*     <!--*/
/*             <form data-request="onTest" data-request-update="accountres: '#result'">*/
/*                 <input type="text" name="value1" value=""/>*/
/*                 <input type="text" name="value2" value="" />*/
/*                 <input type="submit" value="upload">*/
/*             </form>*/
/*             <div id="#result">*/
/*                 {% partial "accountres" %}*/
/*             </div>*/
/* -->*/
/* */
/*         </div>*/
/*         <div class="col-lg-1"></div>*/
/*     </div>*/
/* </div>*/
