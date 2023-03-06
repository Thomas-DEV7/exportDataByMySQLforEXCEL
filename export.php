<?php
include_once('conect.php');

 header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=relatorio".date('Y-m-d').".xls");
 header("Pragma: no-cache");
 
$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $sql);
        echo "<html>";
        echo "<style>";
        echo "*{text-align: center};";
        echo "</style>";
        echo "<link rel='stylesheet' href='https://unpkg.com/tailwindcss@2.2.15/dist/tailwind.min.css'>";
        echo "<table id='dados' style='width: 1000px;'>";
        echo "<thead>";
        echo "<tr class='bg-gray-100'>";
        echo "<th class='px-4 py-2'>ID</th>";
        echo "<th class='px-4 py-2'>Nome</th>";
        echo "<th class='px-4 py-2'>E-mail</th>";
        echo "<th class='px-4 py-2'>Whatsapp</th>";
        echo "<th class='px-4 py-2'>Elegivel</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

  // Itera sobre cada linha do resultado e exibe os dados em uma linha da tabela com as classes do Tailwind CSS
        while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr class='border-b text-center'>";
        echo "<td class='px-4 py-2 text-center'>" . $linha["id"] . "</td>";
        echo "<td class='px-4 py-2'>" . $linha["nome"] . "</td>";
        echo "<td class='px-4 py-2'>" . $linha["email"] . "</td>";
        echo "<td class='px-4 py-2'>" . $linha["whatsapp"] . "</td>";
        echo "<td class='px-4 py-2'>" . $linha["elegivel"] . "</td>";
        echo "</tr>";
        }
        echo "</html>";

 header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=relatorioDoForm".date('Y-m-d').".xls");
 header("Pragma: no-cache");
 
 mysqli_close($conexao);
?>