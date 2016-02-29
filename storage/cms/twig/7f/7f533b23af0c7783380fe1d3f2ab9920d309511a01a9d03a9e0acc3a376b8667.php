<?php

/* D:\OpenServer\domains\october.nj.biz/plugins/responsiv/uploader/components/imageuploader/image-multi.htm */
class __TwigTemplate_755c7174acae7a1dc5f721d75a12a3f8febeebb04d83a5ea69d75a2791961b1e extends Twig_Template
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
        return "D:\\OpenServer\\domains\\october.nj.biz/plugins/responsiv/uploader/components/imageuploader/image-multi.htm";
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
