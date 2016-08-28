<?php
    class UserModel
    {
        protected $mysql;
        function __construct()
        {
           $this->mysql = new mysqli('localhost', 'root', '', 'HomeWork4');

            if ($this->mysql->errno)
            {
                die($this->mysql->error);
            }

            $this->mysql->query('SET NAMES UTF-8');
        }

        public function is_username_exist($username)
        {
            $select = "SELECT username FROM `users`";
            $result = $this->mysql->query($select);
            $logins = $result->fetch_all(MYSQLI_ASSOC);

            foreach ($logins as $key => $logarr)
            {
                foreach ($logarr as $login)
                {
                    if ($username == $login)
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }

            }
        }

        public function addUser($input)
        {
            $query = "INSERT INTO users(`username`, `password`, `name`, `age`, `about`, `Img`) VALUES (?,?,?,?,?,?)";
            $adduser = $this->mysql->prepare($query);
            if ($adduser->bind_param('sssiss', $input['username'], $input['password'], $input['name'], $input['age'],
                $input['about'], $input['Img']))
            {
                $adduser->execute();
                return true;
            }

        }
    }