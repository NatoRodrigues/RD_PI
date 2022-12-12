<?xml version="1.0" encoding="utf-8"?>
<!--
- phpMyAdmin XML Dump
- version 5.2.0
- https://www.phpmyadmin.net
-
- Host: 127.0.0.1
- Tempo de geração: 12-Dez-2022 às 04:33
- Versão do servidor: 10.4.25-MariaDB
- versão do PHP: 8.1.10
-->

<pma_xml_export version="1.0" xmlns:pma="https://www.phpmyadmin.net/some_doc_url/">
    <!--
    - Structure schemas
    -->
    <pma:structure_schemas>
        <pma:database name="bancotalentos" collation="utf8mb4_general_ci" charset="utf8mb4">
            <pma:table name="candidatos">
                CREATE TABLE `candidatos` (
                  `id` int(11) NOT NULL AUTO_INCREMENT,
                  `name` varchar(50) NOT NULL,
                  `email` varchar(50) NOT NULL,
                  `endereco` varchar(50) NOT NULL,
                  PRIMARY KEY (`id`)
                ) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
            </pma:table>
        </pma:database>
    </pma:structure_schemas>

    <!--
    - Banco de dados: 'bancotalentos'
    -->
    <database name="bancotalentos">
        <!-- Tabela candidatos -->
        <table name="candidatos">
            <column name="id">2</column>
            <column name="name">Renato rodrigues</column>
            <column name="email">renatornjunior@gmail.com</column>
            <column name="endereco">Av. visconde Suassuna 114</column>
        </table>
        <table name="candidatos">
            <column name="id">3</column>
            <column name="name">João vitor</column>
            <column name="email">renatornjunior@gmail.com</column>
            <column name="endereco">Boa vista, recife 112</column>
        </table>
        <table name="candidatos">
            <column name="id">6</column>
            <column name="name">Renato rodrigues</column>
            <column name="email">renato12@gmail.com</column>
            <column name="endereco">rua da aurora 112</column>
        </table>
        <table name="candidatos">
            <column name="id">8</column>
            <column name="name">renato rodrigues</column>
            <column name="email">renato123@gmail.com</column>
            <column name="endereco">rua da moeda 2313</column>
        </table>
        <table name="candidatos">
            <column name="id">11</column>
            <column name="name">Marcelo albuquerque</column>
            <column name="email">marceloalb@gmail.com</column>
            <column name="endereco">rua real da torre 224</column>
        </table>
        <table name="candidatos">
            <column name="id">12</column>
            <column name="name">Renato Rodrigues</column>
            <column name="email">renato2323@gmail.com</column>
            <column name="endereco">Rua visconde suassuna 22</column>
        </table>
    </database>
</pma_xml_export>