<?php
class conexao
{
    private $host = "trabalhom2.mysql.database.azure.com";
    private $dbname = "escola";
    private $user = "grupao";
    private $pass = "tJR%4ni5R#4y";
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro ao conectar com o banco: " . $e->getMessage();
        }
    }

    public function executar($sql)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }
}
