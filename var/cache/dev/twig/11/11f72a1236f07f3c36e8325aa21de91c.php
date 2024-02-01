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

/* partials/_hearder.html.twig */
class __TwigTemplate_de4ebc14eaeb46cd0f47c65b4d4706d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_hearder.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_hearder.html.twig"));

        // line 1
        echo "<header>
  <div class=\"collapse bg-dark\" id=\"navbarHeader\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-8 col-md-7 py-4\">
          <h4 class=\"text-white\">About</h4>
          <p class=\"text-muted\">Just another gallery of <strong>random photographies</strong> made with a little bit of <strong>love</strong> and a lot of &copy;Bootstrap</p>
        </div>
      </div>
    </div>
  </div>
  <div class=\"navbar navbar-dark bg-dark shadow-sm\">
    <div class=\"container\">
      <a href=\"#\" class=\"navbar-brand d-flex align-items-center\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" aria-hidden=\"true\" class=\"me-2\" viewBox=\"0 0 24 24\"><path d=\"M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z\"/><circle cx=\"12\" cy=\"13\" r=\"4\"/></svg>
        <strong>Random Gallery</strong>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarHeader\" aria-controls=\"navbarHeader\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
    </div>
  </div>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_hearder.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
  <div class=\"collapse bg-dark\" id=\"navbarHeader\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-8 col-md-7 py-4\">
          <h4 class=\"text-white\">About</h4>
          <p class=\"text-muted\">Just another gallery of <strong>random photographies</strong> made with a little bit of <strong>love</strong> and a lot of &copy;Bootstrap</p>
        </div>
      </div>
    </div>
  </div>
  <div class=\"navbar navbar-dark bg-dark shadow-sm\">
    <div class=\"container\">
      <a href=\"#\" class=\"navbar-brand d-flex align-items-center\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" aria-hidden=\"true\" class=\"me-2\" viewBox=\"0 0 24 24\"><path d=\"M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z\"/><circle cx=\"12\" cy=\"13\" r=\"4\"/></svg>
        <strong>Random Gallery</strong>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarHeader\" aria-controls=\"navbarHeader\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
    </div>
  </div>
</header>", "partials/_hearder.html.twig", "/home/lucille/Public/Gallery/templates/partials/_hearder.html.twig");
    }
}
