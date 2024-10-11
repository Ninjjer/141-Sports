<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./contato.css">
    <title>Document</title>
</head>

<body>

    <div id="tarja-contato">
        <p>Contato</p>
    </div>

    <section id="contato">
        <div id="text-contato">
            <h1>Entre em contato conosco!</h1>
            <p>Para mais informações sobre nossa loja online de camisetas </br> futebol, por favor, entre em contato conosco através dos </br> meios abaixo.</p>
            <h4>Atendimento</h4>
            <img src="./templates/icones/whatsapp.png" alt="logoWhatsapp"> 
            <p>67 - 99999-9999</p>
            <h4>Email</h4>
            <p>contato@empresa.com</p>
        </div>

        <div id="form-contato">
            <form action="" method="POST">

            <label for="nomeContato">Nome:</label>
            <input type="text" name="nomeContato" id="nomeContato">
            
            <label for="emailContato">Email de contato: </label>
            <input type="email" name="emailContato" id="emailContato">

            <label for="textareaContato">Mensagem para 141sports:</label>
            <input type="text" name="textareaContato" id="textareaContato">

            <button type="submit">Enviar Mensagem</button>

            </form>
        </div>
    </section>

</body>

</html>