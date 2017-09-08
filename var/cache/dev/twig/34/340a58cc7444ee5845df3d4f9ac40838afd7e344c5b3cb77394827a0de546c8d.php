<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_69787b8f45555631b7dd60dddf820b29a6106424c88235bb45364dc950e1a374 extends Twig_Template
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
        $__internal_5040cdb0c267e93cce143f90682ecb52aff621a7380857bac3bbb3fc7a2a3339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5040cdb0c267e93cce143f90682ecb52aff621a7380857bac3bbb3fc7a2a3339->enter($__internal_5040cdb0c267e93cce143f90682ecb52aff621a7380857bac3bbb3fc7a2a3339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d4f6ad99d27dca3fe67a6d3faea9dbf888b3e04041d2031275563dca7611715c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f6ad99d27dca3fe67a6d3faea9dbf888b3e04041d2031275563dca7611715c->enter($__internal_d4f6ad99d27dca3fe67a6d3faea9dbf888b3e04041d2031275563dca7611715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5040cdb0c267e93cce143f90682ecb52aff621a7380857bac3bbb3fc7a2a3339->leave($__internal_5040cdb0c267e93cce143f90682ecb52aff621a7380857bac3bbb3fc7a2a3339_prof);

        
        $__internal_d4f6ad99d27dca3fe67a6d3faea9dbf888b3e04041d2031275563dca7611715c->leave($__internal_d4f6ad99d27dca3fe67a6d3faea9dbf888b3e04041d2031275563dca7611715c_prof);

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
", "@Framework/Form/form_errors.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
