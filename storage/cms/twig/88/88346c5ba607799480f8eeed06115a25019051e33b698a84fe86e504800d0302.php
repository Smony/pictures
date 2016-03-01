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
        echo "
            <hr />


            <form data-request=\"onTest\" data-request-update=\"result: '#result'\">
               <input type=\"text\" name=\"value1\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
        echo "\"/>
                <input type=\"text\" name=\"value2\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "\" />
                <input type=\"submit\" value=\"upload\">
            </form>
            <div id=\"#result\"></div>

            ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : null), "html", null, true);
        echo "
            
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
        return array (  49 => 18,  41 => 13,  37 => 12,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="conteiner">*/
/*     <div class="row">*/
/*         <div class="col-lg-1"></div>*/
/*         <div class="col-lg-10 ">*/
/*                 */
/*                 {% component 'account' %}*/
/* */
/*             <hr />*/
/* */
/* */
/*             <form data-request="onTest" data-request-update="result: '#result'">*/
/*                <input type="text" name="value1" value="{{user.name}}"/>*/
/*                 <input type="text" name="value2" value="{{user.email}}" />*/
/*                 <input type="submit" value="upload">*/
/*             </form>*/
/*             <div id="#result"></div>*/
/* */
/*             {{ result }}*/
/*             */
/*         </div>*/
/*         <div class="col-lg-1"></div>*/
/*     </div>*/
/* </div>*/
