</main>
    <footer>
       
        <?php 
        date_default_timezone_set("America/Sao_Paulo");
        $dataHora = date('d/m/Y H:i'); 
        
        ?>
         <p>Site criado para o curso de <b>Técnico em Informática para Internet</b>.</p>
        <p>Senac Penha &copy; 2022. Acesso em: <?= $dataHora?></p>
    </footer>
    </body>
</html>