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

         <p>  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "groups", array()), "html", null, true);
        echo " </p>

        <hr />
            ";
        // line 12
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "groups", array())) {
            // line 13
            echo "                1
            ";
        } else {
            // line 15
            echo "                2
            ";
        }
        // line 17
        echo "
        <div id=\"upload\" class=\"dropzone2\" style=\"display:none\"></div>

    <!--
            <form data-request=\"onTest\" data-request-update=\"accountres: '#result'\">
                <input type=\"text\" name=\"value1\" value=\"\"/>
                <input type=\"text\" name=\"value2\" value=\"\" />
                <input type=\"submit\" value=\"upload\">
            </form>
            <div id=\"#result\">
                ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("accountres"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 28
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
        return array (  66 => 28,  62 => 27,  50 => 17,  46 => 15,  42 => 13,  40 => 12,  34 => 9,  30 => 7,  26 => 6,  19 => 1,);
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
/*          <p>  {{ user.groups }} </p>*/
/* */
/*         <hr />*/
/*             {% if user.groups %}*/
/*                 1*/
/*             {% else %}*/
/*                 2*/
/*             {% endif %}*/
/* */
/*         <div id="upload" class="dropzone2" style="display:none"></div>*/
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
