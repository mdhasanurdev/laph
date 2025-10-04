<?php

class User {
    public function __construct(
        public readonly string $name,
        public readonly string $email
    ) {}
}

$user = new User("Hasan", "hasan@gmail.com");
echo $user->name . "\n";
echo $user->email . "\n";