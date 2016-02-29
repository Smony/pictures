<?php

/* D:\OpenServer\domains\october.nj.biz/plugins/rainlab/user/components/account/signin.htm */
class __TwigTemplate_f09998f2bce33c46b024b90f4430eeac12b7b8ace74446401ecb1d9a8b639872 extends Twig_Template
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
        echo "<form
    data-request=\"onSignin\">

    <!--
        <div class=\"form-group\">
            <label for=\"userSigninLogin\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["loginAttributeLabel"]) ? $context["loginAttributeLabel"] : null), "html", null, true);
        echo "</label>
            <input
                name=\"login\"
                type=\"text\"
                class=\"form-control\"
                id=\"userSigninLogin\"
                placeholder=\"Enter your ";
        // line 12
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["loginAttributeLabel"]) ? $context["loginAttributeLabel"] : null)), "html", null, true);
        echo "\" />
        </div>

        <div class=\"form-group\">
            <label for=\"userSigninPassword\">Password</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"userSigninPassword\"
                placeholder=\"Enter your password\" />
        </div>
     -->

    <div class=\"panel panel-body login-form\">
        <div class=\"text-center\">
            <div class=\"icon-object border-slate-300 text-slate-300\"><i class=\"icon-reading\"></i></div>
            <h5 class=\"content-group\">Login to your account <small class=\"display-block\">Enter your credentials below</small></h5>
        </div>

        <div class=\"form-group has-feedback has-feedback-left\">
            <input name=\"login\" id=\"userSigninLogin\" type=\"text\" class=\"form-control\" placeholder=\"Enter your ";
        // line 33
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["loginAttributeLabel"]) ? $context["loginAttributeLabel"] : null)), "html", null, true);
        echo "\">
            <div class=\"form-control-feedback\">
                <i class=\"icon-user text-muted\"></i>
            </div>
        </div>

        <div class=\"form-group has-feedback has-feedback-left\">
            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"userSigninPassword\" placeholder=\"Enter your password\">
            <div class=\"form-control-feedback\">
                <i class=\"icon-lock2 text-muted\"></i>
            </div>
        </div>

        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Sign in <i class=\"icon-circle-right2 position-right\"></i></button>
        </div>

        <!--
            <div class=\"text-center\">
                <a href=\"login_password_recover.html\">Forgot password?</a>
            </div>
        -->
    </div>


    <!--<button type=\"submit\" class=\"btn btn-default\">Sign in</button>-->
</form>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/plugins/rainlab/user/components/account/signin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 33,  35 => 12,  26 => 6,  19 => 1,);
    }
}
/* <form*/
/*     data-request="onSignin">*/
/* */
/*     <!--*/
/*         <div class="form-group">*/
/*             <label for="userSigninLogin">{{ loginAttributeLabel }}</label>*/
/*             <input*/
/*                 name="login"*/
/*                 type="text"*/
/*                 class="form-control"*/
/*                 id="userSigninLogin"*/
/*                 placeholder="Enter your {{ loginAttributeLabel|lower }}" />*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="userSigninPassword">Password</label>*/
/*             <input*/
/*                 name="password"*/
/*                 type="password"*/
/*                 class="form-control"*/
/*                 id="userSigninPassword"*/
/*                 placeholder="Enter your password" />*/
/*         </div>*/
/*      -->*/
/* */
/*     <div class="panel panel-body login-form">*/
/*         <div class="text-center">*/
/*             <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>*/
/*             <h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>*/
/*         </div>*/
/* */
/*         <div class="form-group has-feedback has-feedback-left">*/
/*             <input name="login" id="userSigninLogin" type="text" class="form-control" placeholder="Enter your {{ loginAttributeLabel|lower }}">*/
/*             <div class="form-control-feedback">*/
/*                 <i class="icon-user text-muted"></i>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group has-feedback has-feedback-left">*/
/*             <input name="password" type="password" class="form-control" id="userSigninPassword" placeholder="Enter your password">*/
/*             <div class="form-control-feedback">*/
/*                 <i class="icon-lock2 text-muted"></i>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>*/
/*         </div>*/
/* */
/*         <!--*/
/*             <div class="text-center">*/
/*                 <a href="login_password_recover.html">Forgot password?</a>*/
/*             </div>*/
/*         -->*/
/*     </div>*/
/* */
/* */
/*     <!--<button type="submit" class="btn btn-default">Sign in</button>-->*/
/* </form>*/
