<?php declare(strict_types=1);

namespace Somnambulist\Components\Validation\Rules;

class RequiredWithoutAll extends Required
{
    protected bool $implicit = true;
    protected string $message = 'rule.required_without_all';

    public function fillParameters(array $params): self
    {
        $this->params['fields'] = $params;

        return $this;
    }

    public function check($value): bool
    {
        $this->assertHasRequiredParameters(['fields']);

        $fields            = $this->parameter('fields');
        $requiredValidator = $this->validation->factory()->rule('required');

        foreach ($fields as $field) {
            if ($this->validation->input()->has($field)) {
                return true;
            }
        }

        $this->setAttributeAsRequired();

        return $requiredValidator->check($value);
    }
}
