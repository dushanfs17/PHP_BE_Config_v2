<?php declare(strict_types=1);


namespace Coalition\Exam;


class Skill
{
    protected array $properties = [];

    public function __set(string $name, mixed $value): void
    {
        $this->properties[$name] = $value;
    }

    public function __get(string $name): mixed
    {
        if (array_key_exists($name, $this->properties)) {
            return $this->shouldEncryptProperty($name)
                ? $this->encrypt($this->properties[$name])
                : $this->properties[$name];
        }

        if ($this->shouldEncryptProperty($name)) {
            return $this->encrypt($name);
        }

        return null;
    }

    public function __call(string $name, array $arguments): mixed
    {
        return $this->isExistMethod($name) ? 'exist' : 'not exist';
    }

    public function __invoke(array $nums): int
    {
        return array_sum($nums);
    }

    public function __toString(): string
    {

        return "SkillObject_CT";
    }

    protected function isExistMethod(string $method): bool
    {
        return str_starts_with($method, 'has');
    }

    protected function shouldEncryptProperty(string $property): bool
    {
        return str_ends_with($property, '_CT');
    }

    protected function encrypt(mixed $value): string
    {
        return md5((string)$value);
    }
}
