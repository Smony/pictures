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

        <!-- UPLOADS FILES -->
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "groups", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 11
            echo "            ";
            if (($this->getAttribute($context["role"], "code", array()) == "clients")) {
                // line 12
                echo "
                <div id=\"upload\" class=\"dropzone2\" style=\"display:none\">

                    <div class=\"dz-message needsclick\">
                        Drop files here or click to upload.<br>
                    </div>
                    ";
                // line 18
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('CMS')->componentFunction("demoTodo"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                // line 19
                echo "
                </div>

            ";
            } else {
                // line 23
                echo "            ";
            }
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "


        <!-- END UPLOADS FILES -->

            <!--
                    <form data-request=\"onTest\" data-request-update=\"accountres: '#result'\">
                        <input type=\"text\" name=\"value1\" value=\"\"/>
                        <input type=\"text\" name=\"value2\" value=\"\" />
                        <input type=\"submit\" value=\"upload\">
                    </form>
                    <div id=\"#result\">
                        ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("accountres"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "                    </div>
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
        return array (  87 => 38,  83 => 37,  69 => 25,  63 => 24,  60 => 23,  54 => 19,  50 => 18,  42 => 12,  39 => 11,  35 => 10,  30 => 7,  26 => 6,  19 => 1,);
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
/*         <!-- UPLOADS FILES -->*/
/*         {% for role in user.groups() %}*/
/*             {% if role.code == 'clients' %}*/
/* */
/*                 <div id="upload" class="dropzone2" style="display:none">*/
/* */
/*                     <div class="dz-message needsclick">*/
/*                         Drop files here or click to upload.<br>*/
/*                     </div>*/
/*                     {% component 'demoTodo' %}*/
/* */
/*                 </div>*/
/* */
/*             {% else %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/* */
/* */
/*         <!-- END UPLOADS FILES -->*/
/* */
/*             <!--*/
/*                     <form data-request="onTest" data-request-update="accountres: '#result'">*/
/*                         <input type="text" name="value1" value=""/>*/
/*                         <input type="text" name="value2" value="" />*/
/*                         <input type="submit" value="upload">*/
/*                     </form>*/
/*                     <div id="#result">*/
/*                         {% partial "accountres" %}*/
/*                     </div>*/
/*             -->*/
/* */
/*         </div>*/
/*         <div class="col-lg-1"></div>*/
/*     </div>*/
/* </div>*/
