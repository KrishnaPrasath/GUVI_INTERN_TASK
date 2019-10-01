<?php

    class QueryBuilder
    {
        protected $pdo;

        protected $table = 'user';

        protected $postQuery = 'INSERT INTO user (email,password) VALUES (?,?);';

        protected $authQuery = 'SELECT * FROM user WHERE email =? AND password=?;';

        protected $getData = 'SELECT * FROM user';

        public function __construct($pdo)
        {
            $this->pdo = $pdo;
        }
        
        public function postData($email,$password)
        {
            $statement = $this->pdo->prepare($this->postQuery);

            return $statement->execute([$email,$password]);

        }

        public function auth($email,$password)
        {
            $statement = $this->pdo->prepare($this->authQuery);

            $statement->execute([$email,$password]);

            $result = $statement->fetchAll();

            var_dump($statement->fetch());

            return $result;
        }

        public function getData()
        {
            $statement = $this->pdo->prepare($this->getData);

            $statement->execute();

            $results = $statement->fetchAll();

            return $results;
        }

    }