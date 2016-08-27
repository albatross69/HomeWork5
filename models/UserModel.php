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

        public function getUsers()
        {
            $query = $this->mysql->query('SELECT id, username, name, age, about FROM users');
            $res = $query->fetch_all(MYSQLI_ASSOC);

            echo "<table border='1' style='collapse: 5'>
                    <tr>
                        <th>id</th>
                        <th>username</th>
                        <th>fullname</th>
                        <th>age</th>
                        <th>about</th>
                    <tr/>
            ";
            foreach ($res as $row => $info)
            {   echo "<tr>";
                foreach ($info as $cell)
                {
                    echo "
                        <td>$cell</td>
                    ";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }