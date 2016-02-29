<?php

/* D:\OpenServer\domains\october.nj.biz/themes/photonj/partials/singin.htm */
class __TwigTemplate_fc68cf436f5b41b2b352f348710e3fd234f39ba0576b73b1aad62a7b3e6cf183 extends Twig_Template
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
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 2
            echo "<li id=\"wider_on_the_PC\">
    <a href=\"";
            // line 3
            echo $this->env->getExtension('CMS')->pageFilter("account");
            echo "\">
       <button type=\"button\" class=\"btn btn-default\" id=\"navigate\"><i class=\"glyphicon glyphicon-user\"></i>&nbsp;";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</button>
    </a>
</li>
";
        } else {
            // line 8
            echo "<a href=\"";
            echo $this->env->getExtension('CMS')->pageFilter("account");
            echo "\">
    <button type=\"button\" class=\"btn btn-default\" id=\"navigate\" style=\"margin-top: 0px;\">
        <a href=\"";
            // line 10
            echo $this->env->getExtension('CMS')->pageFilter("account");
            echo "\" class=\"btn-auth-group\">Login</a> / <a href=\"";
            echo $this->env->getExtension('CMS')->pageFilter("account");
            echo "\" class=\"btn-auth-group\">Register</a>
    </button>
</a>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/photonj/partials/singin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  35 => 8,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if user %}*/
/* <li id="wider_on_the_PC">*/
/*     <a href="{{ 'account'|page }}">*/
/*        <button type="button" class="btn btn-default" id="navigate"><i class="glyphicon glyphicon-user"></i>&nbsp;{{ user.name }}</button>*/
/*     </a>*/
/* </li>*/
/* {% else %}*/
/* <a href="{{ 'account'|page }}">*/
/*     <button type="button" class="btn btn-default" id="navigate" style="margin-top: 0px;">*/
/*         <a href="{{ 'account'|page }}" class="btn-auth-group">Login</a> / <a href="{{ 'account'|page }}" class="btn-auth-group">Register</a>*/
/*     </button>*/
/* </a>*/
/* {% endif %}*/
