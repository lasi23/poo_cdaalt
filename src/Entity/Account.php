<?php

    namespace App\Entity;

    class Account{
        private int $id;
        private string $firstname;
        private string $lastname;
        private string $email;
        private string $password;
        private ?string $role;
        private ?string $img;
        
        public function __construct(string $firstname, string $lastname, string $email, string $password, string $role, string $img){
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->password = $password;
        }
        /**
         * Get the value of id
         *
         * @return int
         */
        public function getId(): int {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @param int $id
         *
         * @return self
         */
        public function setId(int $id): self {
                $this->id = $id;
                return $this;
        }

        /**
         * Get the value of firstname
         *
         * @return string
         */
        public function getFirstname(): string {
                return $this->firstname;
        }

        /**
         * Set the value of firstname
         *
         * @param string $firstname
         *
         * @return self
         */
        public function setFirstname(string $firstname): self {
                $this->firstname = $firstname;
                return $this;
        }

        /**
         * Get the value of lastname
         *
         * @return string
         */
        public function getLastname(): string {
                return $this->lastname;
        }

        /**
         * Set the value of lastname
         *
         * @param string $lastname
         *
         * @return self
         */
        public function setLastname(string $lastname): self {
                $this->lastname = $lastname;
                return $this;
        }

        /**
         * Get the value of email
         *
         * @return string
         */
        public function getEmail(): string {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @param string $email
         *
         * @return self
         */
        public function setEmail(string $email): self {
                $this->email = $email;
                return $this;
        }

        /**
         * Get the value of password
         *
         * @return string
         */
        public function getPassword(): string {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @param string $password
         *
         * @return self
         */
        public function setPassword(string $password): self {
                $this->password = $password;
                return $this;
        }

        /**
         * Get the value of role
         *
         * @return string
         */
        public function getRole(): string {
                return $this->role;
        }

        /**
         * Set the value of role
         *
         * @param string $role
         *
         * @return self
         */
        public function setRole(string $role): self {
                $this->role = $role;
                return $this;
        }

        /**
         * Get the value of img
         *
         * @return string
         */
        public function getImg(): string {
                return $this->img;
        }

        /**
         * Set the value of img
         *
         * @param string $img
         *
         * @return self
         */
        public function setImg(string $img): self {
                $this->img = $img;
                return $this;
        }
    }

?>
