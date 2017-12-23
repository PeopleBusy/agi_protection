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
        $__internal_2c5c72a07d16b1b5cc3314ad9782f4364b3bc57d34eb71d284066cd4f00bfbab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5c72a07d16b1b5cc3314ad9782f4364b3bc57d34eb71d284066cd4f00bfbab->enter($__internal_2c5c72a07d16b1b5cc3314ad9782f4364b3bc57d34eb71d284066cd4f00bfbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9188ad1724fb5e3704f677a3387b53524e28bf74503a74da31481e792d1072de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9188ad1724fb5e3704f677a3387b53524e28bf74503a74da31481e792d1072de->enter($__internal_9188ad1724fb5e3704f677a3387b53524e28bf74503a74da31481e792d1072de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2c5c72a07d16b1b5cc3314ad9782f4364b3bc57d34eb71d284066cd4f00bfbab->leave($__internal_2c5c72a07d16b1b5cc3314ad9782f4364b3bc57d34eb71d284066cd4f00bfbab_prof);

        
        $__internal_9188ad1724fb5e3704f677a3387b53524e28bf74503a74da31481e792d1072de->leave($__internal_9188ad1724fb5e3704f677a3387b53524e28bf74503a74da31481e792d1072de_prof);

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
