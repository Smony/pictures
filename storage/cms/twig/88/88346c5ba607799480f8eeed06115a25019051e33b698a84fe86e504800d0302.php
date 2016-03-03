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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAllUsers", array(), "method"), "html", null, true);
        echo " </p>

            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAllUsers", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 12
            echo "
                    <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "name", array()), "html", null, true);
            echo " </p>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "

        <hr />
         <p>  ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "groups", array()), "html", null, true);
        echo " </p>

         <p>  ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUser", array(), "method"), "html", null, true);
        echo " </p>




         <p>  ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isOnline", array(), "method"), "html", null, true);
        echo " </p>
         <p>  ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAvatarThumb", array(0 => 100), "method"), "html", null, true);
        echo " </p>
         <p>  ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getPersistCode", array(), "method"), "html", null, true);
        echo " </p>

        <hr />
            ";
        // line 31
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "groups", array()) == "[{\"id\":1,\"name\":\"Clients\",\"code\":\"clients\",\"description\":\"Clients group for website users.\",\"created_at\":\"2016-02-04 09:22:23\",\"updated_at\":\"2016-02-08 16:39:15\",\"pivot\":{\"user_id\":3,\"user_group_id\":1}}]")) {
            // line 32
            echo "            <div id=\"upload\" class=\"dropzone2\" style=\"display:none\"></div>
            ";
        } else {
            // line 34
            echo "
            ";
        }
        // line 36
        echo "            <iframe width=\"100%\" height=\"450\" frameborder=\"0\" scrolling=\"no\" src=\"http://chatfocus.com/client.php?chat=6174&ext_id=<?=\$userId?>&ext_key=<?=\$key?>&ext_name=<?=\$userName?>&ext_sex=<?=\$userGender?>&ext_avatar=<?=urlencode(\$userAvatar)?>&ext_profile=<?=urlencode(\$userProfile)?>\"></iframe>
            <!--
                    <form data-request=\"onTest\" data-request-update=\"accountres: '#result'\">
                        <input type=\"text\" name=\"value1\" value=\"\"/>
                        <input type=\"text\" name=\"value2\" value=\"\" />
                        <input type=\"submit\" value=\"upload\">
                    </form>
                    <div id=\"#result\">
                        ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("accountres"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 45
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
        return array (  111 => 45,  107 => 44,  97 => 36,  93 => 34,  89 => 32,  87 => 31,  81 => 28,  77 => 27,  73 => 26,  65 => 21,  60 => 19,  55 => 16,  46 => 13,  43 => 12,  39 => 11,  34 => 9,  30 => 7,  26 => 6,  19 => 1,);
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
/*             <p>  {{ user.getAllUsers() }} </p>*/
/* */
/*             {% for info in user.getAllUsers() %}*/
/* */
/*                     <p>{{ info.name }} </p>*/
/* */
/*             {% endfor %}*/
/* */
/* */
/*         <hr />*/
/*          <p>  {{ user.groups }} </p>*/
/* */
/*          <p>  {{ user.getUser() }} </p>*/
/* */
/* */
/* */
/* */
/*          <p>  {{ user.isOnline() }} </p>*/
/*          <p>  {{ user.getAvatarThumb(100) }} </p>*/
/*          <p>  {{ user.getPersistCode() }} </p>*/
/* */
/*         <hr />*/
/*             {% if user.groups == '[{"id":1,"name":"Clients","code":"clients","description":"Clients group for website users.","created_at":"2016-02-04 09:22:23","updated_at":"2016-02-08 16:39:15","pivot":{"user_id":3,"user_group_id":1}}]' %}*/
/*             <div id="upload" class="dropzone2" style="display:none"></div>*/
/*             {% else %}*/
/* */
/*             {% endif %}*/
/*             <iframe width="100%" height="450" frameborder="0" scrolling="no" src="http://chatfocus.com/client.php?chat=6174&ext_id=<?=$userId?>&ext_key=<?=$key?>&ext_name=<?=$userName?>&ext_sex=<?=$userGender?>&ext_avatar=<?=urlencode($userAvatar)?>&ext_profile=<?=urlencode($userProfile)?>"></iframe>*/
/*             <!--*/
/*                     <form data-request="onTest" data-request-update="accountres: '#result'">*/
/*                         <input type="text" name="value1" value=""/>*/
/*                         <input type="text" name="value2" value="" />*/
/*                         <input type="submit" value="upload">*/
/*                     </form>*/
/*                     <div id="#result">*/
/*                         {% partial "accountres" %}*/
/*                     </div>*/
/*         -->*/
/* */
/*         </div>*/
/*         <div class="col-lg-1"></div>*/
/*     </div>*/
/* </div>*/
