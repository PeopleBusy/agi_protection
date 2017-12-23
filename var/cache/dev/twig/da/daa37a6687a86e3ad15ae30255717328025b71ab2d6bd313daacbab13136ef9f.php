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
        $__internal_bdc6da376b5001b3894f3c52f565d893ef28029d075d54ec3c338f340b90a892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc6da376b5001b3894f3c52f565d893ef28029d075d54ec3c338f340b90a892->enter($__internal_bdc6da376b5001b3894f3c52f565d893ef28029d075d54ec3c338f340b90a892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_1c9f8cf0a96c5312b21fb10db965c5be3d640f90459907b868d97fd6405121dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9f8cf0a96c5312b21fb10db965c5be3d640f90459907b868d97fd6405121dc->enter($__internal_1c9f8cf0a96c5312b21fb10db965c5be3d640f90459907b868d97fd6405121dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bdc6da376b5001b3894f3c52f565d893ef28029d075d54ec3c338f340b90a892->leave($__internal_bdc6da376b5001b3894f3c52f565d893ef28029d075d54ec3c338f340b90a892_prof);

        
        $__internal_1c9f8cf0a96c5312b21fb10db965c5be3d640f90459907b868d97fd6405121dc->leave($__internal_1c9f8cf0a96c5312b21fb10db965c5be3d640f90459907b868d97fd6405121dc_prof);

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
