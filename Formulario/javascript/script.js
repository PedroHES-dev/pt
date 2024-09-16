
function login() {
    const cargo = document.getElementById('cargo').value;
    const password = document.getElementById('password').value;

    if (password === '1234') { // Senha fictícia
        // Redirecionar para a página de seleção de tipo de trabalho
        window.location.href = `selecao.html?cargo=${cargo}`;
    } else {
        alert('Senha incorreta!');
    }
}

function confirmarTrabalho() {
    const tipoTrabalho = document.getElementById('tipoTrabalho').value;

    if (tipoTrabalho) {
        // Redirecionar para a página correspondente ao tipo de trabalho
        window.location.href = `${tipoTrabalho}.html`;
    } else {
        alert('Selecione um tipo de trabalho.');
    }
}