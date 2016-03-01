<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/responsiv/uploader/components/imageuploader/image-multi.htm */
class __TwigTemplate_29cfe76bc19fb7ac247e61f8c6658a76353f42813dd4f7d08d2a6fc145e894b6 extends Twig_Template
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
        echo "
<p class=\"placeholder\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "placeholderText", array()), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/responsiv/uploader/components/imageuploader/image-multi.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* */
/* <p class="placeholder">{{ __SELF__.placeholderText }}</p>*/
