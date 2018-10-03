<?php

namespace App\Twig;

use Symfony\Component\Form\FormView;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class FormExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_form_view_parent', [$this, 'getFormViewParent']),
        ];
    }

    public function getFormViewParent(FormView $formView): ?FormView
    {
    	return $formView->parent;
    }
}
