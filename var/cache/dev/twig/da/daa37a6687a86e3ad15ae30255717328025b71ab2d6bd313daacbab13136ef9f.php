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
        $__internal_f1baa7fe55e57cf086dd235b458b63ba1f38c284de1dae778d5a857cf078f599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1baa7fe55e57cf086dd235b458b63ba1f38c284de1dae778d5a857cf078f599->enter($__internal_f1baa7fe55e57cf086dd235b458b63ba1f38c284de1dae778d5a857cf078f599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_3a612bd13c41c8a497126b9fafcef5b5fde44f52632d4e1f730a2f52cb31726c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a612bd13c41c8a497126b9fafcef5b5fde44f52632d4e1f730a2f52cb31726c->enter($__internal_3a612bd13c41c8a497126b9fafcef5b5fde44f52632d4e1f730a2f52cb31726c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f1baa7fe55e57cf086dd235b458b63ba1f38c284de1dae778d5a857cf078f599->leave($__internal_f1baa7fe55e57cf086dd235b458b63ba1f38c284de1dae778d5a857cf078f599_prof);

        
        $__internal_3a612bd13c41c8a497126b9fafcef5b5fde44f52632d4e1f730a2f52cb31726c->leave($__internal_3a612bd13c41c8a497126b9fafcef5b5fde44f52632d4e1f730a2f52cb31726c_prof);

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
", "@Framework/Form/form_errors.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
