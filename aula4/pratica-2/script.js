function adicionarMedia() {
    const notas = document.querySelectorAll("td.nota");
    const linhas = document.querySelectorAll("tbody tr");
    const qtdAlunos = linhas.length;
    const qtdNotas = notas.length / qtdAlunos;

    const novaLinha = document.createElement("tr");
    novaLinha.innerHTML = "<td>Médias</td>";

    for (let col = 0; col < qtdNotas; col++) {
        let soma = 0;

        for (let i = 0; i < qtdAlunos; i++) {
            soma += Number(notas[i * qtdNotas + col].textContent);
        }

        novaLinha.innerHTML += `<td>${(soma / qtdAlunos).toFixed(2)}</td>`;
    }

    document.querySelector("tbody").appendChild(novaLinha);
}

let verifica = false;

function adicionarMediaPorAluno() {
    if (verifica) return;

    const linhas = document.querySelectorAll("tbody tr");

    linhas.forEach(linha => {
        const notas = linha.querySelectorAll("td.nota");
        let soma = 0;

        notas.forEach(n => soma += Number(n.textContent));

        const media = soma / notas.length;

        const td = document.createElement("td");
        td.textContent = media.toFixed(2);

        linha.appendChild(td);
    });

    const cabecalho = document.querySelector("thead tr:nth-child(2)");
    const novaColuna = document.createElement("td");
    novaColuna.textContent = "Médias";
    cabecalho.appendChild(novaColuna);

    verifica = true;
}
