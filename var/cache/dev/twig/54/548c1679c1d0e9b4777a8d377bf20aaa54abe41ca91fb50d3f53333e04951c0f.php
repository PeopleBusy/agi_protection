<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d9bddbe6214205f8db0d31ae6be0b9604942bdace699f668442b313b4f380e25 extends Twig_Template
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
        $__internal_fc69f5734895672e5acf613e9e539395485d89a810ead3b33391c94551745e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc69f5734895672e5acf613e9e539395485d89a810ead3b33391c94551745e9a->enter($__internal_fc69f5734895672e5acf613e9e539395485d89a810ead3b33391c94551745e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_61bb825995226b79bba4319339bac8d1d21fc849046a4931050c9dc442a419ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61bb825995226b79bba4319339bac8d1d21fc849046a4931050c9dc442a419ad->enter($__internal_61bb825995226b79bba4319339bac8d1d21fc849046a4931050c9dc442a419ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fc69f5734895672e5acf613e9e539395485d89a810ead3b33391c94551745e9a->leave($__internal_fc69f5734895672e5acf613e9e539395485d89a810ead3b33391c94551745e9a_prof);

        
        $__internal_61bb825995226b79bba4319339bac8d1d21fc849046a4931050c9dc442a419ad->leave($__internal_61bb825995226b79bba4319339bac8d1d21fc849046a4931050c9dc442a419ad_prof);

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
