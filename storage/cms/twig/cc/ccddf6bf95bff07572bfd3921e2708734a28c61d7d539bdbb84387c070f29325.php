<?php

/* D:\OpenServer\domains\october.nj.biz/plugins/rainlab/user/components/account/update.htm */
class __TwigTemplate_c711ad8cbc679004e423a9257e25459bf9b1152567c49a3a9fb8d6cc672038bf extends Twig_Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onUpdate", array("model" => (isset($context["user"]) ? $context["user"] : null))));
        echo "

    <!--
        <div class=\"form-group\">
            <label for=\"accountName\">Full Name</label>
            <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 6
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "name"));
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"accountEmail\">Email</label>
            <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 11
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "email"));
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"accountPassword\">New Password</label>
            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
        </div>

        <div class=\"form-group\">
            <label for=\"accountPasswordConfirm\">Confirm New Password</label>
            <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
        </div>
    -->

    <fieldset class=\"content-group\">
        <legend class=\"text-bold\">Login</legend>

        <div class=\"form-group\">
            <label class=\"control-label col-lg-2\">Full Name</label>
            <div class=\"col-lg-10\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
                    <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 33
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "name"));
        echo "\">
                </div>
            </div>
        </div>


        <div class=\"form-group\">
            <label class=\"control-label col-lg-2\">Email </label>
            <div class=\"col-lg-10\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">@</span>
                    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 44
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "email"));
        echo "\">
                </div>
            </div>
        </div>

    </fieldset>

    <fieldset class=\"content-group\">
        <legend class=\"text-bold\">Password</legend>


        <div class=\"form-group\">
            <label class=\"control-label col-lg-2\">New Password</label>
            <div class=\"col-lg-10\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                    <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label col-lg-2\">Confirm New Password</label>
            <div class=\"col-lg-10\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                    <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
                </div>
            </div>
        </div>

    </fieldset>

    <fieldset class=\"content-group\">
        <legend class=\"text-bold\">Upload images</legend>

        ";
        // line 80
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("imageUploader"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo " <!-- include plugin uploader -->

    </fieldset>

    <button type=\"submit\" class=\"btn btn-default\">Save</button>

";
        // line 86
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/plugins/rainlab/user/components/account/update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 86,  113 => 80,  74 => 44,  60 => 33,  35 => 11,  27 => 6,  19 => 1,);
    }
}
/* {{ form_ajax('onUpdate', { model: user }) }}*/
/* */
/*     <!--*/
/*         <div class="form-group">*/
/*             <label for="accountName">Full Name</label>*/
/*             <input name="name" type="text" class="form-control" id="accountName" value="{{ form_value('name') }}">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="accountEmail">Email</label>*/
/*             <input name="email" type="email" class="form-control" id="accountEmail" value="{{ form_value('email') }}">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="accountPassword">New Password</label>*/
/*             <input name="password" type="password" class="form-control" id="accountPassword">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="accountPasswordConfirm">Confirm New Password</label>*/
/*             <input name="password_confirmation" type="password" class="form-control" id="accountPasswordConfirm">*/
/*         </div>*/
/*     -->*/
/* */
/*     <fieldset class="content-group">*/
/*         <legend class="text-bold">Login</legend>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-lg-2">Full Name</label>*/
/*             <div class="col-lg-10">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon"><i class="icon-user"></i></span>*/
/*                     <input name="name" type="text" class="form-control" id="accountName" value="{{ form_value('name') }}">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-lg-2">Email </label>*/
/*             <div class="col-lg-10">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon">@</span>*/
/*                     <input name="email" type="email" class="form-control" id="accountEmail" value="{{ form_value('email') }}">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </fieldset>*/
/* */
/*     <fieldset class="content-group">*/
/*         <legend class="text-bold">Password</legend>*/
/* */
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-lg-2">New Password</label>*/
/*             <div class="col-lg-10">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>*/
/*                     <input name="password" type="password" class="form-control" id="accountPassword">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-lg-2">Confirm New Password</label>*/
/*             <div class="col-lg-10">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>*/
/*                     <input name="password_confirmation" type="password" class="form-control" id="accountPasswordConfirm">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </fieldset>*/
/* */
/*     <fieldset class="content-group">*/
/*         <legend class="text-bold">Upload images</legend>*/
/* */
/*         {% component 'imageUploader' %} <!-- include plugin uploader -->*/
/* */
/*     </fieldset>*/
/* */
/*     <button type="submit" class="btn btn-default">Save</button>*/
/* */
/* {{ form_close() }}*/
