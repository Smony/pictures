<?php

/* D:\OpenServer\domains\october.nj.biz/plugins/smony/home/components/coffee/default.htm */
class __TwigTemplate_f7d1a61bc96add26ae6abbbeb071af843e4e73027516d17ec9ba8df237798dca extends Twig_Template
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
        echo "<div class=\"row coffe\" style=\"margin-right: 0px;  margin-left: 0px;\">


    <div class=\"col-xs-hidden col-md-2\"></div>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["homeCoffee"]) ? $context["homeCoffee"] : null), "getCoffee", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "        <div class=\"col-xs-3 col-md-2 COFFEE_CUPS\">
            <span class=\"indent\"></span>
            <span class=\"indent\"></span>
            <img class=\"img-size\" src=\"themes/photonj/assets/img/coffe.jpg\">
            <p></p>
            <p class=\"text_coffe\">COFFEE CUPS</p>
            <p class=\"digits_coffe\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "coffee_cups", array()), "html", null, true);
            echo "</p>
            <span class=\"indent\"></span>
            <span class=\"indent\"></span>
        </div>

    <div class=\"col-xs-3 col-md-2 PROJECTS\">
        <span class=\"indent\"></span>
        <span class=\"indent\"></span>
        <img class=\"img-size\" src=\"themes/photonj/assets/img/work.jpg\">
        <p></p>
        <p class=\"text_coffe\">PROJECTS</p>
        <p class=\"digits_coffe\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "projects", array()), "html", null, true);
            echo "</p>
        <span class=\"indent\"></span>
        <span class=\"indent\"></span>
    </div>

    <div class=\"col-xs-3 col-md-2 WORKING_DAYS\">
        <span class=\"indent\"></span>
        <span class=\"indent\"></span>
        <img class=\"img-size\" src=\"themes/photonj/assets/img/mouse.jpg\">
        <p></p>
        <p class=\"text_coffe\">WORKING DAYS</p>
        <p class=\"digits_coffe\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "working_days", array()), "html", null, true);
            echo "</p>
        <span class=\"indent\"></span>
        <span class=\"indent\"></span>
    </div>

    <div class=\"col-xs-3 col-md-2 CLIENTS\">
        <span class=\"indent\"></span>
        <span class=\"indent\"></span>
        <img class=\"img-size\" src=\"themes/photonj/assets/img/clients.jpg\">
        <p></p>
        <p class=\"text_coffe\">CLIENTS</p>
        <p class=\"digits_coffe\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "clients", array()), "html", null, true);
            echo "</p>
        <span class=\"indent\"></span>
        <span class=\"indent\"></span>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    <div class=\"col-xs-hidden col-md-2 \">

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/plugins/smony/home/components/coffee/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 50,  79 => 45,  65 => 34,  51 => 23,  37 => 12,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="row coffe" style="margin-right: 0px;  margin-left: 0px;">*/
/* */
/* */
/*     <div class="col-xs-hidden col-md-2"></div>*/
/*     {% for post in homeCoffee.getCoffee %}*/
/*         <div class="col-xs-3 col-md-2 COFFEE_CUPS">*/
/*             <span class="indent"></span>*/
/*             <span class="indent"></span>*/
/*             <img class="img-size" src="themes/photonj/assets/img/coffe.jpg">*/
/*             <p></p>*/
/*             <p class="text_coffe">COFFEE CUPS</p>*/
/*             <p class="digits_coffe">{{ post.coffee_cups }}</p>*/
/*             <span class="indent"></span>*/
/*             <span class="indent"></span>*/
/*         </div>*/
/* */
/*     <div class="col-xs-3 col-md-2 PROJECTS">*/
/*         <span class="indent"></span>*/
/*         <span class="indent"></span>*/
/*         <img class="img-size" src="themes/photonj/assets/img/work.jpg">*/
/*         <p></p>*/
/*         <p class="text_coffe">PROJECTS</p>*/
/*         <p class="digits_coffe">{{ post.projects }}</p>*/
/*         <span class="indent"></span>*/
/*         <span class="indent"></span>*/
/*     </div>*/
/* */
/*     <div class="col-xs-3 col-md-2 WORKING_DAYS">*/
/*         <span class="indent"></span>*/
/*         <span class="indent"></span>*/
/*         <img class="img-size" src="themes/photonj/assets/img/mouse.jpg">*/
/*         <p></p>*/
/*         <p class="text_coffe">WORKING DAYS</p>*/
/*         <p class="digits_coffe">{{ post.working_days }}</p>*/
/*         <span class="indent"></span>*/
/*         <span class="indent"></span>*/
/*     </div>*/
/* */
/*     <div class="col-xs-3 col-md-2 CLIENTS">*/
/*         <span class="indent"></span>*/
/*         <span class="indent"></span>*/
/*         <img class="img-size" src="themes/photonj/assets/img/clients.jpg">*/
/*         <p></p>*/
/*         <p class="text_coffe">CLIENTS</p>*/
/*         <p class="digits_coffe">{{ post.clients }}</p>*/
/*         <span class="indent"></span>*/
/*         <span class="indent"></span>*/
/*     </div>*/
/*     {% endfor %}*/
/*     <div class="col-xs-hidden col-md-2 ">*/
/* */
/*     </div>*/
/* */
/* </div>*/
