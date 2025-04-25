// Função assíncrona recebendo os parâmetros: rota da URL e o ID do registro (produto)
async function deleteRegistroPaginacao(rotaUrl, idDoRegistro) {
    
    // Quando for deletar, se o usuário clicar em "Cancelar", a função simplesmente retorna (não faz nada)
    if (!confirm('Deseja confirmar a exclusão?')) return;

    // Se confirmar, continua o processo
    try {
        // Busca o token CSRF do Laravel no HTML (proteção contra ataques externos)
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Envia a requisição DELETE com as configurações necessárias
        const response = await fetch(rotaUrl, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json', // Diz ao servidor que o corpo da requisição está em formato JSON
                'X-CSRF-TOKEN': csrfToken           // Envia o token CSRF como segurança
            },
            body: JSON.stringify({ id: idDoRegistro }) // Converte o objeto JS em string JSON: '{ "id": 5 }'
        });

        // Espera a resposta do servidor e converte ela de JSON para objeto JS
        const data = await response.json();

        // Se a resposta indicar sucesso, recarrega a página
        if (data.success) {
            location.reload();
        } else {
            alert('Não foi possível excluir.');
        }

    } catch (error) {
        // Em caso de erro (ex: falha na rede, erro do servidor), exibe alerta e loga o erro no console
        alert('Erro ao processar a exclusão.');
        console.error(error);
    }
}

