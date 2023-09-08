<?php

class student { 
    public ?int $id;
    public ?int $grad_id;
    public ?string $email;
    public ?string $fullname;
    public ?datetime $birthdate;
    public ?string $gender;

    public function __construct(int $a = 1, int $b = 2, string $c = "student@gmail.com", string $d = 'Warda Mohtaj', DateTime $e = new DateTime('2023-08-09'), string $f = "female")
    
    {
        $this->id = $a;
        $this->grad_id = $b;
        $this->email = $c;
        $this->fullname = $d;
        $this->birthdate = $e;
        $this->gender = $f;
    }
}



