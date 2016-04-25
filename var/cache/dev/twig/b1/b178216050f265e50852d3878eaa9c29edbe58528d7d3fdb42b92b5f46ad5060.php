<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_108b17b2bd118d00322090263f40996b897bc1e38123a8a5feed1bcce1f4654b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01f8f97e89a34688a983407b6b96cc7c34e70aa4fa15a9aee28ce705ba100ca6 = $this->env->getExtension("native_profiler");
        $__internal_01f8f97e89a34688a983407b6b96cc7c34e70aa4fa15a9aee28ce705ba100ca6->enter($__internal_01f8f97e89a34688a983407b6b96cc7c34e70aa4fa15a9aee28ce705ba100ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01f8f97e89a34688a983407b6b96cc7c34e70aa4fa15a9aee28ce705ba100ca6->leave($__internal_01f8f97e89a34688a983407b6b96cc7c34e70aa4fa15a9aee28ce705ba100ca6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d4d793f3b8662fc15c4c6518e8573d0d42e1842d59e94b77a3256b9c836449c4 = $this->env->getExtension("native_profiler");
        $__internal_d4d793f3b8662fc15c4c6518e8573d0d42e1842d59e94b77a3256b9c836449c4->enter($__internal_d4d793f3b8662fc15c4c6518e8573d0d42e1842d59e94b77a3256b9c836449c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d4d793f3b8662fc15c4c6518e8573d0d42e1842d59e94b77a3256b9c836449c4->leave($__internal_d4d793f3b8662fc15c4c6518e8573d0d42e1842d59e94b77a3256b9c836449c4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f0d9b5fc7fd162bf21e60c18b1954b9520fac24e48e1994c913c492ec8835af = $this->env->getExtension("native_profiler");
        $__internal_7f0d9b5fc7fd162bf21e60c18b1954b9520fac24e48e1994c913c492ec8835af->enter($__internal_7f0d9b5fc7fd162bf21e60c18b1954b9520fac24e48e1994c913c492ec8835af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7f0d9b5fc7fd162bf21e60c18b1954b9520fac24e48e1994c913c492ec8835af->leave($__internal_7f0d9b5fc7fd162bf21e60c18b1954b9520fac24e48e1994c913c492ec8835af_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35731d771247e18196d002dccec3d9eaf46094651c29505eef2df93a700ec611 = $this->env->getExtension("native_profiler");
        $__internal_35731d771247e18196d002dccec3d9eaf46094651c29505eef2df93a700ec611->enter($__internal_35731d771247e18196d002dccec3d9eaf46094651c29505eef2df93a700ec611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_35731d771247e18196d002dccec3d9eaf46094651c29505eef2df93a700ec611->leave($__internal_35731d771247e18196d002dccec3d9eaf46094651c29505eef2df93a700ec611_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
