<?php

/* D:\OpenServer\domains\october.nj.biz/plugins/responsiv/uploader/components/imageuploader/default.htm */
class __TwigTemplate_db7afaa3456aa748143db28a74a9e84af133ddb49a9e06b948a03f1cfef4b736 extends Twig_Template
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
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "isMulti", array())) {
            // line 2
            echo "
    ";
            // line 3
            $context["imageSize"] = (((("width:" . $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "previewWidth", array())) . "px;height:") . $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "previewHeight", array())) . "px");
            // line 4
            echo "
    <div
        class=\"control-multi-image-uploader ";
            // line 6
            echo (($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "isPopulated", array(), "method")) ? ("has-image") : (""));
            echo "\"
        data-handler=\"";
            // line 7
            echo twig_escape_filter($this->env, ((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::onUpdateImage"), "html", null, true);
            echo "\"
        data-control=\"multi-image-uploader\"
        data-max-size=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "maxSize", array()), "html", null, true);
            echo "\"
        data-file-types=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "fileTypes", array()), ", "), "html", null, true);
            echo "\">
        <div class=\"clickable\"></div>
        <div class=\"content\">
            ";
            // line 13
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['image'] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "getPopulated", array(), "method")            ;
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::image-multi")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 14
            echo "        </div>

        <div class=\"template\" style=\"display: none\">
            <div class=\"dz-preview dz-file-preview\" style=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["imageSize"]) ? $context["imageSize"] : null), "html", null, true);
            echo "\">
                <div class=\"action-panel\">
                    <a href=\"javascript:;\" class=\"delete\">&times;</a>
                </div>
                <div class=\"dz-details\">
                    <div class=\"dz-filename\"><span data-dz-name></span></div>
                    <div class=\"dz-size\" data-dz-size></div>
                    <img class=\"thumbnail\" data-dz-thumbnail />
                </div>
                <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div>

                <div class=\"dz-error-message\">
                    <div class=\"dz-error-mark\">&cross;</div>
                    <span data-dz-errormessage></span>
                </div>
                <div class=\"loading\"></div>
            </div>
        </div>

    </div>

";
        } else {
            // line 39
            echo "
    <div
        class=\"control-single-image-uploader ";
            // line 41
            echo (($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "isPopulated", array(), "method")) ? ("has-image") : (""));
            echo " ";
            echo (($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "previewFluid", array())) ? ("is-fluid") : (""));
            echo "\"
        data-update-partial=\"";
            // line 42
            echo twig_escape_filter($this->env, ((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::image-single"), "html", null, true);
            echo "\"
        data-handler=\"";
            // line 43
            echo twig_escape_filter($this->env, ((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::onUpdateImage"), "html", null, true);
            echo "\"
        data-control=\"single-image-uploader\"
        data-max-size=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "maxSize", array()), "html", null, true);
            echo "\"
        data-file-types=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "fileTypes", array()), ", "), "html", null, true);
            echo "\"
        style=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "getCssSize", array(0 => 26), "method"), "html", null, true);
            echo "\">
        <div class=\"content\" style=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "getCssSize", array(0 => 26), "method"), "html", null, true);
            echo "\">
            ";
            // line 49
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['image'] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "getPopulated", array(), "method")            ;
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::image-single")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 50
            echo "        </div>
    </div>

";
        }
        // line 54
        echo "
";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/plugins/responsiv/uploader/components/imageuploader/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 54,  124 => 50,  119 => 49,  115 => 48,  111 => 47,  107 => 46,  103 => 45,  98 => 43,  94 => 42,  88 => 41,  84 => 39,  59 => 17,  54 => 14,  49 => 13,  43 => 10,  39 => 9,  34 => 7,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if __SELF__.isMulti %}*/
/* */
/*     {% set imageSize = 'width:'~(__SELF__.previewWidth)~'px;height:'~(__SELF__.previewHeight)~'px' %}*/
/* */
/*     <div*/
/*         class="control-multi-image-uploader {{ __SELF__.isPopulated() ? 'has-image' : '' }}"*/
/*         data-handler="{{ __SELF__ ~ '::onUpdateImage' }}"*/
/*         data-control="multi-image-uploader"*/
/*         data-max-size="{{ __SELF__.maxSize }}"*/
/*         data-file-types="{{ __SELF__.fileTypes|join(', ') }}">*/
/*         <div class="clickable"></div>*/
/*         <div class="content">*/
/*             {% partial __SELF__ ~ '::image-multi' image = __SELF__.getPopulated() %}*/
/*         </div>*/
/* */
/*         <div class="template" style="display: none">*/
/*             <div class="dz-preview dz-file-preview" style="{{ imageSize }}">*/
/*                 <div class="action-panel">*/
/*                     <a href="javascript:;" class="delete">&times;</a>*/
/*                 </div>*/
/*                 <div class="dz-details">*/
/*                     <div class="dz-filename"><span data-dz-name></span></div>*/
/*                     <div class="dz-size" data-dz-size></div>*/
/*                     <img class="thumbnail" data-dz-thumbnail />*/
/*                 </div>*/
/*                 <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>*/
/* */
/*                 <div class="dz-error-message">*/
/*                     <div class="dz-error-mark">&cross;</div>*/
/*                     <span data-dz-errormessage></span>*/
/*                 </div>*/
/*                 <div class="loading"></div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% else %}*/
/* */
/*     <div*/
/*         class="control-single-image-uploader {{ __SELF__.isPopulated() ? 'has-image' }} {{ __SELF__.previewFluid ? 'is-fluid' }}"*/
/*         data-update-partial="{{ __SELF__ ~ '::image-single' }}"*/
/*         data-handler="{{ __SELF__ ~ '::onUpdateImage' }}"*/
/*         data-control="single-image-uploader"*/
/*         data-max-size="{{ __SELF__.maxSize }}"*/
/*         data-file-types="{{ __SELF__.fileTypes|join(', ') }}"*/
/*         style="{{ __SELF__.getCssSize(26) }}">*/
/*         <div class="content" style="{{ __SELF__.getCssSize(26) }}">*/
/*             {% partial __SELF__ ~ '::image-single' image = __SELF__.getPopulated() %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endif %}*/
/* */
/* */
