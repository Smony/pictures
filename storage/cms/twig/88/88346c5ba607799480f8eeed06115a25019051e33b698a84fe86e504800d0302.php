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
<!--
            <iframe width=\"100%\" height=\"450\" frameborder=\"0\" scrolling=\"no\" src=\"http://chatfocus.com/client.php?chat=6174&ext_id=<?=\$userId?>&ext_key=<?=\$key?>
                &ext_name=<?=\$userName?>&ext_sex=<?=\$userGender?>
                &ext_avatar=<?=urlencode(\$userAvatar)?>&ext_profile=<?=urlencode(\$userProfile)?>\"></iframe>
-->
            <p>  ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isOnline", array(), "method"), "html", null, true);
        echo " </p>

            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAvatarThumb", array(0 => 300), "method"), "html", null, true);
        echo "\" class=\"img-circle img-sm\" alt=\"\">

            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAllUsersOnly", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["userAllOnly"]) {
            // line 18
            echo "
               <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["userAllOnly"], "id", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["userAllOnly"], "name", array()), "html", null, true);
            echo "</p>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userAllOnly'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "

        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "groups", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 25
            echo "            ";
            if (($this->getAttribute($context["role"], "code", array()) == "clients")) {
                // line 26
                echo "
                <div id=\"upload\" class=\"dropzone2\" style=\"display:none\"></div>

            ";
            } else {
                // line 30
                echo "
            ";
            }
            // line 32
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
            <!--
                    <form data-request=\"onTest\" data-request-update=\"accountres: '#result'\">
                        <input type=\"text\" name=\"value1\" value=\"\"/>
                        <input type=\"text\" name=\"value2\" value=\"\" />
                        <input type=\"submit\" value=\"upload\">
                    </form>
                    <div id=\"#result\">
                        ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("accountres"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 42
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
        return array (  107 => 42,  103 => 41,  93 => 33,  87 => 32,  83 => 30,  77 => 26,  74 => 25,  70 => 24,  66 => 22,  55 => 19,  52 => 18,  48 => 17,  43 => 15,  38 => 13,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="conteiner">*/
/*     <div class="row">*/
/*         <div class="col-lg-1"></div>*/
/* */
/*         <div class="col-lg-10 ">*/
/*             {% component 'account' %}*/
/*         <hr />*/
/* <!--*/
/*             <iframe width="100%" height="450" frameborder="0" scrolling="no" src="http://chatfocus.com/client.php?chat=6174&ext_id=<?=$userId?>&ext_key=<?=$key?>*/
/*                 &ext_name=<?=$userName?>&ext_sex=<?=$userGender?>*/
/*                 &ext_avatar=<?=urlencode($userAvatar)?>&ext_profile=<?=urlencode($userProfile)?>"></iframe>*/
/* -->*/
/*             <p>  {{ user.isOnline() }} </p>*/
/* */
/*             <img src="{{ user.getAvatarThumb(300) }}" class="img-circle img-sm" alt="">*/
/* */
/*             {% for userAllOnly in user.getAllUsersOnly() %}*/
/* */
/*                <p>{{ userAllOnly.id }} - {{ userAllOnly.name }}</p>*/
/* */
/*             {% endfor %}*/
/* */
/* */
/*         {% for role in user.groups() %}*/
/*             {% if role.code == 'clients' %}*/
/* */
/*                 <div id="upload" class="dropzone2" style="display:none"></div>*/
/* */
/*             {% else %}*/
/* */
/*             {% endif %}*/
/*         {% endfor %}*/
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
