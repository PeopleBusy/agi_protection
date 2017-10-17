<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_3f0f92ef45e987a7b971d996be4753337629f1039cc4fa952e43fc1c71a7aa8f extends Twig_Template
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
        $__internal_ab99007a9d50b9a38c402d2fbf29cd2c50a5b648eeb620ad42424a126eeb9d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab99007a9d50b9a38c402d2fbf29cd2c50a5b648eeb620ad42424a126eeb9d26->enter($__internal_ab99007a9d50b9a38c402d2fbf29cd2c50a5b648eeb620ad42424a126eeb9d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_eab2f2a4c2687e9bf676f30a367203e27fb1a1be42d335a4b65755fa48f58101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab2f2a4c2687e9bf676f30a367203e27fb1a1be42d335a4b65755fa48f58101->enter($__internal_eab2f2a4c2687e9bf676f30a367203e27fb1a1be42d335a4b65755fa48f58101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ab99007a9d50b9a38c402d2fbf29cd2c50a5b648eeb620ad42424a126eeb9d26->leave($__internal_ab99007a9d50b9a38c402d2fbf29cd2c50a5b648eeb620ad42424a126eeb9d26_prof);

        
        $__internal_eab2f2a4c2687e9bf676f30a367203e27fb1a1be42d335a4b65755fa48f58101->leave($__internal_eab2f2a4c2687e9bf676f30a367203e27fb1a1be42d335a4b65755fa48f58101_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
