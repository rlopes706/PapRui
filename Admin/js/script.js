function confirmaElimina(perId) {
    let r=confirm("Tem a certeza que quer eliminar o registo #"+ perId +"?");
    if (r == true) {
        window.location.href = "eliminar_percursos.php?id="+perId;
    }
}
