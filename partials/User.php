<?php
require_once('Database.php');

class User extends Database
{
    protected $tableName = 'usertable';

    // function to add users
    public function add($data)
    {
        if (!empty($data)) {
            print_r($data);
            $fields = $placeholder = [];
            foreach ($data as $field => $value) {
                $fields[] = $field;
                $placeholder[] = ':{$field}';
            }
        }

        // $sql = 'INSERT INTO {$this -> tableName} (pname email mobile) VALUES(:pname, :email, :mobile)';
        $sql = "INSERT INTO {$this->tableName} (" . implode(',', $fields) . ") VALUES (" . implode(',', $placeholder) . ")";

        print_r($sql);

        $stmt = $this->conn->prepare($sql);


        try {
            $this->conn->beginTransaction();

            $stmt->execute($data);

            $lastInsertedId = $this->conn->lastInsertId();

            $this->conn->commit();

            return $lastInsertedId;
        } catch (PDOException $e) {
            echo 'Connection Error' . $e->getMessage();
            $this->conn->rollBack();

        }

    }

    // function to get users/rows
    public function get_rows($start = 0, $limit = 4)
    {
        $sql = "SELECT * FROM {$this->tableName} ORDER BY DESC LIMIT {$start}, {$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }

        return $results;

    }

    // function to get single user/row

    public function getRow($field, $value)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE {$field} = :{$field}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            $result = [];
        }

        return $result;
    }

    // function to count number of users/rows
    public function getCount()
    {
        $sql = "SELECT count(*) as pcount FROM {$this->tableName}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['pcount'];
    }

    // function to upload photo
    public function uploadPhoto($file)
    {
        if (!empty($file)) {
            $fileTempPath = $file['tmp_name'];
            $fileNameWithExtension = $file['name'];
            $fileType = $file['type'];
            $fileNameWithExtentionArray = explode('.', $fileNameWithExtension);
            $fileExtension = strtolower(end($fileNameWithExtentionArray));

            $newFileName = md5(time() . $fileNameWithExtension) . '.' . $fileExtension;

            $allowedExtn = ['png', 'jpg', 'jpeg'];

            if (in_array($fileExtension, $allowedExtn)) {
                $uploadFileDir = getcwd() . '/uploads/';
                $destFilePath = $uploadFileDir . $newFileName;
                if (move_uploaded_file($fileTempPath, $destFilePath)) {
                    return $newFileName;
                }
            }
        }
    }

// function to update

// function to delete

// function for searching user


}
?>