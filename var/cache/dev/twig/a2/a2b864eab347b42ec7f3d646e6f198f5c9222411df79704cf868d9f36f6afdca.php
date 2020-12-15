<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* fizzbuzz/number.html.twig */
class __TwigTemplate_cbf74f05ca31e5b6cb2c52de837bf89aab460701ae8fd68a456c9f597a7a90a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fizzbuzz/number.html.twig"));

        // line 2
        echo "<h1>FizzBuzz</h1>

    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["numbers"]) || array_key_exists("numbers", $context) ? $context["numbers"] : (function () { throw new RuntimeError('Variable "numbers" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $context["number"], "html", null, true);
            echo "</br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "fizzbuzz/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  44 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# fizzbuzz/number.html.twig #}
<h1>FizzBuzz</h1>

    {% for number in numbers %}
        {{ number }}</br>
    {% endfor %}", "fizzbuzz/number.html.twig", "/home/heikel/PhpstormProjects/FizzBuzz/templates/fizzbuzz/number.html.twig");
    }
}
