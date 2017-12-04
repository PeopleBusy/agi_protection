<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d49a4a1835d7817d5e36a9f705892bf6aa88bd7622628e92e500e4b52f0e643b extends Twig_Template
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
        $__internal_d13cd9c29623bedb8ec3920bacdee9dfd30f0a06655c9fe3fbb3520d4295fb0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13cd9c29623bedb8ec3920bacdee9dfd30f0a06655c9fe3fbb3520d4295fb0a->enter($__internal_d13cd9c29623bedb8ec3920bacdee9dfd30f0a06655c9fe3fbb3520d4295fb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d6286ba37cee59eb05d9c2d11f0024ef9d7a4923fdfa3dc7e5fcc62e453c450a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6286ba37cee59eb05d9c2d11f0024ef9d7a4923fdfa3dc7e5fcc62e453c450a->enter($__internal_d6286ba37cee59eb05d9c2d11f0024ef9d7a4923fdfa3dc7e5fcc62e453c450a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d13cd9c29623bedb8ec3920bacdee9dfd30f0a06655c9fe3fbb3520d4295fb0a->leave($__internal_d13cd9c29623bedb8ec3920bacdee9dfd30f0a06655c9fe3fbb3520d4295fb0a_prof);

        
        $__internal_d6286ba37cee59eb05d9c2d11f0024ef9d7a4923fdfa3dc7e5fcc62e453c450a->leave($__internal_d6286ba37cee59eb05d9c2d11f0024ef9d7a4923fdfa3dc7e5fcc62e453c450a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
