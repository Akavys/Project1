<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_64faaedc2d0f75b9524445c7248dda22b5bf97800bef19dd5c62dd25cdcfae43 extends Twig_Template
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
        $__internal_0dbb2edfa95390cab4e2ae1410554d4fe2c95b38668efc3c52c7b27c0f715898 = $this->env->getExtension("native_profiler");
        $__internal_0dbb2edfa95390cab4e2ae1410554d4fe2c95b38668efc3c52c7b27c0f715898->enter($__internal_0dbb2edfa95390cab4e2ae1410554d4fe2c95b38668efc3c52c7b27c0f715898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0dbb2edfa95390cab4e2ae1410554d4fe2c95b38668efc3c52c7b27c0f715898->leave($__internal_0dbb2edfa95390cab4e2ae1410554d4fe2c95b38668efc3c52c7b27c0f715898_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
